<div class="question-box">
    <h5>@if($ques->question_type_id == 11){{$ques->question}}@endif</h5>
    <div class="row">
        <div class="row mt-4">
            <input type="hidden" id="mandatory_{{$ques->id}}" value="{{$ques->mandatory}}">
            <div class="col-md-12">
                <label for="Sales" class="radio-label d-block">Name</label>
                <input type="text" class="p-3 form-control has-search mb-2 d-inline-block" placeholder="Name" id="name">
                <div class="name"></div>
            </div>
            <div class="col-md-12 mb-4">
                <label for="Sales" class="radio-label d-block">Email</label>
                <input type="text" class="p-3 form-control has-search mb-2 d-inline-block" placeholder="Email" id="email">
                <div class="email"></div>
            </div>
            <div class="col-md-12">
                <div class="form-groupdd">
                    <input type="checkbox" id="checkbox1" name="checkbox1">
                    <label for="checkbox1">@if($ques->question_type_id == 10){{$ques->question}}@endif</label>
                    <div class="checkbox1"></div>
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-groupdd">
                    <input type="checkbox" id="checkbox2" name="checkbox2">
                    <label for="checkbox2">Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</label>
                    <div class="checkbox2"></div>
                </div>
            </div>
        </div>
    </div>
</div>
@push('js-script')
<script type="text/javascript">
    $(document).ready(function(){
        var checkedcount1 = 0;
        var checkedcount2 = 0;
        var mandatory = $("#mandatory_{{$ques->id}}").val();
        $(document).on('click',function(){
            if($("#checkbox1").is(":checked")){
                checkedcount1 = 1;
                $("#pc1").remove();
            }else{
                checkedcount1 = 0;
            }
            if($("#checkbox2").is(":checked")){
                checkedcount2 = 1;
                $("#pc2").remove();
            }else{
                checkedcount1 = 0;
            }
        });
        $("#submit").on('click',function(){
            var check = true;
            var name = $("#name").val();
            var email = $("#email").val();
            if(name.trim() != ''){
                $("#text_name").remove();
            }
            if(email.trim() != ''){
                $("#text_email").remove();
            }
            if(mandatory > name.trim().length || mandatory > email.trim().length || mandatory > checkedcount1 || mandatory > checkedcount2){
                if(name.trim() == ''){
                    $(".name").html('<p id="text_name" style="color:red;font: normal normal normal 30px/53px Segoe UI;">Please enter name</p>');
                }
                if(email.trim() == ''){
                    $(".email").html('<p id="text_email" style="color:red;font: normal normal normal 30px/53px Segoe UI;">Please enter email</p>');
                }
                if($("#checkbox1").is(":checked")){
                    checkedcount1 = 1;
                    $("#pc1").remove();
                }else{
                    $(".checkbox1").html('<p id="pc1" style="color:red;font: normal normal normal 30px/53px Segoe UI;">Mandatory to Check</p>');
                }
                if($("#checkbox2").is(":checked")){
                    checkedcount2 = 1;
                    $("#pc2").remove();
                }else{
                    $(".checkbox2").html('<p id="pc2" style="color:red;font: normal normal normal 30px/53px Segoe UI;">Mandatory to Check</p>');
                }
                alert('This Question is Mandatory :- "{{$ques->question}}"')
                check = false;
            }
            if(check == false){
                return false;
            }
        });
    });
</script>
@endpush