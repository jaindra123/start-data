<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Customer Lists</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" >
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<style>
fieldset {
  background-color: #eeeeee;
  padding: 10px;
  margin: 10px;
}
.form-select {
  width: 100%;
  padding: 6px 12px;
  font-size: 14px;
}
</style>
<body>
<div class="container mt-2">
    <div class="row">
        <div class="col-md-12 card-header text-center font-weight-bold">
          <h2>Customer Lists</h2>
        </div>

        <span class="text-danger">
          <strong id="customer_name_error"></strong>
        </span>

        <!-- <div id="success_msg" style="display: none;" class="alert alert-success" role="alert">
          Successfully Updated
        </div> -->
        <div class="col-md-12 mt-1 mb-2">
          <button type="button" id="addNewCustomer" class="btn btn-success">Add</button>
        </div>
         <span id="res_message"></span>
        <div class="col-md-12">
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col"> Name</th>
                  <th scope="col"> Email</th>
                  <th scope="col"> Customer type</th>
                  <th scope="col">Industry</th>
                  <th scope="col"> Logo</th>
                  <th scope="col"> Country</th>
                  <th scope="col"> State</th>
                  <th scope="col">Zip</th>
                  <th scope="col">Action</th>
                </tr>
              </thead>
              <tbody> 
                @foreach ($customers as $customer)
                <tr>
                    <td>{{ $customer->id }}</td>
                    <td>{{ $customer->customer_name }}</td>
                    <td>{{ $customer->customer_email }}</td>
                    <td>{{ $customer->customer_type }}</td>
                    <td>{{ $customer->industry }}</td>
                    <td style="width: 10%;"> <img src="{{url('/public/customer_logo',$customer->customer_logo)}}" style="width: 20%;"></td>
                    <td>{{ $customer->country }}</td>
                    <td>{{ $customer->state }}</td>
                    <td>{{ $customer->zip }}</td>
                    <td>
                      <a href="javascript:void(0)" class="btn btn-primary edit" data-id="{{ $customer->id }}">Edit</a>
                    </br>
                      <a href="javascript:void(0)" class="btn btn-primary delete" data-id="{{ $customer->id }}">Delete</a>
                    </td>
                </tr>
                @endforeach
              </tbody>
            </table>
          
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
            <form action="javascript:void(0)" id="addEditCustomerForm" name="addEditCustomerForm" class="form-horizontal" method="POST" enctype="multipart/form-data">
              <input type="hidden" name="id" id="id">
              <div class="form-group">
                <div class="col-sm-12">
                  <input type="text" class="form-control" id="customer_name" name="customer_name" placeholder="Enter Customer Name" value="" maxlength="50"  autocomplete="off">
                </div>
                
              </div>  
              <div class="form-group">
                <div class="col-sm-12">
                  <input type="email" class="form-control" id="customer_email" name="customer_email" placeholder="Enter Customer Email" value="" maxlength="50"  autocomplete="off">
                </div>
              </div>
              <div class="form-group">
                <div class="col-sm-12">
                  <input type="text" class="form-control" id="customer_type" name="customer_type" placeholder="Enter Customer Type" value=""  autocomplete="off">
                </div>
              </div>
              <div class="form-group">
                <div class="col-sm-12">
                  <input type="text" class="form-control" id="customer_password" name="customer_password" placeholder="Enter Customer Password" value="" autocomplete="off">
                </div>
              </div>

              <div class="form-group">
                <div class="col-sm-12">
                  <input type="text" class="form-control" id="password_confirm" name="password_confirm" placeholder="Enter Confirm Password" value="" autocomplete="off">
                </div>
              </div>

              <div class="form-group">
                <div class="col-sm-12">
                  <select class="form-select" id="customer_industry" name="customer_industry" aria-label="">
                    @if(isset($industries) && $industries != null)
                      @foreach ($industries as $industrie)
                        <option value="{{ $industrie->id }}" {{$customer->id  == $industrie->id  ? 'selected' : '' }}>  {{ $industrie->industry}}  </option>
                      @endforeach
                    @endif
                  </select>
                </div>
              </div> 
              
              <div class="form-group">
                <div class="col-sm-12">
                  <input type="file" class="form-control" id="customer_logo" name="customer_logo" placeholder="Enter Customer Logo" value=""  autocomplete="off">
                </div>
              </div>
              <div class="form-group">
                <div class="col-sm-12">
                  <input type="text" class="form-control" id="primary_color" name="primary_color" placeholder="Enter Colour code" value=""  autocomplete="off">
                </div>
              </div> 
              </div>

               <div class="after-add-more">
                <fieldset>
                  <div class="form-group">
                    <div class="col-sm-12">
                      <select class="form-select customer-country" id="country" name="country[]" >
                        @if(isset($countries) && $countries != null)
                          @foreach($countries as $countrie) 
                            <option value="{{ $countrie->country_code }}" {{$customer->country  == $countrie->id  ? 'selected' : '' }}>  {{ $countrie->country}}  </option>
                         @endforeach
                        @endif
                      </select>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-sm-12">
                      <input type="text" class="form-control customer-state" id="state" name="state[]" placeholder="Enter State Name" value=""  autocomplete="off">
                    </div>
                  </div> 
                
                 <div class="form-group">
                  <div class="col-sm-12">
                    <input type="text" class="form-control customer-zip" id="customer_zip" name="customer_zip[]" placeholder="enter zip" value=""  autocomplete="off">
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-sm-12">
                    <input type="text" class="form-control customer-city" id="customer_city" name="customer_city[]" placeholder="enter city" value=""  autocomplete="off">
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-sm-12">
                    <input type="text" class="form-control customer-street" id="customer_street" name="customer_street[]" placeholder="enter street" value=""  autocomplete="off">
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-sm-12">
                    <input type="text" class="form-control customer-house-no" id="cust_house_no" name="cust_house_no[]" placeholder="House No." value="" autocomplete="off">
                  </div>
                </div>
                </fieldset>

                <div class="" style="margin: 0 0 0 16px;">
                    <div class="form-group change">
                      <a class="btn btn-success add-more">+ Add More</a>
                    </div>
                </div>

              </div> 

              <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-primary" id="btn-save" value="addNewCustomer">Save changes
                </button>
              </div>
            </form>
          </div>
          <div class="modal-footer"> </div>
        </div>
      </div>
    </div>
<!--------------------------- Add More Script ------------------------------>
    <script type="text/javascript">
      $(document).ready(function() {
        $("body").on("click",".add-more",function(){ 
          var html = $(".after-add-more").first().clone();
         // alert(html);
          $(html).find(".change").html("<label for=''>&nbsp;</label><br/><a class='btn btn-danger remove'>- Remove</a>");
          $(".after-add-more").last().after(html);
        });
        $("body").on("click",".remove",function(){ 
          $(this).parents(".after-add-more").remove();
        });
      });
    </script>
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
            $('#customer_name').val(res.customer_name);
            $('#customer_email').val(res.customer_email);
            $('#customer_type').val(res.customer_type);
            $('#customer_password').val(res.customer_password);
            $('#password_confirm').val(res.password_confirm);
            $('#customer_logo').val(res.customer_logo); 
            $('#primary_color').val(res.primary_color);  
            $('#customer_industry').val(res.cust_industry_id); 
            $('.customer-country').val(res.country); 
            $('.customer-state').val(res.state); 
            $('.customer-zip').val(res.zip); 
            $('.customer-city').val(res.city); 
            $('.customer-street').val(res.street); 
            $('.customer-house-no').val(res.house_number); 
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
      
      var formData = new FormData($('#addEditCustomerForm')[0]);
      var countries = [];
      var states = [];
      var zip = [];
      var city = [];
      var street = [];
      var house_no = [];
      var id = $("#id").val();
      var customer_name = $("#customer_name").val();
      var customer_email = $("#customer_email").val();
      var customer_type = $("#customer_type").val();
      var customer_password = $("#customer_password").val();
      var password_confirm = $("#password_confirm").val();
      
      var customer_logo = $("#customer_logo").val();
      var primary_color = $("#primary_color").val();

      $.each ($(".customer-country option:selected"), function(){              
        countries.push($(this).val());  
      }); 
      $.each ($(".customer-state"), function(){              
        states.push($(this).val());  
      });
      $.each ($(".customer-zip"), function(){              
        zip.push($(this).val());  
      });
      $.each ($(".customer-city"), function(){              
        city.push($(this).val());  
      });
      $.each ($(".customer-street"), function(){              
        street.push($(this).val());  
      });

      $.each ($(".customer-house-no"), function(){              
        house_no.push($(this).val());  
      });
      formData.append('countrylist', countries);
      formData.append('stateslist', states);
      formData.append('ziplist', zip);
      formData.append('citylist', city);
      formData.append('streetlists', street);
      formData.append('house_no_list', house_no);

      $('#ajax-customer-model').modal('hide');
      $.ajax({
        type:"POST",
        url: "{{ url('add-update-customer') }}",
        dataType: 'json',
        data: formData,
        processData: false,
        contentType: false,
        success: function(response){
          console.log(response);
          if(response.success== true){
            alert(response.message);
            window.location.reload(); 
          } 
        },
        error:function (response) {
          console.log('RESPONSE',response);  
          const errors = response.responseJSON.errors;
          let errorHtml = '<ul>';
          for(let key in errors) {
            errorHtml += '<li>'+errors[key][0]+'</li>';
          }
          errorHtml += '</ul>';
          $('#customer_name_error').html(errorHtml);
        }
      });

    });
});
</script>
</body>
</html>