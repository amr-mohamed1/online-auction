@extends('layout.admin.master')
@section('parentPageTitle', 'Dashboard')
@section('title', 'Orders')

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
                                <th>City</th>
                                <th>Area</th>
                                <th>Order Status</th>
                                <th>Created At</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($orders as $order)
                            <tr>
                                <td>{{$order->id}}</td>
                                <td>{{$order->user->name}}</td>
                                <td>{{$order->specialist->name}}</td>
                                <td>{{$order->city->name}}</td>
                                <td>{{$order->area->name}}</td>
                                <td>{{$order->order_status}}</td>
                                <td>{{$order->created_at}}</td>
                                <td>
                                    <a href="{{Route('admin.orders.show', $order->id)}}"  class="edit btn btn-primary btn-sm" ><i class="fa fa-eye"></i></a>

                                    <a id="deleteButton" order-id="{{$order->id}}" class="delete btn btn-danger btn-sm" data-toggle="modal" data-target="#deletemodal"><i class="fa fa-trash"></i></a>
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

@include('includes._deleteModel',['delete_route' => 'admin.orders.delete','delete_title' => 'Decline Order','delete_message' => 'are You Sure about Delete(Decline) This Order'])

@stop

@section('page-styles')
@stop

@section('page-script')
    <script>
        $('#table_id tbody').on('click', '#deleteButton', function() {
            var id = $(this).attr('order-id');
            $('#deleted_id').val(id);
        })
    </script>

    <script src="{{asset('admin/js/datatable_conf.js')}}"></script>
<script src="{{ asset('admin/assets/bundles/mainscripts.bundle.js') }}"></script>
@stop
