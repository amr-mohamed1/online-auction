@extends('layout.admin.master')
@section('parentPageTitle', 'Dashboard')
@section('title', 'Add Admin')

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

                {{-- ============= start Create Admin form ============== --}}
                <form class="validate-form" action="{{ route('admin.admin.store') }}" method="POST" novalidate>
                    @csrf
                    <div class="clearfix row">

                        {{-- ======================== Admin Name ========================= --}}
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Admin First Name</label>
                                <input type="text" class="form-control"
                                       placeholder="Admin First Name: " name="first_name"
                                       value="{{ old('first_name') }}" required>
                                @error('first_name')
                                <p class="help text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                        {{-- ======================== Admin Name ========================= --}}
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Admin Last Name</label>
                                <input type="text" class="form-control"
                                       placeholder="Admin Last Name: " name="last_name"
                                       value="{{ old('last_name') }}" required>
                                @error('last_name')
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
                                       value="{{ old('email') }}" required>
                                @error('email')
                                <p class="help text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>

                        {{-- ======================== Admin Password ========================= --}}
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

                    </div>
                    <button type="submit" class="btn btn-round btn-primary">Save</button>
                    &nbsp;&nbsp;
                    <!-- Leave Page -->
                    <button type="button" class="btn btn-round btn-default leaveBtn" data-toggle="modal" data-target="#exampleModal">
                        Leave
                    </button>
                </form>
                {{-- ============= End Create Admin form ============== --}}

            </div>
        </div>
    </div>
</div>

@stop

@section('page-styles')

@stop

@section('page-script')
    <script src="{{asset('admin/js/prevent_leave.js')}}"></script>
    <script src="{{ asset('admin/assets/bundles/mainscripts.bundle.js') }}"></script>
@stop
