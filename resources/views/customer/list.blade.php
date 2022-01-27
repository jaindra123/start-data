@extends('layouts.main')

@section('title','Access User List')

@section('content')

    <div class="content quereszzz">
        <div class="row">
            <div class="col-md-12">
                <div class="card table-new">
                    <div class="card-body">
                        <table class="table">
                            <thead class="text-primary">
                                <tr>
                                    <th>S.NO</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Customer type</th>
                                    <th>Industry</th>
                                    <th>Logo</th>
                                    <th>Country</th>
                                    <th>State</th>
                                    <th>Zip</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if(!empty($customers))
                                    @foreach($customers as $key => $customer)
                                        <tr>
                                            <td>{{ $key+1}}</td>
                                            <td>{{$customer->customer_name}}</td>
                                            <td>{{$customer->customer_email}}</td>
                                            <td>{{$customer->customer_type}}</td>
                                            <td>{{$customer->industry}}</td>
                                            <td> <img src="{{url('/customer_logo',$customer->customer_logo)}}" style="width: 40%;"></td>
                                            <td>{{ $customer->country }}</td>
                                            <td>{{ $customer->state }}</td>
                                            <td>{{ $customer->zip }}</td>
                                            <td class="text-left">
                                               <!--  <a class="nav-link btn-magnify" data-toggle="modal" data-target="#exampleModal2">fgdf </a> -->
                                                <a href="javascript:void(0)" id="addNewCustomer" data-id="">
                                                <i class="fa fas fa-users" aria-hidden="true"></i></a> | 

                                                <a href="javascript:void(0)" class="edit" data-id="{{ $customer->id }}">
                                                <i class="fa fa-pencil-square-o" aria-hidden="true"></i></a> | 

                                                <a  data-id="{{ $customer->id }}" class="delete" href="javascript:void(0)">
                                                <i class="fa fa-trash-o" aria-hidden="true"></i></a> 
                                            </td>
                                        </tr>
                                    @endforeach
                                @else
                                    <tr> <td colspan="8">{{'No Record Found'}}</td>  </tr>
                                @endif
                            </tbody>
                        </table> 
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
<!-- <div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header border-0">
                <h5 class="mt-4">Settings</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                <div class="row">
                    <div class="col-md-6">

                        <form class="bf-67" action="/action_page.php">
                            <div class="row w-100">
                                <div class="col-md-12">
                                    <label for="email" class="mb-4">Choose the Color for your Charts (HEX)</label>
                                </div>
                            </div>
                            <div class="row w-100">
                                <div class="col-md-3">
                                    <label for="email" class="">Color 1</label>
                                </div>
                                <div class="col-md-9">
                                    <input type="text" class="form-control mb-2 " placeholder="#182HH1" id="email">
                                </div>
                            </div>
                            <div class="row w-100">
                                <div class="col-md-3">
                                    <label for="email" class="">Color 2</label>
                                </div>
                                <div class="col-md-9">
                                    <input type="text" class="form-control mb-2 " placeholder="#2AAAAA" id="email">
                                </div>
                            </div>
                            <div class="row w-100">
                                <div class="col-md-3">
                                    <label for="email" class="">Color 3</label>
                                </div>
                                <div class="col-md-9">
                                    <input type="text" class="form-control mb-2" placeholder="#FFFF23" id="email">
                                </div>
                            </div>
                            <div class="row w-100">
                                <div class="col-md-3">
                                    <label for="email" class=""> Color 4</label>
                                </div>
                                <div class="col-md-9">
                                    <input type="email" class="form-control mb-2 " placeholder=" #48KKAS" id="email">
                                </div>
                            </div>
                            <div class="row w-100">
                                <div class="col-md-3">
                                    <label for="email" class=""> Color 5</label>
                                </div>
                                <div class="col-md-9">
                                    <input type="email" class="form-control mb-2 " placeholder=" #0000000" id="email">
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="col-md-6">
                        <div class="row w-100">
                            <div class="col-md-12">
                                <label for="email" class="mb-4">Output Language</label>
                            </div>
                        </div>
                        <div class="row w-100">
                            <div class="col-md-12">
                                <select class="form-control mb-3">
                                    <option>English</option>
                                    <option>English</option>
                                    <option>English</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div> -->

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
input#customer_logo {
    position: static;
    opacity: unset;
}
</style>

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
                      <select class="form-select custmomer-country" id="country" name="country[]" >
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
                      <input type="text" class="form-control custmomer-state" id="state" name="state[]" placeholder="Enter State Name" value=""  autocomplete="off">
                    </div>
                  </div> 
                
                 <div class="form-group">
                  <div class="col-sm-12">
                    <input type="text" class="form-control custmomer-zip" id="customer_zip" name="customer_zip[]" 
                    placeholder="Enter zip" value=""  autocomplete="off">
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-sm-12">
                    <input type="text" class="form-control custmomer-city" id="customer_city" name="customer_city[]" placeholder="Enter city" value=""  autocomplete="off">
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-sm-12">
                    <input type="text" class="form-control custmomer-street" id="customer_street" name="customer_street[]" placeholder="Enter street" value=""  autocomplete="off">
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-sm-12">
                    <input type="text" class="form-control custmomer-house-no" id="cust_house_no" name="cust_house_no[]" placeholder="Enter House No." value="" autocomplete="off">
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
                <button type="submit" class="login100-form-btn23" id="btn-save" value="addNewCustomer">Save Changes
                </button>
              </div>
            </form>
          </div>
          <div class="modal-footer"> </div>
        </div>
      </div>
    </div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"> </script>
<!--------------------------- Add More Script ------------------------------>
<script type="text/javascript">
  jQuery(document).ready(function() {
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


$(document).ready(function($){
    $.ajaxSetup({
      headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      }
    });
    jQuery('#addNewCustomer').click(function () {
      $('#addEditCustomerForm').trigger("reset");
      jQuery('#ajaxCustomerModel').html("Add Customer");
      jQuery('#ajax-customer-model').modal('show');
    });
    // Open Edit Customer Form
    $('body').on('click', '.edit', function () {
        var id = $(this).data('id');
        $.ajax({
            type:"POST",
            url: "{{ url('edit-customer') }}",
            data: { id: id },
            dataType: 'json',
            success: function(res){
                $('#ajaxCustomerModel').html("Edit Customer");
                jQuery('#ajax-customer-model').modal('show');
                $('#id').val(res.id);
                $('#customer_name').val(res.customer_name);
                $('#customer_email').val(res.customer_email);
                $('#customer_type').val(res.customer_type);
                $('#customer_password').val(res.customer_password);
                $('#password_confirm').val(res.password_confirm);
                $('#customer_logo').val(res.customer_logo); 
                $('#primary_color').val(res.primary_color);  
                $('#customer_industry').val(res.cust_industry_id); 
                $('.custmomer-country').val(res.country); 
                $('.custmomer-state').val(res.state); 
                $('.custmomer-zip').val(res.zip); 
                $('.custmomer-city').val(res.city); 
                $('.custmomer-street').val(res.street); 
                $('.custmomer-house-no').val(res.house_number); 
            }
        });
    });
    // Delete Customer
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
    // Insert and Edit Customer
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

        $.each ($(".custmomer-country option:selected"), function(){              
            countries.push($(this).val());  
        }); 
        $.each ($(".custmomer-state"), function(){              
            states.push($(this).val());  
        });
        $.each ($(".custmomer-zip"), function(){              
            zip.push($(this).val());  
        });
        $.each ($(".custmomer-city"), function(){              
            city.push($(this).val());  
        });
        $.each ($(".custmomer-street"), function(){              
            street.push($(this).val());  
        });

        $.each ($(".custmomer-house-no"), function(){              
            house_no.push($(this).val());  
        });
        formData.append('countrylist', countries);
        formData.append('stateslist', states);
        formData.append('ziplist', zip);
        formData.append('citylist', city);
        formData.append('streetlists', street);
        formData.append('house_no_list', house_no);

        jQuery('#ajax-customer-model').modal('hide');
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

?>