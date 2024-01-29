<!DOCTYPE html>
<!-- <html lang="en" dir='<?php if(app()->getLocale() )?>'> -->
<html lang="{{ app()->getLocale() }}" dir="{{ app()->getLocale() == 'dr' ? 'rtl' : 'ltr' }}">

<head>
    <meta charset="utf-8">
    <title>{{__('nav.Milko')}}</title>
    <meta name="csrf-token" content="{{csrf_token()}}">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="{{asset('frontend/img/favicon.ico')}}" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Libre+Baskerville:wght@700&family=Open+Sans:wght@400;500;600&display=swap" rel="stylesheet">   

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{asset('frontend/lib/animate/animate.min.css')}}" rel="stylesheet">
    <link href="{{asset('frontend/lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
    <link href="{{asset('frontend/lib/lightbox/css/lightbox.min.css')}}" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{asset('frontend/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{asset('frontend/css/style.css')}}" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    @yield('script')
    
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" role="status" style="width: 3rem; height: 3rem;"></div>
    </div>
    <!-- Spinner End -->


    <!-- Topbar Start -->
    <div class="container-fluid bg-dark px-0">
        <div class="row g-0 d-none d-lg-flex">
            <div class="col-lg-6 ps-5 text-start">
                <div class="h-100 d-inline-flex align-items-center text-light">
                    <span>{{__('nav.Follow_Us')}}</span>
                    <a class="btn btn-link text-light" href=""><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-link text-light" href=""><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-link text-light" href=""><i class="fab fa-linkedin-in"></i></a>
                    <a class="btn btn-link text-light" href=""><i class="fab fa-instagram"></i></a>
                </div>
            </div>
            <div class="col-lg-6 text-end">
                <div class="h-100 bg-secondary d-inline-flex align-items-center text-dark py-2 px-4">
                    <span class="me-2 fw-semi-bold"><i class="fa fa-phone-alt me-2" style="padding-left: 10px"; ></i> {{__('nav.Call_us')}} </span>
                    <span style="padding-left: 10px;">+93778587455</span>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top px-4 px-lg-5">
        <a href="index.html" class="navbar-brand d-flex align-items-center">
            <h1 class="m-0">{{__('nav.Milko')}}</h1>
        </a>
        <button type="button" class="navbar-toggler me-0" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">
                <a href="{{route('home')}}" class="nav-item nav-link active">{{__('nav.Home')}}</a>
                <a href="{{route('about')}}" class="nav-item nav-link">{{__('nav.About')}}</a>
                <a href="{{route('services')}}" class="nav-item nav-link">{{__('nav.Services')}}</a>
                <a href="{{route('products')}}" class="nav-item nav-link">{{__('nav.Products')}}</a>
                <a href="{{route('dashboard')}}" class="nav-item nav-link">{{__('nav.Dashboard')}}</a>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">{{__('nav.Pages')}}</a>
                    <div class="dropdown-menu bg-light m-0">
                        <a href="{{route('gallery')}}" class="dropdown-item">{{__('nav.Gallery')}}</a>
                        <a href="{{route('feature')}}" class="dropdown-item">{{__('nav.Features')}}</a>
                        <a href="{{route('team')}}" class="dropdown-item">{{__('nav.Our_Team')}}</a>
                        <a href="{{route('testimonial')}}" class="dropdown-item">{{__('nav.Testimonial')}}</a>
                        <a href="{{route('notFound')}}" class="dropdown-item">{{__('nav.Not_found_page')}}</a>
                    </div>
                </div>
                <a href="{{route('contact')}}" class="nav-item nav-link">{{__('nav.Contact')}}</a>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">{{__('nav.Language')}}</a>
                    <div class="dropdown-menu bg-light m-0">
                        <a href="{{route('locale',['locale'=>'dr'])}}" class="dropdown-item">{{__('nav.Dari')}}</a>
                        <a href="{{route('locale',['locale'=>'en'])}}" class="dropdown-item">{{__('nav.English')}}</a>
                    </div>
                </div>
            </div>
            <div class="border-start ps-4 d-none d-lg-block">
                <button type="button" class="btn btn-sm p-0"><i class="fa fa-search"></i></button>
            </div>
        </div>
    </nav>
    <!-- Navbar End -->

        @yield('contents')

    <!-- Footer Start -->
    <div class="container-fluid bg-dark footer mt-5 py-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container py-5">
        <div class="row g-5">
            <div class="col-lg-3 col-md-6">
                <h5 class="text-white mb-4">{{__('nav.Our_office')}}</h5>
                <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>{{__('nav.Address')}}</p>
                <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+012 345 67890</p>
                <p class="mb-2"><i class="fa fa-envelope me-3"></i>info@example.com</p>
                <div class="d-flex pt-3">
                    <a class="btn btn-square btn-secondary rounded-circle me-2" href=""><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-square btn-secondary rounded-circle me-2" href=""><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-square btn-secondary rounded-circle me-2" href=""><i class="fab fa-youtube"></i></a>
                    <a class="btn btn-square btn-secondary rounded-circle me-2" href=""><i class="fab fa-linkedin-in"></i></a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <h5 class="text-white mb-4">{{__('nav.Quick_Links')}}</h5>
                <a class="btn btn-link" href="">{{__('nav.About')}}</a>
                <a class="btn btn-link" href="">{{__('nav.Contact')}}</a>
                <a class="btn btn-link" href="">{{__('nav.Quick_Links')}}</a>
                <a class="btn btn-link" href="">{{__('nav.Terms_&_Condition')}}</a>
                <a class="btn btn-link" href="">{{__('nav.Support')}}</a>
            </div>
            <div class="col-lg-3 col-md-6">
                <h5 class="text-white mb-4">{{__('nav.Business_Hours')}}</h5>
                <p class="mb-1">{{__('nav.Duration')}}</p>
                <h6 class="text-light">09:00 am - 07:00 pm</h6>
                <p class="mb-1">Saturday</p>
                <h6 class="text-light">09:00 am - 12:00 pm</h6>
                <p class="mb-1">{{__('nav.Sunday')}}</p>
                <h6 class="text-light">{{__('nav.Closed')}}</h6>
            </div>
            <div class="col-lg-3 col-md-6">
                <h5 class="text-white mb-4">{{__('nav.Newsletter')}}</h5>
                <p>{{__('nav.newsDetail')}}</p>
                <div class="position-relative w-100">
                    <input class="form-control bg-transparent w-100 py-3 ps-4 pe-5" type="text" placeholder="Your email">
                    <button type="button" class="btn btn-secondary py-2 position-absolute top-0 end-0 mt-2 me-2">{{__('nav.SignUp')}}</button>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Footer End -->


<!-- Copyright Start -->
<div class="container-fluid bg-secondary text-body copyright py-4">
    <div class="container">
        <div class="row">
            <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                &copy; <a class="fw-semi-bold" href="#">{{__('nav.Milko')}}</a>, {{__('nav.CopyRight')}}
            </div>
            <div class="col-md-6 text-center text-md-end">
                <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                {{__('nav.Designed_By')}} <a class="fw-semi-bold" href="https://htmlcodex.com">{{__('nav.name')}}</a>
            </div>
        </div>
    </div>
</div>
<!-- Copyright End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="{{asset('frontend/lib/wow/wow.min.js')}}"></script>
    <script src="{{asset('frontend/lib/easing/easing.min.js')}}"></script>
    <script src="{{asset('frontend/lib/waypoints/waypoints.min.js')}}"></script>
    <script src="{{asset('frontend/lib/owlcarousel/owl.carousel.min.js')}}"></script>
    <script src="{{asset('frontend/lib/counterup/counterup.min.js')}}"></script>
    <script src="{{asset('frontend/lib/parallax/parallax.min.js')}}"></script>
    <script src="{{asset('frontend/lib/lightbox/js/lightbox.min.js')}}"></script>

    <!-- Template Javascript -->
    <script src="{{asset('frontend/js/main.js')}}"></script>
</body>

</html>