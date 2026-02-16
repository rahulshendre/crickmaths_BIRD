@extends('layouts.app')
@section('content')

<style type="text/css">
	.section_one-bg {
    background: url('{{ asset('assets/img/union_one.png') }}') no-repeat;
    
    width: 100%; /* or any width you need */
}

.section_one{
    margin-top: -3%;
}

.section_one h6{
    font-family: Spicy Rice;
font-size: 37px;
font-weight: 400;
line-height: 54.63px;
letter-spacing: 0.07em;
text-align: center;
color: #FFFFFF;
margin-top: -40%;
    margin-left: 5%;



}

.play{
    background: #FFFFFF;
 /*width: 285px;
height: 83px;
top: 659px;
left: 429px;
gap: 0px;*/
border-radius: 15px;
opacity: 0px;

font-family: Signika;
font-size: 20px;
font-weight: 700;
line-height: 41.89px;
text-align: center;
color: #B70303;
padding-left: 5%;
    padding-right: 5%;
margin-right: 10%;


}

.section_one .vector{
    width:60%; margin-top: -58%; margin-left: -22%;

}

 .play_now_div{
            margin-top: -7%
        }

</style>

<section class="section_one" >
    <div class="section_one-bg">
        <div class="row">
            <div class="col-md-6" style="margin-top: 13%; text-align: center;">

                <img src="{{config('app.baseURL')}}/assets/img/vector_outline.png" class="cricket-bat" alt="Cricket bat" style="width:60%;">
                <img src="{{config('app.baseURL')}}/assets/img/vector_outline_2.png" class="cricket-bat" alt="Cricket bat" style="width:18%; margin-top: -79%;
    margin-left: 46%;">

                <img src="{{config('app.baseURL')}}/assets/img/vector_one.png" class="vector" alt="Cricket bat" style="width:60%; margin-top: -58%; margin-left: -22%;">

<!-- <img src="{{config('app.baseURL')}}/assets/img/mask_group_1.png" class="cricket-bat" alt="Cricket bat" style="width:5%; 
    margin-top: -73%;
    margin-left: -32%;"> -->

    <img src="{{config('app.baseURL')}}/assets/img/mask_group_1.png" class="cricket-bat" alt="Cricket bat" style="width:10%; 
    margin-top: -96%;
    margin-left: -38%;">
                <h6>With Cricmaths,<br>playing and learning <br>is easy-peasy!</h6>


                

 <img src="{{config('app.baseURL')}}/assets/img/mask_group_1.png" class="cricket-bat" alt="Cricket bat" style="width:5%; 
    margin-top: -9%;
    margin-left: 48%;">

    <div class="play_now_div">

                <img src="{{config('app.baseURL')}}/assets/img/mask_group_2.png" class="cricket-bat" alt="Cricket bat" style="width:13%; margin-right: 2%; margin-top: -32px;">

                <button class="btn play">Play Now</button>

    </div>


            </div>

            
             <div class="col-md-6">

            <img src="{{config('app.baseURL')}}/assets/img/pngwing_1.png" class="cricket-bat" alt="Cricket bat" style="width:5%; margin-top: 29%;
    margin-left: 29%;">
               <img src="{{config('app.baseURL')}}/assets/img/pngwing_3.png" class="cricket-bat" alt="Cricket bat" style="width:5%; float: inline-end; margin-top: 29%;
    margin-right: 31%; ">



                
               <img src="{{config('app.baseURL')}}/assets/img/cricketer.png" class="cricket-bat" alt="Cricket bat" style="width:50%; margin-top:-4%; float: inline-end; margin-right:15%;">

               <img src="{{config('app.baseURL')}}/assets/img/pngwing_2.png" class="cricket-bat" alt="Cricket bat" style="width:5%; float: inline-end; margin-top: 18%;">

               <img src="{{config('app.baseURL')}}/assets/img/pngwing_4.png" class="cricket-bat" alt="Cricket bat" style="width:5%; float: inline-end; margin-top: 18%;
    margin-right: -50%; ">

<img src="{{config('app.baseURL')}}/assets/img/pngwing_3.png" class="cricket-bat" alt="Cricket bat" style="width:5%; float: inline-end; margin-top: 37%;
    margin-right: -55%; ">

            </div>
            
        </div>

    <img src="{{config('app.baseURL')}}/assets/img/home/v1.png" class="v1" alt="Cricket bat" >

        
    </div>
</section>


@endsection