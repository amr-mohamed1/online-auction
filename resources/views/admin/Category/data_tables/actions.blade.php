
<a href="{{Route('admin.categories.edit', $categories->id)}}"  class="edit btn btn-success btn-sm" ><i class="fa fa-edit"></i></a>

{{-- <a href="{{Route('admin.categories.show', $categories->id)}}"  class="edit btn btn-primary btn-sm" ><i class="fa fa-eye"></i></a> --}}


<a id="deleteButton" category-id="{{$categories->id}}" class="delete btn btn-danger btn-sm"  data-toggle="modal" data-target="#deletemodal"><i class="fa fa-trash"></i></a>
