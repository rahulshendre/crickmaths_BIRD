@extends('layouts.admin-app')
@section('content')

<script src="{{config('app.baseURL')}}/assets/js/jquery.min.js"></script>
<script src="{{config('app.baseURL')}}/assets/js/bootstrap.min.js"></script>


<body>
	<div class="container-fluid">
										<!-- Page Header -->
					<div class="page-header">
						<div>
							<h2 class="main-content-title tx-24 mg-b-5"> Edit Question</h2>
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="#">Home</a></li>
								<li class="breadcrumb-item ">Question</li>
								<li class="breadcrumb-item active" aria-current="page">Edit</li>
							</ol>
						</div>
						
					</div>
					<!-- End Page Header -->

					<!-- Row -->
					<form class="form-horizontal" role="form" method="POST" action="{{config('app.baseURL')}}/admin/question/edit/{{$id}}" enctype="multipart/form-data" >
																@csrf

					<div class="row">
						<div class="col-lg-12 col-md-12">
							<div class="card custom-card">
								<div class="card-body">
									<div>
										<h6 class="card-title mb-1">Edit Question</h6>
										<!-- <p class="text-muted card-sub-title">A form group layout for entering card information upon checkout.</p> -->
									</div>
									<hr>
									<div class="row">
										<div class="col-md-12 col-lg-12 col-xl-12" style="margin-top: 14px;">
											<div class="">
										<div class="row">
											<div class="col-md-4">
												<div class="form-group">
													<label class="">Code:</label>
													<input class="form-control" name="code" required="" type="text" placeholder="Code" value="{{$question->code}}">
												</div>
											</div>

                      <div class="col-md-4">
												<div class="form-group">
													<label class="">Type:</label>
													<input class="form-control" name="type" required="" type="text" placeholder="Type" value="{{$question->type}}">
												</div>
											</div>

											<div class="col-md-4">
												<div class="form-group">
													<label class="">Modal Area:</label>
													<input class="form-control" name="modal_area" required="" type="text" placeholder="Question" value="{{$question->modal_area}}">
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-6">
												<div class="form-group">
													<label class="">Question:</label>
													<input class="form-control" name="question" required="" type="text" placeholder="Question" value="{{$question->question}}">
												</div>
											</div>

                                         	<div class="col-md-6">
												<div class="form-group">
													<label class="">Answer:</label>
													<input class="form-control" name="answer" required="" type="text" placeholder="Answer" value="{{$question->answer}}">
												</div>
											</div>
										</div>

										<div id='option'>
   
										<div class="col-md-6">
												<div class="form-group">
													<label class="">Options:</label>
													<input class="form-control" name="options[]" required="" type="text" placeholder="Add Options" value="{{$option->options}}" style="    margin-left: 8px;">
												</div>
											</div>

										</div>

										<div class="m-2">

											<button class="btn btn-primary m-2" id="add" onclick="addFunction()">Add More option</button> 
											<button class="btn btn-primary m-2" id="remove" onclick="removeFunction()">Remove option Field</button> 

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


 <script type="text/javascript">

function addFunction(){

            $('#option').append('<div class="col-md-6 addoption"><input class="form-control m-2" name="options[]" required=""   type="text" placeholder="Add Options"></div>');

}

</script>


<script type="text/javascript">

	function removeFunction()
	{
    
    $('.addoption').remove();

	}

</script>

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