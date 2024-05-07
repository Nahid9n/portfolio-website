@extends('website.layout.app')
@section('title','Team')
@section('body')
    <section class="team spad set-bg" data-setbg="{{asset('/')}}website/assets/img/team-bg.jpg">
        <div class="container">
            <div class="my-4">
                <h4 class="text-center text-white">Our Teams</h4>
                <hr class="border-white">
            </div>
            <div class="row justify-content-center">
                @foreach($teams as $team)
                <div class="col-lg-3 col-md-6 col-sm-6 p-0">
                    <div class="team__item set-bg m-1" data-setbg="{{asset($team->image ?? '')}}">
                        <div class="team__item__text">
                            <h4>{{$team->name ?? ''}}</h4>
                            <p>{{$team->company ?? ''}}</p>
                            <div class="team__item__social">
                                <a href="{{$team->facebook ?? ''}}"><i class="fa fa-facebook"></i></a>
                                <a href="{{$team->twitter ?? ''}}"><i class="fa fa-twitter"></i></a>
                                <a href="{{$team->linkedin ?? ''}}"><i class="fa fa-linkedin"></i></a>
                                <a href="{{$team->instagram ?? ''}}"><i class="fa fa-instagram"></i></a>
                                <a href="{{$team->youtube ?? ''}}"><i class="fa fa-youtube-play"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            <div class="row justify-content-center mt-3 p-0">
                <div class="">
                    {{$teams->links()}}
                </div>
            </div>
        </div>
    </section>
    <!-- Team Section End -->
@endsection
