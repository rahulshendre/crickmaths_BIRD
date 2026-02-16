@extends('layouts.app')
@section('content')
<link href="https://fonts.googleapis.com/css2?family=Baloo+Da+2:wght@400..800&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Bangers&display=swap" rel="stylesheet">
<style type="text/css">
.feature-title{
    font-weight: 400 !important;
}
p{
    font-size: 20px;
}
h1{
     letter-spacing: 1px !important;
  font-family: "Bangers", system-ui !important;
  font-weight: 400 !important;
}
.fs-md {
    font-size: 20px !important;
}
   /* .feature-style1:hover .feature-icon {
    background-color: #244f00 !important;
}*/
.bg-color{
    background-color: #ddd !important;
}
.ls-img-layer.ls-layer{
    margin-top: 20px !important;
}
.about-con{
    
    padding: 20px;
    border-radius: 20px;
    margin-top: 20px !important;
}
.img-border{
    border-radius: 20px;
}
    .sec-subtitle {
    margin-top: 0.9em !important;
}
    .greenbg{
        background-color: #00a121;
    }
    ::root {
        --smoke-color: #9be9a6 !important;
        --white-color: green;
    }

    .header-layout1 {
        display: none;
    }

    .slick-slide {
        height: 46% !important;
    }

    .fab {
        position: relative;
        top: 30%;
    }

    .ls-slide-backgrounds {
        background-color: #ffff;
    }

    p {
        text-align: justify;

    }
    #banner-text{
        position: relative;
        right: 150px;
    }
    @media (max-width: 991px)
{
    .feature-style3 {
    margin: 4%;

}
}
  @media (max-width: 768px){
 #ls-hid{
    display: none !important;
 }
  }
  /* Media query for mobile devices */
  @media only screen and (max-width: 767px) {
    .vs-hero-wrapper h1 {
        font-size: 17px !important;  /* Change the font size for mobile view as needed */
        z-index: 20000;
        line-height: 10px;
        margin-left: -55px !important;
    }
.vs-hero-wrapper img {
    left: 300px !important; /* Adjust the percentage value as needed */
}
}
</style>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
    integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>@section('content') 



    <section class="vs-hero-wrapper" style="margin-top:3%">

      <div class="vs-hero-carousel" data-height="1050" data-container="1900" data-slidertype="responsive" data-globalbgcolor="#2DA0A4">
 
        <!-- Your content goes here -->
        <div class="ls-slide" data-ls="duration:12000; transition2d:5; kenburnsscale:1.2;">
            <!-- <img width="1920" height="295" src="assets/img/hero/h-s-2-2.png" class="ls-l ls-img-layer" alt="bg" decoding="async" style="font-size:36px; color:#000; stroke:#000; stroke-width:0px; text-align:left; font-style:normal; text-decoration:none; text-transform:none; font-weight:400; letter-spacing:0px; background-position:0% 0%; background-repeat:no-repeat; background-clip:border-box; overflow:visible; top:775px; left:-10px; -webkit-background-clip:border-box;" data-ls="static:forever;"> -->
            <img width="708" height="710" src="assets/img/one-banner.png" id="ls-hid" class="ls-l ls-hide-tablet  ls-img-layer" alt="bg" decoding="async" style="font-size:36px; color:#000; stroke:#000; stroke-width:0px; text-align:left; font-style:normal; text-decoration:none; text-transform:none; font-weight:400; letter-spacing:0px; background-position:0% 0%; background-repeat:no-repeat; background-clip:border-box; overflow:visible; top:123px; left:1001px; -webkit-background-clip:border-box;" data-ls="parallax:true; parallaxlevel:4; parallaxevent:cursor;">
            <!-- <img width="552" height="616" src="assets/img/hero/h-s-2-1.png" class="ls-l  ls-img-layer" alt="bg" decoding="async" style="font-size:36px; color:#000; stroke:#000; stroke-width:0px; text-align:left; font-style:normal; text-decoration:none; text-transform:none; font-weight:400; letter-spacing:0px; background-position:0% 0%; background-repeat:no-repeat; background-clip:border-box; overflow:visible; top:170px;left:1171px; -webkit-background-clip:border-box;" data-ls="parallax:true; parallaxlevel:3; parallaxevent:cursor;"> -->
            <div id="banner-text">
          <h1 style="font-size:70px; stroke:#000; stroke-width:0px; text-align:left; font-style:normal; text-decoration:none; text-transform:none; letter-spacing:0px; background-position:0% 0%; background-repeat:no-repeat; background-clip:border-box; overflow:visible; color: #459f01;  line-height:70px; font-weight:600; left:310px; top:305px; -webkit-background-clip:border-box;" class="ls-l ls-hide-tablet ls-text-layer" data-ls="offsetxin:-100; easingin:easeOutQuint;">Howzzat?? Playing</h1>

          <h1 style="font-size:70px; stroke:#000; stroke-width:0px; text-align:left; font-style:normal; text-decoration:none; text-transform:none; letter-spacing:0px; background-position:0% 0%; background-repeat:no-repeat; background-clip:border-box; overflow:visible; color: #459f01;line-height:70px; font-weight:600; left:310px; top:374px; -webkit-background-clip:border-box;" class="ls-l ls-hide-tablet  ls-text-layer" data-ls="offsetxin:-100; delayin:300; easingin:easeOutQuint;">my own match</h1>
          <h1 style="font-size:70px; stroke:#000; stroke-width:0px; text-align:left; font-style:normal; text-decoration:none; text-transform:none; letter-spacing:0px; background-position:0% 0%; background-repeat:no-repeat; background-clip:border-box; overflow:visible; color: #459f01;  line-height:70px; font-weight:600; left:310px; top:445px; -webkit-background-clip:border-box;" class="ls-l ls-hide-tablet  ls-text-layer" data-ls="offsetxin:-100; delayin:600; easingin:easeOutQuint;">watching live cricket</h1>
          </div>
          <!-- <div style="font-size:30px; color:#000; stroke:#000; stroke-width:0px; font-style:normal; text-decoration:none; text-transform:none; font-weight:400; letter-spacing:0px; background-position:0% 0%; background-repeat:no-repeat; background-clip:border-box; overflow:visible; left:315px; top:642px;  -webkit-background-clip:border-box;" class="ls-l ls-hide-tablet  ls-html-layer" data-ls="offsetyin:100; delayin:1000; easingin:easeOutQuint; offsetyout:100; easingout:easeOutQuint;"><a href="{{config('app.baseURL')}}/after-start" class="vs-btn">Play Cricket</a></div> -->


        
         <img width="708" height="710" src="assets/img/one-banner.png" class="ls-l ls-hide-desktop ls-hide-tablet ls-img-layer" alt="bg" decoding="async" style="font-size:36px; color:#000; stroke:#000; stroke-width:0px; text-align:left; font-style:normal; text-decoration:none; text-transform:none; font-weight:400; letter-spacing:0px; background-position:0% 0%; background-repeat:no-repeat; background-clip:border-box; overflow:visible; top:47px; left:1003px; -webkit-background-clip:border-box;" data-ls="parallax:true; parallaxlevel:4; parallaxevent:cursor;">
         <!-- <img width="552" height="616" src="assets/img/hero/h-s-2-1.png" class="ls-l ls-hide-desktop ls-hide-tablet ls-img-layer" alt="bg" decoding="async" style="font-size:36px; color:#000; stroke:#000; stroke-width:0px; text-align:left; font-style:normal; text-decoration:none; text-transform:none; font-weight:400; letter-spacing:0px; background-position:0% 0%; background-repeat:no-repeat; background-clip:border-box; overflow:visible; top:76px; left:1340px; -webkit-background-clip:border-box;" data-ls="parallax:true; parallaxlevel:3; parallaxevent:cursor;"> -->
        </div>


        <div class="ls-slide" data-ls="duration:12000; transition2d:5; kenburnsscale:1.2;">
            <!-- <img width="1920" height="295" src="assets/img/hero/h-s-2-2.png" class="ls-l ls-img-layer" alt="bg" decoding="async" style="font-size:36px; color:#000; stroke:#000; stroke-width:0px; text-align:left; font-style:normal; text-decoration:none; text-transform:none; font-weight:400; letter-spacing:0px; background-position:0% 0%; background-repeat:no-repeat; background-clip:border-box; overflow:visible; top:775px; left:-10px; -webkit-background-clip:border-box;" data-ls="static:forever;"> -->
            <img width="708" height="710" src="assets/img/two-banner.png" id="ls-hid" class="ls-l  ls-img-layer" alt="bg" decoding="async" style="font-size:36px; color:#000; stroke:#000; stroke-width:0px; text-align:left; font-style:normal; text-decoration:none; text-transform:none; font-weight:400; letter-spacing:0px; background-position:0% 0%; background-repeat:no-repeat; background-clip:border-box; overflow:visible; top:123px; left:1001px; -webkit-background-clip:border-box;" data-ls="parallax:true; parallaxlevel:4; parallaxevent:cursor;">
          <h1 style="font-size:70px; stroke:#000; stroke-width:0px; text-align:left; font-style:normal; text-decoration:none; text-transform:none; letter-spacing:0px; background-position:0% 0%; background-repeat:no-repeat; background-clip:border-box; overflow:visible; color: #459f01;  line-height:70px; font-weight:600; left:310px; top:305px; -webkit-background-clip:border-box;" class="ls-l ls-hide-tablet  ls-text-layer" data-ls="offsetxin:-100; easingin:easeOutQuint;">Pad up and step</h1>
          <h1 style="font-size:70px; stroke:#000; stroke-width:0px; text-align:left; font-style:normal; text-decoration:none; text-transform:none; letter-spacing:0px; background-position:0% 0%; background-repeat:no-repeat; background-clip:border-box; overflow:visible; color: #459f01;  line-height:70px; font-weight:600; left:310px; top:374px; -webkit-background-clip:border-box;" class="ls-l ls-hide-tablet  ls-text-layer" data-ls="offsetxin:-100; delayin:300; easingin:easeOutQuint;">onto our maths pitch</h1>
          <h1 style="font-size:70px; stroke:#000; stroke-width:0px; text-align:left; font-style:normal; text-decoration:none; text-transform:none; letter-spacing:0px; background-position:0% 0%; background-repeat:no-repeat; background-clip:border-box; overflow:visible; color: #459f01; line-height:70px; font-weight:600; left:310px; top:445px; -webkit-background-clip:border-box;" class="ls-l ls-hide-tablet ls-text-layer" data-ls="offsetxin:-100; delayin:600; easingin:easeOutQuint;">of learning </h1>
          
          <!-- <div style="font-size:30px; color:#000; stroke:#000; stroke-width:0px; font-style:normal; text-decoration:none; text-transform:none; font-weight:400; letter-spacing:0px; background-position:0% 0%; background-repeat:no-repeat; background-clip:border-box; overflow:visible; left:315px; top:642px;  -webkit-background-clip:border-box;" class="ls-l ls-hide-tablet  ls-html-layer" data-ls="offsetyin:100; delayin:1000; easingin:easeOutQuint; offsetyout:100; easingout:easeOutQuint;"><a href="{{config('app.baseURL')}}/after-start" class="vs-btn">Play Cricket</a></div> -->
        
         <img width="708" height="710" src="assets/img/two-banner.png" class="ls-l ls-hide-desktop ls-hide-tablet ls-img-layer" alt="bg" decoding="async" style="font-size:36px; color:#000; stroke:#000; stroke-width:0px; text-align:left; font-style:normal; text-decoration:none; text-transform:none; font-weight:400; letter-spacing:0px; background-position:0% 0%; background-repeat:no-repeat; background-clip:border-box; overflow:visible; top:47px; left:1003px; -webkit-background-clip:border-box;" data-ls="parallax:true; parallaxlevel:4; parallaxevent:cursor;">
         <!-- <img width="552" height="616" src="assets/img/hero/h-s-2-1.png" class="ls-l ls-hide-desktop ls-hide-tablet ls-img-layer" alt="bg" decoding="async" style="font-size:36px; color:#000; stroke:#000; stroke-width:0px; text-align:left; font-style:normal; text-decoration:none; text-transform:none; font-weight:400; letter-spacing:0px; background-position:0% 0%; background-repeat:no-repeat; background-clip:border-box; overflow:visible; top:76px; left:1340px; -webkit-background-clip:border-box;" data-ls="parallax:true; parallaxlevel:3; parallaxevent:cursor;"> -->
        </div>


        <div class="ls-slide" data-ls="duration:12000; transition2d:5; kenburnsscale:1.2;">
            <!-- <img width="1920" height="295" src="assets/img/hero/h-s-2-2.png" class="ls-l ls-img-layer" alt="bg" decoding="async" style="font-size:36px; color:#000; stroke:#000; stroke-width:0px; text-align:left; font-style:normal; text-decoration:none; text-transform:none; font-weight:400; letter-spacing:0px; background-position:0% 0%; background-repeat:no-repeat; background-clip:border-box; overflow:visible; top:775px; left:-10px; -webkit-background-clip:border-box;" data-ls="static:forever;"> -->
            <img width="708" height="710" src="assets/img/three-banner.png" id="ls-hid" class="ls-l ls-img-layer" alt="bg" decoding="async" style="font-size:36px; color:#000; stroke:#000; stroke-width:0px; text-align:left; font-style:normal; text-decoration:none; text-transform:none; font-weight:400; letter-spacing:0px; background-position:0% 0%; background-repeat:no-repeat; background-clip:border-box; overflow:visible; top:123px; left:1001px; -webkit-background-clip:border-box;" data-ls="parallax:true; parallaxlevel:4; parallaxevent:cursor;">
            <!-- <img width="552" height="616" src="assets/img/hero/h-s-2-1.png" class="ls-l  ls-img-layer" alt="bg" decoding="async" style="font-size:36px; color:#000; stroke:#000; stroke-width:0px; text-align:left; font-style:normal; text-decoration:none; text-transform:none; font-weight:400; letter-spacing:0px; background-position:0% 0%; background-repeat:no-repeat; background-clip:border-box; overflow:visible; top:170px; left:1171px; -webkit-background-clip:border-box;" data-ls="parallax:true; parallaxlevel:3; parallaxevent:cursor;"> -->
          <h1 style="font-size:70px; stroke:#000; stroke-width:0px; text-align:left; font-style:normal; text-decoration:none; text-transform:none; letter-spacing:0px; background-position:0% 0%; background-repeat:no-repeat; background-clip:border-box; overflow:visible; color: #459f01; line-height:70px; font-weight:600; left:310px; top:305px; -webkit-background-clip:border-box;" class="ls-l ls-hide-tablet  ls-text-layer" data-ls="offsetxin:-100; easingin:easeOutQuint;">Brace yourself</h1>
          <h1 style="font-size:70px; stroke:#000; stroke-width:0px; text-align:left; font-style:normal; text-decoration:none; text-transform:none; letter-spacing:0px; background-position:0% 0%; background-repeat:no-repeat; background-clip:border-box; overflow:visible; color: #459f01;  line-height:70px; font-weight:600; left:310px; top:374px; -webkit-background-clip:border-box;" class="ls-l ls-hide-tablet  ls-text-layer" data-ls="offsetxin:-100; delayin:300; easingin:easeOutQuint;">for fun and engaging</h1>
          <h1 style="font-size:70px; stroke:#000; stroke-width:0px; text-align:left; font-style:normal; text-decoration:none; text-transform:none; letter-spacing:0px; background-position:0% 0%; background-repeat:no-repeat; background-clip:border-box; overflow:visible; color: #459f01;  line-height:70px; font-weight:600; left:310px; top:445px; -webkit-background-clip:border-box;" class="ls-l ls-hide-tablet  ls-text-layer" data-ls="offsetxin:-100; delayin:600; easingin:easeOutQuint;">question volleys.</h1>
          
          <!-- <div style="font-size:30px; color:#000; stroke:#000; stroke-width:0px; font-style:normal; text-decoration:none; text-transform:none; font-weight:400; letter-spacing:0px; background-position:0% 0%; background-repeat:no-repeat; background-clip:border-box; overflow:visible; left:315px; top:642px;  -webkit-background-clip:border-box;" class="ls-l ls-hide-tablet  ls-html-layer" data-ls="offsetyin:100; delayin:1000; easingin:easeOutQuint; offsetyout:100; easingout:easeOutQuint;"><a href="{{config('app.baseURL')}}/after-start" class="vs-btn">Play Cricket</a></div> -->


        
         <img width="708" height="710" src="assets/img/three-banner.png" class=" ls-l ls-hide-desktop ls-hide-tablet  ls-img-layer" alt="bg" decoding="async" style="font-size:36px; color:#000; stroke:#000; stroke-width:0px; text-align:left; font-style:normal; text-decoration:none; text-transform:none; font-weight:400; letter-spacing:0px; background-position:0% 0%; background-repeat:no-repeat; background-clip:border-box; overflow:visible; top:47px; left:1003px; -webkit-background-clip:border-box;" data-ls="parallax:true; parallaxlevel:4; parallaxevent:cursor;">
         <!-- <img width="552" height="616" src="assets/img/hero/h-s-2-1.png" class="ls-l ls-hide-desktop ls-hide-tablet ls-img-layer" alt="bg" decoding="async" style="font-size:36px; color:#000; stroke:#000; stroke-width:0px; text-align:left; font-style:normal; text-decoration:none; text-transform:none; font-weight:400; letter-spacing:0px; background-position:0% 0%; background-repeat:no-repeat; background-clip:border-box; overflow:visible; top:76px; left:1340px; -webkit-background-clip:border-box;" data-ls="parallax:true; parallaxlevel:3; parallaxevent:cursor;"> -->
        </div>  
      </div>
    </section>
<section class="space-extra-bottom greenbg" style="padding-top: 50px;">
    <div class="container ">
        <div class="row gx-70 justify-content-center justify-content-xl-start">
            <div class="text-center text-xl-start col-lg-9 col-xl-8 col-xxl-9">
                <div class="title-area"><span class="sec-subtitle" style="color:white;">Why Join the Tournament?</span>
                    <h2 class="sec-title" style="color:white;">You Learn As You Play.</h2>
                </div>
            </div>
            <div class="col-lg-8 col-xl-6 col-xxl-auto mb-md-3 mb-xl-0">
                <div class="img-box5"><svg class="svg-hidden">
                        <clippath id="ab-shape1" clippathunits="objectBoundingBox">
                            <path
                                d="M0.464,0.006 C0.488,0,0.513,0,0.536,0.006 L0.7,0.046 C0.723,0.052,0.745,0.063,0.764,0.08 L0.89,0.192 C0.908,0.208,0.922,0.229,0.931,0.252 L0.99,0.41 C0.999,0.433,1,0.458,0.999,0.482 L0.979,0.65 C0.976,0.674,0.967,0.698,0.953,0.718 L0.858,0.857 C0.844,0.877,0.825,0.894,0.803,0.905 L0.655,0.984 C0.633,0.995,0.609,1,0.584,1 H0.416 C0.392,1,0.368,0.995,0.346,0.984 L0.197,0.905 C0.175,0.894,0.157,0.877,0.143,0.857 L0.047,0.718 C0.033,0.698,0.025,0.674,0.022,0.65 L0.001,0.482 C-0.002,0.458,0.001,0.433,0.01,0.41 L0.07,0.252 C0.078,0.229,0.092,0.208,0.111,0.192 L0.237,0.08 C0.255,0.063,0.277,0.052,0.301,0.046 L0.464,0.006">
                            </path>
                        </clippath>
                    </svg>
                    <div class="img-1 mega-hover"><img src="assets/img/home11.png" style="width:559px" alt="about"></div>
                   <!--  <div class="exp-pill">
                        <p class="exp-number">100%</p>
                        <p class="exp-text">A+Results</p>
                </div> -->
            </div>
        </div>
        <div class="col-xl-6 col-xxl-6 text-center text-xl-start">
            <p class="fs-md pe-xxl-4 me-xxl-4 mb-4 pb-1 mt-n2" style="color:#ffff">Brace yourself for fun,
                engaging question volleys that come at you like googlies and spins. It's not just a game it's an
                immersive learning experience that transforms you into a champion on the CricMaths field.</p>
        <div class="row">
            <div class="col-md-12 about-con">
                <div class="feature-style1">
                    <div class="feature-icon"><img src="assets/img/icon/ab-4-1.svg" alt="icon"></div>
                    <h3 class="feature-title h5" style="color:#ffff">Champion Status</h3>
                    <p class="feature-text" style="color:#ffff">Conquer each maths question to rise as the undisputed champion of our
                        tournament. Sharpen your maths prowess and showcase your skills to the world.</p>
                </div>
            </div>
            <div class="col-md-12 about-con">
                <div class="feature-style1">
                    <div class="feature-icon"><img src="assets/img/icon/ab-4-2.svg" alt="icon"></div>
                    <h3 class="feature-title h5" style="color:#ffff">Cricket Insight</h3>
                    <p class="feature-text" style="color:#ffff">As you tackle our maths challenges,
                        you won't just be scoring points – you will also gain insights into the live cricket match.
                        Analyze the game in real-time and discover the fascinating connection between maths and cricket.
                    </p>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
</section>

<section class="space-extra-bottom space-top bg-color">
                <div class="container">
                    <div class="title-area">
                        <!-- <div class="sec-bubble">
                            <div class="bubble"></div>
                            <div class="bubble"></div>
                            <div class="bubble"></div>
                        </div> -->
                        <h2 class="sec-title">How It Works</h2>
                        
                    </div>
                    <div class="row justify-content-between align-items-center">
                        <div class="col-md-6 col-xl-auto order-2 order-xl-1">
                            <div class="feature-style3">
                                <div class="feature-img">
                                    <div class="img"><img src="assets/img/home2.jpg" alt="feature"></div>
                                </div>
                                <div class="feature-body">
                                    <h3 class="feature-title h4">Maths Question Volleys </h3>
                                    <div class="list-style2">
                                        <ul class="list-unstyled">
                                            <li> Face off against a barrage of maths questions </li>
                                            <li>Designed to challenge and inspire</li>
                                            <li>Each correct answer propels you forward in the tournament</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="feature-style3">
                                <div class="feature-img">
                                    <div class="img"><img src="assets/img/home3.jpg"  alt="feature"></div>
                                </div>
                                <div class="feature-body">
                                    <h3 class="feature-title h4">Googlies and Spins</h3>
                                    <div class="list-style2">
                                        <ul class="list-unstyled">
                                            <li>Be prepared for unexpected twists! </li>
                                            <li>Our googlies and spins keep the game dynamic </li>
                                            <li>Both mathematically and strategically</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                       
                        <div class="col-md-6 col-xl-auto order-3 order-xl-3">
                            <div class="feature-style3">
                                <div class="feature-img">
                                    <div class="img"><img src="assets/img/home4.jpg" alt="feature"></div>
                                </div>
                                <div class="feature-body">
                                    <h3 class="feature-title h4">Cricket Maths Integration </h3>
                                    <div class="list-style2">
                                        <ul class="list-unstyled">
                                            <li>Witness the synergy between maths and cricket</li>
                                            <li>Solving maths problems influences your grasp of the current cricket match</li>
                                            <li>Making learning an interactive and thrilling experience</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                          
                    </div>
                     <div class="col-xl-auto order-1 order-xl-2"><img class="img-border" src="assets/img/home10.png" alt="feature"
                                class="w-100"></div>
                </div>
                </div>
            </section>

<section class="space-extra-bottom space-top bg-color" style="
    margin-top: 0px;
    padding-top: 0px !important;
    background: #00a121!important;
    padding-top: 80px !important;
">
                <div class="container">
                    <div class="title-area">
                        <!-- <div class="sec-bubble">
                            <div class="bubble"></div>
                            <div class="bubble"></div>
                            <div class="bubble"></div>
                        </div> -->
                        <h2 class="sec-title" style="
    color: #fff !important;
">CricMaths = Kids scoring big in Maths via Cricket</h2>
                        
                    </div>
                    <div class="row justify-content-between align-items-center">
                        <div class="col-md-3">
                           </div>

                       
                        
                     <div class="col-md-6">

<video width="320" height="240" controls="" poster="https://cricmaths.com/assets/images/thum.png" style="
    width: 100%;
    height: 450px;
    
   
    
">
  <source src="https://cricmaths.com/assets/images/e1.mp4" type="video/mp4">
  <source src="movie.ogg" type="video/ogg">

</video>

</div>
 <div class="col-md-3">
                           </div>
                </div>
                </div>
            </section>

            <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/js/toastr.js"></script>
            <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.0/css/toastr.css" rel="stylesheet" />
            <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.0/js/toastr.js"></script>
            
            <script type="text/javascript">

      var firstElement = document.querySelector('.vs-hero-carousel');

if (firstElement) {
    firstElement.classList.remove('ls-container');
}

          
            </script>

<script>
 

  @if(Session::has('message'))
  var type = "{{ Session::get('alert-type', 'info') }}";
  switch(type){
    case 'info':
    toastr.info("{{ Session::get('message') }}");
    break;
    case 'warning':
    toastr.warning("{{ Session::get('message') }}");
    break;
    case 'success':
    toastr.success("{{ Session::get('message') }}");
    break;
    case 'error':
    toastr.error("{{ Session::get('message') }}");
    break;

  }
  @endif

</script>

<script src="assets/js/layerslider.kreaturamedia.jquery.js"></script>
   <script>
 jQuery(document).ready(function($) {
    $(".vs-hero-carousel").each(function() {
        var carousel = $(this);

        // Check if LayerSlider is defined and the carousel has LayerSlider initialization
        if (typeof carousel.layerSlider === "function") {
            // Your existing LayerSlider initialization code

            // Add event listeners for next and prev buttons
            carousel.find(".prev-button").on("click", function() {
                // Navigate to the previous slide
                carousel.layerSlider("prev");
            });

            carousel.find(".next-button").on("click", function() {
                // Navigate to the next slide
                carousel.layerSlider("next");
            });
        } else {
            console.error("LayerSlider is not properly initialized on this carousel.");
        }
    });
});
    </script>




                @endsection