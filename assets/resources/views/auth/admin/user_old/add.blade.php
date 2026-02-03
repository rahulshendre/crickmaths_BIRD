@extends('layouts.admin-app')
@section('content')
<style type="text/css">
	strong{
		    color: red;

	}
</style>

<script src="{{config('app.baseURL')}}/assets/js/jquery.min.js"></script>
<script src="{{config('app.baseURL')}}/assets/js/bootstrap.min.js"></script>


<body>
	<div class="container-fluid">
										<!-- Page Header -->
					<div class="page-header">
						<div>
							<h2 class="main-content-title tx-24 mg-b-5"> Add User</h2>
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="#">Home</a></li>
								<li class="breadcrumb-item ">User</li>
								<li class="breadcrumb-item active" aria-current="page">Add</li>
							</ol>
						</div>
						
					</div>
					<!-- End Page Header -->

					<!-- Row -->
					<form class="form-horizontal" role="form" method="POST" action="add" enctype="multipart/form-data" >
																@csrf

					<div class="row">
						<div class="col-lg-12 col-md-12">
							<div class="card custom-card">
								<div class="card-body">
									<div>
										<h6 class="card-title mb-1">Add User</h6>
										<!-- <p class="text-muted card-sub-title">A form group layout for entering card information upon checkout.</p> -->
									</div>
									<hr>
									<div class="row">
										<div class="col-md-12 col-lg-12 col-xl-12" style="margin-top: 14px;">
											<div class="">
										<div class="row">
											<div class="col-md-4">
												<div class="form-group">
													<label class="">Name:</label>
													<input class="form-control" name="name" required="" type="text" placeholder="Enter Name" value="{{ old('name') }}">
												</div>
											</div>

											<div class="col-md-4">
												<div class="form-group">
													<label class="">Email Id:</label>
													<input class="form-control" name="email"  type="email" placeholder="Enter Email Id" data-validation-required-message="This field is required" value="{{ old('email') }}">
													@if ($errors->has('email'))
                    <span class="help-block">
                      <strong>{{ $errors->first('email') }}</strong>
                    </span>
                    @endif
												</div>
											</div>

                      <div class="col-md-4">
												<div class="form-group">
													<label class="">Phone No:</label>

													  <input class="form-control" required="" data-validation-required-message="This field is required" type="number" name="phone_no" value="{{ old('phone_no') }}" placeholder="Phone Number" onkeypress="if(this.value.length==10) return false;">
                    @if ($errors->has('phone_no'))
                    <span class="help-block">
                      <strong>{{ $errors->first('phone_no') }}</strong>
                    </span>
                    @endif

												</div>
											</div>

											
										</div>

										<div class="row">
											<div class="col-md-4">
												<div class="form-group">
													<label class="">Date of Birth:</label>
													<input class="form-control" name="dob"  type="date" placeholder="Enter Email Id" value="{{ old('dob') }}">
												</div>
											</div>

											<div class="col-md-4">
												<div class="form-group">
													<label class="">Age:</label>
													<input class="form-control" name="age"  type="number" placeholder="Enter Age" value="{{ old('age') }}">
												</div>
											</div>

											<div class="col-md-4">
												<div class="form-group">
													<label class="">Password:</label>
													<input class="form-control" name="password"  type="password" placeholder="Enter Password" value="{{ old('password') }}">
												</div>
											</div>
										</div>


										


									


												
												
												
												<button class="btn ripple btn-main-primary btn-block">Submit</button>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</form>


											
												
					<!-- End Row -->

					

				</div>
			</div>
			<!-- End Main Content-->
			<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>


     <script src="{{config('app.baseURL')}}/js/toaster.min.js"></script>
     <script src="{{config('app.baseURL')}}/assets/js/jquery.min.js"></script>


 

 <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/js/toastr.js"></script>
 <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.0/css/toastr.css" rel="stylesheet" />
 <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.0/js/toastr.js"></script>










 <script>
  $(".editor").on('keyup  mouseover',function(e) {
    var myEditor = document.querySelector('.editor')
    var html = myEditor.children[0].innerHTML;
    $('.new-editor').val(html);
  });

  @if(Session::has('message'))
  var type = "{{ Session::get('alert-type', 'info') }}";
  switch(type){
    case 'info':
    toastr.info("{{ Session::get('message') }}");
    break;

    case 'warning':
    toastr.warning("{{ Session::get('message') }}");
    break;
    case 'success':
    toastr.success("{{ Session::get('message') }}");
    break;
    case 'error':
    toastr.error("{{ Session::get('message') }}");
    break;
  }
  @endif

</script>
<script type="text/javascript">
$('#l1').removeClass('active');
$('#l2').removeClass('active');
$('#l3').removeClass('active');
$('#l5').removeClass('active');
$('#l6').removeClass('active');
$('#l7').removeClass('active');
$('#l8').removeClass('active');
$('#l9').removeClass('active');
$('#l10').removeClass('active');
$('#l4').removeClass('active');
$('#l11').removeClass('active');
$('#l12').removeClass('active');
$('#l13').removeClass('active');
$('#l14').removeClass('active');
$('#l16').addClass('active');


</script>
</body>


@endsection