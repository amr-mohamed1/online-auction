@extends('layout.admin.master')
@section('parentPageTitle', 'Dashboard')
@section('title', 'Reports')

@section('content')

<div class="row clearfix">
    <div class="col-lg-12">
        <div class="card">
            <div class="body">
                <div class="table-responsive">
                    <table id="table_id" class="text-center w-full table-bordered display js-exportable2 dataTable table-custom spacing5 cell-border">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>User Name</th>
                                <th>Descriptions</th>
                                <th>Created At</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($reports as $report)
                            <tr>
                                <td>{{$report->id}}</td>
                                <td>{{$report->user_name}}</td>
                                <td>{{$report->description}}</td>
                                <td>{{$report->created_at}}</td>
                                <td>
                                    <a id="deleteButton" report-id="{{$report->id}}" class="delete btn btn-danger btn-sm"  data-toggle="modal" data-target="#deletemodal"><i class="fa fa-trash"></i></a>
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

@include('includes._deleteModel',['delete_route' => 'admin.all-reports.delete','delete_title' => 'Delete Reports','delete_message' => 'are You Sure about Deleting This Report'])

@stop

@section('page-styles')
@stop

@section('page-script')
    <script>
        $('#table_id tbody').on('click', '#deleteButton', function() {
            var id = $(this).attr('report-id');
            $('#deleted_id').val(id);
        })
    </script>

    <script src="{{asset('admin/js/datatable_conf.js')}}"></script>
<script src="{{ asset('admin/assets/bundles/mainscripts.bundle.js') }}"></script>
@stop
