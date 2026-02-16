# Crickmaths

A Laravel-based educational cricket game that combines live cricket match data with math practice questions. Students answer math questions based on real-time cricket match statistics, making learning fun and engaging.

## Table of Contents

- [Overview](#overview)
- [API Layer Architecture](#api-layer-architecture)
- [Practice Mode](#practice-mode)
- [Project Structure](#project-structure)
- [Database Schema](#database-schema)
- [Setup Instructions](#setup-instructions)
- [Configuration](#configuration)
- [Routes and Controllers](#routes-and-controllers)
- [Key Features](#key-features)

## Overview

Crickmaths is an educational platform that gamifies math learning by integrating live cricket match data. The application fetches real-time cricket match information from external APIs, stores it in a database, and uses this data to generate math questions for students. Additionally, it includes a Practice Mode where students can practice math questions without needing a live match.

The application is built with Laravel (PHP framework) and uses a service-oriented architecture to handle API integrations, data transformation, and database operations.

## API Layer Architecture

The API layer is the core component that handles all cricket data fetching, processing, and storage. It's designed with reliability, scalability, and maintainability in mind.

### Service Layer Design

The API layer is implemented using a **Service Pattern** with the `CricketApiService` class located at `app/Services/CricketApiService.php`. This service acts as a centralized interface for all cricket data operations, abstracting away the complexity of dealing with multiple API providers.

#### Key Design Principles

1. **Abstraction**: Controllers don't directly interact with external APIs. Instead, they use the `CricketApiService` which provides a clean, consistent interface.

2. **Separation of Concerns**: The service handles API communication, data transformation, and error handling, while controllers focus on business logic and view rendering.

3. **Single Responsibility**: Each method in the service has a specific purpose - fetching live matches, getting scorecards, or mapping data formats.

### API Providers and Fallback Mechanism

The system supports multiple cricket data providers with an intelligent fallback mechanism to ensure high availability.

#### Primary Provider: Cricbuzz API

The primary API provider is **Cricbuzz**, accessed through RapidAPI. This provider offers:
- **Base URL**: `https://cricbuzz-cricket2.p.rapidapi.com`
- **Endpoints**:
  - Live Matches: `/matches/v1/live`
  - Scorecard: `/mcenter/v1/{matchId}/scard`
- **Authentication**: Uses RapidAPI headers (`X-RapidAPI-Host` and `X-RapidAPI-Key`)
- **Timeout**: 30 seconds per request

#### Backup Provider: CricketData API

The backup provider is **CricketData API** (cricapi.com), which serves as a fallback when the primary API fails:
- **Base URL**: `https://api.cricapi.com/v1`
- **Endpoints**:
  - Live Matches: `/currentMatches`
  - Scorecard: `/match_info`
- **Authentication**: Uses API key as a query parameter
- **Timeout**: 30 seconds per request

#### Fallback Logic

The fallback mechanism works as follows:

1. **Priority Order**: The system tries providers in the order specified in `config/cricket.php` (default: `['cricbuzz', 'backup']`).

2. **Error Handling**: If a provider fails (network error, timeout, invalid response), the system:
   - Logs a warning with the error message
   - Automatically tries the next provider in the priority list
   - Continues until a provider succeeds or all providers are exhausted

3. **Graceful Degradation**: If all providers fail, the system returns an empty array and logs an error, allowing the application to continue functioning (though without match data).

4. **No User Impact**: The fallback happens transparently - users don't see errors, and the application continues to work with whatever data is available.

### Data Fetching Methods

The `CricketApiService` provides three main public methods:

#### 1. `getLiveMatches()`

Fetches all currently live cricket matches from the API providers.

**Process Flow**:
1. Iterates through providers in priority order
2. For each provider, calls the provider-specific method (`getCricbuzzLiveMatches()` or `getBackupLiveMatches()`)
3. If successful, maps the response to a standardized format
4. Returns the mapped data or tries the next provider

**Return Format**: Array of match objects with standardized structure:
```php
[
    'match_id' => string,
    'type' => string (T20, ODI, etc.),
    'match_type' => string (series name),
    'is_live' => string (live, completed, upcoming),
    'result' => string (status message),
    'match_location' => string (venue),
    'team_details' => array (team scores and information)
]
```

#### 2. `getFeaturedMatches()`

Fetches featured matches for display on the homepage. This method:
- Uses the same fallback mechanism as `getLiveMatches()`
- Transforms the data into a format expected by the frontend
- Returns matches in a nested structure: `['data' => ['featurematch' => [...]]]`

**Use Case**: Homepage display, match selection interface

#### 3. `getScorecard($matchId)`

Fetches detailed scorecard information for a specific match.

**Process Flow**:
1. Takes a match ID as parameter
2. Tries each provider in priority order
3. For Cricbuzz: Replaces `{matchId}` placeholder in the endpoint URL
4. For CricketData: Passes match ID as a query parameter
5. Maps the response to a standardized scorecard format
6. Returns detailed match data including:
   - Batting statistics (runs, balls, strike rate, dismissal info)
   - Bowling statistics (overs, runs, wickets, economy)
   - Extras (byes, leg byes, wides, no balls)
   - Fall of wickets (FOW)
   - Team totals and run rates

**Return Format**: Nested structure with full scorecard:
```php
[
    'data' => [
        'getScoreCard' => [
            'fullScoreCard' => [
                [
                    'battingTeamID' => int,
                    'battingTeamName' => string,
                    'runsScored' => int,
                    'wickets' => int,
                    'overs' => float,
                    'batting' => array,
                    'bowling' => array,
                    'extras' => array,
                    'fow' => array,
                    // ... more fields
                ]
            ]
        ]
    ]
]
```

### Data Mapping and Transformation

One of the most critical aspects of the API layer is **data normalization**. Different API providers return data in different formats, so the service includes comprehensive mapping functions to convert all responses into a standardized format.

#### Cricbuzz Data Mapping

**Live Matches Mapping** (`mapCricbuzzLiveMatchesToFormat`):
- Extracts matches from nested structure: `typeMatches → seriesMatches → matches`
- Filters out Test matches (only T20, ODI, etc.)
- Maps match status: `In Progress` → `live`, `Complete` → `completed`, `Stumps` → `live`
- Extracts team information and scores from `matchScore` object
- Handles multiple innings and selects the latest one for each team
- Combines venue information (ground + city)

**Scorecard Mapping** (`mapCricbuzzScorecardToFormat`):
- Processes each innings in the scorecard array
- Maps batting data: player names, runs, balls, fours, sixes, strike rate, dismissal info
- Maps bowling data: overs, runs, wickets, maidens, economy, dot balls
- Extracts extras: byes, leg byes, wides, no balls, penalties
- Processes fall of wickets with player information and over/ball details
- Handles captain and wicket-keeper flags
- Calculates run rates and projections

#### CricketData API Mapping

**Live Matches Mapping** (`mapCricketDataLiveMatchesToFormat`):
- Processes array of match objects
- Filters out Test matches
- Extracts team information from `teamInfo` array
- Maps scores from `score` array
- Determines match status from `matchStarted` and `matchEnded` flags
- Extracts series name from match name string

**Scorecard Mapping** (`mapCricketDataScorecardToFormat`):
- Creates minimal scorecard structure (CricketData provides less detail than Cricbuzz)
- Extracts basic score information (runs, wickets, overs)
- Calculates run rate from runs and overs
- Creates placeholder arrays for detailed statistics (not available in this API)

### Error Handling and Logging

The API layer implements comprehensive error handling:

1. **Exception Catching**: Each API call is wrapped in try-catch blocks
2. **Logging**: All errors are logged using Laravel's Log facade:
   - Warnings for individual provider failures
   - Errors when all providers fail
   - Includes error messages and context (match ID, provider name)
3. **Graceful Failure**: Errors don't crash the application - they trigger fallback or return empty data
4. **HTTP Status Checking**: Validates HTTP response status codes before processing
5. **Response Validation**: Checks for required fields in API responses before mapping

### Database Storage

After fetching data from APIs, the system stores it in the database for quick access and to reduce API calls.

#### Match ID Conversion

One critical challenge is that API providers return match IDs as UUIDs (long strings), but the database `match_id` column is an integer. The system includes a conversion function:

**`convertMatchIdToInteger($matchId)`** in `PublicController`:
- If the ID is already numeric, ensures it fits in INT range using modulo
- If it's a UUID, uses `crc32()` hash function to convert to integer
- Applies modulo operation to ensure the value fits in signed INT range (-2,147,483,648 to 2,147,483,647)
- This ensures database compatibility without schema changes

#### Storage Process

1. **Live Matches Table** (`lives` table):
   - Stores basic match information: type, match_type, match_id, is_live, result, match_location
   - Stores team_details as JSON: array of teams with scores
   - Uses `updateOrCreate` to update existing matches or create new ones

2. **Live Matches Detail Table** (`livematches` table):
   - Stores detailed scorecard information for each innings
   - One record per match per batting team
   - Stores complex data as JSON: batting array, bowling array, extras, FOW, etc.
   - Links to `lives` table via `match_id`

3. **Update Strategy**:
   - Uses `updateOrCreate` with composite keys (match_id + battingTeamID)
   - Updates existing records if match already exists
   - Creates new records for new matches or innings

### Automatic Data Updates (Cron Job)

The system includes an automated data fetching mechanism via the `getDataAuto()` method in `PublicController`.

#### How It Works

1. **Cron Job Setup**: The route `/cron` calls `getDataAuto()` method
2. **Scheduled Execution**: Server cron job calls this endpoint periodically (e.g., every 5 minutes)
3. **Fetch Process**:
   - Calls `CricketApiService->getFeaturedMatches()` to get current matches
   - Filters out Test matches
   - For each match:
     - Converts match ID to integer
     - Fetches detailed scorecard using `getScorecard()`
     - Updates or creates records in `lives` table
     - Updates or creates detailed scorecard in `livematches` table
4. **Error Handling**: Wrapped in try-catch to prevent cron job failures

#### Benefits

- Keeps database up-to-date with latest match information
- Reduces API calls during user requests (data is pre-fetched)
- Improves response times (serving from database is faster than API calls)
- Handles API failures gracefully without affecting user experience

### API Configuration

All API settings are centralized in `config/cricket.php`:

```php
'cricbuzz' => [
    'api_key' => env('CRICBUZZ_API_KEY'),
    'base_url' => env('CRICBUZZ_BASE_URL', 'https://cricbuzz-cricket2.p.rapidapi.com'),
    'host' => env('CRICBUZZ_HOST', 'cricbuzz-cricket2.p.rapidapi.com'),
    'endpoints' => [
        'live_matches' => '/matches/v1/live',
        'scorecard' => '/mcenter/v1/{matchId}/scard',
    ],
],
'backup' => [
    'api_key' => env('CRICKETDATA_API_KEY'),
    'base_url' => env('CRICKETDATA_BASE_URL', 'https://api.cricapi.com/v1'),
    'endpoints' => [
        'live_matches' => '/currentMatches',
        'scorecard' => '/match_info',
    ],
],
'priority' => ['cricbuzz', 'backup'],
```

This configuration allows:
- Easy switching between providers
- Environment-specific API keys (development vs production)
- Simple addition of new providers
- Centralized endpoint management

### Performance Considerations

1. **Caching**: Database storage acts as a cache layer, reducing API calls
2. **Timeout Settings**: 30-second timeout prevents hanging requests
3. **Efficient Queries**: Uses `updateOrCreate` to minimize database operations
4. **JSON Storage**: Complex nested data stored as JSON, reducing table complexity
5. **Lazy Loading**: Data fetched only when needed (on-demand for scorecards)

### Security Considerations

1. **API Key Protection**: API keys stored in `.env` file, never committed to repository
2. **Input Validation**: Match IDs validated before database queries
3. **SQL Injection Prevention**: Uses Eloquent ORM (parameterized queries)
4. **Error Message Sanitization**: Error logs don't expose sensitive information
5. **Rate Limiting**: Consider implementing rate limiting for API endpoints

## Practice Mode

Practice Mode is a standalone feature that allows students to practice math questions without requiring a live cricket match.

### Architecture

**No Database Dependency**: All practice questions are stored in a PHP data class (`app/Data/PracticeQuestions.php`), not in the database. This makes the feature:
- Fast (no database queries)
- Simple (no migrations needed)
- Portable (easy to add/remove questions)

### Question Structure

Questions are organized by grade level (3, 4, and 5), with 10 questions per grade. Each question includes:
- **Question Text**: The math problem (e.g., "What is 15 + 23?")
- **Choices**: Array of 4 multiple-choice options
- **Correct Answer**: Index of the correct choice (0-based)

### User Flow

1. **Grade Selection** (`/practice`):
   - User selects their grade (3, 4, or 5)
   - JavaScript enables the "Start Practice" button
   - Button sends AJAX request to `/practice/start`

2. **Question Loading** (`/practice/start`):
   - Server validates grade (must be 3, 4, or 5)
   - Retrieves questions for selected grade
   - Shuffles questions randomly for variety
   - Returns JSON with questions, grade, and total count

3. **Game Play** (`/practice/play`):
   - Frontend loads questions from sessionStorage
   - Displays one question at a time with progress bar
   - User selects an answer
   - JavaScript sends answer to `/practice/answer` via AJAX
   - Server validates answer and returns correctness
   - Frontend shows immediate feedback
   - User navigates through questions with Next/Back buttons

4. **Answer Validation** (`/practice/answer`):
   - Server receives question index, selected answer, grade, and all questions
   - Validates question index exists
   - Compares selected answer with correct answer
   - Returns JSON with correctness, correct answer, and selected answer

5. **Results Display** (`/practice/results`):
   - Results stored in browser's `sessionStorage` (not server)
   - JavaScript calculates score, percentage, correct/incorrect counts
   - Displays performance message based on score
   - Provides options to practice again or return home

### Client-Side Storage

Practice Mode uses browser `sessionStorage` to:
- Store questions and answers during the session
- Track user progress
- Calculate final results
- Persist data across page navigation

**Benefits**:
- No server-side session management needed
- Works without user authentication
- Data cleared when browser tab closes
- Fast and efficient

### Public Access

Practice Mode is accessible to everyone without:
- User registration
- Login authentication
- Database records
- Server-side session storage

This makes it ideal for:
- Quick practice sessions
- Guest users
- Testing and demos
- Educational purposes

## Project Structure

```
cricmaths.billionreaders.org/
├── app/
│   ├── Data/
│   │   └── PracticeQuestions.php      # Practice mode questions
│   ├── Http/
│   │   ├── Controllers/
│   │   │   ├── PublicController.php  # Main controller (API, matches, games)
│   │   │   └── PracticeController.php # Practice mode controller
│   │   └── Middleware/
│   ├── Models/                        # Eloquent models
│   │   ├── Live.php                   # Live matches model
│   │   ├── Livematch.php              # Detailed scorecard model
│   │   ├── User.php
│   │   ├── Score.php
│   │   └── ...
│   └── Services/
│       └── CricketApiService.php       # API service layer
├── config/
│   ├── app.php                        # App configuration (baseURL)
│   └── cricket.php                   # Cricket API configuration
├── database/
│   └── migrations/                    # Database migrations
├── resources/
│   └── views/
│       ├── practice/                  # Practice mode views
│       │   ├── index.blade.php        # Grade selection
│       │   ├── play.blade.php         # Game interface
│       │   └── results.blade.php      # Results display
│       ├── index.blade.php            # Homepage
│       ├── after-start.blade.php      # Match selection
│       └── ...
├── routes/
│   └── web.php                       # Application routes
└── README.md
```

## Database Schema

### Key Tables

#### `lives` Table
Stores basic live match information:
- `id`: Primary key
- `match_id`: Integer (converted from UUID)
- `type`: Match type (T20, ODI, etc.)
- `match_type`: Series name
- `is_live`: Status (live, completed, upcoming)
- `result`: Status message
- `match_location`: Venue information
- `team_details`: JSON array of team scores

#### `livematches` Table
Stores detailed scorecard information:
- `id`: Primary key
- `match_id`: Foreign key to lives table
- `battingTeamID`: ID of batting team
- `battingTeamName`: Name of batting team
- `runsScored`: Total runs
- `wickets`: Wickets fallen
- `overs`: Overs bowled
- `runRate`: Current run rate
- `batting`: JSON array of batsmen statistics
- `bowling`: JSON array of bowler statistics
- `extras`: JSON object of extras
- `fow`: JSON array of fall of wickets
- `total`: JSON object of team totals

#### Other Important Tables
- `users`: User accounts
- `scores`: User game scores
- `scoreboards`: Leaderboard data
- `questions`: Math questions for live games
- `answers`: User answers to questions

## Setup Instructions

### Prerequisites

- PHP >= 7.4
- Composer
- MySQL/MariaDB
- Node.js and NPM (for assets)
- Web server (Apache/Nginx) or PHP built-in server

### Installation Steps

1. **Clone the repository**:
   ```bash
   git clone <repository-url>
   cd cricmaths.billionreaders.org
   ```

2. **Install PHP dependencies**:
   ```bash
   composer install
   ```

3. **Install Node dependencies** (if needed):
   ```bash
   npm install
   ```

4. **Environment Configuration**:
   ```bash
   cp .env.example .env
   php artisan key:generate
   ```

5. **Configure `.env` file**:
   ```env
   APP_URL=http://localhost
   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=cricmaths
   DB_USERNAME=your_username
   DB_PASSWORD=your_password
   
   # Cricket API Keys
   CRICBUZZ_API_KEY=your_cricbuzz_api_key
   CRICBUZZ_BASE_URL=https://cricbuzz-cricket2.p.rapidapi.com
   CRICBUZZ_HOST=cricbuzz-cricket2.p.rapidapi.com
   
   CRICKETDATA_API_KEY=your_backup_api_key
   CRICKETDATA_BASE_URL=https://api.cricapi.com/v1
   ```

6. **Run migrations**:
   ```bash
   php artisan migrate
   ```

7. **Set up cron job** (for automatic match updates):
   ```bash
   # Add to crontab (runs every 5 minutes)
   */5 * * * * curl http://localhost/cron
   ```

8. **Start development server**:
   ```bash
   php artisan serve
   ```

9. **Access the application**:
   - Homepage: `http://localhost:8000`
   - Practice Mode: `http://localhost:8000/practice`

## Configuration

### API Configuration (`config/cricket.php`)

The cricket API configuration allows you to:
- Set API keys for different providers
- Configure base URLs and endpoints
- Set provider priority order
- Add new API providers easily

### Application Configuration (`config/app.php`)

Key settings:
- `baseURL`: Used throughout the application for generating URLs
- Set via `APP_URL` environment variable
- Defaults to `http://localhost`

## Routes and Controllers

### Main Routes

- `/` - Homepage (shows live matches)
- `/after-start` - Match selection page
- `/practice` - Practice mode grade selection
- `/practice/play` - Practice mode game interface
- `/practice/results` - Practice mode results
- `/cron` - Automated match data update endpoint
- `/liveScore` - AJAX endpoint for live match scores
- `/howzzat` - Cricket terminology page
- `/pavilion` - Cricket information page

### Key Controllers

**PublicController**:
- `getIndex()` - Homepage with live matches
- `getafterStart()` - Match selection interface
- `getDataAuto()` - Cron job for match updates
- `getliveScore()` - AJAX endpoint for scores
- `postAnswer()` - Process game answers
- `convertMatchIdToInteger()` - Match ID conversion utility

**PracticeController**:
- `index()` - Grade selection page
- `start()` - Initialize practice session
- `play()` - Game interface
- `submitAnswer()` - Validate answers
- `results()` - Results display

## Key Features

1. **Live Match Integration**: Real-time cricket match data
2. **Practice Mode**: Standalone math practice without matches
3. **Multi-Grade Support**: Questions for grades 3, 4, and 5
4. **Fallback API System**: Automatic failover between providers
5. **Automatic Updates**: Cron job keeps data fresh
6. **User Authentication**: Login system for tracking scores
7. **Leaderboards**: Score tracking and rankings
8. **Responsive Design**: Works on desktop and mobile devices

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
