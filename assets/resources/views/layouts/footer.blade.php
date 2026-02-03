<style type="text/css">
    .footer {
/*    background-color: #f7f7f7;
*/    position: relative;
    padding-bottom: 100px;

     background: url('{{config('app.baseURL')}}/assets/img/vector.png') no-repeat bottom;
    background-size: cover; /* Adjust to cover the section */
}

.footer-heading {
    font-family: Spicy Rice;
    font-size: 35px;
    font-weight: 400;
    line-height: 57.91px;
    text-align: left;
    color: #B70303;
}

.email-link {
    color: #333;
    font-weight: bold;
}

.wavy-background {
    position: absolute;
    bottom: 0;
    left: 0;
    width: 100%;
    height: auto;
}

/*.footer-section{
    margin-top: 10%;
}*/

footer ul{

    text-align: left;
}

footer a {
    font-family: Signika;
/*font-size: 25px;
*/font-weight: 400;
line-height: 43.12px;
text-align: left;
color: #525252;

}


footer .container, .container-lg, .container-md, .container-sm, .container-xl {
        max-width: 1350px;
    }


footer a:hover {
    color: #d10000;
}

.email a {
    font-family: Signika;
    font-size: 25px;
    font-weight: 400;
    line-height: 43.12px;
    text-align: left;
}

.footer .logo{
    max-width: 70%!important;
}

@media (max-width: 768px) {
    .footer {
        text-align: center;
    }
}

</style>
<section class="footer-section">
<footer class="footer mt-auto py-3 position-relative">
    <div class="container">
        <div class="row text-center text-md-start">
            <div class="col-md-4 mb-3">
                <a href="{{config('app.baseURL')}}"><img src="{{config('app.baseURL')}}/assets/img/image002.png" alt="CricMaths Logo" class="logo img-fluid mb-2" ></a>
                <p class="email"><a href="mailto:vivaandaga@gmail.com" class="email-link">vivaandaga@gmail.com</a></p>
            </div>

            <div class="col-md-4 mb-3">
                <h5 class="footer-heading">Quick Links</h5>
                <ul class="list-unstyled">
                    <li><a href="{{config('app.baseURL')}}/">Home</a></li>
                    <!-- <li><a href="{{config('app.baseURL')}}/howzzat">Howzzat</a></li>
                    <li><a href="{{config('app.baseURL')}}/pavilion">Pavilion</a></li> -->
                    <li><a href="{{config('app.baseURL')}}/">About Us</a></li>
                    <li><a href="{{config('app.baseURL')}}/">Gallery</a></li>
                    <li><a href="{{config('app.baseURL')}}/cricketlingo">Cricket Lingo Land</a></li>
                </ul>
            </div>

          <!--   <div class="col-md-4 mb-3">
                <h5 class="footer-heading">Main Campus</h5>
                <p style="    text-align: left;">Address: 24, St. Francois d' Assise Street,<br>Kuruchikuppam,<br>Puducherry 605012, INDIA.</p>
            </div> -->
        </div>
    </div>
</footer>
</section>