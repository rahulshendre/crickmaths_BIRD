<!DOCTYPE html>
<html lang="en">
	<head>

		<meta charset="utf-8">
		<meta content="width=device-width, initial-scale=1, shrink-to-fit=no" name="viewport">
		<meta name="description" content="Dashlead -  Admin Panel HTML Dashboard Template">
		<meta name="author" content="Spruko Technologies Private Limited">
		<meta name="keywords" content="sales dashboard, admin dashboard, bootstrap 4 admin template, html admin template, admin panel design, admin panel design, bootstrap 4 dashboard, admin panel template, html dashboard template, bootstrap admin panel, sales dashboard design, best sales dashboards, sales performance dashboard, html5 template, dashboard template">

<!-- 		<link rel="stylesheet" href="{{config('app.baseURL')}}/assets/bootstrap/css/bootstrap.min.css">
 -->
		<!-- Favicon -->
<!-- 		<link rel="icon" href="admin-assets/img/brand/favicon.ico" type="image/x-icon">
 -->
		<!-- Title -->
<!-- 		<title>Dashlead -  Admin Panel HTML Dashboard Template</title>
 -->

	    <script src="{{config('app.baseURL')}}/assets/js/jquery-1.12.4.min.js"></script>
		<script src="{{config('app.baseURL')}}/assets/js/jquery.countdown.min.js"></script>
		<script src="{{config('app.baseURL')}}/assets/js/jquery.counterup.min.js"></script>




		<!-- Jquery js-->
		<script src="{{config('app.baseURL')}}/admin-assets/plugins/jquery/jquery.min.js"></script>

		<!---Fontawesome css-->
		<!-- <link href="admin-assets/plugins/fontawesome-free/css/all.min.css" rel="stylesheet"> -->

		<!---Ionicons css-->
<!-- 		<link href="admin-assets/plugins/ionicons/css/ionicons.min.css" rel="stylesheet">
 -->
		<!---Typicons css-->
		<link href="{{config('app.baseURL')}}/admin-assets/plugins/typicons.font/typicons.css" rel="stylesheet">

		<!---Feather css-->
		<link href="{{config('app.baseURL')}}/admin-assets/plugins/feather/feather.css" rel="stylesheet">

		<!---Falg-icons css-->
		<link href="{{config('app.baseURL')}}/admin-assets/plugins/flag-icon-css/css/flag-icon.min.css" rel="stylesheet">

		<!---Style css-->
		<link href="{{config('app.baseURL')}}/admin-assets/css/style.css" rel="stylesheet">
		<link href="{{config('app.baseURL')}}/admin-assets/css/custom-style.css" rel="stylesheet">
		<link href="{{config('app.baseURL')}}/admin-assets/css/skins.css" rel="stylesheet">
		<link href="{{config('app.baseURL')}}/admin-assets/css/dark-style.css" rel="stylesheet">
		<link href="{{config('app.baseURL')}}/admin-assets/css/custom-dark-style.css" rel="stylesheet">

		<!---Select2 css-->
<link href="{{config('app.baseURL')}}/admin-assets/plugins/select2/css/select2.min.css" rel="stylesheet">
<!--Mutipleselect css-->
<link rel="stylesheet" href="{{config('app.baseURL')}}/admin-assets/plugins/multipleselect/multiple-select.css">
<!---Jquery.mCustomScrollbar css-->
<link href="{{config('app.baseURL')}}/admin-assets/plugins/jquery.mCustomScrollbar/jquery.mCustomScrollbar.css" rel="stylesheet">

		<!---Sidebar css-->
		<link href="{{config('app.baseURL')}}/admin-assets/plugins/sidebar/sidebar.css" rel="stylesheet">

		<!---Sidemenu css-->
		<link href="{{config('app.baseURL')}}/admin-assets/plugins/sidemenu/sidemenu.css" rel="stylesheet">
		
		
		<!---Switcher css-->
		<link href="{{config('app.baseURL')}}/admin-assets/switcher/css/switcher.css" rel="stylesheet">
		<link href="{{config('app.baseURL')}}/admin-assets/switcher/demo.css" rel="stylesheet">	</head>

		<style type="text/css">
			.btn-main-primary {
    color: #fff;
    background-color: #59d3e0;
    border-color: #59d3e0;
}
.fullbtn{
    display: flex;
    flex-direction: row-reverse;

}
.add-btn{
    position: relative;
    right: 83px;
}
.side-menu .nav-link:hover {
    color: #59d3e0!important;
}
.dataTables_length{
      margin-left: -836px;

}
.pagination a{

	color: #59d3e0;
}

.previous{
	    margin-right: 3px;
}

.next{
	    margin-left: 3px;


}

.pagination .active a{
	    color: white;

}

.dataTables_info {
    margin-left: -338px;
}

.pagination .active {
	padding-left: 2px!important;
    background-color: #59d3e0!important;
    padding-right: 2px!important;
}

.pagination {
    display: flex;
    padding-left: 0;
    list-style: none;
    gap: 5px

}

.btn-primary{


    background-color: #59d3e0;

}

.dataTables_length select{
	    border-radius: 12px!important;

}
.dataTable_filter{
	float: right;
}

#data-table_filter input{ border-radius: 10px;
    margin-left: 5px;
   }

   #back-to-top{
   	    background-color: #59d3e0!important;
}

.breadcrumb-item a{
	color: #59d3e0!important;
}


#data-table_wrapper{
      overflow-x: scroll;

}
#data-table_wrapper::-webkit-scrollbar {
  width: 30px;
  cursor: pointer;
}
#data-table_wrapper::-webkit-scrollbar-thumb {
  background: #59d3e0;
}
#data-table_wrapper::-webkit-scrollbar-thumb:hover {
  background: #59d3e0;
}
#data-table_wrapper::-webkit-scrollbar-track {
  background: #f1f1f1;
}
/*.content-wrapper{
      overflow: auto;

}*/

.main-footer{
	    margin-top: 10px;

}

.btn-primary:hover {
    color: #fff;
    background-color: #59d3e0;
    border-color: #59d3e0;
}

.side-menu .nav-link:hover {
    color: #fff!important;
}


.card{
	    padding: 10px!important;

}


/*@media screen and (min-width: 1100px) and (min-width: 1600px) {

   .dataTables_filter{
    margin-top: -55px!important;
    margin-left: 780px!important;
   }

   .add-btn {
    margin-top: 10px;
    margin-left: 861px;
  }
  .dataTables_paginate {
    margin-left: 900px!important;
   
}
}*/




 .ripple{
   width: 110px;

 }

 .btn-main-primary:hover {
    color: #fff;
    background-color: #59d3e0;
    border-color: #59d3e0;
}


 .btn-primary:not(:disabled):not(.disabled):active, .btn-primary:not(:disabled):not(.disabled).active, .show>.btn-primary.dropdown-toggle {
    color: #fff;
    background-color: #59d3e0;
    border-color: #59d3e0;
}

 .btn-primary {
    
    border-color: #59d3e0;
}


.main-header-menu-icon {
    margin-right: 1050px;
    width: 20px;
    height: 30px;
    display: flex;
    align-items: center;
}
@media screen and  (max-width: 2000px){
.dataTables_filter {
    
    margin-left: 200%;
}
.dataTables_filter {
    position: relative;
    left:77%;
}
}
@media screen and  (max-width: 1300px){
.dataTables_filter {
    
    margin-left: -4%;
}
.dataTables_filter {
    position: relative;
    left: 155%;
}
}

@media screen and (max-width: 500px){
	.breadcrumb {
     margin-top: 0px !important; 
}
label {
       width: 180px;
    text-align: left;
    display: flex;
}
.dataTables_length {
    margin-left: 6px !important;
}
.dataTables_filter {
     margin-left: 0px !important; 

   left: 0%;

}

.dataTables_paginate {
	margin-left: 0px !important;
}
.dataTables_length label select{
     width: 60%;
}
#addtop{
	margin-top: 17%;
}
}
		</style>
   
<style type="text/css">
#data-table_wrapper div:nth-child(1){
width: 100%
}
#data-table_wrapper div:nth-child(2){
width: 100%
}
#data-table_wrapper div:nth-child(3){
width: 100%
}
    .dataTables_info {
    margin-left: 0px;
}

#data-table_paginate{

    float: right;
    right: 3%;
    position: relative;
    padding-left: 70%;
}
.dataTables_length {
    margin-left: -982px;
}

.content-wrapper{
  margin-left: 250px;
      margin-right: 10px;

}
      
.row{
      margin-top: 10px;

}

/*.col-sm-12{
  width: 1266px;
}
*/

  
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
}






.input-sm{
      margin-left: 5px;
    margin-right: 5px;

}

.btn{
      border-radius: 10px;
float: left;
}
.dataTables_length {
     margin-left: 0px !important; 
         padding-right: 60%;
}
.dataTables_filter {
   position: relative; 
   left: 0%; 
   margin-left: 0% !important;
}
@media screen and (max-width: 2000px){
.dataTables_filter {
   position: relative; 
   left: 23%; 
   margin-left: 0% !important;
}
}
@media screen and (max-width: 1400px){

  


  .dataTables_paginate {
    margin-left: 210px;
   
}

}

@media screen  and (min-width: 1200px) and (max-width: 1399px){

   .content-wrapper {
    margin-left: 250px!important;
    margin-right: 5px!important;
}

.dataTables_length {
    margin-left: -975px;
}
.dataTables_info {
    margin-left: 0px;
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
@media screen  and (min-width: 1000px) and (max-width: 1100px){
.fullbtn{
display: flex;

}
   .content-wrapper {
    margin-left: 250px!important;
    margin-right: 5px!important;
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


.dataTables_paginate {
    margin-left: -146px;
}
/*.dataTables_filter {
    margin-left: -162px!important;
    
}*/

/*.dataTables_info {
    margin-left: -592px;
}*/
.dataTables_length {
    margin-left: 0px !important;
    position: relative;
    right: 88%;
}
.dataTables_info {
    /* margin-left: -101px; */
    position: relative;
    right: 109%;
}

.dataTables_filter {
    position: relative;
    left: -66%;
  }
  #data-table_paginate {
    float: right;
    right: 27%;
    position: relative;
     padding-left: 0%; 
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
@media screen and (min-width: 910px) and (max-width: 999px){
.add-btn{
  float: right
}
   .content-wrapper {
    margin-left: 5px!important;
    margin-right: 5px!important;
}

/*.dataTables_filter {

    margin-left: -70px!important;
}*/

.dataTables_info {
    margin-left: -408px;
}

.main-footer{
      margin-top: 5px;

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
@media screen and (min-width: 760px) and (max-width: 900px){
.fullbtn{
    display: flex;
   flex-direction: row;

}
.add-btn{
    
    right: 0px;
}
   .content-wrapper {
    margin-left: 5px!important;
    margin-right: 5px!important;
}

.dataTables_filter {

    margin-left: -304px!important;
}

.dataTables_length {
    
        right: 87%;
    position: relative;

}

.dataTables_info {
    margin-left: -310px;
}


.main-footer{
      margin-top: 5px;

}
#data-table_paginate {
    float: right;
    right: 34%;
    position: relative;
    margin-left: 0px;
    padding-left: 0%;
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
@media screen and (min-width: 551px) and (max-width: 750px){
.fullbtn{
    display: flex;
   flex-direction: row;

}
.add-btn{
    
    right: 0px;
}
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
/*@media screen and (max-width: 500px){
.dataTables_filter {
    margin-left: 0px ;
    left: -117%;
}


.dataTables_length {
    margin-left: -117% !important;
}

}*/

/*@media screen and (min-width: 539px) and (max-width: 549px){

 .dataTables_filter {

    left: -256%!important;
}


.dataTables_length {
    margin-left: -544px!important;
}

.dataTables_length .form-control {
    width: 38%;

}



}*/

@media screen and (min-width: 451px) and (max-width: 550px){
.fullbtn{
    display: flex;
   flex-direction: row;

}
.add-btn{
    
    right: 0px;
}
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
label{
    width: 180px;
}


.col-12{
      margin-top: 49px;

}
   
}
@media screen and (min-width: 400px) and (max-width: 450px){
.fullbtn{
    display: flex;
   flex-direction: row;

}
.add-btn{
    
    right: 0px;
}
   .content-wrapper {
    margin-left: 5px!important;
    margin-right: 5px!important;
}

.add-btn{
  float: left
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
    position: relative;
     left: 0%; 
    margin-left: 0% !important;
}
label{
    width: 180px;
}



   
   .col-12{
      margin-top: 49px;

}
#data-table_paginate {
  
    position: relative;
    padding-left: 3%;
}
}
@media screen and (min-width: 300px) and (max-width: 399px){
.fullbtn{
    display: flex;
   flex-direction: row;

}
.add-btn{
    
    right: 0px;
}
   .content-wrapper {
    margin-left: 5px!important;
    margin-right: 5px!important;
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
.dataTables_filter {
    position: relative;
     left: 0%; 
    margin-left: 0% !important;
}
#data-table_paginate {
    float: right;
    right: 3%;
    position: relative;
     padding-left: 3%; 
}
   
}

@media screen and (min-width: 250px) and (max-width: 290px){
.fullbtn{
    display: flex;
   flex-direction: row;

}
.add-btn{
    
    right: 0px;
}
    .dataTables_info {
    margin-left: 0px;
    position: relative;
    right: 196%!important;
 }

}

@media screen and (min-width: 200px) and (max-width: 299px){
.fullbtn{
    display: flex;
   flex-direction: row;

}
.add-btn{
    
    right: 0px;
}
   .content-wrapper {
    margin-left: 5px!important;
    margin-right: 5px!important;
}

.main-footer{
      margin-top: 5px;

}

.dataTables_filter {

    left: -257%!important;
}


.dataTables_length {
    margin-left: -543px !important;
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

.dataTables_info {
    margin-left: 0px;
    position: relative;
    right: 208%!important;
}
}
</style>

	<body>



@include('layouts.admin_header')
@include('layouts.admin_manu')
  @yield('content')
@include('layouts.admin_footer')





		</div>
		<!-- End Page -->
		<!-- Back-to-top -->
		<a href="#top" id="back-to-top"><i class="fe fe-arrow-up"></i></a>
<!-- Jquery-Ui js-->
<script src="{{config('app.baseURL')}}/admin-assets/plugins/jquery-ui/ui/widgets/datepicker.js"></script>
		<!-- Bootstrap js-->
		<script src="{{config('app.baseURL')}}/admin-assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

		<!-- Ionicons js-->
		<script src="{{config('app.baseURL')}}/admin-assets/plugins/ionicons/ionicons.js"></script>
		
		<!-- Rating js-->
		<script src="{{config('app.baseURL')}}/admin-assets/plugins/rating/jquery.rating-stars.js"></script>

		<!-- Flot Chart js-->
<script src="{{config('app.baseURL')}}/admin-assets/plugins/jquery.flot/jquery.flot.js"></script>
<script src="{{config('app.baseURL')}}/admin-assets/plugins/jquery.flot/jquery.flot.resize.js"></script>
<script src="{{config('app.baseURL')}}/admin-assets/js/chart.flot.sampledata.js"></script>
<!-- Chart.Bundle js-->
<script src="{{config('app.baseURL')}}/admin-assets/plugins/chart.js/Chart.bundle.min.js"></script>
<!-- Peity js-->
<script src="{{config('app.baseURL')}}/admin-assets/plugins/peity/jquery.peity.min.js"></script>

<!-- Select2 js-->
<script src="{{config('app.baseURL')}}/admin-assets/plugins/select2/js/select2.min.js"></script>
<!--MutipleSelect js-->
<script src="{{config('app.baseURL')}}/admin-assets/plugins/multipleselect/multiple-select.js"></script>
<script src="{{config('app.baseURL')}}/admin-assets/plugins/multipleselect/multi-select.js"></script>
<!-- Jquery.mCustomScrollbar js-->
<script src="{{config('app.baseURL')}}/admin-assets/plugins/jquery.mCustomScrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
<!-- index -->
<script src="{{config('app.baseURL')}}/admin-assets/js/index.js"></script>
		
		<!-- Perfect-scrollbar js-->
		<script src="{{config('app.baseURL')}}/admin-assets/plugins/perfect-scrollbar/perfect-scrollbar.min.js"></script>

		<!-- Sidemenu js-->
		<script src="{{config('app.baseURL')}}/admin-assets/plugins/sidemenu/sidemenu.js"></script>
		
		<!-- Sidebar js-->
		<script src="{{config('app.baseURL')}}/admin-assets/plugins/sidebar/sidebar.js"></script>

		<!-- Sticky js-->
		<script src="{{config('app.baseURL')}}/admin-assets/js/sticky.js"></script>
		
		<!-- Switcher js-->
		<script src="{{config('app.baseURL')}}/admin-assets/switcher/js/switcher.js"></script>
		
		<!-- Custom js-->
		<script src="{{config('app.baseURL')}}/admin-assets/js/custom.js"></script>

<!-- 	<script type="text/javascript">
		  $(document).ready(function(){
		  
		  	if ($(window).width() < 514) {
    $('.col-sm-6').addClass('col-sm-12','col-sm-6');
      
}
		  });

	</script> -->

	</body>
</html>		