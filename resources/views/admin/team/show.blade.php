@extends('admin.layout.app')
@section('title','Team Details')
@section('body')
        <div class="row">
            <div class="col-6 my-2">
                <p class="navbar-brand">Team Details</p>
            </div>
            <div class="col-6 my-2">
                <a href="{{route('teams.index')}}" class="btn btn-success">All Team</a>
            </div>

        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card table-responsive border shadow border-3 card-body">
                    <div class="row border border-bottom-3 p-3">
                        <div class="row justify-content-center p-3">
                            <div class="col-12 my-3">
                                <h5 class="fw-bold fs-3 text-center">Team Details  #<span class="text-success">{{$team->id}}</span></h5>
                            </div>

                            <hr>
                            <div class="col-4 my-3">
                                <img class="img-fluid" src="{{asset($team->image)}}" alt="">
                            </div>
                            <div class="col-5 my-3">
                                <h4><strong>Name : </strong><span>{{$team->name}}</span></h4>
                                <h4><strong>Phone : </strong><span>{{$team->phone}}</span></h4>
                                <h4><strong>Email : </strong><span>{{$team->email}}</span></h4>
                                <h4><strong>Gender : </strong><span>{{$team->gender}}</span></h4>
                            </div>

                        </div>
                        <div class="row">
                            <div class="col-12 my-3">
                                <table class="table table-striped">
                                    <tr>
                                        <th>Team ID</th>
                                        <td>{{$team->id}}</td>
                                    </tr>
                                    <tr>
                                        <th>Name</th>
                                        <td class="text-danger fw-bold">{{$team->name}}</td>
                                    </tr>
                                    <tr>
                                        <th>Phone</th>
                                        <td>{{$team->phone}}</td>
                                    </tr>
                                    <tr>
                                        <th>Email</th>
                                        <td>{{$team->email }}</td>
                                    </tr>
                                    <tr>
                                        <th>Gender</th>
                                        <td>{{$team->gender}}</td>
                                    </tr>
                                    <tr>
                                        <th>Date Of Birth</th>
                                        <td>{{$team->date_of_birth}}</td>
                                    </tr>
                                    <tr>
                                        <th>Address</th>
                                        <td>{{$team->address}}</td>
                                    </tr>
                                    <tr>
                                        <th>Country</th>
                                        <td>{{$team->country}}</td>
                                    </tr>
                                    <tr>
                                        <th>Company</th>
                                        <td>{{$team->company}}</td>
                                    </tr>
                                    <tr>
                                        <th>Website</th>
                                        <td>{{$team->website}}</td>
                                    </tr>
                                    <tr>
                                        <th>Facebook</th>
                                        <td>{{$team->facebook}}</td>
                                    </tr>
                                    <tr>
                                        <th>linkedIn</th>
                                        <td>{{$team->linkedIn}}</td>
                                    </tr>
                                    <tr>
                                        <th>twitter</th>
                                        <td>{{$team->twitter}}</td>
                                    </tr>
                                    <tr>
                                        <th>youtube</th>
                                        <td>{{$team->youtube}}</td>
                                    </tr>
                                    <tr>
                                        <th>instagram</th>
                                        <td>{{$team->instagram}}</td>
                                    </tr>
                                    <tr>
                                        <th>status</th>
                                        <td>{{$team->status == 1 ?'Active':'Inactive'}}</td>
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
