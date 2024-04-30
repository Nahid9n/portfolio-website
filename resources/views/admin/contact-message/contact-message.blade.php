@extends('admin.layout.app')
@section('title', 'Client Contact Message Page')
@section('body')
    <!-- PAGE-HEADER -->
    <div class="page-header">
        <div>
            <h1 class="page-title">Client Contact Message Module</h1>
        </div>
        <div class="ms-auto pageheader-btn">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0);">Client</a></li>
                <li class="breadcrumb-item active" aria-current="page">Client Contact Message Module</li>
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
                            <h3 class="card-title">Client Contact Message Table</h3>
                        </div>
                    </div>
                </div>

                <div class="card-body">
                    <div class="table-responsive export-table">
                        <table id="file-datatable" class="table table-bordered text-nowrap key-buttons border-bottom  w-100">
                            <thead>

                            <tr class="text-center">
                                <th class="border-bottom-0">SL No</th>
                                <th class="border-bottom-0">Name</th>
                                <th class="border-bottom-0">Email</th>
                                <th class="border-bottom-0">Date</th>
                                <th class="border-bottom-0">Action</th>

                            </tr>
                            </thead>
                            <tbody>
                            @foreach($messages as $message)
                                <tr class="text-center">
                                    <td>{{$loop->iteration}}</td>
                                    <td>
                                        <p>{{$message->name}}</p>
                                    </td>
                                    <td>{{$message->email}}</td>
                                    <td>{{date_format($message->created_at,'d-m-y  h:m A')}}</td>
                                    <td><a class="btn btn-success btn-sm" href="{{route('contact.message.show',$message->id)}}"><i class="fa fa-eye"></i></a></td>
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

