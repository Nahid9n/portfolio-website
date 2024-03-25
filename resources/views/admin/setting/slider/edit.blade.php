@extends('admin.layout.app')
@section('title','Slider  Page')
@section('body')
    <!-- PAGE-HEADER -->
    <div class="page-header">
        <div>
            <h1 class="page-title">Slider  Module</h1>
        </div>
        <div class="ms-auto pageheader-btn">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0);">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Update Slider </li>
            </ol>
        </div>
    </div>
    <!-- PAGE-HEADER END -->
    <div class="row justify-content-center">
        <div class="col-lg-12 shadow">
            <div class="card shadow">
                <div class="card-header justify-content-center border-bottom">
                    <h2 class="fw-bold">Update Slider  Form</h2>
                    <hr>
                    <div class="col-5 text-end me-1">
                        <a href="{{route('slider.index')}}" class="btn text-dark px-5 btn-success">Slider Details</a>
                    </div>
                </div>

                <div class="card-body">
                    <form action="{{route('slider.update',$slider->id)}}" method="POST" enctype="multipart/form-data" class="form-horizontal">
                        @csrf
                        @method('PUT')
                        <div class="row mb-4">
                            <label for="title" class="col-md-3 form-label">Title <span class="text-danger">*</span></label>
                            <div class="col-md-9">
                                <input class="form-control" value="{{$slider->title}}" name="title" id="title" placeholder="type Title" type="text">
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label for="imgInp" class="col-md-3 form-label">Image (1920*684)<span class="text-danger">*</span></label>
                            <div class="col-md-9">
                                <input type="file" id="imgInp" class="dropify" name="image" data-height="200"/>
                                <img src="{{asset($slider->image)}}" width="300" height="100" alt="">
                                <span class="text-danger">{{$errors->has('image')?$errors->first('image'):''}}</span>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label for="imgInp" class="col-md-3 form-label">Banner</label>
                            <div class="col-md-9">
                                <input type="file" id="imgInp" class="dropify" name="banner" data-height="200"/>
                                <img src="{{asset($slider->banner)}}" width="100" height="100" alt="">
                                <span class="text-danger">{{$errors->has('banner')?$errors->first('banner'):''}}</span>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label for="slogan" class="col-md-3 form-label">Motto</label>
                            <div class="col-md-9">
                                <input class="form-control" value="{{$slider->slogan}}" id="slogan" name="slogan" placeholder="write your Slider slogan" type="text">
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label for="meta" class="col-md-3 form-label">Meta Title</label>
                            <div class="col-md-9">
                                <input class="form-control" value="{{$slider->meta}}" id="meta" name="meta" placeholder="write your Slider meta title" type="text">
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label for="summernote" class="col-md-3 form-label">Meta Description</label>
                            <div class="col-md-9">
                                <textarea name="meta_description" class="" id="summernote" cols="30"  rows="3">{{$slider->meta_description}}</textarea>
                            </div>
                        </div>
                        <div class="row mb-4 d-flex form-group">
                            <div class="col-md-3">
                                <label class="" for="type">Publication Status</label>
                            </div>
                            <div class="col-md-9">
                                <select class="form-control select2 form-select" name="status" data-placeholder="Choose one">
                                    <option class="form-control" label="Choose one" disabled selected></option>
                                    <option value="1" {{$slider->status == 1 ? 'selected':''}} >Active</option>
                                    <option value="0" {{$slider->status == 0 ? 'selected':''}}>Inactive</option>
                                </select>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label for="radio" class="col-md-3 form-label"></label>
                            <div class="col-md-9">
                                <button class="btn btn-primary" type="submit">Update Slider Info</button>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
