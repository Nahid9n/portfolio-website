@extends('admin.layout.app')
@section('title','Add Project Member')
@section('body')
    <!-- PAGE-HEADER -->
    <div class="page-header">
        <div>
            <h1 class="page-title">Project Module</h1>
        </div>
        <div class="ms-auto pageheader-btn">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0);">Project</a></li>
                <li class="breadcrumb-item active" aria-current="page">Create Project</li>
            </ol>
        </div>
    </div>
    <!-- PAGE-HEADER END -->
    <!-- row -->
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header border-bottom">
                    <h3 class="card-title">Create New Project</h3>
                </div>
                <div class="text-end">
                    <a href="{{route('teams.index')}}" class="btn btn-success my-1 float-end mx-2 text-center">All Project</a>
                </div>
                <div class="card-body">
                    <p class="alert alert-success text-center" x-data="{show: true}" x-init="setTimeout(() => show = false, 5000)" x-show="show">{{session('message')}}</p>
                    <form class="form-horizontal" action="{{route('teams.store')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row mb-4">
                            <label for="image" class="col-md-3 form-label">Image</label>
                            <div class="col-md-9">
                                <input type="file" class="dropify" name="image" data-default-file="https://laravel8.spruko.com/noa/assets/images/photos/1.jpg" data-height="200"/>
                                <span class="text-danger">{{$errors->has('image') ? $errors->first('image'):''}}</span>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label for="video" class="col-md-3 form-label">Video</label>
                            <div class="col-md-9">
                                <input type="file" class="dropify" name="video" data-default-file="https://laravel8.spruko.com/noa/assets/images/photos/1.jpg" data-height="200"/>
                                <span class="text-danger">{{$errors->has('video') ? $errors->first('video'):''}}</span>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label for="title" class="col-md-3 form-label">title</label>
                            <div class="col-md-9">
                                <input class="form-control" id="title" required value="{{old('title')}}" name="title" placeholder="Enter your title" type="text">
                                <span class="text-danger">{{$errors->has('title') ? $errors->first('title'):''}}</span>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label for="short_details" class="col-md-3 form-label">Short Details</label>
                            <div class="col-md-9">
                                <input class="form-control" value="{{old('short_details')}}" id="short_details" name="short_details" placeholder="Enter phone number" type="number">
                                <span class="text-danger">{{$errors->has('short_details') ? $errors->first('short_details'):''}}</span>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label for="long_details" class="col-md-3 form-label">Long Details</label>
                            <div class="col-md-9">
                                <input class="form-control" value="{{old('long_details')}}" id="long_details" name="long_details" placeholder="Enter Long Details" type="email">
                                <span class="text-danger">{{$errors->has('long_details') ? $errors->first('long_details'):''}}</span>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label for="code" class="col-md-3 form-label">Code</label>
                            <div class="col-md-9">
                                <input class="form-control" value="{{old('code')}}" id="code" name="code" placeholder="Enter code number" type="number">
                                <span class="text-danger">{{$errors->has('code') ? $errors->first('code'):''}}</span>
                            </div>
                        </div>
                        <div class="row mb-4 d-flex form-group">
                            <div class="col-md-3">
                                <label class="" for="project_type">project_type</label>
                            </div>
                            <div class="col-md-9">
                                <select class="form-control select2 form-select" name="project_type" id="project_type" data-placeholder="Choose one">
                                    <option class="form-control" label="Choose one" disabled selected></option>
                                    <option selected value="Ecommerce">Ecommerce app</option>
                                    <option value="Blog">Blog</option>
                                    <option value="Restaurant website">Restaurant website</option>
                                </select>
                            </div>
                        </div>
                        <div class="row mb-4 d-flex form-group">
                            <div class="col-md-3">
                                <label class="" for="vendor">vendor</label>
                            </div>
                            <div class="col-md-9">
                                <select class="form-control select2 form-select" name="vendor" id="vendor" data-placeholder="Choose one">
                                    <option class="form-control" label="Choose one" disabled selected></option>
                                    <option selected value="single">single Vendor</option>
                                    <option value="multi">multi vendor</option>
                                </select>
                            </div>
                        </div>
                        <div class="row mb-4 d-flex form-group">
                            <div class="col-md-3">
                                <label class="" for="vendor">Panel</label>
                            </div>
                            <div class="col-md-9">
                                <select class="form-control select2 form-select" name="vendor" id="vendor" data-placeholder="Choose one">
                                    <option class="form-control" label="Choose one" disabled selected></option>
                                    <option selected value="single">one</option>
                                    <option selected value="two">two</option>
                                    <option selected value="three">three</option>
                                    <option selected value="four">four</option>
                                    <option selected value="five">five</option>
                                    <option selected value="six">six</option>
                                    <option selected value="seven">seven</option>
                                    <option selected value="eight">eight</option>
                                    <option selected value="nine">nine</option>
                                    <option selected value="ten">ten</option>
                                </select>
                            </div>
                        </div>
                        <div class="row mb-4 d-flex form-group">
                            <div class="col-md-3">
                                <label class="" for="live_status">live status</label>
                            </div>
                            <div class="col-md-9">
                                <select class="form-control select2 form-select" name="live_status" id="live_status" data-placeholder="Choose one">
                                    <option class="form-control" label="Choose one" disabled selected></option>
                                    <option selected value="Coming Soon">Coming Soon</option>
                                    <option value="Live">Live</option>
                                    <option value="Working">Working</option>
                                </select>
                            </div>
                        </div>
                        <div class="row mb-4 d-flex form-group">
                            <div class="col-md-3">
                                <label class="" for="status">Publication Status</label>
                            </div>
                            <div class="col-md-9">
                                <select class="form-control select2 form-select" id="status" name="status" data-placeholder="Choose one">
                                    <option class="form-control" label="Choose one" disabled selected></option>
                                    <option selected value="1">Active</option>
                                    <option value="0">Inactive</option>
                                </select>
                            </div>
                        </div>
                        <button class="btn btn-primary px-4" type="submit">Create Project</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- /row -->
@endsection


