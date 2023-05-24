@extends('layout.admin.master')
@section('parentPageTitle', 'Dashboard')
@section('title', 'Blogs')

@section('content')

<div class="clearfix row">
    <div class="col-lg-12">
        <div class="card">
            <div class="my-3 mb-4 header">
                <ul class="header-dropdown dropdown">
                    <li>
                        <a href="{{route('admin.blogs.create')}}" class="text-white btn btn-primary"><i
                                class="mx-1 icon-plus"></i>
                            Add Blog
                        </a>
                    </li>
                </ul>
            </div>
            <div class="body">
                <div class="table-responsive">
                    <table id="table_id" class="text-center w-full table-bordered display js-exportable2 dataTable table-custom spacing5 cell-border">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Title</th>
                                <th>Description</th>
                                <th>Image</th>
                                <th>Created At</th>
                                <th>Actions</th>

                            </tr>
                        </thead>
                        <tbody>
                        @foreach($blogs as $blog)
                            <tr>
                                <td>{{$blog->id}}</td>
                                <td>{{$blog->title}}</td>
                                <td>{{ Str::limit($blog->description, 50) }}</td>
                                <td><img src="{{asset($blog->image_path)}}" width="50px" height="50px" alt="Blog Image"></td>
                                <td>{{$blog->created_at}}</td>
                                <td>
                                    <a href="{{Route('admin.blogs.edit', $blog->id)}}"  class="edit btn btn-success btn-sm" ><i class="fa fa-edit"></i></a>

                                     <a href="{{Route('admin.blogs.show', $blog->id)}}"  class="edit btn btn-primary btn-sm" ><i class="fa fa-eye"></i></a>

                                    <a id="deleteButton" blog-id="{{$blog->id}}" class="delete btn btn-danger btn-sm"  data-toggle="modal" data-target="#deletemodal"><i class="fa fa-trash"></i></a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>


@include('includes._deleteModel',['delete_route' => 'admin.blogs.delete','delete_title' => 'Delete Blogs','delete_message' => 'are you sure about deleting this Blog'])

@stop

@section('page-styles')
@stop

@section('page-script')

    <script>
        $("#table_id tbody").on('click', '#deleteButton', function() {
            var id = $(this).attr('blog-id');
            $('#deleted_id').val(id);
        })

    </script>
    <script src="{{ asset('admin/js/datatable_conf.js') }}"></script>
<script src="{{ asset('admin/assets/bundles/mainscripts.bundle.js') }}"></script>

@stop
