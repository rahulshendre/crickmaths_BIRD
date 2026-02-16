@extends('layouts.app')
@section('content')
<link rel="stylesheet" href="{{config('app.baseURL')}}/assets/css/app.min.css">
<link rel="stylesheet" href="{{config('app.baseURL')}}/assets/css/fontawesome.min.css">
<link rel="stylesheet" href="{{config('app.baseURL')}}/assets/css/style.css">
<link href="https://fonts.googleapis.com/css2?family=Baloo+Da+2:wght@400..800&display=swap" rel="stylesheet">

<style>
* {
    font-family: "Baloo Da 2", sans-serif !important;
}

.results-container {
    max-width: 800px;
    margin: 50px auto;
    padding: 40px;
    text-align: center;
    min-height: 60vh;
}

.results-title {
    font-size: 2.5rem;
    color: #b70303;
    margin-bottom: 30px;
    font-weight: 600;
}

.score-card {
    background: linear-gradient(135deg, #b70303 0%, #950202 100%);
    color: white;
    padding: 40px;
    border-radius: 20px;
    margin-bottom: 30px;
    box-shadow: 0 10px 30px rgba(183, 3, 3, 0.3);
}

.score-number {
    font-size: 4rem;
    font-weight: 700;
    margin-bottom: 10px;
}

.score-label {
    font-size: 1.5rem;
    opacity: 0.9;
}

.stats-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 20px;
    margin: 30px 0;
}

.stat-card {
    background-color: #f8f9fa;
    padding: 25px;
    border-radius: 15px;
    border: 2px solid #ddd;
}

.stat-number {
    font-size: 2.5rem;
    font-weight: 700;
    color: #b70303;
    margin-bottom: 10px;
}

.stat-label {
    font-size: 1.1rem;
    color: #666;
    font-weight: 500;
}

.performance-message {
    font-size: 1.5rem;
    margin: 30px 0;
    padding: 20px;
    border-radius: 15px;
    font-weight: 600;
}

.performance-message.excellent {
    background-color: #d4edda;
    color: #155724;
    border: 3px solid #28a745;
}

.performance-message.good {
    background-color: #d1ecf1;
    color: #0c5460;
    border: 3px solid #17a2b8;
}

.performance-message.average {
    background-color: #fff3cd;
    color: #856404;
    border: 3px solid #ffc107;
}

.performance-message.needs-improvement {
    background-color: #f8d7da;
    color: #721c24;
    border: 3px solid #dc3545;
}

.action-buttons {
    display: flex;
    gap: 20px;
    justify-content: center;
    margin-top: 40px;
}

.btn {
    padding: 15px 40px;
    font-size: 1.2rem;
    border: none;
    border-radius: 25px;
    cursor: pointer;
    font-weight: 600;
    transition: all 0.3s ease;
    text-decoration: none;
    display: inline-block;
}

.btn-primary {
    background-color: #b70303;
    color: white;
}

.btn-primary:hover {
    background-color: #950202;
    transform: scale(1.05);
}

.btn-secondary {
    background-color: #6c757d;
    color: white;
}

.btn-secondary:hover {
    background-color: #5a6268;
    transform: scale(1.05);
}

@media (max-width: 768px) {
    .results-container {
        padding: 20px;
        margin: 20px auto;
    }
    
    .results-title {
        font-size: 2rem;
    }
    
    .score-number {
        font-size: 3rem;
    }
    
    .stats-grid {
        grid-template-columns: 1fr;
        gap: 15px;
    }
    
    .action-buttons {
        flex-direction: column;
        gap: 15px;
    }
    
    .btn {
        width: 100%;
    }
}
</style>

<div class="results-container">
    <h1 class="results-title">Practice Results</h1>

    <div class="score-card">
        <div class="score-number" id="scorePercentage">0%</div>
        <div class="score-label">Score</div>
    </div>

    <div class="stats-grid">
        <div class="stat-card">
            <div class="stat-number" id="totalQuestions">0</div>
            <div class="stat-label">Total Questions</div>
        </div>
        <div class="stat-card">
            <div class="stat-number" id="correctAnswers" style="color: #28a745;">0</div>
            <div class="stat-label">Correct</div>
        </div>
        <div class="stat-card">
            <div class="stat-number" id="incorrectAnswers" style="color: #dc3545;">0</div>
            <div class="stat-label">Incorrect</div>
        </div>
    </div>

    <div class="performance-message" id="performanceMessage"></div>

    <div class="action-buttons">
        <a href="{{ route('practice.index') }}" class="btn btn-primary">Practice Again</a>
        <a href="{{ url('/') }}" class="btn btn-secondary">Back to Home</a>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
$(document).ready(function() {
    const resultsData = sessionStorage.getItem('practiceResults');
    
    if (!resultsData) {
        alert('No results found. Redirecting...');
        window.location.href = '{{ route("practice.index") }}';
        return;
    }

    const results = JSON.parse(resultsData);

    // Display results
    $('#scorePercentage').text(results.percentage + '%');
    $('#totalQuestions').text(results.totalQuestions);
    $('#correctAnswers').text(results.correctAnswers);
    $('#incorrectAnswers').text(results.incorrectAnswers);

    // Performance message
    let message = '';
    let className = '';
    
    if (results.percentage >= 90) {
        message = '🌟 Excellent! You\'re doing great!';
        className = 'excellent';
    } else if (results.percentage >= 70) {
        message = '👍 Good job! Keep practicing!';
        className = 'good';
    } else if (results.percentage >= 50) {
        message = '📚 Not bad! Practice more to improve!';
        className = 'average';
    } else {
        message = '💪 Keep practicing! You can do better!';
        className = 'needs-improvement';
    }

    $('#performanceMessage').text(message).addClass(className);

    // Clear results from sessionStorage after displaying
    setTimeout(function() {
        sessionStorage.removeItem('practiceResults');
    }, 5000);
});
</script>
@endsection

