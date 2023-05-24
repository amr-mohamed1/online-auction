@extends('layout.admin.master')
@section('parentPageTitle', 'Dashboard')
@section('title', 'Show Blogs')

@section('content')

<div class="row clearfix">
    <div class="col-lg-12">
        <div class="card">
            <div class="body">
                <div class="card">
                    <div class="clearfix row">

                        <div class="col-md-6 mx-auto mb-4">
                            <img style="border-radius:5px;max-height:300px" src="{{$order->attached_img ? $order->image_path : asset('img/order_default.webp')}}" class="card-img-top" alt="blog_image">
                        </div>

                    </div>
                    <div class="clearfix row">

                        {{-- =============== user name ================ --}}
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>User Name</label>
                                <input disabled type="text" class="form-control"
                                       placeholder="Name" name="name"
                                       value="{{$order->user->name}}" required>
                                @error('name')
                                <p class="help text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>

                        {{-- =============== user phone ================ --}}
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>User Phone</label>
                                <input disabled type="text" class="form-control"
                                       placeholder="Phone" name="phone"
                                       value="{{$order->user->phone}}" required>
                                @error('phone')
                                <p class="help text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>

                        {{-- =============== specialist name ================ --}}
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Specialist Name</label>
                                <input disabled type="text" class="form-control"
                                       placeholder="Name" name="specialistname"
                                       value="{{$order->specialist->name}}" required>
                                @error('specialistname')
                                <p class="help text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>

                        {{-- =============== Specialist phone ================ --}}
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Specialist Phone</label>
                                <input disabled type="text" class="form-control"
                                       placeholder="Phone" name="specialistphone"
                                       value="{{$order->specialist->phone}}" required>
                                @error('specialistphone')
                                <p class="help text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>

                        {{-- =============== user city ================ --}}
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>User City</label>
                                <input disabled type="text" class="form-control"
                                       placeholder="City" name="city"
                                       value="{{$order->city->name}}" required>
                                @error('city')
                                <p class="help text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>

                        {{-- =============== user area ================ --}}
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>User Area</label>
                                <input disabled type="text" class="form-control"
                                       placeholder="Area" name="area"
                                       value="{{$order->area->name}}" required>
                                @error('area')
                                <p class="help text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>

                        {{-- =============== user address ================ --}}
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>User Address</label>
                                <input disabled type="text" class="form-control"
                                       placeholder="Phone" name="address"
                                       value="{{$order->user_address}}" required>
                                @error('address')
                                <p class="help text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>

                        {{-- =============== user description ================ --}}
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>User Description</label>
                                <textarea disabled rows="5" class="p-1 form-control"
                                          placeholder="Description" name="description"
                                >{{ $order->description }}</textarea>
                                @error('description')
                                <p class="help text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>

                        <div class="col-md-12 text-center mt-4">
                            <div class="ui ordered steps">
                                <div class="completed step">
                                    <div class="content">
                                        <div class="title">Pending</div>
                                        <div class="description">Order Created Successfully</div>
                                    </div>
                                </div>
                                @if($order->order_status != 'Decline')
                                <div class="{{$order->order_status == 'In-Progress' ? 'completed' : ''}} {{$order->order_status == 'Completed' ? 'completed' : ''}} {{$order->order_status == 'Pending' ? 'active' : ''}}  step">
                                    <div class="content">
                                        <div class="title">In-Progress</div>
                                        <div class="description">Specialist Accept Order</div>
                                    </div>
                                </div>
                                <div class="{{$order->order_status == 'In-Progress' ? 'active' : ''}} {{$order->order_status == 'Completed' ? 'completed' : ''}} step">
                                    <div class="content">
                                        <div class="title">Complete</div>
                                        <div class="description">Specialist Complete the Order</div>
                                    </div>
                                </div>
                                @else
                                    <div style="background-color: #ed969e" class="completed step">
                                        <div class="content">
                                            <div class="title">Decline</div>
                                            <div class="description">Specialist Decline the Order</div>
                                        </div>
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@stop

@section('page-styles')
@stop

@section('page-script')
<script src="{{ asset('admin/assets/bundles/mainscripts.bundle.js') }}"></script>

@stop
