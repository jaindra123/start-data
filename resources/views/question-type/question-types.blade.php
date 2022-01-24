<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Question Type List</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" >
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>


<body>
<div class="container mt-2">
    <div class="row">
        <div class="col-md-12 card-header text-center font-weight-bold">
          <h2>Question Type List</h2>
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
                  <th scope="col">Question Type</th>
                  <th scope="col">Action</th>
                </tr>
              </thead>
              <tbody> 
                @if(isset($question_types) && $question_types != null)
                  @foreach ($question_types as $question_type)
                  <tr>
                    <td>{{ $question_type->id }}</td>
                    <td>{{ $question_type->title }}</td>
                    <td>
                    <a href="javascript:void(0)" class="btn btn-primary edit" data-id="{{ $question_type->id }}">Edit</a>
                    <a href="javascript:void(0)" class="btn btn-primary delete" data-id="{{ $question_type->id }}">Delete</a>
                    </td>
                  </tr>
                  @endforeach
                @endif
              </tbody>
            </table>
           
        </div>
    </div>        
</div>
<!-- boostrap model -->
    <div class="modal fade" id="ajax-question-type-model" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title" id="ajaxQuestionTypeModel"></h4>
             <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>
          <div class="modal-body">
            <form action="javascript:void(0)" id="addEditQuestionTypeForm" name="addEditQuestionTypeForm" class="form-horizontal" method="POST" enctype="multipart/form-data">
              <input type="hidden" name="id" id="id">
              <div class="form-group">
                <div class="col-sm-12">
                  <input type="text" class="form-control" id="question_type" name="question_type" placeholder="Enter Question Type" value="" maxlength="50" required="" autocomplete="off">
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
      $('#addEditQuestionTypeForm').trigger("reset");
      $('#ajaxQuestionTypeModel').html("Add Industry");
      $('#ajax-question-type-model').modal('show');
    });
//<!--------------------------- Open Edit Customer Form ------------------------------>
    $('body').on('click', '.edit', function () {
      var id = $(this).data('id');
      $.ajax({
          type:"POST",
          url: "{{ url('edit-question-type') }}",
          data: { id: id },
          dataType: 'json',
          success: function(res){
            $('#ajaxQuestionTypeModel').html("Edit Customer");
            $('#ajax-question-type-model').modal('show');
            $('#id').val(res.id);
            $('#question_type').val(res.title); 
          }
      });
    });
//<!--------------------------- Delete ----------------------------------------------------------->
    $('body').on('click', '.delete', function () {
       if (confirm("Delete Record?") == true) {
        var id = $(this).data('id');
        $.ajax({
            type:"POST",
            url: "{{ url('delete-question-type') }}",
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
      var formData = new FormData($('#addEditQuestionTypeForm')[0]);
      var id = $("#id").val();
      var question_type = $("#question_type").val();
      $('#ajax-question-type-model').modal('hide');
      $.ajax({
        type:"POST",
        url: "{{ url('add-update-question-type') }}",
        data: {id:id, question_type:question_type},
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