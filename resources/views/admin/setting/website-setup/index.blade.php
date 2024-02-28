@extends('admin.layout.app')
@section('title','Website Setup')
@section('body')
    <div class="row">
        <div class="col-6 my-2">
            <p class="navbar-brand">Website Setup</p>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card table-responsive border shadow border-3 card-body">
                <div class="row border border-bottom-3 p-3">
                    @if(session('message'))
                        <p class="alert alert-success text-center" x-data="{show: true}" x-init="setTimeout(() => show = false, 5000)" x-show="show">{{session('message')}}</p>
                    @endif
                    @if(session('error'))
                        <p class="alert alert-danger text-center" x-data="{show: true}" x-init="setTimeout(() => show = false, 5000)" x-show="show">{{session('error')}}</p>
                    @endif

                    <div class="row justify-content-center p-3">
                        <div class="col-6 my-3">
                            <h5 class="fw-bold fs-3 text-center">Website Setup</h5>
                        </div>
                        <hr>
                        <div class="col-5 my-3">
                            <h4><strong>Company Name : </strong><span>{{$websiteSetup->website_name}}</span></h4>
                        </div>
                    </div>
                    <div class="row">
                            <div class="col-4 my-3 text-center">
                                <h4><img class="img-fluid" width="200" src="{{asset($websiteSetup->banner)}}" alt=""></h4>
                                <p>Banner</p>
                            </div>
                            <div class="col-4 my-3 text-center">
                                <h4><img class="img-fluid" width="200" src="{{asset($websiteSetup->logo)}}" alt=""></h4>
                                <p>Logo</p>
                            </div>
                            <div class="col-4 my-3 text-center">
                                <h4><img class="img-fluid" width="200" src="{{asset($websiteSetup->icon)}}" alt=""></h4>
                                <p>Icon</p>
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
                    <form class="form-horizontal" action="{{route('website.setup.update',$websiteSetup->id)}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="row mb-4">
                            <label for="website_name" class="col-md-3 form-label">Website Name</label>
                            <div class="col-md-9">
                                <input class="form-control" value="{{$websiteSetup->website_name}}" id="website_name" name="website_name" placeholder="Enter Website Name" type="text">
                                <span class="text-danger">{{$errors->has('website_name') ? $errors->first('website_name'):''}}</span>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label for="logo" class="col-md-3 form-label">Logo</label>
                            <div class="col-md-9">
                                <input type="file" class="dropify" name="logo" data-default-file="https://laravel8.spruko.com/noa/assets/images/photos/1.jpg" data-height="200"/>
                                <img src="{{asset($websiteSetup->logo)}}" alt="" width="100">
                                <span class="text-danger">{{$errors->has('logo') ? $errors->first('logo'):''}}</span>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label for="banner" class="col-md-3 form-label">Banner</label>
                            <div class="col-md-9">
                                <input type="file" class="dropify" name="banner" data-default-file="https://laravel8.spruko.com/noa/assets/images/photos/1.jpg" data-height="200"/>
                                <img src="{{asset($websiteSetup->banner)}}" alt="" width="100">
                                <span class="text-danger">{{$errors->has('banner') ? $errors->first('banner'):''}}</span>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label for="icon" class="col-md-3 form-label">Icon</label>
                            <div class="col-md-9">
                                <input type="file" class="dropify" name="icon" data-default-file="https://laravel8.spruko.com/noa/assets/images/photos/1.jpg" data-height="200"/>
                                <img src="{{asset($websiteSetup->icon)}}" alt="" width="100">
                                <span class="text-danger">{{$errors->has('icon') ? $errors->first('icon'):''}}</span>
                            </div>
                        </div>
                        <div class="row mb-4 d-flex form-group">
                            <div class="col-md-3">
                                <label class="" for="status">Publication Status</label>
                            </div>
                            <div class="col-md-9">
                                <select class="form-control select2 form-select" id="status" name="status" data-placeholder="Choose one">
                                    <option class="form-control" label="Choose one" disabled selected></option>
                                    <option {{$websiteSetup->status == 1 ? 'selected':''}} value="1">Active</option>
                                    <option {{$websiteSetup->status == 0 ? 'selected':''}} value="0">Inactive</option>
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
