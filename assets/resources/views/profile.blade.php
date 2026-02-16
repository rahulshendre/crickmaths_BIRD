@extends('layouts.app')
@section('content')
<style type="text/css">
   .profile-title{
    font-weight: 400;
    text-align: center;
   }
    .header-layout1{
        display: none;
    }
    .registermargin{
        margin-top: 10%;
    }
.card{
    border: 0px;
}
.space-top{
margin-top: 5%;
}
        #sidebar {
            width: 250px;
            background: #00821a;
            padding-top: 20px;
               position: absolute;
               height: 91%;
            color: white;
        }
#sidebar {
  height: fit-content; 
    overflow-y: auto;
}
        #sidebar a {
            padding: 15px 10px;
            text-decoration: none;
            font-size: 18px;
            color: white;
            display: block;
            transition: 0.3s;
        }

        #sidebar a:hover {
            background: #555;
        }

        #content {
            margin-left: 20%;
            padding: 20px;
        }
        .m-5 {
    margin: 10rem!important;
}
.btn-primary{

 background-color: #008428;  
}
.btn-primary:hover {
background-color: #00a121; 
}
 .form-style3 label {
    font-weight: 400;
    font-family: "Baloo Da 2", sans-serif !important;
}
@media screen and  (max-width: 768px) {
    .form-style3{
        overflow-y: auto;
    }
    .space-top{
margin-top: 2%;
}
    #sidebar {
    position: relative;
}
#content {
            margin-left: 0%;
            
        }
}

 </style>
   

<section class="space-top">
<div class="container" >
<div id="sidebar">
    <a href="#" class="menu-item" data-target="profile">Profile</a>
    <a href="#" class="menu-item" data-target="reset-password">Reset Password</a>
   


    @php
    $user = Auth::user();
    $id = $user ? $user->role_id : null;
  
@endphp

@if($id && $id == 3)
     <a href="#" class="menu-item" data-target="StudentScore">Class Room</a>
     @else
      <a href="#" class="menu-item" data-target="attempt-report">Attempt Report</a>
     @endif
</div>


<div id="content" >
    <!-- Update Profile Card -->
    <div class="card profile col-md-10" >
         <div class="form-style3">
                    <div ><h4 class="profile-title">{{ __('Profile') }}</h4></div>
                      @foreach($userdetail as $userdetails)
                    <form method="POST" action="admin/user/edit/{{$userdetails->id}}">
                        @csrf
                      
<input type="hidden" name="role_id" value="3">
                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>
                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" required autocomplete="name" autofocus value="{{$userdetails->name}}">
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{$userdetails->email}}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                         <div class="row mb-3">
                            <label for="phone_no" class="col-md-4 col-form-label text-md-end">{{ __('Contact Number') }}</label>

                            <div class="col-md-6">
                                <input id="phone_no" type="number" class="form-control @error('phone_no') is-invalid @enderror" name="phone_no" value="{{$userdetails->phone_no}}">

                                @error('phone_no')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="age" class="col-md-4 col-form-label text-md-end">{{ __('Age') }}</label>

                            <div class="col-md-6">
                                <input id="age" type="number" class="form-control @error('age') is-invalid @enderror" name="age" value="{{$userdetails->age}}" onkeypress="if(this.value.length==2) return false;" min="6" max="99">

                                @error('age')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <!-- <div class="row mb-3">
                            <label for="dob" class="col-md-4 col-form-label text-md-end">{{ __('Date of birth') }}</label>

                            <div class="col-md-6">
                                <input id="dob" type="date" class="form-control @error('dob') is-invalid @enderror" name="dob" value="{{$userdetails->dob}}">
                                @error('dob')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div> -->


                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Update') }}
                                </button>
                            </div>
                        </div>
                    </form>
                    @endforeach
                </div>
    </div>

    <!-- Reset Password Card -->
    <div class="card reset-password col-md-10">
        <div class="form-style3">
                    <div><h4 class="profile-title">{{ __('Reset Password') }}</h4></div>
                    <form method="POST" action="{{config('app.baseURL')}}/reset">
                        @csrf

                        

                      

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Reset Password') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
    </div>

    <!-- Attempt Report Card -->
    <div class="card attempt-report">
      <div class="form-style3">
                <div class="container">
        <h4 class="profile-title">Attempt Report</h4>
        <table class="table">
            <thead>
                <tr>
                    <th>Category</th>
                    <th>Attempt</th>
                     <th>Question Count</th>
                    <th>Correct Question</th>
                    <th>Total Score</th>
                </tr>
            </thead>
            <tbody>
                @foreach($tableData as $row)
                    <tr>
                        @if($row['Category']==1)
                         <td>Beginner</td>
                         @elseif($row['Category']==2)
                         <td>Intermediate</td>
 @elseif($row['Category']==3)
                         <td>Advance</td>
                         @endif
                        <td>{{ $row['Attempt'] }}</td>
                        <td>{{ $row['Question_Count'] }}</td>
                        <td>{{ $row['Total_Score']}}</td>
                        <td>{{ $row['Total_Score']*10 }}</td>
                        
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
            </div>
    </div>
     <!--StudentScore -->
    <div class="card StudentScore">
      <div class="form-style3">
                <div class="container">
        <h1>Class Room</h1>
        <div class="form-group m-2 col-sm-12">
<label for="class">Class</label>
  <select class="form-control" id="class" name="class" placeholder="Name">
  <option>Select Class</option>
    @php
        for ($i = 1; $i <= 12; $i++) {
            $suffix = ($i == 1) ? 'st' : (($i == 2) ? 'nd' : (($i == 3) ? 'rd' : 'th'));
            echo "<option value='$i'>$i$suffix</option>";
        }
    @endphp

</select>
</div>
</div>
        <table class="table">
            <thead>
                <tr>
                    <th>Student</th>
                    <th>Student Class</th>
                    <th>Questions</th>
                    <th>Correct Questions</th>
                    <th>Score</th>
                    <th>Date/Time</th>
                </tr>
            </thead>
            <tbody class="scoreLeader">
                @foreach($std_score as $row_std)
                    <tr>
                        
                        <td>{{ $row_std['name'] }}</td>
                        <td>{{ $row_std['class'] }}</td>
                        <td>{{ $row_std['question_atempt'] }}</td>
                         <td>{{ $row_std['correct_question'] }}</td>
                        <td>{{ $row_std['score'] }}</td>
                        <td>{{ $row_std['created_at'] }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
            
    </div>


</div>
</div>
</section>
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

<script>
    $(document).ready(function () {
        $(".menu-item").click(function () {
            var targetCard = $(this).data('target');
            $(".card").hide();
            $("." + targetCard).show();
        });
          $(".card").not(":first").hide();
    });

  $(document).ready(function () {
    $('#class').change(function () {
      var selectedClass = $(this).val();
      $.ajax({
        url: 'endpointScore', 
        method: 'POST',
        data: { class: selectedClass,_token: '{{ csrf_token() }}' },
        success: function (data) {
          // Update the table with the new data
          updateTable(data);
        },
        error: function (error) {
          console.error('Error fetching data:', error);
        }
      });
    });

    // Function to update the table with new data
    function updateTable(data) {
      // Clear existing table rows
      $('tbody').empty();

      // Append new rows based on the fetched data
      $.each(data, function (index, row) {
        $('.scoreLeader').append('<tr><td>' + row.name + '</td><td>' + row.class + '</td><td>' + row.question_atempt + '</td><td>' + row.correct_question + '</td><td>' + row.score + '</td></tr>');
      });
    }
  });
</script>
@endsection
