@extends('layout.admin.master')
@section('parentPageTitle', 'Dashboard')
@section('title', 'Feedbacks')

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
                                <th>Specialist Name</th>
                                <th>Show User Info</th>
                                <th>Comment</th>
                                <th>Created At</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($Feedbacks as $feedback)
                            <tr>
                                <td>{{$feedback->id}}</td>
                                <td>{{$feedback->user->name}}</td>
                                <td>{{$feedback->specialist->name}}</td>
                                <td>{{$feedback->show_user_info == 1 ? "Yes" : "No"}}</td>
                                <td>{{$feedback->comment}}</td>
                                <td>{{$feedback->created_at}}</td>
                                <td>
                                    <a id="deleteButton" feedback-id="{{$feedback->id}}" class="delete btn btn-danger btn-sm"  data-toggle="modal" data-target="#deletemodal"><i class="fa fa-trash"></i></a>
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

@include('includes._deleteModel',['delete_route' => 'admin.feedbacks.delete','delete_title' => 'Delete Feedback','delete_message' => 'are You Sure about Deleting This Feedback'])

@stop

@section('page-styles')
@stop

@section('page-script')
    <script>
        $('#table_id tbody').on('click', '#deleteButton', function() {
            var id = $(this).attr('feedback-id');
            $('#deleted_id').val(id);
        })
    </script>

    <script src="{{asset('admin/js/datatable_conf.js')}}"></script>
<script src="{{ asset('admin/assets/bundles/mainscripts.bundle.js') }}"></script>
@stop
