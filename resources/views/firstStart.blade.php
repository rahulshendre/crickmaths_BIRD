<meta charset="utf-8">
<meta http-equiv="x-ua-compatible" content="ie=edge">
<title>Cricmaths</title>
<meta name="author" content="Vecuro">
<meta name="description" content="">
<meta name="keywords" content="">
<meta name="robots" content="INDEX,FOLLOW">
<meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
<link href="https://fonts.googleapis.com/css2?family=Fredoka:wght@400;500;600;700&family=Jost:wght@400;500&display=swap" rel="stylesheet">
<link rel="stylesheet" href="{{config('app.baseURL')}}/assets/css/app.min.css">
<link rel="stylesheet" href="{{config('app.baseURL')}}/assets/css/fontawesome.min.css">
<link rel="stylesheet" href="{{config('app.baseURL')}}/assets/css/style.css">
<link rel="stylesheet" href="{{config('app.baseURL')}}/assets/css/swiper-bundle.css">


<style>
.header-layout2{
        display: none;
    }
    .header-layout1{
        display: none;
    }
    .start{
        display: flex;
    }
    footer{
        display: none;
    }
body {
        background-image: url('assets/images/bg.jpg');
        background-repeat: no-repeat;
        background-size: 100% 100%;
    }
.switchbtn{
    width: fit-content;
    padding: 2%;
}
.rotating-image {
      /* Set a width and height for the image */
      width: 200px;
      /* Apply the rotation */
      animation: rotateAnimation 3s infinite linear;
      width: 13%;
    padding: 3%;
    }

.startCenter{
    display: flex;
    flex-direction: column;
    align-items: center;
}

#startbtn{
    text-align: center;
}

@media screen and (max-width: 768px){
#imgmobile{
    width: 40%;
}
}
    @keyframes rotateAnimation {
      /* Rotate the image 360 degrees */
      from {
        transform: rotateY(0deg);
      }
      to {
        transform: rotateY(360deg);
      }
    }

</style>



<main>

    <ul class="switchbtn">
                           <li> 
                            <a type="button" href="{{config('app.baseURL')}}">
                                <i class="fa fa-power-off" style="font-size:30px;color: white;" aria-hidden="true">
                                    
                                </i>
                            </a>
                        </li>
                            </ul>
                     
 <div class="startCenter">
<div class="rotating-image"> <img src="assets/images/bat2.png" alt=""></div>
<div class="start">
                   <a id="startbtn" href="after-start">

                    <img id="imgmobile" class="imagenew" src="assets/images/start2.png" alt="">
                        <h2 class="blink_me">START</h2>
                 </a>
                
                </div>


</div>




</main>

   <script src="{{config('app.baseURL')}}/assets/js/vendor/jquery-3.6.0.min.js"></script>
     <script src="{{config('app.baseURL')}}/assets/js/app.min.js"></script>
     <script src="{{config('app.baseURL')}}/assets/js/layerslider.utils.js"></script>
     <script src="{{config('app.baseURL')}}/assets/js/layerslider.transitions.js"></script>
     <script src="{{config('app.baseURL')}}/assets/js/layerslider.kreaturamedia.jquery.js"></script>
     <script src="{{config('app.baseURL')}}/assets/js/main.js"></script>