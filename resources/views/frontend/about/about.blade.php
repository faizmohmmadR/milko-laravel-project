@extends('frontend.layout.master')

@section('contents')

@include('frontend.header.header',array('page'=>$page))
    <!-- About Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5 align-items-end">
                <div class="col-lg-6">
                    <div class="row g-2">
                        <div class="col-6 position-relative wow fadeIn" data-wow-delay="0.7s">
                            <div class="about-experience bg-secondary rounded">
                                <h1 class="display-1 mb-0">25</h1>
                                <small class="fs-5 fw-bold">{{__('about.expre')}}</small>
                            </div>
                        </div>
                        <div class="col-6 wow fadeIn" data-wow-delay="0.1s">
                            <img class="img-fluid rounded" src="{{asset('frontend/img/service-1.jpg')}}">
                        </div>
                        <div class="col-6 wow fadeIn" data-wow-delay="0.3s">
                            <img class="img-fluid rounded" src="{{asset('frontend/img/service-2.jpg')}}">
                        </div>
                        <div class="col-6 wow fadeIn" data-wow-delay="0.5s">
                            <img class="img-fluid rounded" src="{{asset('frontend/img/service-3.jpg')}}">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                    <p class="section-title bg-white text-start text-primary pe-3">{{__('about.about')}}</p>
                    <h1 class="mb-4">{{__('about.know_us')}}</h1>
                    <p class="mb-4">{{__('about.info')}}</p>
                    <div class="row g-5 pt-2 mb-5">
                        <div class="col-sm-6">
                            <img class="img-fluid mb-4" src="{{asset('frontend/img/service.png')}}" alt="">
                            <h5 class="mb-3">{{__('about.dedecate')}}</h5>
                            <span>{{__('about.dedecateInfo')}}</span>
                        </div>
                        <div class="col-sm-6">
                            <img class="img-fluid mb-4" src="{{asset('frontend/img/product.png')}}" alt="">
                            <h5 class="mb-3">{{__('about.orTitle')}}</h5>
                            <span>{{__('about.dedecateInfo')}}</span>
                        </div>
                    </div>
                    <a class="btn btn-secondary rounded-pill py-3 px-5" href="">{{__('home.explor')}}</a>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


@endsection