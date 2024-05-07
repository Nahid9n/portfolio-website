@extends('admin.layout.app')
@section('title','About Module')
@section('body')
    <div class="row">
        <div class="col-6 my-2">
            <p class="navbar-brand">About Setup</p>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card table-responsive border shadow border-3 card-body">
                <div class="row border border-bottom-3 p-3">

                    @if(session('error'))
                        <p class="alert alert-danger text-center" x-data="{show: true}" x-init="setTimeout(() => show = false, 5000)" x-show="show">{{session('error')}}</p>
                    @endif
                    <div class="row bg-success-transparent p-5 rounded-2">
                        <div class="col-md-6">
                            <div class="row">
                                <div class="col-md-7">
                                    <img class="p-0" width="300" height="500" src="{{asset($about->image1)}}" alt="">
                                </div>
                                <div class="col-md-5">
                                    <div class="my-2">
                                        <img class="p-0" width="200" height="250" src="{{asset($about->image2)}}" alt="">
                                    </div>
                                    <div class="">
                                        <img class="p-0" width="200" height="250" src="{{asset($about->image3)}}" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <h2><strong>Title : </strong><span>{{$about->title}}</span></h2>
                            <h5 class="mt-2">{!! $about->description !!}</h5>
                        </div>
                    </div>
                </div>
            </div>

            <div class="">

            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <form class="form-horizontal" action="{{route('website.about.update',$about->id)}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="row mb-4">
                            <label for="title" class="col-md-3 form-label">Title</label>
                            <div class="col-md-9">
                                <input class="form-control" value="{{$about->title}}" id="title" name="title" placeholder="Enter Website Name" type="text">
                                <span class="text-danger">{{$errors->has('title') ? $errors->first('title'):''}}</span>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label for="image1" class="col-md-3 form-label">Image1</label>
                            <div class="col-md-9">
                                <input type="file" class="dropify" name="image1" data-default-file="https://laravel8.spruko.com/noa/assets/images/photos/1.jpg" data-height="200"/>
                                <img class="w-25" src="{{asset($about->image1)}}" alt="">
                                <span class="text-danger">{{$errors->has('image1') ? $errors->first('image1'):''}}</span>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label for="image2" class="col-md-3 form-label">Image2</label>
                            <div class="col-md-9">
                                <input type="file" class="dropify" name="image2" data-default-file="https://laravel8.spruko.com/noa/assets/images/photos/1.jpg" data-height="200"/>
                                <img class="w-25" src="{{asset($about->image2)}}" alt="">
                                <span class="text-danger">{{$errors->has('image2') ? $errors->first('image2'):''}}</span>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label for="image3" class="col-md-3 form-label">Image3</label>
                            <div class="col-md-9">
                                <input type="file" class="dropify" name="image3" data-default-file="https://laravel8.spruko.com/noa/assets/images/photos/1.jpg" data-height="200"/>
                                <img class="w-25" src="{{asset($about->image3)}}" alt="">
                                <span class="text-danger">{{$errors->has('image3') ? $errors->first('image3'):''}}</span>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label for="description" class="col-md-3 form-label"> Description</label>
                            <div class="col-md-9">
                                <textarea class="form-control"  name="description" placeholder="Enter Long Description" id="summernote" cols="30" rows="10">{{$about->description}}</textarea>
                                <span class="text-danger">{{ $errors->has('description') ? $errors->first('description') : '' }}</span>
                            </div>
                        </div>
                        <div class="row mb-4 d-flex form-group">
                            <div class="col-md-3">
                                <label class="" for="status">Publication Status</label>
                            </div>
                            <div class="col-md-9">
                                <select class="form-control select2 form-select" id="status" name="status" data-placeholder="Choose one">
                                    <option class="form-control" label="Choose one" disabled selected></option>
                                    <option {{$about->status == 1 ? 'selected':''}} value="1">Active</option>
                                    <option {{$about->status == 0 ? 'selected':''}} value="0">Inactive</option>
                                </select>
                            </div>
                        </div>

                        <div class="row mb-4 d-flex form-group">
                            <div class="col-md-3">
                                <label class="" for="type"></label>
                            </div>
                            <div class="col-md-9">
                                <button class="btn btn-primary px-5" type="submit">Submit</button>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
