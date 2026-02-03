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
    @media screen and (max-width:600px) {
        .img-grid {
            margin-bottom: 20px;
        }
    }
</style>

<section class="space-top space-extra-bottom">
    <div class="container">
        <div class="title-area text-center">
            <h2 class="sec-title">Gallery</h2>
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
                <img src="assets/gallery/4.png" alt="Cricmaths Vivaan Daga 4" class="gallery-img">
            </div>
            <div class="col-sm-6 col-lg-4 img-grid">
                <img src="assets/gallery/5.png" alt="Cricmaths Vivaan Daga 5" class="gallery-img">
            </div>
            <div class="col-sm-6 col-lg-4 img-grid">
                <img src="assets/gallery/6.png" alt="Cricmaths Vivaan Daga 6" class="gallery-img">
            </div>
        </div>

        <div class="video-embed">
            <iframe src="https://www.youtube.com/embed/mmA40EcMKTA?si=Ikgq2GiNOEIcMHfd" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
    </div>
</section>

@endsection
