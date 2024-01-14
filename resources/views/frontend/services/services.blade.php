@extends('frontend.layout.master')

@section('contents')
@include('frontend.header.header',array('page'=>$page))
    <!-- Service Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto pb-4 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <p class="section-title bg-white text-center text-primary px-3">{{__('service.our_service')}}</p>
                <h1 class="mb-5">{{__('service.our_ser')}}</h1>
            </div>
            <div class="row gy-5 gx-4">
                <div class="col-lg-4 col-md-6 pt-5 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item d-flex h-100">
                        <div class="service-img">
                            <img class="img-fluid" src="{{asset('frontend/img/service-1.jpg')}}" alt="">
                        </div>
                        <div class="service-text p-5 pt-0">
                            <div class="service-icon">
                                <img class="img-fluid rounded-circle" src="{{asset('frontend/img/service-1.jpg')}}" alt="">
                            </div>
                            <h5 class="mb-3">{{__('service.best_animal')}}</h4>
                            <p class="mb-4">{{__('service.best_animal_info')}}</p>
                            <a class="btn btn-square rounded-circle" href=""><i class="bi bi-chevron-double-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 pt-5 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item d-flex h-100">
                        <div class="service-img">
                            <img class="img-fluid" src="{{asset('frontend/img/service-2.jpg')}}" alt="">
                        </div>
                        <div class="service-text p-5 pt-0">
                            <div class="service-icon">
                                <img class="img-fluid rounded-circle" src="{{asset('frontend/img/service-2.jpg')}}" alt="">
                            </div>
                            <h5 class="mb-3">{{__('service.breeding')}}</h5>
                            <p class="mb-4">{{__('service.breeding_info')}}</p>
                            <a class="btn btn-square rounded-circle" href=""><i class="bi bi-chevron-double-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 pt-5 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-item d-flex h-100">
                        <div class="service-img">
                            <img class="img-fluid" src="{{asset('frontend/img/service-3.jpg')}}" alt="">
                        </div>
                        <div class="service-text p-5 pt-0">
                            <div class="service-icon">
                                <img class="img-fluid rounded-circle" src="{{asset('frontend/img/service-3.jpg')}}" alt="">
                            </div>
                            <h5 class="mb-3">{{__('service.care_milking')}}</h5>
                            <p class="mb-4">{{__('service.care_milking_info')}}</p>
                            <a class="btn btn-square rounded-circle" href=""><i class="bi bi-chevron-double-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service End -->


    <!-- Features Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <p class="section-title bg-white text-start text-primary pe-3">{{__('service.why')}}</p>
                    <h1 class="mb-4">{{__('service.reason')}}</h1>
                    <p class="mb-4">{{__('service.intro')}}</p>
                    <p><i class="fa fa-check text-primary me-3"></i>{{__('service.reason1')}}</p>
                    <p><i class="fa fa-check text-primary me-3"></i>{{__('service.reason2')}}</p>
                    <p><i class="fa fa-check text-primary me-3"></i>{{__('service.reason3')}}</p>
                    <a class="btn btn-secondary rounded-pill py-3 px-5 mt-3" href="">{{__('home.explor')}}</a>
                </div>
                <div class="col-lg-6">
                    <div class="rounded overflow-hidden">
                        <div class="row g-0">
                            <div class="col-sm-6 wow fadeIn" data-wow-delay="0.1s">
                                <div class="text-center bg-primary py-5 px-4">
                                    <img class="img-fluid mb-4" src="{{asset('frontend/img/experience.png')}}" alt="">
                                    <h1 class="display-6 text-white" data-toggle="counter-up">25</h1>
                                    <span class="fs-5 fw-semi-bold text-secondary">{{__('home.experience')}}</span>
                                </div>
                            </div>
                            <div class="col-sm-6 wow fadeIn" data-wow-delay="0.3s">
                                <div class="text-center bg-secondary py-5 px-4">
                                    <img class="img-fluid mb-4" src="{{asset('frontend/img/award.png')}}" alt="">
                                    <h1 class="display-6" data-toggle="counter-up">183</h1>
                                    <span class="fs-5 fw-semi-bold text-primary">{{__('service.award')}}</span>
                                </div>
                            </div>
                            <div class="col-sm-6 wow fadeIn" data-wow-delay="0.5s">
                                <div class="text-center bg-secondary py-5 px-4">
                                    <img class="img-fluid mb-4" src="{{asset('frontend/img/animal.png')}}" alt="">
                                    <h1 class="display-6" data-toggle="counter-up">2619</h1>
                                    <span class="fs-5 fw-semi-bold text-primary">{{__('service.total')}}</span>
                                </div>
                            </div>
                            <div class="col-sm-6 wow fadeIn" data-wow-delay="0.7s">
                                <div class="text-center bg-primary py-5 px-4">
                                    <img class="img-fluid mb-4" src="{{asset('frontend/img/client.png')}}" alt="">
                                    <h1 class="display-6 text-white" data-toggle="counter-up">51940</h1>
                                    <span class="fs-5 fw-semi-bold text-secondary">{{__('service.happy')}}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Features End -->


@endsection()