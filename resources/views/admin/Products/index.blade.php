@extends('layout.admin.master')
@section('parentPageTitle', 'Dashboard')
@section('title', 'Products')

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
                                <th>Category</th>
                                <th>Owner</th>
                                <th>Country / City</th>
                                <th>Full Address</th>
                                <th>Price</th>
                                <th>Condition</th>
                                <th>Number of Items</th>
                                <th>Start date</th>
                                <th>End date</th>
                                <th>Status</th>
                                <th>Created At</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($product as $item)
                            <tr>
                                <td>{{$item->id}}</td>
                                <td>{{$item->product_title}}</td>
                                <td>{{$item->category->name}}</td>
                                <td>{{$item->owner->first_name . " " . $item->owner->last_name}}</td>
                                <td>{{$item->owner->country . " / " . $item->owner->city}}</td>
                                <td>{{$item->owner->address}}</td>
                                <td>{{$item->max_price ?? $item->price}}</td>
                                <td>{{$item->Condition}}</td>
                                <td>{{$item->number_of_items}}</td>
                                <td>{{$item->start_date}}</td>
                                <td>{{$item->end_date}}</td>
                                <td>{{$item->delivery_status != 0 ? "Deliverd" : "Not Deliverd"}}</td>
                                <td>{{$item->created_at}}</td>
                                <td>
{{--                                    <a href="{{Route('admin.orders.show', $item->id)}}"  class="edit btn btn-primary btn-sm" ><i class="fa fa-eye"></i></a>--}}

                                    <a id="deleteButton" product-id="{{$item->id}}" class="delete btn btn-danger btn-sm" data-toggle="modal" data-target="#deletemodal"><i class="fa fa-trash"></i></a>
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

@include('includes._deleteModel',['delete_route' => 'admin.products.delete','delete_title' => 'Delete Product','delete_message' => 'are You Sure about Delete This Product'])

@stop

@section('page-styles')
@stop

@section('page-script')
    <script>
        $('#table_id tbody').on('click', '#deleteButton', function() {
            var id = $(this).attr('product-id');
            $('#deleted_id').val(id);
        })
    </script>

    <script src="{{asset('admin/js/datatable_conf.js')}}"></script>
<script src="{{ asset('admin/assets/bundles/mainscripts.bundle.js') }}"></script>
@stop
