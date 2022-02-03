$(function(){

    let questionairId = $("#questionairId").val();
    let pageNumber = $("#pageNumber").val();
    let foldername = "/start-data/";


    var language = [];
    $.each($(".language").prop("selectedIndex", 0), function(){
        language.push($(this).val()); 
    });
    
    // alert(language)
    /** Add questionType */


    // $('.addNewQuestionType').on('click', function(){
    //     $('#questionType').modal('show');
    // });


    $('#save_quesType').on('click', function(){
        $('#questionType').modal('hide');
        $('show_question_type')

        var selectedQuesTypeId = $("#quesTypeSelect").val();

        $.ajaxSetup({   
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
       
        $.ajax({
            type:"POST",
            url: window.location.origin+foldername+"store-question/"+questionairId+"/"+pageNumber,
            dataType: 'json',
            data: {
                questionTypeId : selectedQuesTypeId
            },
          
            success: function(response){
                if(response.success == true){
                    // alert(  )
                    location.reload();
                }
            }
        });
    });

    $('.questionTypeTitle').on('click', function(){
        var questypeId = $(this).data('value');

        // alert(questypeId)
        $.ajaxSetup({   
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
       
        $.ajax({
            type:"POST",
            url: window.location.origin+foldername+"store-question/"+questionairId+"/"+pageNumber,
            dataType: 'json',
            data: {
                questionTypeId : questypeId
            },
          
            success: function(response){
                if(response.success == true){
                    // alert(  )
                    // location.reload();
                    $('.questionTypeEditPannel'+questypeId).css({'display':''})
                }
            }
        });
    });

    /** check start enable and disable */
    $('.fa-star').on('click', function(){
        var startData = $(this).data('value');
        if($('.startCheck'+startData).hasClass('color-dd')){
            $('.startCheck'+startData).removeClass('color-dd');
            $('.startCheck'+startData).css({'text-align':'right','width':'16%','font-size':'20px'});
            $('.startCheckValue'+startData).val(0);
        }else{
            $('.startCheck'+startData).addClass('color-dd');
            $('.startCheckValue'+startData).val(1);
        }
    });

    $('.personalQuestion').on('change', function(){
        var mainValue = $(this).data('index');
        var personalQuestion = 0;
        if($('.p'+mainValue).is(':checked')){

            personalQuestion = 1;
            $('.personalQuestionTitle'+mainValue).css({'display':''});
            personalQuestionTitle = $('.personalQuestionData'+mainValue).val();
        } else{
            personalQuestion = 0;
            $('.personalQuestionTitle'+mainValue).css({'display':'none'})
        }
    });

    /** Change Language */

    $('.language').on('click', function(e){
        e.preventDefault();
        e.stopPropagation();
        lngId = $(this).data('index');
        $('.editPannel').css({'display':'none'})
        $('#question_'+lngId).css({'display':''})
    });

    $('.saveQuestion').on('click', function(e){
        var questionairTypeId =  $(this).data('value');
        var questionTypeId =  $(this).data('index');

        var personalQuestionTitle = '';

        var mandatory = 0, personalQuestion_ = 0;

        if($('.p'+questionairTypeId+questionTypeId).is(':checked')){

            personalQuestionTitle = $('.personalQuestionData'+questionairTypeId+questionTypeId).val();
            personalQuestion_ =1;
        } 

        var answerSize = $('.answerSize'+questionairTypeId+questionTypeId).val();
      
        var ques_name =[];
        var display_text = [];
        var star_value = [];

        $.each(language, function(index, value){
            ques_name.push($('.quesName'+questionairTypeId+value).val())
            display_text.push($('.displayText'+questionairTypeId+value).val())
            star_value.push($('.startCheckValue'+questionairTypeId+value).val())
        });

        console.log('mandatory= ',mandatory)
        console.log('answerSize= ',answerSize)
        // console.log('personalQuestion= ',personalQuestion)
        // alert(ques_name)
        // alert(display_text)
        // alert(star_value)
        var questionsData = {
            'questionair_type_id'   :       questionairTypeId,
            'page_id'               :       pageNumber,
            'question'              :       ques_name,
            'language_id'           :       language,
            'std_qns'               :       star_value,
            'mandatory'             :       mandatory,
            'max_ans_size'          :       answerSize,
            'personal_question'     :       personalQuestion_,
            'display_texts'         :       display_text,
            'personalQuestionTitle' :       personalQuestionTitle,
        }

        $.ajaxSetup({   
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
       
        $.ajax({
            type:"POST",
            url: window.location.origin+foldername+"store-question-details/"+questionairTypeId+"/"+pageNumber,
            dataType: 'json',
            data: {
                questionData : questionsData
            },
          
            success: function(response){
                console.log("under js",response);
                console.log(typeof(response))
                if((response.error)){
                    console.log(response.error)
                    alert(response.error);

                }
                if(response.success == true){
                    alert(response.message)
                    location.reload();

                }
                // if(response.success == true){
                //     // alert(  )
                //     // location.reload();
                //     $('.questionTypeEditPannel'+questypeId).css({'display':''})
                // }
            }
        });
    });

});