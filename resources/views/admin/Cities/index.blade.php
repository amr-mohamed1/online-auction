@extends('layout.admin.master')
@section('parentPageTitle', 'Dashboard')
@section('title', 'Cities')

@section('content')

<div class="row clearfix">
    <div class="col-lg-12">
        <div class="card">
            <div class="header my-3 mb-4">
                <ul class="header-dropdown dropdown">
                    <li>
                        <a href="{{route('admin.cities.create')}}" class="text-white btn btn-primary"><i
                                class="mx-1 icon-plus"></i>
                            Add City
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
                                <th>City Name</th>
                                <th>Create At</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($cities as $city)
                                <tr>
                                    <td>{{$city->id}}</td>
                                    <td>{{$city->name}}</td>
                                    <td>{{$city->created_at}}</td>
                                    <td>
                                        <a href="{{Route('admin.cities.edit', $city->id)}}"  class="edit btn btn-success btn-sm" ><i class="fa fa-edit"></i></a>
                                        <a id="deleteButton" city-id="{{$city->id}}" class="delete btn btn-danger btn-sm"  data-toggle="modal" data-target="#deletemodal"><i class="fa fa-trash"></i></a>
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

@include('includes._deleteModel',['delete_route' => 'admin.cities.delete','delete_title' => 'Delete City','delete_message' => 'Are You Sure About Deleting this City'])

@stop

@section('page-styles')
@stop

@section('page-script')
<script>
    $("#table_id tbody").on('click', '#deleteButton', function() {
        var id = $(this).attr('city-id');
        $('#deleted_id').val(id);
    })

</script>
<script src="{{ asset('admin/js/datatable_conf.js') }}"></script>
<script src="{{ asset('admin/assets/bundles/mainscripts.bundle.js') }}"></script>
@stop
