@extends('layouts.app')
@section('content')

<style type="text/css">
	.contact-section {
    text-align: center;
    margin: 20px;
    padding: 5% 34%;
}

.contact-btn {
    background-color: #d70000; /* Red background */
    color: white;
    padding: 10px 20px;
    border-radius: 10px;
    position: relative;
    font-size: 18px;
    font-weight: bold;
    cursor: pointer;
    display: inline-flex;
    align-items: center;
    justify-content: center;
}

.chat-icon {
    width: 40px;
    height: 40px;
    background-color: #4CAF50; /* Green background for icon */
    border-radius: 50%;
    display: flex;
    justify-content: center;
    align-items: center;
    margin-left: 10px;
    position: relative;
}

.chat-letter {
    color: white;
    font-size: 20px;
    font-weight: bold;
}

/*body {
    font-family: Arial, sans-serif;
}
*/
.contact-form-section {
    margin-top: 20px;
}

.character-img {
    width: 200px;
    height: auto;
    margin-bottom: -46px; /* To position the image overlapping the form */
}

.contact-form {
    background: url('{{ asset('assets/img/contact/rectangle.png') }}') no-repeat center;
    border-radius: 15px;
    padding: 30px;
    max-width: 800px;
    margin: auto;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

.contact-form label {
    font-family: Signika;
font-size: 15px;
font-weight: 400;
/*line-height: 60px;
*/
    float: inline-start;


}

.contact-form .form-control {
    border-radius: 12px;
    border: 1px solid #ccc;
}

.contact-form .btn {
    background: #459F01;

    border: none;
    border-radius: 10px;
    padding: 10px 20px;
    font-size: 16px;
    color: #FFFFFF;

    font-family: Signika;
font-weight: 400;
line-height: 19.5px;
text-align: center;

}

.contact-form-section {
    background-image: url('{{ asset('assets/img/contact/vector.png') }}'); /* Add your background image here */
    background-size: cover;
    background-repeat: no-repeat;
/*    background-position: center;
*/    padding: 28px 0;
    text-align: center;

    background-size: 100% 68%; /* Stretch image to fit width and height */

}


@media (max-width: 767px) {

.contact-section {
    text-align: center;
    margin: 0px;
    padding: 5% 2%;
}

}

@media (max-width: 1200px) {

.contact-section {
    text-align: center;
    margin: 0px;
    padding: 5% 12%;
}

   .contact-btn {
    background-color: #d70000;
    color: white;
    padding: 9px 20px;
    border-radius: 10px;
    position: relative;
    font-size: 24px;
    font-weight: bold;
    cursor: pointer;
    display: inline-flex;
    align-items: center;
    justify-content: center;
}


}

</style>

<div class="contact-section">
    <div class="contact-btn d-flex align-items-center justify-content-center">
        <span>Contact us if you have any questions!</span>
        <!-- <div class="chat-icon">
            <span class="chat-letter">A</span>
        </div> -->
    </div>
</div>

<section class="contact-form-section">
	<!-- <div class="chat-icon">
            <span class="chat-letter">A</span>
        </div> -->
	    <img src="{{config('app.baseURL')}}/assets/img/contact/caractor.png" alt="Character Image" class="character-img"> <!-- Your character image -->

<div class="contact-form-section text-center">

    <div class="container">
        <form class="contact-form p-4">
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="firstName">First Name (Required)</label>
                    <input type="text" class="form-control" id="firstName" >
                </div>
                <div class="form-group col-md-6">
                    <label for="lastName">Last Name (Required)</label>
                    <input type="text" class="form-control" id="lastName">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="email">Email Address (Required)</label>
                    <input type="email" class="form-control" id="email" >
                </div>
                <div class="form-group col-md-6">
                    <label for="phone">Phone Number</label>
                    <input type="text" class="form-control" id="phone" >
                </div>
            </div>
            <div class="form-group">
                <label for="message">Message (Required)</label>
                <textarea class="form-control" id="message" rows="3"></textarea>
            </div>
            <button type="submit" class="btn btn-success">Send Message</button>
        </form>
    </div>
</div>
</section>

@endsection