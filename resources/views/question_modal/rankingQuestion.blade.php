<div class="question-box">
    <h5>{{$ques->question}} {{$ques->max_ans_size}}</h5>
    <div class="row">
        <input type="hidden" id="mandatory_{{$ques->id}}" value="{{$ques->mandatory}}">
        <div class="rows mt-4">
            <div class="column rankdiv">
                <ul id="sortable1" class="connectedSortable connected-sortable droppable-area1">
                    <li class="draggable-item"></li>
                    @php $op = 0; @endphp
                    @foreach($ques->option as $opt)
                    @php if($ques->max_ans_size > $op) $op++; @endphp
                        <li class="draggable-item">
                            <div class="button-group-pills text-center" data-toggle="buttons">
                                <label class="btn btn-default">
                                    <input type="checkbox" class="ans_{{$ques->id}}" value="" optionValue="" id="{{$opt->id}}" name="{{$ques->id}}[]">
                                    <div id="{{$opt->id}}_set"></div>
                                </label>{{$opt->option}}
                            </div>
                        </li>
                    @endforeach
                    <li class="draggable-item"></li>
                </ul>
            </div>

            <div class="column">
                <ul id="sortable2" class="connectedSortable connected-sortable droppable-area2">
                    <li class="draggable-item"></li>
                    <li class="draggable-item"></li>
                </ul>
            </div>

        </div>
    </div>
</div>
@push('js-script')
<script type="text/javascript">
    $(document).ready(function(){
        var rank = 0;
        var ar = [];
        var minValue = 0;
        var getValue = 0;
        var index = 0;
        var options = {{$op}};
        for(i = 1; i <= options; i++){
            ar.push(i);
        }
        console.log(ar);
        var mandatory = $("#mandatory_{{$ques->id}}").val();
        
        $(".ans_{{$ques->id}}").on('click',function(){
            if($(this).is(":checked")){
                // alert(ar.length);
                if(ar.length == 0){
                    rowid = $(this).attr('id');
                    $("#"+rowid).prop("checked", false);
                    alert('You can only rank :- '+options+' values.');
                }else{
                    rank++;
                    rowid = $(this).attr('id');
                    minValue = Math.min.apply(Math,ar);
                    index = ar.indexOf(minValue);
                    ar.splice(index, 1);
                    $("#"+rowid+"_set").html('<div id="'+rowid+'_set">'+minValue+'</div>');
                    $("#"+rowid).val(rowid+'-'+minValue);
                    $("#"+rowid).attr("optionValue", minValue);
                }
                console.log(ar);
            }else{
                rowid = $(this).attr('id');
                // getValue = $("#"+rowid).val();
                getValue = $("#"+rowid).attr("optionValue");
                if(getValue != ''){
                    rank--;
                    ar.push(parseInt(getValue));
                    $("#"+rowid+"_set").html('<div id="'+rowid+'_set"></div>');
                    $("#"+rowid).val('');
                    $("#"+rowid).attr("optionValue", '');
                }
                console.log(ar);
            }
        });

        $("#submit").on('click',function(){
            if($('input[type="checkbox"]').is(":checked")){
                $("#checkbox_{{$ques->id}}").remove();
            }else{
                $(".rankdiv").append('<input type="hidden" id="checkbox_{{$ques->id}}" name="{{$ques->id}}[]" value="skiped">');
            }

            if(mandatory > rank){
                alert('This Question is Mandatory :- "{{$ques->question}}"');
                return false;
            }
        });
        /*
            $( "#sortable1, #sortable2" ).sortable({
                connectWith: ".connectedSortable"
            }).disableSelection();*/

    });
</script>
<script>
    $( init );
    function init() {
      $( ".droppable-area1, .droppable-area2" ).sortable({
          connectWith: ".connected-sortable",
          stack: '.connected-sortable ul'
        }).disableSelection();
    }
  </script>
@endpush
