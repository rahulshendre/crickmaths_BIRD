@extends('layouts.app')
@section('content')

<style type="text/css">
  /* Section background */
.hero-section {
    background: url('{{ asset('assets/img/union.png') }}') no-repeat bottom;
    background-size: cover;
    height: 500px; /* Adjust the height as needed */
    display: flex;
    justify-content: center;
    align-items: center;
}

body {
    background-color: #FEE1E5; /* Background color matching the image's theme */
    font-family: 'Arial', sans-serif;
}

 .img-section {
            position: relative;
            text-align: center;
            background-color: white;
            padding: 20px;
        }
        .background {
            width: 100%;
        }
        .trophy {
            position: absolute;
            left: 20%;
            top: 10%;
        }
        .arrow {
            position: absolute;
            left: 30%;
            top: 30%;
        }
        .bunny {
            position: absolute;
            right: 10%;
            top: 15%;
        }
        .stumps {
            position: absolute;
            left: 10%;
            top: 15%;
        }
        .grass {
            width: 100%;
            position: absolute;
            bottom: 0;
        }
        .text {
            position: absolute;
            top: 20%;
            left: 40%;
            color: red;
            font-size: 24px;
            font-weight: bold;
        }
        .cta {
            position: absolute;
            top: 40%;
            left: 40%;
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border-radius: 5px;
        }

.col-md-7{

    padding: 5%!important;
}

.col-md-5{

    padding: 5%!important;
}

.hero-section {
    width: 100vw; /* Use full viewport width */
    height: 942px;
    display: flex;
    align-items: center;
    justify-content: center;
    margin-bottom: 100%;
}

.text-box {
    width: 50%; /* Adjust for responsive layout */
    background: url('{{ asset('assets/img/vector_one.png') }}') no-repeat center center;
    background-size: contain; /* Ensure the image adapts to div size */
    text-align: center;
    position: relative;
    margin: auto;
    padding: 20px;
}

.text-box h1 {
    font-family: 'Spicy Rice', cursive;
    font-size: 50px; /* Adjust to fit design */
    font-weight: 400;
    line-height: 1.2;
    color: #FFFFFF;
}

.btn-danger {
    background-color:#FFFFFF; /* Custom color matching the button */
    border: none;
    width: 30%;
    border-radius: 15px;
    font-family: 'Signika', sans-serif;
    font-size: 34px;
    font-weight: 700;
    line-height: 41px;
    text-align: center;
    color: #B70303;
    display: inline-block;
    margin-top: 20px;


}

.decision-section {
    width: 100%; /* Full width on small screens */
    max-width: 900px; /* Maximum width for larger screens */
    margin: 0 auto;
    padding: 20px;
    background: #E2FFCD;
    border-radius: 91px;
}

.players-section {
    width: 100%; /* Full width on small screens */
    max-width: 650px; /* Maximum width for larger screens */
    margin: 0 auto;
    padding: 20px;
    background: #FFF4F4;
    border-radius: 40px;
    padding: 10%;
}

.players-section .player-score {
    font-family: 'Poppins', sans-serif;
    font-size: 15px;
    font-weight: 500;
    padding: 15px;
    border-radius: 10px;
    background-color: #FFFFFF;
    box-shadow: 0 0 10px rgba(0,0,0,0.1);
    margin-bottom: 10px;
}

.header-text {
    font-family: 'Spicy Rice', cursive;
    font-size: 55px;
    font-weight: 400;
    text-align: center;
    color: #B70303;
}

.pitch-text {
    font-family: 'Signika', sans-serif;
    font-size: 43px;
    font-weight: 700;
    text-align: left;
    margin-top: 20px;
}

.trophy, .cricket-bat {
    max-width: 50%;
    height: auto;
}

@media (max-width: 768px) {
    .text-box {
        width: 90%; /* Adapt for mobile screens */
        padding: 20px;
    }

    .btn-danger {
        width: 100%; /* Full width button on mobile */
    }

    .decision-section,
    .players-section {
        width: 100%;
        margin: 20px 0;
    }
}

/* Section background */
.background-section {
    background: url('{{ asset('assets/img/union.png') }}') no-repeat bottom;
    background-size: cover;
    height: 500px; /* Adjust the height as needed */
    display: flex;
    justify-content: center;
    align-items: center;
}

body {
    background-color: #FEE1E5; /* Background color matching the image's theme */
    font-family: 'Arial', sans-serif;
}

.hero-section {
    width: 100vw; /* Use full viewport width */
    height: 942px;
    display: flex;
    align-items: center;
    justify-content: center;
    margin-bottom: 100%;
}

.text-box {
    width: 65%; /* Adjust for responsive layout */
    background: url('{{ asset('assets/img/vector_one.png') }}') no-repeat center center;
    background-size: contain; /* Ensure the image adapts to div size */
    text-align: center;
    position: relative;
    margin: auto;
    padding: 20px;
}

.text-box h1 {
    font-family: 'Spicy Rice', cursive;
    font-size: 50px; /* Adjust to fit design */
    font-weight: 400;
    line-height: 1.2;
    color: #FFFFFF;
}

.btn-danger {
 background-color:#FFFFFF;
color: #B70303;    
border: none;
    /*width: 285px;
    height: 83px;*/
    width: 30%;
    border-radius: 15px;
    font-family: 'Signika', sans-serif;
    font-size: 25px;
    font-weight: 700;
    line-height: 41px;
    text-align: center;
    display: inline-block;
    margin-top: 20px;
}

.decision-section {
    width: 100%; /* Full width on small screens */
    max-width: 900px; /* Maximum width for larger screens */
    margin: 0 auto;
    padding: 20px;
    background: #E2FFCD;
    border-radius: 91px;
}

.players-section {
    width: 100%; /* Full width on small screens */
    max-width: 650px; /* Maximum width for larger screens */
    margin: 0 auto;
    padding: 20px;
    background: #FFF4F4;
    border-radius: 40px;
        padding: 10%;

}

.players-section .player-score {
    font-family: 'Poppins', sans-serif;
    font-size: 15px;
    font-weight: 500;
    padding: 15px;
    border-radius: 10px;
    background-color: #FFFFFF;
    box-shadow: 0 0 10px rgba(0,0,0,0.1);
    margin-bottom: 10px;
}

.header-text {
    font-family: 'Spicy Rice', cursive;
    font-size: 25px;
    font-weight: 400;
    text-align: center;
    color: #B70303;
}

.pitch-text {
    font-family: 'Signika', sans-serif;
    font-size: 20px;
    font-weight: 700;
    text-align: left;
    margin-top: 20px;
}

.trophy, .cricket-bat {
    max-width: 50%;
    height: auto;
}

@media (max-width: 768px) {
    .text-box {
        width: 90%; /* Adapt for mobile screens */
        padding: 20px;
    }

    .btn-danger {
        width: 100%; /* Full width button on mobile */
    }

    .decision-section,
    .players-section {
        width: 100%;
        margin: 20px 0;
    }
}

</style>

<!-- Section with background -->
<section class="hero-section background-section" style="margin-bottom: 100%;">
    <div class="container py-5">
        <div class="row align-items-center">
            <div class="col-md-8 text-center text-md-start">
                <div class="text-box">
                    <h1>With Cricmaths, playing and learning is easy-peasy!</h1>
                    <img src="path_to_your_uploaded_img1.png" alt="Math Symbol" class="icon">
                    <img src="path_to_your_uploaded_img2.png" alt="Cricmaths Logo" class="icon">
                    <a href=""><button class="btn btn-danger play-now mt-3">Play Now</button></a>
                </div>
            </div>
            <div class="col-md-4">
                <img src="{{config('app.baseURL')}}/assets/img/cricketer.png" alt="Cricket Bat" class="img-fluid">
            </div>
        </div>
    </div>
</section>

<section style="background-color:white;">
<div class="container my-5">
  <div class="row">
    <div class="col-md-7">
      <div class="decision-section">
        <div>
        <h2 class="header-text">Decision pending?</h2>
        <h3 class="pitch-text">The pitch is ready... are you?</h3>
        <p>Imagine yourself in your cool avatar walking towards the field for an epic match. Now, here's the twist.</p>
        <p>Every run, wicket, and boundary comes with a fun maths question.</p>
        <p>With every Dhamaka shot you'll be solving a question, earning a point, and learning how maths makes cricket even more exciting.</p>
        <p>It's like being a cricket superstar and a maths genius rolled into one!</p>
    </div>
    <img src="{{config('app.baseURL')}}/assets/img/bat.png" class="cricket-bat" alt="Cricket bat" style="margin-top: -11%;
    margin-left: -15%;">
      </div>
              

    </div>

   <div class="col-md-5">
    <div class="players-section">
        <h2 class="header-text">Players of the day</h2>
        
        <!-- Player Scores -->
        <div class="player-score" style="display: flex; justify-content: space-between; align-items: center; padding: 10px 20px;">
            <p>@usernamehere</p> 
            <p style="text-align: end;">70/100</p>
        </div>
        <div class="player-score" style="display: flex; justify-content: space-between; align-items: center; padding: 10px 20px;">
            <p>@usernamehere</p> 
            <p style="text-align: end;">70/100</p>
        </div>
        <div class="player-score" style="display: flex; justify-content: space-between; align-items: center; padding: 10px 20px;">
            <p>@usernamehere</p> 
            <p style="text-align: end;">70/100</p>
        </div>       
        <div class="player-score" style="display: flex; justify-content: space-between; align-items: center; padding: 10px 20px;">
            <p>@usernamehere</p> 
            <p style="text-align: end;">70/100</p>
        </div>        
        <div class="player-score" style="display: flex; justify-content: space-between; align-items: center; padding: 10px 20px;">
            <p>@usernamehere</p> 
            <p style="text-align: end;">70/100</p>
        </div>  
        
        <!-- Trophy Image -->
            <img src="{{config('app.baseURL')}}/assets/img/trophy.png" class="trophy" alt="Trophy" style="float: inline-end; margin-right: -25%;">

        <!-- Grass Image below Trophy -->
        <div style="display: flex; justify-content: center; align-items: center;">
            <img src="{{config('app.baseURL')}}/assets/img/trophy-grass.png" class="trophy-grass" alt="Trophy Grass" style="width:100%;">
        </div>
    </div>
</div>

</div>

</section>
<section class="img-section" style=" margin-bottom: 100%; background-color: white;">
        <!-- Stumps Image -->
        <img src="{{config('app.baseURL')}}/assets/img/stump.png" alt="Stumps" class="stumps">
        
        <!-- Trophy Image -->
        <img src="path_to_trophy_image.png" alt="Trophy" class="trophy">

        <!-- Text Section -->
        <div class="text">
            Let's Play<br>
            Let's show you how to be a CricMaths Champ
        </div>

        <!-- Arrow Image -->
        <img src="path_to_arrow_image.png" alt="Arrow" class="arrow">

        <!-- Call-to-Action Button -->
        <div class="cta">Howzzat! Work?</div>

        <!-- Bunny Image -->
        <img src="path_to_bunny_image.png" alt="Bunny" class="bunny">
        
        <!-- Grass Image -->
        <img src="path_to_grass_image.png" alt="Grass" class="grass">
</section>

@endsection
