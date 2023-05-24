

    <!-- Delete Modal -->
    <div class="modal fade" id="deletemodal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel2" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="staticBackdropLabel2">{{$delete_title}}</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                    <form method="POST" action="{{route($delete_route)}}">
                <div class="modal-body">
                        @method('post')
                        @csrf
                        <div class="mb-3">
                           <h3 class="text-center">{{$delete_message}}</h3>
                        </div>
                        <div class="mb-3">
                            <input type="hidden" id="deleted_id" name="id" class="form-control">
                        </div>


                </div>
                <div class="modal-footer">
                    <button type="submit" class="m-auto btn btn-danger">Delete</button>
                </div>
                </form>
            </div>
        </div>
    </div>
