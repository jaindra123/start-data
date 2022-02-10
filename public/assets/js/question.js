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

    $('.changePageno').on('click', function(){
        alert('hello');
        var pagenumber = $(this).data('page');
        // location.href='';
        var urlParams = new URLSearchParams(window.location.search);
        console.log(urlParams)
    })    

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
                console.log('response data',response.questionairTypeId);
                // console.log('questionairid',response.data[0].questionairTypeId);
                if(response.success == 'success'){
                    $('#save_question'+questypeId).data('value',response.data1 )
                    $('.editingPanel').css({'display':'none'})
                    $('.questionTypeEditPannel'+questypeId).css({'display':''})
                    $('.load_question').css({'display':''});
                    $('.search-display').css({'display':''});
                }
                if(response.success == true){
                    // alert(  )
                    // location.reload();
                    $('.editingPanel').css({'display':'none'})
                    $('.questionTypeEditPannel'+questypeId).css({'display':''})
                    $('.load_question').css({'display':''});
                    $('.search-display').css({'display':''});
                    $('#save_question'+questypeId).data('value',response.questionairTypeId )
                    console.log($('#save_question'+questypeId).data('value'));
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
            unit = $('.unit'+questionTypeId+questionTypeId).val();
        }
        var language = [];
        $.each($(".l_"+questionTypeId+ " option:nth-child(1)"), function(){
            language.push($(this).val()); 
        });

        if($('.p'+questionTypeId+questionTypeId).is(':checked')){

            personalQuestionTitle = $('.personalQuestionData'+questionTypeId+questionTypeId).val();
            personalQuestion_ =1;
        } 

        var answerSize = 0;
        if( $('.answerSize'+questionTypeId+questionTypeId).val() != undefined){
            answerSize = $('.answerSize'+questionTypeId+questionTypeId).val();
        }
      
        var ques_name =[];
        var display_text = [];
        var selectedlanguage = [];
        var star_value = [];

        $.each(language, function(index, value){
            ques_name.push($('.quesName'+questionTypeId+questionTypeId+value).val())
            display_text.push($('.displayText'+questionTypeId+questionTypeId+value).val())
            star_value.push($('.startCheckValue'+questionTypeId+questionTypeId+value).val())
            selectedlanguage.push($('.lang_'+questionTypeId+questionTypeId+value).val())
        });
    
        // console.log(display_text);
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
                console.log('response related to choose ques= ',response.questionTitle);
                $.each(response.questionTitle, function(index, value) {
                    $('.quesName'+value.quesTypeId+value.quesTypeId+value.languageId).val(value.questionName);
                    console.log('.quesName'+value.quesTypeId+value.quesTypeId+value.languageId)
                    $('.startCheck'+value.quesTypeId+value.quesTypeId+value.languageId).val(value.stdAns);
                    if(value.stdAns == 0){
                        $('.startCheck'+value.quesTypeId+value.quesTypeId+value.languageId).removeClass('color-dd');
                        $('.startCheck'+value.quesTypeId+value.quesTypeId+value.languageId).css({'text-align':'right','width':'16%','font-size':'20px'});
                    }
                    $('.displayText'+value.quesTypeId+value.quesTypeId+value.languageId).val(value.displayText)
                    $('.scaleDiscription'+value.quesTypeId+value.quesTypeId+value.languageId).val(value.scale_description)
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

     /** Star check in y-axis option */
     $('body').on('click','.starOption_y', function(){
        var startData = $(this).data('value');
        var i = $(this).data('i');
        console.log('start data',i+startData)
        console.log('start value',$('.startCheckOptionValue_y'+i+startData).val())

        if($('.starcheckOption_y'+i+startData).hasClass('color-dd')){
            $('.starcheckOption_y'+i+startData).removeClass('color-dd');
            $('.starcheckOption_y'+i+startData).css({'text-align':'right','width':'16%'});
            $('.startCheckOptionValue_y'+i+startData).val(0);
        }else{
            $('.starcheckOption_y'+i+startData).addClass('color-dd');
            $('.startCheckOptionValue_y'+i+startData).val(1);
        }
    });

    $('.btndfd').on('click', function(){
        var indexV = $(this).data('index');
        var language = $(this).data('language');
        var quesTypeId = $(this).data('questypeid');
        var i = $(this).data('i');
        var iInc = parseInt(i)+1;
        console.log('ques type id',$(this).data('questypeid'));
        console.log('i',i);
        // alert(indexV);
        var html ="<tr class='options_y"+iInc+indexV+language+"' data-i='"+iInc+"'>"+
               " <td>"+iInc+" </td>"+
                "<td><input type='text' class='form-control answerName_y"+iInc+indexV+language+"' placeholder=''></td>"+
                "<td><input type='text' class='form-control ansdisplayText_y"+iInc+indexV+language+"' placeholder=''></td>"+
               " <td class='text-center'>"+
                    "<i class='fa fa-angle-up d-block' aria-hidden='true'></i>"+
                   " <i class='fa fa-angle-down d-block' aria-hidden='true'></i>"+
                "</td>"+
               " <td class='text-center'>"+
            
                    "<p class='remove op_remove' data-i='"+iInc+"' data-index='"+indexV+"' data-language='"+language+"'><i class='fa fa-trash' aria-hidden='true'></i></p>"+
               " </td>";
        if(quesTypeId == '2'){

            html += "<td class='text-center'> <i class='fa fa-link' aria-hidden='true'></i></td>";
        }
            html +=  "<td class='text-center'> <i class='fa fa-star starOption_y starcheckOption_y"+iInc+indexV+language+"' data-value='"+indexV+language+"' data-i='"+iInc+"' aria-hidden='true'></i>"+
               " </td>"+
               " <input type='hidden' class='startCheckOptionValue_y"+iInc+indexV+language+"' name='starData' value='0'>"+
            "</tr>";
        // console.log(html)
        $(this).data('i',iInc)
        $(this).data('totaladd', iInc)
        $('#total_option_count'+indexV+language).val(iInc)
        $('.options_y'+i+indexV+language).after(html);
    });

    $('body').on('click','.op_remove', function(){

        var index = $(this).data('index');
        var i = $(this).data('i');
        var language = $(this).data('language');
        console.log('index=',index,'i=',i, 'language=',language)
        var totalCount =   $('#total_option_count'+index+language).val();
        console.log('totalC=', totalCount);
        $(this).parents('tr').remove();
        $('.add'+index+language).data('i',parseInt(totalCount)-1)
        // $('.options_y'+i+index+language).remove();
        $('#total_option_count'+index+language).val(parseInt(totalCount)-1)

    });

    /** Save Questions for Scale Question Type */

    $('.saveQuestion6').on('click', function(){
        var questionairTypeId =  $(this).data('value');
        var questionTypeId =  $(this).data('index');
        var total_i  = $('#addProduct'+questionTypeId+questionTypeId).data('totaladd');
        var totalI=[];

        console.log('total -',total_i)
            for(var i=1; i <= 2; i++){
                totalI.push(i);
            }
            console.log('total array -',totalI)

        var mandatory = 0, personalQuestion_ = 0, no_answer = 0;

        if($('.no_answer'+questionTypeId+questionTypeId).is(':checked')){
            no_answer =1;
        }

        if($('.mandatory'+questionTypeId+questionTypeId).is(':checked')){
            mandatory =1;
        } 

        var language = [];
        $.each($(".l_"+questionTypeId+ " option:nth-child(1)"), function(){
            language.push($(this).val()); 
        });

        var totalOptionY =[];
        var total_option = ($('#total_option_count'+questionTypeId+questionTypeId+language[0]).val());
        // console.log(total)
        for(var i=1; i <= total_option; i++){
            totalOptionY.push(i);
        }

        var answerSize = 0;
        if( $('.answerSize'+questionTypeId+questionTypeId).val() != undefined){
            answerSize = $('.answerSize'+questionTypeId+questionTypeId).val();
        }
        
        var ques_name =[], display_text = [], selectedlanguage = [], star_value = [], answerName =[], ansdisplayText= [], starOptionValue = [], 
        scaleDes = [], y_answerName= [], y_ansdisplayText = [], y_starOptionValue= [];

        $.each(language, function(index, value){
            ques_name.push($('.quesName'+questionTypeId+questionTypeId+value).val())
            display_text.push($('.displayText'+questionTypeId+questionTypeId+value).val())
            star_value.push($('.startCheckValue'+questionTypeId+questionTypeId+value).val())
            scaleDes.push($('.scaleDiscription'+questionTypeId+questionTypeId+value).val())
            selectedlanguage.push($('.lang_'+questionTypeId+questionTypeId+value).val())
            $.each(totalI, function(index, value1){
                console.log('lng v= ',value)
                answerName.push( $('.answerName'+value1+questionTypeId+questionTypeId+value).val())
                ansdisplayText.push( $('.ansdisplayText'+value1+questionTypeId+questionTypeId+value).val())
                starOptionValue.push( $('.startCheckOptionValue'+value1+questionTypeId+questionTypeId+value).val())
            })

            $.each(totalOptionY, function(index1, value2){
                y_answerName.push( $('.answerName_y'+value2+questionTypeId+questionTypeId+value).val())
                y_ansdisplayText.push( $('.ansdisplayText_y'+value2+questionTypeId+questionTypeId+value).val())
                y_starOptionValue.push( $('.startCheckOptionValue_y'+value2+questionTypeId+questionTypeId+value).val())
            });
           
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
            'answerName_y'          :       y_answerName,
            'ansdisplayText_y'      :       y_ansdisplayText,
            'optionStar_y'          :       y_starOptionValue,
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