@extends('admin.layout.app')
@section('title','Team Details')
@section('body')
    <div class="row">
        <div class="col-6 my-2">
            <p class="navbar-brand">Team Details</p>
        </div>
        <div class="col-6 my-2">
            <a href="{{route('projects.index')}}" class="btn btn-success">All Team</a>
        </div>
    </div>
    <!--ROW CLOSED-->
    <div class="row">
        <div class="col-md-12">
            <div class="card table-responsive border shadow border-3 card-body">
                <div class="row border border-bottom-3 p-3">
                    <div class="row justify-content-center p-3">
                        <div class="col-12 my-3">
                            <h5 class="fw-bold fs-3 text-center">project Details  #<span class="text-success">{{$project->id}}</span></h5>
                        </div>

                        <hr>
                        <div class="col-4 my-3">
                            <img class="img-fluid my-1" src="{{asset($project->image)}}" alt="">
                            <video width="400" height="200" controls>
                                <source src="{{asset($project->video)}}" type="video/mp4">
                                Your browser does not support the video tag.
                            </video>
                        </div>
                        <div class="col-5 my-3">
                            <h4><strong>Title : </strong><span>{{$project->title}}</span></h4>
                            <p><strong>Start date : </strong><span>{{$project->start_date}}</span></p>
                            <p><strong>End date : </strong><span>{{$project->end_date}}</span></p>
                            <p><strong>Short : </strong><span>{{$project->short_details}}</span></p>
                        </div>

                    </div>
                    <div class="row">
                        <div class="col-12 my-3">
                            <table class="table table-striped">
                                <tr>
                                    <th>Project ID</th>
                                    <td>{{$project->id}}</td>
                                </tr>
                                <tr>
                                    <th>Other Images</th>
                                    <td>
                                        @forelse($images as $image)
                                        <img width="100" height="100" class="img-fluid" src="{{asset($image->image)}}" alt="">
                                        @empty
                                            <p>No Other Images</p>
                                        @endforelse
                                    </td>
                                </tr>
                                <tr>
                                    <th>Name</th>
                                    <td class="text-danger fw-bold">{{$project->title}}</td>
                                </tr>
                                <tr>
                                    <th>Category</th>
                                    <td>{{$project->category->name ?? ''}}</td>
                                </tr>
                                <tr>
                                    <th>Slug</th>
                                    <td>{{$project->slug}}</td>
                                </tr>
                                <tr>
                                    <th>code</th>
                                    <td>{{$project->code}}</td>
                                </tr>
                                <tr>
                                    <th>vendor</th>
                                    <td>{{$project->vendor}}</td>
                                </tr>
                                <tr>
                                    <th>Team</th>
                                    <td>
                                        @forelse($teams as $key => $team)
                                            <span class="fw-semibold">Developer {{$loop->iteration}} </span> : <span>{{$team->name}}</span><br>
                                        @empty
                                            <span>No Team</span>
                                        @endforelse
                                        </td>
                                </tr>
                                <tr>
                                    <th>panel</th>
                                    <td>{{$project->panel}}</td>
                                </tr>
                                <tr>
                                    <th>start date</th>
                                    <td>{{$project->start_date}}</td>
                                </tr>
                                <tr>
                                    <th>end date</th>
                                    <td>{{$project->end_date}}</td>
                                </tr>

                                <tr>
                                    <th>Progress</th>
                                    <td>
                                        <div class="progress progress-md mb-3">
                                            <div class="progress-bar bg-pink wp-10"> {{$project->progress}}%</div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <th>Client</th>
                                    <td>{{$project->client->name ?? ''}}</td>
                                </tr>
                                <tr>
                                    <th>live status</th>
                                    <td>{{$project->live_status == 'Coming_Soon' ?'Coming Soon':''}}{{$project->live_status == 'Live' ?'Live':''}}{{$project->live_status == 'Working' ?'Working':''}}</td>
                                </tr>
                                <tr>
                                    <th>status</th>
                                    <td>{{$project->status == 1 ?'Active':'Inactive'}}</td>
                                </tr>
                                <tr>
                                    <th>Long Details</th>
                                    <td>{{$project->long_details}}</td>
                                </tr>


                            </table>
                        </div>
                    </div>


                </div>
            </div>

            <div class="">

            </div>
        </div>
    </div>
@endsection
