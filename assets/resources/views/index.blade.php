@extends('layouts.app')
@section('content')
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<style type="text/css">

    .howzzat-btn{
        text-align: center;
    }


    .carousel-indicators li {

         background-color: #B70303!important; 


    }

    .cricket-bat-man {
    margin-top: 124px!important;
    float: inline-end;
    margin-right: -7%!important;
    height: 73%!important;
}

.mt-5, .my-5 {
    margin-top: 8rem !important;
}

    .carousel-control-next {
    right: -21%;
}

.carousel-control-prev {
    left: -21%;
}


.letsplay-div{
    text-align: center;
}


.carousel-control-prev-icon,
    .carousel-control-next-icon {
        background-color: #B70303; /* Set your custom color */
        width: 40px;
        height: 40px;
        border-radius: 50%; /* Optional: Make the buttons circular */
    }

    .carousel-control-prev-icon:hover,
    .carousel-control-next-icon:hover {
        background-color: #900202; /* Darker shade on hover */
    }




    .testimonials .testi h2{
        color: #B70303!important;
    font-family: Spicy Rice;
    font-size: 50px;
    font-weight: 400;
    line-height: 60px;
    text-align: center;
    }


    .live-cricket-header{

        font-family: Spicy Rice;
    font-size: 50px;
    font-weight: 400;
    line-height: 60.84px;
    letter-spacing: 0.01em;
    text-align: center;
    margin-top: -5%;
    color: #B70303!important;

    }



    .lets-play-new .stumpgrass {
    width: 65%;
        margin-left: -51%;
        margin-top: 1%;

}

.decision-players-section{
    margin-top: -155px;
}

.live-dot {
    display: inline-block; /* Allow positioning next to text */
    width: 10px; /* Width of the dot */
    height: 10px; /* Height of the dot */
    background-color: red; /* Color of the dot */
    border-radius: 50%; /* Make it a circle */
    animation: blink 1s infinite; /* Blink effect */
    margin-right: 5px; /* Space between dot and text */
}

@keyframes blink {
    0%, 100% {
        opacity: 1; /* Fully visible */
    }
    50% {
        opacity: 0; /* Fully transparent */
    }
}



.scrollable-container {
    display: flex;
    overflow: hidden; /* Hide overflow to keep it clean */
    white-space: nowrap; /* Prevent wrapping */
    position: relative; /* Required for absolute positioning of the animation */
}

.match-card {
    min-width: 250px; /* Set a min width for each card */
    margin-right: 15px; /* Space between cards */
    flex-shrink: 0; /* Prevent cards from shrinking */
    background-color: white; /* Optional background color */
    border: 1px solid #ddd; /* Optional border */
    border-radius: 5px; /* Optional border radius */
    padding: 15px; /* Padding inside cards */
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1); /* Optional shadow */
}

.lets-play-new{
        margin-top: 15%;

}

.lets-play-new .letsplay-trophy {
    width: 14%;
    margin-top: 13%;
    margin-left: 36%;
}


.lets-play-new .arrow{
    margin-top: -8%;
    width: 33%;
}

.lets-play-new .grass_one{
        margin-top: -19%;
            margin-left: 15%;


}


.lets-play-new .grass_three{
    border-radius: 0px;
    margin-top: 8%;
    margin-left: 7%;
}
.lets-play-new .cartoon{
  width: 45%;
    margin-top: -7%;
    padding-bottom: 13px;
}

.lets-play-new .vector{
    width: 60%;
    margin-top: -5%;
}

.lets-play-new .vector_side_one{
   width: 15%;
    margin-right: 3%;
    margin-top: -94%;
}


.lets-play-new .vector_side{
    width: 15%;
    margin-top: -93%;
    margin-right: 33%;
}

.lets-play-new  .grass_two {
        
        float: inline-end;
        margin-top: -94px!important;
        border-radius: 0px;
         margin-right: 0px!important; 
    }


.lets-play-new h4{
    color: #B70303;
    font-family: Spicy Rice;
    font-size: 50px;
    font-weight: 400;
    line-height: 75.84px;

}

.lets-play-new p{
    font-family: Signika;
    

}

.lets-play-new a .btn{
    width: 35%!important;



}


.vs-tem{

   font-family: Signika;
   font-size: 35px;
   color: #817676!important;
       margin-bottom: 7%;


}

.testimonials{
    margin-top: 5%;
}

.testimonials .container{
    margin-top: -3%!important;
}

@media only screen and (max-width: 700px) {

.col-md-7 {
    -ms-flex: 0 0 100% !important;
     flex: 0 0 100% !important;
     max-width: 100% !important;
}
}
    
.grass_two{
    float: inline-end;
     margin-top: -111px!important;
      border-radius: 0px!important; 
        margin-right: -414px!important;
}

.section_one .section_one_vector{
  
  margin-top: 147px;
}

.cricket-bat_scaleone{
    width:5%;
    margin-top: 29%;
    margin-left: 29%;
}

.lets-play .stumpgrass{

    border-radius: 0px;
    margin-left: -19%;

}

.lets-play .letsplay-trophy{
    width: 5%;
    margin-top: 5%;
    margin-left: 13%;
}

.cricket-bat_scale{
    width: 5%;
    float: inline-end;
    margin-top: 10%;
}


.cricket-bat_wrong_one{
    width: 5%;
    float: inline-end;
    margin-top: 10%;
    margin-right: 30%;
}

.cricket-bat_divide_one{
    width: 5%;
    float: inline-end;
    margin-top: 0%;
    margin-right: -50%;
}


.cricket-bat_wrong_two{

    width: 5%;
    float: inline-end;
    margin-top: 19%;
    margin-right: -53%;

}

.cricket-bat-man{

    margin-top: -154px;
    float: inline-end;
    margin-right: 15%;
    height: 60%;
}

.howzzat {
    width: 35%;
    border-radius: 10px;
     margin-top: 5%; 
/*    margin-left: 34%!important;
*/    font-family: Poppins;
font-size: 15px;
font-weight: 600;
line-height: 40px;
text-align: center;
color: #FFFFFF!important;
}

    .col-md-7 {
        -ms-flex: 0 0 58.333333%;
        flex: 0 0 58.333333%;
        max-width: 50.333333%;
    }


   .trophy_upcoming_match {
    margin-right: -171%;
    margin-top: -53%;
    width: 47%;
}

.decision-cricket-bat{

    margin-top: -31%!important;
    margin-left: -11%!important;
    height: 149px;
    width: 188px;


}

.trophy-players-section{
    height: 197px;
    width: 199px;
        margin-top: -42%;
    margin-top: -42%;
        margin-left: 302px;


}

.col-md-5 .trophy-grass{
    width: 87%!important;
    margin-top: -18%!important;
    margin-left: 7%!important;
}





.testi {
   background: url('{{ asset('assets/img/vector_testominal.png') }}') no-repeat center;
    background-size: cover; /* or contain */
    padding-top: 50px; /* Adjust as needed */
 border-radius: 20px;
    background-size: 100% 100%;
}

.placeholder-video {
         

  background: url('{{ asset('assets/img/rectangle_test.png') }}') no-repeat center;

    border: 1px solid #ddd;
    box-shadow: 0px 4px 4px 0px #00000040;

    height: 300px;
    display: flex;
    align-items: center;
    justify-content: center;
    margin-bottom: 10%;
    margin-top: 5%;
}

.placeholder-video h1{

    font-family: Spicy Rice;
font-size: 35px;
font-weight: 400;
line-height: 75.84px;
letter-spacing: 0.01em;
text-align: center;
color: #525252;
;

}


.v1{
        margin-top: -66%;
        width: 5%;

}



h2 {
    font-family: Spicy Rice;
font-size: 35px;
font-weight: 400;
/*line-height: 75.84px;
*/letter-spacing: 0.01em;
text-align: center;
    margin-top: -5%;
    color: #B70303;



}

img {
    border-radius: 15px;
}

.upcoming-match {

     background: url('{{ asset('assets/img/bg_um.png') }}') no-repeat center;
    background-size: cover; /* or contain */

}

.trophy {
   height: auto;
    margin-top: -12%; margin-left:10%;
        width: 8%;

}

.play_now_div {
    margin-top: -4%!important;
}

h2 {
    color: #4f8000;
    font-weight: bold;
}

.match-card {
    background-color: #fff;
    border: 1px solid #ddd;
    border-radius: 15px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    transition: transform 0.2s ease;
}

.match-card:hover {
    transform: translateY(-5px);
}

.match-card h4 {
    font-size: 1.25rem;
    margin-bottom: 10px;
}

.match-card p {
    font-size: 0.875rem;
    color: #333;
}

.match-card .btn {
    width: 100%;
    border-radius: 10px;
    font-weight: bold;
    background: #B70303;

    font-family: Terminal Dosis;
font-size: 20px;
font-weight: 800;
line-height: 23.5px;
text-align: center;


}

.col-md-2 .card{
     background: url('{{ asset('assets/img/home/play_bg.png') }}') no-repeat center;
    background-size: cover;
    padding:5% !important;
 }

 .card .text-success{
    font-family: Spicy Rice;
font-size: 25px;
font-weight: 400;
line-height: 33.02px;
text-align: center;

 }
.match-card p{
    font-family: Bangers;
font-size: 20px;
font-weight: 400;
line-height: 15.03px;
text-align: center;
color: #817676;
  font-style: normal;
    letter-spacing: 1px;



}

.row{
    margin-top: 3%;
    margin-bottom: 1%;
}

.decision-section{
    background: url('{{ asset('assets/img/home/bg_decision.png') }}') no-repeat center;
    padding-top:10%;
    border-radius:15%;

     

        padding-left: 10%;
    padding-right: 10%;
    padding-bottom: 15%;

    
}

.decision-section .header-text{

    font-family: Spicy Rice;
font-size: 35px;
font-weight: 400;
line-height: 75.84px;
letter-spacing: 0.01em;
text-align: center;
color: #B70303;
}

.decision-section .pitch-text{
    font-family: Signika;
font-size: 23px;
font-weight: 700;
line-height: 50.22px;
text-align: left;
color: #3A3A3A;

}

.decision-section p{
    font-family: Signika;
font-size: 20px;
font-weight: 300;
line-height: 27.04px;
text-align: left;

}

.decision-section img{
    width: 196.18px;
height: 235.75px;
top: 1880.11px;
left: 332.11px;
gap: 0px;
opacity: 0px;
angle: -115.4 deg;
margin-top: -18%;
    margin-left: -17%;
}


.players-section{
    background: url('{{ asset('assets/img/home/bg_decision1.png') }}') no-repeat center;
    padding:8%;
    padding-top:14%;
    border-radius:15%;
        padding-bottom: 28%;

}
.player-score{
    background-color: #FFFFFF ;
    margin-bottom: 3%;
    border-radius: 10px;
        padding-top: 8px;
    padding-left: 15px;
    padding-right: 15px;

}

.players-section .header-text{

    color: #B70303;
font-family: Spicy Rice;
font-size: 35px;
font-weight: 400;
line-height: 75.84px;
text-align: center;


}

.player-score p{

    font-family: Poppins;
font-size: 15px;
font-weight: 500;
line-height: 20.04px;
text-align: left;

}

.howzzat{
    width: 10%;
    border-radius: 10px;
/*    margin-top: -7%;
*/    /*margin-left: 29%;*/
}


.howzzat h3{
    font-family: Poppins;
font-size: 15px;
font-weight: 600;
line-height: 40px;
text-align: center;
color: #FFFFFF;

}

.lets-play h4{
    font-family: Signika;
font-size: 25px;
font-weight: 700;
line-height: 2.53px;
text-align: center;
color: #B70303;
margin-right: 8%;

}

.lets-play p{
    font-family: Poppins;
    font-size: 12px;
   font-weight: 400;
   line-height: 32.34px;
   text-align: center;
   color: #235000;
   margin-left: 10px;
}

.letsplay-div{

    margin-top: -15%;
/*    margin-left: -32%;
*/}

.section_one-bg {
    background: url('{{ asset('assets/img/union_one.png') }}') no-repeat;
   
    width: 100%; /* or any width you need */
}

.section_one{
    margin-top: -3%;
}

.section_one h6{
    font-family: Spicy Rice;
font-size: 37px;
font-weight: 400;
line-height: 54.63px;
letter-spacing: 0.07em;
text-align: center;
color: #FFFFFF;
margin-top: -40%;
    margin-left: 5%;



}

.play{
    background: #FFFFFF;
 /*width: 285px;
height: 83px;
top: 659px;
left: 429px;
gap: 0px;*/
border-radius: 15px;
opacity: 0px;

font-family: Signika;
font-size: 20px;
font-weight: 700;
line-height: 41.89px;
text-align: center;
color: #B70303;
padding-left: 5%;
    padding-right: 5%;
margin-right: 10%;


}

.section_one .vector{
    width:60%; margin-top: -58%; margin-left: -22%;

}

 .play_now_div{
            margin-top: -7%
        }



.grass-row{
  margin-top:-103px!important;
}

/*@media (max-width: 768px) {
        .section_one h6 {
    font-family: Spicy Rice;
    font-size: 15px;
    font-weight: 400;
    line-height: 21.63px;
    letter-spacing: 0.07em;
    text-align: center;
    color: #FFFFFF;
    margin-top: -40%;
    margin-left: 5%;
}
}
*/

.decision-players-section .col-md-5{


    }

    .decision-players-section .col-md-5 .trophy{

     float: inline-end;
     width:35%; 
     margin-right: -71px;
     opacity: 99%;"
   
     }

         .lets-play .stumpgrass {
        width: 25%;
    }

       .lets-play .trophy {
    width: 5%;
    margin-top: 5%;
    margin-left: -11%;

    }

    .lets-play .arrow {
        width: 8%;
    margin-top: 0%;
    }

    .lets-play .cartoon{
      width:20%;
      margin-left: 72%;
      margin-top: -12%;
    } 

    .lets-play .vector{
        width:19%; 
        float: inline-end; 
        margin-top:-16%; 
        margin-right:8%;
    }

    .lets-play .vector_side{
         width:5%; 
         margin-top: -22%;
         margin-left: -5%;
    }

    .lets-play .vector_side_one{
        width:5%;
        margin-top: -22%;
        margin-left: -23%;
    }


   @media (min-width: 430px) and (max-width: 440px) {

    .howzzat-btn {
    text-align: justify;
}

    .decision-cricket-bat {
    margin-top: -39% !important;
    margin-left: -14% !important;
    height: 134px;
    width: 188px;
}


       .decision-players-section {
    margin-top: 0px!important;
}

    .trophy_two {
        float: inline-end;
        margin-top: -36px!important;
        border-radius: 0px!important;
        margin-right: -126px!important;
        display: block!important;

    }

   .lets-play-new p {
        font-family: Poppins;
        font-size: 7px!important;
        font-weight: 400;
        line-height: 17px!important;
        text-align: center;
        color: #235000;
        
    }

    .lets-play-new a .btn {
    width: 24% !important;
}

    

    .lets-play-new h4 {
        font-family: Signika;
        font-size: 15px!important;
        font-weight: 700;
        line-height: 1px!important;
        text-align: center;
        color: #B70303;
    }


    .lets-play-new .stumpgrass {
        width: 35%!important;
    }

    .howzzat {
        width: 23%!important;
        border-radius: 10px;
/*        margin-left: 45%!important;
*/        margin-top: -1%!important;
        font-size: 8px!important;
        line-height: 17px!important;
    }

    
.lets-play-new .grass_one {
    margin-top: -15%!important;
    margin-left: 0%!important;
    width: 60%;
}

    .lets-play-new .arrow {
        width: 12% !important;
        margin-top: -8% !important;
        margin-left: -8% !important;
/*        margin-top: -80px!important;
*/    }

    
        .lets-play-new .cartoon {
        width: 23% !important;
        margin-left: 72%;
        margin-top: -60%;
    }

    .lets-play-new .grass_two {
       display: none;
    }

    .lets-play-new .stumpgrass {
        width: 32%;
        margin-left: -29%;
        margin-top: 1%;
    }

        .lets-play-new .letsplay-trophy {
        width: 8%;
        margin-top: 5%;
        margin-left: 18%;
    }

    .lets-play-new .vector_side {
    width: 7%;
    margin-top: -93%;
        margin-left: 71%;
  }

  .lets-play-new .vector_side_one {
    width: 7%;
    margin-top: -103%;
    margin-left: 91%!important;

 }


    .lets-play-new .grass_three {
    border-radius: 0px;
    margin-top: -32%;
    margin-left: 39%;
    width: 60%;
}

      .lets-play-new .vector {
        width: 23% !important;
        float: inline-end;
        margin-top: -38% !important;
        margin-right: 4% !important;
    }

    

    .grass_two {
        float: inline-end;
        margin-top: -32px!important;
        border-radius: 0px;
        margin-right: -125px;
    }

    .letsplay-div {
        margin-top: -35%!important;
    }

    .howzzat-btn{
            margin-top: -23%!important;

    }


}

   @media (min-width: 410px) and (max-width: 429px) {

.howzzat-btn {
    text-align: justify;
}

nav a{
    margin-top: 1%;
    margin-bottom: 1%;
}
.cricket-bat-man {
    margin-top: 66px!important;
    float: inline-end;
    margin-right: 4%!important;
    height: 73%!important;
}



    .decision-players-section {
    margin-top: 0px!important;
}

    .trophy_two {
        float: inline-end;
        margin-top: -36px!important;
        border-radius: 0px!important;
        margin-right: -126px!important;
        display: block!important;

    }

   .lets-play-new p {
        font-family: Poppins;
        font-size: 7px!important;
        font-weight: 400;
        line-height: 17px!important;
        text-align: center;
        color: #235000;
/*        margin-left: 19px!important;
*/        
    }

    .lets-play-new a .btn {
    width: 24% !important;
}

    

    .lets-play-new h4 {
        font-family: Signika;
        font-size: 15px!important;
        font-weight: 700;
        line-height: 1px!important;
        text-align: center;
        color: #B70303;
/*        margin-right: 20%!important;
*/    }


    .lets-play-new .stumpgrass {
        width: 35%!important;
    }

    .howzzat {
        width: 23%!important;
        border-radius: 10px;
/*        margin-left: 45%!important;
*/        margin-top: -1%!important;
        font-size: 8px!important;
        line-height: 17px!important;
    }

    
.lets-play-new .grass_one {
    margin-top: -15%!important;
    margin-left: 0%!important;
    width: 60%;
}

    .lets-play-new .arrow {
        width: 12% !important;
        margin-top: -8% !important;
        margin-left: -8% !important;
/*        margin-top: -80px!important;
*/    }

    
        .lets-play-new .cartoon {
        width: 23% !important;
        margin-left: 72%;
        margin-top: -61%;
    }

    .lets-play-new .grass_two {
       display: none;
    }

    .lets-play-new .stumpgrass {
        width: 32%;
        margin-left: -29%;
        margin-top: 1%;
    }

        .lets-play-new .letsplay-trophy {
        width: 8%;
        margin-top: 5%;
        margin-left: 18%;
    }

    .lets-play-new .vector_side {
    width: 7%;
    margin-top: -93%;
        margin-left: 71%;
  }

  .lets-play-new .vector_side_one {
    width: 7%;
    margin-top: -103%;
    margin-left: 91%!important;

 }


    .lets-play-new .grass_three {
    border-radius: 0px;
    margin-top: -32%;
    margin-left: 39%;
    width: 60%;
}

      .lets-play-new .vector {
        width: 23% !important;
        float: inline-end;
        margin-top: -38% !important;
        margin-right: 4% !important;
    }

    

    .grass_two {
        float: inline-end;
        margin-top: -32px!important;
        border-radius: 0px;
        margin-right: -125px;
    }

    .letsplay-div {
        margin-top: -35%!important;
        margin-left: -4%!important;
    }

    .howzzat-btn{
            margin-top: -23%!important;

    }




}



@media (max-width: 767px) {


    .carousel-control-next {
    right: 0%;
    display: none;
}

.carousel-control-prev {
    left: 0%;
    display: none;
}

.trophy_upcoming_match {
    margin-right: 94%;
    margin-top: -36%;
    width: 20%;
}




       .section_one h6 {
    font-family: Spicy Rice;
    font-size: 15px;
    font-weight: 400;
    line-height: 21.63px;
    letter-spacing: 0.07em;
    text-align: center;
    color: #FFFFFF;
    margin-top: -45%;
    margin-left: 5%;
}

        .section_one .vector{
    width:60%; margin-top: -69%!important; margin-left: -22%;

}


        .decision-section img {
            margin-left: 0;
            margin-top: -10%;
        }

        .play {
    background: #FFFFFF;
    border-radius: 15px;
    opacity: 0px;
    font-family: Signika;
    font-size: 15px;
    font-weight: 700;
    line-height: 20.89px;
    text-align: center;
    color: #B70303;
    padding-left: 2%;
    padding-right: 2%;
    margin-right: 10%;
}

        .play_now_div{
            margin-top: -7%
        }

        .section_one-bg {
    background: url(http://localhost/crickmatch/assets/img/union.png) no-repeat;
    height: 800px;
    /* width: 100%; */
}

.decision-players-section .col-md-5{

    margin-top: 5%;

}

.decision-players-section .col-md-5 .trophy{

     float: inline-end;
     width:35%; 
     margin-right: -50px;
     opacity: 99%;"
   
     }

     .lets-play .stumpgrass
{
        width: 50%;

}

.lets-play .trophy
{
    width: 11%;
    margin-top: 15%;
    margin-left: -21%;

}

.lets-play .arrow{
    width: 13%;
    margin-top: 5%;

}

.letsplay-div {
    margin-top: -10%;
    margin-left: -32%;
}

.lets-play h4 {
    font-family: Signika;
    font-size: 25px;
    font-weight: 700;
    line-height: 2.53px;
    text-align: center;
    color: #B70303;
    margin-right: -17%;
    margin-top: -21%;
}

.lets-play p {
    font-family: Poppins;
    font-size: 8px;
    font-weight: 400;
    line-height: 32.34px;
    text-align: center;
    color: #235000;
    margin-left: 165px;
}

.howzzat {
    width: 10%;
    border-radius: 10px;
    /* margin-top: -7%; */
/*    margin-left: 55%;
*/}

.howzzat h3 {
    font-family: Poppins;
    font-size: 3px;
    font-weight: 600;
    line-height: 23px;
    text-align: center;
    color: #FFFFFF;
}

.lets-play .cartoon{
   width: 20%;
    margin-left: 72%;
    margin-top: -16%;
}

.lets-play .vector{
    width: 19%;
    float: inline-end;
    margin-top: -21%;
    margin-right: 8%;
}

.lets-play .vector_side{
    width: 5%;
    margin-top: -30%;
    margin-left: -5%;
}

.lets-play .vector_side_one{
   width: 5%;
    margin-top: -30%;
    margin-left: -23%;
}

.lets-play .grass_one{
    border-radius: 0px;
    margin-top: 14%;
}

.lets-play .trophy_two{
    
    display: none;
}

.scrollToTop {
        right: 25%;
    }

    .grass_two {
    float: inline-end;
    margin-top: -33px;
    border-radius: 0px;
    margin-right: -125px;
}

.grass-row {
    margin-top: -77px;
}

}

@media (min-width: 410px){

    .grass-row {
        margin-top: -111px;
    }

    .grass_two {
        float: inline-end;
        margin-top: -37px;
        border-radius: 0px;
        margin-right: -125px;
    }

}

@media (min-width: 1023px) and (max-width: 1050px){

    .decision-section .header-text {
    font-size: 34px!important;
    
}

.carousel-control-next {
    right: -13%;
}

.decision-players-section {
    margin-top: -210px;
}

.mt-5, .my-5 {
    margin-top: 15rem !important;
}

.col-md-7 {
    -ms-flex: 0 0 58.333333%;
    flex: 0 0 58.333333%;
    max-width: 60.333333%;
}


    .lets-play-new .stumpgrass {
    width: 65%;
    margin-left: -51%;
    margin-top: 2%;
}

.lets-play-new a .btn {
    width: 50% !important;

        margin-top: 4%;

}

.lets-play-new .grass_three {
    border-radius: 0px;
    margin-top: 14.1px;
    margin-left: 11%;
}

.lets-play-new .grass_two {
    float: inline-end;
    margin-top: -69px !important;
    border-radius: 0px;
    margin-right: 0px !important;
}

.lets-play-new h4 {
   
    line-height: 45.84px;
}

.lets-play-new .grass_one {
    margin-top: -22%;
    margin-left: 25%;
}

   

    .lets-play .cartoon {
        width: 21%!important;
        margin-left: 72%;
        margin-top: -8%;
    }

 

.section_one h6 {
    font-family: Spicy Rice;
    font-size: 15px;
    font-weight: 400;
    line-height: 21.63px;
    letter-spacing: 0.07em;
    text-align: center;
    color: #FFFFFF;
    margin-top: -45%;
    margin-left: 5%;
}

        .section_one .vector{
    width:60%; margin-top: -69%!important; margin-left: -22%;

}


        .decision-section img {
            margin-left: 0;
            margin-top: -10%;
        }

        .play {
    background: #FFFFFF;
    border-radius: 15px;
    opacity: 0px;
    font-family: Signika;
    font-size: 15px;
    font-weight: 700;
    line-height: 20.89px;
    text-align: center;
    color: #B70303;
    padding-left: 2%;
    padding-right: 2%;
    margin-right: 10%;
}

        .play_now_div{
            margin-top: 0%
        }

        .section_one-bg {
    background: url(http://localhost/crickmatch/assets/img/union.png) no-repeat;
    height: 0hv;
    /* width: 100%; */
}

.players-section {
    background: url(http://localhost/crickmatch/assets/img/home/bg_decision1.png) no-repeat center;
    padding: 8%;
    padding-top: 14%;
    border-radius: 15%;
    padding-bottom: 36%;
}

.trophy-players-section {
    height: 159px;
    width: 162px;
    margin-top: -42%;
    margin-top: -44%;
    margin-left: 252px;
}

.decision-cricket-bat {
    margin-top: -36% !important;
    margin-left: -13% !important;
    height: 149px;
    width: 188px;
}

    .lets-play .stumpgrass {
        width: 24%!important;
    }

    .lets-play .arrow {
        width: 8%;
        margin-top: -8%!important;
        margin-left: 0%!important;
    }

    .letsplay-div {
        margin-top: -20%;
    }

        .lets-play h4 {
        font-family: Signika;
        font-size: 25px;
        font-weight: 700;
        line-height: 2.53px;
        text-align: center;
        color: #B70303;
        margin-right: 9%!important;
    }

    .lets-play{
            margin-top: 11%;

    }

    .cricket-bat-man {
    margin-top: -44px;
    float: inline-end;
    margin-right: 15%;
    height: 44%;
}

.cricket-bat_divide_one {
    width: 5%;
    float: inline-end;
    margin-top: 27%;
    margin-right: -70%;
}

    .cricket-bat_scaleone {
    width: 5%;
    margin-top: 13%!important;
    margin-left: 17%!important;
}

        .lets-play .cartoon {
        width: 20%;
        margin-left: 72%;
        margin-top: -8%;
    }

        .lets-play .vector {
        width: 20%!important;
        float: inline-end;
        margin-top: -17%!important;
        margin-right: 7%!important;
    }

    .lets-play .vector_side_one {
        width: 5%;
        margin-top: -19%!important;
        margin-left: -24%!important;
    }

    .lets-play .vector_side {
        width: 5%;
        margin-top: -19%!important;
        margin-left: -4%!important;
    }

    /*.grass_one {
        margin-top: 16px!important;
    }*/

        .grass_two {
        float: inline-end;
        margin-top: -97px !important;
        border-radius: 0px;
        margin-right: -287px !important;
    }

    .cricket-bat_divide_one {
    width: 5%;
    float: inline-end;
    margin-top: 18%!important;
    margin-right: -59%!important;
}

.cricket-bat_wrong_two {
    width: 5%;
    float: inline-end;
    margin-top: 42%!important;
    margin-right: -66%!important;
}

.v1 {
    margin-top: -135%;
    width: 5%;
}

.cricket-bat-man {
        margin-top: 90px;
        float: inline-end;
        margin-right: 0px;
        height: 73%;
    }

    .carousel-control-prev {
    left: -15%;
}


.lets-play-new .cartoon {
    width: 45%;
    margin-top: -7%;
    padding-bottom: 13px;
}



   
}

@media (min-width: 300px) and (max-width: 399px){


    .lets-play-new p {
        font-family: Poppins;
        font-size: 7px!important;
        font-weight: 400;
        line-height: 17px!important;
        text-align: center;
        color: #235000;
        
    }

    nav a{
        margin-top: 1%;
    margin-bottom: 1%;
    }

    .lets-play-new a .btn {
    width: 26% !important;
}

.cricket-bat-man {
    margin-top: 62px !important;
    float: inline-end;
    margin-right: 2% !important;
    height: 73% !important;
}

    

    .lets-play-new h4 {
        font-family: Signika;
        font-size: 15px!important;
        font-weight: 700;
        line-height: 1px!important;
        text-align: center;
        color: #B70303;
    }


    .lets-play-new .stumpgrass {
        width: 35%!important;
    }

    .howzzat {
        width: 23%!important;
        border-radius: 10px;
/*        margin-left: 45%!important;
*/        margin-top: -1%!important;
        font-size: 8px!important;
        line-height: 17px!important;
    }

.decision-players-section {
    margin-top: 0px!important;
}
    
.lets-play-new .grass_one {
    margin-top: -16%!important;
    margin-left: 0%!important;
    width: 60%;
}

    .lets-play-new .arrow {
        width: 12% !important;
        margin-top: -8% !important;
        margin-left: -8% !important;
/*        margin-top: -80px!important;
*/    }

    
        .lets-play-new .cartoon {
        width: 24% !important;
        margin-left: 67%;
        margin-top: -68%;
    }

    .lets-play-new .grass_two {
       display: none;
    }

    .lets-play-new .stumpgrass {
        width: 32%;
        margin-left: -29%;
        margin-top: 1%;
    }

        .lets-play-new .letsplay-trophy {
        width: 8%;
        margin-top: 8%;
        margin-left: 18%;
    }

    .lets-play-new .vector_side {
    width: 7%;
    margin-top: -93%;
        margin-left: 71%;
  }

  .lets-play-new .vector_side_one {
    width: 7%;
    margin-top: -103%;
    margin-left: 91%!important;

 }


    .lets-play-new .grass_three {
    border-radius: 0px;
    margin-top: -35%;
    margin-left: 39%;
    width: 60%;
}

      .lets-play-new .vector {
        width: 23% !important;
        float: inline-end;
        margin-top: -39% !important;
        margin-right: 4% !important;
    }

    

    .grass_two {
        float: inline-end;
        margin-top: -32px!important;
        border-radius: 0px;
        margin-right: -125px;
    }

    .letsplay-div {
        margin-top: -35%!important;
    }

    .howzzat-btn{
            margin-top: -23%!important;

    }


}


@media (min-width: 535px) and (max-width: 600px){

    .decision-players-section {
    margin-top: 0px!important;
}

    .trophy_two {
        float: inline-end;
        margin-top: -36px!important;
        border-radius: 0px!important;
        margin-right: -126px!important;
        display: block!important;

    }

   .lets-play-new p {
        font-family: Poppins;
        font-size: 7px!important;
        font-weight: 400;
        line-height: 17px!important;
        text-align: center;
        color: #235000;
        
    }

    .lets-play-new a .btn {
    width: 24% !important;
}

    

    .lets-play-new h4 {
        font-family: Signika;
        font-size: 15px!important;
        font-weight: 700;
        line-height: 1px!important;
        text-align: center;
        color: #B70303;
    }


    .lets-play-new .stumpgrass {
        width: 35%!important;
    }

    .howzzat {
        width: 23%!important;
        border-radius: 10px;
/*        margin-left: 45%!important;
*/        margin-top: -1%!important;
        font-size: 8px!important;
        line-height: 17px!important;
    }

    
.lets-play-new .grass_one {
    margin-top: -16%!important;
    margin-left: 0%!important;
    width: 60%;
}

    .lets-play-new .arrow {
        width: 12% !important;
        margin-top: -8% !important;
        margin-left: -8% !important;
/*        margin-top: -80px!important;
*/    }

    
        .lets-play-new .cartoon {
        width: 23% !important;
        margin-left: 67%!important;
        margin-top: -53%;
    }

    .lets-play-new .grass_two {
       display: none;
    }

    .lets-play-new .stumpgrass {
        width: 32%;
        margin-left: -28%;
        margin-top: 0%;
    }

        .lets-play-new .letsplay-trophy {
        width: 8%;
        margin-top: 5%;
        margin-left: 16%;
    }

  
      .lets-play-new .vector_side{
        width: 6%;
        margin-top: -76%!important;
        margin-left: 71%!important;
    }

  .lets-play-new .vector_side_one {
        width: 6%;
        margin-top: -83%!important;
        margin-left: 90%!important;
    }


 
    .lets-play-new .grass_three {
        border-radius: 0px;
        /* margin-top: -28%; */
        margin-left: 39%;
        width: 60%;
        margin-top: -148px;
    }

         .lets-play-new .vector {
        width: 23% !important;
        float: inline-end;
        margin-top: -34% !important;
        margin-right: 4% !important;
    }

   
    .howzzat-btn {
        margin-top: -20% !important;
/*        margin-left: -6%;
*/    }

    .letsplay-div {
        margin-top: -33%!important;
    }

    

}

@media (min-width: 360px) and (max-width: 370px) {

    .lets-play .cartoon {
        width: 20% !important;
        margin-left: 76%;
        margin-top: -15%!important;
    }

    .lets-play .vector {
        width: 20% !important;
        float: inline-end;
        margin-top: -20% !important;
        margin-right: 3% !important;
    }

    .grass-row {
        margin-top: -79px !important;
    }

    .grass_two {
        float: inline-end;
        margin-top: -33px !important;
        border-radius: 0px;
        margin-right: -98px!important;
    }

    .section_one .section_one_vector {
    margin-top: 147px;
    margin-bottom: 60px;
}

    .lets-play .vector_side_one {
        width: 5%;
        margin-top: -25%!important;
        margin-left: -26%!important;
    }

    .lets-play .arrow {
        width: 10% !important;
        margin-top: 2% !important;
        margin-left: -5% !important;
    }


    .trophy-players-section {
    height: 151px;
    width: 113px;
    margin-top: -42%;
    margin-top: -42%;
    margin-left: 236px;
}

.trophy-players-section {
    height: 151px;
    width: 113px;
    margin-top: -42%;
    margin-top: -42%;
    margin-left: 236px;
}

.cricket-bat_divide_one {
    width: 5%;
    float: inline-end;
    margin-top: 11%;
    margin-right: -60%;
}

.cricket-bat_wrong_two {
        width: 5%;
        float: inline-end;
        margin-top: 38%;
        margin-right: -64%;
    }

.cricket-bat-man {
        margin-top: -40px;
        float: inline-end;
        margin-right: 15%;
        height: 47%;
    }

.cricket-bat_scale {
    width: 5%;
    float: inline-end;
    margin-top: 0%;
}

.cricket-bat_wrong_one {
    width: 5%;
    float: inline-end;
    margin-top: -11%;
    margin-right: 29%;
}

.cricket-bat_scaleone{
    width:5%;
    margin-top: -20%;
    margin-left: 28%;
}

.v1 {
    margin-top: -455%;
    width: 5%;
}







}

@media (min-width: 1280px) and (max-width: 1299px) {


    .decision-players-section {
    margin-top: -36%!important;
}


    .cricket-bat_scaleone {
    width: 5%;
    margin-top: 15%;
    margin-left: 23%;
}

.cricket-bat-man {
    margin-top: -49px;
    float: inline-end;
    margin-right: 15%;
    height: 45%;
}

.cricket-bat_wrong_two {
        width: 5%;
        float: inline-end;
        margin-top: 37%;
        margin-right: -60%;
    }

.cricket-bat_divide_one {
    width: 5%;
    float: inline-end;
    margin-top: 20%;
    margin-right: -56%;
}


    .lets-play-new .arrow {
    margin-top: -8%;
    width: 33%;
}

.v1 {
    margin-top: -100%;
    width: 5%;
}

.lets-play-new a .btn {
    width: 38% !important;
}

.lets-play-new .grass_two {
    float: inline-end;
    margin-top: -87px !important;
    border-radius: 0px;
    margin-right: 0px !important;
}

.mt-5, .my-5 {
    margin-top: 30rem !important;
}

.lets-play-new .grass_one {
    margin-top: -21%;
    margin-left: 17%;
}

.lets-play-new .grass_three {
    border-radius: 0px;
    margin-top: 4%;
    margin-left: 9%;
}

.lets-play-new .stumpgrass {
    width: 65%;
    margin-left: -51%;
    margin-top: 2%;
}

    .grass_two {
        float: inline-end;
        margin-top: -111px;
        border-radius: 0px;
        margin-right: -351px;
    }

    .lets-play .stumpgrass {
        width: 40%!important;
    }

    .lets-play .cartoon {
    width: 25%!important;
    margin-left: 72%;
    margin-top: -11%!important;
}

.section_one h6 {
    font-family: Spicy Rice;
    font-size: 25px!important;
    font-weight: 400;
    line-height: 38.63px!important;
    letter-spacing: 0.07em;
    text-align: center;
    color: #FFFFFF;
    margin-top: -40%;
    margin-left: 5%;
}

.play_now_div {
    margin-top: -3%!important;
}

.grass-row {
        margin-top: -190px!important;
    }

    .lets-play h4 {
        font-family: Signika;
        font-size: 25px;
        font-weight: 700;
        line-height: 2.53px;
        text-align: center;
        color: #B70303;
        margin-right: 14%!important;
    }

    .lets-play p {
        font-family: Poppins;
        font-size: 15px!important;
        font-weight: 400;
        line-height: 32.34px;
        text-align: center;
        color: #235000;
            margin-left: 0px!important;

    }

    .lets-play .arrow {
        width: 10%!important;
        margin-top: 0%!important;
        margin-left: -7%!important;
    }

    .howzzat {
        width: 12%!important;
        border-radius: 10px;
/*        margin-left: 44%!important;
*/            margin-top: 6%!important;

    }

        .howzzat h3 {
        font-family: Poppins;
        font-size: 19px!important;
        font-weight: 600;
        line-height: 44px!important;
        text-align: center;
        color: #FFFFFF;
    }
}




@media (min-width: 371px) and (max-width: 395px) {

    .decision-cricket-bat {
    margin-top: -40% !important;
    margin-left: -16% !important;
    height: 126px;
    width: 188px;
}

.lets-play-new .grass_three {
        margin-top: -34%;
        
    }


    .lets-play-new .stumpgrass {
    width: 32%;
    margin-left: -27%;
    margin-top: 1%;
}

.lets-play-new .letsplay-trophy {
    width: 8%;
    margin-top: 5%;
    margin-left: 17%;
}

.lets-play-new .arrow {
    margin-top: -8%;
    width: 14%;
}

    .lets-play .cartoon {
        width: 20% !important;
        margin-left: 76%;
        margin-top: -15%!important;
    }

    .lets-play .vector {
        width: 20% !important;
        float: inline-end;
        margin-top: -20% !important;
        margin-right: 3% !important;
    }

    .grass-row {
        margin-top: -79px !important;
    }

    .grass_two {
        float: inline-end;
        margin-top: -36px !important;
        border-radius: 0px;
        margin-right: -98px!important;
    }

    .lets-play .vector_side_one {
        width: 5%;
        margin-top: -25%!important;
        margin-left: -26%!important;
    }

    .lets-play .arrow {
        width: 10% !important;
        margin-top: 2% !important;
        margin-left: -5% !important;
    }

    .trophy-players-section {
    height: 130px;
    width: 130px;
    margin-top: -42%;
    margin-top: -42%;
    margin-left: 225px;
}

.lets-play .letsplay-trophy {
    width: 7%;
    margin-top: 5%;
    margin-left: 16%;
}

.lets-play .stumpgrass {
        width: 35% !important;
        margin-left: -28%!important;

}

.cricket-bat-man {
    margin-top: -114px;
    float: inline-end;
    margin-right: 15%;
    height: 50%;
}

.cricket-bat_divide_one {
    width: 5%;
    float: inline-end;
    margin-top: 0%;
    margin-right: -58%;
}


.v1 {
    margin-top: -393%;
    width: 5%;
}

.cricket-bat_wrong_two {
        width: 6%;
        float: inline-end;
        margin-top: 19%;
        margin-right: -65%;
    }



}

@media (min-width: 410px) and (max-width: 450px) {

    .decision-cricket-bat {
    margin-top: -42% !important;
    margin-left: -14% !important;
    height: 149px;
    width: 188px;
}

     .lets-play .stumpgrass {
        width: 35%!important;
    }

        .howzzat {
        width: 18%!important;
        border-radius: 10px;
        margin-left: 35%!important;
    }

    .lets-play h4 {
        font-family: Signika;
        font-size: 17px!important;
        font-weight: 700;
        line-height: 1px!important;
        text-align: center;
        color: #B70303;
        margin-right: 16%;
    }

    .lets-play p {
        font-family: Poppins;
        font-size: 10px;
        font-weight: 400;
        line-height: 17px!important;
        text-align: center;
        color: #235000;
    }

    .lets-play p {
        font-family: Poppins;
        font-size: 8px;
        font-weight: 400;
        line-height: 32.34px;
        text-align: center;
        color: #235000;
        margin-left: 53px!important;
    }

    .lets-play .arrow {
        width: 10%!important;
        margin-top: 0%!important;
        margin-left: -5%!important;
    }

    .letsplay-div {
        margin-top: -22%;
/*        margin-left: -13%!important;
*/    }

    .howzzat h3 {
        font-family: Poppins;
        font-size: 8px;
        font-weight: 600;
        line-height: 25px!important;
        text-align: center;
        color: #FFFFFF;
    }

    .lets-play .cartoon {
        width: 20%;
        margin-left: 72%;
        margin-top: -13% !important;
    }

    .lets-play .vector {
        width: 22%!important;
        float: inline-end;
        margin-top: -19%!important;
        margin-right: 5%!important;
    }

    .lets-play .vector_side_one {
        width: 5%;
        margin-top: -24%;
        margin-left: -25%!important;
    }

      .grass_two {
        float: inline-end;
        margin-top: -36px !important;
        border-radius: 0px !important;
        margin-right: -125px !important;
    }

    .grass-row {
    margin-top: -117px !important;
}


.lets-play .letsplay-trophy {
    width: 7%;
    margin-top: 5%;
    margin-left: 20%;
}

.lets-play .stumpgrass {
    margin-left: -28%;
}

.trophy-players-section {
    height: 127px;
    width: 145px;
    margin-top: -42%;
    margin-top: -38%;
    margin-left: 250px;
}

.v1 {
    margin-top: -363%;
    width: 5%;
}

.cricket-bat-man {
    margin-top: 67px !important;
    float: inline-end;
    margin-right: 4% !important;
    height: 73% !important;
}

.cricket-bat_divide_one {
        width: 5%;
        float: inline-end;
        margin-top: 15%;
        margin-right: -54%;
    }


.cricket-bat_wrong_two {
        width: 6%;
        float: inline-end;
        margin-top: 31%;
        margin-right: -54%;
    }


.cricket-bat_scaleone {
    width: 5%;
    margin-top: 13%;
    margin-left: 29%;
}




}


@media (min-width: 851px) and (max-width: 890px) {

    .section_one h6 {
    font-family: Spicy Rice;
    font-size: 15px;
    font-weight: 400;
    line-height: 21.63px;
    letter-spacing: 0.07em;
    text-align: center;
    color: #FFFFFF;
    margin-top: -45%;
    margin-left: 5%;
}

        .section_one .vector{
    width:60%; margin-top: -69%!important; margin-left: -22%;

}
 .decision-section img {
            margin-left: 0;
            margin-top: -10%;
        }

        .play {
    background: #FFFFFF;
    border-radius: 15px;
    opacity: 0px;
    font-family: Signika;
    font-size: 15px;
    font-weight: 700;
    line-height: 20.89px;
    text-align: center;
    color: #B70303;
    padding-left: 2%;
    padding-right: 2%;
    margin-right: 10%;
}
    .play_now_div{
            margin-top: -5%
        }

        .section_one-bg {
    background: url(http://localhost/crickmatch/assets/img/union.png) no-repeat;
    height: 800px;
    /* width: 100%; */
}

 .lets-play-new .stumpgrass {
    width: 72%!important;
    margin-left: -59%!important;
    margin-top: 0%;
}

.decision-players-section {
    margin-top: 0px;
}

.lets-play-new .cartoon {
    width: 60%;
    margin-top: -17%;
}

.letsplay-div {
        margin-top: -22%;
        margin-left: -37%;
    }
.lets-play-new .letsplay-trophy {
    width: 18%;
 margin-top: 13%;
    margin-left: 38%;
}
.lets-play-new h4 {
    font-family: Signika;
    font-size: 20px!important;
    font-weight: 700;
    line-height: 2.53px!important;
    text-align: center;
    color: #B70303;
}


.lets-play-new .vector_side_one {
    width: 15%;
    margin-top: -111%;
    margin-left: 2%;
}

.lets-play-new .vector_side {
        width: 15%;
        margin-top: -109%;
        margin-left: -7%;
    }

.lets-play-new p {
    font-family: Poppins;
    font-size: 10px!important;
    font-weight: 400;
    line-height: 32.34px;
    color: #235000;
}


.lets-play-new .grass_two {
    float: inline-end;
    margin-top: -74px !important;
    border-radius: 0px;
    margin-right: 0px !important;
}

.lets-play-new .grass_one {
        margin-top: -25%;
        margin-left: 28%;
    }
.lets-play-new .grass_three {
        border-radius: 0px;
        margin-top: 8%;
        margin-left: 14%;
    }

    .lets-play-new a .btn {
    width: 59% !important;
}

        .lets-play-new .arrow {
        width: 33%;
        margin-top: -26%;
        margin-left: -6%;
    }

   .howzzat-btn {
        margin-left: -23%;
        margin-top: 8%;
    }

.howzzat {
    width: 10%;
    border-radius: 10px;
    margin-left: 45%!important;
    font-size: 14px;
    font-weight: 600;
  line-height: 17px;
    text-align: center;
    color: #FFFFFF;
}

.decision-section p {
    font-family: Signika;
    font-size: 18px;
    font-weight: 300;
    line-height: 21.04px;
    text-align: left;
}

.decision-cricket-bat {
    margin-top: -45% !important;
    margin-left: -19% !important;
    height: 135px;
    width: 188px;
}

.players-section {
    
    border-radius: 8%;
    
}

.trophy-players-section {
    height: 132px;
    width: 160px;
    margin-top: -42%;
    margin-top: -50%;
    margin-left: 149px;
}


    



}

@media (min-width: 900px) and (max-width: 1000px){

    .grass_two {
        float: inline-end;
        margin-top: -87px !important;
        border-radius: 0px;
        margin-right: -276px !important;
    }

    .grass-row {
        margin-top: -138px;
    }

    .lets-play .cartoon {
        width: 25%;
        margin-left: 72%;
        margin-top: -9%;
    }

    .section_one h6 {
    font-family: Spicy Rice;
    font-size: 15px;
    font-weight: 400;
    line-height: 21.63px;
    letter-spacing: 0.07em;
    text-align: center;
    color: #FFFFFF;
    margin-top: -45%;
    margin-left: 5%;
}

        .section_one .vector{
    width:60%; margin-top: -69%!important; margin-left: -22%;

}
 .decision-section img {
            margin-left: 0;
            margin-top: -10%;
        }

        .play {
    background: #FFFFFF;
    border-radius: 15px;
    opacity: 0px;
    font-family: Signika;
    font-size: 15px;
    font-weight: 700;
    line-height: 20.89px;
    text-align: center;
    color: #B70303;
    padding-left: 2%;
    padding-right: 2%;
    margin-right: 10%;
}
    .play_now_div{
            margin-top: 0%
        }

        .section_one-bg {
    background: url(http://localhost/crickmatch/assets/img/union.png) no-repeat;
    height: 800px;
    /* width: 100%; */
}

    /*.grass_two {
        float: inline-end;
        margin-top: -97px !important;
        border-radius: 0px;
        margin-right: -287px !important;
    }
*/
}


@media (min-width: 1430px) and (max-width: 1442px){


.lets-play-new .grass_one {
    margin-top: -20%;
    margin-left: 15%;
}

.cricket-bat-man {
    margin-top: 139px;
    float: inline-end;
    margin-right: 15%;
    height: 60%;
}

.lets-play-new .grass_three {
    border-radius: 0px;
    margin-top: 1.6%;
    margin-left: 7%;
}

.lets-play-new .grass_two {
    float: inline-end;
    margin-top: -99px !important;
    border-radius: 0px;
    margin-right: 0px !important;
}

.mt-5, .my-5 {
    margin-top: 12rem !important;
}


}



@media (max-width: 1400px){

.lets-play .stumpgrass {
    width: 50%;
}
.letsplay-div {
    margin-top: -22%;
    margin-left: 1%;
}

.lets-play h4 {
    font-family: Signika;
    font-size: 25px;
    font-weight: 700;
    line-height: 2.53px;
    text-align: center;
    color: #B70303;
    margin-right: 16%;
}

.grass_one{
    margin-top: 9%;
}  

.lets-play .vector_side_one {
    width: 5%;
    margin-top: -24%;
    margin-left: -29%;
}

.lets-play .vector_side {
    width: 5%;
    margin-top: -24%;
   margin-left: -4%;
}
.lets-play p {
    font-family: Poppins;
    font-size: 10px;
    font-weight: 400;
    line-height: 32.34px;
    text-align: center;
    color: #235000;
}


 

.lets-play .arrow {
        width: 8%;
        margin-top: 7%;
        margin-left: -10%;
    }

.howzzat {
    width: 10%;
    border-radius: 10px;
/*    margin-left: 50%;
*/}

.howzzat h3 {
    font-family: Poppins;
    font-size: 8px;
    font-weight: 600;
    line-height: 36px;
    text-align: center;
    color: #FFFFFF;
}

/*.lets-play .cartoon {
    width: 25%;
    margin-left: 72%;
    margin-top: -12%;
}*/

.lets-play .vector {
    width: 25%;
    float: inline-end;
    margin-top: -21%;
    margin-right: 2%;
}



}

/*@media (max-width: 768px) {
.lets-play-new .row {
    display: -ms-flexbox;
    display: flex;
    -ms-flex-wrap: wrap;
    margin-right: -15px;
    margin-left: -15px;
    flex-wrap: nowrap;
    flex-direction: row;
}

}*/

@media (min-width: 768px) and (max-width: 810px) {


    .decision-section p {
    font-family: Signika;
    font-size: 19px;
    font-weight: 300;
    line-height: 23.04px;
    text-align: left;
}


        .lets-play-new .stumpgrass {
    width: 72%!important;
    margin-left: -59%!important;
    margin-top: 1%;
}

.decision-players-section {
    margin-top: 0px;
}

.letsplay-div {
        margin-top: -22%;
    }
.lets-play-new .letsplay-trophy {
    width: 18%;
    margin-top: 13%;
    margin-left: 38%;
}
.col-md-7 {
    -ms-flex: 0 0 58.333333%;
    flex: 0 0 58.333333%;
    max-width: 60.333333%;
}

.decision-cricket-bat {
    margin-top: -34% !important;
    margin-left: -13% !important;
    height: 112px;
    width: 166px;
}



.lets-play-new h4 {
    font-family: Signika;
    font-size: 20px!important;
    font-weight: 700;
    line-height: 2.53px!important;
    text-align: center;
    color: #B70303;
}


.lets-play-new .vector_side_one {
    width: 5%;
    margin-top: -24%;
    margin-left: -29%;
}

.lets-play-new .vector_side {
    width: 5%;
    margin-top: -24%;
   margin-left: -4%;
}

.lets-play-new p {
    font-family: Poppins;
    font-size: 10px!important;
    font-weight: 400;
    line-height: 32.34px;
    text-align: center;
    color: #235000;
}


.lets-play-new .grass_two {
    float: inline-end;
    margin-top: -54px !important;
    border-radius: 0px;
    margin-right: 0px !important;
}

.lets-play-new .grass_one {
        margin-top: -26%;
        margin-left: 28%;
    }
.lets-play-new .grass_three {
        border-radius: 0px;
        margin-top: 8%;
        margin-left: 14%;
    }

.cricket-bat-man {
        margin-top: 115px!important;
        float: inline-end;
        margin-right: 0%;
        height: 100%!important;
    }
    .lets-play-new a .btn {
    width: 59% !important;
}

.carousel-control-next {
    right: -15%;
}

.carousel-control-prev {
    left: -15%;
}

.trophy_upcoming_match {
    margin-right: -80%;
    margin-top: -92%;
    width: 50%;
}

nav a{
    margin-top: 1%;
    margin-bottom: 1%;
}

        .lets-play-new .arrow {
        width: 33%;
        margin-top: -26%;
        margin-left: -6%;
    }

   .howzzat-btn {
        margin-left: -23%;
        margin-top: 8%;
    }

.howzzat {
    width: 10%;
    border-radius: 10px;
    margin-left: 38%!important;
    font-size: 14px;
    font-weight: 600;
    line-height: 17px;
    text-align: center;
    color: #FFFFFF;
}

.lets-play-new .vector_side_one {
        width: 15%;
        margin-top: -128%;
        margin-left: -9%;
    }

    .lets-play-new .vector_side {
        width: 14%;
        margin-top: -108%;
        margin-left: 53%;
    }



.lets-play-new .cartoon {
    width: 60%;
    margin-top: -22%;
}

.lets-play .vector {
    width: 25%;
    float: inline-end;
    margin-top: -21%;
    margin-right: 2%;
}

  .section_one h6 {
    font-family: Spicy Rice;
    font-size: 15px;
    font-weight: 400;
    line-height: 21.63px;
    letter-spacing: 0.07em;
    text-align: center;
    color: #FFFFFF;
    margin-top: -45%;
    margin-left: 5%;
}

        .section_one .vector{
    width:60%; margin-top: -69%!important; margin-left: -22%;

}


        .decision-section img {
            margin-left: 0;
            margin-top: -10%;
        }

 .play {
    background: #FFFFFF;
    border-radius: 15px;
    opacity: 0px;
    font-family: Signika;
    font-size: 15px;
    font-weight: 700;
    line-height: 20.89px;
    text-align: center;
    color: #B70303;
    padding-left: 2%;
    padding-right: 2%;
    margin-right: 10%;
}

        .play_now_div{
            margin-top: -7%
        }

        .section_one-bg {
    background: url(http://localhost/crickmatch/assets/img/union.png) no-repeat;
    height: 800px;
}
.decision-players-section .col-md-5{

    margin-top: 0%;

}

.decision-players-section .col-md-5 .trophy{

     float: inline-end;
     width:35%; 
     margin-right: -50px;
     opacity: 99%;"
   
     }




     .trophy-players-section {
        height: 111px;
        width: 122px;
        margin-top: -42%;
        margin-top: -48%;
        margin-left: 175px;
    }

 .lets-play .letsplay-trophy {
    width: 7%;
    margin-top: 7%;
    margin-left: 19%;
}

.grass-row {
    margin-top: -118px !important;
}

.players-section {
    background: url(http://localhost/crickmatch/assets/img/home/bg_decision1.png) no-repeat center;
    padding: 8%;
    padding-top: 14%;
    border-radius: 8%;
    padding-bottom: 33%;
}

.cricket-bat_scaleone {
    width: 5%;
    margin-top: 17%;
    margin-left: 17%;
}

.cricket-bat_scale {
    width: 5%;
    float: inline-end;
    margin-top: 23%;
}

.cricket-bat_wrong_one {
    width: 5%;
    float: inline-end;
    margin-top: 10%;
    margin-right: 36%;
}

.cricket-bat_divide_one {
    width: 5%;
    float: inline-end;
    margin-top: 25%;
    margin-right: -66%;
}

.cricket-bat_wrong_two {
    width: 5%;
    float: inline-end;
    margin-top: 51%;
    margin-right: -71%;
}


.cricket-bat-man {
    margin-top: -13px;
    float: inline-end;
    margin-right: 15%;
    height: 44%;
}

.section_one .section_one_vector {
    margin-top: 147px;
}

.v1 {
    margin-top: -143%;
    width: 5%;
}



}


@media (min-width: 811px) and (max-width: 850px) {

    .decision-section p {
    font-family: Signika;
    font-size: 19px;
    font-weight: 300;
    line-height: 22.04px;
}


       .lets-play-new .stumpgrass {
    width: 72%!important;
    margin-left: -59%!important;
    margin-top: 0%;
}

.decision-players-section {
    margin-top: 0px;
}

.lets-play-new .cartoon {
    width: 60%;
    margin-top: -25%;
}

.letsplay-div {
        margin-top: -22%;
    }
.lets-play-new .letsplay-trophy {
    width: 18%;
 margin-top: 13%;
    margin-left: 38%;
}
.lets-play-new h4 {
    font-family: Signika;
    font-size: 20px!important;
    font-weight: 700;
    line-height: 2.53px!important;
    color: #B70303;
}


.lets-play-new .vector_side_one {
    width: 15%;
    margin-top: -111%;
    margin-left: 2%;
}

.lets-play-new .vector_side {
        width: 15%;
        margin-top: -109%;
        margin-left: -7%;
    }

.lets-play-new p {
    font-family: Poppins;
    font-size: 10px!important;
    font-weight: 400;
    line-height: 32.34px;
    color: #235000;
}


.lets-play-new .grass_two {
    float: inline-end;
    margin-top: -52px !important;
    border-radius: 0px;
    margin-right: 0px !important;
}

.lets-play-new .grass_one {
        margin-top: -25%;
        margin-left: 28%;
    }
.lets-play-new .grass_three {
        border-radius: 0px;
        margin-top: 8%;
        margin-left: 14%;
    }

    .lets-play-new a .btn {
    width: 59% !important;
}

        .lets-play-new .arrow {
        width: 33%;
        margin-top: -26%;
        margin-left: -6%;
    }

   .howzzat-btn {
        margin-left: -15%;
        margin-top: 8%;
    }

.howzzat {
    width: 10%;
    border-radius: 10px;
    margin-left: 38%!important;
    font-size: 14px;
    font-weight: 600;
  line-height: 17px;
    text-align: center;
    color: #FFFFFF;
}
.col-md-7 {
    -ms-flex: 0 0 58.333333%;
    flex: 0 0 58.333333%;
    max-width: 60.333333%;
}

.decision-cricket-bat {
    margin-top: -34% !important;
    margin-left: -13% !important;
    height: 112px;
    width: 166px;
}







  .section_one h6 {
    font-family: Spicy Rice;
    font-size: 15px;
    font-weight: 400;
    line-height: 21.63px;
    letter-spacing: 0.07em;
    text-align: center;
    color: #FFFFFF;
    margin-top: -45%;
    margin-left: 5%;
}

        .section_one .vector{
    width:60%; margin-top: -69%!important; margin-left: -22%;

}


        .decision-section img {
            margin-left: 0;
            margin-top: -10%;
        }

 .play {
    background: #FFFFFF;
    border-radius: 15px;
    opacity: 0px;
    font-family: Signika;
    font-size: 15px;
    font-weight: 700;
    line-height: 20.89px;
    text-align: center;
    color: #B70303;
    padding-left: 2%;
    padding-right: 2%;
    margin-right: 10%;
}

        .play_now_div{
            margin-top: -7%
        }

        .section_one-bg {
    background: url(http://localhost/crickmatch/assets/img/union.png) no-repeat;
    height: 800px;
}
.decision-players-section .col-md-5{

    margin-top: 0%;

}

.decision-players-section .col-md-5 .trophy{

     float: inline-end;
     width:35%; 
     margin-right: -50px;
     opacity: 99%;"
   
     }




     .trophy-players-section {
        height: 111px;
        width: 122px;
        margin-top: -42%;
        margin-top: -48%;
        margin-left: 175px;
    }

 .lets-play .letsplay-trophy {
    width: 7%;
    margin-top: 7%;
    margin-left: 19%;
}

.grass-row {
        margin-top: -127px !important;
    }

.players-section {
    background: url(http://localhost/crickmatch/assets/img/home/bg_decision1.png) no-repeat center;
    padding: 8%;
    padding-top: 14%;
    border-radius: 8%;
    padding-bottom: 33%;
}

.cricket-bat_scaleone {
    width: 5%;
    margin-top: 17%;
    margin-left: 17%;
}

.cricket-bat_scale {
    width: 5%;
    float: inline-end;
    margin-top: 23%;
}

.cricket-bat_wrong_one {
    width: 5%;
    float: inline-end;
    margin-top: 10%;
    margin-right: 36%;
}

.cricket-bat_divide_one {
    width: 5%;
    float: inline-end;
    margin-top: 25%;
    margin-right: -66%;
}

.cricket-bat_wrong_two {
    width: 5%;
    float: inline-end;
    margin-top: 51%;
    margin-right: -71%;
}


.cricket-bat-man {
    margin-top: -13px;
    float: inline-end;
    margin-right: 15%;
    height: 44%;
}

.section_one .section_one_vector {
    margin-top: 147px;
}

.v1 {
    margin-top: -143%;
    width: 5%;
}



}


@media (min-width: 910px) and (max-width: 950px) {


     .lets-play-new .stumpgrass {
    width: 72%!important;
    margin-left: -59%!important;
    margin-top: 0%;
}

.decision-players-section {
    margin-top: 0px;
}

.lets-play-new .cartoon {
    width: 60%;
    margin-top: -18%;
}

.letsplay-div {
        margin-top: -22%;
    }
.lets-play-new .letsplay-trophy {
    width: 18%;
 margin-top: 13%;
    margin-left: 38%;
}
.lets-play-new h4 {
    font-family: Signika;
    font-size: 20px!important;
    font-weight: 700;
    line-height: 2.53px!important;
    text-align: center;
    color: #B70303;
}


.lets-play-new .vector_side_one {
    width: 15%;
    margin-top: -111%;
    margin-left: 2%;
}

.lets-play-new .vector_side {
        width: 15%;
        margin-top: -109%;
        margin-left: -7%;
    }

.lets-play-new p {
    font-family: Poppins;
    font-size: 10px!important;
    font-weight: 400;
    line-height: 32.34px;
    color: #235000;
}


.lets-play-new .grass_two {
    float: inline-end;
    margin-top: -77px !important;
    border-radius: 0px;
    margin-right: 0px !important;
}

.lets-play-new .grass_one {
        margin-top: -24%;
        margin-left: 28%;
    }
.lets-play-new .grass_three {
        border-radius: 0px;
        margin-top: 9%;
        margin-left: 14%;
    }

    .lets-play-new a .btn {
    width: 59% !important;
}

        .lets-play-new .arrow {
        width: 33%;
        margin-top: -26%;
        margin-left: -6%;
    }

   .howzzat-btn {
        margin-left: -15%;
        margin-top: 26px;
    }

.howzzat {
    width: 10%;
    border-radius: 10px;
    margin-left: 38%!important;
    font-size: 14px;
    font-weight: 600;
  line-height: 17px;
    text-align: center;
    color: #FFFFFF;
}

.col-md-7 {
    flex: 0 0 58.333333%;
    max-width: 61.333333%;
}

    .trophy-players-section {
        height: 128px;
        width: 120px;
        margin-top: -42%;
        margin-top: -53%;
        margin-left: 180px;
    }

    

    .cricket-bat-man {
    margin-top: -154px;
    float: inline-end;
    margin-right: 15%;
    height: 45%;
}

.decision-cricket-bat {
    margin-top: -43% !important;
    margin-left: -16% !important;
    height: 149px;
    width: 188px;
}

.decision-section p {
    font-family: Signika;
    font-size: 18px;
    font-weight: 300;
    line-height: 21.04px;
    text-align: left;
}


}

@media (min-width: 539px) and (max-width: 545px) {

.cricket-bat-man {
    margin-top: 124px !important;
    float: inline-end;
    margin-right: 18% !important;
    height: 47% !important;
}


.live-cricket-header {
    font-family: Spicy Rice;
    font-size: 35px;
    font-weight: 400;
    line-height: 60.84px;
    letter-spacing: 0.01em;
    text-align: center;
    margin-top: -5%;
    color: #B70303 !important;
}

.testimonials .testi h2 {
    color: #B70303 !important;
    font-family: Spicy Rice;
    font-size: 35px;
    font-weight: 400;
    line-height: 60px;
    text-align: center;
}




.lets-play-new .grass_one {
        margin-top: -13% !important;
        margin-left: 0% !important;
        width: 60%;
    }

    .lets-play-new .grass_three {
        border-radius: 0px;
        /* margin-top: -28%; */
        margin-left: 39%;
        width: 60%;
        margin-top: -151px;
    }

    .lets-play-new .cartoon {
        width: 23% !important;
        margin-left: 67% !important;
        margin-top: -57%;
    }


}

/* Full-Screen Popup */
        .popup-container {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.8);
            display: flex;
            justify-content: center;
            align-items: center;
            z-index: 1000;
            display: none;
        }

        /* Popup Content */
        .popup-content {
            position: relative;
            max-width: 100%;
            max-height: 100%;
            /*border-radius: 10px;*/
            overflow: hidden;
        }

        .popup-content img {
            width: 100%;
            height: 100%;
            display: block;
            border-radius: 0px;
        }

        /* Close Button */
        .close-btn {
            position: absolute;
            top: 15px;
            right: 15px;
            background: white;
            color: black;
            font-size: 20px;
            font-weight: bold;
            width: 30px;
            height: 30px;
            display: flex;
            justify-content: center;
            align-items: center;
            border-radius: 50%;
            cursor: pointer;
            box-shadow: 0px 0px 5px rgba(255, 255, 255, 0.5);
        }

        .close-btn:hover {
            background: red;
            color: white;
        }

        /* Responsive adjustments */
        @media (max-width: 768px) {
            .popup-content {
                max-width: 80%;
                max-height: 70%;
            }
        }


/* Change Image for Mobile */
        @media (max-width: 900px) {
            .popup-content img {
                overflow: hidden;
                content: url('https://cricmaths.com/testcric/assets/mascot/mobilepop1.png') !important; /* Mobile image */
            }
            
            .popup-content img {
            width: 100%;
            height: 130vh !important;
            display: block;
            border-radius: 0px;
           
        }
        
        .popup-container {
           
           width: 120%;
           height: 230vh !important;
            /*margin-top:%;*/
           
        }
        }














 

</style>

<!-- Full-Screen Popup -->
    <div class="popup-container" id="popup">
        <div class="popup-content">
            <span class="close-btn" id="closePopup">&times;</span>
            <img src="https://cricmaths.com/testcric/assets/mascot/graphicspop1.png" alt="Popup Image">
        </div>
    </div>
<section class="section_one" >
    <div class="section_one-bg">
        <div class="row">
            <div class="col-md-6 section_one_vector" style=" text-align: center;">

                <img src="{{config('app.baseURL')}}/assets/img/vector_outline.png" class="cricket-bat" alt="Cricket bat" style="width:60%;">
                <img src="{{config('app.baseURL')}}/assets/img/vector_outline_2.png" class="cricket-bat" alt="Cricket bat" style="width:18%; margin-top: -79%;
    margin-left: 46%;">

                <img src="{{config('app.baseURL')}}/assets/img/vector_one.png" class="vector" alt="Cricket bat" style="width:60%; margin-top: -58%; margin-left: -22%;">



    <img src="{{config('app.baseURL')}}/assets/img/mask_group_1.png" class="cricket-bat" alt="Cricket bat" style="width:10%; 
    margin-top: -96%;
    margin-left: -38%;">
                <h6>With Cricmaths,<br>playing and learning <br>is easy-peasy!</h6>


                

 <img src="{{config('app.baseURL')}}/assets/img/mask_group_1.png" class="cricket-bat" alt="Cricket bat" style="width:5%; 
    margin-top: -9%;
    margin-left: 48%;">

    <div class="play_now_div">

                <img src="{{config('app.baseURL')}}/assets/img/mask_group_2.png" class="cricket-bat" alt="Cricket bat" style="width:13%; margin-right: 2%; margin-top: -32px;">

                <a href="https://cricmaths.com/after-start"><button class="btn play">Play Now</button></a>

    </div>


            </div>

            
             <div class="col-md-6">

<!--             <img src="{{config('app.baseURL')}}/assets/img/pngwing_1.png" class="cricket-bat_scaleone" alt="Cricket bat">
 -->               
 <!-- <img src="{{config('app.baseURL')}}/assets/img/pngwing_3.png" class="cricket-bat_wrong_one" alt="Cricket bat" > -->



                
               <img src="{{config('app.baseURL')}}/assets/mascot/mascot-sum.png" class="cricket-bat-man" alt="Cricket bat">

              <!--  <img src="{{config('app.baseURL')}}/assets/img/pngwing_2.png" class="cricket-bat_scale" alt="Cricket bat">

               <img src="{{config('app.baseURL')}}/assets/img/pngwing_4.png" class="cricket-bat_divide_one" alt="Cricket bat" >
 -->
<!-- <img src="{{config('app.baseURL')}}/assets/img/pngwing_3.png" class="cricket-bat_wrong_two" alt="Cricket bat">
 -->
            </div>
            
        </div>

    <img src="{{config('app.baseURL')}}/assets/img/home/v1.png" class="v1" alt="Cricket bat" >

        
    </div>
</section>
<section class="decision-players-section" style="background-color:white;">
<div class="container my-5">
  <div class="row">
    <div class="col-md-7" style="margin-top:-4;">
      <div class="decision-section">
        <div>
        <h2 class="header-text"></h2>
                <h2 class="header-text">The pitch is ready... are you?</h2>

<!--         <h3 class="pitch-text">The pitch is ready... are you?</h3>
 -->        <p>Imagine yourself in your cool avatar walking towards the field for an epic match. Now, here's the twist.</p>
        <p>Every run, wicket, and boundary comes with a fun maths question.</p>

        <p>With every Dhamaka shot you'll be solving a question, earning a point, and learning how maths makes cricket even more exciting.</p>
        <p>It's like being a cricket superstar and a maths genius rolled into one!</p>
    </div>
    
      </div>
              

<img src="{{config('app.baseURL')}}/assets/img/bat.png" class="decision-cricket-bat" alt="Cricket bat" >

    </div>

   <div class="col-md-5" >
    <div class="players-section">
        <h2 class="header-text">Top Players</h2>
 <!-- Player Scores -->

      @foreach($students as $student)
        <div class="player-score" style="display: flex; justify-content: space-between; align-items: center;">
            <p>@ {{$student->name}}</p> 
            <p style="text-align: end;">{{$student->score}}/600</p>
        </div>
        @endforeach 
        
        
        
       
    </div>
        <img src="{{config('app.baseURL')}}/assets/img/trophy-grass.png" class="trophy-grass" alt="Trophy Grass" style="width: 86%;
    margin-top: -33%;
    margin-left: 7%;">

                <img src="{{config('app.baseURL')}}/assets/img/trophy.png" class="trophy-players-section" alt="Trophy" >



</div>

</div>

</section>








<!--<section class="lets-play">

    <img src="{{config('app.baseURL')}}/assets/img/home/trophy.png" class="letsplay-trophy" alt="Trophy Grass" >

  <img src="{{config('app.baseURL')}}/assets/img/home/stumpgrass.png" class="stumpgrass" alt="stump Grass" style="border-radius: 0px;">
      <img src="{{config('app.baseURL')}}/assets/img/home/row.png" class="arrow" alt="arrow">
      <div class="letsplay-div">
<h4>Let's Play</h4>
<p>Let’s show you how to be a CricMaths Champ</p>
</div>
      <a href="howzzat"><div class="howzzat" style="background-color:#459F01;;">
          <h3>Howzzat! Work?</h3>
      </div></a>
 
  <img src="{{config('app.baseURL')}}/assets/img/home/cartoon.png" class="cartoon" alt="Trophy Grass">

    <img src="{{config('app.baseURL')}}/assets/img/home/vector.png" class="vector" alt="Trophy Grass">

     <img src="{{config('app.baseURL')}}/assets/img/home/vector_side.png" class="vector_side" alt="Trophy Grass">

     <img src="{{config('app.baseURL')}}/assets/img/home/vector_side.png" class="vector_side_one" alt="Trophy Grass">

<div class="grass-row row">

 <div class="col-md-12">
        <img src="{{config('app.baseURL')}}/assets/img/home/grass.png" class="grass_one" alt="Trophy Grass" style="border-radius: 0px;">
 </div>
 <div class="col-md-12">
        <img src="{{config('app.baseURL')}}/assets/img/home/grass.png" class="grass_two" alt="Trophy Grass">
 </div>
</div>

</section> -->

<section class="lets-play-new">

    <div class="row">

    <div class="col-md-4">
      <div class="all-image">
      <img src="{{config('app.baseURL')}}/assets/img/home/trophy.png" class="letsplay-trophy" alt="Trophy Grass" >
      <img src="{{config('app.baseURL')}}/assets/img/home/stumpgrass.png" class="stumpgrass" alt="stump Grass" style="border-radius: 0px;">
<!--       <img src="{{config('app.baseURL')}}/assets/img/home/row.png" class="arrow" alt="arrow">
 -->      </div>
      <div>
                  <img src="{{config('app.baseURL')}}/assets/img/home/grass.png" class="grass_one" alt="Trophy Grass" style="border-radius: 0px;">

      </div>

    </div>
    <div class="col-md-4">
        <div class="row">
         <div class="letsplay-div">
             <h4>Let's Play</h4>
             <p>Let’s show you how to be a CricMaths Champ</p>
        </div>
        <div class="howzzat-btn">
            <a href="{{config('app.baseURL')}}/howzzat"><button class=" btn howzzat" style="background-color:#459F01;;">Howzzat! Work?</button></a>
        </div>
        <div>
                <img src="{{config('app.baseURL')}}/assets/img/home/grass.png" class="grass_three" alt="Trophy Grass">

      </div>
        </div>

      </div>
    <div class="col-md-4">

    <div class="row" style="text-align: center;">

        <div>

<!--                      <img src="{{config('app.baseURL')}}/assets/img/home/vector.png" class="vector" alt="Trophy Grass">
 -->
         <img src="{{config('app.baseURL')}}/assets/mascot/mascot-all-the-best.png" class="cartoon" alt="Trophy Grass">


         <!--<img src="{{config('app.baseURL')}}/assets/img/home/vector_side.png" class="vector_side" alt="Trophy Grass">-->

        <!--<img src="{{config('app.baseURL')}}/assets/img/home/vector_side.png" class="vector_side_one" alt="Trophy Grass">-->
       </div>

       <div>
                <img src="{{config('app.baseURL')}}/assets/img/home/grass.png" class="grass_two" alt="Trophy Grass">

      </div>
    </div>
       

    </div>

    </div>
</section>
<section class="testimonials py-5">

    <div class="testi">
                                                <h2 class="text-danger mb-4">Testimonials</h2>

    <div class="container">
        <!-- Placeholder Image -->

        <div class="row justify-content-center">

            <div class="col-lg-8 col-md-10 col-sm-12 text-center">
                <h2 class="text-danger mb-4" style="display:none;"></h2>
                <div class="placeholder-video rounded-3 p-4">
                   
<video  controls="" poster="https://cricmaths.com/assets/images/thum.png" style="
    width: 80%;
    height: 250px;">
  <source src="https://cricmaths.com/assets/images/e1.mp4" type="video/mp4">
  <source src="movie.ogg" type="video/ogg">

</video>
                </div>
            </div>
        </div>
    </div>
</div>
</section>
 <!-- <section class="py-5">
            <h2 class="mb-4 live-cricket-header" >Live Cricket Matches</h2>

    <div class="upcoming-match py-1">

    <div class="container text-center">
        <div class="row justify-content-center">
            <div>
                <img src="{{config('app.baseURL')}}/assets/img/home/trophy.png" alt="Trophy" class="trophy_upcoming_match">
            </div>
                            <div class="scrollable-container" id="auto-scroll">


 @php
            $serialNum = 1;
        @endphp
 @foreach ($liveMatches as $key=>$match)

    @php

        $teamDetails = json_decode($match['team_details'], true);
    @endphp
    @if ($match->is_live && 
        isset($teamDetails[0]['teamScore'][0]['runsScored']) && $teamDetails[0]['teamScore'][0]['runsScored'] > 0 &&
        isset($teamDetails[1]['teamScore'][0]['runsScored']) && $teamDetails[1]['teamScore'][0]['runsScored'] > 0)


 

                <div class="match-card">
<p style="text-align: justify; font-size: unset; color: red; font-weight: 600;     font-family: Poppins!important;
     line-height: 0.75;">
        <span class="live-dot"></span>
        Live
    </p> <h4 class="text-success">Match: {{$serialNum}}</h4>
@foreach ($teamDetails as $key => $team)
                   
                    <p class="teamsflex{{$key}} ">{{ $team['teamFullName'] }}</p>

@if($key == 0)
               <h3 class="vs-tem">vs</h3>              
                        @endif
                @endforeach
                    <a href="after-start"><button class="btn btn-danger">Play</button></a>
                </div>





 @php
            $serialNum++;
        @endphp
@endif
@endforeach

            
        </div>
    </div>
    </div>
    </div>
</section> -->


<section class="py-5">
    <h2 class="mb-4 live-cricket-header text-center">Live Cricket Matches</h2>

    <div class="upcoming-match py-1">
        <div class="container text-center">

             <div class="col-12 col-md-2 mb-3">
                    <img src="{{config('app.baseURL')}}/assets/img/home/trophy.png" alt="Trophy" class="trophy_upcoming_match img-fluid">
                </div>

            <div class="row justify-content-center align-items-center">
               
                <!-- Carousel Start -->
                <div id="cricketCarousel" class="carousel slide col-12 col-md-10" data-bs-ride="carousel">

                    <!-- Indicators -->
                    <ol class="carousel-indicators">
                        @php
                            $numSlides = ceil($liveMatches->count() / 3);  // Number of slides needed (3 matches per slide)
                        @endphp
                        @for ($i = 0; $i < $numSlides; $i++)
                            <li data-bs-target="#cricketCarousel" data-bs-slide-to="{{ $i }}" class="@if ($i == 0) active @endif"></li>
                        @endfor
                    </ol>

                    <!-- Carousel Inner -->
                    <div class="carousel-inner">
                        @php
                            $serialNum = 1;
                        @endphp
                        @foreach ($liveMatches->chunk(3) as $key => $matchGroup) <!-- Using Laravel's chunk() -->
                            <div class="carousel-item @if ($key == 0) active @endif">
                                <div class="row">
                                    @foreach ($matchGroup as $match)
                                        @php
                                            $teamDetails = json_decode($match['team_details'], true);
                                        @endphp
                                        @if ($match->is_live && 
                                            isset($teamDetails[0]['teamScore'][0]['runsScored']) && $teamDetails[0]['teamScore'][0]['runsScored'] > 0 &&
                                            isset($teamDetails[1]['teamScore'][0]['runsScored']) && $teamDetails[1]['teamScore'][0]['runsScored'] > 0)

                                            <div class="col-12 col-md-4 mb-4">
                                                <div class="match-card p-3 border rounded">
                                                    <p class="text-danger fw-bold d-flex align-items-center">
                                                        <span class="live-dot me-1"></span> Live
                                                    </p>
                                                    <h4 class="text-success">Match: {{$serialNum}}</h4>
                                                    @foreach ($teamDetails as $key => $team)
                                                        <p class="teamsflex{{$key}}">{{ $team['teamFullName'] }}</p>
                                                        @if ($key == 0)
                                                            <h3 class="vs-tem">vs</h3>
                                                        @endif
                                                    @endforeach
                                                    <a href="after-start"><button class="btn btn-danger">Play</button></a>
                                                </div>
                                            </div>
                                            @php
                                                $serialNum++;
                                            @endphp
                                        @endif
                                    @endforeach
                                </div>
                            </div>
                        @endforeach
                    </div>

                    <!-- Carousel Controls -->
                    <a class="carousel-control-prev" href="#cricketCarousel" role="button" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#cricketCarousel" role="button" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>










        <script>
        $(document).ready(function () {
            // Show popup on page load
            $("#popup").fadeIn();

            // Close Popup on click of close button
            $("#closePopup").click(function () {
                $("#popup").fadeOut();
            });

            // Close popup when clicking outside the content
            $(document).mouseup(function (e) {
                var container = $(".popup-content");
                if (!container.is(e.target) && container.has(e.target).length === 0) {
                    $("#popup").fadeOut();
                }
            });
        });
    </script>




@endsection