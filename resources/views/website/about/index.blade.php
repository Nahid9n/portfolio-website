@extends('website.layout.app')
@section('title','Service')
@section('body')
    <!-- Breadcrumb Begin -->
    <div class=" set-bg" style="padding-top: 110px" data-setbg="{{asset('/')}}website/assets/img/breadcrumb-bg.jpg">

    </div>
    <!-- Breadcrumb End -->

    <!-- About Section Begin -->
    <section class="about spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="about__pic">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <div class="about__pic__item about__pic__item--large set-bg" data-setbg="{{asset($about->image1)}}"></div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="about__pic__item set-bg" data-setbg="{{asset($about->image2)}}"></div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="about__pic__item set-bg" data-setbg="{{asset($about->image3)}}"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about__text">
                        <div class="section-title">
                            <span>About Us</span>
                            <h2>{{$about->title}}</h2>
                        </div>
                        <div class="row">
                            @foreach($services as $service)
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <div class="services__item">
                                    <div class="services__item__icon">
                                        <img src="{{asset($service->icon)}}" alt="">
                                    </div>
                                    <h4>{{$service->name}}</h4>
                                    <p>{{$service->short_description}}</p>
                                </div>
                            </div>
                            @endforeach
                        </div>
                        <div class="about__text__desc">
                            <p>
                                {{$about->description}}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- About Section End -->

    <!-- Testimonial Section Begin -->
    <section class="testimonial spad set-bg" data-setbg="{{asset('/')}}website/assets/img/testimonial-bg.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title center-title">
                        <span>Loved By Clients</span>
                        <h2>What clients say?</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="testimonial__slider owl-carousel">
                    @foreach($reviews as $review)
                    {{--<div class="col-lg-4" style="height: 400px">
                        <div class="testimonial__item" style="height: 400px">
                            <div class="testimonial__text">
                                <p>{!! $review->review !!}</p>
                            </div>
                            <div class="testimonial__author">
                                <div class="testimonial__author__pic">
                                    <img src="{{asset($review->image)}}" alt="">
                                </div>
                                <div class="testimonial__author__text">
                                    <h5>{{$review->name}}</h5>
                                    <span>{{$review->designation}}</span>
                                </div>
                            </div>
                        </div>
                    </div>--}}
                        <div class="col-lg-4">
                            <div class="card bg-transparent border-white" style="height: 500px">
                                <div class="card-header">
                                    <div class="testimonial__author__pic">
                                        <img src="{{asset($review->image)}}" alt="">
                                    </div>
                                    <div class="testimonial__author__text">
                                        <h5>{{$review->name}}</h5>
                                        <span>{{$review->designation}}</span>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <p class="text-white">{!! $review->review !!}</p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
    <!-- Testimonial Section End -->

    <!-- Counter Section Begin -->
    <section class="counter">
        <div class="container">
            <div class="counter__content">
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="counter__item">
                            <div class="counter__item__text">
                                <img src="{{asset('/')}}website/assets/img/icons/ci-1.png" alt="">
                                <h2 class="counter_num">{{$projectCount}}</h2>
                                <p>Projects</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="counter__item second__item">
                            <div class="counter__item__text">
                                <img src="{{asset('/')}}" alt="">
                                <i class="fa text-primary fa-users" style="font-size: 50px"></i>
                                <h2 class="counter_num">{{$client}}</h2>
                                <p>Happy clients</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="counter__item third__item">
                            <div class="counter__item__text">
                                <img src="{{asset('/')}}website/assets/img/icons/ci-3.png" alt="">
                                <h2 class="counter_num">{{$serviceCount}}</h2>
                                <p>Perspective Services</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="counter__item four__item">
                            <div class="counter__item__text">
                                <img src="{{asset('/')}}website/assets/img/icons/ci-4.png" alt="">
                                <h2 class="counter_num">{{$teamCount}}</h2>
                                <p>Team Member</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- Counter Section End -->


    <!-- Team Section Begin -->
    <section class="team spad set-bg" data-setbg="{{asset('/')}}website/assets/img/team-bg.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title team__title">
                        <span>Nice to meet</span>
                        <h2>OUR Team</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6 p-0">
                    <div class="team__item set-bg" data-setbg="{{asset($team1->image ?? '')}}">
                        <div class="team__item__text">
                            <h4>{{$team1->name ?? ''}}</h4>
                            <p>{{$team1->company ?? ''}}</p>
                            <div class="team__item__social">
                                <a href="{{$team1->facebook ?? ''}}"><i class="fa fa-facebook"></i></a>
                                <a href="{{$team1->twitter ?? ''}}"><i class="fa fa-twitter"></i></a>
                                <a href="{{$team1->linkedin ?? ''}}"><i class="fa fa-linkedin"></i></a>
                                <a href="{{$team1->instagram ?? ''}}"><i class="fa fa-instagram"></i></a>
                                <a href="{{$team1->youtube ?? ''}}"><i class="fa fa-youtube-play"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 p-0">
                    <div class="team__item team__item--second set-bg" data-setbg="{{asset($team2->image ?? '')}}">
                        <div class="team__item__text">
                            <h4>{{$team2->name ?? ''}}</h4>
                            <p>{{$team2->company ?? ''}}</p>
                            <div class="team__item__social">
                                <a href="{{$team2->facebook ?? ''}}"><i class="fa fa-facebook"></i></a>
                                <a href="{{$team2->twitter ?? ''}}"><i class="fa fa-twitter"></i></a>
                                <a href="{{$team2->linkedin ?? ''}}"><i class="fa fa-linkedin"></i></a>
                                <a href="{{$team2->instagram ?? ''}}"><i class="fa fa-instagram"></i></a>
                                <a href="{{$team2->youtube ?? ''}}"><i class="fa fa-youtube-play"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 p-0">
                    <div class="team__item team__item--third set-bg" data-setbg="{{asset($team3->image ?? '')}}">
                        <div class="team__item__text">
                            <h4>{{$team3->name ?? ''}}</h4>
                            <p>{{$team3->company ?? ''}}</p>
                            <div class="team__item__social">
                                <a href="{{$team3->facebook ?? ''}}"><i class="fa fa-facebook"></i></a>
                                <a href="{{$team3->twitter ?? ''}}"><i class="fa fa-twitter"></i></a>
                                <a href="{{$team3->linkedin ?? ''}}"><i class="fa fa-linkedin"></i></a>
                                <a href="{{$team3->instagram ?? ''}}"><i class="fa fa-instagram"></i></a>
                                <a href="{{$team3->youtube ?? ''}}"><i class="fa fa-youtube-play-play"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 p-0">
                    <div class="team__item team__item--four set-bg" data-setbg="{{asset($team4->image ?? '')}}">
                        <div class="team__item__text">
                            <h4>{{$team4->name ?? ''}}</h4>
                            <p>{{$team4->company ?? ''}}</p>
                            <div class="team__item__social">
                                <a href="{{$team4->facebook ?? ''}}"><i class="fa fa-facebook"></i></a>
                                <a href="{{$team4->twitter ?? ''}}"><i class="fa fa-twitter"></i></a>
                                <a href="{{$team4->linkedin ?? ''}}"><i class="fa fa-linkedin"></i></a>
                                <a href="{{$team4->instagram ?? ''}}"><i class="fa fa-instagram"></i></a>
                                <a href="{{$team4->youtube ?? ''}}"><i class="fa fa-youtube-play-play"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 p-0">
                    <div class="team__btn">
                        <a href="#" class="primary-btn">Meet Our Team</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Team Section End -->

@endsection
