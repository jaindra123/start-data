
<div class="question-box">
    <h5>{{$ques->question}}</h5>
    <small>{{$ques->scale_discription}}</small>
    <div class="row">
        <input type="hidden" id="mandatory_{{$ques->id}}" value="{{$ques->mandatory}}">
        <input type="hidden" id="radio_{{$ques->id}}" name="{{$ques->id}}[]" value="skiped">
        <div class="col-md-3">
            <label class="radio-label d-block text-right  mt-3">{{$ques->option[0]->option}}</label>
        </div>
        <div class="col-md-4">
            <div class="greatForm mt-3">
                @for($i = 1; $i <= $ques->max_ans_size; $i++)
                    <input type="radio" class="check_{{$ques->id}} ck_{{$ques->id}}" name="{{$ques->id}}[]" id="check_{{$i}}" value="{{$i}}" />
                    <label for="check_{{$i}}">{{$i}}</label>
                @endfor
            </div>
        </div>
        <div class="col-md-3">
            <label class="radio-label text-right  mt-3">{{$ques->option[1]->option}}</label>
        </div>
    </div>
    <div class="row mt-4">
        <div class="col-md-6"></div>
        @if($ques->open_text_field_ans == 0)
        <div class="col-md-4">
            <div class="form-groupdd text-right">
                <input type="checkbox" class="check_{{$ques->id}}" name="{{$ques->id}}[]" id="checkbox_{{$ques->id}}" value="checked">
                <label for="checkbox_{{$ques->id}}">No Answer</label>
            </div>
        </div>
        @endif
    </div>
</div>

@push('js-script')
<script type="text/javascript">
    $(document).ready(function(){
        var checkedcount = 0;
        var mandatory = $("#mandatory_{{$ques->id}}").val();
        $(".check_{{$ques->id}}").on('click',function(){
            if($(this).is(":checked")){
                checkedcount = 1;
                $("#radio_{{$ques->id}}").remove();
            }else{
                checkedcount = 0;
            }
        });
        $("#submit").on('click',function(){
            var check = true;
            if($('.check_{{$ques->id}}').is(":checked")){
                $("#radio_{{$ques->id}}").remove();
            }
            if($('.ck_{{$ques->id}}').is(":checked")){
                $("#checkbox_{{$ques->id}}").remove();
            }
            if(mandatory > checkedcount){
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