<div class="question-box">
    <h5>{{$ques->question}}</h5>
    <small>{{$ques->scale_discription}}</small>
    <div class="row">
        <input type="hidden" id="mandatory_{{$ques->id}}" value="{{$ques->mandatory}}">
        <input type="hidden" id="radio_{{$ques->id}}" name="{{$ques->id}}[]" value="skiped">
        <div class="col-md-4"></div>
        @php
            $count = 0;

            if($ques->max_ans_size == 5)
                $md = 3;
            elseif($ques->max_ans_size == 6)
                $md = 4;
            elseif($ques->max_ans_size == 7)
                $md = 4;
            elseif($ques->max_ans_size == 8)
                $md = 5;
            elseif($ques->max_ans_size == 9)
                $md = 6;
            elseif($ques->max_ans_size == 10)
                $md = 6;
            elseif($ques->max_ans_size == 11)
                $md = 7;
            elseif($ques->max_ans_size == 12)
                $md = 7;
            else
                $md = 3;
        @endphp
        <div class="col-md-{{$md}}">
            <span class="mr-5 pr-5 mb-3 text-left"><b>{{$ques->option[0]->option}}</b></span>
            <span class="ml-5 mb-3 pl-3 text-right" style="position: absolute; right: 0;"><b>{{$ques->option[1]->option}}</b></span>
        </div>
    </div>
    <div class="row">
        @foreach($ques->option as $value)
            @if($value->axis == 'y')
            @php $count++; @endphp
                <div class="col-md-4">
                    <label class="radio-label  mt-3">{{$value->option}}</label>
                </div>
                <div class="col-md-8">
                    <div class="greatForm mt-3">
                        @for($i = 1; $i <= $ques->max_ans_size; $i++)
                            <input type="radio" class="matrix_check_{{$ques->id}} matrix_ck_{{$ques->id}} {{$value->option}}_{{$ques->id}}" name="{{$value->option}}_matrix_{{$ques->id}}[]" id="{{$value->option}}_check_{{$i}}" rowid="{{$value->option}}_{{$ques->id}}" value="{{$i}}" />
                            <label for="{{$value->option}}_check_{{$i}}">{{$i}}</label>
                        @endfor
                    </div>
                </div>
            @endif
        @endforeach
    </div>
    <div class="row">
        <div class="col-md-7"></div>
        @if($ques->open_text_field_ans == 0)
        <div class="col-md-4">
            <div class="form-groupdd text-right">
                <input type="checkbox" class="matrix_check_{{$ques->id}}" name="{{$ques->id}}[]" id="checkbox_{{$ques->id}}" value="checked">
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
        var myArray = [];
        var count = 0;
        var mandatory = $("#mandatory_{{$ques->id}}").val();
        $(".matrix_check_{{$ques->id}}").on('click',function(){
            if($(this).is(":checked")){
                checkedcount = 1;
                $("#radio_{{$ques->id}}").remove();
            }else{
                checkedcount = 0;
            }
        });

        @foreach($ques->option as $value)
        $(".{{$value->option}}_{{$ques->id}}").on('click',function(){
            $(this).each(function() {
                myArray.push($(this).attr('rowid')); 
            });
            
            var unique = myArray.filter(function(itm, i, myArray) {
                return i == myArray.indexOf(itm);
            });

            count = unique.length;
        });
        @endforeach

        $("#submit").on('click',function(){
            var check = true;
            if($('.matrix_check_{{$ques->id}}').is(":checked")){
                $("#radio_{{$ques->id}}").remove();
            }

            if($('.matrix_ck_{{$ques->id}}').is(":checked")){
                $("#checkbox_{{$ques->id}}").remove();
            }

            if(mandatory > checkedcount){
                alert('This Question is Mandatory :- "{{$ques->question}}"');
                check = false;
            }

            if(mandatory > 0){
                if(count < {{$count}}){
                    alert('This Mandatory to select all option');
                    check = false;
                }
            }
            
            if($("#checkbox_{{$ques->id}}").is(":checked")){
                checkedcount = 0;
            }

            if(checkedcount == 1){
                if(count < {{$count}}){
                    alert('This Mandatory to select all option');
                    check = false;
                }
            }

            if(check == false){
                return false;
            }
        });
    });
</script>
@endpush