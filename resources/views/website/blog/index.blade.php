@extends('website.layout.app')
@section('title','Blog')
@section('body')
    <!-- Blog Section Begin -->
    <section class="blog spad">
        <div class="container">
            <div class="my-4">
                <h4 class="text-center text-white">Blogs</h4>
                <hr class="border-white">
            </div>
            <div class="row">
                @foreach($blogs as $blog)
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="blog__item text-center">
                        <a href="{{route('blog.details',$blog->slug)}}">
                            <img src="{{asset($blog->image)}}" alt="" class="img-container">
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
            <div class="row justify-content-center">
                <div class="col-lg-4 border-white">
                    {{$blogs->links()}}
                </div>
            </div>
        </div>
    </section>
    <!-- Blog Section End -->

@endsection
