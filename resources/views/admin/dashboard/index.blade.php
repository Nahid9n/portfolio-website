@extends('admin.layout.app')
@section('title', 'Home Page')
@section('body')
    <div class="page-header">
        <div class="col-md-6">
            <h1 class="bg-primary text-white p-2 fs-5">Welcome to your dashboard!</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-6 col-sm-12 col-md-6 col-xl-3">
            <div class="card overflow-hidden">
                <div class="card-body">
                    <div class="row">
                        <div class="col">
                            <div class="" hidden>
{{--                                @php($sum = 0)--}}
{{--                                @foreach($totalPrice as $price)--}}
{{--                                    {{$sum = $sum + $price->price_amount}}--}}
{{--                                @endforeach--}}
                            </div>
{{--                            <h3 class="mb-2 fw-semibold">$ {{ $sum }}</h3>--}}
                            <p class="text-muted fs-13 mb-0">Total Revenue</p>
                            <p class="text-muted mb-0 mt-2 fs-12">
                                <span class="icn-box text-success fw-semibold fs-13 me-1">
                                </span>
                            </p>
                        </div>
                        <div class="col col-auto top-icn dash">
                            <div class="counter-icon bg-success dash ms-auto">
                                <i class="fa-solid text-white fa-sack-dollar"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6 col-sm-12 col-md-6 col-xl-3">
            <div class="card overflow-hidden">
                <div class="card-body">
                    <div class="row">
                        <div class="col">
{{--                            <h3 class="mb-2 fw-semibold">{{ $t_category }}</h3>--}}
                            <p class="text-muted fs-13 mb-0">Total Category</p>
                            <p class="text-muted mb-0 mt-2 fs-12">
                                <span class="icn-box text-success fw-semibold fs-13 me-1">
                                </span>
                            </p>
                        </div>
                        <div class="col col-auto top-icn dash">
                            <div class="counter-icon bg-primary dash ms-auto">
                                <i class="fa-solid text-white fa-layer-group"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6 col-sm-12 col-md-6 col-xl-3">
            <div class="card overflow-hidden">
                <div class="card-body">
                    <div class="row">
                        <div class="col">
{{--                            <h3 class="mb-2 fw-semibold">{{ $t_country }}</h3>--}}
                            <p class="text-muted fs-13 mb-0">Total Country</p>
                            <p class="text-muted mb-0 mt-2 fs-12">
                                <span class="icn-box text-danger fw-semibold fs-13 me-1">
                                </span>

                            </p>
                        </div>
                        <div class="col col-auto top-icn dash">
                            <div class="counter-icon bg-secondary dash ms-auto">
                                <i class="fa-solid text-white fa-globe"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6 col-sm-12 col-md-6 col-xl-3">
            <div class="card overflow-hidden">
                <div class="card-body">
                    <div class="row">
                        <div class="col">
{{--                            <h3 class="mb-2 fw-semibold">{{ $t_customer }}</h3>--}}
                            <p class="text-muted fs-13 mb-0">Total Customer</p>
                            <p class="text-muted mb-0 mt-2 fs-12">
                                <span class="icn-box text-success fw-semibold fs-13 me-1">
                                </span>
                            </p>
                        </div>
                        <div class="col col-auto top-icn dash">
                            <div class="counter-icon bg-info dash ms-auto">
                                <i class="fa text-white fa-user"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6 col-sm-12 col-md-6 col-xl-3">
            <div class="card overflow-hidden">
                <div class="card-body">
                    <div class="row">
                        <div class="col">
{{--                            <h3 class="mb-2 fw-semibold">{{ $t_plan_order }}</h3>--}}
                            <p class="text-muted fs-13 mb-0">Complete Order</p>
                            <p class="text-muted mb-0 mt-2 fs-12">
                                <span class="icn-box text-success fw-semibold fs-13 me-1">
                                </span>
                            </p>
                        </div>
                        <div class="col col-auto top-icn dash">
                            <div class="counter-icon bg-success dash ms-auto">
                                <i class="fa-solid text-white fa-circle-check"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6 col-sm-12 col-md-6 col-xl-3">
            <div class="card overflow-hidden">
                <div class="card-body">
                    <div class="row">
                        <div class="col">
{{--                            <h3 class="mb-2 fw-semibold">{{ $complete_order }}</h3>--}}
                            <p class="text-muted fs-13 mb-0">Cancel Order</p>
                            <p class="text-muted mb-0 mt-2 fs-12">
                                <span class="icn-box text-success fw-semibold fs-13 me-1">
                                </span>
                            </p>
                        </div>
                        <div class="col col-auto top-icn dash">
                            <div class="counter-icon bg-primary dash ms-auto">
                                <i class="fa-solid text-white fa-rectangle-xmark"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6 col-sm-12 col-md-6 col-xl-3">
            <div class="card overflow-hidden">
                <div class="card-body">
                    <div class="row">
                        <div class="col">
{{--                            <h3 class="mb-2 fw-semibold">{{ $totalData }}</h3>--}}
                            <p class="text-muted fs-13 mb-0">Total Stock</p>
                            <p class="text-muted mb-0 mt-2 fs-12">
                                <span class="icn-box text-success fw-semibold fs-13 me-1">
                                </span>
                            </p>
                        </div>
                        <div class="col col-auto top-icn dash">
                            <div class="counter-icon bg-secondary dash ms-auto box-shadow-success">
                                <i class="fa-solid text-white fa-store"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Row -->
    <div class="row row-sm" style="overflow-x: auto">
        <div class="col-lg-12">
            <div class="card">
                <div class="border-bottom m-3">
                    <div class="row">
                        <div class="">
                            <h3 class="card-title">Latest Orders</h3>
                        </div>
                    </div>
                </div>

                <div class="card-body">
                    <div class="table-responsive export-table">
                        @if(session('message'))
                            <p class="alert alert-success text-center" x-data="{show: true}" x-init="setTimeout(() => show = false, 5000)" x-show="show">{{session('message')}}</p>
                        @endif
                        <table id="data-table" class="table text-nowrap mb-0 table-bordered table-striped">
                            <thead class="table-head">
                            <tr class="fw-bold bg-primary text-center">
                                <th>Invoice ID</th>
                                <th>Customer</th>
                                <th>Price Amount</th>
                                <th>Total Credit</th>
                                <th>Total Phone</th>
                                <th>Status</th>
                                <th>Download PDF </th>
                            </tr>
                            </thead>
                            <tbody class="table-body">
{{--                            @forelse($planOrders as $planOrder)--}}
{{--                                <tr class="text-center">--}}
{{--                                    <td>{{$planOrder->invoice_id}}</td>--}}
{{--                                    <td>{{$planOrder->customer->first_name.' '.$planOrder->customer->last_name}}</td>--}}
{{--                                    <td>${{$planOrder->price_amount}}</td>--}}
{{--                                    <td>{{$planOrder->no_credit}}</td>--}}
{{--                                    <td>{{$planOrder->no_phone}}</td>--}}
{{--                                    <td class="col-2">--}}
{{--                                        <form action="{{route('admin.credit.pending.approve',$planOrder->id)}}" method="post">--}}
{{--                                            @csrf--}}
{{--                                            <select name="payment_status" class="form-control text-center d-flex {{$planOrder->payment_status == 1 ? 'bg-success-transparent':''}}{{$planOrder->payment_status == 0 ? 'bg-warning text-white':''}}{{$planOrder->payment_status == 2 ? 'bg-danger text-white':''}}" onchange="this.form.submit()" id="">--}}
{{--                                                <option value="" disabled >choose one</option>--}}
{{--                                                <option value="0" {{$planOrder->payment_status == 0 ? 'selected':''}}>Pending</option>--}}
{{--                                                <option value="1" {{$planOrder->payment_status == 1 ? 'selected':''}}>Approved</option>--}}
{{--                                                <option value="2" {{$planOrder->payment_status == 2 ? 'selected':''}}>cancel</option>--}}
{{--                                            </select>--}}
{{--                                            <input hidden type="number" name="customer_id" value="{{$planOrder->customer_id}}">--}}
{{--                                            <input hidden type="number" name="price_amount" value="{{$planOrder->price_amount}}">--}}
{{--                                            <input hidden type="number" name="no_credit" value="{{$planOrder->no_credit}}">--}}
{{--                                            <input hidden type="number" name="no_phone" value="{{$planOrder->no_phone}}">--}}
{{--                                        </form>--}}
{{--                                    </td>--}}
{{--                                    <td><a href="" class="btn btn-primary"><i class="fa fa-download"></i> Download</a></td>--}}
{{--                                </tr>--}}
{{--                            @empty--}}
{{--                                <tr class="text-center bg-danger-transparent">--}}
{{--                                    <td colspan="7">No Order Found</td>--}}
{{--                                </tr>--}}
{{--                            @endforelse--}}
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Row -->
@endsection
