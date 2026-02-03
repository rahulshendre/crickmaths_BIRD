@extends('layouts.app')
@section('content')


    <style>

    .pavilion{

         margin-bottom: 10%;

    }
           




       
        .glossary-title {
background: #B70303;
          font-family: Spicy Rice;
font-size: 30px;
font-weight: 400;
line-height: 75.84px;
letter-spacing: 0.02em;
text-align: center;


            margin-right: 30%;
    margin-left: 30%;
    margin-top: 5%;
    border-radius: 21px;
    color: #FFFFFF;

        }

        .pavilion .container {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
            gap: 50px;
            padding: 40px;
            max-width: 1200px;
            margin: 0 auto;
                margin-top: 5%;


        }

        .term-card {
background: url('{{ asset('assets/img/cricket_lingo/bg.png') }}') no-repeat center;           
 border-radius: 20px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            padding: 15px;
            display: flex;
/*            align-items: center;
*/            justify-content: flex-start;
    flex-direction: column;
        }

        .term-card.green {
/*            background-color: #e8f5e9; 
*/            background: url('{{ asset('assets/img/cricket_lingo/bg.png') }}') no-repeat center;

        }

       /* .term-card.red {
            background-color: #ffebee;  
            border-left: 5px solid #f44336; 
        }*/

        .term-icon {
            background: #235000;
            margin-top: -15%;
            border-radius: 29px;
            margin-left: 11%;
    margin-right: 11%;
}

.term-card .red{
background: #B70303;
            margin-top: -15%;
            border-radius: 29px;
            margin-left: 11%;
    margin-right: 11%;
}

.term-card .light-green{
background: #50B600;
            margin-top: -15%;
            border-radius: 29px;
            margin-left: 11%;
    margin-right: 11%;
}

        
        

        .term-icon h3 {
           font-family: Signika;
font-size: 25px;
font-weight: 400;
line-height: 35px;
text-align: center;
color: #FFFFFF;
    margin-left: 5%;


        }

        .term-details p {
    font-family: Signika;
    font-size: 20px;
    font-weight: 400;
    line-height: 26px;
    text-align: center;
    color: #000000;
    padding-top: 10%;
}


@media (max-width: 767px) {

.glossary-title {
    background: #B70303;
    font-family: Spicy Rice;
    font-size: 16px;
    font-weight: 400;
    line-height: 30.84px;
    letter-spacing: 0.02em;
    text-align: center;
    margin-right: 10%;
    margin-left: 10%;
    margin-top: 5%;
    border-radius: 21px;
    color: #FFFFFF;
}

.term-icon {
    background: #235000;
    margin-top: -15%;
    border-radius: 29px;
    margin-left: 20%;
    margin-right: 20%;
}

.term-icon h3 {
    font-family: Signika;
    font-size: 25px;
    font-weight: 400;
    line-height: 35px;
    text-align: center;
    color: #FFFFFF;
    margin-left: 10%;
    margin-top: 5%;
}

}


@media (max-width: 1025px) {
.glossary-title {
    background: #B70303;
    font-family: Spicy Rice;
    font-size: 30px;
    font-weight: 400;
    line-height: 49.84px;
    letter-spacing: 0.02em;
    text-align: center;
    margin-right: 10%;
    margin-left: 10%;
    margin-top: 5%;
    border-radius: 21px;
    color: #FFFFFF;
}

.term-card{
        margin-top: 6%;

}

.term-card .red {
    margin-top: -10%;
    border-radius: 29px;
    margin-left: 11%;
    margin-right: 11%;
}

.term-card .light-green {
    margin-top: -10%;
    border-radius: 29px;
    margin-left: 11%;
    margin-right: 11%;
}

.term-card .green {
    margin-top: -10%;
    border-radius: 29px;
    margin-left: 11%;
    margin-right: 11%;
}

.term-icon h3 {
        font-family: Signika;
        font-size: 25px;
        font-weight: 400;
        line-height: 35px;
        text-align: center;
        color: #FFFFFF;
        margin-left: 10%;
        margin-top: 2%;
    }

}

@media (max-width: 1025px) {
.pavilion .container {
      margin-top: 5%;
    }

}
    </style>


<section class="pavilion">
	    <div class="glossary-title">Commonly used cricket terms</div>

	    <div class="container">
        <div class="term-card">
            <div class="term-icon green" style="display: flex;     align-items: center;"> 
            <img src="{{config('app.baseURL')}}/assets/img/cricket_lingo/ellipse.png" class="cricket-bat" alt="Cricket bat" style="    width: 20%;"> 
<h3>Batsman</h3></div>
            <div class="term-details">
                <p>A player who hits the ball with a bat to score runs.</p>
            </div>
        </div>

        <div class="term-card ">
            <div class="term-icon red" style="display: flex; align-items: center;"> 
            <img src="{{config('app.baseURL')}}/assets/img/cricket_lingo/ellipse.png" class="cricket-bat" alt="Cricket bat" style="    width: 20%;"> 
               <h3>Bowler</h3>
           </div>
            <div class="term-details">
                <p>The player who throws the ball towards the batsman to get them out.</p>
            </div>
        </div>

         <div class="term-card ">
            <div class="term-icon light-green" style="display: flex; align-items: center;"> 
            <img src="{{config('app.baseURL')}}/assets/img/cricket_lingo/ellipse.png" class="cricket-bat" alt="Cricket bat" style="    width: 20%;"> 
               <h3>Wicket</h3>
           </div>
            <div class="term-details">
                <p>a. The set of three sticks (stumps) and two small sticks (bails) that the bowler aims at. <br> <br>b. Also refers to the event of a batsman getting out.</p>
            </div>
        </div>


        <div class="term-card">
            <div class="term-icon green" style="display: flex;     align-items: center;"> 
            <img src="{{config('app.baseURL')}}/assets/img/cricket_lingo/ellipse.png" class="cricket-bat" alt="Cricket bat" style="    width: 20%;"> 
<h3>Run</h3></div>
            <div class="term-details">
                <p>The basic unit of scoring in cricket, made when the batsmen run to the other end of the pitch.</p>
            </div>
        </div>

        <div class="term-card ">
            <div class="term-icon red" style="display: flex; align-items: center;"> 
            <img src="{{config('app.baseURL')}}/assets/img/cricket_lingo/ellipse.png" class="cricket-bat" alt="Cricket bat" style="    width: 20%;"> 
               <h3>Over</h3>
           </div>
            <div class="term-details">
                <p>A set of six balls bowled by the bowler.</p>
            </div>
        </div>

         <div class="term-card ">
            <div class="term-icon light-green" style="display: flex; align-items: center;"> 
            <img src="{{config('app.baseURL')}}/assets/img/cricket_lingo/ellipse.png" class="cricket-bat" alt="Cricket bat" style="    width: 20%;"> 
               <h3>Fielding</h3>
           </div>
            <div class="term-details">
                <p>The team not batting tries to stop the ball and get the batsmen out.</p>
            </div>
        </div>

          <div class="term-card">
            <div class="term-icon green" style="display: flex;     align-items: center;"> 
            <img src="{{config('app.baseURL')}}/assets/img/cricket_lingo/ellipse.png" class="cricket-bat" alt="Cricket bat" style="    width: 20%;"> 
<h3>Innings</h3></div>
            <div class="term-details">
                <p>The period in which a team bats, trying to score runs, while the other team bowls and fields.</p>
            </div>
        </div>

        <div class="term-card ">
            <div class="term-icon red" style="display: flex; align-items: center;"> 
            <img src="{{config('app.baseURL')}}/assets/img/cricket_lingo/ellipse.png" class="cricket-bat" alt="Cricket bat" style="    width: 20%;"> 
               <h3>Pitch</h3>
           </div>
            <div class="term-details">
                <p>The 22-yard strip of ground where the bowler bowls and the batsman bats.</p>
            </div>
        </div>

         <div class="term-card ">
            <div class="term-icon light-green" style="display: flex; align-items: center;"> 
            <img src="{{config('app.baseURL')}}/assets/img/cricket_lingo/ellipse.png" class="cricket-bat" alt="Cricket bat" style="    width: 20%;"> 
 <h3>Duck</h3>
           </div>
            <div class="term-details">
                <p>When a batsman gets out without scoring any runs.</p>
            </div>
        </div>


         <div class="term-card">
            <div class="term-icon green" style="display: flex;     align-items: center;"> 
            <img src="{{config('app.baseURL')}}/assets/img/cricket_lingo/ellipse.png" class="cricket-bat" alt="Cricket bat" style="    width: 20%;"> 
<h3>Catch</h3></div>
            <div class="term-details">
                <p>When a fielder catches the ball directly from the batsman’s hit without it touching the ground.</p>
            </div>
        </div>

        <div class="term-card ">
            <div class="term-icon red" style="display: flex; align-items: center;"> 
            <img src="{{config('app.baseURL')}}/assets/img/cricket_lingo/ellipse.png" class="cricket-bat" alt="Cricket bat" style="    width: 20%;"> 
               <h3>LBW</h3>
           </div>
            <div class="term-details">
                <p>A way of getting out when the ball hits the batsman’s leg and would have hit the stumps.</p>
            </div>
        </div>

         <div class="term-card ">
            <div class="term-icon light-green" style="display: flex; align-items: center;"> 
            <img src="{{config('app.baseURL')}}/assets/img/cricket_lingo/ellipse.png" class="cricket-bat" alt="Cricket bat" style="    width: 20%;"> 
 <h3>No-Ball</h3>
           </div>
            <div class="term-details">
                <p>An illegal delivery by the bowler, giving an extra run to the batting team and an extra ball.</p>
            </div>
        </div>


         <div class="term-card">
            <div class="term-icon green" style="display: flex;     align-items: center;"> 
            <img src="{{config('app.baseURL')}}/assets/img/cricket_lingo/ellipse.png" class="cricket-bat" alt="Cricket bat" style="    width: 20%;"> 
<h3>Century</h3></div>
            <div class="term-details">
                <p>When a batsman scores 100 runs in a single innings.</p>
            </div>
        </div>

        <div class="term-card ">
            <div class="term-icon red" style="display: flex; align-items: center;"> 
            <img src="{{config('app.baseURL')}}/assets/img/cricket_lingo/ellipse.png" class="cricket-bat" alt="Cricket bat" style="    width: 20%;"> 
               <h3>Half-Century</h3>
           </div>
            <div class="term-details">
                <p>When a batsman scores 50 runs in a single innings.</p>
            </div>
        </div>

         <div class="term-card ">
            <div class="term-icon light-green" style="display: flex; align-items: center;"> 
            <img src="{{config('app.baseURL')}}/assets/img/cricket_lingo/ellipse.png" class="cricket-bat" alt="Cricket bat" style="    width: 20%;"> 
 <h3>Stump</h3>
           </div>
            <div class="term-details">
                <p>a. One of the three vertical posts making up the wicket. <br><br> b. To get a batsman out when they step out of their crease and the wicketkeeper hits the stumps with the ball.</p>
            </div>
        </div>


         <div class="term-card">
            <div class="term-icon green" style="display: flex;     align-items: center;"> 
            <img src="{{config('app.baseURL')}}/assets/img/cricket_lingo/ellipse.png" class="cricket-bat" alt="Cricket bat" style="    width: 20%;"> 
<h3>Crease</h3></div>
            <div class="term-details">
                <p>The lines near the stumps that the batsmen and bowlers must stay behind for certain rules.</p>
            </div>
        </div>

        <div class="term-card ">
            <div class="term-icon red" style="display: flex; align-items: center;"> 
            <img src="{{config('app.baseURL')}}/assets/img/cricket_lingo/ellipse.png" class="cricket-bat" alt="Cricket bat" style="    width: 20%;"> 
               <h3>All-Rounder</h3>
           </div>
            <div class="term-details">
                <p>A player who is good at both batting and bowling.</p>
            </div>
        </div>

         <div class="term-card ">
            <div class="term-icon light-green" style="display: flex; align-items: center;"> 
            <img src="{{config('app.baseURL')}}/assets/img/cricket_lingo/ellipse.png" class="cricket-bat" alt="Cricket bat" style="    width: 20%;"> 
 <h3>Umpire</h3>
           </div>
            <div class="term-details">
                <p>The person who makes decisions on the field and ensures the rules are followed.</p>
            </div>
</div>

       

    </div>

</section>

   




@endsection