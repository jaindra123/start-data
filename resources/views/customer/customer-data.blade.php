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
          <strong id="cust_name_error"></strong>
        </span>

        <!-- <div id="success_msg" style="display: none;" class="alert alert-success" role="alert">
          Successfully Updated
        </div> -->
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
                  <!-- <th scope="col">Customer Pass</th> -->
                  <th scope="col">Customer Logo</th>
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
                   <!--  <td>{{ $customer->cust_password }}</td> -->

                    <td style="width: 20%;"> <img src="{{url('/public/customer_logo',$customer->customer_logo)}}" style="width: 20%;"></td>
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
            <form action="javascript:void(0)" id="addEditCustomerForm" name="addEditCustomerForm" class="form-horizontal" method="POST" enctype="multipart/form-data">
              <input type="hidden" name="id" id="id">
              <div class="form-group">
                <div class="col-sm-12">
                  <input type="text" class="form-control" id="cust_name" name="cust_name" placeholder="Enter Customer Name" value="" maxlength="50"  autocomplete="off">
                </div>
                
              </div>  
              <div class="form-group">
                <div class="col-sm-12">
                  <input type="email" class="form-control" id="cust_email" name="cust_email" placeholder="Enter Customer Email" value="" maxlength="50"  autocomplete="off">
                </div>
              </div>
              <div class="form-group">
                <div class="col-sm-12">
                  <input type="text" class="form-control" id="cust_type" name="cust_type" placeholder="Enter Customer Type" value=""  autocomplete="off">
                </div>
              </div>
              <div class="form-group">
                <div class="col-sm-12">
                  <input type="text" class="form-control" id="cust_password" name="cust_password" placeholder="Enter Customer Password" value="" autocomplete="off">
                </div>
              </div>

              <div class="form-group">
                <div class="col-sm-12">
                  <select class="form-select" id="cust_industry" name="cust_industry" aria-label="">
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
                  <input type="file" class="form-control" id="cust_logo" name="cust_logo" placeholder="Enter Customer Logo" value=""  autocomplete="off">
                </div>
              </div>
              <div class="form-group">
                <div class="col-sm-12">
<<<<<<< HEAD
                  <input type="text" class="form-control" id="cust_password" name="cust_password" placeholder="Enter Customer Password" value="" required="" autocomplete="off">
                </div>
              </div>

              <!-- <div class="form-group">
                <div class="col-sm-12">
                  <select class="form-select" id="industry" name="industry" aria-label="Default select example">
                    <option selected>Select Industry</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                  </select>
                </div>
              </div> -->
              
              <div class="form-group">
                <div class="col-sm-12">
                  <input type="file" class="form-control" id="cust_logo" name="cust_logo" placeholder="Enter Customer Logo" value="" required="" autocomplete="off">
                </div>
              </div>
              <!-- <div class="form-group">
                <div class="col-sm-12">
                  <select class="form-select" id="primary_color" name="primary_color" aria-label="">
                    <option selected>Select Colour</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                  </select>
                </div>
              </div> -->
=======
                  <input type="text" class="form-control" id="primary_color" name="primary_color" placeholder="Enter Colour code" value=""  autocomplete="off">
                </div>
              </div> 
>>>>>>> 9f26ec6d1dc0ee55bbc726d337b7538f09fedfb2
              </div>

               <div class="after-add-more">
                <fieldset>
<<<<<<< HEAD
                <div class="form-group">
                  <div class="col-sm-12">
                    <select class="form-select" id="cust_country" name="cust_country[0][country]" >
                      <option selected>Select Country</option>
                      <option value="in">India</option>
                      <option value="two">Two</option>
                      <option value="3">Three</option>
                    </select>
                  </div>
                </div>
                <!-- <div class="form-group">
                  <div class="col-sm-12">
                    <input type="text" class="form-control" id="cust_state" name="cust_state[]" placeholder="enter state" value="" required="" autocomplete="off">
                  </div>
                </div> -->
                 </fieldset>
                <!-- <div class="form-group">
                  <div class="col-sm-12">
                    <input type="text" class="form-control" id="cust_zip" name="cust_zip" placeholder="enter zip" value="" required="" autocomplete="off">
=======
                  <div class="form-group">
                    <div class="col-sm-12">
                      <select class="form-select cust-country" id="cust_country" name="cust_country[]" >
                        @if(isset($countries) && $countries != null)
                          @foreach($countries as $countrie) 
                            <option value="{{ $countrie->country_code }}" {{$customer->cust_country  == $countrie->id  ? 'selected' : '' }}>  {{ $countrie->country}}  </option>
                         @endforeach
                        @endif
                      </select>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-sm-12">
                      <input type="text" class="form-control cust-state" id="cust_state" name="cust_state[]" placeholder="Enter State Name" value=""  autocomplete="off">
                    </div>
                  </div> 
                
                 <div class="form-group">
                  <div class="col-sm-12">
                    <input type="text" class="form-control cust-zip" id="cust_zip" name="cust_zip[]" placeholder="enter zip" value=""  autocomplete="off">
>>>>>>> 9f26ec6d1dc0ee55bbc726d337b7538f09fedfb2
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-sm-12">
<<<<<<< HEAD
                    <input type="text" class="form-control" id="cust_city" name="cust_city" placeholder="enter city" value="" required="" autocomplete="off">
=======
                    <input type="text" class="form-control cust-city" id="cust_city" name="cust_city[]" placeholder="enter city" value=""  autocomplete="off">
>>>>>>> 9f26ec6d1dc0ee55bbc726d337b7538f09fedfb2
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-sm-12">
<<<<<<< HEAD
                    <input type="text" class="form-control" id="cust_street" name="cust_street" placeholder="enter street" value="" required="" autocomplete="off">
=======
                    <input type="text" class="form-control cust-street" id="cust_street" name="cust_street[]" placeholder="enter street" value=""  autocomplete="off">
>>>>>>> 9f26ec6d1dc0ee55bbc726d337b7538f09fedfb2
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-sm-12">
<<<<<<< HEAD
                    <input type="text" class="form-control" id="cust_house_no" name="cust_house_no" placeholder="House No." value="" required="" autocomplete="off">
                  </div>
                </div> -->

                <div class="col-md-2">
                    <div class="form-group change">
                        <label for="">&nbsp;</label><br/>
=======
                    <input type="text" class="form-control cust-house-no" id="cust_house_no" name="cust_house_no[]" placeholder="House No." value="" autocomplete="off">
                  </div>
                </div>
                </fieldset>

                <div class="" style="margin: 0 0 0 16px;">
                    <div class="form-group change">
>>>>>>> 9f26ec6d1dc0ee55bbc726d337b7538f09fedfb2
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
          <div class="modal-footer">
            
          </div>
        </div>
      </div>
    </div>
//<!--------------------------- Add More Script ------------------------------>
    <script type="text/javascript">
      $(document).ready(function() {
        $("body").on("click",".add-more",function(){ 
          var html = $(".after-add-more").first().clone();
<<<<<<< HEAD
=======
         // alert(html);
>>>>>>> 9f26ec6d1dc0ee55bbc726d337b7538f09fedfb2
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
            $('#cust_name').val(res.cust_name);
            $('#cust_email').val(res.cust_email);
            $('#cust_type').val(res.cust_type);
            $('#cust_password').val(res.cust_password);
<<<<<<< HEAD
            $('#cust_logo').val(res.cust_logo);
            $('#cust_country').val(res.cust_country);
            
         }
=======
            $('#cust_logo').val(res.cust_logo); 
            $('#primary_color').val(res.primary_color);  
            $('#cust_industry').val(res.cust_industry_id); 
            $('.cust-country').val(res.cust_country); 
            $('.cust-state').val(res.cust_state); 
            $('.cust-zip').val(res.zip); 
            $('.cust-city').val(res.city); 
            $('.cust-street').val(res.street); 
            $('.cust-house-no').val(res.house_number); 
          }
>>>>>>> 9f26ec6d1dc0ee55bbc726d337b7538f09fedfb2
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
<<<<<<< HEAD
      var formData = new FormData($('#addEditCustomerForm')[0]);
=======
      
      var formData = new FormData($('#addEditCustomerForm')[0]);
      var countries = [];
      var states = [];
      var zip = [];
      var city = [];
      var street = [];
      var house_no = [];
>>>>>>> 9f26ec6d1dc0ee55bbc726d337b7538f09fedfb2
      var id = $("#id").val();
      var cust_name = $("#cust_name").val();
      var cust_email = $("#cust_email").val();
      var cust_type = $("#cust_type").val();
      var cust_password = $("#cust_password").val();
      var cust_logo = $("#cust_logo").val();
<<<<<<< HEAD
      var cust_country = $("#cust_country").val();
      alert(cust_country);
=======
      var primary_color = $("#primary_color").val();

      $.each ($(".cust-country option:selected"), function(){              
        countries.push($(this).val());  
      }); 
      $.each ($(".cust-state"), function(){              
        states.push($(this).val());  
      });
      $.each ($(".cust-zip"), function(){              
        zip.push($(this).val());  
      });
      $.each ($(".cust-city"), function(){              
        city.push($(this).val());  
      });
      $.each ($(".cust-street"), function(){              
        street.push($(this).val());  
      });

      $.each ($(".cust-house-no"), function(){              
        house_no.push($(this).val());  
      });
      formData.append('countrylist', countries);
      formData.append('stateslist', states);
      formData.append('ziplist', zip);
      formData.append('citylist', city);
      formData.append('streetlists', street);
      formData.append('house_no_list', house_no);

>>>>>>> 9f26ec6d1dc0ee55bbc726d337b7538f09fedfb2
      $('#ajax-customer-model').modal('hide');
      $.ajax({
        type:"POST",
        url: "{{ url('add-update-customer') }}",
<<<<<<< HEAD
        data: {id:id, cust_name:cust_name, cust_email:cust_email, cust_type:cust_type, cust_password:cust_password,
        cust_logo:cust_logo, cust_country:cust_country},
=======
>>>>>>> 9f26ec6d1dc0ee55bbc726d337b7538f09fedfb2
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
          $('#cust_name_error').html(errorHtml);
        }
      });

    });
});
</script>
</body>
</html>