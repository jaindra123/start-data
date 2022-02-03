<div class="question-box">
    <h5>{{$key+1}}. {{$ques->question}}</h5>
    <div class="row">
        <div class="col-md-6 mcqdiv">
            <input type="hidden" id="mandatory_{{$ques->id}}" value="{{$ques->mandatory}}">
            <input type="hidden" id="max_ans_size_{{$ques->id}}" value="{{$ques->max_ans_size}}">
            @foreach($ques->option as $opt)
            <div class="form-groupdd">
                <input type="checkbox" class="ans_{{$ques->id}}" id="ans_{{$opt->id}}" name="{{$ques->id}}[]" value="{{$opt->option}}" />
                <label for="ans_{{$opt->id}}">{{$opt->option}}</label>
            </div>
            @endforeach
            {{--<div class="form-groupdd">
                <input type="checkbox" id="other{{$ques->id}}" name="other_{{$ques->id}}">
                <label for="Other">Other</label>
            </div>--}}
        </div>
    </div>
    @if($ques->open_text_field_ans == 1)
    <div class="row" id="text_field_show{{$ques->id}}">
        <div class="col-md-5">
            <input type="text" class="p-3 form-control has-search mb-2 d-inline-block" name="input_{{$ques->id}}" placeholder="" id="Poster">
        </div>
    </div>
    @endif
</div>
@push('js-script')
<script type="text/javascript">
    $(document).ready(function(){
        var checkedcount = 0;
        var mandatory = $("#mandatory_{{$ques->id}}").val();
        var max_ans_size = $("#max_ans_size_{{$ques->id}}").val();
        $(".ans_{{$ques->id}}").on('click',function(){
            if($(this).is(":checked")){
                checkedcount++;
            }
            else{
                checkedcount--;
            }
        });

        $("#submit").on('click',function(){
            if($('input[type="checkbox"]').is(":checked")){
                $("#checkbox_{{$ques->id}}").remove();
            }else{
                $(".mcqdiv").append('<input type="hidden" id="checkbox_{{$ques->id}}" name="{{$ques->id}}[]" value="skiped">');
            }
            if(mandatory > checkedcount){
                alert('This Question is Mandatory :- "{{$ques->question}}"')
                return false;
            }
            if(max_ans_size > checkedcount){
                alert('Please marked minimum '+max_ans_size+' options in "{{$ques->question}}"')
                return false;
            }
        });

        // $("#other{{$ques->id}}").on('click',function(){
        //     if($('input[type="checkbox"]').is(":checked")){
        //         $("#text_field_show{{$ques->id}}").attr('style','display:block');
        //     }
        //     else{
        //         $("#text_field_show{{$ques->id}}").attr('style','display:none');
        //     }
        // });
    });
</script>
@endpush