@extends('layout.admin.master')
@section('parentPageTitle', 'Dashboard')
@section('title', 'Speciality')

@section('content')

<div class="row clearfix">
    <div class="col-lg-12">
        <div class="card">
            <div class="header my-3 mb-4">
                <ul class="header-dropdown dropdown">
                    <li>
                        <a href="{{route('admin.specialities.create')}}" class="text-white btn btn-primary"><i
                                class="mx-1 icon-plus"></i>
                            Add Speciality
                        </a>
                    </li>
                </ul>
            </div>
            <div class="body">
                <div class="table-responsive">
                    <table id="table_id" class="w-full table-bordered display js-exportable2 dataTable table-custom spacing5 cell-border text-center">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Image</th>
                                <th>Created at</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($specialities as $speciality)
                            <tr>
                                <td>{{$speciality->id}}</td>
                                <td>{{$speciality->name}}</td>
                                <td><img src="{{asset($speciality->image_path)}}" width="100px" height="100px" alt="Speciality Image"></td>
                                <td>{{$speciality->created_at}}</td>
                                <td>
                                    <a href="{{Route('admin.specialities.edit', $speciality->id)}}"  class="edit btn btn-success btn-sm" ><i class="fa fa-edit"></i></a>

                                    <a id="deleteButton" speciality-id="{{$speciality->id}}" class="delete btn btn-danger btn-sm"  data-toggle="modal" data-target="#deletemodal"><i class="fa fa-trash"></i></a>
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

@include('includes._deleteModel',['delete_route' => 'admin.specialities.delete','delete_title' => 'Delete Specialities','delete_message' => 'are you sure about deleting this Speciality'])

@stop

@section('page-styles')
@stop

@section('page-script')
    <script>
        $("#table_id tbody").on('click', '#deleteButton', function() {
            var id = $(this).attr('speciality-id');
            $('#deleted_id').val(id);
        })

    </script>
    <script src="{{ asset('admin/js/datatable_conf.js') }}"></script>
<script src="{{ asset('admin/assets/bundles/mainscripts.bundle.js') }}"></script>

@stop
