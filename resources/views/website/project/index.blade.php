@extends('website.layout.app')
@section('title','Project')
@section('body')
    <!-- Portfolio Section Begin -->
    <section class="portfolio spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb__text text-center">
                        <h2>My Project</h2>
                        <div class="breadcrumb__links">
                            <a href="{{route('home')}}">Home</a>
                            <span>Project</span>
                        </div>
                        <hr>
                    </div>
                    <ul class="portfolio__filter">
                        <li class="active" data-filter="*">All</li>
                        @foreach($categories as $category)
                        <li data-filter=".{{$category->name}}">{{$category->name}}</li>
                        @endforeach
                    </ul>
                </div>
            </div>
            <div class="row portfolio__gallery">
                @foreach($projects as $project)
                <div class="col-lg-4 col-md-6 col-sm-6 mix {{$project->category->name}}">
                    <div class="portfolio__item">
                        <div class="portfolio__item__video set-bg" data-setbg="{{asset($project->image)}}">
                            @if($project->video != '')
                            <a href="{{asset($project->video)}}" class="play-btn video-popup"><i class="fa fa-play"></i></a>
                            @endif
                        </div>
                        <div class="portfolio__item__text">
                            <h4>{{$project->title}}</h4>
                            <ul>
                                <li>{{$project->code}}</li>
                                <li>Magento</li>
                            </ul>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            <div class="row justify-content-center">
                <div class="">
                    <p>{{$projects->links()}}</p>
                </div>
            </div>
        </div>
    </section>
    <!-- Portfolio Section End -->

@endsection
