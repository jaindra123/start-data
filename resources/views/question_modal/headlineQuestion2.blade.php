
    <h4 style="color: white; background-color: #7b7b7b; padding-left: 48px;"><b>{{$ques->question}}</b></h4>

@push('js-script')
<script type="text/javascript">/*
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
    });*/
</script>
@endpush