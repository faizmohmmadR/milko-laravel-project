@extends('frontend.layout.master')

@section('contents')

@include('frontend.header.header',array('page'=>$page))
    <!-- Gallery Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto pb-4 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <p class="section-title bg-white text-center text-primary px-3">{{__('gallery.gallery')}}</p>
                <h1 class="mb-5">{{__('gallery.title')}}</h1>
            </div>
            <div class="row g-0">
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="row g-0">
                        <div class="col-12">
                            <a class="d-block" href="img/gallery-5.jpg')}}" data-lightbox="gallery">
                                <img class="img-fluid" src="{{asset('frontend/img/gallery-5.jpg')}}" alt="">
                            </a>
                        </div>
                        <div class="col-12">
                            <a class="d-block" href="img/gallery-1.jpg')}}" data-lightbox="gallery">
                                <img class="img-fluid" src="{{asset('frontend/img/gallery-1.jpg')}}" alt="">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="row g-0">
                        <div class="col-12">
                            <a class="d-block" href="img/gallery-2.jpg')}}" data-lightbox="gallery">
                                <img class="img-fluid" src="{{asset('frontend/img/gallery-2.jpg')}}" alt="">
                            </a>
                        </div>
                        <div class="col-12">
                            <a class="d-block" href="img/gallery-6.jpg')}}" data-lightbox="gallery">
                                <img class="img-fluid" src="{{asset('frontend/img/gallery-6.jpg')}}" alt="">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="row g-0">
                        <div class="col-12">
                            <a class="d-block" href="img/gallery-7.jpg')}}" data-lightbox="gallery">
                                <img class="img-fluid" src="{{asset('frontend/img/gallery-7.jpg')}}" alt="">
                            </a>
                        </div>
                        <div class="col-12">
                            <a class="d-block" href="img/gallery-3.jpg')}}" data-lightbox="gallery">
                                <img class="img-fluid" src="{{asset('frontend/img/gallery-3.jpg')}}" alt="">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="row g-0">
                        <div class="col-12">
                            <a class="d-block" href="img/gallery-4.jpg')}}" data-lightbox="gallery">
                                <img class="img-fluid" src="{{asset('frontend/img/gallery-4.jpg')}}" alt="">
                            </a>
                        </div>
                        <div class="col-12">
                            <a class="d-block" href="img/gallery-8.jpg')}}" data-lightbox="gallery">
                                <img class="img-fluid" src="{{asset('frontend/img/gallery-8.jpg')}}" alt="">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Gallery End -->

@endsection