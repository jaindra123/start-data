@extends('layouts.main')

@section('title','Create New Questionair')

@section('content')
@push('css-script')
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<style>
    .text-danger{
        font-size: 15px;
    }
    
</style>
@endpush('css-script')
    <div class="content quereszz">
        <div class="alert alert-success alert-dismissible alert-block message_show"  style="display: none;">
            <button type="button" class="close" data-dismiss="alert">×</button>
            <strong class="message_alert"></strong>
        </div>

        <div class="row">
            <div class="col-md-9">
                <h1>Global Questionair Settings and Start Page</h1>
            </div>
            <div class="col-md-3">
                <form class="" action="javascript:void(0)" method="POST" enctype="multipart/form-data" id="questionairsForm"> 
            <button class="custom-button" id="published_ques"><i class="fa fa-pencil" aria-hidden="true"></i> Publish</button>
            <!-- <input type="hidden" name="published" id="published" value="0"> -->
            </div>
        </div>
            {{csrf_field()}}
            <div class="row">
                <div class="col-md-9">
                    
                    <div class="row w-100">
                        <div class="col-md-3">
                            <label for="questionair" class="mr-sm-2">Questionair Name</label>
                        </div>
                        <div class="col-md-9">
                            <input type="text" class="form-control mb-2 mr-sm-2" placeholder="Alte Meister" value="{{old('questionair')}}" id="questionair" name="questionair">
                            <span><p class="questionair-error text-danger"></p></span>
                            <span><p class="ques-year-error text-danger"></p></span>
                            
                        </div>
                                
                    </div>
                    <div class="row w-100">
                        <div class="col-md-3">
                            <label for="year" class="mr-sm-2">Year</label>
                        </div>
                        <div class="col-md-9">
                            <input type="number" class="form-control mb-2 mr-sm-2" placeholder="2021" id="year" name="year" value="{{old('year')}}">
                            <span><p class="year-error text-danger"></p></span>
                           
                        </div>
                    </div>
                    <div class="row w-100">
                        <div class="col-md-3">
                            <label for="base_color" class="mr-sm-2">Base Color</label>
                        </div>
                        <div class="col-md-9">
                            <input type="text" class="form-control mb-2 mr-sm-2" placeholder="#48KKAS" id="base_color" name="base_color" value="{{old('base_color')}}">
                            <span><p class="base-color-error text-danger"></p></span>
                        </div>
                    </div>
                    <div class="row w-100">
                        <div class="col-md-3">
                            <label for="btn_bkgound" class="mr-sm-2"> Button Background</label>
                        </div>
                        <div class="col-md-9">
                            <input type="text" class="form-control mb-2 mr-sm-2" placeholder=" #48KKAS" id="btn_bkgound" name="button_backgound" value="{{old('button_backgound')}}">
                            <span><p class="btn-bkgound-error text-danger"></p></span>
                        </div>
                    </div>
                    <div class="row w-100">
                        <div class="col-md-3">
                            <label for="btn_text" class="mr-sm-2"> Button Text</label>
                        </div>
                        <div class="col-md-9">
                            <input type="text" class="form-control mb-2 mr-sm-2" placeholder=" #48KKAS" id="btn_text" name="button_text" value="{{old('button_text')}}">
                            <span><p class="btn-text-error text-danger"></p></span>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <button class="custom-button"><i class="fa fa-pencil" aria-hidden="true"></i> Start Edit</button>
                    <button class="custom-button" id="safe_questionairs"><i class="fa fa-floppy-o" aria-hidden="true"></i> Safe Draft</button>
                    <button class="custom-button"><i class="fa fa-trash" aria-hidden="true"></i> Delete Draft</button>
                </div>
            </div>
            <div class="row w-100">
                <div class="col-md-3">
                    <div class="w-100 mb-2">
                        <label for="email" class=""> Add Language</label>
                        <div class="add_field_set" >
                            @if($data['language'])
                            <select class="form-control mb-3 laguage_data" name="language" data-index="1" id="s1">
                                <option value="">Select</option>
                                @foreach($data['language'] as $col)
                                    <option value="{{$col->id}}" data-i="{{$col->language}}">{{$col->language}}</option>
                                @endforeach
                            </select>
                            @endif
                            <div class="change_button">
                                <a href="JavaScript:void(0)" class="adds mb-4" id="add_languages" data-section="1">+ Add</a>
                            </div>
                        </div>
                       
                        <div class="w-100 mt-4 mb-2">
                            <div class="input-filesss">
                                <input type="file" id="file-uploads" name="first_page_picture"  />
                                <label for="file-uploads" class="btns"><i class="fa fa-picture-o " aria-hidden="true"></i><span class="">Upload Start Page Picture</span></label>
                                <div id="file-uploads-filename"></div>
                                <span><p class="first-page-picture-error text-danger"></p></span>
                            </div>
                        </div>
                        <div class="w-100 mt-4 mb-2">
                            <div class="input-filesss">
                                <input type="file" id="file-uploads1" name="last_page_picture" />
                                <label for="file-uploads1" class="btns"><i class="fa fa-picture-o" aria-hidden="true"></i><span class="">Upload Last Page Picture</span></label>
                                <div id="file-uploads-filename1"></div>
                                <span><p class="last-page-picture-error text-danger"></p></span>
                            </div>
                        </div>    
                        <div class="w-100 mt-4 mb-2">
                        <label for="email" class="">Display Progress Bar</label>
                        <div class="wrappers">
                            <input id="checkbox" type="checkbox" class="checkbox hidden" name="progress_bar" />
                            <label class="switchbox" for="checkbox"></label>
                        </div>
                        </div>
                        <div class="w-100 mt-4 mb-2">
                            <label for="last_page_timer" class="">Last Page Timer (Seconds)</label>
                            <input type="text" class="form-control mb-2 mr-sm-2" placeholder="10" id="last_page_timer" name="last_page_timer" value="0"> 
                            <span><p class="last-page-timer-error text-danger"></p></span>
                    
                        </div>
                        <div class="w-100 mt-4 mb-2">
                            <label for="idle_timer" class="">Idle Timer (Seconds)</label>
                            <input type="text" class="form-control mb-2 mr-sm-2" placeholder="10"  name="idle_timer" id="idle_timer" value="0">
                            <span><p class="idle-timer-error text-danger"></p></span>
                        </div>
                        <div class="w-100 mt-4 mb-2">
                            <label for="email" class="">Protect Link with Password</label>
                            <div class="wrappers">
                                <input id="checkbox2" type="checkbox" class="checkbox hidden protected_link"  name="protected_link_with_password"/>
                                <label class="switchbox" for="checkbox2"></label>
                            </div>
                        </div>

                        <!-- <div class="w-100 mt-4 mb-2 password_protected_link" style="display: none;"> 
                            <label for="password" class="">Password</label>
                            <input type="text" class="form-control mb-2 mr-sm-2" placeholder="password"  name="password" id="password" value="{{old('password')}}">
                            @if($errors->first('password'))
                                <span><p class="text-danger">{{$errors->first('password')}}</p></span>
                            @endif
                        </div> -->


                        <div class="w-100 mt-4 mb-2">
                            <label for="customer" class="">Select Customer</label>
                            @if($data['customer'])
                            <select  class="form-control mb-3" name="customer">
                                <option value="">Select Customer</option>
                                @foreach($data['customer'] as $row)
                                <option value="{{$row->id}}"> {{$row->customer_name}}</option>
                            @endforeach
                            </select>
                            @endif
                            <span><p class="customer-error text-danger"></p></span>

                        </div>
                    </div>
                </div>
                <div class="col-md-9 mt-3 pt-1 questionair_data">
                    <div class="w-100 mb-4">
                        <label for="headline" class=""> Headline Questionair (repeats on each page)</label>
                        <input type="text" class="form-control mb-2" placeholder="" id="headline" name="headline" value="{{old('headline')}}">
                        <span><p class="headline-error text-danger"></p></span>
                    </div> 
                    <div class="w-100 mb-4">
                        <label for="start_page_field" class=""> Start Page Text</label>
                        <textarea class="form-control mb-2 ckeditor"  placeholder="" id="firstText" name="start_page_field"></textarea>
                        <span><p class="start-page-field-error text-danger"></p></span>
                        
                    </div>  
                    <div class="w-100 mb-4">
                        <label for="last_page_field" class=""> Last Page</label>
                        <textarea class="form-control mb-2 ckeditor" placeholder="" id="lastText" name="last_page_field"></textarea>
                        <span><p class="last-page-field-error text-danger"></p></span>
                    </div>     
                </div>
            </div>
            </form>  
    </div>
   
</div>

@endsection

@push('js-script')

<script src="//cdn.ckeditor.com/4.14.1/standard/ckeditor.js"></script>
<script type="text/javascript">
    $(document).ready(function () {
        $('.ckeditor').ckeditor(); 
    });

    $(function(){
        $("body").on("click","#add_languages",function(){
            var sectionCount = $(this).data('section') 

            var upSection = parseInt(sectionCount)+1;
        
            $(this).data('section',upSection);

            var headlineData = $('#headline').val();
            var firstText =  CKEDITOR.instances.firstText.getData(); 
            var lastText = CKEDITOR.instances.lastText.getData();

            // var langSelect =  $("#s"+sectionCount).val($("#s"+sectionCount+" option:first").val());
            console.log('section=====', $("#s"+sectionCount).val() );
            var selectedValue =  $("#s"+sectionCount).val();
           


            var langSelect = $("#s"+sectionCount).prop("selectedIndex", 0).val();
            console.log('selected lang', langSelect)

            if($("#s"+sectionCount).val() =='' ){
                alert("Please Select any Language");
                return;
            }
            // var langD = '<?= getLanguageIdFromSession() ?>';
            // console.log('langD---',langD);
            // var matchLang = false;
            // $.each(langD, function(key, value){
            //     if(value == langSelect){
            //         matchLang = true;
            //     }
            // });
            // console.log('---',matchLang)
            
            if(($('#headline').val() == '' || CKEDITOR.instances.firstText.getData() == '' || CKEDITOR.instances.lastText.getData() == '') ){
                // if(matchLang == false){
                    alert(" Headline field, First page text field and Last Page text field are required")
                    return;
                // }
            }
            $.ajaxSetup({   
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
           
            var language_data = '<?=  getAllLanguage() ?>'
            language_data = JSON.parse(language_data)
            var html  = "<div class='add_field_set' ><select class='form-control mb-3 laguage_data' name='language' data-index='"+upSection+"' id='s"+upSection+"'>"+
                            "<option value=''>Select</option>";
                            
            $.each( language_data, function( key, value ) { 

                html +="<option value='"+value.id+"'>"+value.language+"</option>"
            })
            html +="</select><div class='change_button'>"+
                        "<a class=' mb-4 text-danger trash' data-indexT="+upSection+"  id='removeOption"+upSection+"' data-k='0'>- Remove</a>"+
                    "</div></div>";
            // $(html).find(".change_button").html("<a class=' mb-4 text-danger trash' >- Remove</a>");
            $(".add_field_set").last().after(html);
            
            $.ajax({
                type:"POST",
                url: "{{ url('store-session-questionairs') }}",
                dataType: 'json',
                data: {
                    headline:headlineData,
                    firstText:firstText,
                    lastText:lastText,
                    language:selectedValue,
                    langS : langSelect,
                },
              
                success: function(response){
                    console.log(response);
                }
            });
            

        });
        

        $('body').on('click','#langAdd', function(){
            var sectionCount = $(this).data('section') 

            var upSection = parseInt(sectionCount)+1;
        
            $(this).data('section',upSection);
            var language_data = '<?=  getAllLanguage() ?>'
            language_data = JSON.parse(language_data)
            var html  = "<div class='add_field_set' ><select class='form-control mb-3 laguage_data' name='language' data-index='"+upSection+"' id='s"+upSection+"'>"+
                            "<option value=''>Select</option>";
                            
            $.each( language_data, function( key, value ) { 

                html +="<option value='"+value.id+"'>"+value.language+"</option>"
            })
            html +="</select><div class='change_button'>"+
                        "<a class=' mb-4 text-danger trash' data-indexT="+upSection+"  id='removeOption"+upSection+"' data-k='0'>- Remove</a>"+
                    "</div></div>";
            // $(html).find(".change_button").html("<a class=' mb-4 text-danger trash' >- Remove</a>");
            $(".add_field_set").last().after(html); 
        });

        $('body').on('click','.trash', function(){
            // alert('remove')
            $(this).parents(".add_field_set").remove();
            var langId = $(this).data('k')

            if(langId == '0'){
                $('#add_languages').prop('id', 'langAdd');
                return;
            }

            $('#add_languages').prop('id', 'langAdd');

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                type:"POST",
                url: "{{ url('remove-session-questionairs') }}",
                dataType: 'json',
                data: {
                    langId_ : langId
                },
                
                success: function(response){
                    console.log('response', response)
                }
            });
           


        });

       

        $("body").on('change','.laguage_data', function(){
            
            var getLanguage = $(this).find('option:selected').text();
            var getLanguageId = $(this).find('option:selected').val();
            console.log('lnag = ',getLanguageId)

            if($('#langAdd').length){
                $('#langAdd').prop('id', 'add_languages')
            }
            // if(getLanguageId == 'deactivate' || getLanguage == 'Deactivate'){
            //    var getLanguage1 = $(this).prop("selectedIndex", 0);
            //     // getLanguage = getLanguage1.data('i');
            //     getLanguageId = $(this).prop("selectedIndex", 0).val();
            //     getLanguageId = $(this).prop("selectedIndex", 0).text();
            //     return
            // }
            
            var indexV = $(this).data('index')

            $('#removeOption'+indexV).attr('data-k', getLanguageId)
            

            if(getLanguageId == 'delete'){
                // return;
                $('#add_languages').prop('id', 'langAdd')
                if(indexV == '1'){
                    var language_data = '<?=  getAllLanguage() ?>'
                    language_data = JSON.parse(language_data)
                    var html  = "<select class='form-control mb-3 laguage_data' name='language' data-index='1' id='s1'>"+
                                    "<option value=''>Select</option>";
                                    
                    $.each( language_data, function( key, value ) { 

                        html +="<option value='"+value.id+"'>"+value.language+"</option>"
                    })
                    html +="</select>";
                    $("#s"+indexV).html(html)
                }else{
                    $("#s"+indexV).remove();
                    $("#removeOption"+indexV).remove();
                }
                $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                type:"POST",
                url: "{{ url('remove-session-questionairs') }}",
                dataType: 'json',
                data: {
                    langId_ : getLanguage
                },
                
                success: function(response){
                    console.log('response', response)
                }
            });
           
                return;
            }
            if(getLanguageId == 'deactivate'){
                $(this, "option[value='deactivate']").prop('selected',true);
                
                return;
            }
            var htmlSelect = "<select class='form-control mb-3 laguage_data' name='language'>"+
                        "<option value='"+getLanguageId+"' data-i='"+getLanguage+"'>"+getLanguage+"</option>"+
                        "<option value='delete' >Delete</option>"+
                        "<option value='deactivate'>Deactivate</option>"+
                    "</select>";
            
            $(this).html(htmlSelect)
            $('#headline').val('')
            CKEDITOR.instances.firstText.setData('');
            CKEDITOR.instances.lastText.setData('');

        });


        


        // $('.protected_link').on('change', function(){
        //     if ($(this).is(':checked')) {
        //         $('.password_protected_link').css({'display':''});
        //     }else{
        //         $('.password_protected_link').css({'display':'none'});
        //     }
        // });

        $("#published_ques").on('click',function(e){
            
            var formData = new FormData($('#questionairsForm')[0]);
            
            var language = [];
            var selectedOption = [];
            var firstTextdata = CKEDITOR.instances.firstText.getData();

            var lastTextdata = CKEDITOR.instances.lastText.getData();
          
            $.each($(".laguage_data").prop("selectedIndex", 0), function(){
                language.push($(this).val()); 
            });


            $.each ($(".laguage_data option:selected"), function(){              
                selectedOption.push($(this).val());  
            }); 
            console.log('select option=========',selectedOption)

            formData.append('language', language);
            formData.append('published', 1);
            formData.append('urlLink','start-survey')
            formData.append('langSelectedOption',selectedOption);
            formData.append('start_page_field', firstTextdata);
            formData.append('last_page_field', lastTextdata);
        
            console.log('form data=',formData)
            
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                type:"POST",
                url: "{{ url('store-questionairs') }}",
                // dataType: 'json',
                data: formData,
                cache:false,
                processData: false,
                contentType: false,
                success: function(response){
                    console.log('response', response)
                    if(response.errors){
                        $('.questionair-error').text(response.errors.questionair)
                        $('.base-color-error').text(response.errors.base_color)
                        $('.btn-bkgound-error').text(response.errors.button_backgound)
                        $('.btn-text-error').text(response.errors.button_text)
                        $('.first-page-picture-error').text(response.errors.first_page_picture)
                        $('.last-page-picture-error').text(response.errors.last_page_picture)
                        $('.idle-timer-error').text(response.errors.idle_timer)
                        $('.headline-error').text(response.errors.headline)
                        $('.start-page-field-error').text(response.errors.start_page_field)
                        $('.last-page-field-error').text(response.errors.last_page_field)
                        $('.last-page-timer-error').text(response.errors.last_page_timer)
                        $('.year-error').text(response.errors.year)
                        e.preventDefault()
                    }
                    if(response.ques_errors){
                        $('.ques-year-error').text(response.ques_errors)
                        e.preventDefault()
                    }
                    if(response.success== true){
                        alert(response.message);
                        // $('.message_show').css({'display':''});
                        // $('.message_alert').text(message)
                        window.location.href = '{!! route("dashboard") !!}'
                        // window.location.reload(); 
                        <?= langSessionDestroy() ?>
                    } 
                },
                // error:function (response) {
                //     console.log('RESPONSE',response);  
                //     const errors = response.responseJSON.errors;
                //     let errorHtml = '<ul>';
                //     for(let key in errors) {
                //         errorHtml += '<li>'+errors[key][0]+'</li>';
                //     }
                //     errorHtml += '</ul>';
                //     $('#customer_name_error').html(errorHtml);
                //     },
            });
                
    
        });
        

        $('#safe_questionairs').on('click', function(e){
        
            var formData = new FormData($('#questionairsForm')[0]);
            
            var language = [];
            var selectedOption = [];
            var firstTextdata = CKEDITOR.instances.firstText.getData();

            var lastTextdata = CKEDITOR.instances.lastText.getData();
          
            $.each($(".laguage_data").prop("selectedIndex", 0), function(){
                language.push($(this).val()); 
            });


            $.each ($(".laguage_data option:selected"), function(){              
                selectedOption.push($(this).val());  
            }); 
            console.log('select option=========',selectedOption)

            formData.append('language', language);
            formData.append('published', 0);
            formData.append('langSelectedOption',selectedOption);
            formData.append('start_page_field', firstTextdata);
            formData.append('last_page_field', lastTextdata);
        
            console.log('form data=',formData)
            
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                type:"POST",
                url: "{{ url('store-questionairs') }}",
                // dataType: 'json',
                data: formData,
                cache:false,
                processData: false,
                contentType: false,
                success: function(response){
                    console.log('response', response)
                    if(response.errors){
                        $('.questionair-error').text(response.errors.questionair)
                        $('.base-color-error').text(response.errors.base_color)
                        $('.btn-bkgound-error').text(response.errors.button_backgound)
                        $('.btn-text-error').text(response.errors.button_text)
                        $('.first-page-picture-error').text(response.errors.first_page_picture)
                        $('.last-page-picture-error').text(response.errors.last_page_picture)
                        $('.idle-timer-error').text(response.errors.idle_timer)
                        $('.headline-error').text(response.errors.headline)
                        $('.start-page-field-error').text(response.errors.start_page_field)
                        $('.last-page-field-error').text(response.errors.last_page_field)
                        $('.last-page-timer-error').text(response.errors.last_page_timer)
                        $('.year-error').text(response.errors.year)
                        e.preventDefault()
                    }
                    if(response.ques_errors){
                        $('.ques-year-error').text(response.ques_errors)
                        e.preventDefault()
                    }
                    if(response.success== true){
                        alert(response.message);
                        // $('.message_show').css({'display':''});
                        // $('.message_alert').text(message)
                        window.location.href = '{!! route("dashboard") !!}'
                        // window.location.reload(); 
                        <?= langSessionDestroy() ?>
                    } 
                },
                // error:function (response) {
                //     console.log('RESPONSE',response);  
                //     const errors = response.responseJSON.errors;
                //     let errorHtml = '<ul>';
                //     for(let key in errors) {
                //         errorHtml += '<li>'+errors[key][0]+'</li>';
                //     }
                //     errorHtml += '</ul>';
                //     $('#customer_name_error').html(errorHtml);
                //     },
            });
                
        });
    });


</script>
@endpush
