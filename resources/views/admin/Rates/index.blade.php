@extends('layout.admin.master')
@section('parentPageTitle', 'Dashboard')
@section('title', 'Rates')

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
                                <th>Rate (Number of Starts)</th>
                                <th>Created At</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($rates as $rate)
                            <tr>
                                <td>{{$rate->id}}</td>
                                <td>{{$rate->user->name}}</td>
                                <td>{{$rate->specialist->name}}</td>
                                <td>{{$rate->num_of_stars . ' Star'}}</td>
                                <td>{{$rate->created_at}}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@include('includes._deleteModel',['delete_route' => 'admin.users.block_user','delete_title' => 'Block User','delete_message' => 'are You Sure about Delete(Block) This User'])

@stop

@section('page-styles')
@stop

@section('page-script')
    <script>
        $('#table_id tbody').on('click', '#deleteButton', function() {
            var id = $(this).attr('user-id');
            $('#deleted_id').val(id);
        })
    </script>

    <script src="{{asset('admin/js/datatable_conf.js')}}"></script>
<script src="{{ asset('admin/assets/bundles/mainscripts.bundle.js') }}"></script>
@stop
