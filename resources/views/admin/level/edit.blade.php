@extends('layouts.admin-app')
@section('content')

<script src="{{config('app.baseURL')}}/assets/js/jquery.min.js"></script>
<script src="{{config('app.baseURL')}}/assets/js/bootstrap.min.js"></script>


<body>
	<div class="container-fluid">
										<!-- Page Header -->
					<div class="page-header">
						<div>
							<h2 class="main-content-title tx-24 mg-b-5"> Edit Level</h2>
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="#">Home</a></li>
								<li class="breadcrumb-item ">Level</li>
								<li class="breadcrumb-item active" aria-current="page">Edit</li>
							</ol>
						</div>
						
					</div>
					<!-- End Page Header -->

					<!-- Row -->
					<form class="form-horizontal" role="form" method="POST" action="{{config('app.baseURL')}}/admin/level/edit/{{$id}}" enctype="multipart/form-data" >
																@csrf

					<div class="row">
						<div class="col-lg-12 col-md-12">
							<div class="card custom-card">
								<div class="card-body">
									<div>
										<h6 class="card-title mb-1">Edit Level</h6>
										<!-- <p class="text-muted card-sub-title">A form group layout for entering card information upon checkout.</p> -->
									</div>
									<hr>
									<div class="row">
										<div class="col-md-12 col-lg-12 col-xl-12" style="margin-top: 14px;">
											<div class="">
										<div class="row">
											<div class="col-md-4">
												<div class="form-group">
													<label class="">Level Name:</label>
													<input class="form-control" name="level_name" required="" type="text" placeholder="Enter level Name" value="{{$level->level_name}}">
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