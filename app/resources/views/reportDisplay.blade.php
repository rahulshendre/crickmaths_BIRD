<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
<?php dd($category_id)?>
<div class="container">
    @if($isCorrect=='correct')
	<div style="text-align: center; margin-top: 10%;">
		<img src="{{config('app.baseURL')}}/assets/images/six.webp">
	</div>
	<input type="hidden" id="category" value="{{$category_id}}">
	@else

	<div style="text-align: center; margin-top: 10%;">
		<img src="{{config('app.baseURL')}}/assets/images/out.webp">
	</div>
	<input type="hidden" id="category" value="{{$category_id}}">
	@endif


	<!-- <div style="text-align:end;">
		<a href="{{config('app.baseURL')}}/question"><button class="btn btn-primary" >Next</button></a>
	</div> -->
</div>
<script src="assets/js/vendor/jquery-3.6.0.min.js"></script>
<script>
      setTimeout(function() {
      	var category_id=$('#category').val();

            window.location.href = '{{config('app.baseURL')}}/answer?category='+category_id+'';
        }, 500); // 60000 milliseconds = 1 minute
    </script>

</body>
</html>