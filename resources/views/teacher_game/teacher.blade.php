<link rel="stylesheet" href="{{config('app.baseURL')}}/assets/css/app.min.css">
<link rel="stylesheet" href="{{config('app.baseURL')}}/assets/css/fontawesome.min.css">
<link rel="stylesheet" href="{{config('app.baseURL')}}/assets/css/style.css">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>



body {
        background-image: url('assets/images/bg.jpg');
        background-repeat: no-repeat;
        background-size: 100% 100%;
     
    }
label{
    color: #ffff;
}
.cardInfo{
   background: transparent;
   border: 3px solid red;
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
 <div class="container m-auto p-5">
    <div class="card col-md-6 m-auto p-5 cardInfo">
    <form class="m-auto" method="post" action="{{config('app.baseURL')}}/studentDetail">
        @csrf
        @php
    $user = Auth::user();
    $id = $user ? $user->id : null;
@endphp
       <input type="hidden" name="teacher_id" value="{{$id}}"> 
<div class="form-group m-2 col-sm-12">
<label for="class">Class</label>
  <select class="form-control" id="class" name="class" placeholder="Name">
  <option>Select Class</option>
    @php
        for ($i = 1; $i <= 5; $i++) {
            $suffix = ($i == 1) ? 'st' : (($i == 2) ? 'nd' : (($i == 3) ? 'rd' : 'th'));
            echo "<option value='$i'>$i$suffix</option>";
        }
    @endphp

</select>
</div>
<div class="form-group m-2 col-sm-12">
<label for="name">Student Name</label>
 <input type="text" name="name" id="name" placeholder="Name">
</div>
<div class="form-group col-sm-12">
<button type="submit" class="vs-btn m-auto btn">Next</button>
</div>
</form>

 </div>
    </div>
</main>

   <!-- <script src="assets/js/vendor/jquery-3.6.0.min.js"></script> -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

 <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
     <script>
        $(document).ready(function () {
            // Initialize Slick Slider
            $('#matches-slider').slick({

  infinite: true,

                // Add more options as needed
            });
        });
    </script>
