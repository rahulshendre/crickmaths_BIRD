@extends('layouts.admin-app')
@section('content')

<script src="{{config('app.baseURL')}}/assets/js/jquery.min.js"></script>
<!-- <script src="{{config('app.baseURL')}}/assets/js/bootstrap.min.js"></script>
 -->

<style type="text/css">
  .col-sm-12{
     margin-top: 100px;"
  }

  /*.col-sm-5{
        margin-top: 364px;
  }

  .col-sm-7{
        margin-top: 374px;
  }*/

  .dataTables_scroll{
       margin-right: 15px;
    margin-left: 15px;
}



.dataTables_length{
  
  margin-left: 10px;
}

.dataTables_filter{
    margin-top: -55px!important;
    margin-left: 999px!important;
}

  .dataTables_info{
    margin-left: 10px;
  }
  /*.row{
    margin-right: -163px;
  }
*/
  label{
        margin-top: 19px;

  }

  .card-title{
        margin-top: 13px;

  }

  .card-header{
        margin-top: -70px;

  }

.add-btn{

  margin-top: 10px;
    margin-left: 1111px;
    background:: #5ce1e6;

}
  .dataTables_wrapper .dataTables_filter input {
    margin-left: 2px;
    border: 1px solid #e1e6f1;
}
}

.dataTables_wrapper .dataTables_filter input {
    margin-left: 2px;
    border: 1px solid black;

  }

 .form-control {
    border-radius: 43px;
}

.form-control{
      border: 1px solid black;

}

input, button, select, optgroup, textarea {
    margin: 3px;
  }

  .content-wrapper{
  overflow-y: hidden!important;
}

.card-title{
        margin-top: 16px;
        margin-left: 21px;


  }

  @media screen and (max-width: 1400px){

   .dataTables_filter{
    margin-top: -55px!important;
    margin-left: 850px!important;
   }

   .add-btn {
    margin-top: 10px;
    margin-left: 950px;
  }
}




</style>





<body>

<div class="content-wrapper">

  <div class="content-header row">
    <div class="content-header-left col-md-9 col-12 mb-2">
      <div class="row breadcrumbs-top">
        <div class="col-12">
           <h4 class="card-title" style="color:  #880808;">All Question Category</h4>
          <div class="breadcrumb-wrapper col-12">
            <ol class="breadcrumb">

              <li class="breadcrumb-item">
                <a > Home </a>
              </li>
              <li class="breadcrumb-item">
                <a >Question Category</a>
              </li>
              <li class="breadcrumb-item" style="color: blue;">
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
    <div class="col-12" >
      <div class="card">

        <a href="{{config('app.baseURL')}}/admin/question-category/add" > <button type="submit" class="btn pull-right btn btn-primary panel-button add-btn">Add Question Category</button></a><br>
        
        
        <div class="card-header col-md-3">
          <h4 class="card-title" style="color:  #880808;">All Question Category</h4>
         
        </div>

  <body>  

    <table class="table zero-configuration-resposive scroll"  id="data-table" width="100%">
           <thead>
            <tr>
                  <th>Category</th>
                  <th>Url</th>
                  <th>Image</th>
                  <th>Edit</th>
                  <th>Status</th>
                  <th>Delete</th>

                  
           </tr>
          </thead>

          
      </table>
    </div>
   
</div>
</div>
</div>
</body>


<script type="text/javascript">
$(document).ready( function () {
    var table = $('#data-table').DataTable({
        scrollX: true,
        processing: true,
        serverSide: true,
        ajax: "{{config('app.baseURL')}}/admin/question-category/allData",
        columns: [
        
             {data: 'category'},
             {data: 'url'},

              {
                'mRender':function(data,type,row){
                return "<img src={{config('app.baseURL')}}/storage/app/"+ row.image +" style=width:50%>";
            }
          },
        

           {"targets":-1,
             "mData": "Action",
             "bSortable": false,
             "ilter":false,
             "mRender": function(data, type, row){
              return "<a class=datatable-left-link href={{config('app.baseURL')}}/admin/question-category/edit/" + row.id+"><span><button type='submit' class='btn btn-primary mr-1'>Edit</button></span></a>";

             },
        },

        
             {"targets":-1,
             "mData": "Action",
             "bSortable": false,
             "ilter":false,
             "mRender": function(data, type, row) {
             if(row.is_active==0){
              return "<a class=datatable-left-link href={{config('app.baseURL')}}/admin/question-category/active/" + row.id+"><span><button type='submit' class='btn btn-danger '> Inactivate</button></span></a>";
              
            }
            
            else{
              return "<a class=datatable-left-link href={{config('app.baseURL')}}/admin/question-category/inactive/" + row.id+"><span><button type='submit' class='btn btn-success'>Activate</button></span></a>";
               }
            },
          },

        {"targets":-1,
             "mData": "Action",
             "bSortable": false,
             "ilter":false,
             "mRender": function(data, type, row){
              return "<a class=datatable-left-link href={{config('app.baseURL')}}/admin/question-category/delete/" + row.id+"><span><button type='submit' class='btn btn-danger mr-1'>Delete</button></span></a>";

             },
        },




        





        ]
    });
    
  });
</script>
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
$('#l1').addClass('nav-item');
$('#l2').removeClass('nav-item');
$('#l3').removeClass('nav-item');
</script>
</body>
</html>



<!-- datatable js -->
<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<!-- <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap.min.js"></script>
 -->@endsection

