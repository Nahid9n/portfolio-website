@extends('admin.layout.app')
@section('title','Edit Team')
@section('body')
    <!-- PAGE-HEADER -->
    <div class="page-header">
        <div>
            <h1 class="page-title">Team Module</h1>
        </div>
        <div class="ms-auto pageheader-btn">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0);">Team</a></li>
                <li class="breadcrumb-item active" aria-current="page">Update Team</li>
            </ol>
        </div>
    </div>
    <!-- PAGE-HEADER END -->
    <!-- row -->
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header border-bottom">
                    <h3 class="card-title">Create New Team</h3>
                </div>
                <div class="text-end">
                    <a href="{{route('teams.index')}}" class="btn btn-success my-1 float-end mx-2 text-center">All Team</a>
                </div>
                <div class="card-body">
                    <form class="form-horizontal" action="{{route('teams.update',$team->id)}}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="row mb-4">
                            <label for="image" class="col-md-3 form-label">Image</label>
                            <div class="col-md-9">
                                <input type="file" class="dropify" name="image" data-default-file="https://laravel8.spruko.com/noa/assets/images/photos/1.jpg" data-height="200"/>
                                <img width="70" height="70" src="{{asset($team->image)}}" alt="">
                                <span class="text-danger">{{$errors->has('image') ? $errors->first('image'):''}}</span>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label for="name" class="col-md-3 form-label">Name <span class="text-danger">*</span></label>
                            <div class="col-md-9">
                                <input class="form-control" id="name" required value="{{$team->name}}" name="name" placeholder="Enter your name" type="text">
                                <span class="text-danger">{{$errors->has('name') ? $errors->first('name'):''}}</span>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label for="phone" class="col-md-3 form-label">Phone Number</label>
                            <div class="col-md-9">
                                <input class="form-control" value="{{$team->phone}}" id="phone" name="phone" placeholder="Enter phone number" type="number">
                                <span class="text-danger">{{$errors->has('phone') ? $errors->first('phone'):''}}</span>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label for="email" class="col-md-3 form-label">Email Address</label>
                            <div class="col-md-9">
                                <input class="form-control" value="{{$team->email}}" id="email" name="email" placeholder="Enter email address" type="email">
                                <span class="text-danger">{{$errors->has('email') ? $errors->first('email'):''}}</span>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label for="date_of_birth" class="col-md-3 form-label">Date of Birth</label>
                            <div class="col-md-9">
                                <input class="form-control" value="{{$team->date_of_birth}}" id="date_of_birth" name="date_of_birth" placeholder="Enter email address" type="date">
                                <span class="text-danger">{{$errors->has('date_of_birth') ? $errors->first('date_of_birth'):''}}</span>
                            </div>
                        </div>
                        <div class="row mb-4 d-flex form-group">
                            <div class="col-md-3">
                                <label class="" for="gender">Gender</label>
                            </div>
                            <div class="col-md-9">
                                <select class="form-control select2 form-select" name="gender" id="gender" data-placeholder="Choose one">
                                    <option class="form-control" label="Choose one" disabled selected></option>
                                    <option {{$team->gender == 'male' ? 'selected':''}} selected value="male">Male</option>
                                    <option {{$team->gender == 'female' ? 'selected':''}} value="female">Female</option>
                                    <option {{$team->gender == 'other' ? 'selected':''}} value="other">other</option>
                                </select>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label for="address" class="col-md-3 form-label">Address</label>
                            <div class="col-md-9">
                                <input class="form-control" value="{{$team->address}}" id="address" name="address" placeholder="Enter address" type="number">
                                <span class="text-danger">{{$errors->has('address') ? $errors->first('address'):''}}</span>
                            </div>
                        </div>
                        <div class="row mb-4 d-flex form-group">
                            <div class="col-md-3">
                                <label class="" for="country">Country</label>
                            </div>
                            <div class="col-md-9">
                                <select class="form-control select2 form-select" name="country" id="country" data-placeholder="Choose one">
                                    <option class="form-control" label="Choose one" disabled selected></option>
                                    <option {{$team->country == 'Bangladesh' ? 'selected':''}} value="Bangladesh">Bangladesh</option>
                                    <option {{$team->country == 'India' ? 'selected':''}} value="India">India</option>
                                    <option {{$team->country == 'Pakistan' ? 'selected':''}} value="Pakistan">Pakistan</option>
                                </select>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label for="company" class="col-md-3 form-label">company</label>
                            <div class="col-md-9">
                                <input class="form-control" value="{{$team->company}}" id="company" name="company" placeholder="Enter company name" type="text">
                                <span class="text-danger">{{$errors->has('company') ? $errors->first('company'):''}}</span>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label for="website" class="col-md-3 form-label">website</label>
                            <div class="col-md-9">
                                <input class="form-control" value="{{$team->website}}" id="website" name="website" placeholder="Enter website address" type="text">
                                <span class="text-danger">{{$errors->has('website') ? $errors->first('website'):''}}</span>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label for="facebook" class="col-md-3 form-label">facebook</label>
                            <div class="col-md-9">
                                <input class="form-control" value="{{$team->facebook}}" id="company" name="facebook" placeholder="Enter facebook link" type="text">
                                <span class="text-danger">{{$errors->has('facebook') ? $errors->first('facebook'):''}}</span>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label for="linkedIn" class="col-md-3 form-label">linkedIn</label>
                            <div class="col-md-9">
                                <input class="form-control" value="{{$team->linkedIn}}" id="linkedIn" name="linkedIn" placeholder="Enter linkedIn" type="text">
                                <span class="text-danger">{{$errors->has('linkedIn') ? $errors->first('linkedIn'):''}}</span>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label for="twitter" class="col-md-3 form-label">twitter</label>
                            <div class="col-md-9">
                                <input class="form-control" value="{{$team->twitter}}" id="twitter" name="twitter" placeholder="Enter twitter" type="text">
                                <span class="text-danger">{{$errors->has('twitter') ? $errors->first('twitter'):''}}</span>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label for="youtube" class="col-md-3 form-label">youtube</label>
                            <div class="col-md-9">
                                <input class="form-control" value="{{$team->youtube}}" id="twitter" name="youtube" placeholder="Enter youtube" type="text">
                                <span class="text-danger">{{$errors->has('youtube') ? $errors->first('youtube'):''}}</span>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label for="instagram" class="col-md-3 form-label">instagram</label>
                            <div class="col-md-9">
                                <input class="form-control" value="{{$team->instagram}}" id="instagram" name="instagram" placeholder="Enter instagram" type="text">
                                <span class="text-danger">{{$errors->has('instagram') ? $errors->first('instagram'):''}}</span>
                            </div>
                        </div>
                        <div class="row mb-4 d-flex form-group">
                            <div class="col-md-3">
                                <label class="" for="status">Publication Status</label>
                            </div>
                            <div class="col-md-9">
                                <select class="form-control select2 form-select" id="status" name="status" data-placeholder="Choose one">
                                    <option class="form-control" label="Choose one" disabled selected></option>
                                    <option {{$team->status == 1 ? 'selected':''}} value="1">Active</option>
                                    <option {{$team->status == 0 ? 'selected':''}} value="0">Inactive</option>
                                </select>
                            </div>
                        </div>
                        <button class="btn btn-primary px-4" type="submit">Create Team</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- /row -->
@endsection
