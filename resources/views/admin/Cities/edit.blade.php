@extends('layout.admin.master')
@section('parentPageTitle', 'Dashboard')
@section('title', 'Edit City')

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
                <form class="validate-form" action="{{ route('admin.cities.update',$city->id) }}" method="POST" novalidate>
                    @csrf
                    @method('PUT')
                    <div class="clearfix row">

                        {{-- =============== city name ================ --}}
                        <div class="col-md-6 mx-auto">
                            <div class="form-group">
                                <label>City Name</label>
                                <input type="text" class="form-control"
                                       placeholder="City Name" name="name"
                                       value="{{old('name') ?? $city->name}}" required>
                                @error('name')
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
                {{-- ============= End Create Blog form ============== --}}

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
