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
                                <th>Product Name</th>
                                <th>Owner</th>
                                <th>Price</th>
                                <th>Condition</th>
                                <th>Number of Items</th>
                                <th>Country / City</th>
                                <th>Full Address</th>
                                <th>Buyer</th>
                                <th>Status</th>
                                <th>Created At</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($orders as $order)
                            <tr>
                                <td>{{$order->id}}</td>
                                <td>{{$order->product_title}}</td>
                                <td>{{$order->owner->first_name . " " . $order->owner->last_name}}</td>
                                <td>{{$order->max_price}}</td>
                                <td>{{$order->Condition}}</td>
                                <td>{{$order->number_of_items}}</td>
                                <td>{{$order->buyer->country . " / " . $order->buyer->city}}</td>
                                <td>{{$order->buyer->address}}</td>
                                <td>{{$order->buyer->first_name . " " . $order->buyer->last_name}}</td>
                                <td>{{$order->delivery_status != 0 ? "Deliverd" : "Not Deliverd"}}</td>
                                <td>{{$order->created_at}}</td>
{{--                                <td>--}}
{{--                                    <a href="{{Route('admin.orders.show', $order->id)}}"  class="edit btn btn-primary btn-sm" ><i class="fa fa-eye"></i></a>--}}

{{--                                    <a id="deleteButton" order-id="{{$order->id}}" class="delete btn btn-danger btn-sm" data-toggle="modal" data-target="#deletemodal"><i class="fa fa-trash"></i></a>--}}
{{--                                </td>--}}
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
