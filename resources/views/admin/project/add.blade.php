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
    <!--ROW OPENED-->
    <div class="row">
        <div class="col-lg-12 col-md-12">
            <div  class="card">
                <div class="card-header border-bottom">
                    <h3 class="card-title">Create New Project</h3>
                </div>
                <div class="text-end">
                    <a href="{{route('projects.index')}}" class="btn btn-success my-1 float-end mx-2 text-center">All Project</a>
                </div>
                <div class="card-body p-0 create-project-main">
                    <form class="form-horizontal" action="{{route('projects.store')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row p-5 border-bottom">
                            <div class="col-sm-12 col-md-12 col-xl-6">
                                <div class="form-group">
                                    <label for="project-name" class="form-label text-muted">Project Name:</label>
                                    <div class="input-group">
                                        <input id="project-name" type="text" class="form-control text-dark" name="title" placeholder="Enter Project Name">
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-12 col-xl-3">
                                <div class="form-group">
                                    <label for="project-start-date" class="form-label text-muted">Start Date:</label>
                                    <div class="input-group " data-date-format="dd-mm-yyyy">
                                        <span class="input-group-addon input-group-text bg-primary-transparent"><i class="fe fe-calendar text-primary-dark"></i></span>
                                        <input name="start_date" class="form-control" type="date" value="" placeholder=""/>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-12 col-xl-3">
                                <div class="form-group">
                                    <label for="project-end-date" class="form-label text-muted">End Date:</label>
                                    <div class="input-group " data-date-format="dd-mm-yyyy">
                                        <span class="input-group-addon input-group-text bg-primary-transparent"><i class="fe fe-calendar text-primary-dark"></i></span>
                                        <input name="end_date" class="form-control" type="date" value="" placeholder=""/>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-12 col-xl-4">
                                <div class="form-group">
                                    <label for="project-category" class="form-label text-muted">Project Category:</label>
                                    <select class="form-control select2 select2-show-search" id="project-category" data-placeholder="Choose one with search" name="category_id">
                                        <option>No Category</option>
                                        @forelse($categories as $category)
                                            <option value="{{$category->id}}">{{$category->name}}</option>
                                        @empty
                                            <option>No Category Found</option>
                                        @endforelse
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-12 col-xl-4">
                                <div class="form-group">
                                    <label class="form-label">Team : </label>
                                    <select multiple class="form-control select2 select2-show-search form-select" data-placeholder="Choose one with search" name="team_id[]">
                                        <option >No Team</option>
                                        @forelse($teams as $team)
                                        <option value="{{$team->id}}">{{$team->name}}</option>
                                        @empty
                                            <option>No Team Found</option>
                                        @endforelse
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-12 col-xl-4">
                                <div class="form-group">
                                    <label for="project-category" class="form-label text-muted">Client:</label>
                                    <select class="form-control select2 select2-show-search" id="project-category" data-placeholder="Choose one with search" name="client_id">
                                        <option>No Client</option>
                                        @forelse($clients as $client)
                                            <option value="{{$client->id}}">{{$client->name}}</option>
                                        @empty
                                            <option>No Client Found</option>
                                        @endforelse
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-12 col-xl-6">
                                <label class="form-label text-muted">Project Summary: </label>
                                <div class="form-group">
                                    <textarea class="form-control" name="short_details" id="" cols="30" rows="5"></textarea>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-12 col-xl-6">
                                <label class="form-label text-muted">Project Details: </label>
                                <div class="form-group">
                                    <textarea class="form-control" name="long_details" id="summernote2" cols="30" rows="5"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row p-5 border-bottom">
                            <div class="col-xl-12">
                                <div class="row mb-4">
                                    <label for="image" class="col-md-3 form-label">Image</label>
                                    <div class="col-md-9">
                                        <input type="file" class="dropify" name="image" data-default-file="https://laravel8.spruko.com/noa/assets/images/photos/1.jpg" data-height="200"/>
                                        <span class="text-danger">{{$errors->has('image') ? $errors->first('image'):''}}</span>
                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <label for="image" class="col-md-3 form-label">Other Images</label>
                                    <div class="col-md-9">
                                        <input type="file" class="form-control-file" name="other_images[]" data-default-file="https://laravel8.spruko.com/noa/assets/images/photos/1.jpg" data-height="200" multiple/>
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
                                    <label for="code" class="col-md-3 form-label">Code</label>
                                    <div class="col-md-9">
                                        <input class="form-control" value="{{old('code')}}" id="code" name="code" placeholder="Enter code name" type="text">
                                        <span class="text-danger">{{$errors->has('code') ? $errors->first('code'):''}}</span>
                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <label for="commit" class="col-md-3 form-label">Commit</label>
                                    <div class="col-md-9">
                                        <input class="form-control" value="{{old('commit')}}" id="commit" name="commit" placeholder="Enter commit number" type="number">
                                        <span class="text-danger">{{$errors->has('commit') ? $errors->first('commit'):''}}</span>
                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <label for="progress" class="col-md-3 form-label">Progress</label>
                                    <div class="col-md-9">
                                        <input class="form-control" value="{{old('progress')}}" id="progress" name="progress" placeholder="Enter progress number" type="number">
                                        <span class="text-danger">{{$errors->has('progress') ? $errors->first('progress'):''}}</span>
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
                                        <label class="" for="panel">Panel</label>
                                    </div>
                                    <div class="col-md-9">
                                        <select class="form-control select2 form-select" name="panel" id="panel" data-placeholder="Choose one">
                                            <option class="form-control" label="Choose one" disabled selected></option>
                                            <option selected value="one">one</option>
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
                                            <option selected value="Coming_Soon">Coming Soon</option>
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
                            </div>
                        </div>
                        <div class="row p-5">
                            <div class="btn-list text-end">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fe fe-check-circle"></i>
                                    create project
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!--ROW CLOSED-->
@endsection


