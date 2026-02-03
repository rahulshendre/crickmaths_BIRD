@extends('layouts.app')
@section('content')

<style type="text/css">
   
         .header-layout1{
        display: none;
    }

 .space-extra, .space-extra-bottom {
margin-top: 13%;
}
.findUs{
    font-family: "Baloo Da 2", sans-serif !important;
}
.form-group label{
     font-family: "Baloo Da 2", sans-serif !important;
}
</style>


<!-- <section class="space-top space-extra-bottom">
<div class="container">
<div class="row"> -->
<!-- <div class="col-md-4">
<div class="info-style2">
<div class="info-icon">
<img src="assets/img/icon/c-b-1-1.svg" alt="icon">
</div>
<h3 class="info-title">Phone No</h3>
<p class="info-text">
<a href="tel:+4402076897888" class="text-inherit">+44 (0) 207 689 7888</a>
</p>
</div>
</div> -->
<!-- <div class="col-md-4">
<div class="info-style2">
<div class="info-icon">
<img src="assets/img/icon/c-b-1-3.svg" alt="icon">
</div>
<h3 class="info-title">Email Address</h3>

<a href="mailto:info@planetread.org" class="text-inherit">info@planetread.org
</a>
</div>
</div>
<div class="col-md-4">
<div class="info-style2">
<div class="info-icon">
<img src="assets/img/icon/c-b-1-3.svg" alt="icon">
</div>
<h3 class="info-title">Email Address</h3>
<p class="info-text">
<a href="mailto:vivaandaga@gmail.com" class="text-inherit">vivaandaga@gmail.com
</a>
</p>
</div>
</div>
</div>
</div> -->
<!-- </section> -->
<section class="space-extra-bottom">
<div class="container">
<div class="row flex-row-reverse gx-60 justify-content-between">
<div class="col-xl-auto">
<img src="assets/img/login2.png" alt="girl" class="w-100" style="border-radius: 20px;">
</div>
<div class="col-xl col-xxl-6 align-self-center">
<div class="title-area">
<span class="sec-subtitle">Have Any questions?</span>
<h2 class="sec-title">Feel Free to Contact!</h2>
</div>
<form method="POST" action="{{config('app.baseURL')}}/contact" class="form-style3 layout2 ">
@csrf
<div class="row justify-content-between">
<div class="col-md-6 form-group">
<label>First Name 
<span class="required">(Required)</span>
</label> 
<input required name="firstname" id="firstname" type="text">
</div>
<div class="col-md-6 form-group">
<label>Last Name 
<span class="required">(Required)</span>
</label> 
<input required name="lastname" id="lastname" type="text">
</div>
<div class="col-md-6 form-group">
<label>Email Address 
<span class="required">(Required)</span>
</label> 
<input required name="email" id="email" type="email">
</div>
<div class="col-md-6 form-group">
<label>Phone Number
</label> 
<input  name="phone_no" id="number" type="number" onkeypress="if(this.value.length==10) return false;">
</div>
<div class="col-12 form-group">
<label>Message 
<span class="required">(Required)</span>
</label> 
<textarea required name="message" cols="30" rows="4" placeholder="Type your message">
</textarea>
</div>
<div class="col-auto form-group">
<button class="vs-btn" type="submit">Send Message
</button>
</div>
<p class="form-messages"></p>
</div>
</form>
</div>
</div>
</div>
</section>




<section class="space-bottom">
<div class="container">
<div class="title-area">
<h2 class="mt-n2 findUs">How To Find Us</h2>
</div>
<div class="map-style1">
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3903.4831444531187!2d79.83412417505947!3d11.941014388287641!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a5363d672c57217%3A0x33565fa1f7c727c2!2sPlanetRead!5e0!3m2!1sen!2sin!4v1711637216074!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</div>
</div>
</section>


@endsection
