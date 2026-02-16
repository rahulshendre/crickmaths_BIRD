@extends('layouts.app')

@section('content')

<style>
    .banner-image-section {
        background-image: url('{{ asset('assets/img/pavilion/bg_img.png') }}');
        background-size: cover;
        background-position: center;
        height: 400px; /* Adjust the height as needed */
        padding-bottom: 50%;
    }

    .pavilion-header{

    	 font-family: Spicy Rice;
font-size: 24px;
font-weight: 400;
line-height: 56.84px;
letter-spacing: 0.02em;
text-align: center;

color: #FFFFFF;


    }

    .text-header{
    	font-family: Signika;
font-size: 30px;
font-weight: 400;
line-height: 60px;
text-align: center;

    }
.pavilion-banner-para{
    font-family: Signika;
    font-size: 20px;
font-weight: 400;
line-height: 20px;
text-align: center;
color: #000000;


}

.stump_right{

    width: 40%;
    margin-right: -29%;
    /* margin-top: 0%; */
    margin-top: -10%;

}

.ball{
    margin-right: 52%;
    max-width: 3%;
}

.stump_left{
    width: 43%;
    margin-left: -28%;
    margin-top: -38px;
}

.vision-section {
      padding: 40px 0;
      text-align: center;
    }
    .vision-title {
      /*font-size: 2rem;
      font-weight: bold;
      color: #d9534f;  
      margin-bottom: 40px;*/

      font-family: Spicy Rice;
font-size: 50px;
font-weight: 700;
line-height: 80px;
text-align: center;
color: #B70303;

    }
    .vision-card {
      border: none;
      background-color: transparent;
      text-align: center;

    }
    .vision-header {
background: #50B600;
      color: white;
      padding: 10px;
      border-radius: 35px;
      
      font-family: Signika;
font-size: 20px;
font-weight: 400;
line-height: 30px;
text-align: center;
margin-right: 10%;
    margin-left: 10%;


    }
    .vision-text {
      
          text-align: justify;
          font-family: Signika;
font-size: 21px;
/*font-weight: 400;
*/line-height: 25px;
text-align: left;
color: #727272;
    margin-top: 10%;



    }
    .divider {
      border-left: 1px solid #ddd;
      height: 100%;
    }

  .play-cricket-section{
  	background: #B70303;
  	    padding-bottom: 3%;


  }

  .cartton{

    float:inline-end;
     width: 15%; 
     margin-top: -47px;

  }

  .play-cricket-heading{
  	font-family: Signika;
font-size: 23px;
font-weight: 400;
line-height: 60px;
text-align: center;
color: #FFFFFF;
padding: 2%;

  }

  .play-cricket-section .btn{
  	font-family: Signika;
font-size: 35px;
font-weight: 400;
line-height: 38px;
text-align: center;


  }

  /* Custom Styles */
        .team-section {
            text-align: center;
            padding: 50px 0;
        }

        .team-title {
           /* font-size: 2rem;
            font-weight: bold;*/

            color: #B70303;


            font-family: Spicy Rice;
font-size: 50px;
font-weight: 900;
line-height: 60px;
text-align: center;

        }

        .team-subtitle {
            /*font-size: 1.2rem;
            margin-bottom: 30px;*/

            font-family: Signika;
font-size: 21px;
font-weight: 400;
line-height: 40px;
text-align: center;
margin-right: 15%;
    margin-left: 20%;
    color:#525252;


        }

        .profile-card {
            border-radius: 10px;
/*            background-color: #FBE8E8;
*/            background: url('{{ asset('assets/img/pavilion/bg3.png') }}') no-repeat center;

            padding: 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 40px;
        }

        .profile-card img {
           /* width: 100px;
            height: 100px;
            border-radius: 50%;*/

            width: 15%;
    margin-left: -4%;
    margin-bottom: -18px;
        margin-top: -1%;

            object-fit: cover;
        }

        .profile-text {
            flex-grow: 1;
            margin: 0 20px;
        }

        .profile-text p {
            /*margin: 0;
            font-size: 1rem;*/

            font-family: Signika;
font-size: 20px;
/*font-weight: 300;
*/line-height: 26px;
text-align: center;

        }



.icon-text p{
         font-family: Signika;
font-size: 20px;
/*font-weight: 300;
*/line-height: 26px;
text-align: center;
    }

    .icon-text{

            margin-top: 2%;
            margin-bottom: 3%;


    }


        .icon-box {
            display: flex;
            justify-content: space-between;
            align-items: center;
/*            background-color: #EFFAE0;
*/           background: url('{{ asset('assets/img/pavilion/bg4.png') }}') no-repeat center;

            border-radius: 25px;
/*            padding: 20px;
*/        }

        .icon-box img {
/*            width: 50px;
*/           width: 9%;
                margin-bottom: 1%;



        }


        .grass-border {
            background-image: url('grass.png');
            background-repeat: repeat-x;
            height: 20px;
            margin-top: 20px;
        }

        .profile-left"{
                  background-image: url('{{ asset('assets/img/pavilion/bg1.png') }}');

        }

        .person1 {
    margin-left: -10%!important;
    margin-top: -3%!important;
}

/*.math-text{

        background-image: url('{{ asset('assets/img/pavilion/union.png') }}');

}*/

.math-section {
/*    background-color: white;
*/       /* background-image: url('{{ asset('assets/img/pavilion/union.png') }}');*/
 
   padding: 20px;
/*    border: 2px solid red;
*/    border-radius: 15px;
}

.math-section .stumps {
    max-width: 100px;
}

.math-section .math-text {
    text-align: left; 
        margin-top: -12%;

}

.math-section .bg_white{

    width:50%;
    margin-top: -4%;

}


.math-section .math-text p{
font-family: Signika;
font-size: 15px;
font-weight: 400;
line-height: 32px;
text-align: center;
color: #4F4F4F;


}


.math-text h4 {
    font-family: Signika;
font-size: 32px;
font-weight: 400;
line-height: 25px;
text-align: center;
color: #B70303;

}

.banner-heading{

    padding: 5% 45%;
} 

.grass_one{
    margin-top: -6%;     
    max-width: 32%;
}

.grass_two{
    margin-top: -6%;     
    max-width: 32%;
    margin-left: -1%;
}

.grass_three{
    margin-top: -6%;     
    max-width: 32%;
    margin-left: -1%;
}



@media (max-width: 767px) {

    .pavilion-header {
    font-family: Spicy Rice;
    font-size: 16px;
    font-weight: 400;
    line-height: 36.84px;
    letter-spacing: 0.02em;
    text-align: center;
    color: #FFFFFF;
}

.banner-heading{

    padding: 5% 30%;
} 

.text-header {
    font-family: Signika;
    font-size: 20px;
    font-weight: 400;
    line-height: 30px;
    text-align: center;
}

.pavilion-banner-para {
    font-family: Signika;
    font-size: 18px;
    font-weight: 400;
    line-height: 20px;
    text-align: center;
    color: #000000;
}

.team-subtitle {
    font-family: Signika;
    font-size: 15px;
    font-weight: 400;
    line-height: 19px;
    text-align: center;
    margin-right: 5%;
    margin-left: 5%;
    color: #525252;
}

.profile-card {
    border-radius: 10px;
    /* background-color: #FBE8E8; */
    background: url(http://localhost/crickmatch/assets/img/pavilion/bg3.png) no-repeat center;
    padding: 1px;
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 40px;
}

.profile-text p {
    font-family: Signika;
    font-size: 6px;
    margin-top: 5px;
        line-height: 9px;

    }

    .icon-text p {
    font-family: Signika;
    font-size: 6px;
    /* font-weight: 300; */
    line-height: 10px;
    text-align: center;
}

.grass_one{
    margin-top: -12%;     
}

.grass_two{

    margin-top: -12%;     
}

.grass_three{

    margin-top: -12%;     
}

.profile-card img {
    width: 15%;
    margin-left: -4%;
    margin-bottom: -5px!important;
    margin-top: -1%;
    object-fit: cover;

}


}


    


@media (min-width: 768px) and (max-width: 1200px) {

  .pavilion-header {
        font-family: Spicy Rice;
        font-size: 22px;
        font-weight: 400;
        line-height: 45.84px;
        letter-spacing: 0.02em;
        text-align: center;
        color: #FFFFFF;
    }

.banner-heading{

    padding: 6% 30%;
} 

.text-header {
    font-family: Signika;
    font-size: 20px;
    font-weight: 400;
    line-height: 30px;
    text-align: center;
}

.profile-card {
    border-radius: 10px;
    /* background-color: #FBE8E8; */
    background: url(http://localhost/crickmatch/assets/img/pavilion/bg3.png) no-repeat center;
    padding: 6px;
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 40px;
}

.profile-text p {
    font-family: Signika;
    font-size: 15px;
    /* font-weight: 300; */
    line-height: 18px;
    text-align: center;
}
.profile-card img {
    width: 15%;
    margin-left: -3%;
    margin-bottom: -18px;
    margin-top: -1%;
    object-fit: cover;
}

.icon-text p {
    font-family: Signika;
    font-size: 15px;
    /* font-weight: 300; */
    line-height: 17px;
    text-align: center;
}
.icon-box {
    display: flex;
    justify-content: space-between;
    align-items: center;
    /* background-color: #EFFAE0; */
    background: url(http://localhost/crickmatch/assets/img/pavilion/bg4.png) no-repeat center;
    border-radius: 25px;
    padding: 1px;
}

.grass_one{
    margin-top: -8%;     
}

.grass_two{

    margin-top: -8%;     
}

.grass_three{

    margin-top: -8%;     
}

.icon-box img {

                margin-bottom: 0%;



        }
}

@media (min-width: 1023px) and (max-width: 1099px) {

    .math-section .bg_white {
    width: 63%;
    margin-top: -6%;
}

.math-section .math-text p {
    font-family: Signika;
    font-size: 15px;
    font-weight: 400;
    line-height: 25px;
    text-align: center;
    color: #4F4F4F;
}

.math-section .math-text {
    text-align: left;
    margin-top: -15%;
}

    .stump_left {
        width: 43%;
        margin-left: -15%;
        margin-top: -38px !important;
    }

.ball {
    margin-right: 65%;
    max-width: 2%;
}

.stump_right {
    width: 40%;
    margin-right: -17%;
    /* margin-top: 0%; */
    margin-top: -10%;
}

.banner-image-section {
    background-image: url(http://localhost/crickmatch/assets/img/pavilion/bg_img.png);
    background-size: cover;
    background-position: center;
    height: 400px;
    padding-bottom: 58%;
}




}

@media (min-width: 370px) and (max-width: 380px) {

    .stump_right {
        width: 30%!important;
        margin-right: 0%;
        margin-top: 0%;
        margin-top: 0%;
    }

    .math-section .bg_white {
        width: 100%;
        margin-top: -8%!important;
    }

        .cartton {
        float: inline-end;
        width: 20%;
        margin-top: 8px!important;
    }

    .math-text h4 {
        font-family: Signika;
        font-size: 15px!important;
        font-weight: 400;
        line-height: 5px!important;
        text-align: center;

    }


}

@media (min-width: 429px) and (max-width: 450px) {

    .ball {
        margin-right: 102%;
        max-width: 3%;
        margin-bottom: -10%!important;
    }

        .stump_right {
        width: 30%!important;
        margin-right: 0%;
        margin-top: 0%;
        margin-top: 0%;
    }

    .math-section .bg_white {
        width: 100%;
        margin-top: -8%!important;
    }

        .cartton {
        float: inline-end;
        width: 15%!important;
        margin-top: 4px!important;
    }


}

@media (min-width: 380px) and (max-width: 399px) {

    .math-section .bg_white {
        width: 100%;
        margin-top: -8%!important;
    }

    .math-text h4 {
        font-family: Signika;
        font-size: 15px!important;
        font-weight: 400;
        line-height: 5px!important;
        text-align: center;

    }

    .stump_right {
        width: 30%!important;
        margin-right: 0%;
        margin-top: 0%;
        margin-top: 0%;
    }

    .cartton {
        float: inline-end;
        width: 20%;
        margin-top: 0px!important;
    }


}


@media (min-width: 340px) and (max-width: 350px) {

.math-text h4 {
        font-family: Signika;
        font-size: 15px!important;
        font-weight: 400;
        line-height: 0px!important;
        text-align: center;
        color: #B70303;
    }

    .math-section .bg_white {
        width: 100%;
        margin-top: -6%!important;
    }

    .math-section .math-text p {
        font-family: Signika;
        font-size: 9px!important;
        font-weight: 400;
        line-height: 11px;
        text-align: center;
        color: #4F4F4F;
    }

    .cartton {
        float: inline-end;
        width: 22%!important;
        margin-top: 4px;
    }
}

@media (min-width: 351px) and (max-width: 365px) {

    .stump_right {
        width: 30%!important;
        margin-right: 0%;
        margin-top: 0%;
        margin-top: 0%;
    }

    .math-section .bg_white {
        width: 100%;
        margin-top: -8%!important;
    }

        .cartton {
        float: inline-end;
        width: 20%;
        margin-top: 8px!important;
    }

    .math-text h4 {
        font-family: Signika;
        font-size: 15px!important;
        font-weight: 400;
        line-height: 1px!important;
        text-align: center;
     }

     .ball {
        margin-right: 102%;
        max-width: 3%;
        margin-bottom: -12%!important;
    }

    .cartton {
        float: inline-end;
        width: 17%!important;
        margin-top: 4px;
    }

    .math-section .math-text p {
        font-family: Signika;
        font-size: 9px;
        font-weight: 400;
        line-height: 11px;
        text-align: center;
        color: #4F4F4F;
    }



}

@media (min-width: 811px) and (max-width: 850px) {


     .math-section .bg_white {
    width: 80%;
    margin-top: -5%;
}

.stump_right {
    width: 30%;
    margin-right: -13%;
    /* margin-top: 0%; */
    margin-top: -10%;
}

.stump_left {
        width: 30%;
        margin-left: -11%;
        margin-top: -32px;
    }

.ball {
    margin-right: 83%;
    max-width: 3%;
}
.math-section .math-text p {
    font-family: Signika;
    font-size: 15px;
    font-weight: 400;
    line-height: 19px;
    text-align: center;
    color: #4F4F4F;
}

.math-section .math-text {
    text-align: left;
    margin-top: -18%;
}

.math-text h4 {
    font-family: Signika;
    font-size: 25px;
    font-weight: 400;
    line-height: 15px;
    text-align: center;
    color: #B70303;
}

.cartton {
    float: inline-end;
    width: 15%;
    margin-top: 22px!important;
}

.banner-image-section {
    background-image: url(http://localhost/crickmatch/assets/img/pavilion/bg_img.png);
    background-size: cover;
    background-position: center;
    height: 400px;
    padding-bottom: 69%;
}




}

@media (min-width: 900px) and (max-width: 950px) {

    .ball {
        margin-right: 68% !important;
        max-width: 3%;
        margin-bottom: -7% !important;
    }

.banner-heading {
        padding: 0% 30%!important;
        padding-top: 2%!important;
    }

    .stump_right {
    width: 40%;
    margin-right: -12%!important;
    /* margin-top: 0%; */
    margin-top: -4%!important;

}

.stump_left {
    width: 43%;
    margin-left: -12%!important;
    margin-top: -14px!important;
}

.math-section .math-text {
    text-align: left;
    margin-top: -15%!important;
}

.math-section .bg_white {
    width: 65%!important;
    margin-top: -7%!important;
}

.math-text h4 {
    font-family: Signika;
    font-size: 30px!important;
    font-weight: 400;
    line-height: 20px!important;
    text-align: center;
    color: #B70303;
}

.cartton {
    float: inline-end;
    width: 16%!important;
    margin-top: -32px!important;
}

.math-section .math-text p {
    font-family: Signika;
    font-size: 15px;
    font-weight: 400;
    line-height: 22px;
    text-align: center;
    color: #4F4F4F;
}

}

@media (min-width: 851px) and (max-width: 899px) {

    .banner-heading {
        padding: 0% 30%;
        padding-top: 3%;
    }

    .ball {
    margin-right: 67%;
    max-width: 2%;
}

.math-section .bg_white {
    width: 65%;
    margin-top: -56px;
}

.stump_right {
        width: 40%;
        margin-right: -8%;
        /* margin-top: 0%; */
        margin-top: -13%;
    }

    .stump_left {
        width: 43%;
        margin-left: -6%;
        margin-top: -51px;
    }

    .math-section .math-text {
    text-align: left;
    margin-top: -15%;
}

.math-section .math-text p {
    font-family: Signika;
    font-size: 13px;
    font-weight: 400;
    line-height: 22px;
    text-align: center;
    color: #4F4F4F;
}

.math-text h4 {
    font-family: Signika;
    font-size: 25px;
    font-weight: 400;
    line-height: 13px;
    text-align: center;
    color: #B70303;
}

.cartton {
    float: inline-end;
    width: 15%;
    margin-top: -66px;
}


}

@media (min-width: 1275px) and (max-width: 1299px) {

    .banner-heading {
    padding: 0% 40%;
    padding-top: 4%;
}

.stump_right {
        width: 40%;
        margin-right: -28%;
        /* margin-top: 0%; */
        margin-top: -14%;
    }

.stump_left {
        width: 43%;
        margin-left: -25%;
        margin-top: -55px;
    }

    .ball {
        margin-right: 60%;
        max-width: 3%;
    }

    .math-section .bg_white {
    width: 60%;
    margin-top: -4%;
}

.math-section .math-text {
    text-align: left;
    margin-top: -14%;
}

.cartton {
    float: inline-end;
    width: 15%;
    margin-top: -28px;
}



}


@media (min-width
    : 1023px) and (max-width: 1050px) {


    .cartton {
    float: inline-end;
    width: 15%;
    margin-top: -42px;
}

}



@media (min-width: 768px) and (max-width: 810px) {


    .math-section .bg_white {
    width: 80%;
    margin-top: -5%;
}

.stump_right {
    width: 30%;
    margin-right: -13%;
    /* margin-top: 0%; */
    margin-top: -10%;
}

.stump_left {
        width: 30%;
        margin-left: -11%;
        margin-top: -32px;
    }

.ball {
    margin-right: 83%;
    max-width: 3%;
}

.math-section .math-text p {
    font-family: Signika;
    font-size: 15px;
    font-weight: 400;
    line-height: 19px;
    text-align: center;
    color: #4F4F4F;
}

.math-section .math-text {
    text-align: left;
    margin-top: -18%;
}

.math-text h4 {
    font-family: Signika;
    font-size: 25px;
    font-weight: 400;
    line-height: 15px;
    text-align: center;
    color: #B70303;
}

.cartton {
    float: inline-end;
    width: 15%;
    margin-top: 6px;
}

.banner-image-section {
    background-image: url(http://localhost/crickmatch/assets/img/pavilion/bg_img.png);
    background-size: cover;
    background-position: center;
    height: 400px;
    padding-bottom: 69%;
}



}



@media (min-width: 539px) and (max-width: 545px) {

    .ball {
        margin-right: 80%!important;
        max-width: 3%!important;
        margin-bottom: -7%!important;
    }

    .stump_left {
        width: 25%!important;
        margin-left: 8%!important;
        margin-top: 7px!important;
    }

    .stump_right {
        width: 25%!important;
        margin-right: 8%!important;
        margin-top: 0%!important;
        margin-top: 0px!important;
    }

    .math-section .bg_white {
        width: 75%!important;
        margin-top: -7%!important;
    }

        .math-section .math-text {
        text-align: left;
        margin-top: -17%!important;
    }

    .cartton {
        float: inline-end;
        width: 15%!important;
        margin-top: -4px!important;
    }



}

@media (max-width: 767px) {

    .math-section .bg_white {
     width: 100%; 
     margin-top: -7%;
    }

    .math-section .math-text p {
    font-family: Signika;
    font-size: 10px;
    font-weight: 400;
    line-height: 11px;
    text-align: center;
    color: #4F4F4F;
}

.math-section .math-text {
    text-align: left;
    margin-top: -23%;
}

.math-text h4 {
    font-family: Signika;
    font-size: 25px;
    font-weight: 400;
    line-height: 10px;
    text-align: center;
    color: #B70303;
}

.stump_right {
    width: 25%;
     margin-right: 0%; 
     margin-top: 0%; 
     margin-top: 0%; 
}

.stump_left {
    width: 25%;
     margin-left: 0%; 
     margin-top: 7px; 
}

.ball {
    margin-right: 102%;
    max-width: 3%;
    margin-bottom: -7%;
}

.cartton {
    float: inline-end;
    width: 20%;
    margin-top: 4px;
}


}






   

</style>

<section class="banner-image-section">
	<div class="banner-heading">
    <div style="background: #B70303;  border-radius: 22px;">
        <h3 class="pavilion-header">The Pavilion</h3>
    </div>
</div>
    <h3 class="text-header" >Cricket is not just a game…it’s an emotion.</h3>
    <p class="pavilion-banner-para">Cricket is India’s heart and soul, loved by millions and unites everyone.</p>

    <div class="math-section mt-4">
            <div class="d-flex justify-content-center align-items-center" style="    flex-direction: column;">
                        <img src="{{config('app.baseURL')}}/assets/img/pavilion/ball.png" class="ball" alt="Cricket Stumps" >

         <div class="row" style="    justify-content: space-between;">

            <img src="{{config('app.baseURL')}}/assets/img/pavilion/stump_left.png" class="stump_left" alt="Cricket Stumps" >
                            <img src="{{config('app.baseURL')}}/assets/img/pavilion/stump_right.png" class="stump_right" alt="Cricket Stumps" >

        </div>

        <img src="{{config('app.baseURL')}}/assets/img/pavilion/union.png" class="bg_white" alt="Cricket bat"">

                <div class="math-text">
                    <p>Maths, on the other hand, can sometimes feel like a tough nut to crack.</p>
                    <h4>!!!But fear not!!!</h4>
                    <p>CricMaths is here to change that. We blend the thrill of cricket with the fun <br>of maths to make learning numbers a blast.</p>
                </div>
            </div>
                <img src="{{config('app.baseURL')}}/assets/img/pavilion/cartton.png" class="cartton" alt="Cricket bat" >

        </div>


</section>

<section class="team-section">
        <!-- Team Title -->
        <h2 class="team-title">The Team</h2>
        <p class="team-subtitle">Who would have imagined that we could turn boring maths lessons into thrilling cricket adventures? Two people surely did.</p>

        <!-- First Content Block: Profile and Text -->
        <div class="container">
            <div class="profile-card">
                  <img src="{{config('app.baseURL')}}/assets/img/pavilion/bg1.png" alt="Person 1">
<img src="{{config('app.baseURL')}}/assets/img/pavilion/person1.png" alt="Person 1" style="margin-left: -14%; margin-top: -3%;">

                <div class="profile-text">
                    <p>
                        In a conversation between Brij Kothari, Founder of PlanetRead, a not-for-profit organization dedicated to global literacy, and Vivaan Daga, a high school Maths enthusiast from Gurgaon, India, the seeds of this initiative were sown. It all began with a shared passion for cricket and a mission to bridge the gap in maths education.
                    </p>
                </div>
                <img src="{{config('app.baseURL')}}/assets/img/pavilion/bg2.png" alt="Person 1" style="margin-right: -10%;     margin-top: -3%;">
                <img src="{{config('app.baseURL')}}/assets/img/pavilion/person2.png" alt="Person 2" style="margin-right: -7%; margin-bottom: -19px;">
            </div>

            <!-- Second Content Block: Cricket Illustration and Text -->
            <div class="icon-box">
                <img src="{{config('app.baseURL')}}/assets/img/pavilion/play1.png" alt="Cricket Icon" >
                <div class="icon-text">
                <p class="m-0">
                    They envisioned a vibrant and interactive website where children could immerse themselves in live cricket matches while tackling fun and challenging maths problems. With Brij's expertise in education and Vivaan's knack for making complex maths concepts simple, they set out to create a platform that would revolutionize how kids perceived maths.
                </p>
            </div>
                <img src="{{config('app.baseURL')}}/assets/img/pavilion/trophy.png" class="trophy" alt="Trophy Icon">

            </div>
             <img src="{{config('app.baseURL')}}/assets/img/pavilion/grass.png" class="grass_one" alt="Trophy Icon">

             <img src="{{config('app.baseURL')}}/assets/img/pavilion/grass.png" class="grass_two" alt="Trophy Icon">
             <img src="{{config('app.baseURL')}}/assets/img/pavilion/grass.png" class="grass_three" alt="Trophy Icon">


            <!-- Grass Border -->
            <div class="grass-border">
            </div>
        </div>
    </section>


<section class="vision-section">
<div style="background: #F4F4F4;">
  <div class="container" >
    <h2 class="vision-title">Our Vision</h2>
    <div class="row">
      <div class="col-md-5">
        <div class="vision-card">
          <div class="vision-header">Creating a Thriving Community</div>
          <p class="vision-text">
            We aim to make Cricmaths a thriving community for children in India and beyond, and bridge the gap between their love for cricket and maths education.
            <br>Join us on this exciting adventure and discover how maths can be as captivating as a cricket match.
          </p>
        </div>
      </div>
      <div class="col-md-2 d-none d-md-block">
      	<img src="{{config('app.baseURL')}}/assets/img/pavilion/line.png" alt="divider Image" class="character-img" style="        height: 70%;"> <!-- Your character image -->
      </div>
      <div class="col-md-5">
        <div class="vision-card">
          <div class="vision-header">Bringing Cricket to Education</div>
          <p class="vision-text">
            We aim to bring the thrill of cricket to millions of children, especially those without access to innovative education. By leveraging cricket's universal appeal, we want to make learning maths an enjoyable journey, aligning with India's National Education Mission.
          </p>
        </div>
      </div>
    </div>
  </div>
</div>
</section>

<section class="play-cricket-section">

	<h3 class="play-cricket-heading">Welcome to CricMaths – Where Numbers Meet Cricket!</h3>

	<div class="container" style="    text-align: center; ">
			<button class="btn btn-primary" style="background: #FFFFFF; color: #B70303; border-radius: 23px; border-color: #FFFFFF;">Play Cricket</button>

	</div>

	
</section>

<!-- padding: 5% 10% 2px;
 -->

@endsection
