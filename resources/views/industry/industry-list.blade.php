<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Industry Lists</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" >
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>


<body>
<div class="container mt-2">
    <div class="row">
        <div class="col-md-12 card-header text-center font-weight-bold">
          <h2>Industry Lists</h2>
        </div>

        @if(Session::has('message'))
          <div class="alert alert-success alert-dismissible fade show">
            {{Session::get('message')}}
          </div>
        @endif


        <div id="success_msg" style="display: none;" class="alert alert-success" role="alert">
         Successfully Updated
        </div>

        <div class="col-md-12 mt-1 mb-2"><button type="button" id="addNewIndustry" class="btn btn-success">Add</button></div>
         <span id="res_message"></span>
        <div class="col-md-12">
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Industry Name</th>
                  <th scope="col">Action</th>
                </tr>
              </thead>
              <tbody> 
                @if(isset($industries) && $industries != null)
                  @foreach ($industries as $industrie)
                  <tr>
                    <td>{{ $industrie->id }}</td>
                    <td>{{ $industrie->indury }}</td>
                    <td>
                    <a href="javascript:void(0)" class="btn btn-primary edit" data-id="{{ $industrie->id }}">Edit</a>
                    <a href="javascript:void(0)" class="btn btn-primary delete" data-id="{{ $industrie->id }}">Delete</a>
                    </td>
                  </tr>
                  @endforeach
                @endif
              </tbody>
            </table>
             {!! $industries->links() !!}
        </div>
    </div>        
</div>
<!-- boostrap model -->
    <div class="modal fade" id="ajax-industry-model" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title" id="ajaxIndustryModel"></h4>
             <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>
          <div class="modal-body">
            <form action="javascript:void(0)" id="addEditIndustryForm" name="addEditIndustryForm" class="form-horizontal" method="POST" enctype="multipart/form-data">
              <input type="hidden" name="id" id="id">
              <div class="form-group">
                <div class="col-sm-12">
                  <input type="text" class="form-control" id="industry_name" name="industry_name" placeholder="Enter Industry Name" value="" maxlength="50" required="" autocomplete="off">
                </div>
              </div>  
              <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-primary" id="btn-save" value="addNewIndustry">Save changes
                </button>
              </div>
            </form>
          </div>
          <div class="modal-footer">
            
          </div>
        </div>
      </div>
    </div>

<script type="text/javascript">
 $(document).ready(function($){
    $.ajaxSetup({
      headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      }
    });
    $('#addNewIndustry').click(function () {
      $('#addEditIndustryForm').trigger("reset");
      $('#ajaxIndustryModel').html("Add Industry");
      $('#ajax-industry-model').modal('show');
    });
//<!--------------------------- Open Edit Customer Form ------------------------------>
    $('body').on('click', '.edit', function () {
      var id = $(this).data('id');
      $.ajax({
          type:"POST",
          url: "{{ url('edit-industry') }}",
          data: { id: id },
          dataType: 'json',
          success: function(res){
            $('#ajaxIndustryModel').html("Edit Customer");
            $('#ajax-industry-model').modal('show');
            $('#id').val(res.id);
            $('#industry_name').val(res.industry); 
          }
      });
    });
//<!--------------------------- Delete ----------------------------------------------------------->
    $('body').on('click', '.delete', function () {
       if (confirm("Delete Record?") == true) {
        var id = $(this).data('id');
        $.ajax({
            type:"POST",
            url: "{{ url('delete-industry') }}",
            data: { id: id },
            dataType: 'json',
            success: function(res){
              window.location.reload();
           }
        });
       }
    });

//<!--------------------------- Insert/Edit ----------------------------------------------------->

    $('body').on('click', '#btn-save', function (event) {
      var formData = new FormData($('#addEditIndustryForm')[0]);
      var id = $("#id").val();
      var industry_name = $("#industry_name").val();
      $('#ajax-industry-model').modal('hide');
      $.ajax({
        type:"POST",
        url: "{{ url('add-update-industry') }}",
        data: {id:id, industry_name:industry_name},
        dataType: 'json',
        success: function(response){
          if (response.success == true) {
            alert(response.message);
             //$('#success_msg').show(0).delay(6000).hide(0);
             window.location.reload();
          }else{
            alert("Error")
          }
        }
      });
    });

});
</script>
</body>
</html>