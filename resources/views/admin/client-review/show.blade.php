@extends('admin.layout.app')
@section('title','Client Review Details')
@section('body')
        <div class="row">
            <div class="col-6 my-2">
                <p class="navbar-brand">Client Review Details</p>
            </div>
            <div class="col-6 my-2 text-end">
                <a href="{{route('client-review.edit',$review->id)}}" class="btn btn-warning text-dark">Edit Client Review</a>
                <a href="{{route('client-review.index')}}" class="btn btn-success">All Client Review</a>
            </div>
        </div>
        <!-- row -->
        <div class="row">
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="text-center">
                                    <img src="{{asset($review->image)}}" alt="" class="img-fluid" width="300">
                                    <p class="mt-2">Name : {{$review->name}}</p>
                                    <p>Designation : {{$review->designation}}</p>
                                </div>
                               <div class="">
                                   <p>{!! $review->review !!}</p>
                               </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /row -->
@endsection
