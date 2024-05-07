@extends('website.layout.app')
@section('title','Contact')
@section('body')
    <!-- Breadcrumb Begin -->
    <div class="set-bg" style="padding-top: 110px" data-setbg="{{asset('/')}}website/assets/img/breadcrumb-bg.jpg">
    </div>
    <!-- Breadcrumb End -->

    <!-- Contact Widget Section Begin -->
    <section class="contact-widget spad" id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 col-md-6 col-md-3">
                    <div class="contact__widget__item">
                        <div class="contact__widget__item__icon">
                            <i class="fa fa-map-marker"></i>
                        </div>
                        <div class="contact__widget__item__text">
                            <h4>Address</h4>
                            <p>{{$contact->address}}</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-md-6 col-md-3">
                    <div class="contact__widget__item">
                        <div class="contact__widget__item__icon">
                            <i class="fa fa-phone"></i>
                        </div>
                        <div class="contact__widget__item__text">
                            <h4>Hotline</h4>
                            <p>{{$contact->hotline}} <br> {{$contact->hotline2}}</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-md-6 col-md-3">
                    <div class="contact__widget__item">
                        <div class="contact__widget__item__icon">
                            <i class="fa fa-envelope"></i>
                        </div>
                        <div class="contact__widget__item__text">
                            <h4>Email</h4>
                            <p>{{$contact->email}}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact Widget Section End -->

    <!-- Call To Action Section Begin -->
    <section class="contact spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="contact__map">
                        <iframe src="{{$contact->map}}" height="450" style="border:0;"></iframe>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
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
            </div>
        </div>
    </section>
    <!-- Call To Action Section End -->

@endsection
