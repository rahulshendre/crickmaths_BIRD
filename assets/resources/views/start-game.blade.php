<link rel="stylesheet" href="{{config('app.baseURL')}}/assets/css/app.min.css">
<link rel="stylesheet" href="{{config('app.baseURL')}}/assets/css/fontawesome.min.css">
<link rel="stylesheet" href="{{config('app.baseURL')}}/assets/css/style.css">
<link rel="stylesheet" href="{{config('app.baseURL')}}/assets/css/swiper-bundle.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<style>
    
li{
    font-weight: 700;
    font-size: medium;
}

.form{
        background-image: url('{{config("app.baseURL")}}/assets/images/cricket15.webp'); /* Replace with the path to your image */

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
    background-image: url('{{config("app.baseURL")}}/assets/images/bat.png'); /* Replace with the path to your image */
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


    .card {
        background-image: url('assets/images/bg.jpg');
        background-repeat: no-repeat;
        background-size: 100% 100%;
        height: 100%;
        padding-right: 0px;
        padding-left: 0px;
    }

    .card img {
        height: 100%;
        width: 100%;
    }

    .header-layout2 {
        display: none;
    }

    .options {
        display: flex;
        justify-content: space-around;
        z-index: 9;
        position: relative;
      
    margin: auto;
    width: 100%;
    align-items: center;
    }

    .options_item {
        border-radius: 50%;
        width: 300px;
        height: 300px;
        text-align: center;
     

    }

    .options_item img {
        border-radius: 50%;

    }

    .options_item h2 {
        font-family: "Lucida Console", "Courier New", monospace;
        margin-top: 2%;
            color: #ffff;
    }
    .bat{
        width: 20%;
    padding: 3%;
    }
    .bat img{
        width: 100%;
    }
    .coin { 
        
    padding: 3%;
      animation: coin-rotate 8s infinite;
     
      }
       

.a {
   opacity: 0.1;
   }
        
@keyframes coin-rotate  {  
                        0%  {
                            transform: rotateY(0deg); 
                            transform-origin: 50% 5% 0;
                            }  
                        100% {
                             transform: rotateY(360deg); 
                             transform-origin: 50% 5% 0;
                             }  
                        }
                         .swiper-button-prev.swiper-button-disabled, .swiper-button-next.swiper-button-disabled {
    opacity: 0.7;
    cursor: auto;
    pointer-events: none;
    color: #ffff;
}
.swiper-button-next, .swiper-container-rtl .swiper-button-prev {
    right: 40%;
    left: auto;
    color: #ffff;
font-size: 70px;
    top: 46%;
}
.swiper-button-prev, .swiper-container-rtl .swiper-button-next {
    left: 40%;
    right: auto;
    color: #ffff;
    font-size: 70px;
    top: 46%;
}
.slider__content{
  text-align: center;
}
.title{
  color: #ffff;

}  
.blink_me {
  animation: blinker 1s linear infinite;
}

@keyframes blinker {
  50% {
    opacity: 0;
  }
}
</style>



        <div class="card">


            <div class="options">
                <a  href="after-start">
                    <div class="options_item"><img src="assets/images/start2.png" alt="">
                        <h2 class="blink_me">START</h2>
                    </div>
                </a>
                <div class="bat">
                   
                    <div class="coin"> <img src="assets/images/bat2.png" alt=""></div>
                </div>
                <a href="{{config('app.baseURL')}}">
                    <div class="options_item"><img src="assets/images/wicket.png" alt="">
                        <h2 class="blink_me">Exit</h2>
                    </div>
                </a>
            </div>
        </div>

    




<script>
    window.newQuestion() {
     $( ".card" ).empty();
    var quct='<section class="slider__area" style="background:transparent;margin-top: 23%;"> <div class="swiper-banner"> <div class="swiper-button-next"></div> <div class="swiper-button-prev"></div> <!-- swiper slides --> <div class="swiper-wrapper"> <div class="swiper-slide"> <div class="container"> <div class="row"> <div class="col-lg-12" > <div class="slider__content"> <!-- <span class="sub-title">We Are Expert In This Field</span> --> <a><h2 class="title">Level 1</h2></a> </div> </div> </div> </div> </div> <div class="swiper-slide"> <div class="container"> <div class="row"> <div class="row"> <div class="col-lg-12" > <div class="slider__content"> <!-- <span class="sub-title">We Are Expert In This Field</span> --> <a href="_blank"><h2 class="title">Level 2</h2></a> </div> </div> </div> </div> </div> </div> <div class="swiper-slide"> <div class="container"> <div class="row"> <div class="row"> <div class="col-lg-12" > <div class="slider__content"> <!-- <span class="sub-title">We Are Expert In This Field</span> --> <a href="_blank"><h2 class="title">Level 3</h2></a> </div> </div> </div> </div> </div> </div> <div class="swiper-slide"> <div class="container"> <div class="row"> <div class="row"> <div class="col-lg-12" > <div class="slider__content"> <!-- <span class="sub-title">We Are Expert In This Field</span> --> <a href="_blank"><h2 class="title">Level 4</h2></a> </div> </div> </div> </div> </div> </div> <!-- !swiper slides --> <!-- next / prev arrows --> <!-- !next / prev arrows --> <!-- pagination dots --> <div class="swiper-pagination"></div> <!-- !pagination dots --> </div> </section>'
    $( ".card" ).append(quct);
}

    </script>

<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>




<script>
  var slider = new Swiper('.swiper-banner', {
  centeredSlides: true,
  
   navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },
});
</script>