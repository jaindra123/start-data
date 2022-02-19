<div class="question-box">
    <h5>{{$ques->question}}</h5>
    <div class="row">
        <input type="hidden" id="mandatory_{{$ques->id}}" value="{{$ques->mandatory}}">
        <input type="hidden" id="max_ans_size_{{$ques->id}}" value="{{$ques->max_ans_size}}">
        @foreach($ques->option as $opt)
        <div class="col-md-3">
            <label for="{{$opt->id}}" class="img-33">
                <input type="checkbox" class="ans_{{$ques->id}}" id="{{$opt->id}}" name="{{$ques->id}}[]" value="{{$opt->id}}">
                <div class="checfrs">
                    <img src="https://picsum.photos/200" width="200">
                    <span class="img-chschs">{{$opt->picture_name}}</span>
                </div>
            </label>
        </div>
        @endforeach
        <div class="picdiv"></div>
    </div>
</div>
@push('js-script')
<script type="text/javascript">
    $(document).ready(function(){
        var picture = [];
        var picCount = 0;
        var mandatory = $("#mandatory_{{$ques->id}}").val();
        var max_ans_size = $("#max_ans_size_{{$ques->id}}").val();
        $(".ans_{{$ques->id}}").on('click',function(){
            if($(this).is(":checked")){
                $(this).each(function() {
                    picture.push($(this).attr('id')); 
                });
            }else{
                $(this).each(function() {
                    picture.pop($(this).attr('id')); 
                });
            }
            picCount = picture.length;
        });
        $("#submit").on('click',function(){
            if($('input[type="checkbox"]').is(":checked")){
                $("#checkbox_{{$ques->id}}").remove();
            }else{
                $(".picdiv").append('<input type="hidden" id="checkbox_{{$ques->id}}" name="{{$ques->id}}[]" value="skiped">');
            }

            if(mandatory > picCount){
                alert('This Question is Mandatory :- "{{$ques->question}}"')
                return false;
            }

            if(max_ans_size > picCount){
                alert('Please marked minimum '+max_ans_size+' options in "{{$ques->question}}"')
                return false;
            }
        });
    });
</script>
@endpush