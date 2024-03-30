@extends('admin.layout.app')
@section('title','Team List')
@section('body')
    <!-- PAGE-HEADER -->
    <div class="page-header">
        <div>
            <h1 class="page-title">Team Module</h1>
        </div>
        <div class="ms-auto pageheader-btn">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0);">Team</a></li>
                <li class="breadcrumb-item active" aria-current="page">Team Module</li>
            </ol>
        </div>
    </div>
    <!-- PAGE-HEADER END -->
    <!-- Row -->
    <div class="row row-sm">
        <div class="col-lg-12">
            <div class="card">
                <div class="border-bottom m-3">
                    <div class="row">
                        <div class="">
                            <h3 class="card-title">Team Table</h3>
                        </div>
                        <div class="text-end">
                            <a href="{{route('teams.create')}}" class="btn btn-success my-1 float-end text-center">Create New Team</a>
                        </div>
                    </div>
                </div>

                <div class="card-body">
                    <div class="table-responsive export-table">
                        <table id="file-datatable" class="table table-bordered text-nowrap key-buttons border-bottom  w-100">
                            <thead>
                            <tr>
                                <th class="border-bottom-0">SL No</th>
                                <th class="border-bottom-0">Image</th>
                                <th class="border-bottom-0">Info</th>
                                <th class="border-bottom-0">gender</th>
                                <th class="border-bottom-0">Birth</th>
                                <th class="border-bottom-0">Status</th>
                                <th class="border-bottom-0">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($teams as $team)
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td><img width="50" height="50" src="{{asset($team->image)}}" alt=""></td>
                                    <td>
                                        <p class="py-0">{{$team->name}}</p>
                                        <p>{{$team->phone}}</p>
                                        <p>{{$team->email}}</p>
                                    </td>
                                    <td>{{$team->gender}}</td>
                                    <td>{{$team->date_of_birth}}</td>
                                    <td class="col-2">
                                        <form action="{{route('teams.status',$team->id)}}" method="post">
                                            @csrf
                                            <select name="status" class="form-control d-flex {{$team->status == 1 ? 'bg-success-transparent':'bg-danger text-white'}}" onchange="this.form.submit()" id="">
                                                <option value="" disabled >choose one</option>
                                                <option value="1" {{$team->status == 1 ? 'selected':''}}>Active</option>
                                                <option value="0" {{$team->status == 0 ? 'selected':''}}>Inactive</option>
                                            </select>
                                        </form>
                                    </td>
                                    <td class="d-flex">
                                        <a href="{{route('teams.edit',$team->id)}}" class="btn btn-success mx-2"><i class="fa fa-edit"></i></a>
                                        <a href="{{route('teams.show',$team->id)}}" class="btn btn-primary mx-2"><i class="fa fa-eye"></i></a>
                                        <form action="{{route('teams.destroy',$team->id)}}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" onclick="return confirm('are you sure to delete ? ')" class="btn btn-danger"><i class="fa fa-trash-o"></i></button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Row -->

@endsection
