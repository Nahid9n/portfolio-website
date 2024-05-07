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
                @forelse($services as $key => $service)
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="services__item">
                        <div class="services__item__icon">
                            <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#service{{$key}}">
                                <img src="{{asset($service->icon)}}" alt="">
                            </a>
                        </div>
                        <h4>
                            <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#service{{$key}}">{{$service->name}}</a>
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
                            <h2>CREATE AWESOME WEBSITES WITH POWERFUL FEATURES</h2>
                            <a class="text-dark" href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#contactModal">Start your Websites</a>
                        </div>
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
