@extends('admin.layout.app')
@section('title','Edit Project Member')
@section('body')
    <!-- PAGE-HEADER -->
    <div class="page-header">
        <div>
            <h1 class="page-title">Project Module</h1>
        </div>
        <div class="ms-auto pageheader-btn">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0);">Project</a></li>
                <li class="breadcrumb-item active" aria-current="page">Edit Project</li>
            </ol>
        </div>
    </div>
    <!-- PAGE-HEADER END -->
    <!--ROW OPENED-->
    <div class="row">
        <div class="col-lg-12 col-md-12">
            <div  class="card">
                <div class="card-header border-bottom">
                    <h3 class="card-title">Edit Project</h3>
                </div>
                <div class="text-end">
                    <a href="{{route('projects.index')}}" class="btn btn-success my-1 float-end mx-2 text-center">All Project</a>
                </div>
                <div class="card-body p-0 create-project-main">
                    <form class="form-horizontal" action="{{route('projects.update',$project->id)}}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="row p-5 border-bottom">
                            <div class="col-sm-12 col-md-12 col-xl-6">
                                <div class="form-group">
                                    <label for="project-name" class="form-label text-muted">Project Name:</label>
                                    <div class="input-group">
                                        <input id="project-name" type="text" class="form-control text-dark" name="title" value="{{$project->title}}" placeholder="Enter Project Name">
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-12 col-xl-3">
                                <div class="form-group">
                                    <label for="project-start-date" class="form-label text-muted">Start Date:</label>
                                    <div class="input-group">
                                        <span class="input-group-addon input-group-text bg-primary-transparent"><i class="fe fe-calendar text-primary-dark"></i></span>
                                        <input name="start_date" class="form-control" type="date" value="{{$project->start_date}}" placeholder="{{$project->start_date}}"/>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-12 col-xl-3">
                                <div class="form-group">
                                    <label for="project-end-date" class="form-label text-muted">End Date:</label>
                                    <div class="input-group ">
                                        <span class="input-group-addon input-group-text bg-primary-transparent"><i class="fe fe-calendar text-primary-dark"></i></span>
                                        <input name="end_date" class="form-control" type="date" value="{{$project->end_date}}" placeholder="{{$project->end_date}}"/>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-12 col-md-12 col-xl-4">
                                <div class="form-group">
                                    <label for="project-category" class="form-label text-muted">Project Category:</label>
                                    <select class="form-control select2 select2-show-search" id="project-category" data-placeholder="Choose one with search" name="category_id">
                                        <option>No Category</option>
                                        @forelse($categories as $category)
                                            <option value="{{$category->id}}" {{$category->id == $project->category_id ? 'selected':''}}>{{$category->name}}</option>
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
                                            <option value="{{$team->id}}" @foreach($teamss as $teams)@selected($team->id == $teams->id)@endforeach>{{$team->name}}</option>
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
                                            <option value="{{$client->id}}" @selected($client->id == $project->client_id)>{{$client->name}}</option>
                                        @empty
                                            <option>No Client Found</option>
                                        @endforelse
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-12 col-xl-6">
                                <label class="form-label text-muted">Project Summary: </label>
                                <div class="form-group">
                                    <textarea class="form-control" name="short_details" id="" cols="30" rows="5">{{$project->short_details}}</textarea>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-12 col-xl-6">
                                <label class="form-label text-muted">Project Details: </label>
                                <div class="form-group">
                                    <textarea class="form-control" name="long_details" id="summernote2" cols="30" rows="5">{{$project->long_details}}</textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row p-5 border-bottom">
                            <div class="col-xl-12">
                                <div class="row mb-4">
                                    <label for="image" class="col-md-3 form-label">Image</label>
                                    <div class="col-md-9">
                                        <input type="file" class="dropify" name="image" data-default-file="https://laravel8.spruko.com/noa/assets/images/photos/1.jpg" data-height="200"/>
                                        @if($project->image != '')
                                            <img src="{{asset($project->image)}}" alt="" width="100" height="100">
                                        @else
                                            <p>No Image</p>
                                        @endif
                                        <span class="text-danger">{{$errors->has('image') ? $errors->first('image'):''}}</span>
                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <label for="image" class="col-md-3 form-label">Other Images</label>
                                    <div class="col-md-9">
                                        <input type="file" class="form-control-file" name="other_images[]" data-default-file="https://laravel8.spruko.com/noa/assets/images/photos/1.jpg" data-height="200" multiple/>
                                        @forelse($images as $image)
                                            <img width="100" height="100" class="img-fluid" src="{{asset($image->image)}}" alt="">
                                        @empty
                                            <p>No Other Images</p>
                                        @endforelse
                                        <span class="text-danger">{{$errors->has('image') ? $errors->first('image'):''}}</span>
                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <label for="video" class="col-md-3 form-label">Video</label>
                                    <div class="col-md-9">
                                        <input type="file" class="dropify" name="video" data-default-file="https://laravel8.spruko.com/noa/assets/images/photos/1.jpg" data-height="200"/>
                                        @if($project->image != '')
                                        <video width="300" height="200" controls>
                                            <source src="{{asset($project->video)}}" type="video/mp4">
                                            Your browser does not support the video tag.
                                        </video>
                                        @else
                                            <p>No Video</p>
                                        @endif
                                        <span class="text-danger">{{$errors->has('video') ? $errors->first('video'):''}}</span>
                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <label for="code" class="col-md-3 form-label">Code</label>
                                    <div class="col-md-9">
                                        <input class="form-control" value="{{$project->code}}" id="code" name="code"  placeholder="Enter code name" type="text">
                                        <span class="text-danger">{{$errors->has('code') ? $errors->first('code'):''}}</span>
                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <label for="commit" class="col-md-3 form-label">Commit</label>
                                    <div class="col-md-9">
                                        <input class="form-control" value="{{$project->commit}}" id="commit" name="commit" placeholder="Enter commit number" type="number">
                                        <span class="text-danger">{{$errors->has('commit') ? $errors->first('commit'):''}}</span>
                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <label for="progress" class="col-md-3 form-label">Progress</label>
                                    <div class="col-md-9">
                                        <input class="form-control" value="{{$project->progress}}" id="progress" name="progress" placeholder="Enter progress number" type="number">
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
                                            <option selected value="single" {{$project->vendor == 'single'?'selected':''}}>single Vendor</option>
                                            <option value="multi" {{$project->vendor == 'multi'?'selected':''}}>multi vendor</option>
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
                                            <option selected value="one" {{$project->panel == 'one'?'selected':''}}>one</option>
                                            <option selected value="two" {{$project->panel == 'two'?'selected':''}}>two</option>
                                            <option selected value="three" {{$project->panel == 'three'?'selected':''}}>three</option>
                                            <option selected value="four" {{$project->panel == 'four'?'selected':''}}>four</option>
                                            <option selected value="five" {{$project->panel == 'five'?'selected':''}}>five</option>
                                            <option selected value="six" {{$project->panel == 'six'?'selected':''}}>six</option>
                                            <option selected value="seven" {{$project->panel == 'seven'?'selected':''}}>seven</option>
                                            <option selected value="eight" {{$project->panel == 'eight'?'selected':''}}>eight</option>
                                            <option selected value="nine" {{$project->panel == 'nine'?'selected':''}}>nine</option>
                                            <option selected value="ten" {{$project->panel == 'ten'?'selected':''}}>ten</option>
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
                                            <option selected value="Coming_Soon" {{$project->live_status == 'Coming_Soon'?'selected':''}}>Coming Soon</option>
                                            <option value="Live" {{$project->live_status == 'Live'?'selected':''}}>Live</option>
                                            <option value="Working" {{$project->live_status == 'Working'?'selected':''}}>Working</option>
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
                                            <option selected value="1" {{$project->status == 1 ?'selected':''}}>Active</option>
                                            <option value="0" {{$project->status == 0 ?'selected':''}}>Inactive</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row p-5">
                            <div class="btn-list text-end">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fe fe-check-circle"></i>
                                    update project
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



