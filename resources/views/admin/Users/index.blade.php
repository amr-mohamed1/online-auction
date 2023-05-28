@extends('layout.admin.master')
@section('parentPageTitle', 'Dashboard')
@section('title', 'Users')

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
                                <th>Name</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Home Number</th>
                                <th>Country</th>
                                <th>City</th>
                                <th>Address</th>
                                <th>Postal Code</th>
                                <th>Digital Signature</th>
                                <th>Gender</th>
                                <th>Type</th>
                                <th>Created At</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($users as $user)
                            <tr>
                                <td>{{$user->id}}</td>
                                <td>{{$user->first_name . " " . $user->last_name}}</td>
                                <td>{{$user->email}}</td>
                                <td>{{$user->phone}}</td>
                                <td>{{$user->home_number}}</td>
                                <td>{{$user->country}}</td>
                                <td>{{$user->city}}</td>
                                <td>{{$user->address}}</td>
                                <td>{{$user->postal_code}}</td>
                                <td>{{$user->digital_signature}}</td>
                                <td>{{$user->gender}}</td>
                                <td>{{$user->type}}</td>
                                <td>{{$user->created_at}}</td>
                                <td>
                                    @if($user->status == 1)
                                        <a id="deleteButton" user-id="{{$user->id}}" class="delete btn btn-danger btn-sm"  data-toggle="modal" data-target="#deletemodal"><i class="fa fa-ban"></i></a>
                                    @else
                                        <a href="{{Route('admin.users.unblock_user', $user->id)}}"  class="btn btn-secondary btn-sm" ><i class="fas fa-unlock-alt"></i></a>
                                    @endif
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
