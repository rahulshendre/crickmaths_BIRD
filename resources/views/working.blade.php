<meta name="viewport" content="width=device-width, initial-scale=1.0">

<link rel="stylesheet" href="{{config('app.baseURL')}}/assets/css/swiper-bundle.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
<link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
    <link href="https://fonts.googleapis.com/css2?family=Fredoka:wght@400;500;600;700&family=Jost:wght@400;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/app.min.css">
    <link rel="stylesheet" href="assets/css/fontawesome.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<style>
  
   .menu-style2>ul>.score{
        width: 80%;
   
    background-color: #50ae3d;
}
    .score-bar {
  background-color: #50ae3e;
  color: #fff;
  padding: 10px;
  text-align: center;

  top: 0;
  left: 0;
  width: 100%;
  box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
}

.score-info {
  display: flex;
  align-items: center;
  justify-content: center;
}

.team-name {
  font-weight: bold;
}

.score {
  margin: 0 10px;
  font-size: 18px;
}

.separator {
  font-size: 18px;
}

.time {
  margin-left: auto;
 
}

    #button2,#button3{

color: transparent;
    }
    .detail{
            position: relative;
    top: 15%;
    }
    .quiz-button{
        color: transparent;
    }
    .scoreButtons{
    border-radius: 31px;
    position: relative;
    top: 29%;
    display: flex;
    justify-content: space-evenly;
    height: 20%;

    }
    .scoreButtons #button1{
      position: relative;
    right: 31%;
    background: transparent;
    width: 10%;
    border: transparent;
    color: transparent;
    }
     .scoreButtons #button3{
position: relative;
    right: 7%;
    }
    .correct{
  color: black;
    position: relative;
    top: 13%;
    }
    .yellow{
        color: yellow;
    }
    .pink{
        color: pink;
    }
    .testResult{
        
    }
    .dataTables_wrapper .dataTables_filter input {
height: 27px;
    }
    .dataTables_wrapper .dataTables_length select {
        height: 27px;
    }
.umpire{
margin-left: 50%;
}
#question{
      display: flex;
    flex-direction: column;
    justify-content: space-between;
    align-items: center;
    height: 100%;
}
    .scoreboard-kids{
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
    /* max-width: 400px; */
    margin: 0 auto;
    margin-top: 10%;

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
.fa-gear{
        font-size: 48px;
}

    body {
              background-image: url('assets/images/bg.jpg');

/*        background: purple;*/
        background-repeat: no-repeat;
        background-size: 100% 100%;
        height: 100%;
        width: 100%;
        padding-right: 0px;
        padding-left: 0px;
    
    }

body img {
        height: 100%;
        
    }
.border-bottom {
     border-bottom: 0px solid #dee2e6!important; 
}
    .header-layout2 {
        display: none;
    }
.container {
    height: 70%;
    width: 65%;
}
.question{
    height: 100%;
      background-image: url('assets/images/bg.jpg');
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
  background: linear-gradient(
    45deg,
    #ff0000,
    #ff7300,
    #fffb00,
    #48ff00,
    #00ffd5,
    #002bff,
    #7a00ff,
    #ff00c8,
    #ff0000
  );
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
    background-image: url(assets/images/pitch4.jpg);
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
    .question-title h5{
        border: 1px solid;
        padding: 5%;
    }
      .options{
          display: flex;
    height: 60%;
    justify-items: start;
    align-content: space-evenly;
    flex-direction: column;
    justify-content: space-around;
}
   
.title{
  color: #ffff;

}
.animate-charcter
{
   text-transform: uppercase;
  background-image: linear-gradient(
    -225deg,
    #231557 0%,
    #44107a 29%,
    #ff1361 67%,
    #fff800 100%
  );
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
.mcq{

    background: transparent;
}

  .mcq-option {
      opacity: 0; /* Initial opacity set to 0 */
      animation: fadeIn ease-in-out 0.5s forwards; /* Animation definition */
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
    .radio span{
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

.activeDropArea ul li:nth-child(1),.activeDropArea ul li:nth-child(2),.activeDropArea ul li:nth-child(3),.activeDropArea ul li:nth-child(4),.activeDropArea ul li:nth-child(5) {
    margin-top: 0;
}
.main-menu ul li.menu-item-has-children>a:after {
    content: "";
}
.main-menu ul.sub-menu, .main-menu ul.mega-menu {
    background-color: transparent;  
    color: white;
        border-bottom: 0px ;
}
.main-menu ul.sub-menu:before {
  
    width: 0px;
}
.main-menu ul.sub-menu li a:before {
    content: none;
}
.border {
    border: 0px solid #dee2e6!important;
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
  background: #111;
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
  background: linear-gradient(
    45deg,
    #ff0000,
    #ff7300,
    #fffb00,
    #48ff00,
    #00ffd5,
    #002bff,
    #7a00ff,
    #ff00c8,
    #ff0000
  );
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
  background: #222;
  left: 0;
  top: 0;
  border-radius: 10px;
}



/* CSS */
.button-33 {
  background-color: #f3ee31;
  border-radius: 100px;
  box-shadow: rgba(44, 187, 99, .2) 0 -25px 18px -14px inset,rgba(44, 187, 99, .15) 0 1px 2px,rgba(44, 187, 99, .15) 0 2px 4px,rgba(44, 187, 99, .15) 0 4px 8px,rgba(44, 187, 99, .15) 0 8px 16px,rgba(44, 187, 99, .15) 0 16px 32px;
  color: green;
  cursor: pointer;
  display: inline-block;
  font-family: CerebriSans-Regular,-apple-system,system-ui,Roboto,sans-serif;
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
.fas{
        font-size: 40px;
}
.button-33:hover {
  box-shadow: rgba(44,187,99,.35) 0 -25px 18px -14px inset,rgba(44,187,99,.25) 0 1px 2px,rgba(44,187,99,.25) 0 2px 4px,rgba(44,187,99,.25) 0 4px 8px,rgba(44,187,99,.25) 0 8px 16px,rgba(44,187,99,.25) 0 16px 32px;
  transform: scale(1.05) rotate(-1deg);
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
.radio-item + .radio-item {
    margin-top: 15px;
}
.radio-item label {
    display: block;
    padding: 20px 60px;
   
    border-radius: 8px;
    cursor: pointer;
    font-size: 18px;
    font-weight: 400;
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
       z-index: 9;
    bottom: 23px;
    transform: scale(5);
    opacity: 0;
    visibility: hidden;
    transition: 0.4s ease-in-out 0s;
}
.radio-item [type="radio"]:checked ~ label {
    border-color: #524eee;
}
.radio-item [type="radio"]:checked ~ label::before {
    opacity: 1;
    visibility: visible;
    transform: scale(1);
}

.d-flex {
    display: flex!important;
    justify-content: center;
}
.radio-list{
position: relative;
top: 18%;
}

.item2 { grid-area: menu;margin-top:35%;font-size:50px; color: #f3ee31;}
.item3 {     grid-area: main;
    color: #f3ee31;
    display: flex;
    gap: 7px;
 }

.item5 { grid-area: footer; color: #f3ee31;}

.grid-container {
  display: grid;
  grid-template-areas:
    'menu main'
    'menu footer';
  gap: 5px;
  position: relative;
  bottom: 10px;
}

.grid-container > div {

  text-align: center;
 
}
#addAvatar{
width: 55px;
    border-radius: 333px;
    position: relative;
    right: 25%;
}


#quiz {
    display:none;
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

        font-size: 30px;
    outline-offset: -5px;
    transition: all ease .3s;
  margin-right:5%c ;
}

button {
    position: relative;
    float:right;
    margin-left: 5px;
    margin-top: 15px;
}

#prev {
    display:none;
}

#start {
    display: none;
    width: 162px;
}

#warning {
    color: #800000;
    font-weight: bold;
    margin-top: 25px;
}
ul {
    width: 40%;
    margin: auto;
    padding-top: 4%;
}
input[type=radio]:checked~label::before {
    outline-color: transparent;
    border-color: rgba(0,0,0,0);
}

.question #score {
    margin: auto;
    margin-top: 25%;
    margin-left: 18%;
}
.main-menu ul{
    width: 100%;
}
.button-85{
    margin: auto;
}
#question p {
  font-size: 16px;
}

.radio-item {
  margin-bottom: 10px;
}
#muteBtn{
        position: relative;
    right: 53%;
}
.fa-angle-right{
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
.match-item{
    display: flex;
    text-align: center;
    align-items: center;
    justify-content: space-around;
}
.match-item h6{
    color: white;
}
.swiper {
  width: 600px;
  height: 300px;
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
  justify-content: space-between;
  margin-top: 20px;
}

.part {
  width: 80px; /* Adjust based on your design */
  height: 40px; /* Adjust based on your design */
  background-color: #3498db;
  color: #fff;
  display: flex;
  align-items: center;
  justify-content: center;
  border-radius: 5px;
  cursor: pointer;
}

.part:not(:last-child) {
  margin-right: 10px;
}

.part.completed {
  content: "🏏";  
  background-color: #2ecc71; /* Change color for completed parts */
}

.match-item h6 img{
    height:56px;
  }
  #question img{
  position: relative;
bottom: 90%;
right:25%;
  }
  .team-info p{
font-size: 18px;
line-height: 0;
  }
@media screen and (max-width: 900px){


    .umpire{
margin-left: 10%;
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
      .h4, h4 {
    font-size: 16px;
}
.radio-item label {
    display: block;
    padding: 7px 60px;
    font-size: 14px;
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
.fas{
        font-size: 30px;
}
#muteBtn{
        position: relative;
    right: 53%;
}
.radio-item {
    margin-bottom: 0;
}
.fa-angle-right{
        font-size: 10px;
}
/*+++++++++++++++*/
.testResult {
    font-size: 16px;
}
.yellow{
    font-size: 11px;
}
.pink{
        font-size: 11px;
}
.detail {
    position: relative;
    top: 9%;
}
.correct {
    color: black;
    position: relative;
    top: 13%;
    font-size: 24px;
}
#question {
    margin-bottom: 3%;
}
.match-item h6 img{
    height: 35px;
}
.h6, h6 {
    font-size: 9px;
}

  
}







/*@media (max-width: 430px){
 .button-85 {
    padding: 0em 2em;
    font-size: 10px;
}
      .h4, h4 {
    font-size: 16px;
}
.radio-item label {
    display: block;
    padding: 7px 60px;
    font-size: 14px;
    min-width: 150px;
}

.fa-angle-right{
        font-size: 10px;
}
.fas{
        font-size: 30px;
}

.img{
        width: 5%;
    }
}*/
</style>
<!-- <div class="scoreboard-container">
        <h1>Game Over!</h1>
        <div class="scoreboard">
            <div class="team">
                <h2>Team A</h2>
                <div class="score" id="teamAScore">100</div>
            </div>
            <div class="separator">-</div>
            <div class="team">
                <h2>Team B</h2>
                <div class="score" id="teamBScore">120</div>
            </div>
        </div>
        <p class="result">Team B wins by 20 runs</p>
    </div> -->


  



<main>
  
<!-- <audio id="backgroundAudio" controls autoplay loop hidden>
      <source src="assets/images/bgmusic.mp3" type="audio/mp3">
     
    </audio> -->
<div id="myvideo">
   
  <nav class="main-menu menu-style2">
                            <ul style="display: flex;
    align-items: center;
    justify-content: space-between;">
<li class="menu-item-has-children"><a><i class="fa fa-gear" style="color:#f3ee31"></i></a>
                                    <ul class="sub-menu" style="display: flex;flex-direction: column;gap: 7px;">


                                        <li><button id="muteBtn" class="btn btn-primary"><i class="fa fa-volume"></i></button>
    <button id="unmuteBtn" class="btn btn-primary"><i class="fas fa-volume-mute" style="color: white;"></i></button></li>



                                        <li><a  onclick="openFullscreen()"><i class="fas fa-expand-alt" style="color: white;"></i></a></li>
                                        <li> <a type="button" href="{{config('app.baseURL')}}"><i class="fa fa-power-off" style="color: white;" aria-hidden="true"></i></a></li>
                                    </ul>
                                </li>
                                <li class="score">

                                    <div class="match-item">

                                        @foreach($matchLive as $matchl)
                                        @php
            $teamDetails = json_decode($matchl['team_details'], true);
            
        @endphp
              <h6>{{ $matchl->is_live }}</h6>
              @foreach ($teamDetails as $team)
    <div class="teamsflex">
        <h6>{{ $team['teamFullName'] }}</h6>

        <div class="team-info">
            @if (isset($team['teamScore'][0]))
                <p>Team Short Name: {{ $team['teamScore'][0]['battingTeamShortName'] }}</p>
                <p>Runs Scored: {{ $team['teamScore'][0]['runsScored'] }}</p>
                <p>Wickets: {{ $team['teamScore'][0]['wickets'] }}</p>
                <!-- Add more details for Team 1 score as needed -->
            @else
                <p>Yet To Bat</p>
            @endif
        </div>
    </div>
@endforeach
              @endforeach

            </div>
                                     
</li>
                              <li><img id="addAvatar"></li>
                                    </ul>
                                
                          
                        </nav>

<div class="container col-lg-12" style="display: flex; width:100%">
                       

<div>
                    <div class="question content p-3 border-bottom col-md-12" id="quiz score">
                       <!--   <button class="btn btn-primary" id="next">Next</button>
  <button class="btn btn-info" id="prev">Prev</button -->

                    </div>
                    <div class="timeline" id="timeline-container"></div>
                                <div class="d-flex flex-row justify-content-between align-items-center p-3 ">
                                    <input type="hidden" name="user_id" value="3">
                            <input type="hidden" name="question_id" value="">
                            <input type="hidden" name="category" value="{{$categoty}}">
                           <!--  <button
                            class="button-85" type="button"><i
                                class="fa fa-angle-left mt-1 mr-1" id="prev"></i>&nbsp;previous</button> -->
                             <button
                            class="button-85" id="next">Next
                            <i class="fa fa-angle-right ml-2" ></i></button>
<button  class="button-85 btn" id="start">Start Over</button> 
                        </div>
                    </div>
     

    
    </div>












  <!--                       <div class="content question p-3 " id="quiz">

  <button class="btn btn-primary" id="next">Next</button>
  <button class="btn btn-info" id="prev">Prev</button>
  <button class="btn btn-default" id="start">Start Over</button> 


</div> -->
</div>

</main>


   <script src="assets/js/vendor/jquery-3.6.0.min.js"></script>
    <script src="assets/js/app.min.js"></script>
    <script src="assets/js/layerslider.utils.js"></script>
    <script src="assets/js/layerslider.transitions.js"></script>
    <script src="assets/js/layerslider.kreaturamedia.jquery.js"></script>
    <script src="assets/js/main.js"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>


<!-- Include DataTables CSS and JS -->
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.css">
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
  

<script>
    $(document).ready(function(){
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

  // Array to store user attempts
  var userAttempts = [];
  
  $.ajax({
    type: "POST",
    url: 'start',
    data: { category: category, _token: '{{ csrf_token() }}' },
    success: function (data) {
      // console.log(data);

      var questions = data;

      var questionCounter = 0; // Tracks question number
      var selections = []; // Array containing user choices
      var quiz = $('.content'); // Quiz div object
      var totalQuestions = questions.length;
var questionsPerPart = 4  ;
var currentPart = 1;

      // Display initial question
      displayNext();
   // Creates and returns the div that contains the questions and 
      // the answer selections


      // Function to replace words in a sentence using dynamic content from the backend
function replaceWords(sentence, replacements, callback) {
  // Make an AJAX request to fetch dynamic words from the backend
  $.ajax({
    type: "GET",
    url: '{{config("app.baseURL")}}/getDynamicWords',
    success: function (data) {
      // Replace placeholders in the sentence with dynamic content
      for (var key in replacements) {
        if (replacements.hasOwnProperty(key) && data[key]) {
          var escapedKey = escapeRegExp(key);
          sentence = sentence.replace(new RegExp(escapedKey, 'gi'), data[key]);
        }

        console.log(escapedKey);
      }

       
      // Call the callback function with the replaced sentence
      callback(sentence);
    },
    error: function (error) {
      console.error("Error fetching dynamic words:", error);
      // Call the callback function with the original sentence on error
      callback(sentence);
    }
  });
}

// Function to escape special characters in a string
function escapeRegExp(string) {
  return string.replace(/[.*+?^${}()|[\]\\]/g, "\\$&");
}

// Function to create a fill-in-the-blanks question element
function createQuestionElement (index) {
  var qElement = $('<div>', {
    class: 'fill-in-the-blanks',
    id: 'question' + index,
  });

  var replacements = {
    'blanks1': 'replacement1',
    'blanks2': 'replacement2',
    // Add more placeholders and replacements as needed
  };

  // Replace dynamic words in the question using replaceWords
  replaceWords(questions[index].question, replacements, function (replacedQuestion) {
    var header = $('<h4 class="h4">Q' + (index + 1) + ':' + replacedQuestion + '</h4>');
    qElement.append(header);

    var warningText = $('<p id="warning">');
    qElement.append(warningText);

    // Append the question element to your quiz container
    $('.content').append(qElement);
  });
}

// Example usage: Loop through your questions and create fill-in-the-blanks elements
// for (var i = 0; i < questions.length; i++) {
//   createQuestionElement (i);
// }


      

      // Creates a list of the answer choices as radio inputs
      function createRadios(index) {
        var radioList = $('<ul>');
        var item;
        var input = '';
        for (var i = 0; i < questions[index].choices.length; i++) {
          item = $('<li>', { class: 'radio-item button-33 ml-2' });
          input = '<input type="radio" name="answer" class="butom33" id=' + i + ' value=' + i + ' />';
          input += '<label for=' + i + ' >' + questions[index].choices[i] + '</label>';
          item.append(input);
          radioList.append(item);
        }
        return radioList;
      }

      // Reads the user selection and pushes the value to an array
     function choose() {
  var selectedValue = +$('input[name="answer"]:checked').val();

  if (isNaN(selectedValue)) {
    // Display error message if no selection is made
    $('#warning').text('Please make a selection!');
    return;
  }

  selections[questionCounter] = selectedValue;
  userAttempts[questionCounter] = selectedValue; // Store user attempt

  var correctAnswer = questions[questionCounter].correctAnswer;
  var isCorrect = selectedValue === correctAnswer;

  animateFeedback(isCorrect);
}


      // Displays next requested element
      function displayNext() {
        quiz.fadeOut(function () {
          $('#question').remove();
   $('#warning').text('Please choose any one of the Opction'); // Clear the warning message
          if (questionCounter < questions.length) {
            var nextQuestion = createQuestionElement(questionCounter);

            quiz.append(nextQuestion).fadeIn();

            if (!(isNaN(selections[questionCounter]))) {
              $('input[value=' + selections[questionCounter] + ']').prop('checked', true);
            }

            // Controls display of 'prev' button
            if (questionCounter === 1) {
              $('#prev').show();
            } else if (questionCounter === 0) {
              $('#prev').hide();
              $('#next').show();
            }
            updateProgressBar();
    updateTimeline();
          } else {
            // If there are no more questions, display the score
            displayScore();
          }
        });
      }

      // Displays the final score
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

  sendUserAttemptsToServer(userAttempts);
 var addScore=numCorrect*10;
  var scoreboardHTML = '<h2 class="testResult">🏆 Test Results 🏅</h2>';
  scoreboardHTML += '<div class="detail"><h6 class="score-message yellow">You answered ' + numCorrect + ' out of ' + questions.length + ' questions correctly.</h6>';

  if (percentage >= 0.9) {
    scoreboardHTML += '<h6 class="score-message pink">🚀 Incredible! Awesome job! 🚀</h6></div>';
  } else if (percentage >= 0.7) {
    scoreboardHTML += '<h6 class="score-message pink">🎉 Great job! You did well! 🎈</h6></div>';
  } else if (percentage >= 0.5) {
    scoreboardHTML += '<h6 class="score-message pink">🌟 Not bad! Keep it up! 🌈</h6></div>';
  } else {
    scoreboardHTML += '<h6 class="score-message pink">🌟 Better luck next time! 🌈</h6></div>';
  }

  scoreboardHTML += '<h1 class="correct">'+addScore+'</h1>';
 scoreboardHTML += '<div class="scoreButtons"><button id="button1" class="quiz-button button1" >Button 1</button><a id="button2" class="quiz-button">button 2</button><a  id="button3" class="quiz-button">Button 3</a></div>';

  scoreElem.html(scoreboardHTML);

  quiz.append(scoreElem).fadeIn();
  $('#next').hide();
  $('#prev').hide();
  // $('#start').show();

   $(document).on('click', '#view-scores', function (event) {

    event.preventDefault();
    initializeDataTable(userAttempts);
  });
}
      // Helper function to animate feedback
      function animateFeedback(isCorrect) {
        $('#question').empty()
        var feedbackElement = $('<div>', {
          id: 'question'
        });

        var feedbackImage = $('<img>', {
          src: isCorrect ? 'assets/images/six.webp' : 'assets/images/out.webp',
          alt: isCorrect ? 'Correct!' : 'Incorrect!',
          class:'umpire'
        });

        feedbackElement.append(feedbackImage);
        quiz.append(feedbackElement);


// $('#questions').append('<table id="score-table" class="display" style="width:100%"></table>')
        // Animation
        feedbackElement.fadeIn('slow', function () {
          setTimeout(function () {
            feedbackElement.fadeOut('slow', function () {
              feedbackElement.remove();
             displayNext(); // Trigger next question after animation completes
            });
          }, 1500); // Adjust the timeout duration as needed
        });

      }

      function sendUserAttemptsToServer(userAttempts) {
  // You need to replace 'your-server-endpoint' with the actual endpoint URL on your server
  var endpointUrl = '{{config("app.baseURL")}}/saveUserAttempts';

  $.ajax({
    type: "POST",
    url: endpointUrl,
    data: { userAttempts: JSON.stringify(userAttempts), _token: '{{ csrf_token() }}' },
    success: function (response) {
      // console.log("User attempts sent successfully:", response);
      
    },
    error: function (error) {
      // console.error("Error sending user attempts:", error);
      // You can handle errors here
    }
  });
  // get request for report
  
}
// Function to initialize DataTable
function initializeDataTable(data) {
    // Assuming you have a container with the ID 'score-table-container' to append the DataTable
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
          data: {categoryId: categoryId, correct: numCorrect, noQuestion: noQuestion, _token: '{{ csrf_token() }}' },
          success: function (data) {
           
             var tableContainer = $('#question');
    
    // Create the DataTable
    var dataTable = $('<table>', { id: 'score-table', class: 'display', style: 'width:100%' });

    // Append the DataTable to the container
    tableContainer.append(dataTable);

    // Initialize DataTable
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
// Add a new function to update the progress bar
function updateProgressBar() {
  var progress = (questionCounter / totalQuestions) * 100;

  // Update your progress bar element (adjust as needed)
  $('#progress-bar').css('width', progress + '%');
}

// Add a new function to update the timeline
function updateTimeline() {
  // Check if the current part is complete and update the timeline
  if (questionCounter % questionsPerPart === 0 && currentPart <= totalQuestions / questionsPerPart) {
    markPartAsCompleted(currentPart);
    currentPart++;
  }
}

// Add a new function to mark a part as completed
function markPartAsCompleted(part) {
  var partId = 'part' + part;
  $('#' + partId).addClass('completed');
}

// Dynamically generate timeline parts based on questions length
function generateTimelineParts() {
  var timelineContainer = $('#timeline-container');

  for (var i = 1; i <= totalQuestions / questionsPerPart; i++) {
    var partId = 'part' + i;
    var partElement = $('<div>', {
      class: 'part',
      id: partId,
      text: 'Over🥎 ' + i
    });
  
    timelineContainer.append(partElement);
  }
}



  generateTimelineParts();


$('#view-scores').on('click', function (event) {
  event.preventDefault();

  // Call the initializeSimpleTable function to show detailed scores
  initializeDataTable(userAttempts);
});
    }
  });

});
</script>
<script>
// Function to check if the device is a mobile or tablet
        function isMobileOrTablet() {
            return (/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent));
        }

        // Function to rotate the screen to landscape mode
        function rotateToLandscape() {
            if (isMobileOrTablet() && window.innerWidth < window.innerHeight) {
                // Rotate to landscape mode
                screen.orientation.lock('landscape');
            }
        }

        // Event listener to rotate the screen when the page loads
        window.addEventListener('load', rotateToLandscape);
    </script>

 <script>
     $('#unmuteBtn').css('display','none')
     document.getElementById('backgroundAudio').play();
    var audio = document.getElementById('backgroundAudio');
    var muteBtn = document.getElementById('muteBtn');
    var unmuteBtn = document.getElementById('unmuteBtn');

    muteBtn.addEventListener('click', function() {
      audio.muted = true;
      $('#muteBtn').css('display','none')
       $('#unmuteBtn').css('display','block')
    });

    unmuteBtn.addEventListener('click', function() {
      audio.muted = false;
      $('#unmuteBtn').css('display','none')
       $('#muteBtn').css('display','block')
    });

    // Auto-play audio on page load
    audio.play();
  </script>
<script>
var elem = document.getElementById("myvideo");
function openFullscreen() {
  if (elem.requestFullscreen) {
    elem.requestFullscreen();
  } else if (elem.webkitRequestFullscreen) { /* Safari */
    elem.webkitRequestFullscreen();
  } else if (elem.msRequestFullscreen) { /* IE11 */
    elem.msRequestFullscreen();
  }
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
         const imgAvatar=document.getElementById('addAvatar')
         imgAvatar.src=avatar;

     </script>

     