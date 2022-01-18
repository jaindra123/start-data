<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Customer Details</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" >
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container mt-2">
    <div class="row">
        <div class="col-md-12 card-header text-center font-weight-bold">
          <h2>Customer Details</h2>
        </div>
         <div id="success_msg" style="display: none;" class="alert alert-success" role="alert">
         Successfully Updated
        </div>
        <div class="col-md-12 mt-1 mb-2"><button type="button" id="addNewCustomer" class="btn btn-success">Add</button></div>
         <span id="res_message"></span>
        <div class="col-md-12">
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Customer Name</th>
                  <th scope="col">Customer Email</th>
                  <th scope="col">Customer type</th>
                  <th scope="col">Action</th>
                </tr>
              </thead>
              <tbody> 
                @foreach ($customers as $customer)
                <tr>
                    <td>{{ $customer->id }}</td>
                    <td>{{ $customer->cust_name }}</td>
                    <td>{{ $customer->cust_email }}</td>
                    <td>{{ $customer->cust_type }}</td>
                    <td>
                       <a href="javascript:void(0)" class="btn btn-primary edit" data-id="{{ $customer->id }}">Edit</a>
                      <a href="javascript:void(0)" class="btn btn-primary delete" data-id="{{ $customer->id }}">Delete</a>
                    </td>
                </tr>
                @endforeach
              </tbody>
            </table>
             {!! $customers->links() !!}
        </div>
    </div>        
</div>
<!-- boostrap model -->
    <div class="modal fade" id="ajax-customer-model" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title" id="ajaxCustomerModel"></h4>
             <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>
          <div class="modal-body">
            <form action="javascript:void(0)" id="addEditCustomerForm" name="addEditCustomerForm" class="form-horizontal" method="POST">
              <input type="hidden" name="id" id="id">
              <div class="form-group">
                <label for="name" class="col-sm-2 control-label">Customer Name</label>
                <div class="col-sm-12">
                  <input type="text" class="form-control" id="cust_name" name="cust_name" placeholder="Enter Customer Name" value="" maxlength="50" required="" autocomplete="off">
                </div>
              </div>  
              <div class="form-group">
                <label for="name" class="col-sm-2 control-label">Customer Email</label>
                <div class="col-sm-12">
                  <input type="email" class="form-control" id="cust_email" name="cust_email" placeholder="Enter Customer Email" value="" maxlength="50" required="" autocomplete="off">
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-2 control-label">Customer Type</label>
                <div class="col-sm-12">
                  <input type="text" class="form-control" id="cust_type" name="cust_type" placeholder="Enter Customer Type" value="" required="" autocomplete="off">
                </div>
              </div>
              <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-primary" id="btn-save" value="addNewCustomer">Save changes
                </button>
              </div>
            </form>
          </div>
          <div class="modal-footer">
            
          </div>
        </div>
      </div>
    </div>
<!-- end bootstrap model -->
<script type="text/javascript">
 $(document).ready(function($){
    $.ajaxSetup({
      headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      }
    });
    $('#addNewCustomer').click(function () {
      $('#addEditCustomerForm').trigger("reset");
      $('#ajaxCustomerModel').html("Add Customer");
      $('#ajax-customer-model').modal('show');
    });
//<!--------------------------- Open Edit Customer Form ------------------------------>
    $('body').on('click', '.edit', function () {
      var id = $(this).data('id');
      $.ajax({
          type:"POST",
          url: "{{ url('edit-customer') }}",
          data: { id: id },
          dataType: 'json',
          success: function(res){
            $('#ajaxCustomerModel').html("Edit Customer");
            $('#ajax-customer-model').modal('show');
            $('#id').val(res.id);
            $('#cust_name').val(res.cust_name);
            $('#cust_email').val(res.cust_email);
            $('#cust_type').val(res.cust_type);
         }
      });
    });
//<!--------------------------- Delete ----------------------------------------------------------->
    $('body').on('click', '.delete', function () {
       if (confirm("Delete Record?") == true) {
        var id = $(this).data('id');
        $.ajax({
            type:"POST",
            url: "{{ url('delete-customer') }}",
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
      var id = $("#id").val();
      var cust_name = $("#cust_name").val();
      var cust_email = $("#cust_email").val();
      var cust_type = $("#cust_type").val();
      $('#ajax-customer-model').modal('hide');
      $.ajax({
        type:"POST",
        url: "{{ url('add-update-customer') }}",
        data: {id:id, cust_name:cust_name, cust_email:cust_email, cust_type:cust_type, },
        dataType: 'json',
        success: function(response){
          //console.log(response);
          if(response.success){
            alert(response.message);
            //$("#success_msg").show("successsfully");
            //$("#success_msg").fadeOut(3000);
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