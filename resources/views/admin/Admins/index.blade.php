@extends('layout.admin.master')
@section('parentPageTitle', 'Dashboard')
@section('title', 'Admins')

@section('content')

<div class="row clearfix">
    <div class="col-lg-12">
        <div class="card">
            <div class="header my-3 mb-4">
                <ul class="header-dropdown dropdown">
                    <li>
                        <a href="{{route('admin.admin.create')}}" class="text-white btn btn-primary"><i
                                class="mx-1 icon-plus"></i>
                            Add Admin
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
                                <th>Name</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>City</th>
                                <th>Area</th>
                                <th>Created At</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($admins as $admin)
                            <tr>
                                <td>{{$admin->id}}</td>
                                <td>{{$admin->name}}</td>
                                <td>{{$admin->email}}</td>
                                <td>{{$admin->phone}}</td>
                                <td>{{$admin->cities->name}}</td>
                                <td>{{$admin->areas->name}}</td>
                                <td>{{$admin->created_at}}</td>
                                <td>
                                    <a href="{{Route('admin.admin.edit', $admin->id)}}"  class="edit btn btn-success btn-sm" ><i class="fa fa-edit"></i></a>
                                    <a id="deleteButton" admin-id="{{$admin->id}}" class="delete btn btn-danger btn-sm"  data-toggle="modal" data-target="#deletemodal"><i class="fa fa-trash"></i></a>
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

@include('includes._deleteModel',['delete_route' => 'admin.admin.delete','delete_title' => 'Delete Admins','delete_message' => 'are You Sure about Deleting This Admin'])

@stop

@section('page-styles')
@stop

@section('page-script')
    <script>
        $('#table_id tbody').on('click', '#deleteButton', function() {
            var id = $(this).attr('admin-id');
            $('#deleted_id').val(id);
        })
    </script>

    <script src="{{asset('admin/js/datatable_conf.js')}}"></script>
<script src="{{ asset('admin/assets/bundles/mainscripts.bundle.js') }}"></script>
@stop
