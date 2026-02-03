@extends('layouts.admin_app')
@section('content')

<style type="text/css">
  
  .container-fluid {
    width: 100%;
    padding-right: 15px;
    padding-left: 254px;
    margin-right: auto;
    margin-left: auto;
 }

 @media screen and (min-width: 560px) and (max-width: 799px){

   .content-wrapper {
    margin-left: 5px!important;
    margin-right: 5px!important;
}

.main-footer{
      margin-top: 5px;

}

.main-header-menu-icon {
    margin-right: 570px;
    width: 20px;
    height: 30px;
    display: flex;
    align-items: center;
}



.container-fluid {
    width: 100%;
    padding-right: 15px;
    padding-left: 10px;
    margin-right: auto;
    margin-left: auto;
}

.page-header{
  margin-top: 0px;
}

.breadcrumb{
  margin-top: 56px;
}
   
}

 @media screen and (min-width: 800px) and (max-width: 900px){

   .content-wrapper {
    margin-left: 5px!important;
    margin-right: 5px!important;
}

.main-footer{
      margin-top: 5px;

}

.main-header-menu-icon {
    margin-right: 626px;
    width: 20px;
    height: 30px;
    display: flex;
    align-items: center;
}



.container-fluid {
    width: 100%;
    padding-right: 15px;
    padding-left: 10px;
    margin-right: auto;
    margin-left: auto;
}

.page-header{
  margin-top: 0px;
}

.breadcrumb{
  margin-top: 56px;
}
   
}


@media screen and (min-width: 910px) and (max-width: 999px){

   .content-wrapper {
    margin-left: 5px!important;
    margin-right: 5px!important;
}

.main-footer{
      margin-top: 5px;

}

.main-header-menu-icon {
    margin-right: 710px;
    width: 20px;
    height: 30px;
    display: flex;
    align-items: center;
}



.container-fluid {
    width: 100%;
    padding-right: 15px;
    padding-left: 10px;
    margin-right: auto;
    margin-left: auto;
}

.page-header{
  margin-top: 0px;
}

.breadcrumb{
  margin-top: 56px;
}
   
}


@media screen and (min-width: 200px) and (max-width: 300px){

   .content-wrapper {
    margin-left: 5px!important;
    margin-right: 5px!important;
}

.main-footer{
      margin-top: 5px;

}

.main-header-menu-icon {
    margin-right: 120px;
    width: 20px;
    height: 30px;
    display: flex;
    align-items: center;
}



.container-fluid {
    width: 100%;
    padding-right: 15px;
    padding-left: 10px;
    margin-right: auto;
    margin-left: auto;
}

.page-header{
  margin-top: 0px;
}

.breadcrumb{
  margin-top: 56px;
}
   
}

@media screen and (min-width: 301px) and (max-width: 399px){

   .content-wrapper {
    margin-left: 5px!important;
    margin-right: 5px!important;
}

.page-header {
    margin-top: 83px!important;
}

.main-footer{
      margin-top: 5px;

}

.main-header-menu-icon {
    margin-right: 210px;
    width: 20px;
    height: 30px;
    display: flex;
    align-items: center;
}



.container-fluid {
    width: 100%;
    padding-right: 15px;
    padding-left: 10px;
    margin-right: auto;
    margin-left: auto;
}

.page-header{
  margin-top: 0px;
}

.breadcrumb{
  margin-top: 56px;
}
   
}

@media screen and (min-width: 451px) and (max-width: 550px){

   .content-wrapper {
    margin-left: 5px!important;
    margin-right: 5px!important;
}

.main-footer{
      margin-top: 5px;

}

.main-header-menu-icon {
    margin-right: 360px;
    width: 20px;
    height: 30px;
    display: flex;
    align-items: center;
}



.container-fluid {
    width: 100%;
    padding-right: 15px;
    padding-left: 10px;
    margin-right: auto;
    margin-left: auto;
}

.page-header{
  margin-top: 0px;
}

.breadcrumb{
  margin-top: 56px;
}
   
}


@media screen and (min-width: 401px) and (max-width: 450px){

   .content-wrapper {
    margin-left: 5px!important;
    margin-right: 5px!important;
}

.main-footer{
      margin-top: 5px;

}

.page-header {
    margin-top: 83px!important;
}

.main-header-menu-icon {
    margin-right: 245px;
    width: 20px;
    height: 30px;
    display: flex;
    align-items: center;
}



.container-fluid {
    width: 100%;
    padding-right: 15px;
    padding-left: 10px;
    margin-right: auto;
    margin-left: auto;
}

.page-header{
  margin-top: 0px;
}

.breadcrumb{
  margin-top: 56px;
}
   
}

@media screen and (min-width: 1000px) and (max-width: 1100px){

   .content-wrapper {
    margin-left: 250px!important;
    margin-right: 5px!important;
}

.main-header-menu-icon {
    margin-right: 600px;
    width: 20px;
    height: 30px;
    display: flex;
    align-items: center;
}



   
}

</style>




<header><script src="{{config('app.baseURL')}}/assets/js/jquery.min.js"></script>
<script src="{{config('app.baseURL')}}/assets/js/bootstrap.min.js"></script>
<script src="//cdn.ckeditor.com/4.5.5/standard/ckeditor.js"></script>

</header>

<body>
  <div class="container-fluid">
                    <!-- Page Header -->
          <div class="page-header">
            <div>
              <h2 class="main-content-title tx-24 mg-b-5">Question</h2>
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                <li class="breadcrumb-item ">Question</li>
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

                  </div>
                <div class="form-row">
                
                
                <div class="form-group col-md-3">
                  <div class="form-group">
                    <label class="form-label">Category</label>

                     <select class="form-control category" name="category" required=""> 
                     <option>Select Category</option>   
								       <option value="1">Beginner</option>
								       <option value="2">Intermediate</option>
								       <option value="3">Advance</option>
								     </select>
                  </div>
                </div>
                 <div class="form-group col-md-3">
                  <div class="form-group">
                    <label class="form-label">Type</label>

                     <select class="form-control type" name="type" required=""> 
                     <option>Select Type</option>   
                       <option value="1">Addition</option>
                       <option value="2">Substraction</option>
                       <option value="3">Multiplication</option>
                       <option value="4">Division</option>
                      
                     </select>
                  </div>
                </div>

                 <div class="form-group col-md-12">
                  <div class="form-group">
                    <label class="form-label">Question</label>
                    <textarea type="text" name="question" id="question" class="form-control" autocomplete="off" required></textarea>

                  </div>
                </div>



                <div class="form-group col-md-3">
                  <div class="form-group">
                    <label class="form-label">Correct Answer</label>
                    <input type="text" name="correctAnswer" id="correctAnswer" class="form-control" autocomplete="off" required>
                  </div>
                </div>

                <div class="form-group col-md-12">
                  <div class="form-group">
                    <label class="form-label">Choices</label>
                    <!-- <input type="text" name="choices" id="choices"  autocomplete="off" required> -->
                        <textarea class="form-control" name="choices" rows="4" required></textarea>

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




</body>


@endsection