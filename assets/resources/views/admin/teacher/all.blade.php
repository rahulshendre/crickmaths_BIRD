@extends('layouts.admin_app')
@section('content')


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<style type="text/css">
  .student {
    position: relative;
    z-index: 99
  }
    .filter{
        display: flex;
        flex-direction: column;
        gap: 2px;
            position: relative;
        top: 34px;
    }
   
.selectopction{
   padding: 4px;
    width: inherit; 
}
.content-wrapper{
  margin-left: 250px;
      margin-right: 10px;

}
      
.row{
      margin-top: 10px;

}


.table.dataTable td {
    border-left: 1px solid #e1e6f1;
    word-wrap: break-word;
}



.col-sm-12{
  width: 1266px;
}


  
/*.my-custom-scrollbar {
position: relative;
height: 200px;
overflow: auto;
}
.table-wrapper-scroll-y {
display: block;

}

.scrollbar-primary::-webkit-scrollbar {
width: 12px;
background-color: #262C49; }

.scrollbar-primary::-webkit-scrollbar-thumb {
border-radius: 10px;
-webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.1);
background-color: #F5F5F5; }

.scrollbar-primary {
scrollbar-color: #F5F5F5 #F5F5F5;
}

.scroll {
  overflow-x: auto;
  text-align: center;
  padding: 2px;
}*/


.form-inline {
    display: flex;
    flex-flow: row wrap;
    align-items: center;
    flex-wrap: wrap;
    flex-direction: column;
}

.dataTables_filter{
    margin-top: 0px!important;
    margin-left: 465px;         
}



.dataTables_paginate{
      margin-left: 387px;

}

.dataTables_length{
      margin-left: -650px;

}

.input-sm{
      margin-left: 5px;
    margin-right: 5px;

}

.btn{
      border-radius: 10px;

}


@media screen and (max-width: 1400px){

   .dataTables_filter{
    margin-left: 245px;
   }

   
  .dataTables_paginate {
    margin-left: 410px!important;
   
}
}


@media screen and (min-width: 300px) and (max-width: 399px){

   .content-wrapper {
    margin-left: 5px!important;
    margin-right: 5px!important;
}

.dataTables_filter {
    left: 0%!important;
}

.dataTables_length {
    margin-left: 0px!important;
}



.main-header-menu-icon {
    margin-right: 210px;
    width: 20px;
    height: 30px;
    display: flex;
    align-items: center;
}

.main-footer{
      margin-top: 5px;

}



.col-12{
      margin-top: 49px;

}
   
}



@media screen and (min-width: 551px) and (max-width: 750px){

   .content-wrapper {
    margin-left: 5px!important;
    margin-right: 5px!important;
}

.main-header-menu-icon {
    margin-right: 0px;
    width: 20px;
    height: 30px;
    display: flex;
    align-items: center;
}

.main-footer{
      margin-top: 5px;

}

.col-12{
      margin-top: 49px;

}

}

@media screen and (min-width: 451px) and (max-width: 550px){

   .content-wrapper {
    margin-left: 5px!important;
    margin-right: 5px!important;
}

.main-header-menu-icon {
    margin-right: 368px;
    width: 20px;
    height: 30px;
    display: flex;
    align-items: center;
}

.main-footer{
      margin-top: 5px;

}



.col-12{
      margin-top: 49px;

}
 .modal-content {
    background-color: #fefefe;
    margin: auto;
    padding: 20px;
    border: 1px solid black;
    width: 50%;
    margin-top: 200px;
}  
}

@media screen and (min-width: 539px) and (max-width: 549px){

  .dataTables_filter {
    left: -144%!important;
}

.dataTables_length {
    margin-left: -390px;
}
.modal-content {
    background-color: #fefefe;
    margin: auto;
    padding: 20px;
    border: 1px solid black;
    width: 50%;
    margin-top: 200px;
}
}

@media screen and (min-width: 400px) and (max-width: 450px){

   .content-wrapper {
    margin-left: 5px!important;
    margin-right: 5px!important;
}

.dataTables_filter {
    left: 0%!important;
}

.dataTables_length {
    margin-left: 0px!important;
}



.main-header-menu-icon {
    margin-right: 235px;
    width: 20px;
    height: 30px;
    display: flex;
    align-items: center;
}

.main-footer{
      margin-top: 5px;

}



.dataTables_filter {
  margin-left: 10px;
}
   
   .col-12{
      margin-top: 49px;

}
.modal-content {
    background-color: #fefefe;
    margin: auto;
    padding: 20px;
    border: 1px solid black;
    width: 50%;
    margin-top: 200px;
}
}


@media screen and (min-width: 760px) and (max-width: 900px){

   .content-wrapper {
    margin-left: 5px!important;
    margin-right: 5px!important;
}

.dataTables_filter {
    margin-left: -168px!important;
}

.dataTables_length {
    margin-left: -981px;
}


.main-footer{
      margin-top: 5px;

}

.main-header-menu-icon {
    margin-right: 632px;
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
.col-12{
      margin-top: 25px;

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

.dataTables_filter {
    margin-left: -130px!important;
}

.dataTables_length {
    margin-left: -972px;
}

.col-12{
      margin-top: 25px;

}

.main-header-menu-icon {
    margin-right: 718px;
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

.col-12{
      margin-top: 49px;

}
   
}

@media screen and (min-width: 200px) and (max-width: 299px){

   .content-wrapper {
    margin-left: 5px!important;
    margin-right: 5px!important;
}

.dataTables_filter {
    left: 0%!important;
}

.dataTables_length {
    margin-left: 0px!important;
}



.col-sm-12 {
    width: 600px;
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
  
  .col-12{
      margin-top: 49px;

} 
}


@media screen  and (min-width: 1000px) and (max-width: 1100px){

   .content-wrapper {
    margin-left: 250px!important;
    margin-right: 5px!important;
}

/*.dataTables_filter {
    margin-left: -188px!important;
}*/

.dataTables_length {
    margin-left: -1000px;
}



.main-footer{
      margin-top: 5px;

}

.main-header-menu-icon {
    margin-right: 592px;
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

.col-12{
      margin-top: 0px;

}
   
}

@media screen  and (min-width: 1200px) and (max-width: 1399px){

   .content-wrapper {
    margin-left: 250px!important;
    margin-right: 5px!important;
}

.dataTables_filter {
    margin-left: 0px!important;
}

.dataTables_length {
    margin-left: -943px;
}

.main-footer{
      margin-top: 5px;

}

.main-header-menu-icon {
    margin-right: 830px;
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

}


.hidden{
  display: none!important;
}

/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  padding-top: 100px; /* Location of the box */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content */
.modal-content {
  background-color: #fefefe;
  margin: auto;
  padding: 20px;
  border: 1px solid black;
    width: 30%;
        margin-top: 200px;

}

/* The Close Button */
.close {
  color: red;
  float: right;
  font-size: 28px;
  font-weight: bold;
  height: 16px;
    width: 18px;
}

.close:hover,
.close:focus {
  color: #000;
  text-decoration: none;
  cursor: pointer;
}

p {
    margin-top: 11px;
    margin-bottom: 1rem;
}

.hide{
  display: none;
}




@media (max-width :450px){
    .modal-content {
    background-color: #fefefe;
    margin: auto;
    padding: 20px;
    border: 1px solid black;
    width: 50%;
    margin-top: 200px;
}
.col-6 {
    flex: 0 0 50%;
     max-width: 100%; 
}
}




</style>

<div class="content-wrapper">

  <div class="content-header row">
  

    




    <div class="content-header-left col-md-9 col-12 mb-2">
      <div class="row breadcrumbs-top">
        <div class="col-12">
          <h2 class="content-header-title float-left mb-0">User Details</h2><br><br>
          <div class="breadcrumb-wrapper col-12">
            <ol class="breadcrumb">

              <li class="breadcrumb-item">
                <a href="#"> Home </a>
              </li>
              <li class="breadcrumb-item">
                <a href="#">User Details</a>
              </li>
              <li class="breadcrumb-item">
              All</li>
            </ol> 
          </div>
        </div>
      </div>
    </div>

  </div>                    
  <div class="content-body">
<section id="basic-datatable">
  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">All User Details</h4>
        </div>
        
         <div><a type="button" class="btn btn-info float-right" href="{{config('app.baseURL')}}/admin/teacher/add" style="margin-top: 1%; margin-right: 5%; background-color: #59d3e0!important;">Add Teacher</a></div>
                              

          <body>  



             <table class="table zero-configuration-resposive scroll"  id="data-table" width="100%">               
              <thead>
                  <tr>
                    <th class="wd-20p">Id</th>
                    <th class="wd-20p">Name</th>
                    <th class="wd-20p">Email</th>
                    <th class="wd-20p">Phone No</th>
                    <th class="wd-20p">Age</th>
                    <th class="wd-20p">Action</th>
                    <th class="wd-20p">Update</th>
                    <th class="wd-20p">Change Password</th>



                          
                   

                  </tr>
                </thead>

                <tfoot>
                  <tr>
                        <th class="wd-20p">Id</th>
                      <th class="wd-20p">Name</th>
                      <th class="wd-20p">Email</th>
                      <th class="wd-20p">Phone No</th>
                      <th class="wd-20p">Age</th>
                        <th class="wd-20p">Action</th>
                        <th class="wd-20p">Update</th>
                        <th class="wd-20p">Change Password</th>



                          
                  </tr>
                </tfoot>
              </table>
               
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
</div>
</div>

</body>

   
<script type="text/javascript">

$(document).ready( function () {
    
    var table = $('#data-table').DataTable({
        scrollX: true,
        processing: true,
        serverSide: true,
        ajax: "{{config('app.baseURL')}}/admin/teacher/allData",
        columns: [

               


        
             {data: 'id'},
             {data: 'name'},
             {data: 'email'},
             {data: 'phone_no'},
             {data: 'age'},

              {"targets":-1,
             "mData": "Action",
             "bSortable": false,
             "ilter":false,
             "mRender": function(data, type, row) {
             if(row.is_active==0){
              return "<a class=datatable-left-link href={{config('app.baseURL')}}/admin/user/inactive/" + row.id+"><span><button type='submit' class='btn btn-success'>Activate</button></span></a>";
              
            }
            
            else{
              return "<a class=datatable-left-link href={{config('app.baseURL')}}/admin/user/active/" + row.id+"><span><button type='submit' class='btn btn-danger'>Inactivate</button></span></a>";
               }
            },
          },



          {"targets":-1,
             "mData": "Action",
             "bSortable": false,
             "ilter":false,
             "mRender": function(data, type, row) {
               
               return "<a class=datatable-left-link href={{config('app.baseURL')}}/admin/user/update/" + row.id+"><span><button type='submit' class='btn btn-primary'>Update</button></span></a>";
                            
                                       


            },
          },


            {"targets":-1,
             "mData": "Action",
             "bSortable": false,
             "ilter":false,
             "mRender": function(data, type, row) {
               
               return "<a class=datatable-left-link href={{config('app.baseURL')}}/admin/user/change-password/" + row.id+"><span><button type='submit' class='btn btn-primary'>Change Password</button></span></a>";
                            
                                       


            },
          },


    
        ]
    });
    

});
</script>

 <link href="{{config('app.baseURL')}}/assets/css/toaster.css" rel="stylesheet" />


 <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>


     <script src="{{config('app.baseURL')}}/assets/js/toaster.min.js"></script>
     <script src="{{config('app.baseURL')}}/assets/js/jquery.min.js"></script>


<script src="{{config('app.baseURL')}}/assets/js/notify.min.js" type="text/javascript"></script>
<script src="{{config('app.baseURL')}}/assets/js/bootstrap.min.js" type="text/javascript"></script>  

 

 <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/js/toastr.js"></script>
 <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.0/css/toastr.css" rel="stylesheet" />
 <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.0/js/toastr.js"></script>




<script>
 

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
$('#l1').removeClass('nav-item');
$('#l2').addClass('nav-item');
$('#l3').removeClass('nav-item');
$('#l4').removeClass('nav-item');
$('#l5').removeClass('nav-item');

</script>





<!-- datatable js -->
<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap.min.js"></script>


@endsection

