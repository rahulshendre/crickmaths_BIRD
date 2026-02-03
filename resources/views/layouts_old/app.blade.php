<!doctype html>
<html class="no-js" lang="zxx">
<head><meta charset="utf-8">
<meta http-equiv="x-ua-compatible" content="ie=edge">
<title>Cricmaths</title>
<meta name="author" content="Cricmaths">
<meta name="description" content="Cricmaths: Where Number Meets Cricket">
<meta name="keywords" content="Cricket, Maths, cricket and maths, learn maths, live cricket scores, play cricket, mathematics, edutainment, mathematics in cricket, cricket education, education, india, numeracy, planet read, Learning Cricket Through Math, school, primary, IPL, World Cup, maths made easy, cricket analytics, Game Theory in Cricket, Mathematical Modelling in Sports, maths teacher, math, algebra, geometry">
 <link rel="icon" href="{{config('app.baseURL')}}/assets/img/image002.png" type="image/x-icon">
    <link rel="shortcut icon" href="{{config('app.baseURL')}}/assets/img/image002.png" type="image/x-icon">
<meta name="robots" content="INDEX,FOLLOW">
<meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no">
<!-- <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin=""> -->
<link href="{{config('app.baseURL')}}/css2?family=Fredoka:wght@400;500;600;700&family=Jost:wght@400;500&display=swap" rel="stylesheet">
<link rel="stylesheet" href="{{config('app.baseURL')}}/assets/css/app.min.css">
<link rel="stylesheet" href="{{config('app.baseURL')}}/assets/css/fontawesome.min.css">
<link rel="stylesheet" href="{{config('app.baseURL')}}/assets/css/style.css">
<link rel="stylesheet" href="{{config('app.baseURL')}}/assets/css/swiper-bundle.css">
<link href="https://fonts.googleapis.com/css2?family=Baloo+Da+2:wght@400..800&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Bangers&display=swap" rel="stylesheet">
</head>
<body>
<style>
     .vs-btn{
          font-family: "Baloo Da 2", sans-serif !important;
     }
     .sec-subtitle {

    font-weight: 400;
}
     .vs-btn {
         font-weight: 400; 
     }
.sec-title2, .sec-title {
     font-weight: 400;
}
     .header-links.style3 i {
    border-color: rgba(0, 0, 0, 0);
    color: var(--title-color);
    background-color: #00a121 !important ;
}
     .btn-primary{
          background-color: #490d59;
              border-color: #490d59;
     }
     .vs-btn{
          background-color: #b70303 !important;
     }
     .widget_title:before{
          background-color: #b70303 !important;
     }
     .footer-widget.widget_nav_menu a:before {
          background-color: #b70303 !important;
     }
     .title-divider2, .title-divider1{
          background-color: #b70303 !important;
     }
  
</style>

	@include('layouts.header')

	@yield('content')

    @include('layouts.footer')	



    <div class="preloader">
   <!-- <button class="vs-btn preloaderCls">Cancel Preloader</button> -->
   <div class="preloader-inner">
   <img src="{{config('app.baseURL')}}/assets/images/batball.gif" alt="logo">
   </div>
</div>
     <a href="#" class="scrollToTop scroll-btn">
     <i class="far fa-arrow-up"></i></a>
     <script src="{{config('app.baseURL')}}/assets/js/vendor/jquery-3.6.0.min.js"></script>
     <script src="{{config('app.baseURL')}}/assets/js/app.min.js"></script>
     <script src="{{config('app.baseURL')}}/assets/js/layerslider.utils.js"></script>
     <script src="{{config('app.baseURL')}}/assets/js/layerslider.transitions.js"></script>
     <script src="{{config('app.baseURL')}}/assets/js/layerslider.kreaturamedia.jquery.js"></script>
     <script src="{{config('app.baseURL')}}/assets/js/main.js"></script>
     

 </body>
 </html>