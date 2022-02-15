$(function(){

    let questionairId = $("#questionairId").val();
    let pageNumber = $("#pageNumber").val();
    let foldername = "/start-data/";
    let languageId_ = $('#languageId').val();


    
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
        // alert('hello');
        var pagenumber = $(this).data('page');
        var url_ = location.href;
        console.log('url', url_);
        var slashD = url_.substr(-3,1);
      
        console.log(slashD);
        if(slashD == '/'){
            var slashValue = url_.substr(-3,3)
            console.log('given slash');
            var newUrl = url_.replace(slashValue,'/'+pagenumber)
            location.href = newUrl;
        }else{
            location.href = url_+'/'+pagenumber;
        }
        // var questionairId_ = "{{ encrypt_decrypt('"+questionairId+"') }}";
        // location.href='';
        // console.log(questionairId_)
       $.ajax({
           type : 'GET',
        //    url: window.location.origin+foldername+"questions/"+questionairId+"/"+pagenumber,
            // url: window.location.origin+foldername+"questions",
            success:function(){
                // return true
                console.log('hello')
                location.href
            }

       })
        
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
                      /** drop down with Checkbox for dependency */

                    var checkList = document.getElementById('list'+questypeId+questypeId+languageId_);
                    var items = document.getElementById('items'+questypeId+questypeId+languageId_);

                    checkList.getElementsByClassName('anchor')[0].onclick = function(evt) {
                    if (items.classList.contains('visible')) {
                        items.classList.remove('visible');
                        items.style.display = "none";
                    } else {
                        items.classList.add('visible');
                        items.style.display = "block";
                    }
                    }
                    items.onblur = function(evt) {
                    items.classList.remove('visible');
                    }
                }
                if(response.success == true){
                    // alert(  )
                    // location.reload();
                    $('.editingPanel').css({'display':'none'})
                    $('.questionTypeEditPannel'+questypeId).css({'display':''})
                    $('.load_question').css({'display':''});
                    $('.search-display').css({'display':''});
                    $('#save_question'+questypeId).data('value',response.questionairTypeId )
                    var checkList = document.getElementById('list'+questypeId+questypeId+languageId_);
                    var items = document.getElementById('items'+questypeId+questypeId+languageId_);

                    checkList.getElementsByClassName('anchor')[0].onclick = function(evt) {
                    if (items.classList.contains('visible')) {
                        items.classList.remove('visible');
                        items.style.display = "none";
                    } else {
                        items.classList.add('visible');
                        items.style.display = "block";
                    }
                    }
                    items.onblur = function(evt) {
                    items.classList.remove('visible');
                    }
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
    $('.questionStd').on('click', function(){
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
        // alert(questionTypeId+lngId);
        var checkList = document.getElementById('list'+lngId);
        var items = document.getElementById('items'+lngId);
        checkList.getElementsByClassName('anchor')[0].onclick = function(evt) {
          if (items.classList.contains('visible')) {
            items.classList.remove('visible');
            items.style.display = "none";
          } else {
            items.classList.add('visible');
            items.style.display = "block";
          }
        }
        items.onblur = function(evt) {
          items.classList.remove('visible');
        }

        $('.editPannel').css({'display':'none'})
        $('#question_'+questionTypeId+lngId).css({'display':''})
        $('.dep').css({'display':'none'});
        $('.dependent_answer'+questionTypeId+questionTypeId+lngId).css({'display':''})
        
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
        var i=1,j=1;
        $.ajax({
            type:"GET",
            url: window.location.origin+foldername+"get-questions",
            dataType: 'json',
            data: {
                quesId : quesId
            },
            success:function(response){
                console.log('response related to choose ques= ',response);
                $.each(response.questionTitle, function(index, value) {
                    i=0;
                    j=0;
                    $.each(value, function(index, value_) {
                    console.log('option length',value_.options.length );
                        $('.quesName'+value_.quesTypeId+value_.quesTypeId+value_.languageId).val(value_.questionName);
                        console.log('.quesName'+value_.quesTypeId+value_.quesTypeId+value_.languageId)
                        $('.startCheck'+value_.quesTypeId+value_.quesTypeId+value_.languageId).val(value_.stdAns);
                        if(value_.stdAns == 0){
                            $('.startCheck'+value_.quesTypeId+value_.quesTypeId+value_.languageId).removeClass('color-dd');
                            $('.startCheck'+value_.quesTypeId+value_.quesTypeId+value_.languageId).css({'text-align':'right','width':'16%','font-size':'20px'});
                        }
                        $('.displayText'+value_.quesTypeId+value_.quesTypeId+value_.languageId).val(value_.displayText)
                        $('.scaleDiscription'+value_.quesTypeId+value_.quesTypeId+value_.languageId).val(value_.scale_description)
                        if(value_.options.length > 0){
                            console.log('questiontype =',value_.quesTypeId)
                            if(value_.quesTypeId == 2 || value_.quesTypeId == 1 || value_.quesTypeId == 8 ){
                                $.each(value_.options, function(index1, value2) {
                                    $('.answerName_y'+(j+1)+value_.quesTypeId+value_.quesTypeId+value_.languageId).val(value2.option) 
                                    $('.ansdisplayText_y'+(j+1)+value_.quesTypeId+value_.quesTypeId+value_.languageId).val(value2.display_text) 
                                    var indexVal= value_.quesTypeId.toString()+value_.quesTypeId.toString()
                                    console.log('indexval',indexVal);
                                    add_field(indexVal,value_.languageId,value_.quesTypeId,j,value2.option,value2.display_text)
                                    j++;
                                });
                            }else{
                                $.each(value_.options, function(index1, value2) {
                    
                                    if(value2.axis== 'x'){
                                        console.log('gfghfhgf',value_.quesTypeId)
                                        $('.answerName'+(i+1)+value_.quesTypeId+value_.quesTypeId+value_.languageId).val(value2.option)
                                        $('.ansdisplayText'+(i+1)+value_.quesTypeId+value_.quesTypeId+value_.languageId).val(value2.display_text) 
                                        i++;
                                    }else{
                                        $('.answerName_y'+(j+1)+value_.quesTypeId+value_.quesTypeId+value_.languageId).val(value2.option) 
                                        $('.ansdisplayText_y'+(j+1)+value_.quesTypeId+value_.quesTypeId+value_.languageId).val(value2.display_text) 
                                        var indexVal= value_.quesTypeId.toString()+value_.quesTypeId.toString()
                                        console.log('indexval',indexVal);
                                        add_field(indexVal,value_.languageId,quesType,j,value2.option,value2.display_text)
                                        j++;
                                    }
                                });
                            }
                            
                        }
                    });
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

    function add_field(indexV,language,quesTypeId,i,opVal='',disVal=''){
       
        var iInc = parseInt(i)+1;
        console.log('ques type id',quesTypeId);
        console.log('i',i);
        // alert(indexV);
        var html ="<tr class='options_y"+iInc+indexV+language+"' data-i='"+iInc+"'>"+
               " <td>"+iInc+" </td>"+
                "<td><input type='text' class='form-control answerName_y"+iInc+indexV+language+"' value='"+opVal+"' placeholder=''></td>"+
                "<td><input type='text' class='form-control ansdisplayText_y"+iInc+indexV+language+"' value='"+disVal+"' placeholder=''></td>"+
               " <td class='text-center'>"+
                    "<i class='fa fa-angle-up d-block' aria-hidden='true'></i>"+
                   " <i class='fa fa-angle-down d-block' aria-hidden='true'></i>"+
                "</td>"+
               " <td class='text-center'>"+
            
                    "<p class='remove op_remove' data-i='"+iInc+"' data-index='"+indexV+"' data-language='"+language+"'><i class='fa fa-trash' aria-hidden='true'></i></p>"+
               " </td>";
        if(quesTypeId == '2' || quesTypeId== '1' ){

            html += "<td class='text-center'> <i class='fa fa-link dependecy dependencyCheck"+iInc+indexV+language+"' data-language='"+language+"' data-value='"+indexV+language+"' data-i='"+iInc+"'  aria-hidden='true'></i></td>"+
                "<input type='hidden' class='dependencyCheckValue"+iInc+indexV+language+"' name='linkData' value='0'>";
        }
            html +=  "<td class='text-center'> <i class='fa fa-star starOption_y starcheckOption_y"+iInc+indexV+language+"' data-value='"+indexV+language+"' data-i='"+iInc+"' aria-hidden='true'></i>"+
               " </td>"+
               " <input type='hidden' class='startCheckOptionValue_y"+iInc+indexV+language+"' name='starData' value='0'>"+
            "</tr>";
        console.log(html)
        $(this).data('i',iInc)
        console.log('update i =',$(this).data('i'))
        $(this).data('totaladd', iInc)
        $('#total_option_count'+indexV+language).val(iInc)
        $('.options_y'+i+indexV+language).after(html);
    }

    $('.btndfd').on('click', function(){
        var indexV = $(this).data('index');
        var language = $(this).data('language');
        var quesTypeId = $(this).data('questypeid');
        var i = $(this).data('i');

        var iInc = parseInt(i)+1;
        console.log('ques type id',quesTypeId);
        console.log('i',i);
        // alert(indexV);
        var html ="<tr class='options_y"+iInc+indexV+language+"' data-i='"+iInc+"'>"+
               " <td>"+iInc+" </td>"+
                "<td><input type='text' class='form-control answerName_y"+iInc+indexV+language+"'  placeholder=''></td>"+
                "<td><input type='text' class='form-control ansdisplayText_y"+iInc+indexV+language+"'  placeholder=''></td>"+
               " <td class='text-center'>"+
                    "<i class='fa fa-angle-up d-block' aria-hidden='true'></i>"+
                   " <i class='fa fa-angle-down d-block' aria-hidden='true'></i>"+
                "</td>"+
               " <td class='text-center'>"+
            
                    "<p class='remove op_remove' data-i='"+iInc+"' data-index='"+indexV+"' data-language='"+language+"'><i class='fa fa-trash' aria-hidden='true'></i></p>"+
               " </td>";
        if(quesTypeId == '2' || quesTypeId== '1' || quesTypeId == 8 ){

            html += "<td class='text-center'> <i class='fa fa-link dependecy dependencyCheck"+iInc+indexV+language+"' data-language='"+language+"' data-value='"+indexV+language+"' data-i='"+iInc+"'  aria-hidden='true'></i></td>"+
                "<input type='hidden' class='dependencyCheckValue"+iInc+indexV+language+"' name='linkData' value='0'>";
        }
            html +=  "<td class='text-center'> <i class='fa fa-star starOption_y starcheckOption_y"+iInc+indexV+language+"' data-value='"+indexV+language+"' data-i='"+iInc+"' aria-hidden='true'></i>"+
               " </td>"+
               " <input type='hidden' class='startCheckOptionValue_y"+iInc+indexV+language+"' name='starData' value='0'>"+
            "</tr>";
        console.log(html)
        $(this).data('i',iInc)
        console.log('update i =',$(this).data('i'))
        $(this).data('totaladd', iInc)
        $('#total_option_count'+indexV+language).val(iInc)
        $('.options_y'+i+indexV+language).after(html);
        // add_field(indexV,language,quesTypeId,i)
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

        var mandatory = 0, personalQuestion_ = 0, no_answer = 0, dependencyCheck=0, dependencyLogic=0;

        if(questionTypeId == 2 || questionTypeId== 1|| questionTypeId== 8){
            dependencyCheck =$('.dependency'+questionTypeId+questionTypeId).val();
            dependencyLogic = $('input[name="radio_dep_logic"]:checked').val()
            console.log('depency logic=',dependencyLogic)
        }
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
        scaleDes = [], y_answerName= [], y_ansdisplayText = [], y_starOptionValue= [], link_value= [], dependency=[];

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
                link_value.push($('.dependencyCheckValue'+value2+questionTypeId+questionTypeId+value).val())
                // dependency.push($('.dependent'))
            });

            
        });
        $.each($("input[name='ddCheck"+questionTypeId+"']:checked"), function(){
            dependency.push($(this).val());
        });


        console.log('depenedecy select', dependency);
        // return;

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
            'dependency'            :       link_value,
            'dependencyCheck'       :       dependencyCheck,
            'dependencyLogic'       :       dependencyLogic,
            'selectedDependecy'     :       dependency,
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

    /** Dependency Link Check */
    $('body').on('click','.dependecy', function(){
        var linkData = $(this).data('value');
        var langId =$(this).data('language');
        var i = $(this).data('i');
        console.log('link data',i+linkData)
        console.log('link value',$('.dependencyCheckValue'+i+linkData).val())

        if($('.dependencyCheck'+i+linkData).hasClass('color-dd')){
            $('.dependencyCheck'+i+linkData).removeClass('color-dd');
            $('.dependencyCheck'+i+linkData).css({'text-align':'right','width':'16%'});
            $('.dependencyCheckValue'+i+linkData).val(0);
            $('.dep'+i+linkData).remove()
        }else{
            $('.dependencyCheck'+i+linkData).addClass('color-dd');
            $('.dependencyCheckValue'+i+linkData).val(1);
            
                var answerName = $('.answerName_y'+i+linkData).val();
                var html =  "<li class='dep"+i+linkData+"'><input type='checkbox' checked class='dependent"+i+linkData+"' id=''>"+answerName+"</li>";
                $('.dependent_list'+langId).append(html)

        }
    });



  

   /** Sorting Questions */
    $('.ques_order').on('click', function(){
        var question_no = $(this).data('ques_no'),
            ques_id     = $(this).data('ques_id'),
            page_id     = $(this).data('page_id'); 

            var row = $(this).parents("tr:first");
            if ($(this).is(".up")) {
                console.log('prev row ques id = ',row.prev().attr('data-ques_no'))
                savePosition(question_no, ques_id,page_id, row.prev().attr('data-ques_no'),row.prev().attr('data-ques_id'))
                row.insertBefore(row.prev());
            } else {
                console.log('next row ques id = ',row.next().attr('data-ques_no'))
                savePosition(question_no, ques_id,page_id, row.next().attr('data-ques_no'),row.next().attr('data-ques_id'))
                row.insertAfter(row.next());

            }

            // alert(ques_id,question_no, page_id);
            console.log('current ques no=', question_no);
            console.log('page_id= ',page_id);
            console.log('ques_id= ',ques_id);
            

    });

    // $('.current_question tbody').sortable({
    //     update:function(event, ui){
    //         $(this).children().each(function(index){
    //             if($(this).attr('data-pos') != (index+1)){
    //                 $(this).attr('data-pos', index+1).addClass('updated')
    //             } 
    //         });

    //         savePosition();
    //     }
    // });


    function  savePosition(c_ques_no,c_ques_id,page_id, s_ques_no, s_ques_id){
        var data = {
            'current_ques_no'   :       c_ques_no,
            'current_ques_id'   :       c_ques_id,
            'page_no'           :       page_id,
            'swap_ques_no'      :       s_ques_no,
            'swap_ques_id'      :       s_ques_id
        };
        $.ajaxSetup({   
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
       
        $.ajax({
            type:"GET",
            url: window.location.origin+foldername+"save-ques-position",
            dataType: 'json',
            data: {
                questionPositionData : data
            },
          
            success: function(response){
                console.log("question position response",response);
               
            }
        });

    }

    $('.safe_draft').on('click', function(){
        $.ajaxSetup({   
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
       
        $.ajax({
            type:"GET",
            url: window.location.origin+foldername+"save-ques-draft",
            dataType: 'json',
          
            success: function(response){
                if(response.success == true){
                    alert('Question Saved Successfully');
                    location.reload()
                }
                
            }
        });
    });
});