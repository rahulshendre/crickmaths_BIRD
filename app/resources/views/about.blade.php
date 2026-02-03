@extends('layouts.app')
@section('content')

<style type="text/css">
    .header-layout1 {
        display: none;
    }
    .img-size{
        width: 500px !important;
    }
    .padding-bottom{
        padding-bottom: 150px;
        padding-top: 150px;
    }

    p {
        text-align: justify;
    }
    .bg-grey{
        background-color: #ddd;
    }

    .space-extra,
    .space-extra-bottom {
        margin-top: 6%;
    }
    .bgimg{
background: url(assets/img/cricket-bat.jpg);
    background-repeat: no-repeat;
    background-size: 100% 100%;
    }
    .text-white p{
        color: #ffff;
    }
     .text-white h2{
        color: #ffff;
    }
    .sec-title2, .sec-title {
    font-size: 45px;
    margin-top: -0.25em;
    margin-bottom: 10px;
    text-transform: capitalize;
}
    @media screen and (max-width:600px){
  
    }
</style>



<section class="space-top space-extra-bottom">
    <div class="container">
        <div class="row align-items-center justify-content-between flex-row-reverse">
            <div class="col-lg-6 col-xl-auto text-center text-lg-end">
                <div class="img-box2">
                    <div class="transform-banner">
                        <img src="assets/img/about2.png" alt="about" class="img-size">
                    </div>
                   <!--  <div class="vs-circle jump">
                    </div>
 -->                </div>
            </div>
            <div class="col-lg-6 text-center text-lg-start">
                <h2 class="sec-title me-xxl-5"> Welcome to CricMaths </h2>
                <p class="sec-text col-xl-10 pe-4 mb-4">Where the thrilling world of cricket intersects with the fascinating realm of mathematics, creating an innovative platform that aims to transform the way children perceive and engage with numbers.</p><p class="sec-text col-xl-10 pe-4 mb-4">
Cricket, deeply embedded in the cultural fabric of India, is adored by millions, transcending boundaries and uniting diverse communities. On the other hand, maths often carries the reputation of being a daunting subject, creating apprehension and fear. CricMaths emerges as a solution to this dilemma, striving to infuse the joy and excitement of mathematics during the formative years, fostering a genuine love for the subject.</p>
                <div class="row justify-content-center justify-content-lg-start text-start">
                    <div class="col-auto">
                        <div class="list-style1">
                            <!-- <ul class="list-unstyled">
<li>Comprehensive reporting on individual achievement</li>
<li>Educational field trips and school presentations</li>
<li>Individual attention in a small-class setting</li>
<li>Learning program with after-school care</li>
</ul> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
    <section class="space-top bg-grey">
        <div class="container">
            <div class="title-area text-center">
                <!-- <div class="sec-bubble">
                    <div class="bubble"></div>
                    <div class="bubble"></div>
                    <div class="bubble"></div>
                </div> -->
                <h2 class="sec-title text-start">The Team</h2>
                
            </div>
            <div class="row align-items-center">
        
                <div class="col-sm-6 col-lg-3">
                    <div class="team-style2">
                        <div class="team-img"><a><img src="assets/img/raj.jpg"
                                    alt="team"></a></div>
                        <h3 class="team-name"><a class="text-inherit" >Brij Kothari</a></h3>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="team-style2">
                        <div class="team-img"><a href=""><img src="assets/img/vivaan.jpg"
                                    alt="team"></a></div>
                        <h3 class="team-name"><a class="text-inherit">Vivaan Daga</a></h3>
                    </div>
                </div>
                        <div class="col-lg-6">
                    <div class="team-style1">
                       
                <p class="sec-text mb-4 pb-2 col-xxl-10">In a conversation between Brij Kothari, Founder of
                    PlanetRead, a not-for-profit organization dedicated to global literacy, and Vivaan Daga, a high
                    school Maths enthusiast from Gurgaon, India, the seeds of this initiative were sown. It all began
                    with a shared passion for cricket and a mission to bridge the gap in maths education.</p>
                    </div>
                </div>
            </div>
            <div class="row text-center text-lg-start mt-lg-5 pt-4 align-items-center justify-content-between">
              
            </div>
        </div>
    </section>
<!-- <div class="space-extra-bottom">
<div class="container">
<div class="row justify-content-between">
<div class="col-6 col-md-6 col-lg-auto">
<div class="vs-media media-style1 layout2">
<div class="media-icon">
<img src="assets/img/icon/coun-1-1.svg" alt="icon">
</div>
<div class="media-body">
<p class="media-label">38</p>
<p class="media-title">Student Classrooms</p>
</div>
</div>
</div>
<div class="col-6 col-md-6 col-lg-auto">
<div class="vs-media media-style1 layout2">
<div class="media-icon">
<img src="assets/img/icon/coun-1-2.svg" alt="icon">
</div>
<div class="media-body">
<p class="media-label">14</p>
<p class="media-title">Kids Classes</p>
</div>
</div>
</div>
<div class="col-6 col-md-6 col-lg-auto">
<div class="vs-media media-style1 layout2">
<div class="media-icon">
<img src="assets/img/icon/coun-1-3.svg" alt="icon">
</div>
<div class="media-body">
<p class="media-label">75</p>
<p class="media-title">Outdoor Activities</p>
</div>
</div>
</div>
<div class="col-6 col-md-6 col-lg-auto">
<div class="vs-media media-style1 layout2">
<div class="media-icon">
<img src="assets/img/icon/coun-1-4.svg" alt="icon">
</div>
<div class="media-body">
<p class="media-label">23</p>
<p class="media-title">Loving Teachers</p>
</div>
</div>
</div>
</div>
</div>
</div> -->




<section class="space-top  bgimg padding-bottom">
    <div class="container">
        <div class="row align-items-center justify-content-between flex-row-reverse">
           <!--  <div class="col-lg-6 col-xl-auto text-center text-lg-end">
                <div class="img-box2">
                    <div class="transform-banner">
                        <img src="assets/img/lastabout.png" alt="about">
                    </div>
                    <div class="vs-circle jump">
                    </div>
                </div>
            </div> -->
            <div class="col-lg-12 text-center text-lg-start text-white">
                <h2 class="sec-title me-xxl-5"> Our Vision</h2>
                <p class="sec-text col-xl-10 pe-4 mb-4">
                    Our vision extends beyond the boundaries of sports arenas, reaching out to millions of children,
                    particularly those lacking access to innovative educational methodologies and resources. By
                    leveraging the universal appeal of cricket, CricMaths aspires to instil foundational numeracy
                    skills and make learning an enjoyable journey for every child.</p>

                <p class="sec-text col-xl-10 pe-4 mb-4">We hope this will also help the National Education Mission,
                    Government of India, on their Literacy and Numeracy mission.</p>

                <p class="sec-text col-xl-10 pe-4 mb-4">Join us on this exciting adventure as we embark on a quest to
                    make maths as captivating as a cricket match, unlocking a world of possibilities for the young minds
                    of tomorrow. Welcome to CricMaths – Where Numbers Meet Cricket!
                </p>
                <div class="row justify-content-center justify-content-lg-start text-start">
                    <div class="col-auto">
                        <!-- <div class="list-style1">
<ul class="list-unstyled">
<li>Comprehensive reporting on individual achievement</li>
<li>Educational field trips and school presentations</li>
<li>Individual attention in a small-class setting</li>
<li>Learning program with after-school care</li>
</ul>
</div> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


@endsection