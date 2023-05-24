@extends('layout.admin.master')
@section('parentPageTitle', 'Dashboard')
@section('title', 'Show Blogs')

@section('content')

<div class="row clearfix">
    <div class="col-lg-12">
        <div class="card">
            <div class="body">
                <div class="card">
                    <img style="border-radius:5px;max-height:300px" src="{{$blog->image_path}}" class="card-img-top" alt="blog_image">
                    <div class="card-body">
                        <h5 class="card-title">{{$blog->title}}</h5>
                        <p class="card-text">{!!$blog->description!!}</p>
                        <p class="card-text"><small class="text-muted">{{$blog->created_at}}</small></p>
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
