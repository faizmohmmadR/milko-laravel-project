    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container text-center py-5">
            <h1 class="display-3 text-white mb-4 animated slideInDown">{{$page}}</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a href="#">{{__('web.home')}} <span style="padding: 10px;">{{ app()->getLocale() == 'dr' ? '/' : '' }}</span></a></li>
                    <li class="breadcrumb-item"><a href="#">{{__('web.pages')}}</a></li>
                    <li class="breadcrumb-item"><a href="#">{{$page}}</a></li>
                    <div>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->