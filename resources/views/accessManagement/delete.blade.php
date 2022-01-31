{{-- !-- Delete Warning Modal -->  --}}
<form action="{{route('delete.cutomer',['id'=>$value->id])}}" method="post">    
    <!-- Delete modal -->
    <div class="modal fade" id="modalDelete{{$value->id}}" tabindex="-1" role="dialog" aria-labelledby="modalDeleteLabel" aria-hidden="true">
        <div class="modal-dialog modal-sm" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    @csrf
                    <h5 class="text-center">
                        Are you sure you want to delete <b>{{$value->name}}</b> ?
                    </h5>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-danger">{{'Yes, Delete '}}</button>
                </div>
            </div>
        </div>
    </div>
</form>
