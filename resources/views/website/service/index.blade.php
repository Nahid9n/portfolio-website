@extends('website.layout.app')
@section('title','Service')
@section('body')
    <!-- Breadcrumb Begin -->
    <div class="breadcrumb-option spad set-bg" data-setbg="{{asset('/')}}website/assets/img/breadcrumb-bg.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <h2>Our Services</h2>
                        <div class="breadcrumb__links">
                            <a href="#">Home</a>
                            <span>Services</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->

    <!-- Services Section Begin -->
    <section class="services-page spad">
        <div class="container">
            <div class="row">
                @forelse($services as $service)
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="services__item">
                        <div class="services__item__icon">
                            <img src="{{asset($service->icon)}}" alt="">
                        </div>
                        <h4>{{$service->name}}</h4>
                        <p>{{$service->short_description}}</p>
                    </div>
                </div>
                @empty
                    <div class="">
                        <p>No Service Found</p>
                    </div>
                @endforelse
            </div>
        </div>
    </section>
    <!-- Services Section End -->

    <!-- Call To Action Section Begin -->
    <section class="callto sp__callto">
        <div class="container">
            <div class="callto__services spad set-bg" data-setbg="{{asset('/')}}website/assets/img/calltos-bg.jpg">
                <div class="row d-flex justify-content-center">
                    <div class="col-lg-10 text-center">
                        <div class="callto__text">
                            <h2>CREATE AWESOME VIDEOS WITH WIDEO’S POWERFUL FEATURES</h2>
                            <p>Wideo combines all the features you need to easily create professional videos and
                                presentations</p>
                            <a href="#">Start your stories</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Call To Action Section End -->

    <!-- Logo Begin -->
    <div class="logo spad">
        <div class="container">
            <div class="logo__carousel owl-carousel">
                @foreach($clients as $client)
                <a target="_blank" href="{{$client->company_url}}" class="logo__item"><img src="{{asset($client->logo)}}" alt=""></a>
                @endforeach
            </div>
        </div>
    </div>
    <!-- Logo End -->

@endsection
