@extends('admin.layout.app')
@section('title', 'Client List Page')
@section('body')
    <!-- PAGE-HEADER -->
    <div class="page-header">
        <div>
            <h1 class="page-title">Client Module</h1>
        </div>
        <div class="ms-auto pageheader-btn">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0);">Client</a></li>
                <li class="breadcrumb-item active" aria-current="page">Client Module</li>
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
                            <h3 class="card-title">Client Table</h3>
                        </div>
                        <div class="text-end">
                            <a href="{{route('clients.create')}}" class="btn btn-success my-1 float-end text-center">Create New Client</a>
                        </div>
                    </div>
                </div>

                <div class="card-body">
                    <div class="table-responsive export-table">
                        <table id="file-datatable" class="table table-bordered text-nowrap key-buttons border-bottom  w-100">
                            <thead>
                            @if(session('message'))
                            <p class="alert alert-success text-center" x-data="{show: true}" x-init="setTimeout(() => show = false, 5000)" x-show="show">{{session('message')}}</p>
                            @endif
                            <tr>
                                <th class="border-bottom-0">SL No</th>
                                <th class="border-bottom-0">Name</th>
                                <th class="border-bottom-0">Logo</th>
                                <th class="border-bottom-0">Company Url</th>
                                <th class="border-bottom-0">Status</th>
                                <th class="border-bottom-0">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($clients as $client)
                                <tr class="text-center">
                                    <td>{{$loop->iteration}}</td>
                                    <td>
                                        <p>{{$client->name}}</p>
                                    </td>
                                    <td><img width="70" height="70" src="{{asset($client->logo)}}" alt=""></td>
                                    <td>{{$client->company_url}}</td>
                                    <td class="col-2">
                                        <form action="{{route('clients.status',$client->id)}}" method="post">
                                            @csrf
                                            <select name="status" class="form-control d-flex text-center {{$client->status == 1 ? 'bg-success-transparent':'bg-danger text-white'}}" onchange="this.form.submit()" id="">
                                                <option value="" disabled >choose one</option>
                                                <option value="1" {{$client->status == 1 ? 'selected':''}}>Active</option>
                                                <option value="0" {{$client->status == 0 ? 'selected':''}}>Inactive</option>
                                            </select>
                                        </form>
                                    </td>
                                    <td class="d-flex">
                                        <a href="{{route('clients.edit',$client->id)}}" class="btn btn-success mx-2"><i class="fa fa-edit"></i></a>
                                        <form action="{{route('clients.destroy',$client->id)}}" method="post">
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
