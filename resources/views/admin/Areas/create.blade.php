@extends('layout.admin.master')
@section('parentPageTitle', 'Dashboard')
@section('title', 'Add Area')

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

                {{-- ============= start Create City form ============== --}}
                <form class="validate-form" action="{{ route('admin.areas.store') }}" method="POST" novalidate>
                    @csrf
                    <div class="clearfix row">

                        {{-- =============== choose city ================ --}}
                        <div class="col-md-6">
                            <div style="margin-bottom:40px" class="form-group">
                                <label>City</label>
                                <select name="city_id" class="ui search dropdown w-100">
                                    <option disabled selected value="">Choose City</option>
                                    @foreach ($cities as $city)
                                        <option value="{{ $city->id }}">{{ $city->name }}</option>
                                    @endforeach
                                </select>

                                @error('city_id')
                                    <p class="help text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>



                        {{-- ======================== area name ========================= --}}
                        <div class="col-md-6 mx-auto">
                            <div class="form-group">
                                <label>Area Name</label>
                                <input style="padding-top: 18px;padding-bottom: 18px" type="text" class="form-control"
                                       placeholder="Area Name" name="name"
                                       value="{{old('name')}}" required>
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
                {{-- ============= End Create City form ============== --}}

            </div>
        </div>
    </div>
</div>

@stop

@section('page-styles')
<link rel="stylesheet" type="text/css" href="{{asset('css/semantic.min.css')}}">
@stop

@section('page-script')
<script src="{{asset('js/semantic.min.js')}}"></script>
<script src="{{asset('js/dropdown.js')}}"></script>
<script src="{{asset('admin/js/prevent_leave.js')}}"></script>
<script src="{{ asset('admin/assets/bundles/mainscripts.bundle.js') }}"></script>

@stop
