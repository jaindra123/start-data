<div class="question-box">
    <h5>{{$ques->question}}</h5>
    <div class="row">
        <div class="col-md-6">
            <input type="hidden" id="mandatory_{{$ques->id}}" value="{{$ques->mandatory}}">
            @foreach($ques->option as $opt)
            <div class="radio">
                <input type="radio" class="ans_{{$ques->id}}" id="ans_{{$opt->id}}" name="{{$ques->id}}[]" value="{{$opt->option}}">
                <label for="ans_{{$opt->id}}" class="radio-label">{{$opt->option}}</label>
            </div>
            @endforeach
        </div>
    </div>
    @if($ques->open_ans == 1)
    <div class="row">
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
        $(".ans_{{$ques->id}}").on('click',function(){
            if($(this).is(":checked")){
                checkedcount = 1;
            }
        });

        $("#submit").on('click',function(){
            if(mandatory > checkedcount){
                alert('This Question is Mandatory :- "{{$ques->question}}"')
                return false;
            }
        });
    });
</script>
@endpush