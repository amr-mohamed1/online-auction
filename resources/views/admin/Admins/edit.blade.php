@extends('layout.admin.master')
@section('parentPageTitle', 'Dashboard')
@section('title', 'Edit Admin')

@section('content')

<div class="clearfix row">
    <div class="col-lg-12">
        <div class="card">
            <div class="body">

                {{-- ============= start validation errors ============== --}}
                @include('includes._validation_errors')
                {{-- ============= End Validation errors ============== --}}

                {{-- ============= start Leave Page Alert Model ============== --}}
                @include('includes._leavePage')
                {{-- ============= End Leave Page Alert Model ============== --}}

                {{-- ============= start Create Blog form ============== --}}
                <form class="validate-form" action="{{ route('admin.admin.update',$admin->id) }}" method="POST" novalidate>
                    @csrf
                    @method('PUT')
                    <div class="clearfix row">

                        {{-- ======================== Admin Name ========================= --}}
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Admin Name</label>
                                <input type="text" class="form-control"
                                       placeholder="Admin Name: " name="name"
                                       value="{{ old('name') ?? $admin->name }}" required>
                                @error('name')
                                <p class="help text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>

                        {{-- ======================== Admin email ========================= --}}
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Email</label>
                                <input type="email" class="form-control"
                                       placeholder="Email: " name="email"
                                       value="{{ old('email') ?? $admin->email }}" required>
                                @error('email')
                                <p class="help text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>

                        {{-- ======================== Admin phone ========================= --}}
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Phone</label>
                                <input type="text" class="form-control"
                                       placeholder="Phone: " name="phone"
                                       value="{{ old('phone') ?? $admin->phone }}" required>
                                @error('phone')
                                <p class="help text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>

                        {{-- ======================== Admin password ========================= --}}
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Password</label>
                                <input type="password" class="form-control"
                                       placeholder="Password: " name="password"
                                       value="{{ old('password') }}" required>
                                @error('password')
                                <p class="help text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>

                        {{-- =========== Start Dropdown Scripts ============ --}}
                        {{-- TODO-> include the blade that have city_id and area_id dropdown Lists --}}
                        @include('includes._edit_area_city_dropdown',['model' => 'Admin'])

                    </div>
                    <button type="submit" class="btn btn-round btn-primary">Save</button>
                    &nbsp;&nbsp;
                    <!-- Leave Page -->
                    <button type="button" class="btn btn-round btn-default leaveBtn" data-toggle="modal" data-target="#exampleModal">
                        Leave
                    </button>
                </form>
                {{-- ============= End Create Blog form ============== --}}

            </div>
        </div>
    </div>
</div>

@stop

@section('page-styles')
    <link rel="stylesheet" type="text/css" href="{{asset('css/semantic.min.css')}}">

@stop

@section('page-script')
    <script>
        get_Area_route = '{{route("admin.admin.get_area")}}'
    </script>
    {{-- TODO-> import area_city script to handel dropdown List --}}
    <script src="{{asset('admin/js/area_city_dropdown.js')}}"></script>
    <script src="{{asset('js/semantic.min.js')}}"></script>
    <script src="{{asset('js/dropdown.js')}}"></script>
    <script src="{{asset('admin/js/prevent_leave.js')}}"></script>
    <script src="{{ asset('admin/assets/bundles/mainscripts.bundle.js') }}"></script>
@stop
