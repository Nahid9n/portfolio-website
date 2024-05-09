@extends('website.layout.app')
@section('title','Blog Details')
@section('body')
    <!-- Blog Details Hero Begin -->
    <section class="blog-hero spad set-bg" data-setbg="{{asset($blog->image)}}">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-lg-8">
                    <div class="blog__hero__text ">
                        <h2 class="text-white"><span class="bg-primary p-2">{{$blog->title}}</span></h2>
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
                        <div class="blog__details__content">
                                <!-- Comments Section -->
                                <div class="mb-4">
                                    <!-- Comment -->
                                    @foreach($comments as $key=>$comment)
                                        <div class="mb-3">
                                            <div class="d-flex justify-content-between align-items-center">
                                                <div>
                                                    <h6 class="mb-0 text-white">{{$comment->name}}</h6>
                                                    <small class="text-muted text-white">Posted on {{date_format($comment->created_at,'d M,Y h:m A')}}</small>
                                                </div>
                                                <button class="btn btn-sm btn-primary btn-reply mx-3">Reply</button>
                                            </div>
                                            <p class="mt-2 text-white">{{$comment->comment}}</p>
                                        </div>
                                        <!-- Reply Form (Initially Hidden) -->
                                        <div class="bg-light p-3 replyComment mb-3 ms-5 d-none" id="reply{{$key}}">
                                            <form action="{{route('blog.store.reply')}}" method="post">
                                                @csrf
                                                <input type="hidden" name="comment_id" value="{{$comment->id}}">
                                                <div class="">
                                                    <input type="text" name="name" class="form-control bg-dark my-2 text-white" placeholder="Name">
                                                    <input type="email" name="email" class="form-control bg-dark text-white" placeholder="Email">
                                                </div>
                                                <textarea placeholder="reply" name="reply" class="form-control bg-dark  text-white my-2"></textarea>
                                                <button type="submit" class="site-btn">Send Reply</button>
                                            </form>
                                        </div>
                                            @foreach($comment->replies as $reply)
                                                <div class="mx-5 mb-3">
                                                    <div class="d-flex justify-content-between align-items-center">
                                                        <div>
                                                            <h6 class="mb-0 text-white">{{$reply->name}}</h6>
                                                            <small class="text-muted text-white">Posted on {{date_format($reply->created_at,'d M,Y h:s A')}}</small>
                                                        </div>
                                                    </div>
                                                    <p class="mt-2 text-white">{{$reply->reply}}</p>
                                                </div>
                                            @endforeach

                                        <hr class="bg-white">
                                    @endforeach
                                </div>
                            </div>
                        <div class="blog__details__comment">
                            <h4>Leave a comment</h4>
                            <!-- Reply Form (Initially Hidden) -->
                            <div class="bg-light p-3 mb-3 ms-5">
                                <form action="{{route('blog.store.comment')}}" method="post">
                                    @csrf
                                    <input type="hidden" name="blog_id" value="{{$blog->id}}" readonly>
                                    <div class="">
                                        <input type="text" name="name" class="form-control bg-dark my-2 text-white" placeholder="Name">
                                        <input type="email" name="email" class="form-control bg-dark text-white" placeholder="Email">
                                    </div>
                                    <textarea placeholder="Comment" name="comment" class="form-control bg-dark  text-white my-2"></textarea>
                                    <button type="submit" class="site-btn">Send Message</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <h4 class="text-white">Recent Posts</h4>
                    <hr class="bg-white">
                    <div class="row my-3">
                        @foreach($blogs as $blog)
                            <div class="col-lg-12 col-md-6 col-sm-6">
                                <div class="text-white">
                                    <a href="{{route('blog.details',$blog->slug)}}">
                                        @if($blog->image != '')
                                            <img src="{{asset($blog->image)}}" alt="" class="img-container" width="250" height="150">
                                        @else
                                            <img src="{{asset('/')}}website/assets/img/no_image.jpg" alt="" class="img-container"  width="250" height="150">
                                        @endif
                                    </a>
                                    <h5 class="my-2"><a href="{{route('blog.details',$blog->slug)}}">{{$blog->title}}</a></h5>
                                    <span>{{date('d-m-Y', strtotime($blog->created_at))}}</span>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Blog Details Section End -->
@endsection
@push('js')
    <script>
        $(document).ready(function(){
            $('.btn-reply').click(function(){
                $(this).parent().parent().next('.replyComment').toggleClass('d-none');
            });
        });
    </script>
@endpush
