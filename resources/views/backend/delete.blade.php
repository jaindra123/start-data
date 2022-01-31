{{-- !-- Delete Warning Modal -->  --}}
<form action="@if($data->user==1){{route('deleteUser',['id'=>$data->id])}}@endif" method="post">
    <div class="modal-body">
        @csrf
        <h5 class="text-center">Are you sure you want to delete <b>@if($data->user==1){{$data->name}}@endif</b> ?</h5>
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
        <button type="submit" class="btn btn-danger">{{'Yes, Delete '}}</button>
    </div>
</form>