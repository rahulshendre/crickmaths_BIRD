@extends('layouts.app')

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>


<style type="text/css">

@import url("https://fonts.googleapis.com/css2?family=Noto+Emoji:wght@700&family=Noto+Sans+Symbols+2&family=Spectral:wght@600&display=block");

    
    .header-layout2{
        display: none;
    }


li{
    font-weight: 700;
    font-size: medium;
}

.form{
        background-image: url('{{config('app.baseURL')}}/assets/images/cricket15.webp'); /* Replace with the path to your image */

    background-repeat: no-repeat;
    background-size: 25%;
    background-position: right;

        background-color: #FFFFF0;


}

form{


    padding: 25px;
}

input[type=radio]~label {
    padding-left: 5px!important;
    
}

input[type="radio"]::before {
  font-family: "Noto Emoji", sans-serif;
  position: absolute;
  top: -3.5px;
  left: -4.2px;
  width: 25px;
  height: 25px;
  font-size: 21.5px;
  content: "";
  opacity: 0;
  transition: opacity 0.3s;


}

input[type=radio]~label:before {
    content: "";
    position: absolute;
    left: 0;
    top: -1px;
    width: 17px;
    height: 17px;
    border-radius: 3px;
     border: 0px solid var(--border-color)!important; 
    outline: 5px solid rgba(0,0,0,0);
    outline-offset: -5px;
    transition: all ease .3s;
}

input[type=radio]:checked~label::before {
    outline-color: var(--theme-color);
    border-color: rgba(0,0,0,0);
}

input[type=radio]:checked~label::before {
    outline-color: transparent!important;
}

#pattern1 input[type="radio"]::before {
  content: "🏀";
}


 input[type="radio"] {
  -webkit-appearance: none;
  -moz-appearance: none;
  appearance: none;
  position: relative;
 
  background-color: #fff;
  color: coral;
  border: 3px solid gray;
  border-radius: 50%;
  transition: border-color 0.3s;

  visibility: visible!important; 
     opacity: 1!important; 
     width: 20px!important; 
     height: 23px!important; 
     display: block!important; 
}
#pattern1 input[type="radio"]:checked {
  border-color: coral;
}
#pattern1 input[type="radio"]:checked::before {
  opacity: 1;
}


input,
input::before,
label {
  -moz-user-select: none;
  -webkit-user-select: none;
  -ms-user-select: none;
  user-select: none;
}
label {
  position: relative;
  font-size: 18px;
  margin-left: 5px;
  vertical-align: top;
  cursor: pointer;
  color: #333;
}
#pattern1 input[type="radio"]::before {
  font-family: "Noto Emoji", sans-serif;
  position: absolute;
  top: -3.5px;
  left: -4.2px;
  width: 25px;
  height: 25px;
  font-size: 21.5px;
  content: "";
  opacity: 0;
  transition: opacity 0.3s;
}
#pattern1 input[type="radio"]::before {
  content: "🏀"; 
}

select, .form-control, .form-select, textarea, input {
    height: 55px;
    padding: 0 0px 0 19px!important;
    border: 1px solid var(--border-color);
    color: var(--body-color);
    background-color: var(--body-bg);
    border-radius: 16px;
    font-size: 16px;
    width: 100%;
}

.progress{

    height: 28px!important;
    border-radius: 16px;
}    

.btn-primary{
    background-image: url('{{config('app.baseURL')}}/assets/images/bat.png'); /* Replace with the path to your image */
    background-repeat: no-repeat;
    background-size: 100%;
    margin-top: 20px;
    border: white!important; 
    width: 142px;
    background-color:transparent !important;
    color: black!important;
    font-weight: 700!important;
    background-position: center !important;
}



   

h2{
    position: relative;
    z-index: 25;
}

.progress-bar{
        background-color: #fec624!important;

}



.breadcumb-wrapper {
    padding-top: 60px !important;

}
  
.brand-item {
    display: flex;
    align-items: center;  
    justify-content: center;
}
.full_size{
    width: 100%;
    height:250px;
} 
.ball {
  animation-name: rolling;
  animation-duration: 5s;
  animation-timing-function: ease-in-out;
  Animation-iteration-count: 5000;
  animation-delay:2s;
  /* Tells the animation what to-do outside */
  animation-fill-mode: both;
  animation-direction: alternate;
}

@keyframes rolling {
  0% {transform: translateX(0) rotate(0turn);}
  20% {transform: translateX(300px) rotate(.5turn);}
  40% {transform: translateX(0) rotate(-.2turn);}
  70% {transform: translateX(2000px) rotate(2.5turn);} 
  100% {transform: translateX(0) rotate(-1.0turn);} 
}


</style>
@section('content')

<div class="breadcumb-wrapper" data-bg-src="assets/img/breadcumb/breadcumb-bg.jpg">
<div class="container z-index-common">
<div class="breadcumb-content">
<h1 class="breadcumb-title">Question & Answer</h1>
<p class="breadcumb-text">Multiple Choice Questions</p>
<div class="breadcumb-menu-wrap">
<ul class="breadcumb-menu">
<li>
<a href="index.html">Home</a>
</li>
<li>Question & Answer</li>
</ul>
</div>
</div>
</div>
</div>


<div id="wrapper">
  <img class="ball" src="assets/images/z08494_2_prev_ui.png" alt="ball"width="111" height="111" />
</div>

<section class="space-top">

<div class="container">
  <h2>Answered Question</h2>
  <div class="progress">
    <div class="progress-bar" id="progress" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width:70%">

      <!-- <span class="sr-only">% Complete</span> -->

                    <span >{{$progress}}</span>

    </div>
  </div>


                    <div class="team-description ">

                    <h2>Question & Answer </h2>
                    <div class="title-divider2">
                    </div>

                   

                    <div class="form ">

                    <form class="form-horizontal" role="form" method="POST" action="{{config('app.baseURL')}}/answer" enctype="multipart/form-data">
                    @csrf
                      <ol >
                        @foreach($questions as $question)
                            <li style="font-size:20px; color:black;">{{ $question->question }}</li>
                        <br>
                             <h6>Select Answer:</h6>
                            <div class="col-md-6">
                         <section id="pattern1">

                            @foreach($question->option as $option)
                            
                            <div style="display: flex; align-items: center;margin-bottom: 2px;
">
                             <input type="radio" name="option_id" id="{{ $option->challenge_question_option_id }}"  value="{{ $option->challenge_question_option_id }}"><label for="{{ $option->challenge_question_option_id }}" >{{ $option->options }}</label><br />
                         </div>
   
                              
                            @endforeach


                        </section>




                           
                        </div>
                            <input type="hidden" name="user_id" value="3">
                            <input type="hidden" name="question_id" value="{{$question->challenge_question_id}}">

                            <i class="fa-solid fa-cricket-bat-ball">
<button class="btn btn-primary" type="submit" style="margin-top: 20px;" >Submit</button></i>
                        @endforeach

                        </ol>

                    </form>


                </div>
                    </div>

                    <div class="video"></div>

                    </div>


                    </section>

                    <section>
                    <div class="slider__area">
    <div class="brand__area-two">
        <div class="full_size">
            <div class="swiper-container project-act">
                <div class="swiper-wrapper">
                    <div class="swiper-slide hei">
                        <div class="brand-item">
                            <img src="assets/images/cricket11.jpg" alt="">
                        </div>
                    </div>
                    <div class="swiper-slide hei">
                        <div class="brand-item">
                            <img src="assets/images/cricket11.jpg" alt="">
                        </div>
                    </div>
                    <div class="swiper-slide hei">
                        <div class="brand-item">
                            <img src="assets/images/cricket14.jpg" alt="">
                        </div>
                    </div>
                    <div class="swiper-slide hei">
                        <div class="brand-item">
                            <img src="assets/images/cricket14.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- brand-area-end -->
    </section>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script type="text/javascript">
var progress=<?php echo json_encode($progress);?>;

$('document').ready(function(){

    // alert(progress);

        $('#progress').css('width', progress + '%');


  // document.getElementById('progress').style.width = data.progress + '%';

});
</script>

<script>
  var slider = new Swiper('.project-act', {
   spaceBetween: 30,
  centeredSlides: true,
  speed: 6000,
  autoplay: {
    delay: 1,
  },
  loop: true,
  slidesPerView:'auto',
  allowTouchMove: false,
  disableOnInteraction: true,
    breakpoints: {
        '1200': {
            slidesPerView: 3,
        },
        '992': {
            slidesPerView: 5,
        },
        '768': {
            slidesPerView: 4,
        },
        '576': {
            slidesPerView: 1,
        },
         '425': {
            slidesPerView: 1,
        },
        
    },
});
</script>


@endsection