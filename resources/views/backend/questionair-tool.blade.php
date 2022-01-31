@extends('layouts.main')

@section('title','Questionair Tool')

@section('content')

{{--
<div class="main-panel">
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-absolute fixed-top navbar-transparent">
        <div class="container-fluid">
            <div class="navbar-wrapper">
                <div class="navbar-toggle">
                    <button type="button" class="navbar-toggler">
                        <span class="navbar-toggler-bar bar1"></span>
                        <span class="navbar-toggler-bar bar2"></span>
                        <span class="navbar-toggler-bar bar3"></span>
                    </button>
                </div>
            </div>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation"
                aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-bar navbar-kebab"></span>
                <span class="navbar-toggler-bar navbar-kebab"></span>
                <span class="navbar-toggler-bar navbar-kebab"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navigation">

                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link btn-magnify" href="javascript:;">
                            <p class=" d-md-block">Leonid Monastyrski</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link btn-magnify" href="javascript:;">
                            <i class="nc-icon nc-globe"></i>
                            <p>
                                <span class="d-lg-none d-md-block">Stats</span>
                            </p>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link btn-rotate" href="javascript:;">
                            <i class="nc-icon nc-settings-gear-65"></i>
                            <p>
                                <span class="d-lg-none d-md-block">Account</span>
                            </p>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav> --}}
    <!-- End Navbar -->
   
    <div class="content quereszz">
        <div class="alert alert-success" role="alert" style="display: none;"> Question Added Successfully!</div>
        <div class="row">
            <div class="col-md-12">
                <h1>Questionair Development</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-md-9">
                <ul class="pagesss mb-5">
                    <li>Page</li>
                    <li><a href="">1</a></li>
                    <li><a href="">2</a></li>
                    <li><a href="" class="active">3</a></li>
                    <li><a href="">4</a></li>
                    <li><a href="">+Add</a></li>
                </ul>
                <ul class="pagesss mb-3">
                    <li>Current Questions</li>
                </ul>
                <div class="row">
                    <div class="col-md-12">
                        <div class="card table-new">
                            <div class="card-body">
                                <table class="table">
                                    <thead class="text-primary">
                                        <tr>
                                            <th>Number </th>
                                            <th>Question Name </th>
                                            <th>Question Type </th>
                                            <th>Sort</th>
                                            <th>Delete</th>
                                        </tr>
                                    </thead>
                                      
                                    <tbody>
                                        @foreach($questions as $key=>$ques)
                                        <tr>
                                            <td> {{$key+1}}</td>
                                            <td>{{$ques->question}} </td>
                                            <td> {{$ques->questiontype->title}} </td>
                                            <td class="text-center">
                                                <i class="fa fa-angle-up d-block" aria-hidden="true"></i>
                                                <i class="fa fa-angle-down d-block" aria-hidden="true"></i>
                                            </td>
                                             <td class="text-center">
                                                <a href="{{ route('questionairs.delete', $ques->id) }}" class="button delete-confirm"><i class="fa fa-trash" aria-hidden="true"></i></a>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
                <ul class="pagesss mb-3">
                    <li>Add New Question</li>
                </ul>
                <div class="row">
                    <div class="col-md-12">
                        <div class="card table-new">
                            <div class="card-body">
                                <table class="table">
                                    <thead class="text-primary">
                                        <tr>
                                            <th>Question Type Name </th>
                                            <th>Question Type </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Scalar Question</td>
                                            <td>Skalar </td>
                                        </tr>
                                        <tr>
                                            <td>Multiple Choice Question</td>
                                            <td>Single </td>
                                        </tr>
                                        <tr>
                                            <td>Single Choice Question</td>
                                            <td>Multi </td>
                                        </tr>
                                        <tr>
                                            <td>Open Question</td>
                                            <td>Multi </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <ul class="pagesss mb-3">
                    <li>Load Question</li>
                </ul>
                    <div class="form-group has-search">
                        <span class="fa fa-search form-control-feedback"></span>
                        <input type="text" class="form-control"  id='questioner_search' name="questioner_search" placeholder="Search Question">
                    </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="card table-new">
                            <div class="card-body">
                                <div id="product_list"></div>
                                <table class="table" id="skjs">
                                    <thead class="text-primary">
                                        <tr>
                                            <th>Question Name </th>
                                            <th>Question Type </th>
                                            <th>Languages</th>
                                            <th>Answers</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($questions as $key=>$ques)                       
                                        <tr>
                                            <td>{{$ques->question}} </td>
                                            <td> {{$ques->questiontype->title}} </td>
                                            <td> {{$ques->language}} </td>
                                            <td> {{$ques->questiontype->ans}} </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <button class="custom-button"><i class="fa fa-pencil" aria-hidden="true"></i> Start
                    Edit</button>
                <!-- <button class="custom-button"><i class="fa fa-floppy-o" aria-hidden="true"></i> Safe Draft</button> -->
                <button class="custom-button" id="safe_question"><i class="fa fa-floppy-o" aria-hidden="true"></i> Safe Draft</button>
                <button class="custom-button"><i class="fa fa-trash" aria-hidden="true"></i> Delete
                    Draft</button>
            </div>
        </div>
        <!--Start Multiple Choice Question-->

        <form action="{{route('questionairs.save')}}" method="POST"  id="addform">
            {{csrf_field()}}

        <div class="row w-100">
            <div class="col-md-12">
                <h3 class="hednged">Question Editing Panel</h3>
            </div>
            <div class="col-md-9">
                <h4 class="hedngead">Multiple Choice Question</h3>
            </div>
            <div class="col-md-3">
                <button class="custom-button" type="submit"><i class="fa fa-floppy-o" aria-hidden="true"></i> Save
                Question</button>
            </div>
            <div class="col-md-3">
                <div class="w-100 mb-2">
                    <label for="email" class=""> Add Language</label>

                    <div class="add_field_set" >
                        <select class="form-control mb-3 laguage_data" name="language" data-index="1" id="s1">
                            <option value="">Select Language</option>
                            @if(isset($languages) && $languages != null)
                                @foreach($languages as $language) 
                                    <option value="{{ $language->language_code }}" data-i="{{$language->language}}">  {{ $language->language}}  </option>
                                @endforeach
                            @endif
                        </select>
                        <div class="change_button">
                            <a href="#" class="adds mb-4" id="add_languages" data-section="1">+ Add</a>
                        </div>
                    </div>

                    <div class="w-100 mt-4 mb-2">
                        <label for="email" class="">Dependencies</label>
                        <select class="form-control mb-3" name="">
                            <option>Only Appears if Answer Checked</option>
                            <option>Only Appears if Answer</option>
                            <option>Unchecked</option>
                            <option>No Dependcy</option>
                        </select>
                    </div>
                    <div class="w-100 mt-4 mb-2">
                        <label for="email" class="">Select Dependend Answer</label>
                        <select class="form-control mb-3" name="dependent_answer" id="dependent_answer">
                            <option value="">Select</option>
                            <option value="Q22 Female">Q22 Female</option>
                            <option value="Q02 First Time Visitor">Q02 First Time Visitor</option>
                            <option value="Q15 From the sourronding">Q15 From the sourronding</option>
                        </select>
                    </div>
                    <div class="w-100 mt-4 mb-2">
                        <label for="email" class="">Maximum Answers</label>
                        <input type="text" class="form-control mb-2 mr-sm-2" placeholder="4" id="email">
                    </div>
                    <div class="w-100 mt-4 mb-2">
                        <label for="email" class="">Mandatory Question</label>
                        <div class="wrappers">
                            <input id="checkbox" type="checkbox" class="checkbox hidden" />
                            <label class="switchbox" for="checkbox"></label>
                        </div>
                    </div>
                    <div class="w-100 mt-4 mb-2">
                        <label for="email" class="">Open Text Field Answer</label>
                        <div class="wrappers">
                            <input id="checkbox2" type="checkbox" class="checkbox hidden" />
                            <label class="switchbox" for="checkbox2"></label>
                        </div>
                    </div>

                </div>
            </div>
            <div class="col-md-9 mt-3 pt-1">

                <div class="w-100 mb-4">
                    <label for="email" class="w-100"> Question Name</label>
                    <input type="text" class="form-control has-search mb-2 d-inline-block" id="question" name="question">
                    <!-- <span><p class="question-name-error text-danger"></p></span> -->
                    <input type="hidden" class="form-control has-search mb-2 d-inline-block" value="std_qns" name="std_qns">
                     <input type="hidden" class="form-control has-search mb-2 d-inline-block" value="1" 
                     name="question_type_id" >
                    <i class="fa fa-star color-dd" aria-hidden="true"></i>
                </div>
               <!--  <div class="w-100 mb-4">
                    <label for="email" class=""> Display Text</label>
                    <input type="text" class="form-control mb-2" name="display_text" value="">
                </div> -->
                <!-- <div class="form-group has-search">
                    <span class="fa fa-search form-control-feedback"></span>
                    <input type="text" class="form-control" placeholder="Search Question">
                </div> -->
                <table class="table table-borderless table-scroll mt-3 mb-0" id="productTable">
                    <thead>

                        <tr>
                            <th scope="col">&nbsp;</th>
                            <th scope="col">Answers Name</th>
                            <th scope="col">Display Text</th>
                            <th scope="col">Order</th>
                            <th scope="col">Delete</th>
                            <th scope="col">Dependency</th>
                            <th scope="col">Standard</th>

                        </tr>
                    </thead>
                    <tbody id="add_more">
                        <tr>
                            <td> 1 </td>
                            <td><input type="text"  class="form-control answer" placeholder="" name="answer[]" /></td>
                            <td><input type="text" class="form-control display_text" placeholder="" name="display_text[]" ></td>

                            <td class="text-center">
                                <i class="fa fa-angle-up d-block" aria-hidden="true"></i>
                                <i class="fa fa-angle-down d-block" aria-hidden="true"></i>
                            </td>
                            <td class="text-center">
                                <p class="remove"><i class="fa fa-trash" aria-hidden="true"></i></p>
                            </td>
                            <td class="text-center"> <i class="fa fa-link" aria-hidden="true"></i></td>
                            <td class="text-center"> <i class="fa fa-star" aria-hidden="true"></i></td>
                        </tr>

                    </tbody>

                </table>
                <button class="btndfd" id="addMore">+ Add</button>
            </div>
        </div>
        </form>
        <!--End Multiple Choice Question-->

        <!--Start Single Choice Question-->
        <!-- <form action="{{route('questionairs.save')}}" method="POST"  id="addsingleform">
            {{csrf_field()}}
        <div class="row w-100 mt-5 mb-5">
            <div class="col-md-9">
                <h4 class="hedngead">Single Choice Question</h3>
            </div>
            <div class="col-md-3"><button class="custom-button"><i class="fa fa-floppy-o" aria-hidden="true"></i> Save
                Question</button></div>
            <div class="col-md-3">
                <div class="w-100 mb-2">
                    <label for="email" class=""> Add Language</label>
                    <div class="add_field_set" >
                        <select class="form-control mb-3 laguage_data" name="language" data-index="1" id="s1">
                            <option value="">Select Language</option>
                            @if(isset($languages) && $languages != null)
                                @foreach($languages as $language) 
                                    <option value="{{ $language->language_code }}" data-i="{{$language->language}}">  {{ $language->language}}  </option>
                                @endforeach
                            @endif
                        </select>
                        <div class="change_button">
                            <a href="#" class="adds mb-4" id="single_add_languages" data-section="1">+ Add</a>
                        </div>
                    </div>
        

                    <div class="w-100 mt-4 mb-2">
                        <label for="email" class="">Dependencies</label>
                        <select class="form-control mb-3">
                            <option>Only Appears if Answer Checked</option>
                            <option>Only Appears if Answer</option>
                            <option>Unchecked</option>
                            <option>No Dependcy</option>
                        </select>
                    </div>
                    <div class="w-100 mt-4 mb-2">
                        <label for="email" class="">Select Dependend Answer</label>
                        <select class="form-control mb-3">
                            <option>Q22 Female</option>
                            <option>Q02 First Time Visitor</option>
                            <option>Q15 From the sourronding</option>
                        </select>
                    </div>
                    <div class="w-100 mt-4 mb-2">
                        <label for="email" class="">Mandatory Question</label>
                        <div class="wrappers">
                            <input id="checkbox" type="checkbox" class="checkbox hidden" />
                            <label class="switchbox" for="checkbox"></label>
                        </div>
                    </div>
                    <div class="w-100 mt-4 mb-2">
                        <label for="email" class="">Open Text Field Answer</label>
                        <div class="wrappers">
                            <input id="checkbox2" type="checkbox" class="checkbox hidden" />
                            <label class="switchbox" for="checkbox2"></label>
                        </div>
                    </div>

                </div>
            </div>
            <div class="col-md-9 mt-3 pt-1">

                <div class="w-100 mb-4">
                    <label for="email" class="w-100"> Question Name</label>
                    <input type="text" class="form-control has-search mb-2 d-inline-block" placeholder="" 
                    name="question"  id="question">
                    <input type="hidden" class="form-control has-search mb-2 d-inline-block" value="std_qns" name="std_qns">
                     <input type="hidden" class="form-control has-search mb-2 d-inline-block" value="2" 
                     name="question_type_id" >
                    <i class="fa fa-star color-dd" aria-hidden="true"></i>
                </div>

                <div class="w-100 mb-4">
                    <label for="email" class=""> Display Text</label>
                    <input class="form-control mb-2" placeholder="" type="text" name="single_display_text" 
                    id="single_display_text">
                </div>
                <div class="form-group has-search">
                    <span class="fa fa-search form-control-feedback"></span>
                    <input type="text" class="form-control" placeholder="Search Question">
                </div>
                <table class="table table-borderless table-scroll mt-3 mb-0" id="productTable">
                    <thead>

                        <tr>
                            <th scope="col">&nbsp;</th>
                            <th scope="col">Answers Name</th>
                            <th scope="col">Display Text</th>
                            <th scope="col">Order</th>
                            <th scope="col">Delete</th>
                            <th scope="col">Dependency</th>
                            <th scope="col">Standard</th>

                        </tr>
                    </thead>
                    <tbody id="addSingleChoice">
                        <tr>
                            <td>1</td>
                            <td><input type="text" class="form-control single-ans" placeholder="sdsd" 
                                name="single_answer[]" id=""></td>
                            <td><input type="text" class="form-control" placeholder="ggg" name="single_display_text[]" id=""></td>
                            <td class="text-center">
                                <i class="fa fa-angle-up d-block" aria-hidden="true"></i>
                                <i class="fa fa-angle-down d-block" aria-hidden="true"></i>
                            </td>
                            <td class="text-center">
                                <p class="remove"><i class="fa fa-trash" aria-hidden="true"></i></p>
                            </td>
                            <td class="text-center"> <i class="fa fa-link" aria-hidden="true"></i></td>
                            <td class="text-center"> <i class="fa fa-star" aria-hidden="true"></i></td>
                        </tr>

                    </tbody>

                </table>
                <button class="btndfd" id="single_choice">+ Add</button>
            </div>
        </div>
    </form> -->
        <!--Single Choice Question-->

    </div>

</div>

@endsection

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"> </script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script type="text/javascript">
    $(document).on("click",".delete-confirm",function(){
        event.preventDefault();
        const url = $(this).attr('href');
        swal({
            title: 'Are you sure?',
            text: 'This record and it`s details will be permanantly deleted!',
            icon: 'warning',
            buttons: ["Cancel", "Yes!"],
        }).then(function(value) {
            if (value) {
                window.location.href = url;
            }
        });
    });

    $(document).ready(function(){
        $.ajaxSetup({
          headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          }
        });
        $("#questioner_search").keyup(function(){
            var search = $(this).val();
            $.ajax({
                url:"{{route('questionairs.search')}}",
                type: 'post',
                dataType: "json",
                data: {
                   search: search
                },
                success: function( data ) {
                    console.log(data);
                    $("#skjs").hide();
                    $('#product_list').html(data);
                }
            });
        });
    });


    jQuery(document).ready(function(){
        $('#addform').on('submit',function(e){
            e.preventDefault();
            $.ajax({
                type:"POST",
                url: "{{ url('save-questionairs') }}",
                data:$('#addform').serialize(),
                dataType: 'json', 
                success:function(response){
                    console.log(response)
                    $('.alert-success').show()
                },
            });
        });

       /* $('#addsingleform').on('submit',function(e){
            e.preventDefault();
            $.ajax({
                type:"POST",
                url: "{{ url('save-questionairs') }}",
                data:$('#addsingleform').serialize(),
                dataType: 'json', 
                success:function(response){
                    console.log(response)
                    $('.alert-success').show()
                },
            });
        });*/
    });

 
    $(document).on("click","#add_languages",function(){
        var sectionCount = $(this).data('section') 
        var upSection = parseInt(sectionCount)+1;
        $(this).data('section',upSection);

        var answer = $('answer').val();
        var question = $('#question').val();
        var display_text = $('#display_text').val();
        var dependent_answer = $('#dependent_answer').val();

        var selectedValue =  $("#s"+sectionCount).val();
        var langSelect = $("#s"+sectionCount).prop("selectedIndex", 0).val();
        if($("#s"+sectionCount).val()=='' ){
            alert("Please Select any Language");
            return;
        }
        if(($('#question').val() == '' || ($('#answer').val() == '' ) || ($('#display_text').val() == '' ))){
            alert(" Question Name, Answer Name and Display Text are required")
            return;
        }
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
        $(".add_field_set").last().after(html);
    });


    
    $(document).on("click","#safe_question",function(){
        var formData = new FormData($('#addform')[0]);
        var language = [];
        var selectedOption = [];
        $.each($(".laguage_data").prop("selectedIndex", 0), function(){
            language.push($(this).val()); 
        });
        $.each ($(".laguage_data option:selected"), function(){              
            selectedOption.push($(this).val());  
        }); 
        console.log('select option=========',selectedOption)
        formData.append('language', language);
        //formData.append('published', 0);
        formData.append('langSelectedOption',selectedOption);
       // console.log('form data=',formData)
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            type:"POST",
           // url: "{{ url('store-questionairs') }}",
            data: formData,
            cache:false,
            processData: false,
            contentType: false,
            success: function(response){
                console.log('response', response)
                if(response.errors){
                    $('.question-name-error').text(response.errors.questionair)
                    e.preventDefault()
                }
                if(response.ques_errors){
                    $('.ques-year-error').text(response.ques_errors)
                    e.preventDefault()
                }
                if(response.success== true){
                    alert(response.message);
                    window.location.reload(); 
                    <?= langSessionDestroy() ?>
                } 
            },
        });       
    });

</script>