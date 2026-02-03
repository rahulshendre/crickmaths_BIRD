<style type="text/css">
    li{
        background: burlywood;
    padding:8px;
    }

    .container{
            margin-top: 15px;

    }

    .btn{
            margin: 10px 1px 10px 0px!important;
    }

    h4{
            margin-left: 5px;
    }
    label{
            margin-left: 5px;

    }

    h1{
            text-align: center;
                margin-bottom: 25px;


    }
</style>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<div class="container">



  <div>
    <h1>-:Question And Answer:-</h1>

<form class="form-horizontal" role="form" method="POST" action="{{config('app.baseURL')}}/answer" enctype="multipart/form-data" >
@csrf
    <ol>

    @foreach($questions as $question)
        <li>{{ $question->question }}</li>
    <br>
         
        
         <h4>Select Answer:</h4>
        @foreach($question->option as $option)
            <label> 
                <input type="radio" name="option_id" required="" value="{{ $option->challenge_question_option_id }}">
                {{ $option->options }}
            </label><br>
        @endforeach

        <input type="hidden" name="user_id" value="">
        <input type="hidden" name="question_id" value="{{$question->challenge_question_id}}">


        <button class="btn btn-primary" type="submit" >Submit</button>

    @endforeach
    </ol>
</form>
</div>




</div>

