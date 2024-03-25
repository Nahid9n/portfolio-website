@extends('admin.layout.app')
@section('title','Contact Module')
@section('body')
    <div class="row">
        <div class="col-6 my-2">
            <p class="navbar-brand">Contact Setup</p>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <form class="form-horizontal" action="{{route('website.contact.update',$contact->id)}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="row mb-4">
                            <label for="address" class="col-md-3 form-label">Address</label>
                            <div class="col-md-9">
                                <input class="form-control" value="{{$contact->address}}" id="address" name="address" placeholder="Enter address " type="text">
                                <span class="text-danger">{{$errors->has('address') ? $errors->first('address'):''}}</span>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label for="hotline" class="col-md-3 form-label">Hotline</label>
                            <div class="col-md-9">
                                <input class="form-control" value="{{$contact->hotline}}" id="hotline" name="hotline" placeholder="Enter hotline Number" type="text">
                                <span class="text-danger">{{$errors->has('hotline') ? $errors->first('hotline'):''}}</span>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label for="hotline2" class="col-md-3 form-label">Hotline 2</label>
                            <div class="col-md-9">
                                <input class="form-control" value="{{$contact->hotline2}}" id="hotline2" name="hotline2" placeholder="Enter hotline2 Number" type="text">
                                <span class="text-danger">{{$errors->has('hotline2') ? $errors->first('hotline2'):''}}</span>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label for="hotline3" class="col-md-3 form-label">Hotline 3</label>
                            <div class="col-md-9">
                                <input class="form-control" value="{{$contact->hotline3}}" id="hotline3" name="hotline3" placeholder="Enter hotline3 Number" type="text">
                                <span class="text-danger">{{$errors->has('hotline3') ? $errors->first('hotline3'):''}}</span>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label for="email" class="col-md-3 form-label">email</label>
                            <div class="col-md-9">
                                <input class="form-control" value="{{$contact->email}}" id="email" name="email" placeholder="Enter email " type="email">
                                <span class="text-danger">{{$errors->has('email') ? $errors->first('email'):''}}</span>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label for="facebook" class="col-md-3 form-label">facebook</label>
                            <div class="col-md-9">
                                <input class="form-control" value="{{$contact->facebook}}" id="facebook" name="facebook" placeholder="Enter facebook " type="url">
                                <span class="text-danger">{{$errors->has('facebook') ? $errors->first('facebook'):''}}</span>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label for="twitter" class="col-md-3 form-label">twitter</label>
                            <div class="col-md-9">
                                <input class="form-control" value="{{$contact->twitter}}" id="twitter" name="twitter" placeholder="Enter twitter" type="url">
                                <span class="text-danger">{{$errors->has('twitter') ? $errors->first('twitter'):''}}</span>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label for="linkedIn" class="col-md-3 form-label">linkedIn</label>
                            <div class="col-md-9">
                                <input class="form-control" value="{{$contact->linkedIn}}" id="linkedIn" name="linkedIn" placeholder="Enter linkedIn" type="url">
                                <span class="text-danger">{{$errors->has('linkedIn') ? $errors->first('linkedIn'):''}}</span>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label for="website" class="col-md-3 form-label">website</label>
                            <div class="col-md-9">
                                <input class="form-control" value="{{$contact->website}}" id="website" name="website" placeholder="Enter website " type="url">
                                <span class="text-danger">{{$errors->has('website') ? $errors->first('website'):''}}</span>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label for="skypee" class="col-md-3 form-label">skypee</label>
                            <div class="col-md-9">
                                <input class="form-control" value="{{$contact->skypee}}" id="skypee" name="skypee" placeholder="Enter skypee " type="url">
                                <span class="text-danger">{{$errors->has('skypee') ? $errors->first('skypee'):''}}</span>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label for="youtube" class="col-md-3 form-label">youtube</label>
                            <div class="col-md-9">
                                <input class="form-control" value="{{$contact->youtube}}" id="youtube" name="youtube" placeholder="Enter youtube " type="url">
                                <span class="text-danger">{{$errors->has('youtube') ? $errors->first('youtube'):''}}</span>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label for="instagram" class="col-md-3 form-label">instagram</label>
                            <div class="col-md-9">
                                <input class="form-control" value="{{$contact->instagram}}" id="instagram" name="instagram" placeholder="Enter instagram " type="url">
                                <span class="text-danger">{{$errors->has('instagram') ? $errors->first('instagram'):''}}</span>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label for="whatsapp" class="col-md-3 form-label">whatsapp</label>
                            <div class="col-md-9">
                                <input class="form-control" value="{{$contact->whatsapp}}" id="whatsapp" name="whatsapp" placeholder="Enter whatsapp " type="number">
                                <span class="text-danger">{{$errors->has('whatsapp') ? $errors->first('whatsapp'):''}}</span>
                            </div>
                        </div>

                        <div class="row mb-4">
                            <label for="map" class="col-md-3 form-label">map</label>
                            <div class="col-md-9">
                                <textarea class="form-control" cols="30" rows="5" id="map" name="map" placeholder="Enter map ">{{$contact->map}}</textarea>
                                <span class="text-danger">{{$errors->has('map') ? $errors->first('map'):''}}</span>
                            </div>
                        </div>

                        <div class="row mb-4">
                            <label for="description" class="col-md-3 form-label"> Description</label>
                            <div class="col-md-9">
                                <textarea class="form-control"  name="description" placeholder="Enter Long Description" id="summernote" cols="30" rows="10">{{$contact->description}}</textarea>
                                <span class="text-danger">{{ $errors->has('description') ? $errors->first('description') : '' }}</span>
                            </div>
                        </div>

                        <div class="row mb-4 d-flex form-group">
                            <div class="col-md-3">
                                <label class="" for="type"></label>
                            </div>
                            <div class="col-md-9">
                                <button class="btn btn-primary px-5" type="submit">Update Contact Info</button>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
