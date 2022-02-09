<div class="question-box">
    <h5>{{$ques->question}}</h5>
    <form name="calc" class="clacdd">
        <div class="row code-post">
            <div class="col-md-2"></div>
            <div class="col-md-4">
                <div class="tcdeew" style="width:250px;">
                    <input class="number-question" type="button" name="one" value="1" onclick="input.value += '1'">
                    <input class="number-question" type="button" name="two" value="2" onclick="input.value += '2'">
                    <input class="number-question" type="button" name="three" value="3" onclick="input.value += '3'">
                    <span class="d-block w-100"></span>
                    <input class="number-question" type="button" name="four" value="4" onclick="input.value += '4'">
                    <input class="number-question" type="button" name="five" value="5" onclick="input.value += '5'">
                    <input class="number-question" type="button" name="six" value="6" onclick="input.value += '6'">
                    <span class="d-block w-100"></span>
                    <input class="number-question" type="button" name="seven" value="7" onclick="input.value += '7'">
                    <input class="number-question" type="button" name="eight" value="8" onclick="input.value += '8'">
                    <input class="number-question" type="button" name="nine" value="9" onclick="input.value += '9'">
                    <span class="d-block w-100"></span>
                    <input class="number-question" type="button" name="zero" value="0" onclick="input.value += '0'" style="margin-left: 76px;">
                </div>
            </div>
            <div class="col-md-4">
                <div class="cost-post mt-4">
                    <input type="text" name="input" class="mb-4" maxlength="{{$ques->max_ans_size}}" id="answer">

                    <input type="button" id="clear" name="clear" value="  Delete  " onclick="input.value = ''">
                </div>
            </div>
            <div class="col-md-2"></div>
        </div>
    </form>
</div>

@push('js-script')
<script type="text/javascript">
    $(document).ready(function(){
        $(".number-question").on("click",function(){
            alert($(this).val());
        });
    });
</script>
@endpush