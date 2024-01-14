@extends('frontend.layout.master')

@section('contents')

@include('frontend.header.header',array('page'=>$page))
    <!-- 404 Start -->
    <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container text-center">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <i class="bi bi-exclamation-triangle display-1 text-primary"></i>
                    <h1 class="display-1">404</h1>
                    <h1 class="mb-4">{{__('notFound.title')}}</h1>
                    <p class="mb-4">{{__('notFound.desc')}}</p>
                    <a class="btn btn-secondary rounded-pill py-3 px-5" href="">{{__('notFound.go_back')}}</a>
                </div>
            </div>
        </div>
    </div>
    <!-- 404 End -->

@endsection