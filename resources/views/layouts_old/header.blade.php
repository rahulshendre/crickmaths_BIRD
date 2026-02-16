<link href="https://fonts.googleapis.com/css2?family=Baloo+Da+2:wght@400..800&display=swap" rel="stylesheet">
<style type="text/css">
    .main-menu a {
font-family: "Baloo Da 2", sans-serif !important;
    font-weight: 400;
}
    .header-logo {
    max-width: 300px;
}
.header-links.style3 i {
    border: 2px solid #cc0000;
    color: #ffff;
  }
      
  .menu-style1>ul>li>a {
    padding: 0px 0;
}
   .header-layout2 .menu-area {
        background-color: green;
    }
    .displayIcon{
          display: flex;
    align-items: center;
    }
    .header-layout2 .header-logo {
     margin-right: 0px; 
}
.slogen{
        text-align: center;
}
.gx-3{
  padding: 1%;
}
.playBtn{
  margin-top: 4%;
  margin-bottom: 4%;
  position: relative;
  left: 14%;
}
.emailId{
    font-family: "Baloo Da 2", sans-serif !important;
    font-size:20px;
}
@media (max-width:768px){
 .playBtn {
    margin-top: 4%;
    margin-bottom: 4%;
    position: relative;
    left: 9%;
}
}
</style>

<header class="vs-header header-layout2">
   <div class="vs-menu-wrapper">
            <div class="vs-menu-area text-center"><button class="vs-menu-toggle"><i class="fal fa-times"></i></button>
                <div class="mobile-logo"><a href="index.html"><img src="{{config('app.baseURL')}}/assets/img/image002.png" alt="Cricmaths"></a></div>
                <div class="vs-mobile-menu">
                    <ul>
                      <li><a href="{{config('app.baseURL')}}/">Home</a></li>
                      <li><a href="{{config('app.baseURL')}}/about">About Us</a></li>
<li>
               <a href="{{config('app.baseURL')}}/gallery">Gallery</a>
               </li>
                      <li>
               <a href="{{config('app.baseURL')}}/contact">Contact</a>
               </li>
              
                    </ul>
                </div>
            </div>
        </div>
	<div class="header-top">
		<div class="container">
			<div class="row align-items-center justify-content-between" style="    margin-bottom: 5px;    margin-top: 5px;">
				<div class="col col-sm-auto displayIcon">
					<div class="header-logo">
					<a href="{{config('app.baseURL')}}/">
               <img src="{{config('app.baseURL')}}/assets/img/image002.png" alt="logo">
             </a>
            <!-- <p class="slogen" style="position: relative; left: 15%;" >Where Numbers Meet Cricket!</p> -->

               </div>
               
               </div>

               <div class="col-6 col-sm-auto d-none d-lg-block">
               <div class="header-links style3 style-white">
               <ul><li class="d-none d-xl-inline-block" style="font-size:20px">
               <i class="fas fa-envelope"></i><a href="mailto:vivaandaga@gmail.com" class="emailId">vivaandaga@gmail.com</a></li>
                     
               <!-- <li><i class="fas fa-mobile-alt"></i>Phone: <a href="tel:+4402076897888">+44 (0) 207 689 7888</a></li>-->
               </ul></div></div> 
               <!-- <div class="col">
               <div class="row align-items-center justify-content-end gx-3">
               <div class="col-auto d-none d-lg-block">
               <div class="header-icons">
               </div>
               </div>
               <div class="col-auto">
               <a href="{{config('app.baseURL')}}/after-start" class="vs-btn ">Play Cricket</a>
               </div></div></div> --></div></div></div>
               <div class="container">
               <div class="menu-area">
               <div class="row justify-content-between align-items-center">
               <div class="col">
               <nav class="main-menu menu-style2 d-none d-lg-block">
               <ul>
               <li>
               <a href="{{config('app.baseURL')}}/">Home</a>
               <!-- <ul class="sub-menu">
               <li>
               <a href="index.html">Demo Style 1</a>
               </li>
               <li>
               <a href="index-2.html">Demo Style 2</a>
               </li>
               <li>
               <a href="index-3.html">Demo Style 3</a>
               </li>
               </ul> -->
               </li>
               <li>
               <a href="{{config('app.baseURL')}}/about">About Us</a>
               </li>
<li>
               <a href="{{config('app.baseURL')}}/gallery">Gallery</a>
               </li>
              <!--  <li class="menu-item-has-children">
               <a href="match.html">Classes</a>
               <ul class="sub-menu">
               <li>
               <a href="class.html">Class Style 1</a>
               </li>
               <li>
               <a href="class-2.html">Class Style 2</a>
               </li>
               <li>
               <a href="class-details.html">Class Details</a>
               </li>
               </ul>
               </li> -->
          <!--      <li class="menu-item-has-children">
                <a href="{{config('app.baseURL')}}/game">Game</a>
                <ul class="sub-menu">
                <li>
                <a href="{{config('app.baseURL')}}/game">Class Style 1</a>
                </li>
                <li>
                <a href="{{config('app.baseURL')}}/game-2">Class Style 2</a>
                </li>
                <li>
                <a href="{{config('app.baseURL')}}/game-details">Class Details</a>
                </li>
                </ul>
                </li> -->
   
              
               <li>
               <a href="{{config('app.baseURL')}}/contact">Contact</a>
               </li>
         
               </ul>
               </nav>
               <button class="vs-menu-toggle d-inline-block d-lg-none">
               <i class="fal fa-bars"></i>
               </button>
               </div>
                <div class="col-auto">
              

@php
    $user = Auth::user();
    $id = $user ? $user->role_id : null;
  
@endphp

@if($id && $id == 3)
    <a href="{{ config('app.baseURL') }}/teacherGame" class="vs-btn playBtn" style="font-size:20px">Play Cricket</a>
@else
    <a href="{{ config('app.baseURL') }}/after-start" class="vs-btn playBtn" style="font-size:20px">Play Cricket</a>
@endif




              </div> 
            </div>
         </div>
      </div>
   </header>
