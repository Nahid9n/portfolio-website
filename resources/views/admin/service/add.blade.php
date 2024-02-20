@extends('admin.layout.app')
@section('title', 'Add Service Page')
@section('body')
    <div class="page-header">
        <div>
            <h1 class="page-title">Service Module</h1>
        </div>
        <div class="ms-auto pageheader-btn">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0);">Service</a></li>
                <li class="breadcrumb-item active" aria-current="page">Create Service</li>
            </ol>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header border-bottom justify-content-between">
                    <h3 class="card-title">Create Service </h3>
                    <a class="btn btn-primary py-2" href="#">
                        <h3>All Category</h3>
                    </a>
                </div>
                <div class="card-body">
                    <form class="form-horizontal" action="" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row mb-4">
                            <label for="name" class="col-md-3 form-label">Service Icon</label>
                            <div class="col-md-9">
                                <input class="form-control" id="name" required value="{{ old('name') }}" name="name" placeholder="Enter your category name" type="text">
                                <span class="text-danger">{{ $errors->has('name') ? $errors->first('name') : '' }}</span>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label for="name" class="col-md-3 form-label">Service Name</label>
                            <div class="col-md-9">
                                <input class="form-control" id="name" required value="{{ old('name') }}" name="name" placeholder="Enter your category name" type="text">
                                <span class="text-danger">{{ $errors->has('name') ? $errors->first('name') : '' }}</span>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label for="name" class="col-md-3 form-label">Short Description</label>
                            <div class="col-md-9">
                                <textarea name="short_description" placeholder="Enter Short Description" id="" cols="30" rows="10"></textarea>
                                <span class="text-danger">{{ $errors->has('short_description') ? $errors->first('column') : '' }}</span>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label for="name" class="col-md-3 form-label">Long Description</label>
                            <div class="col-md-9">
                                <textarea name="long_description" placeholder="Enter Long Description" id="" cols="30" rows="10"></textarea>
                                <span class="text-danger">{{ $errors->has('long_description') ? $errors->first('column') : '' }}</span>
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
                        <button class="btn btn-primary px-4 float-end" type="submit">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
