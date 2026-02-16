@extends('layouts.app')
@section('content')

<script src="{{config('app.baseURL')}}/assets/js/jquery.min.js"></script>
<script src="{{config('app.baseURL')}}/assets/js/bootstrap.min.js"></script>
<style type="text/css">
    
    .header-layout1{
        display: none;
    }
 .header-layout2 {
background-color: #313069 ;
    }
    .margin10{
margin-top: 10%;
    }
</style>

	<div class="container margin10">
										<!-- Page Header -->
					<div class="page-header">
						<div>
							<h2 class="main-content-title tx-24 mg-b-5"> Add Question</h2>
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="#">Home</a></li>
								<li class="breadcrumb-item ">Question</li>
								<li class="breadcrumb-item active" aria-current="page">Add</li>
							</ol>
						</div>
						
					</div>
					<!-- End Page Header -->

					<!-- Row -->
				<form action="{{ route('questions.store') }}" class="form" method="post">
    @csrf
    <label for="question">Question:</label>
    <input type="text" name="question" required>

    <label for="choices">Choices:</label>
    <textarea name="choices" rows="4" required></textarea>
<select class="form-select" name="category" aria-label="Default select example">
  <option selected>Open this select menu</option>
  <option value="1">Beginner</option>
  <option value="2">Intermediate</option>
  <option value="3">Advance</option>
</select>
    <label for="correctAnswer">Correct Answer (Index):</label>
    <input type="number" name="correctAnswer" required>
<div class="form-group">
    <button type="submit" class="vs-btn">Create Question</button>
    </div>
</form>


											
												
					<!-- End Row -->

					

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

            $('#option').append('<div class="col-md-6 addoption"><input class="form-control m-2" name="options[]"  type="text" placeholder="Add Options"></div>');

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



@endsection