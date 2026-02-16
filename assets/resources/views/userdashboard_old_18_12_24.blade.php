@extends('layouts.app')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

 <style>

    body, html {
    margin: 0;
    padding: 0;
    height: 100%;
}

footer {
    margin: 0;
    padding: 0;
}

.scoreboard {
    min-height: calc(100vh - 120px); /* Adjust 120px based on the height of your header and footer */
}

.card-title{
    font-family: Spicy Rice;
        color: #B70303;
            font-size: -webkit-xxx-large;


}



        .scoreboard{
            margin: 50px auto;
            padding: 20px;
            background: #ffffff;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
            display: flex;
            gap: 20px;
        }

        .scoreboard-header {
            text-align: center;
            padding: 20px;
            background: #459F01;
            color: #ffffff;
            border-radius: 10px 10px 0 0;
        }

        .scoreboard-header h1 {
            margin: 0;
            font-size: 24px;
            color: white;
        }

        .sidemenu {
            width: 20%;
            background: #459F01;
            border-radius: 10px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .sidemenu h3 {
            font-size: 20px;
            margin-bottom: 10px;
            color: #333;
        }

        .sidemenu ul {
            list-style: none;
            padding: 0;
        }

        .sidemenu ul li {
    margin: 10px 0;
    margin-left: 5%;
}

        .sidemenu ul li a {
            text-decoration: none;
            color: #fff;
            font-size: 20px;
            transition: color 0.3s;
            margin-left: 3%;
                        font-family: Poppins;

        }

        .sidemenu ul li a:hover {
            color: #0056b3;
        }

        .main-content {
            flex: 1;
        }

        .user-details img {
            width: 100%;
            border-radius: 10px;
            max-height: 200px;
            object-fit: cover;
        }

        .details p {
            margin: 5px 0;
            font-size: 16px;
            color: #333;
        }

        .active{
            color: black;
        }

        .card-text{
                font-family: Poppins;
                letter-spacing: 1px;
    font-size: x-large;


        }

        .card-text strong{
            color: #459F01;
        }


    </style>

@section('content')
   
    <section class="vs-hero-wrapper">

    <div class="scoreboard">
        <!-- Side Menu Panel -->
        <div class="sidemenu">
            <h3 style="color:white; font-family: Spicy Rice; letter-spacing: 1px; font-size: 19px; text-align: center;
    margin-top: 5%;">User Dashboard</h3>
            <hr style="color:white; background-color:white;">
            <ul>
                <li class="active"><i class="fa fa-user"></i><a href="{{config('app.baseURL')}}/user-dashboard" style="color:black;">User Details</a></li>
                <li><i class="fa fa-file" style="color:white;"></i><a href="{{config('app.baseURL')}}/user-score-recored">Score Record</a></li>

            </ul>
        </div>

        <!-- Main Content -->
        <div class="main-content">
            <!-- <div class="scoreboard-header">
                <h1>User Dashboard</h1>
            </div>
 -->
           <div class="row">
    <div class="col-md-12">
        <div class="card" style="margin: 20px; padding: 15px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">
            <div class="row g-0">
                <!-- Image Section -->
                <div class="col-md-4 d-flex align-items-center justify-content-center">

                    <div style="border: 5px solid #459F01;
;border-radius: 100%;
    padding: 5%;">
                    <img 
                        src="{{ config('app.baseURL') }}/assets/images/av2.png" 
                        alt="User Image" 
                        class="img-fluid rounded-circle" 
                        style="width: 100px; height: 100px; object-fit: cover;"
                    >
                    </div>
                </div>
                
                <!-- User Information Section -->
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title">User Details</h5>
                        <p class="card-text">
                            <strong>User:</strong> {{ ucfirst($user->username) }}
                        </p>
                        <p class="card-text">
                            <strong>No of Matches Played:</strong> {{ $no_of_match_count }}
                        </p>
                        <p class="card-text">
                            <strong>Score:</strong> {{ $userGrades[0]['matches90'] ?? '0' }}
                        </p>
                        <p class="card-text">
                            <strong>Level:</strong> {{ $userGrades[0]['grade'] ?? 'No Grade Assigned' }}
                        </p>
                        <p class="card-text">
                            <i class="fa fa-edit" style="font-size: 24px; color: green;"></i> 
                            <a href="#" style="text-decoration: none;">Edit Your Profile</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

               <table style="width: 100%; border-collapse: collapse; margin: 20px 0; font-size: 18px; text-align: left;">
    <thead>
        <tr style="background-color: #459F01; color: white;">
            <th style="border: 1px solid #dddddd; padding: 8px;">Sr.No</th>
            <th style="border: 1px solid #dddddd; padding: 8px;">User Name</th>
            <th style="border: 1px solid #dddddd; padding: 8px;">Attempt Question</th>
            <th style="border: 1px solid #dddddd; padding: 8px;">Correct Answer</th>
            <th style="border: 1px solid #dddddd; padding: 8px;">Score</th>
        </tr>
    </thead>
    <tbody>
        @foreach($todayMatche as $todayMatches)
        <tr>
            <td style="border: 1px solid #dddddd; padding: 8px;">{{ $todayMatches->index + 1 }}</td>
            <td style="border: 1px solid #dddddd; padding: 8px;">{{$todayMatches->user->username}}</td>
            <td style="border: 1px solid #dddddd; padding: 8px;">{{$todayMatches->question_atempt}}</td>
            <td style="border: 1px solid #dddddd; padding: 8px;">{{$todayMatches->correct_question}}</td>
            <td style="border: 1px solid #dddddd; padding: 8px;">{{$todayMatches->score}}</td>

        </tr>
        @endforeach
       
    </tbody>
</table>

        </div>
    </div>
</section>
@endsection
