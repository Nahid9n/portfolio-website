@extends('website.layout.app')
@section('title','Home Page')
@section('body')
    <!-- Hero Section Begin -->
    <section class="hero">
        <div class="hero__slider owl-carousel">
            @foreach($sliders as $slider)
            <div class="hero__item set-bg" data-setbg="{{asset($slider->image)}}">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="hero__text">
                                <span>{{$slider->slogan}}</span>
                                <h2>{{$slider->title}}</h2>
                                <a href="#" class="primary-btn">See more about us</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </section>
    <!-- Hero Section End -->

    <!-- Services Section Begin -->
    <section class="services spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="row">
                        @foreach($services as $key => $service)
                        <div class="col-lg-6 col-md-6 col-sm-6 ">
                            <div class="services__item">
                                <div class="services__item__icon">
                                    <img src="{{asset($service->icon)}}" alt="">
                                </div>
                                <h4>
                                    <a class="tex" href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#service{{$key}}">{{$service->name}}</a>
                                </h4>
                                <p>{{$service->short_description}}</p>
                            </div>
                        </div>
                            <!-- Modal -->
                            <div class="modal fade" data-bs-backdrop="static" data-bs-keyboard="false" id="service{{$key}}" tabindex="-1" aria-labelledby="serviceLabel{{$key}}" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content" style="background-color: #838391">
                                        <div class="modal-header border-white">
                                            <h5 class="modal-title" id="serviceLabel{{$key}}">{{$service->name}}</h5>
                                            <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                                                <span class="text-dark" aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body bg-dark">
                                            <div class="text-center">
                                                <p class="">
                                                    <img src="{{asset($service->icon)}}" alt="">
                                                </p>
                                            </div>
                                            <div class="">
                                                <p class="text-white">{{$service->long_description}}</p>
                                            </div>

                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">OK</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="services__title">
                        <div class="section-title">
                            <span>Our services</span>
                            <h2>What We do?</h2>
                        </div>
                        <p>If you hire a web developer of our team you will get a professional to make a
                            website for your business and, once the project is over.</p>
                        <a href="{{route('service')}}" class="primary-btn">View all services</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Services Section End -->

    <!-- Work Section Begin -->
    <section class="work">
        <div class="work__gallery">
            <div class="grid-sizer"></div>
            @forelse($projects as $project)
                @if($project->image != '')
                    <div class="work__item wide__item set-bg" data-setbg="{{asset($project->image)}}">
                        @else
                            <div class="work__item wide__item set-bg" data-setbg="{{asset('/')}}website/assets/img/no_image.jpg">
                                @endif
                                @if($project->video != '')
                                    <a href="{{asset($project->video)}}" class="play-btn video-popup">
                                        <i class="fa fa-play"></i>
                                    </a>
                                @endif
                                <div class="work__item__hover">
                                    <h4><a class="text-white" href="{{route('project.details',$project->slug)}}">{{$project->title}}</a></h4>
                                    <h5><a class="text-white" href="{{route('project.details',$project->slug)}}">{{$project->short_details}}</a></h5>
                                    <ul>
                                        <li class="text-white bg-primary p-1">{{$project->user->first_name. ' '.$project->user->last_name }}</li>
                                        <li class="text-white bg-primary p-1">Category : {{$project->category->name}}</li>
                                        <li class="text-white bg-primary p-1">Vendor : {{$project->vendor}}</li>
                                    </ul>
                                </div>
                            </div>
                            @empty
                                <div class="work__item wide__item set-bg" data-setbg="{{asset('/')}}website/assets/img/work/work-1.jpg">
                                    <a href="https://www.youtube.com/watch?v=LXb3EKWsInQ" class="play-btn video-popup"><i
                                            class="fa fa-play"></i></a>
                                    <div class="work__item__hover">
                                        <h4>VIP Auto Tires & Service</h4>
                                        <ul>
                                            <li>eCommerce</li>
                                            <li>Magento</li>
                                        </ul>
                                    </div>
                                </div>
                    </div>
                @endforelse
        </div>
    </section>
    <!-- Work Section End -->

    <!-- Counter Section Begin -->
    <section class="counter">
        <div class="container">
            <div class="counter__content">
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-6 col-6">
                        <div class="counter__item">
                            <div class="counter__item__text">
                                <img src="{{asset('/')}}website/assets/img/icons/ci-1.png" alt="">
                                <h2 class="counter_num">{{$projectCount}}</h2>
                                <p>Projects</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-6">
                        <div class="counter__item second__item">
                            <div class="counter__item__text">
                                <img src="{{asset('/')}}" alt="">
                                <i class="fa text-primary fa-users" style="font-size: 50px"></i>
                                <h2 class="counter_num">{{$client}}</h2>
                                <p>Happy clients</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-6">
                        <div class="counter__item third__item">
                            <div class="counter__item__text">
                                <img src="{{asset('/')}}website/assets/img/icons/ci-3.png" alt="">
                                <h2 class="counter_num">{{$serviceCount}}</h2>
                                <p>Perspective Services</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-6">
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
                <div class="col-lg-3 col-md-6 col-sm-6 col-6 p-0">
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
                <div class="col-lg-3 col-md-6 col-sm-6 col-6 p-0">
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
                <div class="col-lg-3 col-md-6 col-sm-6 col-6 p-0">
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
                <div class="col-lg-3 col-md-6 col-sm-6 col-6 p-0">
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

    <!-- Latest Blog Section Begin -->
    <section class="latest spad set-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title center-title">
                        <span>Our Blog</span>
                        <h2>Blog Update</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="latest__slider owl-carousel set-bg" style="height: 600px">
                        @foreach($blogs as $blog)
                            <div class="col-lg-4">
                                <div class="blog__item latest__item" style="width: 400px; height: 500px">
                                        <a href="{{route('blog.details',$blog->slug)}}">
                                            @if($blog->image != '')
                                                <img src="{{asset($blog->image)}}" alt="" class="img-container" width="250" height="150">
                                            @else
                                                <img src="{{asset('/')}}website/assets/img/no_image.jpg" alt="" class="img-container"  width="250" height="150">
                                            @endif
                                        </a>
                                        <h4 class="my-2"><a href="{{route('blog.details',$blog->slug)}}">{{$blog->title}}</a></h4>
                                        <ul>
                                            <li>{{date('d-m-Y', strtotime($blog->created_at))}}</li>
                                            <li>05 Comment</li>
                                        </ul>
                                        <p>{{$blog->short_description}}</p>
                                        <a href="{{route('blog.details',$blog->slug)}}">Read more <span class="arrow_right"></span></a>
                                </div>
                            </div>
                        @endforeach

                </div>
            </div>
        </div>
    </section>
    <!-- Latest Blog Section End -->

    <!-- Call To Action Section Begin -->
    <section class="callto spad set-bg" data-setbg="{{asset('/')}}website/assets/img/callto-bg.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="callto__text">
                        <h2>CREATE AWESOME WEBSITES WITH POWERFUL FEATURES</h2>
                        <a class="text-dark" href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#contactModal">Start your Websites</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Call To Action Section End -->
    <!-- Modal -->
    <div class="modal fade" data-bs-backdrop="static" data-bs-keyboard="false" id="contactModal" tabindex="-1" aria-labelledby="contactModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content" style="background-color: #838391">
                <div class="modal-header border-white">
                    <h5 class="modal-title" id="contactModalLabel">Contact With Us</h5>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <span class="text-dark" aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body bg-dark">
                    <div class="contact__form">
                        <h3>Get in touch</h3>
                        <form action="{{route('contact.message')}}" method="post">
                            @csrf
                            <input type="text" placeholder="Name" name="name" required>
                            <input type="email" placeholder="Email" name="email" required>
                            <textarea placeholder="Message" name="message" required></textarea>
                            <button type="submit" class="site-btn">Send Message</button>
                        </form>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">OK</button>
                </div>
            </div>
        </div>
    </div>

@endsection
