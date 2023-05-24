@extends('layout.admin.master')
@section('parentPageTitle', 'Dashboard')
@section('title', "Areas")

@section('content')

<div class="clearfix row">
    <div class="col-lg-12">
        <div class="card">
            <div class="my-3 mb-4 header">
                <ul class="header-dropdown dropdown">
                    <li>
                        <a href="{{route('admin.areas.create')}}" class="text-white btn btn-primary"><i
                                class="mx-1 icon-plus"></i>
                            Add Area
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
                            <th>Area Name</th>
                            <th>City Name</th>
                            <th>Create At</th>
                            <th>Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($areas as $area)
                            <tr>
                                <td>{{$area->id}}</td>
                                <td>{{$area->name}}</td>
                                <td>{{$area->cities->name}}</td>
                                <td>{{$area->created_at}}</td>
                                <td>
                                    <a href="{{Route('admin.areas.edit', $area->id)}}"  class="edit btn btn-success btn-sm" ><i class="fa fa-edit"></i></a>
                                    <a id="deleteButton" area-id="{{$area->id}}" class="delete btn btn-danger btn-sm"  data-toggle="modal" data-target="#deletemodal"><i class="fa fa-trash"></i></a>
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

@include('includes._deleteModel',['delete_route' => 'admin.areas.delete','delete_title' => 'Delete Area','delete_message' => 'are You Sure about Deleting this Area'])

@stop

@section('page-styles')
@stop

@section('page-script')

<script>
    $('#table_id tbody').on('click', '#deleteButton', function() {
        var id = $(this).attr('area-id');
        $('#deleted_id').val(id);
    })
</script>

<script src="{{asset('admin/js/datatable_conf.js')}}"></script>
<script src="{{ asset('admin/assets/bundles/mainscripts.bundle.js') }}"></script>

@stop
