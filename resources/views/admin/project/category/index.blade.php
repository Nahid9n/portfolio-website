@extends('admin.layout.app')
@section('title','Add Project Member')
@section('body')
    <!-- PAGE-HEADER -->
    <div class="page-header">
        <div>
            <h1 class="page-title">Category Module</h1>
        </div>
        <div class="ms-auto pageheader-btn">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0);">Project</a></li>
                <li class="breadcrumb-item active" aria-current="page">Category</li>
            </ol>
        </div>
    </div>
    <!-- PAGE-HEADER END -->
    <!--ROW OPENED-->
    <div class="row">
        <div class="col-lg-12 col-md-12">
            <div  class="card">
                <div class="card-header border-bottom">
                    <h4 class="mb-0">Category</h4>
                </div>
                <div class="card-body p-0 create-project-main">
                    <form action="{{route('categories.store')}}" method="post">
                        @csrf
                        <div class="row p-5 border-bottom">
                            <div class="col-sm-12 col-md-12 col-xl-6">
                                <div class="form-group">
                                    <label for="project-name" class="form-label text-muted">Category Name <span class="text-danger">*</span></label>
                                    <div class="input-group">
                                        <input id="project-name" type="text" class="form-control text-dark" placeholder="Enter Category Name" name="name">
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-12 col-xl-4">
                                <div class="form-group">
                                    <label for="project-category" class="form-label text-muted">Status</label>
                                    <select class="form-control select2 select2-show-search" id="project-category" data-placeholder="Choose Type..." name="status">
                                        <option label="Choose one"></option>
                                        <option value="1" selected>Active</option>
                                        <option value="0">Inactive</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row p-5">
                            <div class="btn-list text-end">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fe fe-check-circle"></i>
                                    Save
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!--ROW CLOSED-->
    <!-- Row -->
    <div class="row row-sm">
        <div class="col-lg-12">
            <div class="card">
                <div class="border-bottom m-3">
                    <div class="row">
                        <div class="">
                            <h3 class="card-title">Category Table</h3>
                        </div>
                        <div class="text-end">
                            <a href="{{route('categories.create')}}" class="btn btn-success my-1 float-end text-center">Create New Project</a>
                        </div>
                    </div>
                </div>

                <div class="card-body">
                    <div class="table-responsive export-table">
                        <table id="file-datatable" class="table table-bordered text-nowrap key-buttons border-bottom  w-100">
                            <thead>

                            <tr>
                                <th class="border-bottom-0">SL No</th>
                                <th class="border-bottom-0">Name</th>
                                <th class="border-bottom-0">Status</th>
                                <th class="border-bottom-0">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($categories as $category)
                                <tr class="text-center">
                                    <td>{{$loop->iteration}}</td>
                                    <td>
                                        <p>{{$category->name}}</p>
                                    </td>
                                    <td class="col-2 text-center">
                                        <form action="{{route('categories.status',$category->id)}}" method="post">
                                            @csrf
                                            <select name="status" class="form-control d-flex {{$category->status == 1 ? 'bg-success':'bg-danger text-white'}}" onchange="this.form.submit()" id="">
                                                <option value="" disabled >choose one</option>
                                                <option value="1" {{$category->status == 1 ? 'selected':''}}>Active</option>
                                                <option value="0" {{$category->status == 0 ? 'selected':''}}>Inactive</option>
                                            </select>
                                        </form>
                                    </td>
                                    <td class="d-flex">
                                        <a href="{{route('categories.edit',$category->id)}}" class="btn btn-success mx-2"><i class="fa fa-edit"></i></a>
                                        <a href="{{route('categories.show',$category->id)}}" class="btn btn-primary mx-2"><i class="fa fa-eye"></i></a>
                                        <form action="{{route('categories.destroy',$category->id)}}" method="post">
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
