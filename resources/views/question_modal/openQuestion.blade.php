<div class="question-box">
    <h5>{{$ques->question}}</h5>
    <div class="row">
        <div class="col-md-12">
            <input type="hidden" id="mandatory_{{$ques->id}}" value="{{$ques->mandatory}}">
            <input type="hidden" id="opentext" name="{{$ques->id}}[]" value="skiped">
            <textarea type="text" class="p-3 form-control has-search mb-2 d-inline-block" name="{{$ques->id}}[]" rows="{{$ques->max_ans_size}}" placeholder="" id="poster"></textarea>
        </div>
    </div>
</div>
@push('js-script')
<script type="text/javascript">
    $(document).ready(function(){
        var mandatory = $("#mandatory_{{$ques->id}}").val();
        $("#submit").on('click',function(){
            var txt = $('#poster').val();
            if(txt.trim().length > 0){
                $("#opentext").remove();
            }
            if(mandatory > txt.length){
                alert('This Question is Mandatory :- "{{$ques->question}}"')
                return false;
            }
        });
    });
</script>
@endpush