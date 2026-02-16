<link rel="stylesheet" href="<?php echo e(config('app.baseURL')); ?>/assets/css/app.min.css">
<link rel="stylesheet" href="<?php echo e(config('app.baseURL')); ?>/assets/css/fontawesome.min.css">
<link rel="stylesheet" href="<?php echo e(config('app.baseURL')); ?>/assets/css/style.css">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="https://fonts.googleapis.com/css2?family=Bangers&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Baloo+Da+2:wght@400..800&display=swap" rel="stylesheet">
<style>
*{
    font-family: "Baloo da 2" !important;
}

h5 {
    cursor: not-allowed!important;
}

h5:active {
    cursor: pointer!important; 
}


.item{
        width: 35%;
        border-radius: 35px;

}

.grid {
  display: flex;
  gap: 10px;
  margin-bottom: 20px;
}

.level-1 {
  grid-template-columns: repeat(1, 1fr);
}

.level-2 {
  grid-template-columns: repeat(2, 1fr);
}

.level-3 {
  grid-template-columns: repeat(3, 1fr);
}

.level-4 {
  grid-template-columns: repeat(4, 1fr);
}

.level-5 {
  grid-template-columns: repeat(5, 1fr);
}

.level-6 {
  grid-template-columns: repeat(6, 1fr);
}

.item {
  background-color: whitesmoke;
  padding: 20px;
  text-align: center;
  border: 1px solid #ccc;
  cursor: pointer; /* Cursor changes to pointer on hover */
  transition: background-color 0.3s ease; /* Smooth transition for background */
}

.item.selected {
  background-color: #4CAF50; /* Change color to indicate selection */
  color: white; /* Change text color */
}




.carousel {
      width: 400px;
      text-align: center;
      position: relative;
      background-color: #ffffff;
      border-radius: 8px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    .carousel-content {
      display: flex;
      overflow: hidden;
      width: 100%;
    }

    .slide {
      min-width: 100%;
      transition: transform 0.5s ease-in-out;
      padding: 20px;
      font-size: 24px;
      background-color: #eee;
      border-radius: 8px;
    }

    .controls {
      display: flex;
      justify-content: space-between;
      position: absolute;
      top: 50%;
      width: 100%;
      transform: translateY(-50%);
    }

    .prev, .next {
      background-color: #333;
      color: white;
      padding: 10px;
      border: none;
      cursor: pointer;
    }

    .prev:hover, .next:hover {
      background-color: #555;
    }





.switchbtn{
    padding-top: 2%;
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
        width: 18%;
}

.team-info p{
        font-size: large;

}
  
  .teamsflex0,.teamsflex1 {
box-shadow: rgba(50, 50, 93, 0.25) 0px 30px 60px -12px inset, rgba(0, 0, 0, 0.3) 0px 18px 36px -18px inset;

        width:100%;
        height:100%;
        border-color: red;
        border-style:solid;
   
  
        background-color: #ffff;
        color: red;
        border-radius: 6px;
        
}


.teamsflex0{
  clip-path: polygon(0 0, 100% 0%, 100% 100%, 32px 100%);
  box-sizing: border-box;
  position: relative;
left: 5%;
}
.teamsflex1{
       clip-path: polygon(0 0, 100% 0%, calc(100% - 32px) 100%, 0% 100%);
  position: relative;
   
right: 5%;
}
    #divCircle{
        cursor: pointer;
    }
label{
    background-color: #00000054;
}
label h5{
cursor: pointer;
color: #FFFFFF;    
text-align: center;
position: relative;
    
    left: 4%;
    }
    .contentToShow {
            display: none;
        }

.vs-btn {
    font-size: 20px;
    background-color: #b70303;
    color: var(--white-color);
    cursor: pointer;
}
 input {
    height: 18px;
      
  }
 .match-item {
 text-align: center;
    display: flex;
    justify-content: center;
    flex-direction: row;
    align-items: center;
/*    gap: 3%;
*/    cursor: pointer;
            padding: 10px;

}
.slider-container {
  position: relative;
  width: 80%;
  margin: auto;
  overflow: hidden;
}

.slider {
  display: flex;
  transition: transform 0.5s ease-in-out;
}

.slide {
  width: 100%;
  flex: 0 0 auto;
  box-sizing: border-box;
  padding: 20px;
  text-align: center;

}

button {
  position: absolute;
  top: 50%;
  transform: translateY(-50%);
  font-size: 18px;
  padding: 10px;
  cursor: pointer;
  background-color: green;
}

.btn-left {
  left: 10px;
}

.btn-right {
  right: 10px;
}
/* slider*/

body {
        background-image: url('assets/images/bg.jpg');
        background-repeat: no-repeat;
        background-size: 100% 100%;
     
    }


.animate-charcter
{
   text-transform: uppercase;
  background-image: linear-gradient(
    -225deg,
    #ffff 0%,
    #ffff 29%,
    #ffff 67%,
    #ffff 100%
  );
  background-size: auto auto;
  background-clip: border-box;
  background-size: 200% auto;
  color: #fff;
  background-clip: text;
  text-fill-color: transparent;
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
  animation: textclip 2s linear infinite;
  display: inline-block;
   
}
.match-item p{
  color: black;
}
 .teamName{
    font-family: Bangers, system-ui !important;
    font-size:30px;
        font-weight: 400;
            padding-top: 5%;

   }  
   .pickAvatar{
    font-size: 20px;
   }
@keyframes  textclip {
  to {
    background-position: 200% center;
  }
}
.blink_me {
  animation: blinker 1s linear infinite;
  position: relative;

}

@keyframes  blinker {
  50% {
    opacity: 0;
  }
}
#left-image{
  position: relative;
    top: 35%;
    display: flex;
    justify-content: space-between;
}
.slider__area{
    position: relative;
    bottom: 50%;
}
/*================*/
.body {
  width:200px;
  font-family:sans-serif;
  margin:auto;
  text-align:center;
  height:200px;
  position: relative;
 
}
        #divCircle {
        width: 195px;
        height: 195px;
     border-radius:200px;
        position: relative;
     overflow:hidden;
     top: 20px;
    left: 20px;
      opacity:0;
      margin: -60px;
      -webkit-transition:opacity 0s 0s;
    }
        
        #divCircle img{
            position: absolute;
            width: 50px;
            height: 50px;
      background:orange;
      border-radius:60px;
        border:2px #000 solid;
      -webkit-transition:all 0.4s;
      object-fit: scale-down;
        }

#divCircle img:hover {
  border:2px #333 solid;
            width: 55px;
            height: 55px;
}
        
        #middleBubble {
          text-align:center;
          vertical-align:top;
          color: #252525; /*#6d6e71*/
          height:60px;      
          width: 60px;  
          position: absolute;
          text-align:center;
        }
        
#middleBubble img {
  top:0px !important;
  left:0px !important;
}
    
.mainImg {
    width: 120px;

  position:absolute;
  margin: -60px;
}

.mainImg img {

    border-width:0px;
  border-style:solid;
  border-color:rgba(0,0,0,0);
    border-radius:600px;
  overflow:hidden;
  -webkit-transition:all 0.5s;
    margin:60px 0 0 58px;
}

.avatarList {
  margin:0px -60px;
  display:inline-block;
/*  border:1px black solid; */
  width:120px;
  height:120px;
  background:transparent;
  border-radius:60px;
}

.avatarList.expand .mainImg img {
 
      border-width:60px;
     margin:0;
}

#divCircle.expand {
  display:block;
  opacity:1;
  -webkit-transition:opacity 0.5s 0.4s;
}
a{
    cursor: pointer;
}
:root {
    --main-container: 61%;
  }
  .slick-arrow {
    display: inline-block;
    border: none;
    padding: 0;

    top: 50%;
    z-index: 2;
    left: var(--pos-x, -150px);
    width: var(--icon-size, 60px);
    height: var(--icon-size, 60px);
    font-size: var(--icon-font-size, 20px);
    margin-top: calc(var(--icon-size, 60px)/-2);
    background-color: white;
    color: green;
    border-radius: 50%;
    transition: all ease .6s;
}
#matches-slider{
    height: fit-content;
}
.slider {
  width: 80%; /* Adjust the width as needed */
  margin: auto;
}
.container{
    margin-top: 3%;
}
.liveOption{
    display: flex;
    flex-direction: column; 
    padding-left: 4%;

}
.teamName img{
    height: 26px;
}
@media    screen and (max-width: 1400px) {
.h6, h6 {
    font-size: 20px;
}
  .teamName {
    font-family: Bangers, system-ui !important;
    font-size: 20px!important;
    font-weight: 400;
    padding-top: 5%;
    }
}

@media    screen and (max-width: 1299px) {
.slick-arrow.slick-next {
    left: 100%;
    font-size: 9px;
}
.slick-arrow.slick-prev {
left: -6%;
    font-size: 9px;
}

  .teamName {
    font-family: Bangers, system-ui !important;
    font-size: 20px!important;
    font-weight: 400;
    padding-top: 5%;
    }
}




@media (max-width: 991px){
 .slick-arrow.slick-next {
    right: -9% !important;
    font-size: 9px;
}
.slick-arrow.slick-prev {
    left: -9% !important;
    font-size: 9px;
}
    .slick-arrow.slick-prev {
    font-size: 9px;
}
    
#left-image{
    top: 28%;
}   
#left-image img{
    width: 200px;
}
.avatarList {

    width: 80px;
    height: 80px;
}
.mainImg {
    width: 80px; 
}
.blink_me {
  
    font-size: 24px;
}

}
        #popup {
            display: none;
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            padding: 20px;
            background-color: #fff;
            border: 1px solid #ccc;
            text-align: center;
        }


/*@media (min-width: 819px) and (max-width: 825px) {

        .teamName {
    font-family: Bangers, system-ui !important;
    font-size: 20px!important;
    font-weight: 400;
    padding-top: 5%;
    }
    
}*/
</style>

<!-- <div id="popup">
    <p>This is a popup!</p>
</div> -->

<main>
    <ul class="switchbtn">
        <li> 
            <a type="button" href="<?php echo e(config('app.baseURL')); ?>" class="vs-btn">
                <i class="fa fa-home" style="font-size:30px;color: white;"></i>
            </a>
        </li>
    </ul>

    <div class="container">
        <div class="body">
            <div><h6 style="color: #ffff;" class="pickAvatar">Choose your avatar</h6></div><br/>
            <div class="avatarList">
                <div class="mainImg"><img src="assets/images/av2.png"></div>
                <div id="divCircle">
                    <div id="middleBubble"></div>
                    <img src="assets/images/av2.png">
                    <img src="assets/images/av3.png">
                    <img src="assets/images/av4.png">
                    <img src="assets/images/download.png">
                    <img src="assets/images/av6.png">
                    <img src="assets/images/av7.png">
                    <img src="assets/images/av8.png">
                </div>
                <input type="hidden" id="avater">
            </div>
        </div>
    </div>

    <div class="container">
        <div class="grid level-2">
           <!--  <div class="item" data-level="1">Grade 1</div>
            <div class="item" data-level="2">Grade 2</div> -->
            <div class="item" data-level="3">Grade 3</div>
            <div class="item" data-level="4">Grade 4</div>
            <div class="item" data-level="5">Grade 5</div>
        </div>
    </div>

    <div class="container">
        <div id="matches-slider">
            <?php
                $serialNum = 1;
            ?>
            <?php $__currentLoopData = $liveMatches; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$match): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php
                    $teamDetails = json_decode($match['team_details'], true);
                ?>
                <?php if($match->is_live && 
                    isset($teamDetails[0]['teamScore'][0]['runsScored']) && $teamDetails[0]['teamScore'][0]['runsScored'] > 0 &&
                    isset($teamDetails[1]['teamScore'][0]['runsScored']) && $teamDetails[1]['teamScore'][0]['runsScored'] > 0): ?>
                    <label for="<?php echo e($match->id); ?>">
                        <div class="match-item" data-match-id="<?php echo e($match->match_id); ?>">
                            <div class="liveOption">
                                <h6 style="color:#ffff">Match: <?php echo e($serialNum); ?></h6>
                                <?php if($match->is_live=='completed'): ?>
                                    <h6 style="color:red">Completed</h6>
                                <?php else: ?>
                                    <h6 style="color:red">Live</h6>
                                <?php endif; ?>
                                <input type="radio" name="selectedMatch" id="<?php echo e($match->id); ?>" class="matchid" onchange="showHideContent()" value="<?php echo e($match->match_id); ?>" style="display:none">
                            </div>
                            
                            <?php $__currentLoopData = $teamDetails; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $team): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="teamsflex<?php echo e($key); ?>">
                                    <h6 class="teamName"><?php echo e($team['teamFullName']); ?></h6>
                                    <div class="team-info">
                                        <?php if(isset($team['teamScore'][0])): ?>
                                            <p>Runs Scored: <?php echo e($team['teamScore'][0]['runsScored']); ?>/<?php echo e($team['teamScore'][0]['wickets']); ?></p>
                                        <?php endif; ?>
                                    </div>
                                </div>
                                <?php if($key == 0): ?>
                                    <h1 class="vs-tem">vs</h1>
                                <?php endif; ?>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                        <h5 data-match-id="<?php echo e($match->match_id); ?>">Click To Start</h5>
                    </label>
                    <?php
                        $serialNum++;
                    ?>
                <?php endif; ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>

    <!-- Click to Start Button -->
</main>

   <!-- <script src="assets/js/vendor/jquery-3.6.0.min.js"></script> -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

 <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>


    <script type="text/javascript">
      $(document).ready(function () {
    let selectedGrade = null;  // Track if a grade is selected

    // When a grade is clicked
    $('.item').on('click', function () {
        // Remove 'selected' class from all other items and add it to the clicked item
        $('.item').removeClass('selected');
        $(this).addClass('selected');

        // Store the selected grade (data-level attribute in this case)
        selectedGrade = $(this).data('level');

        // Enable/Disable click on h5 based on whether a grade is selected
        if (selectedGrade) {
            // Enable click on <h5> if a grade is selected
            $('h5').addClass('clickable');  // Add class to make it clickable
        } else {
            // Disable click on <h5> if no grade is selected
            $('h5').removeClass('clickable');  // Remove class to make it non-clickable
        }
    });

    // Click event for <h5> ("Click to start") when a grade is selected
    $('h5').on('click', function (event) {
        // Stop event propagation
        event.stopPropagation();
        event.preventDefault();
        
        // If no grade is selected, prevent the default action (click)
        if (!selectedGrade) {
            alert("Please select a grade first!"); // Optional alert
            return false;
        }

        // Get match_id directly from data attribute
        var selectedValue = $(this).data('match-id');
        var radioButton = $(this).closest('label').find('.matchid');
        var local = radioButton.attr('class');
        var value = $('#avater').val() || $('.mainImg img').attr('src');
        var teacher_id = '<?php echo e($teacher_id); ?>';
        var std_id = '<?php echo e($std_id); ?>';

        var selectedGridItem = $('.item.selected');
        var selectedLevel = selectedGridItem.data('level') || null;

        // Redirect based on the selected values
        window.location.href = '<?php echo e(config('app.baseURL')); ?>/answer?category=' + local + '&avatar=' + value + '&selectedValue=' + selectedValue + '&level=' + selectedLevel + '&teacher_id=' + teacher_id + '&std_id=' + std_id;
        
        return false;
    });

    // Prevent right-click or context menu when <h5> is not clickable
    $('h5').on('contextmenu', function (event) {
        if (!selectedGrade) {
            event.preventDefault();  // Disable right-click menu when no grade is selected
        }
    });

     $('.match-item').on('click', function (event) {
        // Stop event propagation to prevent label's default behavior
        event.stopPropagation();
        event.preventDefault();
        
        // If no grade is selected, prevent the default action (click)
        if (!selectedGrade) {
            alert("Please select a grade first!"); // Optional alert
            return false;
        }

        // Get match_id directly from data attribute - THIS IS THE KEY FIX
        var selectedValue = $(this).data('match-id');
        var radioButton = $(this).closest('label').find('.matchid');
        var local = radioButton.attr('class');
        var value = $('#avater').val() || $('.mainImg img').attr('src');
        var teacher_id = '<?php echo e($teacher_id); ?>';
        var std_id = '<?php echo e($std_id); ?>';

        var selectedGridItem = $('.item.selected');
        var selectedLevel = selectedGridItem.data('level') || null;

        // Redirect based on the selected values
        window.location.href = '<?php echo e(config('app.baseURL')); ?>/answer?category=' + local + '&avatar=' + value + '&selectedValue=' + selectedValue + '&level=' + selectedLevel + '&teacher_id=' + teacher_id + '&std_id=' + std_id;
        
        return false;
    });
});

$(document).ready(function () {
    let selectedGrade = null;  // Track if a grade is selected

    // When a grade is clicked
    $('.item').on('click', function () {
        // Remove 'selected' class from all other items and add it to the clicked item
        $('.item').removeClass('selected');
        $(this).addClass('selected');

        // Store the selected grade (data-level attribute in this case)
        selectedGrade = $(this).data('level');

        // Enable/Disable click on h5 based on whether a grade is selected
        if (selectedGrade) {
            // Enable click on <h5> if a grade is selected
            $('h5').addClass('clickable');  // Add class to make it clickable
        } else {
            // Disable click on <h5> if no grade is selected
            $('h5').removeClass('clickable');  // Remove class to make it non-clickable
        }
    });

    // Click event for <h5> ("Click to start") when a grade is selected
    $('h5').on('click', function (event) {
        // Stop event propagation
        event.stopPropagation();
        event.preventDefault();
        
        // If no grade is selected, prevent the default action (click)
        if (!selectedGrade) {
            alert("Please select a grade first!"); // Optional alert
            return false;
        }

        // Get match_id directly from data attribute
        var selectedValue = $(this).data('match-id');
        var radioButton = $(this).closest('label').find('.matchid');
        var local = radioButton.attr('class');
        var value = $('#avater').val() || $('.mainImg img').attr('src');
        var teacher_id = '<?php echo e($teacher_id); ?>';
        var std_id = '<?php echo e($std_id); ?>';

        var selectedGridItem = $('.item.selected');
        var selectedLevel = selectedGridItem.data('level') || null;

        // Redirect based on the selected values
        window.location.href = '<?php echo e(config('app.baseURL')); ?>/answer?category=' + local + '&avatar=' + value + '&selectedValue=' + selectedValue + '&level=' + selectedLevel + '&teacher_id=' + teacher_id + '&std_id=' + std_id;
        
        return false;
    });

    // Prevent right-click or context menu when <h5> is not clickable
    $('h5').on('contextmenu', function (event) {
        if (!selectedGrade) {
            event.preventDefault();  // Disable right-click menu when no grade is selected
        }
    });
});


    </script>



     <script>
        $('#matchid').hide();
  $(document).ready(function () {
    
    // Initialize Slick Slider with custom arrows
    $('#matches-slider').slick({
      infinite: true,
      // Add more options as needed
      prevArrow: '<button class="slick-prev slick-arrow" aria-label="Previous" type="button"><i class="fas fa-arrow-left"></i></button>',
      nextArrow: '<button class="slick-next slick-arrow" aria-label="Next" type="button"><i class="fas fa-arrow-right"></i></button>'
    });
  });
</script>
<script>
  // JavaScript for infinite loop slider with button controls
  const slider = document.getElementById('slider');
  const slides = document.querySelectorAll('.slide');
  const prevBtn = document.getElementById('prevBtn');
  const nextBtn = document.getElementById('nextBtn');

  let currentIndex = 0;

  function nextSlide() {
    currentIndex = (currentIndex + 1) % slides.length;
    updateSlider();
  }

  function prevSlide() {
    currentIndex = (currentIndex - 1 + slides.length) % slides.length;
    updateSlider();
  }

  function updateSlider() {
    const translateValue = -currentIndex * 100 + '%';
    slider.style.transform = 'translateX(' + translateValue + ')';
  }

  // Add event listeners to buttons
  prevBtn.addEventListener('click', prevSlide);
  nextBtn.addEventListener('click', nextSlide);
</script>
<script>
    $(document).ready(function(){
            //Center the "info" bubble in the  "circle" div
            var divTop = ($("#divCircle").height() - $("#middleBubble").height())/2;
            var divLeft = ($("#divCircle").width() - $("#middleBubble").width())/2;
            $("#middleBubble").css("top",divTop + "px");
            $("#middleBubble").css("left",divLeft + "px");
            
            //Arrange the icons in a circle centered in the div
            numItems = $( "#divCircle img" ).length; //How many items are in the circle?
            start = 0.0; //the angle to put the first image at. a number between 0 and 2pi
            step = (4*Math.PI)/numItems; //calculate the amount of space to put between the items.
            
            //Now loop through the buttons and position them in a circle
            $( "#divCircle img" ).each(function( index ) {
                radius = ($("#divCircle").width() - $(this).width())/2.3; //The radius is the distance from the center of the div to the middle of an icon
                //the following lines are a standard formula for calculating points on a circle. x = cx + r * cos(a); y = cy + r * sin(a)
                //We have made adjustments because the center of the circle is not at (0,0), but rather the top/left coordinates for the center of the div
                //We also adjust for the fact that we need to know the coordinates for the top-left corner of the image, not for the center of the image.
                tmpTop = (($("#divCircle").height()/2) + radius * Math.sin(start)) - ($(this).height()/2);
                tmpLeft = (($("#divCircle").width()/2) + radius * Math.cos(start)) - ($(this).width()/2);
                start += step; //add the "step" number of radians to jump to the next icon
                
                //set the top/left settings for the image
                $(this).css("top",tmpTop);
                $(this).css("left",tmpLeft);
            });
                
        });

$('.avatarList').click(function() {
  $(this).toggleClass('expand');
  $('#divCircle').toggleClass('expand');
});

$('#divCircle img').click(function() {
  var theSrc = $(this).attr('src');
  $('.mainImg img').attr('src', theSrc);
   $('#avater').val(theSrc);
});
$("#siteloader").html('<object data="https://www.cricbuzz.com" />');
</script>
<script>
    $(document).ready(function() {
    // Removed .matchid click handler to prevent conflicts with .match-item handler
    // The .match-item handler now handles all match clicks using data-match-id attribute
    // $('.matchid').on('click',function(){
    //       var local= $(this).attr('class')
    //       var value=  $('#avater').val();
    // if(value==""){
    //     var value=$('.mainImg img').attr('src');
    // }
    //         var teacher_id='<?php echo e($teacher_id); ?>';
    //         var std_id='<?php echo e($std_id); ?>';
    // var selectedValue = $(this).val(); // Get value directly from the clicked radio button
    //
    // var selectedGridItem = $('.item.selected'); // Assuming the grid item gets the 'selected' class
    //         if (selectedGridItem.length > 0) {
    //             var selectedLevel = selectedGridItem.data('level'); // Get the 'data-level' value
    //         } else {
    //             var selectedLevel = null; // No level selected yet
    //         }
    //   // alert(selectedLevel);


  
      

    //     window.location.href = '<?php echo e(config('app.baseURL')); ?>/answer?category='+local+'&avatar='+value+'&selectedValue='+selectedValue+'&level='+selectedLevel+'&teacher_id='+teacher_id+'&std_id='+std_id+'';
    // })
   })
</script>
<script>
    $(document).ready(function () {
        // Show the popup initially
        $('#popup').show();

        // Rotate the screen to landscape mode
        function rotateToLandscape() {
            if (window.innerWidth < window.innerHeight) {
                // Check if the screen is in portrait mode
                alert("Rotate your device to landscape mode");
            } else {
                // Screen is in landscape mode, hide the popup
                $('#popup').hide();
                // You can add additional logic or actions here if needed
            }
        }

        // Check the screen orientation initially
        rotateToLandscape();

        // Listen for orientation change events
        $(window).on('orientationchange', function () {
            // Check the screen orientation when the orientation changes
            rotateToLandscape();
        });
    });
</script>
<!-- <script>
  let currentIndex = 0;
  const slides = document.querySelectorAll('.slide');

  function showSlide(index) {
    const totalSlides = slides.length;
    // Loop carousel
    if (index >= totalSlides) {
      currentIndex = 0;
    } else if (index < 0) {
      currentIndex = totalSlides - 1;
    } else {
      currentIndex = index;
    }

    const offset = -currentIndex * 100; // Move slides
    document.getElementById('carouselContent').style.transform = `translateX(${offset}%)`;
  }

  function nextSlide() {
    showSlide(currentIndex + 1);
  }

  function prevSlide() {
    showSlide(currentIndex - 1);
  }

  showSlide(currentIndex); // Initial call to show the first slide
</script>
 -->
<script>
  document.querySelectorAll('.item').forEach(item => {
    item.addEventListener('click', function() {
      // Remove the 'selected' class from all items
      document.querySelectorAll('.item').forEach(i => i.classList.remove('selected'));

      // Add the 'selected' class to the clicked item
      this.classList.add('selected');
    });
  });
</script>



<!-- <script>
        function showHideContent() {
            var radios = document.getElementsByClassName('matchid');
            var content = document.getElementsByClassName('contentToShow')[0];
            var isChecked = Array.from(radios).some(radio => radio.checked);
            content.style.display = isChecked ? 'block' : 'none';
        }
    </script>
    <script>
        $(document).ready(function () {
            $('.slick-next').click(function () {
                $('.contentToShow').css('display','none');
            });
              $('.slick-prev').click(function () {
                $('.contentToShow').css('display','none');
            });
        });
    </script> -->

<?php /**PATH /Users/rahulshendre/Desktop/Coding/PlanetRead/Crickmath/cricmaths_web/resources/views/after-start.blade.php ENDPATH**/ ?>