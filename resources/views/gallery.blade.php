@extends('layouts.app')
@section('content')

<style type="text/css">
    .header-layout1 {
        display: none;
    }
    .img-grid {
        margin-bottom: 30px;
    }
    .gallery-img {
        width: 100%;
        height: auto;
        border-radius: 5px;
    }
    .video-embed {
        margin-top: 50px;
        padding-bottom: 56.25%;
        position: relative;
        height: 0;
        overflow: hidden;
    }
    .video-embed iframe {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
    }
    .padding-bottom {
        padding-bottom: 150px;
        padding-top: 150px;
    }

    .gallery-title{
    color: #B70303;
    font-family: Spicy Rice;
    font-size: 50px;
    font-weight: 400;
    line-height: 75.84px;
   }

    @media screen and (max-width:600px) {
        .img-grid {
            margin-bottom: 20px;
        }
    }
</style>

<section class="space-top space-extra-bottom">
    <div class="container">
        <div class="title-area text-center">
            <h2 class="sec-title gallery-title">Gallery</h2>
        </div>
        <div class="row">
            <div class="col-sm-6 col-lg-4 img-grid">
                <img src="assets/gallery/1.png" alt="Cricmaths Vivaan Daga 1" class="gallery-img">
            </div>
            <div class="col-sm-6 col-lg-4 img-grid">
                <img src="assets/gallery/2.png" alt="Cricmaths Vivaan Daga 2" class="gallery-img">
            </div>
            <div class="col-sm-6 col-lg-4 img-grid">
                <img src="assets/gallery/3.png" alt="Cricmaths Vivaan Daga 3" class="gallery-img">
            </div>
            
            <div class="col-sm-6 col-lg-4 img-grid">
                <img src="assets/gallery/5.png" alt="Cricmaths Vivaan Daga 5" class="gallery-img">
            </div>
            <div class="col-sm-6 col-lg-4 img-grid">
                <img src="assets/gallery/8.jpg" alt="Cricmaths Vivaan Daga 8" class="gallery-img">
            </div>
            <div class="col-sm-6 col-lg-4 img-grid">
                <img src="assets/gallery/9.jpg" alt="Cricmaths Vivaan Daga 9" class="gallery-img">
            </div>
           
            <div class="col-sm-6 col-lg-4 img-grid">
                <img src="assets/gallery/10.jpg" alt="Cricmaths Vivaan Daga 10" class="gallery-img">
            </div>
            <div class="col-sm-6 col-lg-4 img-grid">
                <img src="assets/gallery/11.jpg" alt="Cricmaths Vivaan Daga 11" class="gallery-img">
            </div>
            <div class="col-sm-6 col-lg-4 img-grid">
                <img src="assets/gallery/12.jpg" alt="Cricmaths Vivaan Daga 12" class="gallery-img">
            </div>
             <div class="col-sm-6 col-lg-4 img-grid">
                <img src="assets/gallery/4.png" alt="Cricmaths Vivaan Daga 4" class="gallery-img">
            </div>
            <div class="col-sm-6 col-lg-4 img-grid">
                <img src="assets/gallery/13.jpg" alt="Cricmaths Vivaan Daga 13" class="gallery-img">
            </div>
        </div>

     <div class="video-embed">
    <iframe src="https://www.youtube.com/embed/JdvmJvmqGd0?start=29" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
</div>


        <div class="video-embed">
            <iframe src="https://www.youtube.com/embed/mmA40EcMKTA?si=Ikgq2GiNOEIcMHfd" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div><br>

        <div>
           <iframe width="560" height="315" src="https://www.youtube.com/embed/ShPyxEOPOtU?si=0kquVR_kAkGPrASP" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>

    </div>
</section>

@endsection


