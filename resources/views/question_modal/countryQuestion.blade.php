@php
    $countries = getAllCountry();
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
            <div class="countrydiv"></div>
            <div class="col-md-12">
                <div class="form-groupdd">
                    <!-- <input type="checkbox" id="ans_"> -->
                    <select class="form-control p-3 mb-3" for="ans_" name="{{$ques->id}}[]" id="{{$ques->id}}">
                    <option value="">Select</option>
                    @php
                        foreach($countries as $country){
                            @endphp
                                <option value="{{$country->country}}">{{$country->country}}</option>
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
        var country = [];
        var countrycheckedcount = 0;
        var dropcountry = '';
        var mandatory = $("#mandatory_{{$ques->id}}").val();
        // alert(mandatory);
        $("#{{$ques->id}}").on('change',function(){
            dropcountry = $(this).val();
        });

        $(".ans_{{$ques->id}}").on('click',function(){
            if($(this).is(":checked")){
                $(this).each(function() {
                    country.push($(this).attr('id')); 
                });
            }else{
                $(this).each(function() {
                    country.pop($(this).attr('id')); 
                });
            }
            countrycheckedcount = country.length;
        });

        $("#submit").on('click',function(){
            if($('input[type="checkbox"]').is(":checked")){
                $("#checkbox_{{$ques->id}}").remove();
            } else if(dropcountry.length){
                $("#checkbox_{{$ques->id}}").remove();
            } else{
                $(".countrydiv").append('<input type="hidden" id="checkbox_{{$ques->id}}" name="{{$ques->id}}[]" value="skiped">');
            }

            if(mandatory > countrycheckedcount && mandatory > dropcountry.length){
                alert('This Question is Mandatory :- "{{$ques->question}}"')
                return false;
            }
        });
    });
</script>
@endpush
