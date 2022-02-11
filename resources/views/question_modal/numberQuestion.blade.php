<div class="question-box">
    <h5>{{$ques->question}}</h5>
    <form name="calc" class="clacdd">
        <div class="row code-post">
            <div class="col-md-2"></div>
            <div class="col-md-4">
                <div class="tcdeew" style="width:250px;">
                    <input class="number-question" type="button" name="one" value="1">
                    <input class="number-question" type="button" name="two" value="2">
                    <input class="number-question" type="button" name="three" value="3">
                    <span class="d-block w-100"></span>
                    <input class="number-question" type="button" name="four" value="4">
                    <input class="number-question" type="button" name="five" value="5">
                    <input class="number-question" type="button" name="six" value="6">
                    <span class="d-block w-100"></span>
                    <input class="number-question" type="button" name="seven" value="7">
                    <input class="number-question" type="button" name="eight" value="8">
                    <input class="number-question" type="button" name="nine" value="9">
                    <span class="d-block w-100"></span>
                    <input class="number-question" type="button" name="zero" value="0" style="margin-left: 76px;">
                </div>
            </div>
            <div class="col-md-4">
                <div class="cost-post mt-4">
                    <input type="text" class="mb-4" id="answer" name="number_question">
                    <input type="button" id="clear" name="clear" value="  Delete  ">
                </div>
            </div>
            <div class="col-md-2"></div>
        </div>
    </form>
</div>

@push('js-script')
<script type="text/javascript">
    $(document).ready(function(){
        var text_length = {{$ques->max_ans_size}};
        var nq_array = [];
        $(".number-question").on("click",function(){
            var number = $(this).val();
            if(text_length > nq_array.length){
                $(this).each(function() {
                    nq_array.push($(this).val());
                    $("#answer").val(function() {
                        return this.value + number;
                    });
                });
                console.log(nq_array);
            }
        });
        $("#clear").on("click",function(){
            $("#answer").val('');
            nq_array = [];
        });
    });
</script>
@endpush