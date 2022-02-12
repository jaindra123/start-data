@php
    $lang = getAllLanguage();
@endphp
<div class="question-box">
    <h5>{{$ques->question}}</h5>
    <div class="row">
        <input type="hidden" id="mandatory_{{$ques->id}}" value="{{$ques->mandatory}}">
        <div class="row mt-4">
            @foreach($ques->option as $opt)
            <div class="col-md-12">
                <div class="form-groupdd">
                    <input type="checkbox" class="ans_{{$ques->id}}" id="ans_{{$opt->id}}" name="{{$ques->id}}[]" value="{{$opt->option}}" />
                    <label for="ans_{{$opt->id}}">{{$opt->option}}</label>
                </div>
            </div>
            @endforeach
            <div class="col-md-12">
                <div class="form-groupdd">
                    <input type="checkbox" id="ans_">
                    <select class="form-control p-3 mb-3" for="ans_" name="{{$ques->id}}[]" id="lang">
                    <option value="0">Select</option>
                    @php
                        foreach($lang as $lan){
                            @endphp
                                <option value="{{$lan->id}}">{{$lan->language}}</option>
                            @php        
                        }
                    @endphp
                    </select>
                </div>
            </div>
        </div>
    </div>
</div>

@push('js-script')
<script type="text/javascript">
    $(document).ready(function(){
        var mandatory = $("#mandatory_{{$ques->id}}").val();
        alert(mandatory);
    });
</script>
@endpush
