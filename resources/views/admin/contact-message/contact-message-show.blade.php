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
    <div class="row">
        <div class="col-md-12">
            <div class="card table-responsive border shadow border-3 card-body">
                <div class="row">
                    <div class="col-6 my-2">
                        <p class="navbar-brand">Client Contact Message</p>
                    </div>
                    <div class="col-6 my-2 text-end">
                        <a href="{{route('contact.messages')}}" class="btn btn-success">All Contact Message</a>
                    </div>

                </div>
                <div class="row border border-bottom-3 p-3">
                    <div class="col-12 my-3">
                            <table class="table">
                                <tr>
                                    <th>Name</th>
                                    <td class="text-dark fw-bold">{{$message->name}}</td>
                                </tr>
                                <tr>
                                    <th>Email</th>
                                    <td><a class="text-success bg-dark p-2" target="_blank" href="mailto:{{$message->email}}">{{$message->email }}</a></td>
                                </tr>
                                <tr>
                                    <th>Message</th>
                                    <td><textarea class="form-control border-0 text-dark" name="" id="" cols="30" rows="10" readonly>{{$message->message }}</textarea></td>
                                </tr>
                            </table>
                        </div>
                </div>
            </div>

            <div class="">

            </div>
        </div>
    </div>

@endsection

