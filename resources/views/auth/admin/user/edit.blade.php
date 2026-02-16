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
              <h2 class="main-content-title tx-24 mg-b-5">User</h2>
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                <li class="breadcrumb-item ">User</li>
                <li class="breadcrumb-item active" aria-current="page">Updat</li>
              </ol>
            </div>
            
          </div>
          <!-- End Page Header -->

          <!-- Row -->
          <form class="form-horizontal" role="form" method="POST" action="{{config('app.baseURL')}}/admin/user/update/{{$user->id}}" enctype="multipart/form-data" >
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
                    <label class="form-label">Name</label>
                    <input type="text" name="name" id="name" class="form-control" autocomplete="off" value="{{$user->name}}" required>
                  </div>
                </div>

                <div class="form-group col-md-3">
                  <div class="form-group">
                    <label class="form-label">Email</label>
                    <input type="email" name="email" id="email" class="form-control" autocomplete="off" value="{{$user->email}}" required>
                  </div>
                </div>

                <div class="form-group col-md-3">
                  <div class="form-group">
                    <label class="form-label">Phone No</label>
                    <input type="number" name="phone_no" id="phone_no" class="form-control" autocomplete="off" value="{{$user->phone_no}}" required>
                  </div>
                </div>

                  <div class="form-group col-md-3">
                  <div class="form-group">
                    <label class="form-label">Date Of Birth</label>
                    <input type="date" name="dob" id="dob" class="form-control" autocomplete="off" value="{{$user->dob}}" required>
                  </div>
                </div>

                  <div class="form-group col-md-3">
                  <div class="form-group">
                    <label class="form-label">Age</label>
                    <input type="number" name="age" id="age" class="form-control" autocomplete="off" value="{{$user->age}}" required>
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