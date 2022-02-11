<div class="row" style="padding-left: 67px;">
    <div class="row mt-4">
        <div class="col-md-12">
            <input type="hidden" id="mandatory_{{$ques->id}}" value="{{$ques->mandatory}}">
            <div class="form-groupdd">
                <input type="checkbox" id="checkbox1" name="{{$ques->id}}[]" value="checked">
                <label for="checkbox1">{{$ques->question}}</label>
                <div class="checkbox1"></div>
            </div>
            @if($ques->mandatory == 0)
                <input type="hidden" id="checkbox1" name="{{$ques->id}}[]" value="skiped">
            @endif
        </div>
    </div>
</div>
@push('js-script')
<script type="text/javascript">
    $(document).ready(function(){
        var checkedcount1 = 0;
        var mandatory = $("#mandatory_{{$ques->id}}").val();
        $(document).on('click',function(){
            if($("#checkbox1").is(":checked")){
                checkedcount1 = 1;
                $("#pc1").remove();
            }else{
                checkedcount1 = 0;
            }
        });
        $("#submit").on('click',function(){
            var check = true;
            if(mandatory > checkedcount1){
                if($("#checkbox1").is(":checked")){
                    checkedcount1 = 1;
                    $("#pc1").remove();
                }else{
                    $(".checkbox1").html('<p id="pc1" style="color:red;font: normal normal normal 30px/53px Segoe UI;">Mandatory to Check</p>');
                }
                alert('This Mandatory to check :- "{{$ques->question}}"')
                check = false;
            }
            if(check == false){
                return false;
            }
        });
    });
</script>
@endpush