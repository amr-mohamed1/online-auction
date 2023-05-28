@extends('layout.admin.master')
@section('parentPageTitle', 'Dashboard')
@section('title', 'Edit Category')

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
                <form class="validate-form" action="{{ route('admin.categories.update',$category->id) }}" method="POST" novalidate enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="clearfix row">

                        {{-- =============== category name ================ --}}
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Name</label>
                                <input type="text" class="form-control"
                                       placeholder="Name" name="name"
                                       value="{{old('name') ?? $category->name}}" required>
                                @error('name')
                                <p class="help text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>

                        {{-- =============== category image  ================ --}}
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="col-form-label">Sprciality Image</label>
                                <input type="file" class="dropify" data-default-file="{{$category->image_path}}" required name="img" class="form-control" >
                                @error('img')
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
<link rel="stylesheet" type="text/css" href="https://jeremyfagis.github.io/dropify/dist/css/dropify.min.css">
@stop

@section('page-script')

<script src="https://cdn.ckeditor.com/ckeditor5/36.0.0/classic/ckeditor.js"></script>
<script type="text/javascript" src="https://jeremyfagis.github.io/dropify/dist/js/dropify.min.js"></script>
<script src="{{asset('admin/js/prevent_leave.js')}}"></script>
<script src="{{ asset('admin/assets/bundles/mainscripts.bundle.js') }}"></script>

@stop
