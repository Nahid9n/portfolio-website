@extends('admin.layout.app')
@section('title', 'Blog List Page')
@section('body')
    <!-- PAGE-HEADER -->
    <div class="page-header">
        <div>
            <h1 class="page-title">Blog Module</h1>
        </div>
        <div class="ms-auto pageheader-btn">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0);">Blog</a></li>
                <li class="breadcrumb-item active" aria-current="page">Blog Module</li>
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
                            <h3 class="card-title">Blog Table</h3>
                        </div>
                        <div class="text-end">
                            <a href="{{route('blogs.create')}}" class="btn btn-success my-1 float-end text-center">Create New Blog</a>
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
                                <th class="border-bottom-0">Title</th>
                                <th class="border-bottom-0">Image</th>
                                <th class="border-bottom-0">Short Description</th>
                                <th class="border-bottom-0">Status</th>
                                <th class="border-bottom-0">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($blogs as $blog)
                                <tr class="text-center">
                                    <td>{{$loop->iteration}}</td>
                                    <td>
                                        <p>{{$blog->title}}</p>
                                    </td>
                                    <td><img width="70" height="70" src="{{asset($blog->image)}}" alt=""></td>
                                    <td>{{$blog->short_description}}</td>
                                    <td class="col-2">
                                        <form action="{{route('blogs.status',$blog->id)}}" method="post">
                                            @csrf
                                            <select name="status" class="form-control d-flex {{$blog->status == 1 ? 'bg-success-transparent':'bg-danger text-white'}}" onchange="this.form.submit()" id="">
                                                <option value="" disabled >choose one</option>
                                                <option value="1" {{$blog->status == 1 ? 'selected':''}}>Active</option>
                                                <option value="0" {{$blog->status == 0 ? 'selected':''}}>Inactive</option>
                                            </select>
                                        </form>
                                    </td>
                                    <td class="d-flex">
                                        <a href="{{route('blogs.edit',$blog->id)}}" class="btn btn-success mx-2"><i class="fa fa-edit"></i></a>
                                        <a href="{{route('blogs.show',$blog->id)}}" class="btn btn-primary mx-2"><i class="fa fa-eye"></i></a>
                                        <form action="{{route('blogs.destroy',$blog->id)}}" method="post">
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
