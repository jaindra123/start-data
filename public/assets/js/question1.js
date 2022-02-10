$(function(){

    let questionairId = $("#questionairId").val();
    let pageNumber = $("#pageNumber").val();
    let foldername = "/start-data/";


/**  --------------------------------------------------------Question Type JS --------------------------------------------------------- */
    /** Changes According Select Option */
    $('.language').on('change', function(){
        var languageId = $(this).data('index');
        var questiontypeId = $(this).data('quest');
        var questionairTypeId = $(this).data('v');
        var selectedData =  $('.lang_'+questionairTypeId+questiontypeId+languageId +' option:selected').val();

        if(selectedData == 'delete'){
            $('.lang_'+questionairTypeId+questiontypeId+languageId).remove();
            $('#question_'+questiontypeId+languageId).remove();
        }
    });


    /** Get Editing Panel According Question Type */
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

    /** Load Question According Question Type */
    $('.questionTypeTitle').on('click', function(){
        var questypeId = $(this).data('value');
        var title = $(this).data('main_value');

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
                console.log('all response', response);
                console.log('response data',response.data);
                if(response.success == true){
                    $('.questionTypeEditPannel'+questypeId).css({'display':''})
                    $('.load_question').css({'display':''});
                    $('.search-display').css({'display':''});
                    var html = '';
                    $.each(response.data, function(index, value){
                        html +=  "<tr>"+
                                    "<td class='ques_title' data-quesid="+value.questionId+" data-index='"+value.questionairTypeId+value.quesTypeId+"' data-title='"+value.questionName+"' >"+value.questionName+"</td>"+
                                    "<td>"+title+" </td>"+
                                    "<td>"+value.languageCount+"</td>"+
                                    "<td>0</td>"+
                                "</tr>";
                    })
                  
                    $('.load_question_data').append(html);
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

    /** Personal Question Toggle Changes */
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
        var lngId = $(this).data('index');
        var questionTypeId = $(this).data('quest');
        // alert(questionTypeId);
        $('.editPannel').css({'display':'none'})
        $('.editPannel1').css({'display':'none'})
        $('.editPannel2').css({'display':'none'})
        $('.editPannel3').css({'display':'none'})
        $('#question_'+questionTypeId+lngId).css({'display':''})
    });

    /** Save Questions */
    $('.saveQuestion').on('click', function(e){
        var questionairTypeId =  $(this).data('value');
        var questionTypeId =  $(this).data('index');
        // alert(questionairTypeId);
        // return; 
        // var selectedLang = $('.lang_').val();
        var personalQuestionTitle = '';

        var mandatory = 0, personalQuestion_ = 0, unit = 0;

        if($('.mandatory'+questionairTypeId+questionTypeId).is(':checked')){

            mandatory =1;
        } 

        if(questionTypeId == 7){
            unit = $('.unit'+questionairTypeId+questionTypeId).val();
        }

        var language = [];
        $.each($(".l_"+questionTypeId+ " option:nth-child(1)"), function(){
            language.push($(this).val()); 
        });

        if($('.p'+questionairTypeId+questionTypeId).is(':checked')){

            personalQuestionTitle = $('.personalQuestionData'+questionairTypeId+questionTypeId).val();
            personalQuestion_ = 1;
        } 

        var answerSize = 0;
        if( $('.answerSize'+questionairTypeId+questionTypeId).val() != undefined){
            answerSize = $('.answerSize'+questionairTypeId+questionTypeId).val();
        }
      
        var ques_name =[];
        var display_text = [];
        var selectedlanguage = [];
        var star_value = [];

        $.each(language, function(index, value){
            ques_name.push($('.quesName'+questionairTypeId+questionTypeId+value).val())
            display_text.push($('.displayText'+questionairTypeId+questionTypeId+value).val())
            star_value.push($('.startCheckValue'+questionairTypeId+questionTypeId+value).val())
            selectedlanguage.push($('.lang_'+questionairTypeId+questionTypeId+value).val())
        });
    
        // console.log(selectedlanguage);
        // // alert(language);
        // return;


        var questionsData = {
            'questionair_type_id'   :       questionairTypeId,
            'page_id'               :       pageNumber,
            'question'              :       ques_name,
            'language_id'           :       language,
            'unit'                  :       unit,
            'std_qns'               :       star_value,
            'mandatory'             :       mandatory,
            'max_ans_size'          :       answerSize,
            'personal_question'     :       personalQuestion_,
            'display_texts'         :       display_text,
            'personalQuestionTitle' :       personalQuestionTitle,
            'selectedStatusOfLang'  :       selectedlanguage,
        }

        console.log(questionsData);
        // return;

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
            }
        });
    });



    $('body').on('click','.ques_title', function(){
        // alert('hello')
        var quesType = $(this).data('index');
        var quesTitle = $(this).data('title');
        var quesId = $(this).data('quesid');
        $.ajax({
            type:"GET",
            url: window.location.origin+foldername+"get-questions",
            dataType: 'json',
            data: {
                quesId : quesId
            },
            success:function(response){
                $.each(response, function(index, value) {
                    $('.quesName'+value.questionairTypeId+value.quesTypeId+value.languageId).val(value.questionName);
                    console.log('.quesName'+value.questionairTypeId+value.quesTypeId+value.languageId)
                    $('.startCheck'+value.questionairTypeId+value.quesTypeId+value.languageId).val(value.stdAns);
                    if(value.stdAns == 0){
                        $('.startCheck'+value.questionairTypeId+value.quesTypeId+value.languageId).removeClass('color-dd');
                        $('.startCheck'+value.questionairTypeId+value.quesTypeId+value.languageId).css({'text-align':'right','width':'16%','font-size':'20px'});
                    }
                    $('.displayText'+value.questionairTypeId+value.quesTypeId+value.languageId).val(value.displayText)
                });
            },

        });
       
    });


    /** --------------------------------------------------------- Other Question Type JS --------------------------------------------------- */
    $('.language1').on('click', function(e){
        e.preventDefault();
        e.stopPropagation();
        var lngId = $(this).data('index');
        var questionTypeId = $(this).data('quest');
        var i = $(this).data('i');
        // alert(questionTypeId);
        $('.editPannel'+i).css({'display':'none'})
        $('#question_'+questionTypeId+i+lngId).css({'display':''})
    });


     /** Changes According Select Option   for Other Question Type*/
     $('.language1').on('change', function(){
        var languageId = $(this).data('index');
        var i = $(this).data('i');
        var questiontypeId = $(this).data('quest');
        var questionairTypeId = $(this).data('v');

        var selectedData =  $('.lang1_'+questionairTypeId+questiontypeId+i+languageId +' option:selected').val();

        if(selectedData == 'delete'){
            $('.lang1_'+questionairTypeId+questiontypeId+i+languageId).remove();
            $('#question_'+questiontypeId+i+languageId).remove();
        }
    });

      /** Save Questions for Other Question Type */
    $('.saveQuestion1').on('click', function(e){
        var questionairTypeId =  $(this).data('value');
        var questionTypeId =  $(this).data('index');
        var i = $(this).data('i');
        var mandatory = 0;

        if(i == 1){
            if($('.mandatory'+questionairTypeId+questionTypeId).is(':checked')){
                mandatory =1;
            }
        } 

        var language = [];
        $.each($(".l_"+questionTypeId+i+ " option:nth-child(1)"), function(){
            language.push($(this).val()); 
        });
        // console.log(language);
        // return;
        
      
        var ques_name =[];
        // var display_text = [];
        // var star_value = [];
        var selectedlanguage = [];

        $.each(language, function(index, value){
            ques_name.push($('.quesName'+questionairTypeId+questionTypeId+i+value).val())
            // display_text.push($('.displayText'+questionairTypeId+questionTypeId+value).val())
            // star_value.push($('.startCheckValue'+questionairTypeId+questionTypeId+value).val())
            selectedlanguage.push($('.lang1_'+questionairTypeId+questionTypeId+i+value).val())
        });
    
        console.log('ques= ',ques_name);
        console.log('Slang= ',selectedlanguage);
    
        var questionsData = {
            'questionair_type_id'   :       questionairTypeId,
            'page_id'               :       pageNumber,
            'question'              :       ques_name,
            'language_id'           :       language,
            'questionTypeForOther'  :       i,
            'mandatory'             :       mandatory,
            'selectedStatusOfLang'  :       selectedlanguage,
        }

        console.log(questionsData);
        // return;

        $.ajaxSetup({   
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
       
        $.ajax({
            type:"GET",
            url: window.location.origin+foldername+"save-other-question-type/"+questionairTypeId+"/"+pageNumber,
            dataType: 'json',
            data: {
                questionData : questionsData
            },
          
            success: function(response){
                console.log("response= ",response);
                
                if((response.error)){
                    console.log(response.error)
                    alert(response.error);

                }
                if(response.success == true){
                    alert(response.message)
                    $('.qt_'+questionTypeId+response.data).remove();
                    if(response.data == 3){
                        location.reload();
                    }
                }
            }
        });
    });


    /** --------------------------------------------------------- Other Question Type JS --------------------------------------------------- */
    
        /** Save Questions for Other Question Type */

    $('.saveQuestion6').on('click', function(){
        var questionairTypeId =  $(this).data('value');
        var questionTypeId =  $(this).data('index');

        var mandatory = 0, personalQuestion_ = 0, unit = 0;

        if($('.mandatory'+questionairTypeId+questionTypeId).is(':checked')){

            mandatory =1;
        } 

        var language = [];
        $.each($(".l_"+questionTypeId+ " option:nth-child(1)"), function(){
            language.push($(this).val()); 
        });


        var answerSize = 0;
        if( $('.answerSize'+questionairTypeId+questionTypeId).val() != undefined){
            answerSize = $('.answerSize'+questionairTypeId+questionTypeId).val();
        }
      
        var ques_name =[];
        var display_text = [];
        var selectedlanguage = [];
        var star_value = [];

        $.each(language, function(index, value){
            ques_name.push($('.quesName'+questionairTypeId+questionTypeId+value).val())
            display_text.push($('.displayText'+questionairTypeId+questionTypeId+value).val())
            star_value.push($('.startCheckValue'+questionairTypeId+questionTypeId+value).val())
            selectedlanguage.push($('.lang_'+questionairTypeId+questionTypeId+value).val())
        });

    });

});





/** ===================================================================(8/Feb)======================================================================== */

$(function(){

    let questionairId = $("#questionairId").val();
    let pageNumber = $("#pageNumber").val();
    let foldername = "/start-data/";


    
    // alert(language)
    /** Add questionType */


        // var language=[];
        // $.each($(".language").prop("selectedIndex", 0), function(){
        //     language.push($(this).val()); 
        // });
    // $('.addNewQuestionType').on('click', function(){
    //     $('#questionType').modal('show');
    // });

    $('.language').on('change', function(){
        var languageId = $(this).data('index');
        var questiontypeId = $(this).data('quest');
        var questionairTypeId = $(this).data('v');
        var selectedData =  $('.lang_'+questionairTypeId+languageId +' option:selected').val();
        // alert( selectedData)
        // return;
        if(selectedData == 'delete'){
            $('.lang_'+questionairTypeId+languageId).remove();
            $('#question_'+questiontypeId+languageId).remove();
        }
    });



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
        var title = $(this).data('main_value');

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
                console.log('all response', response);
                console.log('response data',response.data);
                if(response.success == true){
                    // alert(  )
                    // location.reload();
                    $('.questionTypeEditPannel'+questypeId).css({'display':''})
                    $('.load_question').css({'display':''});
                    $('.search-display').css({'display':''});
                    var html = '';
                    $.each(response.data, function(index, value){
                        html +=  "<tr>"+
                                    "<td class='ques_title' data-quesid="+value.questionId+" data-index='"+value.questionairTypeId+value.quesTypeId+"' data-title='"+value.questionName+"' >"+value.questionName+"</td>"+
                                    "<td>"+title+" </td>"+
                                    "<td>"+value.languageCount+"</td>"+
                                    "<td>0</td>"+
                                "</tr>";
                    })
                  
                    $('.load_question_data').append(html);
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
        var lngId = $(this).data('index');
        var questionTypeId = $(this).data('quest');
        // alert(questionTypeId);
        $('.editPannel').css({'display':'none'})
        $('#question_'+questionTypeId+lngId).css({'display':''})
        
    });

    $('.saveQuestion').on('click', function(e){
        var questionairTypeId =  $(this).data('value');
        var questionTypeId =  $(this).data('index');
        // alert(questionairTypeId);
        // return; 
        // var selectedLang = $('.lang_').val();
        var personalQuestionTitle = '';

        var mandatory = 0, personalQuestion_ = 0,  unit = 0;

        if(questionTypeId == 7){
            unit = $('.unit'+questionairTypeId+questionTypeId).val();
        }
        var language = [];
        $.each($(".l_"+questionTypeId+ " option:nth-child(1)"), function(){
            language.push($(this).val()); 
        });

        if($('.p'+questionairTypeId+questionTypeId).is(':checked')){

            personalQuestionTitle = $('.personalQuestionData'+questionairTypeId+questionTypeId).val();
            personalQuestion_ =1;
        } 

        var answerSize = 0;
        if( $('.answerSize'+questionairTypeId+questionTypeId).val() != undefined){
            answerSize = $('.answerSize'+questionairTypeId+questionTypeId).val();
        }
      
        var ques_name =[];
        var display_text = [];
        var selectedlanguage = [];
        var star_value = [];

        $.each(language, function(index, value){
            ques_name.push($('.quesName'+questionairTypeId+questionTypeId+value).val())
            display_text.push($('.displayText'+questionairTypeId+questionTypeId+value).val())
            star_value.push($('.startCheckValue'+questionairTypeId+questionTypeId+value).val())
            selectedlanguage.push($('.lang_'+questionairTypeId+questionTypeId+value).val())
        });
    
        // console.log(selectedlanguage);
        // // alert(language);
        // return;


        var questionsData = {
            'questionair_type_id'   :       questionairTypeId,
            'page_id'               :       pageNumber,
            'question'              :       ques_name,
            'language_id'           :       language,
            'unit'                  :       unit,
            'std_qns'               :       star_value,
            'mandatory'             :       mandatory,
            'max_ans_size'          :       answerSize,
            'personal_question'     :       personalQuestion_,
            'display_texts'         :       display_text,
            'personalQuestionTitle' :       personalQuestionTitle,
            'selectedStatusOfLang'  :       selectedlanguage,
        }

        console.log(questionsData);
        // return;

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
            }
        });
    });



    $('body').on('click','.ques_title', function(){
        // alert('hello')
        var quesType = $(this).data('index');
        var quesTitle = $(this).data('title');
        var quesId = $(this).data('quesid');
        $.ajax({
            type:"GET",
            url: window.location.origin+foldername+"get-questions",
            dataType: 'json',
            data: {
                quesId : quesId
            },
            success:function(response){
                $.each(response, function(index, value) {
                    $('.quesName'+value.questionairTypeId+value.quesTypeId+value.languageId).val(value.questionName);
                    console.log('.quesName'+value.questionairTypeId+value.quesTypeId+value.languageId)
                    $('.startCheck'+value.questionairTypeId+value.quesTypeId+value.languageId).val(value.stdAns);
                    if(value.stdAns == 0){
                        $('.startCheck'+value.questionairTypeId+value.quesTypeId+value.languageId).removeClass('color-dd');
                        $('.startCheck'+value.questionairTypeId+value.quesTypeId+value.languageId).css({'text-align':'right','width':'16%','font-size':'20px'});
                    }
                    $('.displayText'+value.questionairTypeId+value.quesTypeId+value.languageId).val(value.displayText)
                });
            },

        });
       
    });

    /** Star check in scale option */

    $('.starOption').on('click', function(){
        var startData = $(this).data('value');
        var i = $(this).data('i');
        console.log('start data',i+startData)
        console.log('start value',$('.startCheckOptionValue'+i+startData).val())

        if($('.starcheckOption'+i+startData).hasClass('color-dd')){
            $('.starcheckOption'+i+startData).removeClass('color-dd');
            $('.starcheckOption'+i+startData).css({'text-align':'right','width':'16%'});
            $('.startCheckOptionValue'+i+startData).val(0);
        }else{
            $('.starcheckOption'+i+startData).addClass('color-dd');
            $('.startCheckOptionValue'+i+startData).val(1);
        }
    });

   

    /** Save Questions for Scale Question Type */

    $('.saveQuestion6').on('click', function(){
        var questionairTypeId =  $(this).data('value');
        var questionTypeId =  $(this).data('index');
        var total_i  = $('#addProduct'+questionairTypeId+questionTypeId).data('totaladd');
        var total_option = ($('#total_option_count').val());
        var totalI=[];

        console.log('total -',total_i)
            for(var i=1; i <= total_i; i++){
                totalI.push(i);
            }
            console.log('total array -',totalI)

        var mandatory = 0, personalQuestion_ = 0, no_answer = 0;

        if($('.no_answer'+questionairTypeId+questionTypeId).is(':checked')){
            no_answer =1;
        }

        if($('.mandatory'+questionairTypeId+questionTypeId).is(':checked')){

            mandatory =1;
        } 

        var language = [];
        $.each($(".l_"+questionTypeId+ " option:nth-child(1)"), function(){
            language.push($(this).val()); 
        });


        var answerSize = 0;
        if( $('.answerSize'+questionairTypeId+questionTypeId).val() != undefined){
            answerSize = $('.answerSize'+questionairTypeId+questionTypeId).val();
        }
        
        var ques_name =[];
        var display_text = [];
        var selectedlanguage = [];
        var star_value = [];
        var answerName =[];
        var ansdisplayText= [];
        var starOptionValue = []; 
        var scaleDes = [];

        $.each(language, function(index, value){
            ques_name.push($('.quesName'+questionairTypeId+questionTypeId+value).val())
            display_text.push($('.displayText'+questionairTypeId+questionTypeId+value).val())
            star_value.push($('.startCheckValue'+questionairTypeId+questionTypeId+value).val())
            scaleDes.push($('.scaleDiscription'+questionairTypeId+questionTypeId+value).val())
            selectedlanguage.push($('.lang_'+questionairTypeId+questionTypeId+value).val())
            // options.push(
                $.each(totalI, function(index, value1){
                    console.log('lng v= ',value)
                    answerName.push( $('.answerName'+value1+questionairTypeId+questionTypeId+value).val())
                    ansdisplayText.push( $('.ansdisplayText'+value1+questionairTypeId+questionTypeId+value).val())
                    starOptionValue.push( $('.startCheckOptionValue'+value1+questionairTypeId+questionTypeId+value).val())
                })
            // )
           
        });

        var questionsData = {
            'questionair_type_id'   :       questionairTypeId,
            'page_id'               :       pageNumber,
            'question'              :       ques_name,
            'scale_des'             :       scaleDes,
            'language_id'           :       language,
            'std_qns'               :       star_value,
            'mandatory'             :       mandatory,
            'max_ans_size'          :       answerSize,
            'personal_question'     :       personalQuestion_,
            'display_texts'         :       display_text,
            'selectedStatusOfLang'  :       selectedlanguage,
            'no_answer'             :       no_answer,
            'total_option'          :       total_i,
            'answerName'            :       answerName,
            'ansdisplayText'        :       ansdisplayText,
            'optionStar'            :       starOptionValue,
        }

        console.log(questionsData);
        // return;

        $.ajaxSetup({   
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
       
        $.ajax({
            type:"GET",
            url: window.location.origin+foldername+"save-scale-question-type/"+questionairTypeId+"/"+pageNumber,
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
            }
        });

    });

    
});
