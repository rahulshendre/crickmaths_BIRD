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
            font-size: 16px;
            transition: color 0.3s;
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
                <li><a href="#">Dashboard</a></li>
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
            <div class="row">
                <div class="col-md-6">
                    <img src="{{ config('app.baseURL') }}/assets/images/av2.png" alt="User Image" style="width: 30%;">
                </div>
                <div class="col-md-6">
                    <div class="row">
                        <p><strong>User:</strong> Test</p>
                    </div>
                    <div class="row">
                        <p><strong>No of Matches Played:</strong> 10</p>
                    </div>
                    <div class="row">
                        <p><strong>Score:</strong> 100</p>
                    </div>
                    <div class="row">
                        <p><i class="fa fa-edit" style="font-size:24px; color:green;"></i> Your Profile</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
