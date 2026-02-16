@extends('layouts.app')
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
                <li><i class="fa fa-user" style="color:white;"></i><a href="{{config('app.baseURL')}}/user-dashboard">Dashboard</a></li>
                <li class="active"><i class="fa fa-file"></i><a href="{{config('app.baseURL')}}/user-score-recored" style="color:black;">Score Record</a></li>
               <!--  <li><a href="#">Profile</a></li>
                <li><a href="#">Match History</a></li>
                <li><a href="#">Settings</a></li> -->
            </ul>
        </div>

        <!-- Main Content -->
        <div class="main-content">
            <!-- <div class="scoreboard-header">
                <h1>User Dashboard</h1>
            </div>
 -->
            <div class="row" style="margin-left: 2%; margin-right: 5%;">
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
        @foreach($score as $scores)
        <tr>
            <td style="border: 1px solid #dddddd; padding: 8px;">{{ $scores->index + 1 }}</td>
            <td style="border: 1px solid #dddddd; padding: 8px;">{{$scores->user->username}}</td>
            <td style="border: 1px solid #dddddd; padding: 8px;">{{$scores->question_atempt}}</td>
            <td style="border: 1px solid #dddddd; padding: 8px;">{{$scores->correct_question}}</td>
            <td style="border: 1px solid #dddddd; padding: 8px;">{{$scores->score}}</td>

        </tr>
        @endforeach
       
    </tbody>
</table>

            </div>
        </div>
    </div>
</section>
@endsection
