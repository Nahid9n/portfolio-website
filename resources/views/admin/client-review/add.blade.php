@extends('admin.layout.app')
@section('title', 'Add Client Review Page')
@section('body')
    <div class="page-header">
        <div>
            <h1 class="page-title">Client Review Module</h1>
        </div>
        <div class="ms-auto pageheader-btn">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0);">Blog</a></li>
                <li class="breadcrumb-item active" aria-current="page">Create Blog</li>
            </ol>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header border-bottom justify-content-between">
                    <h3 class="card-title">Create Review</h3>
                    <a href="{{route('client-review.index')}}" class="btn btn-primary px-4 float-end" type="submit">All Review</a>
                </div>
                <div class="card-body">

                    <form class="form-horizontal" action="{{route('client-review.store')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row mb-4">
                            <label for="image" class="col-md-3 form-label">Photo</label>
                            <div class="col-md-9">
                                <input type="file" class="dropify" name="image" data-default-file="https://laravel8.spruko.com/noa/assets/images/photos/1.jpg" data-height="200"/>
                                <span class="text-danger">{{$errors->has('image') ? $errors->first('image'):''}}</span>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label for="name" class="col-md-3 form-label">Client Name<span class="text-danger">*</span></label>
                            <div class="col-md-9">
                                <input class="form-control" id="name" required value="{{ old('name') }}" name="name" placeholder="Enter Client Name" type="text">
                                <span class="text-danger">{{ $errors->has('name') ? $errors->first('name') : '' }}</span>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label for="designation" class="col-md-3 form-label">Designation</label>
                            <div class="col-md-9">
                                <input class="form-control" id="designation" required value="" name="designation" placeholder="Enter Your Designation" type="text">
                                <span class="text-danger">{{ $errors->has('designation') ? $errors->first('designation') : '' }}</span>
                            </div>
                        </div>

                        <div class="row mb-4">
                            <label for="review" class="col-md-3 form-label">Review</label>
                            <div class="col-md-9">
                                <textarea class="form-control"  name="review" placeholder="Enter review" id="summernote" cols="30" rows="10">{{old('review')}}</textarea>
                                <span class="text-danger">{{ $errors->has('review') ? $errors->first('review') : '' }}</span>
                            </div>
                        </div>
                        <div class="row mb-4 d-flex form-group">
                            <div class="col-md-3">
                                <label class="" for="type"> Status</label>
                            </div>
                            <div class="col-md-9">
                                <select class="form-control" name="status">
                                    <option selected value="1">Active</option>
                                    <option value="0">Inactive</option>
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

