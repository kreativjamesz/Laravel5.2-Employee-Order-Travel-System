
@extends('layouts.app')

@section('content')
<div class="divides"></div>

<!-- start: HERO -->
<div id="carousel-wrapper">
    <div id="owl-slider" class="owl-carousel owl-theme">
        <div class="item bg-image" data-image-src="assets/images/slider/slide-14.jpg" data-stellar-background-ratio="0.25" style="background:url('assets/images/slider/slide-14.jpg');">
            <div class="slider-caption valign">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6">
                            <h1 class="font-white">Govermnet Judicial Academy</h1>
                            <p class="lead font-white">A creative web design agency, focused on unique, stylish and usable experiences across a multitude of verticals, mediums and devices.</p>
                            <p>
                                <a href="#" class="btn btn-purple no-radius">Get in Touch</a>
                                <a href="#" class="btn btn-default no-radius">Get a quote</a>
                            </p>
                        </div>
                    </div>
                    <!-- /row -->
                </div>
            </div>
            <!-- //slider caption -->
        </div>
        <!-- // item -->
        <div class="item bg-image" data-image-src="assets/images/slider/slide-15.jpg" style="background:url('assets/images/slider/slide-15.jpg');">
            <div class="slider-caption valign">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6">
                            <h1 class="font-white">Digital Marketing Agency</h1>
                            <p class="lead font-white">A creative web design agency, focused on unique, stylish and usable experiences across a multitude of verticals, mediums and devices.</p>
                            <p>
                                <a href="#" class="btn btn-purple no-radius">Get in Touch</a>
                                <a href="#" class="btn btn-default no-radius">Get a quote</a>
                            </p>
                        </div>
                    </div>
                    <!-- /row -->
                </div>
            </div>
            <!-- //slider caption -->
        </div>
        <!-- // item -->
    </div>
    <!--/#main-carousel--> 
</div>
<!--/#owl-wrapper-->
<div class="divides"></div>
<section>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="text-center">
                    <h1 style="font-size:3em;font-family: 'Great Vibes';"></i>Board of Trustees</h1>
                    <hr>
                </div>
            </div>
        </div>
    </div>
</section>
<section>
    <div class="container">
        <div class="row">
            <tiles class="clearfix">
                <div class="col-xs-12 col-sm-4">
                    <div class="item-hover">
                        <a href="#" class="thumbnail"><img src="assets/images/demo/mockups/800x553/1-min.jpg" alt="..."></a>
                        <div class="content">
                            <h5 class="uppercase">App Development</h5>
                            <p>We make mobile, internet and desktop applications tailored to your needs.</p>
                            <p><a href="#" class="btn btn-round btn-default btn-round">Get In Touch With Us</a>
                            </p>
                        </div>
                        <!-- // content -->
                    </div>
                </div>
                <div class="col-xs-12 col-sm-4">
                    <div class="item-hover">
                        <a href="#" class="thumbnail"><img src="assets/images/demo/mockups/800x553/2-min.jpg" alt="..."></a>
                        <div class="content">
                            <h6 class="uppercase">App Development</h6>
                            <p>We make mobile, internet and desktop applications tailored to your needs.</p>
                            <p><a href="#" class="btn btn-round btn-default btn-round">Get In Touch With Us</a>
                            </p>
                        </div>
                        <!-- // content -->
                    </div>
                </div>
                <div class="col-xs-12 col-sm-4">
                    <div class="item-hover">
                        <a href="#" class="thumbnail"><img src="assets/images/demo/mockups/800x553/3-min.jpg" alt="..."></a>
                        <div class="content">
                            <h6 class="uppercase">App Development</h6>
                            <p>We make mobile, internet and desktop applications tailored to your needs.</p>
                            <p><a href="#" class="btn btn-round btn-default btn-round">Get In Touch With Us</a>
                            </p>
                        </div>
                        <!-- // content -->
                    </div>
                </div>    

            </tiles>
        </div>
    </div>
</section>

@endsection
