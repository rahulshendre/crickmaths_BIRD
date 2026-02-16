<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, orientation=landscape">


<link rel="stylesheet" href="{{config('app.baseURL')}}/assets/css/swiper-bundle.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
<link href="../../css2?family=Fredoka:wght@400;500;600;700&family=Jost:wght@400;500&display=swap" rel="stylesheet">
<link rel="stylesheet" href="assets/css/app.min.css">
<link rel="stylesheet" href="assets/css/fontawesome.min.css">
<link rel="stylesheet" href="assets/css/style.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Baloo+Da+2:wght@400..800&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Bangers&display=swap" rel="stylesheet">

<style>

  *{
      font-family: "Baloo Da 2", sans-serif !important;
  font-optical-sizing: auto;
  font-weight: <weight>;
  font-style: normal;
cursor: context-menu;
  }
.correct-choice-li  {
  background-color: black; /* Change this color to the desired background color */
}
  .score-botom{
    position: relative;
    top: 6%;
  }
  .whole-score{
    margin:auto;
    top: 5%;
    position: relative;
  }
  .orange{
     color: #ffa700;
  }
  .green{
   color:#51af3a;
  }
/*#exit-game{
    right: 1%;
    position: fixed;
}*/
  :not(:root):fullscreen::backdrop {
    position: fixed;
    inset: 0px;
    background: url('assets/images/bg.jpg') !important;
       background-repeat: no-repeat !important;
    background-size: 100% 100% !important;

}


 #myvideo {
    width: 100%;
    height: 100%;
    background-image: url('assets/img/grass.jpeg');
    background-repeat: no-repeat;
    background-size: 100% 100%;
 
  }
.vs-tem{
  border-radius: 100%;
  border: 2px solid red;
box-shadow: rgba(50, 50, 93, 0.25) 0px 50px 100px -20px, rgba(0, 0, 0, 0.3) 0px 30px 60px -30px, rgba(10, 37, 64, 0.35) 0px -2px 6px 0px inset;
  border-radius: 100%;
    border: 2px solid red;
    background: #ffff;
    padding: 5px;
    z-index: 9;
    color: red;
    margin: auto;
}
  
  .teamsflex0,.teamsflex1 {
box-shadow: rgba(50, 50, 93, 0.25) 0px 30px 60px -12px inset, rgba(0, 0, 0, 0.3) 0px 18px 36px -18px inset;

        width:100%;
        height:100%;
        border-color: red;
        border-style:solid;
        border-width:5px;
  
        background-color: #ffff;
        color: red;
        border-radius: 6px;
        
}


.teamsflex0{
  clip-path: polygon(0 0, 100% 0%, 100% 100%, 32px 100%);
  box-sizing: border-box;
  position: relative;
left: 3%;
}
.teamsflex1{
       clip-path: polygon(0 0, 100% 0%, calc(100% - 32px) 100%, 0% 100%);
  position: relative;
   
right: 3%;
}
  .vs-match{
    display: flex;
        display: flex;
    justify-content: center;
  }
  #exit-game{
    padding: 19px 10px 20px 10px;
  }
  #next,#exit-game{
    background-color: #b70303 ;
    color: #ffff;
    
  }
  .fill-in-the-blanks{
display: flex;
    flex-direction: column;
    flex-wrap: nowrap;
    justify-content: space-around;
    height: 100%;
    align-items: center;
    gap: 3%;

  }
.h4{
  font-size: 32px;
  color:#ffff ;
  text-align: center;
} 
  input[type=radio]~label {
      font-family: " Poppins ", system-ui !important;
  font-style: normal;
    position: relative;
    cursor: pointer;
    line-height: 1;
    display: inline-block;
    font-weight: 600;
    margin-bottom: 0;
}
body {
  overflow: hidden; /* Hide scrollbars */
}
.gifclass{
  width:20% !important;
}

  body {
    background-image: url('assets/img/grass.jpeg');
    background-repeat: no-repeat;
    background-size: 100% 100%;
    height: 100%;
    width: 100%;
    padding-right: 0px;
    padding-left: 0px;
  font-family: "Baloo Da 2", sans-serif !important;
  font-optical-sizing: auto;
  font-style: normal;
  }
  #makeTrial
  {position: relative;
      right: 20%;
      border: 0px transparent;
      background: transparent;
      height: 14%;
      color: transparent;
    }
/*  #myvideo{
    height:fit-content;
  }*/
  #total-score-display {
    position: relative;
    float: right;
    top: 95%;
  margin: 0px 0px 2px 0px;
    padding: 1%;
    border-radius: 10px;
    color: #ffff;
  }

  .menu-style2>ul>.score {
    width: 80%;
  }


  .score {
    margin: 0 10px;
    font-size: 18px;
  }

  .detail {
   position: relative;
    line-height: 0.7;
    margin: auto;
    top: 10%;
    width: 100%;
  }

  .quiz-button {
    color: transparent;
  }

  .scoreButtons {
    border-radius: 31px;
    position: relative;
    top: 2%;
    display: flex;
    justify-content: space-evenly;
    height: 20%;
    right: 14%;

  }

  .scoreButtons #button1 {
    position: relative;
    right: 31%;
    background: transparent;
    width: 100%;
    border: transparent;
    color: transparent;
  }

  .scoreButtons #button3 {
    position: relative;
    right: 7%;
  }

  .correct {
    color: black;
    position: relative;
  border: 1px solid #ffff;
  border-radius: 100px;
  padding: 1%;
  background-color: #ffaa00;
  }

  .yellow {
    color: yellow;
  }

  .pink {
     font-family: "Bangers", system-ui !important;
    color: #ffa700;
    font-weight: 400;
    font-size: 24px;
  }

  .testResult {
    position: relative;
top: 2%;
    font-size: 32px;
  }
  

.bangers-regular {
  font-family: "Bangers", system-ui;
  font-weight: 400;
  font-style: normal;
}

  
  #question .umpire {
/*    height: 20%;*/
      width:30%;
      position: relative;
      bottom: 16%;
      left: 1%;

      overflow: hidden;
  }

  #question {
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    align-items: center;
    height: 100%;
  }

  .scoreboard-kids {
    margin: auto;
    text-align: center;
  }

  .scoreboard-kids {
    background-image: url(assets/img/ribb.png);
    padding: 20px;
    background-size: 100% 100%;
    width: 55%;
    height: 80%;
    text-align: center;
    margin: 0 auto;
    position: relative;


  }

  .score-image {
    max-width: 100%;
    height: auto;
    margin-bottom: 20px;
    border-radius: 10px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
  }

  .btn-rainbow {
    background: linear-gradient(to right, #ff8a00, #ffbf00);
    color: #fff;
    padding: 10px 20px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    font-size: 16px;
  }

  .btn-rainbow:hover {
    background: linear-gradient(to right, #ffbf00, #ff8a00);
  }

  .fa-gear {
    font-size: 48px;
  }




  .border-bottom {
    border-bottom: 0px solid #dee2e6 !important;
  }

  .header-layout2 {
    display: none;
  }

  .container {
    height: 70%;
    width: 65%;
  }

  .question {
    height: 100%;
    background-image: url('assets/img/pitch1.jpg');
    /*background-color: black;*/
    background-repeat: no-repeat;
    background-size: 100% 100%;
    height: 100%;
    padding-right: 0px;
    padding-left: 0px;
    position: relative;
    z-index: 99;
  }

  .question:before {
    content: "";
    position: absolute;
    top: -2px;
    left: -2px;
    background-size: 400%;
    z-index: -1;
    filter: blur(5px);
    -webkit-filter: blur(5px);
    width: calc(100% + 4px);
    height: calc(100% + 4px);
    animation: glowing-button-85 20s linear infinite;
    transition: opacity 0.3s ease-in-out;
    border-radius: 10px;
  }

  .question:after {
    z-index: -1;
    content: "";
    position: absolute;
    width: 100%;
    height: 100%;
    background-image: url('assets/img/pitch1.jpg');
    background-repeat: no-repeat;
    background-size: 100% 100%;
    left: 0;
    top: 0;
    border-radius: 10px;
  }





  .btn:focus {
    outline: 0 !important;
    box-shadow: none !important;
  }

  .btn:active {
    outline: 0 !important;
    box-shadow: none !important;
  }

  .question-title h5 {
    border: 1px solid;
    padding: 5%;
  }

  .options {
    display: flex;
    height: 60%;
    justify-items: start;
    align-content: space-evenly;
    flex-direction: column;
    justify-content: space-around;
  }

  .title {
    color: #ffff;

  }

  .animate-charcter {
    text-transform: uppercase;
    background-image: linear-gradient(-225deg,
        #231557 0%,
        #44107a 29%,
        #ff1361 67%,
        #fff800 100%);
    background-size: auto auto;
    background-clip: border-box;
    background-size: 200% auto;
    color: #ffff;
    background-clip: text;
    text-fill-color: transparent;
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    animation: textclip 80s linear infinite;
    display: inline-block;

  }

  @keyframes textclip {
    to {
      background-position: 200% center;
    }
  }

  .mcq {

    background: transparent;
  }

  .mcq-option {
    opacity: 0;
    /* Initial opacity set to 0 */
    animation: fadeIn ease-in-out 0.5s forwards;
    /* Animation definition */
    width: 45%;
  }

  @keyframes fadeIn {
    from {
      opacity: 0;
      transform: translateY(-10px);
    }

    to {
      opacity: 1;
      transform: translateY(0);
    }
  }

  .radio span {
    color: #ffff;
  }

  .dropdown {
    margin-top: 10px;
  }

  .dropdown-btn {
    background-color: #000000;
    color: #fff;
    padding: 10px;
    width: 200px;
    cursor: pointer;
    z-index: 10;
    overflow: hidden;
    -webkit-user-select: none;
    -ms-user-select: none;
    user-select: none;
  }

  .dropdown-area {
    width: 220px;
    transform: translateY(-35px);
    opacity: 0;
    pointer-events: none;
    z-index: -1;
  }

  .dropdown-area ul {
    padding: 0;
    list-style: none;
  }

  .dropdown-area ul li {
    border-bottom: 1px solid #eee;
    padding: 10px;
    cursor: pointer;
    transition: .3s;
  }

  .dropdown-area ul li:nth-child(1) {
    background-color: #fff;
    margin-top: -20px;
    transition: .3s;
  }

  .dropdown-area ul li:nth-child(2) {
    background-color: #aaaaaa;
    margin-top: -40px;
    transition: .5s;
  }

  .dropdown-area ul li:nth-child(3) {
    background-color: #828282;
    margin-top: -40px;
    transition: .6s;
    color: #fff;
  }

  .dropdown-area ul li:nth-child(4) {
    background-color: #656565;
    margin-top: -40px;
    transition: .7s;
    color: #fff;
  }

  .dropdown-area ul li:nth-child(5) {
    background-color: #484848;
    margin-top: -40px;
    transition: .8s;
    color: #fff;
  }


  .activeDropArea {
    opacity: 1;
    pointer-events: all;
    transform: translateY(-15px);
  }

  .activeDropArea ul li:nth-child(1),
  .activeDropArea ul li:nth-child(2),
  .activeDropArea ul li:nth-child(3),
  .activeDropArea ul li:nth-child(4),
  .activeDropArea ul li:nth-child(5) {
    margin-top: 0;
  }

  .main-menu ul li.menu-item-has-children>a:after {
    content: "";
  }

  .main-menu ul.sub-menu,
  .main-menu ul.mega-menu {
    background-color: transparent;
    color: white;
    border-bottom: 0px;
  }

  .main-menu ul.sub-menu:before {

    width: 0px;
  }

  .main-menu ul.sub-menu li a:before {
    content: none;
  }

  .border {
    border: 0px solid #dee2e6 !important;
  }

  .question-title h5 {
    border: 0px solid;
  }


  /* CSS */
  .button-85 {
    padding: 0.6em 2em;
    border: none;
    outline: none;
    color: rgb(255, 255, 255);
    cursor: pointer;
    position: relative;
    z-index: 0;
    border-radius: 10px;
    user-select: none;
    -webkit-user-select: none;
    touch-action: manipulation;
  }

  .button-85:before {
    content: "";
    background: linear-gradient(45deg,
        #ff0000,
        #ff7300,
        #fffb00,
        #48ff00,
        #00ffd5,
        #002bff,
        #7a00ff,
        #ff00c8,
        #ff0000);
    position: absolute;
    top: -2px;
    left: -2px;
    background-size: 400%;
    z-index: -1;
    filter: blur(5px);
    -webkit-filter: blur(5px);
    width: calc(100% + 4px);
    height: calc(100% + 4px);
    animation: glowing-button-85 20s linear infinite;
    transition: opacity 0.3s ease-in-out;
    border-radius: 10px;
  }

  @keyframes glowing-button-85 {
    0% {
      background-position: 0 0;
    }

    50% {
      background-position: 400% 0;
    }

    100% {
      background-position: 0 0;
    }
  }

  .button-85:after {
    z-index: -1;
    content: "";
    position: absolute;
    width: 100%;
    height: 100%;
    background: #b70303;
    border: 2px solid green;
    left: 0;
    top: 0;
    border-radius: 10px;
  }



  /* CSS */
  .button-33 {
    background-color: #c79e80;
    border-radius: 100px;
     box-shadow: var(--bs-black) 0px 10px;
    color: green;
    cursor: pointer;
    display: inline-block;
    
    padding: 0px 20px;
    text-align: center;
    text-decoration: none;
    transition: all 250ms;
    border: 0;
    font-size: 16px;
    user-select: none;
    -webkit-user-select: none;
    touch-action: manipulation;
    width: 100%;
  }

  .fa {
    font-size: 40px;
  }

  .fas {
    font-size: 40px;
  }

  

  .mcq-option {
    opacity: 0;
    animation: fadeIn ease-in-out 0.5s forwards;

    margin: auto;
  }

  .btn-primary {
    color: #fff;
    background-color: transparent;
    border-color: transparent;
  }

  .radio-item [type="radio"] {
    display: none;
  }

  .radio-item+.radio-item {
    margin-top: 15px;
  }

  .radio-item label {
    display: block;
   
padding: 4%;
    border-radius: 8px;
    cursor: pointer;
    font-size: 30px;
    font-weight: 200;
    min-width: 250px;
    white-space: nowrap;
    position: relative;
    transition: 0.4s ease-in-out 0s;
  }

  .radio-item label:after,
  .radio-item label:before {
    content: "";
    position: absolute;
    border-radius: 50%;
  }

  .radio-item label:after {
    height: 19px;
    width: 19px;
    /*    border: 2px solid #524eee;*/
    left: 19px;
    top: calc(50% - 12px);
  }

  .radio-item label:before {
    background: transparent;
    height: 20px;
    width: 20px;
  
    bottom: 23px;
    transform: scale(5);
    opacity: 0;
    visibility: hidden;
    transition: 0.4s ease-in-out 0s;
  }

  .radio-item [type="radio"]:checked~label {
    border-color: #524eee;
  }

  .radio-item [type="radio"]:checked~label::before {
    opacity: 1;
    visibility: visible;
    transform: scale(1);
  }

  .d-flex {
    display: flex !important;
    justify-content: center;
  }

  .radio-list {
    position: relative;
    top: 18%;
  }

  .item2 {
    grid-area: menu;
    margin-top: 35%;
    font-size: 50px;
    color: #f3ee31;
  }

  .item3 {
    grid-area: main;
    color: #f3ee31;
    display: flex;
    gap: 7px;
  }

  .item5 {
    grid-area: footer;
    color: #f3ee31;
  }

  .grid-container {
    display: grid;
    grid-template-areas:
      'menu main'
      'menu footer';
    gap: 5px;
    position: relative;
    bottom: 10px;
  }

  .grid-container>div {

    text-align: center;

  }

  #addAvatar {
    width: 55px;
    border-radius: 333px;
    position: relative;
    right: 25%;
  }


  #quiz {
    display: none;
    /*  margin-top: 50px;*/
    font-size: x-large;
  }

  ul {
    list-style-type: none;
    padding: 0;
    margin-bottom: 10px;
    font-size: smaller;
  }

  input[type="radio"] {
    content: "🏏";
    margin-right: 15px;
  }

  input[type=radio]~label:before {
    content: "🏏";
    position: absolute;
    left: 7px;
    top: 31%;
    width: 18px;

    height: 17px;
    border-radius: 3px;

    font-size: 35px;
    outline-offset: -5px;
    transition: all ease .3s;
    margin-right: 5%c;
  }

  button {
    position: relative;
    float: right;
    margin-left: 5px;
  
  }

  #prev {
    display: none;
  }

 

  #warning {
    color: #ffff;
    font-weight: bold;
    margin-top: 25px;
  }

 .fill-in-the-blanks ul {
    width: 40%;
    margin: 1% auto auto auto;
    text-align: center;
      }

  input[type=radio]:checked~label::before {
    outline-color: transparent;
    border-color: rgba(0, 0, 0, 0);
  }

  .question #score {
    margin: auto;
    margin-top: 25%;
    margin-left: 18%;
  }

  .main-menu ul {
    width: 100%;
  }

  .button-85 {
    margin: auto;
  }

  #question p {
    font-size: 16px;
  }

  .radio-item {
    margin-bottom: 10px;
  }

  #muteBtn {
    position: relative;
    right: 53%;
  }

  .fa-angle-right {
    font-size: 20px;
  }

  .scoreboard-container {
    text-align: center;
  }

  .scoreboard {
    display: flex;
    justify-content: center;
    align-items: center;
    margin: 20px 0;
  }

  .team {
    margin: 0 20px;
  }

  .team h2 {
    color: #3498db;
  }

  .separator {
    font-size: 24px;
    margin: 0 10px;
  }

  .score {
    font-size: 36px;
    font-weight: bold;
    color: #333;
  }

  .result {
    font-size: 18px;
    color: #3498db;
    margin-top: 10px;
  }

  /* Additional Styling for Visual Appeal */
  .scoreboard-container {
    background-color: #fff;
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
  }

  h1 {
    color: #e74c3c;
  }

  .match-item {
    display: flex;
    text-align: center;
    align-items: center;
    justify-content: space-around;
   
    position: relative;
  
  }

  .match-item h6 {
    color: white;
    font-size:20px;
  }

  .swiper {
    width: 600px;
    height: 300px;
  }
.main-menu{
  background-color: #50ae3d;
}
  .main-menu ul li:first-child {
    margin-left: 0;
    position: relative;
    right: 0%;
  }

  .main-menu ul li:last-child {
    margin-right: 0;
    position: relative;
    left: 0%;
  }

  .timeline {
    display: flex;
    justify-content: flex-start;
    margin-top: 20px;
  }

  .part {
    width: 10%;
    /* Adjust based on your design */
    height: 40px;
    /* Adjust based on your design */
    background-color: #3498db;
    color: #fff;
    display: none;
    align-items: center;
    justify-content: center;
    border-radius: 5px;
    cursor: pointer;
    font-size: 12px;
  }

  .part:not(:last-child) {
    margin-right: 10px;
  }

  .part.completed {
    content: "🏏";
    background-color: #2ecc71;
    /* Change color for completed parts */
    display: flex;
  }

  .match-item h6 img {
    height: 26px;
  }

  #question img {
    position: relative;
    bottom: 50%;
    right: 25%;
  }

  .team-info p {
    font-size: 18px;
    line-height: 0;
  }
  .team-info{
color: black;
  }
  .team-info h6{
color: black;
   font-family: "Bangers", system-ui !important;
  font-weight: 400;
  font-style: normal;
font-size: 30px;
  }
  .score-message{
    font-size: 40px;
  }
  .menu-style2>ul>li:first-child>a {
    padding-left: 10px;
}

   @media screen and (orientation: landscape) {
            body {
                background-color: #c0c0c0;
                font-size: 18px;
                /* Add other landscape styles here */
            }
        

        #landscape-message {
            display: none;
        }
  
  }

 
 @media screen and (max-width: 1440px) {
  .score-botom{
    position: relative;
    top: 6%;
  }
 }
     @media screen and (max-width: 1290px) {
      .testResult {
font-size:24px
}
 }   
  @media screen and (max-width: 946px) and (orientation: landscape) {
    .match-item{
      position: relative;
    left: 2%;
    }
    .correct{
      font-size: 27px;
    }
    .testResult {
      font-size: 19px;
   
  }
    .score-message{
      line-height: 0.7;
      font-size: 14px;
}
    .vs-tem{
      font-size: 16px;
    }
   .vs-match{
    width: 60%;
   }
    .vs-btn {
      padding: 9px;
    }
    .button-33 {
      width: 70%  ;
    }
.fill-in-the-blanks{
      bottom: 8%;
    position: relative;
}
#total-score-display {
    position: relative;
    float: right;
    top: 76%;
    padding: 4px;
}


    input[type=radio]~label {

    padding-left: 20px;
 
}
input[type=radio]~label:before {
    content: "🏏";
    position: absolute;
     left: 0px; 
    top: 31%;
    width: 18px;
    height: 17px;
    border-radius: 3px;
    font-size: 11px;
    outline-offset: -5px;
    transition: all ease .3s;
    margin-right: 5%c;
}
    .fill-in-the-blanks h4{
    font-size: 12px;
}
.fill-in-the-blanks label{
  font-size: 12px;
}
     .team-info p {
    font-size: 8px;
  }
    .part {
    width: 10%;
    height: 24px;
    background-color: #3498db;
    color: #fff;
    display: none;
    align-items: center;
    justify-content: center;
    border-radius: 5px;
    cursor: pointer;
    font-size: x-small;
        font-size: 10px;
  }
    .timeline {
    margin-top: 0px;
  }
#question .umpire {
  bottom: 33%;
  height: 20%;
}
    .umpire {
      margin-left:60%;
    }

    .scoreboard-kids {
      max-width: 100%;
    }

    #addAvatar {
      width: 25px;
    }

    .menu-style2>ul>li>a {
      padding: 0px;
    }

    .button-85 {
      padding: 0em 2em;
      font-size: 10px;
    }

    .h4,
    h4 {
      font-size: 16px;
    }

    .radio-item label {
      display: block;
      padding: 7px 92px;
      font-size: 12px;
      min-width: 150px;
    }

    ul {

      padding-top: 0%;
    }

    .question {
      background-size: cover;

      padding: 10px;
      margin: auto;

    }

    .fa {
      font-size: 30px;
    }

    .fas {
      font-size: 30px;
    }

    #muteBtn {
      position: relative;
      right: 53%;
    }

    .radio-item {
      margin-bottom: 0;
    }

    .fa-angle-right {
      font-size: 10px;
    }
      .pink{
    font-size: 14px;
    margin: 0px 0px 1px 0px;
  }
  .team-info {
    padding: 3%;
}
}
@media screen and (max-width: 850px) and (orientation: landscape){
  .match-team h6{
  margin: 0px !important;
}
#exit-game {
    padding: 6px 10px 6px 10px !important;
}
  .whole-score{
position: relative;
top:5%;
  }
  .pink{
    font-size: 12px;
    margin: 0px 0px 1px 0px;
  }
  .correct {
   
    font-size: 17px;
}
  .detail{
    line-height: 0.1;
    font-size: 11px;

}
.score-message {
    line-height: 0.1;
    font-size: 14px;  
}
  .testResult {
    font-size: 14px;
   
}
 

  .radio-item label {
    display: block;
    padding: 4px 75px;
  }
  .teamsflex0,.teamsflex1 {

        border-width:1px;
  }
  .fill-in-the-blanks {
    gap: 0%;
  }
.team-info h6 {
    font-size: 12px;
    line-height: 0.4;
}
.team-info p {
  
  margin: 7px;
}
.question {
    height: 87%;

}
.team-info {
    padding: 3%;
}
}
@media screen and (min-width: 320px) and (max-width: 767px) and (orientation: landscape) {
  /* Add your landscape-specific styles here */
  /* For example, you might reset the rotation and positioning */
  /* html {
    transform: rotate(-90deg);
    transform-origin: initial;
    width: auto;
    height: auto;
    overflow-x: auto;
    position: static;
    top: auto;
    left: auto;
  } */
  .button-33 {
     box-shadow: var(--bs-black) 0px 6px;
  }
  .whole-score{
position: relative;
top:5%;
  }
  .pink{
    font-size: 12px;
    margin: 0px 0px 1px 0px;
  }
  .correct {
   
    font-size: 17px;
}
  .detail{
    line-height: 0.1;
    font-size: 11px;

}
.score-message {
    line-height: 0.1;
    font-size: 14px;  
}
  .testResult {
    font-size: 14px;
   
}
 

  .radio-item label {
    display: block;
    padding: 4px 75px;
  }
  .teamsflex0,.teamsflex1 {

        border-width:1px;
  }
  .fill-in-the-blanks {
    gap: 0%;
  }
.team-info h6 {
    font-size: 12px;
    line-height: 0.4;
}
.team-info p {
  
  margin: 7px;
}
.question {
    height: 87%;

}
.team-info {
    padding: 3%;
}
}

</style>
<body id="myvideo">



  <div >
    <nav class="main-menu menu-style2">
      <ul style="display: flex;
    align-items: center;
    justify-content: space-between;">
        <li class="menu-item-has-children"><a><i class="fa fa-gear" style="color:#f3ee31"></i></a>
          <ul class="sub-menu" style="display: flex;flex-direction: column;gap: 7px;">


          <!--   <li><button id="muteBtn" class="btn btn-primary"><i class="fa fa-volume"></i></button>
              <button id="unmuteBtn" class="btn btn-primary"><i class="fas fa-volume-mute"
                  style="color: white;"></i></button>
            </li> -->



            <li><a onclick="openFullscreen()"><i class="fas fa-expand-alt" style="color: white;"></i></a></li>
            <li><a onclick="closeFullscreen()"><i class="fa fa-window-close"></i></a></li>
            <li> <a type="button" href="{{config('app.baseURL')}}/after-start"><i class="fa fa-power-off" style="color: white;"
                  aria-hidden="true"></i></a></li>
          </ul>
        </li>
        <li><button id="exit-game" class="btn vs-btn">Exit</button></li>
        <li class="score">

          <div class="match-item">

            @foreach($matchLive as $key=>$matchl)
           
            @php
            $teamDetails = json_decode($matchl['team_details'], true);

            @endphp
            @if($matchl->is_live=='completed')
            <h6>Completed</h6>
            @else
            <h6>Live</h6>
            @endif
            <div class="vs-match col-lg-8">
            @foreach ($teamDetails as $index => $team)
            <div class="teamsflex{{$index}} ">

              <div class="team-info slant-box-content">

                <h6>{{ $team['teamFullName'] }}</h6>
                @if (isset($team['teamScore'][0]))
                <p >Runs Scored: {{ $team['teamScore'][0]['runsScored'] }}/{{ $team['teamScore'][0]['wickets'] }}</p>
                <!-- Add more details for Team 1 score as needed -->
                @else
                <p>Yet To Bat</p>
                @endif

              </div>

            </div>
            @if ($index < count($teamDetails) - 1)
                <h3 class="vs-tem">VS</h3>
            @endif
            @endforeach
</div>
            @endforeach

            <h4 id="total-score-display">Total Score: 0</h4>
          </div>

        </li>
        <li><img id="addAvatar"></li>
      </ul>

    </nav>


    <div class="container">





      <div class="question content p-3 border-bottom" id="quiz score">
        <!--   <button class="btn btn-primary" id="next">Next</button>
   <button class="btn btn-info" id="prev">Prev</button -->
      <!-- <img class="gifclass" src="assets/img/wicket2.gif"> -->
      </div>

      <div class="timeline" id="timeline-container"></div>
      <div class="d-flex flex-row justify-content-evenly align-items-center">
        <input type="hidden" name="user_id" value="3">
        <input type="hidden" name="question_id" value="">
        <input type="hidden" name="category" value="{{$categoty}}">
        <!--  <button
                            class="button-85" type="button"><i
                                class="fa fa-angle-left mt-1 mr-1" id="prev"></i>&nbsp;previous</button> -->
        <button class="btn vs-btn" id="next">Next
          <i class="fa fa-angle-right ml-2"></i></button>
      
      </div>







    </div>

    <!--                       <div class="content question p-3 " id="quiz">

          <button class="btn btn-primary" id="next">Next</button>
          <button class="btn btn-info" id="prev">Prev</button>
          <button class="btn btn-default" id="start">Start Over</button> 


              </div> -->
  </div>

</body>
<script src="assets/js/vendor/jquery-3.6.0.min.js"></script>
<script src="assets/js/app.min.js"></script>
<script src="assets/js/layerslider.utils.js"></script>
<script src="assets/js/layerslider.transitions.js"></script>
<script src="assets/js/layerslider.kreaturamedia.jquery.js"></script>
<script src="assets/js/main.js"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
  integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>


<!-- Include DataTables CSS and JS -->
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.css">
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bodymovin/5.7.2/lottie.min.js"></script>

<!--  <script>
        window.addEventListener('orientationchange', function () {
            var landscapeMessage = document.getElementById('landscape-message');
            if (window.orientation === 90 || window.orientation === -90) {
                landscapeMessage.style.display = 'none';
            } else {
                landscapeMessage.style.display = 'block';
            }
        });
    </script> -->
    <script>
 $(document).ready(function() {
    // Function to fetch updated data from the server
    function fetchData() {
        $.ajax({
            url: '{{config("app.baseURL")}}/liveScore?match_id=' + "{{$match_id}}", // Replace with your Laravel route
            method: 'GET',
            dataType: 'json',
            success: function(data) {
                // Update the UI with the new data
                console.log(data);
                updateUI(data); // Call the updateUI function with the fetched data
            },
            error: function(xhr, status, error) {
                console.error('Error fetching data:', error);
            }
        });
    }

    // Function to update the UI with the fetched data
    function updateUI(data) {
    var teams = data;

    // Update team information
    var $teamsContainer = $('.vs-match');

    $.each(teams, function(i, team) {
        var $teamInfo = $teamsContainer.find('.team-info:eq(' + i + ')');

// Decoding JSON
var data1 = JSON.parse(team.team_details);

// Fetching the runsScored data
var runsScored = [];
var wickets = [];

for (var i = 0; i < data1.length; i++) {
    var team = data1[i];
    if (team.teamScore && team.teamScore.length > 0) {
        var teamScore = team.teamScore[0];
        runsScored.push(teamScore.runsScored);
        wickets.push(teamScore.wickets);
    }
}

// Logging the runsScored data
console.log(runsScored[1]);
console.log(wickets[1]);

if(runsScored[1]!=undefined){
$('.teamsflex1').find('p').html('Runs Scored: ' + runsScored[1] + '/' + wickets[1]);
}

        

    });

   
}


    // Fetch data every 5 seconds (adjust as needed)
    setInterval(fetchData, 5000);
});
</script>
<script>
  $(document).ready(function () {
    $('.score-slider').slick({
      slidesToShow: 1,
      slidesToScroll: 1,
      autoplay: true,
      autoplaySpeed: 2000, // Set the time interval for auto sliding
    });
  });
</script>
<script>
  $(document).ready(function () {
    const queryString = window.location.search;
    const urlParams = new URLSearchParams(queryString);
    const category = urlParams.get('category');

    var userAttempts = [];

    $.ajax({
      type: "POST",
      url: 'start',
      data: { category: category, _token: '{{ csrf_token() }}' },
      success: function (data) {
 

        var questions = data;

        var questionCounter = 0; 
        var selections = []; 
        var quiz = $('.content'); 
        var totalQuestions = questions.length;
        var questionsPerPart = 6;
        var currentPart = 1;
        displayNext();
  var questionCounter = 0; 

$('#next').on('click', function (e) {
  e.preventDefault();


  if (quiz.is(':animated')) {
    return false;
  }
  choose();


  if (isNaN(selections[questionCounter])) {
    $('#warning').text('Please make a selection!');
  } else {

    var questionId = questions[questionCounter].question_id;
    var categoryId = questions[questionCounter].category;
    var ansId = questions[questionCounter].correctAnswer;
    userAttempts[questionCounter] = {
      categoryId: categoryId,
      questionId: questionId,
      selectedValue: selections[questionCounter],
      correctAnswer: ansId,
      isCorrect: selections[questionCounter] === questions[questionCounter].correctAnswer
    };


    updateCounter();


    questionCounter++;
    $('#warning').text('');
  }
});
$(document).on('click', '#exit-game', function (e) {
  e.preventDefault();
  $('.question').empty();

  displayScore();
});


        $('#prev').on('click', function (e) {
          e.preventDefault();

          if (quiz.is(':animated')) {
            return false;
          }
          choose();
          questionCounter--;
          displayNext();
        });
        

     $(document).on('click', '#makeTrial', function (e) {
      $('#total-score-display').empty();
       totalScore = 0;
      $('#total-score-display').text('Total Score: ' + totalScore);
          e.preventDefault();

          if (quiz.is(':animated')) {
            return false;
          }
          questionCounter = 0;
          selections = [];
          userAttempts = [];
             currentPart = 0;
  resetTimeline();
          displayNext();
          $('#start').hide();
       
$('#exit-game').show();

          
        });

        function replaceWords(sentence, replacements, callback) {
          $.ajax({
            type: "GET",
            url: '{{config("app.baseURL")}}/getDynamicWords?match_id=' + "{{$match_id}}",
            success: function (data) {
              for (var key in replacements) {
                if (replacements.hasOwnProperty(key) && data[key]) {
                  var escapedKey = escapeRegExp(key);
                  sentence = sentence.replace(new RegExp(escapedKey, 'gi'), data[key]);
                }
              }

              callback(sentence);
            },
            error: function (error) {
              console.error("Error fetching dynamic words:", error);

              callback(sentence);
            }
          });
        }

        function escapeRegExp(string) {
          return string.replace(/[.*+?^${}()|[\]\\]/g, "\\$&");
        }

        function createQuestionElement(index) {
          var qElement = $('<div>', {
            class: 'fill-in-the-blanks coll-lg-12',
            id: 'question' + index,
          });

          $.ajax({
            type: "GET",
            url: '{{config("app.baseURL")}}/getDynamicWords?match_id=' + "{{$match_id}}",
            success: function (data) {
              var sortedReplacements = sortObjectByKey(data);

              replaceWords(questions[index].question, sortedReplacements, function (replacedQuestion) {
                var header = $('<h4 class="h4 col-lg-12 m-2">Q' + (index + 1) + ': ' + replacedQuestion +'</h4>');

                qElement.append(header);

                var radioButtons = createRadios(index,replacedQuestion);
                qElement.append(radioButtons);

                var warningText = $('<p id="warning">');
                qElement.append(warningText);
              });
            },
            error: function (error) {
              console.error("Error fetching dynamic words:", error);
            }
          });

          return qElement;
        }

        function sortObjectByKey(obj) {
          var sortedObj = {};
          Object.keys(obj).sort().forEach(function (key) {
            sortedObj[key] = obj[key];
          });
          return sortedObj;
        }

        function expractionString(array){
          var question = array; 

if (question.length === 2) {
    var fours = question[0];
    var sixes = question[1];

    var totalScore = (4 * fours) + (6 * sixes);

    return totalScore;
} else {
    console.log("Invalid array format. Please provide an array with two elements representing the number of fours and sixes.");
}
        }
function extractNumbersFromString(inputString) {
   var integerMatches = inputString.match(/\b\d+\b/g);

                if (integerMatches) {
                    var integers = $.map(integerMatches, function (match) {
                        return parseInt(match, 10);
                    });

                    return integers;
                }

                return [];
}
 function calculateSum(array) {
    var sum = 0;

    for (var i = 0; i < array.length; i++) {
      sum += array[i];
    }

    return sum;
  }
  function replaceAns(array, replacement) {

if(array.includes('ans')){

for (var i = 0; i < array.length; i++) {
  if(array[i] == replacement){

   array[i] = String(Number(array[i]) + 2);
  }
  if (array[i] === 'ans') {
    array[i] = replacement;
  }
}
}
return array;
}

  function multiplyArrayElements(arr) {
  console.log(arr);
      var result = 1;
      $.each(arr, function(index, element) {
        result *= element;
      });
      return result;
    }
function subtractArrayElements(arr) {
  arr.sort(function(a, b) {
    return b - a;
  });

  var result = arr[0];

  arr.slice(1).forEach(function(element) {
    result -= Math.abs(element);
  });

  return result;
}

 function calculateStrikeRate(arr) {
      var runs = arr[0];
        var balls = arr[1];

        var strikeRate = (runs / balls) * 100;
        return strikeRate.toFixed(2); // Round to 2 decimal places
    }

function calculateRunsNeeded(statsArray) {

    var Runs = statsArray[0]; // Total runs scored
    var Balls = statsArray[1]; // Total balls faced
     var remainBall= statsArray[2];
     var total_runNeeded=2*(Balls+remainBall);

var add_runNeed=total_runNeeded-Runs;
    
    return add_runNeed;
}


 function calculateSixPercentage(arr) {
  var totalRuns=arr[0]; 
  var sixesHit=arr[1];
        var runsFromSixes = sixesHit * 6;
        var percentage = (runsFromSixes / totalRuns) * 100;
        return percentage.toFixed(0).toString(); // Round to 2 decimal places
    }

 function calculateFourPercentage(arr) {
  var totalRuns=arr[0]; 
  var sixesHit=arr[1];
        var runsFromSixes = sixesHit * 4;
        var percentage = (runsFromSixes / totalRuns) * 100;
        return percentage.toFixed(0).toString(); // Round to 2 decimal places
    }
    function divideArrayElements(arr) {
  if (arr.length === 0) {
    console.error("Array is empty. Cannot perform division.");
    return undefined;
  }
  var result = arr[0]; 

  for (var i = 1; i < arr.length; i++) {
    if (arr[i] === 0) {
      console.error("Cannot divide by zero. Skipping element at index " + i);
      continue;
    }
    result /= arr[i]; // Divide each subsequent element in the array
  }

  var roundResult = result.toFixed(1).toString();
  return roundResult;
}

function calculateBallsNeeded(arr) {
        var currentRuns=arr[0];
        var currentBalls=arr[1];
        var targetRuns=arr[2];
        var currentStrikeRate = (currentRuns / currentBalls) * 100;
        // Calculate balls needed based on current strike rate
        var ballsNeeded = (targetRuns / (currentStrikeRate / 100)).toFixed(0).toString(); // Round to nearest integer
        return ballsNeeded;
    }


function strickRateCalculate(arr){

  var strikeRate=((arr[0]/arr[1])*100).toFixed(0).toString();

  return strikeRate;
}
function strickRateOvers(arr){
  var strikeOvers=((arr[0]/arr[1])*arr[2]).toFixed(0).toString();

  return strikeOvers;
}
  function calculateAverageScore(arr) {

        var totalScore = arr[0] + arr[1];
        var numberOfTeams = 2;
        var averageScore = totalScore / numberOfTeams;
        return averageScore.toFixed(2); // Round to 2 decimal places
    }
        function createRadios(index,replacedQuestion) {
          var radioList = $('<ul class="col-lg-6">');
          var item;
          var input = '';
          var questionChoices=questions[index].choices;
          var typeQ=questions[index].type;
        var inputString = replacedQuestion;
var questionInt = extractNumbersFromString(inputString); // Output: [25, 10]
if(typeQ==1){
var intFinal=calculateSum(questionInt);
}
if(typeQ==2){
var intFinal=subtractArrayElements(questionInt);
}
if(typeQ==3){
var intFinal=multiplyArrayElements(questionInt);
}
if(typeQ==4){
var intFinal=divideArrayElements(questionInt);
}
if(typeQ==5){
  var intFinal=expractionString(questionInt);
}
if(typeQ==6){
  var intFinal=calculateRunsNeeded(questionInt);
}
if(typeQ==7){
  var intFinal=calculateBallsNeeded(questionInt);
}
if(typeQ==8){
  var intFinal=calculateSixPercentage(questionInt);
}
if(typeQ==9){
  var intFinal=calculateAverageScore(questionInt);
}
if(typeQ==10){
  var intFinal=calculateFourPercentage(questionInt);
}
if(typeQ==11){
  var intFinal=strickRateCalculate(questionInt);
}
if(typeQ==12){
  var intFinal=strickRateOvers(questionInt);
}
var finalQuestion=replaceAns(questionChoices,intFinal);

            for (var i = 0; i < questions[index].choices.length; i++) {
            item = $('<li>', { class: 'radio-item button-33 ml-2 ' });
            input = '<input type="radio" name="answer" class="butom33" id=' + i + ' value=' + i + ' /><label for=' + i + ' >' + questions[index].choices[i] + '</label>';
            
            item.append(input);
            radioList.append(item);
          }
          return radioList;
        }

        var totalScore = 0;

        

        function choose() {
          var selectedValue = +$('input[name="answer"]:checked').val();

          if (isNaN(selectedValue)) {
            $('#warning').text('Please make a selection!');
            return;
          }
 

 
 
          selections[questionCounter] = selectedValue;
          userAttempts[questionCounter] = selectedValue; // Store user attempt

          var correctAnswer = questions[questionCounter].correctAnswer;
          if (selectedValue !== correctAnswer) {
  $('input[value=' + correctAnswer + ']').closest('li').css("background-color", "gray");
  }
           
          var isCorrect = selectedValue === correctAnswer;

          animateFeedback(isCorrect);
          calculateCurrentScore(isCorrect);
        }

function displayNext() {
  quiz.fadeOut(function () {
    $('#question').remove();
    $('.fill-in-the-blanks').remove();
    $('#warning').text('Please choose any one of the Option');

    if (questionCounter < questions.length) {
      var nextQuestion = createQuestionElement(questionCounter);

      var scoreDisplay = $('<p>', { class: 'score-display' });
      var isCurrentAnswerCorrect = selections[questionCounter] === questions[questionCounter].correctAnswer;

      if (isCurrentAnswerCorrect) {
        var currentScore = calculateCurrentScore(isCurrentAnswerCorrect);
        scoreDisplay.text('Score for Question ' + (questionCounter + 1) + ': ' + currentScore);
      }

    

      $('#total-score-display').text('Total Score: ' + totalScore);

      quiz.append(scoreDisplay);
      quiz.append(nextQuestion).fadeIn();

      if (!(isNaN(selections[questionCounter]))) {
        $('input[value=' + selections[questionCounter] + ']').prop('checked', true);
      }

      if (questionCounter === 1) {
        $('#prev').show();
      } else if (questionCounter === 0) {
        $('#prev').hide();
        $('#next').show();
      }

      updateProgressBar();
      updateTimeline();
    } else {
      displayScore();
    }
  });
}

        function calculateCurrentScore(isCorrect) {
          var currentScore = isCorrect ? 10 : 0;

          totalScore += currentScore;

          return currentScore;
        }
           function getParameterByName(name) {
                name = name.replace(/[\[\]]/g, "\\$&");
                var regex = new RegExp("[?&]" + name + "(=([^&#]*)|&|#|$)"),
                    results = regex.exec(window.location.href);
                if (!results) return null;
                if (!results[2]) return '';
                return decodeURIComponent(results[2].replace(/\+/g, " "));
            }
        function displayScore() {
          var scoreElem = $('<div>', { id: 'question', class: 'scoreboard-kids' });

          var numCorrect = 0;
          for (var i = 0; i < selections.length; i++) {
            if (selections[i] === questions[i].correctAnswer) {
              numCorrect++;
            }
          }

          var percentage = numCorrect / questions.length;
          var noQuestion = questions.length;
          const queryString = window.location.search;
          const urlParams = new URLSearchParams(queryString);
          const categoryId = urlParams.get('category')
          var teacher_id=getParameterByName('teacher_id');
          var std_id=getParameterByName('std_id');
       
          sendUserAttemptsToServer(userAttempts);
          var addScore = numCorrect * 10;
          var scoreboardHTML = '<div class="whole-score"> <div class="detail"><h3 class="score-message orange">You answered</h3>';

scoreboardHTML +='<h3 class="score-message green" >' + numCorrect + ' out of ' + questions.length + '</h3>'
scoreboardHTML +='<h3 class="score-message orange" >questions correctly.</h3></div>'

          if (percentage >= 0.9) {
            scoreboardHTML += '<div class="score-botom"><h6 class="pink">🚀 Incredible! Awesome job! 🚀</h6>';
          } else if (percentage >= 0.7) {
            scoreboardHTML += '<div class="score-botom"><h6 class="pink">🎉 Great job! You did well! 🎈</h6>';
          } else if (percentage >= 0.5) {
            scoreboardHTML += '<div class="score-botom"><h6 class="pink">🌟 Not bad! Keep it up! 🌈</h6>';
          } else {
            scoreboardHTML += '<div class="score-botom"><h6 class="pink">🌟 Better luck next time! 🌈</h6>';
          }

          scoreboardHTML += '<h1 class="correct">Score: ' + addScore + '</h1></div></div>';
          scoreboardHTML += '<button id="makeTrial" class="button1" >Button 1</button>';
          $('#total-score-display').empty();
$('#total-score-display').append("Total Score:"+addScore+"");
          scoreElem.html(scoreboardHTML);

          quiz.append(scoreElem).fadeIn();
          $('#next').hide();
          $('#prev').hide();
          $('#exit-game').hide();
          // $('#start').show();

          $(document).on('click', '#view-scores', function (event) {
            event.preventDefault();
            initializeDataTable(userAttempts);
          });
 $.ajax({
            type: "Post",
            url: '{{config("app.baseURL")}}/scoreBoard',
            data: { std_id: std_id, teacher_id: teacher_id,score: addScore, correct: numCorrect, noQuestion: noQuestion, _token: '{{ csrf_token() }}' },
            success: function (data) {

             
            }
          });
updateCounter();

        }
        function animateFeedback(isCorrect) {
    
          var feedbackElement = $('<div>', {
            id: 'question'
          });
                  var feedbackImage = $('<img>', {
  src: isCorrect ? 'assets/img/newsix.gif?' + Math.random() : 'assets/img/newout.gif?' + Math.random(),
  alt: isCorrect ? 'Correct!' : 'Incorrect!',
  class: 'umpire',
});

          feedbackElement.append(feedbackImage);
          quiz.append(feedbackElement);


      
          feedbackElement.fadeIn('slow', function () {
            setTimeout(function () {
              feedbackElement.fadeOut('slow', function () {
                feedbackElement.remove();
                displayNext(); // Trigger next question after animation completes
              });
            }, 1100); // Adjust the timeout duration as needed
          });

        }

        function sendUserAttemptsToServer(userAttempts) {
          var endpointUrl = '{{config("app.baseURL")}}/saveUserAttempts';

          $.ajax({
            type: "POST",
            url: endpointUrl,
            data: { userAttempts: JSON.stringify(userAttempts), _token: '{{ csrf_token() }}' },
            success: function (response) {
  
            },
            error: function (error) {
            
            }
          });
      

        }
      
        function initializeDataTable(data) {
          var numCorrect = 0;
          for (var i = 0; i < selections.length; i++) {
            if (selections[i] === questions[i].correctAnswer) {
              numCorrect++;
            }
          }

          var percentage = numCorrect / questions.length;
          var noQuestion = questions.length;
          const queryString = window.location.search;
          const urlParams = new URLSearchParams(queryString);
          const categoryId = urlParams.get('category')

          $.ajax({
            type: "Post",
            url: '{{config("app.baseURL")}}/score',
            data: { categoryId: categoryId, correct: numCorrect, noQuestion: noQuestion, _token: '{{ csrf_token() }}' },
            success: function (data) {

              var tableContainer = $('#question');

              var dataTable = $('<table>', { id: 'score-table', class: 'display', style: 'width:100%' });

              tableContainer.append(dataTable);

              dataTable.DataTable({
                data: data,
                columns: [
                  { title: 'Test', data: 'Attempt' },
                  { title: 'Correct Answers', data: 'Total_Score' },
                  { title: 'Total Questions', data: 'Question_Count' },
                ],
              });
            }
          });
        }
        function updateProgressBar() {
          var progress = (questionCounter / totalQuestions) * 100;

          $('#progress-bar').css('width', progress + '%');
        }

        function updateTimeline() {

          if (questionCounter % questionsPerPart === 0 && currentPart <= totalQuestions / questionsPerPart) {
            markPartAsCompleted(currentPart);
            currentPart++;
          }

        }

        function markPartAsCompleted(part) {
          var partId = 'part' + part;
          $('#' + partId).addClass('completed');
        }

function generateTimelineParts() {
  var timelineContainer = $('#timeline-container');

  for (var i = 1; i <= totalQuestions / questionsPerPart; i++) {
    var intervalText = '🥎 ' + i;
    var partId = 'part' + i;
 
    var partElement = $('<div>', {
      class: 'part',
      id: partId,
      text: intervalText
    });

    var counterElement = $('<span>', {
      class: 'counter',
      text: '-0'
    });

    partElement.append(counterElement);
    timelineContainer.append(partElement);
  }

}

function updateCounter() {
  var currentPartIndex = Math.floor(questionCounter / questionsPerPart) + 1;
  var currentPart = $('#part' + currentPartIndex);
  var counter = questionCounter % questionsPerPart + 1;
  currentPart.find('.counter').text(-counter);
  if (currentPartIndex > 1) {
    for (var i = 1; i < currentPartIndex; i++) {
      $('#part' + i).find('.counter').hide();
    }
  }
}


function resetTimeline() {
 
  $('.part').removeClass('completed');


  updateTimeline();
}

        $(document).ready(function () {
          generateTimelineParts();
        });


        $('#view-scores').on('click', function (event) {
          event.preventDefault();

          initializeDataTable(userAttempts);
        });
      }
    });

  });
</script>



<script>
  $('.fa-expand-alt').css('display','block')
  $('.fa-window-close').css('display','none')
  var elem = document.getElementById("myvideo");
  function openFullscreen() {
    if (elem.requestFullscreen) {
      elem.requestFullscreen();
    } else if (elem.webkitRequestFullscreen) { /* Safari */
      elem.webkitRequestFullscreen();
    } else if (elem.msRequestFullscreen) { /* IE11 */
      elem.msRequestFullscreen();
    }
     $('.fa-expand-alt').css('display','none')
  $('.fa-window-close').css('display','block')

  }

   function closeFullscreen() {
    if (document.exitFullscreen) {
      document.exitFullscreen();
    } else if (document.webkitExitFullscreen) { /* Safari */
      document.webkitExitFullscreen();
    } else if (document.msExitFullscreen) { /* IE11 */
      document.msExitFullscreen();
    }
    $('.fa-expand-alt').css('display','block')
  $('.fa-window-close').css('display','none')
  }
</script>

<script>
  var slider = new Swiper('.swiper-banner', {
    centeredSlides: true,

    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
  });

  let dropArea = document.getElementById('dropArea');
  function openDropdown() {

    dropArea.classList.toggle("activeDropArea");
  }
</script>

<script type="text/javascript">
  const queryString = window.location.search;
  const urlParams = new URLSearchParams(queryString);
  const avatar = urlParams.get('avatar')
  const imgAvatar = document.getElementById('addAvatar')
  imgAvatar.src = avatar;

</script>



