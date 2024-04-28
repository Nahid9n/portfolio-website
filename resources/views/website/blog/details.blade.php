@extends('website.layout.app')
@section('title','Blog Details')
@section('body')
    <!-- Blog Details Hero Begin -->
    <section class="blog-hero spad set-bg" data-setbg="{{asset($blog->image)}}">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-lg-8">
                    <div class="blog__hero__text">
                        <h2>{{$blog->title}}</h2>
                        <ul>
                            <li>by <span>{{$blog->author}}</span></li>
                            <li>{{date('d-m-Y', strtotime($blog->created_at))}}</li>
                            <li>05 Comment</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Blog Details Hero End -->

    <!-- Blog Details Section Begin -->
    <div class="blog-details spad">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-lg-8">
                    <div class="blog__details__content">
                        <div class="blog__details__text">
                            {!! $blog->long_description !!}
                        </div>
                        <div class="blog__details__tags">
                            <span><i class="fa fa-tag"></i> Tag:</span>
                            @foreach($tags as $tag)
                            <a href="#">{{$tag}}</a>
                            @endforeach
                        </div>
                        <div class="blog__details__recent">
                            <h4>Recent Posts</h4>
                            <div class="row">
                                @foreach($blogs as $blog)
                                <div class="col-lg-4 col-md-6 col-sm-6">
                                    <div class="blog__details__recent__item">
                                        <a href="{{route('blog.details',$blog->slug)}}"><img src="{{asset($blog->image)}}" alt=""></a>
                                        <h4 class="my-2"><a href="{{route('blog.details',$blog->slug)}}">{{$blog->title}}</a></h4>
                                        <span>{{date('d-m-Y', strtotime($blog->created_at))}}</span>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                        <div class="blog__details__comment">
                            <h4>Leave a comment</h4>
                            <form action="#">
                                <div class="input__list">
                                    <input type="text" placeholder="Name">
                                    <input type="text" placeholder="Email">
                                    <input type="text" placeholder="Website">
                                </div>
                                <textarea placeholder="Comment"></textarea>
                                <button type="submit" class="site-btn">Send Message</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Blog Details Section End -->

@endsection
