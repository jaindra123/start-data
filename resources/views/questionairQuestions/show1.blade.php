@extends('layouts.main')
@section('title','Questionair Tool')
@section('content')
@push('css-script')

<style>
    .displayClass{
        display: none;
    }
</style>
@endpush('css-script')
<div class="content quereszz">
    <div class="row">
        <div class="col-md-12">
            <h1>Questionair Development</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-md-9">
            <ul class="pagesss mb-5">
                <li>Page</li>
                <li><a href="javascript:void(0);" class="active pageno" data-page="1" >1</a></li>
                <li><a href="javascript:void(0);">2</a></li>
                <li><a href="javascript:void(0);" class="">3</a></li>
                <li><a href="javascript:void(0);">4</a></li>
                <li><a href="javascript:void(0);">+Add</a></li>
            </ul>

                <!-- Questionair Id, page number store in hidden input-->
                    <input type="hidden" name="questionairId" id="questionairId" value="{{$data['questionairId']}}">
                    <input type="hidden" name="pageNumber" id="pageNumber" value="{{$data['pagNo']}}">

                <!-- Current Add Question -->
            @if(sizeof($data['question']) != 0)
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
                                        @php
                                            $quesTypeTitle= '';
                                        @endphp
                                        @foreach($data['question'] as $i)
                                            <tr>
                                                <td>{{$i->questionId}}</td>
                                                <td>{{$i->questionName}} </td>
                                                @foreach($data['questionType'] as $j)
                                                
                                                    @php
                                                        if($i->quesTypeId == $j->id){
                                                           
                                                            $quesTypeTitle = $j->title;
                                                        }
                                                    @endphp
                                                @endforeach
                                                <td>{{$quesTypeTitle}} </td>
                                                <td class="text-center">
                                                    <i class="fa fa-angle-up d-block" aria-hidden="true"></i>
                                                    <i class="fa fa-angle-down d-block" aria-hidden="true"></i>
                                                </td>
                                                <td class="text-center"> <i class="fa fa-trash" aria-hidden="true"></i></td>
                                            </tr>
                                        @endforeach
                                        <!-- <tr>
                                            <td>23</td>
                                            <td>Which other exhibition are you planning to visit? </td>
                                            <td>Multi </td>
                                            <td class="text-center">
                                                <i class="fa fa-angle-up d-block" aria-hidden="true"></i>
                                                <i class="fa fa-angle-down d-block" aria-hidden="true"></i>
                                            </td>
                                            <td class="text-center"> <i class="fa fa-trash" aria-hidden="true"></i></td>
                                        </tr>
                                        <tr>
                                            <td>24</td>
                                            <td>How did you like the exhibition? </td>
                                            <td>Scala </td>
                                            <td class="text-center"> 
                                                <i class="fa fa-angle-up d-block" aria-hidden="true"></i>
                                                <i class="fa fa-angle-down d-block" aria-hidden="true"></i>
                                            </td>
                                            <td class="text-center"> <i class="fa fa-trash" aria-hidden="true"></i></td>
                                        </tr>
                                        <tr>
                                            <td>25</td>
                                            <td>Do you have any feedback for future Exhibitions? </td>
                                            <td>Open </td>
                                            <td class="text-center">
                                                <i class="fa fa-angle-up d-block" aria-hidden="true"></i>
                                                <i class="fa fa-angle-down d-block" aria-hidden="true"></i>
                                            </td>
                                            <td class="text-center"> <i class="fa fa-trash" aria-hidden="true"></i></td>
                                        </tr> -->
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            @endif
                <!-- End Current Add Question -->

                <!--  Add New Question -->
            <ul class="pagesss mb-3">
                <li class="addNewQuestionType" data-toggle="modal" data-target=""> Add New Question</li>
            </ul>
            @if(($data['questionType'] != ''))
                <div class="row show_question_type" >
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
                                            @foreach($data['questionType'] as $col)
                                               
                                            <tr>
                                                <td> <span class="questionTypeTitle" data-index="{{$col->title}}" data-main_value="{{$col->title}}" data-value="{{$col->id}}"> {{$col->title}}</span></td>
                                                <input type="hidden" name="questionairIdTypeID[]" value="{{$col->id}}" class="questionairandTypeSelectedId">
                                                <input type="hidden" name="quesTypeID[]" value="{{$col->id}}" class="quesTypeSelectedId">

                                                <td>{{$col->short_code}} </td>
                                            </tr>

                                        @endforeach
                                       
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            @endif
                <!-- End  Add New Question -->

                <!-- Load Question -->
            <ul class="pagesss mb-3">
                <li>Load Question</li>
            </ul>
            <div class="form-group has-search search-display" style="display: none;">
                <span class="fa fa-search form-control-feedback"></span>
                <input type="text" class="form-control" placeholder="Search Question">
            </div>
            <div class="row load_question" style="display: none;">
                <div class="col-md-12">
                    <div class="card table-new">
                        <div class="card-body">
                            <table class="table">
                                <thead class="text-primary">
                                    <tr>
                                        <th>Question  Name </th>
                                        <th>Question Type </th>
                                        <th>Languages</th>
                                        <th>Answers</th>
                                    </tr>
                                </thead>
                                <tbody class="load_question_data">
                                    
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
                <!-- End Load Question -->

        </div>
        <div class="col-md-3">
            <button class="custom-button"><i class="fa fa-pencil" aria-hidden="true"></i> Global Setting</button>
            <button class="custom-button"><i class="fa fa-floppy-o" aria-hidden="true"></i> Safe Draft</button>
            <button class="custom-button"><i class="fa fa-trash" aria-hidden="true"></i> Delete Page</button>
        </div>
    </div>
    @if($data['questionairWithType'] != '') 
        <!--Start Multiple Choice Question-->   
            @foreach($data['questionairWithType'] as $row)
                @if($row->ques_type_id == 1)
                    <div class="row w-100 questionTypeEditPannel{{$row->ques_type_id}}" style="display: none;">
                        <div class="col-md-12">
                            <h3 class="hednged">Question Editing Panel</h3>
                        </div>
                        <div class="col-md-9">
                            <h4 class="hedngead">
                            Multiple Choice Question</h3>
                        </div>
                        <div class="col-md-3"><button class="custom-button saveQuestion" data-value="{{$row->id}}" data-index="{{$row->ques_type_id}}" id="save_question{{$row->id}}"><i class="fa fa-floppy-o" aria-hidden="true"></i> Save Question</button></div>
                        <div class="col-md-3">
                            <div class="w-100 mb-2">
                                <label for="email" class=""> Add Language</label>
                                @if(sizeof($data['questionair']) > 0 )
                                    <select class="form-control mb-3 language lang_{{$row->id}}{{$data['questionair'][0]->language_id}} l_{{$row->ques_type_id}}" data-index="{{$data['questionair'][0]->language_id}}" data-v="{{$row->id}}" data-quest="{{$row->ques_type_id}}">
                                    @foreach($data['language'] as $col)
                                        @php
                                            if($col->id == $data['questionair'][0]->language_id){
                                                $langdata = $col->language;
                                                $langdataId = $col->id;
                                            }
                                        @endphp
                                    @endforeach
                                        <option value="{{$langdataId}}">{{$langdata}}</option>
                                        <option value="delete">Delete</option>
                                        <option value="deactivate">Deactivate</option>
                                    </select>
                                @endif

                                @if(!empty($data['questionair'][0]['quesLanguage']) )
                                    @foreach($data['questionair'][0]['quesLanguage'] as $row_)          
                                        @foreach($data['language'] as $col)
                                                @php
                                                    if($col->id == $row_->language_id){
                                                        $langdata = $col->language;
                                                        $langdataId = $col->id;
                                                    }
                                                @endphp
                                        @endforeach
                                        <select class="form-control mb-3 language lang_{{$row->id}}{{$row_->language_id}} l_{{$row->ques_type_id}}" data-index="{{$row_->language_id}}" data-v="{{$row->id}}" data-quest="{{$row->ques_type_id}}">
                                            <option value="{{$langdataId}}" >{{$langdata}}</option>
                                            <option value="delete">Delete</option>
                                            <option value="deactivate" >Deactivate</option>
                                        </select>
                                    @endforeach
                                @endif
                                <!-- <a href="#" class="adds mb-4">+ Add</a> -->
                                <div class="w-100 mt-4 mb-2">
                                    <label for="email" class="">Dependencies</label>
                                    <select  class="form-control mb-3">
                                        <option>Only Appears if Answer Checked</option>
                                        <option>Only Appears if Answer</option>
                                        <option>Unchecked</option>
                                        <option>No Dependcy</option>
                                    </select>
                                </div>
                                <div class="w-100 mt-4 mb-2">
                                    <label for="email" class="">Select Dependend Answer</label>
                                    <select  class="form-control mb-3">
                                        <option>Q22 Female</option>
                                        <option>Q02 First Time Visitor</option>
                                        <option>Q15 From the sourronding</option>
                                    </select>
                                </div>
                                <div class="w-100 mt-4 mb-2">
                                    <label for="email" class="">Maximum Answers</label>
                                    <input type="text" class="form-control mb-2 mr-sm-2" placeholder="4" id="email">
                                </div>
                                <div class="w-100 mt-4 mb-2">
                                    <label for="email" class="">Mandatory Question</label>
                                    <div class="wrappers">
                                        <input id="checkbox4" type="checkbox" class="checkbox hidden" />
                                        <label class="switchbox" for="checkbox4"></label>
                                    </div>
                                </div>
                                <div class="w-100 mt-4 mb-2">
                                    <label for="email" class="">Open Text Field Answer</label>
                                    <div class="wrappers">
                                        <input id="checkbox5" type="checkbox" class="checkbox hidden" />
                                        <label class="switchbox" for="checkbox5"></label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-9 mt-3 pt-1 editPannel" id="question_{{$row->ques_type_id}}{{$data['questionair'][0]->language_id}}">
                            <div class="w-100 mb-4">
                                <label for="email" class="w-100"> Question Name</label>
                                <input type="email" class="form-control has-search mb-2 d-inline-block" placeholder="" id="email"> <i class="fa fa-star color-dd" aria-hidden="true"></i>
                            </div>
                            <div class="w-100 mb-4">
                                <label for="email" class=""> Display Text</label>
                                <input class="form-control mb-2" placeholder="">
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
                                <tbody id="addee">
                                    <tr>
                                        <td>
                                            1
                                        </td>
                                        <td><input type="text" class="form-control" placeholder=""></td>
                                        <td><input type="text" class="form-control" placeholder=""></td>
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
                            <button class="btndfd" id="addProduct">+ Add</button>    
                        </div>
                        @if(isset($data['questionair'][0]['quesLanguage']))

                            @foreach($data['questionair'][0]['quesLanguage'] as $i)
                            <div class="col-md-9 mt-3 pt-1 editPannel" id="question_{{$row->ques_type_id}}{{$i->language_id}}" style="display: none;">
                            <div class="w-100 mb-4">
                                <label for="email" class="w-100"> Question Name</label>
                                <input type="email" class="form-control has-search mb-2 d-inline-block" placeholder="" id="email"> <i class="fa fa-star color-dd" aria-hidden="true"></i>
                            </div>
                            <div class="w-100 mb-4">
                                <label for="email" class=""> Display Text</label>
                                <input class="form-control mb-2" placeholder="">
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
                                <tbody id="addee">
                                    <tr>
                                        <td>
                                            1
                                        </td>
                                        <td><input type="text" class="form-control" placeholder=""></td>
                                        <td><input type="text" class="form-control" placeholder=""></td>
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
                            <button class="btndfd" id="addProduct">+ Add</button>    
                        </div>
                            @endforeach
                        @endif

                    </div>
                @endif
                <!--End Multiple Choice Question--> 

                @if($row->ques_type_id == 2)
                    <!--Start Single Choice Question-->       
                    <div class="row w-100 mt-5 mb-5 questionTypeEditPannel{{$row->ques_type_id}}"  style="display: none;">
                        <div class="col-md-12">
                            <h3 class="hednged">Question Editing Panel</h3>
                        </div>
                        <div class="col-md-9">
                            <h4 class="hedngead">
                            Single Choice Question</h3>
                        </div>
                        <div class="col-md-3"><button class="custom-button"><i class="fa fa-floppy-o" aria-hidden="true"></i> Save Question</button></div>
                        <div class="col-md-3">
                            <div class="w-100 mb-2">
                                <label for="email" class=""> Add Language</label>
                                @if(sizeof($data['questionair']) > 0 )
                                <select class="form-control mb-3">
                                @foreach($data['language'] as $col)
                                    @php
                                        if($col->id == $data['questionair'][0]->language_id){
                                            $langdata = $col->language;
                                            $langdataId = $col->id;
                                        }
                                    @endphp
                                @endforeach
                                    <option value="{{$langdataId}}">{{$langdata}}</option>
                                    <option value="delete">Delete</option>
                                    <option value="deactivate">Deactivate</option>
                                </select>
                            @endif

                            @if(!empty($data['questionair'][0]['quesLanguage']) )
                                @foreach($data['questionair'][0]['quesLanguage'] as $row)          
                                    @foreach($data['language'] as $col)
                                            @php
                                                if($col->id == $row->language_id){
                                                    $langdata = $col->language;
                                                    $langdataId = $col->id;
                                                }
                                            @endphp
                                    @endforeach
                                    <select class="form-control mb-3">
                                        <option value="{{$langdataId}}" >{{$langdata}}</option>
                                        <option value="delete">Delete</option>
                                        <option value="deactivate">Deactivate</option>
                                    </select>
                                @endforeach
                            @endif
                                <a href="#" class="adds mb-4">+ Add</a>
                                <div class="w-100 mt-4 mb-2">
                                    <label for="email" class="">Dependencies</label>
                                    <select  class="form-control mb-3">
                                        <option>Only Appears if Answer Checked</option>
                                        <option>Only Appears if Answer</option>
                                        <option>Unchecked</option>
                                        <option>No Dependcy</option>
                                    </select>
                                </div>
                                <div class="w-100 mt-4 mb-2">
                                    <label for="email" class="">Select Dependend Answer</label>
                                    <select  class="form-control mb-3">
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
                                <input type="email" class="form-control has-search mb-2 d-inline-block" placeholder="" id="email"> <i class="fa fa-star color-dd" aria-hidden="true"></i>       
                            </div>
                            <div class="w-100 mb-4">
                                <label for="email" class=""> Display Text</label>
                                <input class="form-control mb-2" placeholder="">
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
                                <tbody id="addeed">
                                    <tr>
                                        <td>
                                            1
                                        </td>
                                        <td><input type="text" class="form-control" placeholder=""></td>
                                        <td><input type="text" class="form-control" placeholder=""></td>
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
                            <button class="btndfd" id="addProducts">+ Add</button>    
                        </div>
                    </div>
                    <!--Single Choice Question--> 
                @endif

                @if($row->ques_type_id == 5)
                    <!--Start Matrix Question-->       
                    <div class="row w-100 mt-5 mb-5 questionTypeEditPannel{{$row->ques_type_id}}"  style="display: none;">
                        <div class="col-md-12">
                            <h3 class="hednged">Question Editing Panel</h3>
                        </div>
                        <div class="col-md-9">
                            <h4 class="hedngead">
                            Matrix Question</h3>
                        </div>
                        <div class="col-md-3"><button class="custom-button"><i class="fa fa-floppy-o" aria-hidden="true"></i> Save Question</button></div>
                        <div class="col-md-3">
                            <div class="w-100 mb-2">
                                <label for="email" class=""> Add Language</label>
                                @if(sizeof($data['questionair']) > 0 )
                                    <select class="form-control mb-3">
                                    @foreach($data['language'] as $col)
                                        @php
                                            if($col->id == $data['questionair'][0]->language_id){
                                                $langdata = $col->language;
                                                $langdataId = $col->id;
                                            }
                                        @endphp
                                    @endforeach
                                        <option value="{{$langdataId}}">{{$langdata}}</option>
                                        <option value="delete">Delete</option>
                                        <option value="deactivate">Deactivate</option>
                                    </select>
                                @endif

                                @if(!empty($data['questionair'][0]['quesLanguage']) )
                                    @foreach($data['questionair'][0]['quesLanguage'] as $row)          
                                        @foreach($data['language'] as $col)
                                                @php
                                                    if($col->id == $row->language_id){
                                                        $langdata = $col->language;
                                                        $langdataId = $col->id;
                                                    }
                                                @endphp
                                        @endforeach
                                        <select class="form-control mb-3">
                                            <option value="{{$langdataId}}" >{{$langdata}}</option>
                                            <option value="delete">Delete</option>
                                            <option value="deactivate">Deactivate</option>
                                        </select>
                                    @endforeach
                                @endif
                                <a href="#" class="adds mb-4">+ Add</a>
                                <div class="w-100 mt-4 mb-2">
                                    <label for="email" class="">Dependencies</label>
                                    <select  class="form-control mb-3">
                                        <option>Only Appears if Answer Checked</option>
                                        <option>Only Appears if Answer</option>
                                        <option>Unchecked</option>
                                        <option>No Dependcy</option>
                                    </select>
                                </div>
                                <div class="w-100 mt-4 mb-2">
                                    <label for="email" class="">Select Dependend Answer</label>
                                    <select  class="form-control mb-3">
                                        <option>Q22 Female</option>
                                        <option>Q02 First Time Visitor</option>
                                        <option>Q15 From the sourronding</option>
                                    </select>
                                </div>
                                <div class="w-100 mt-4 mb-2">
                                    <label for="email" class="">Scala Length</label>
                                    <input type="text" class="form-control mb-2 mr-sm-2" placeholder="5" id="email">
                                </div>
                                <div class="w-100 mt-4 mb-2">
                                    <label for="email" class="">Mandatory Question</label>
                                    <div class="wrappers">
                                        <input id="checkbox" type="checkbox" class="checkbox hidden" />
                                        <label class="switchbox" for="checkbox"></label>
                                    </div>
                                </div>
                                <div class="w-100 mt-4 mb-2">
                                    <label for="email" class="">No Answer Option</label>
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
                                <input type="email" class="form-control has-search mb-2 d-inline-block" placeholder="" id="email"> <i class="fa fa-star color-dd" aria-hidden="true"></i>
                            </div>
                            <div class="w-100 mb-4">
                                <label for="email" class=""> Display Text</label>
                                <input class="form-control mb-2" placeholder="">
                            </div>
                            <div class="w-100 mb-4">
                                <label for="email" class=""> Scale Description</label>
                                <input class="form-control mb-2" placeholder="">
                            </div>
                            <div class="form-group has-search">
                                <label for="email" class=""> X-Axis Answer (Scale Answer, highest and lowest value)</label>
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
                                <tbody id="addee">
                                    <tr>
                                        <td>1</td>
                                        <td><input type="text" class="form-control" placeholder=""></td>
                                        <td><input type="text" class="form-control" placeholder=""></td>
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
                            <button class="btndfd" id="addProduct">+ Add</button>  
                            <div class="form-group has-search mt-4">
                                <label for="email" class=""> X-Axis Answer (Scale Answer, highest and lowest value)</label>
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
                                <tbody id="addee">
                                    <tr>
                                        <td>1 </td>
                                        <td><input type="text" class="form-control" placeholder=""></td>
                                        <td><input type="text" class="form-control" placeholder=""></td>
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
                            <button class="btndfd" id="addProduct">+ Add</button>    
                        </div>
                    </div>
                    <!--End Matrix Question--> 
                @endif

                @if($row->ques_type_id == 3)
                    <!--Start Open Question-->       
                    <div class="row w-100 mt-5 mb-5 questionTypeEditPannel{{$row->ques_type_id}}"  style="display: none;" >
                        <div class="col-md-12">
                            <h3 class="hednged">Question Editing Panel</h3>
                        </div>
                        <div class="col-md-9">
                            <h4 class="hedngead">
                            Open Question</h3>
                        </div>
                        <div class="col-md-3"><button class="custom-button saveQuestion" data-value="{{$row->id}}" data-index="{{$row->ques_type_id}}" id="save_question{{$row->id}}"><i class="fa fa-flopp-o" aria-hidden="true"></i> Save Question</button></div>
                        <div class="col-md-3">
                            <div class="w-100 mb-2">
                                <label for="email" class=""> Add Language</label>
                                @if(sizeof($data['questionair']) > 0 )
                                    <select class="form-control mb-3 language lang_{{$row->id}}{{$row->ques_type_id}}{{$data['questionair'][0]->language_id}} l_{{$row->ques_type_id}}" data-index="{{$data['questionair'][0]->language_id}}" data-v="{{$row->id}}" data-quest="{{$row->ques_type_id}}">
                                    @foreach($data['language'] as $col)
                                        @php
                                            if($col->id == $data['questionair'][0]->language_id){
                                                $langdata = $col->language;
                                                $langdataId = $col->id;
                                            }
                                        @endphp
                                    @endforeach
                                        <option value="{{$langdataId}}">{{$langdata}}</option>
                                        <option value="delete">Delete</option>
                                        <option value="deactivate">Deactivate</option>
                                    </select>
                                @endif

                                @if(!empty($data['questionair'][0]['quesLanguage']) )
                                    @foreach($data['questionair'][0]['quesLanguage'] as $row_)          
                                        @foreach($data['language'] as $col)
                                                @php
                                                    if($col->id == $row_->language_id){
                                                        $langdata = $col->language;
                                                        $langdataId = $col->id;
                                                    }
                                                @endphp
                                        @endforeach
                                        <select class="form-control mb-3 language lang_{{$row->id}}{{$row->ques_type_id}}{{$row_->language_id}} l_{{$row->ques_type_id}}" data-index="{{$row_->language_id}}" data-v="{{$row->id}}" data-quest="{{$row->ques_type_id}}">
                                            <option value="{{$langdataId}}" >{{$langdata}}</option>
                                            <option value="delete">Delete</option>
                                            <option value="deactivate" >Deactivate</option>
                                        </select>
                                    @endforeach
                                @endif
                              
                                <!-- <a href="#" class="adds mb-4">+ Add</a> -->
                                <div class="w-100 mt-4 mb-2">
                                    <label for="email" class="">Dependencies</label>
                                    <select  class="form-control mb-3">
                                        <option>Only Appears if Answer Checked</option>
                                        <option>Only Appears if Answer</option>
                                        <option>Unchecked</option>
                                        <option>No Dependcy</option>
                                    </select>
                                </div>
                                <div class="w-100 mt-4 mb-2">
                                    <label for="email" class="">Select Dependend Answer</label>
                                    <select  class="form-control mb-3">
                                        <option>Q22 Female</option>
                                        <option>Q02 First Time Visitor</option>
                                        <option>Q15 From the sourronding</option>
                                    </select>
                                </div>
                                <div class="w-100 mt-4 mb-2">
                                    <label for="email" class="">Answer Field Size (Rows)</label>
                                    <input type="text" class="form-control mb-2 mr-sm-2 answerSize{{$row->id}}{{$row->ques_type_id}}" value="1" placeholder="4" id="email">
                                </div>
                                <div class="w-100 mt-4 mb-2">
                                    <label for="email" class="">Mandatory Question</label>
                                    <div class="wrappers">
                                        <input id="checkbox" type="checkbox" class="checkbox mandatory{{$row->id}}{{$row->ques_type_id}} hidden" />
                                        <label class="switchbox" for="checkbox"></label>
                                    </div>
                                </div>
                                <div class="w-100 mt-4 mb-2">
                                    <label for="email" class="">Personal Data Question</label>
                                    <div class="wrappers">
                                        <input id="checkbox2" type="checkbox" class="checkbox personalQuestion p{{$row->id}}{{$row->ques_type_id}} hidden" data-index="{{$row->id}}{{$row->ques_type_id}}"  />
                                        <label class="switchbox" for="checkbox2"></label>
                                    </div>
                                </div>

                                <div class="w-100 mt-4 mb-2 personalQuestionTitle{{$row->id}}{{$row->ques_type_id}}" style="display: none;">
                                    <label for="email" class="">Personal Question Title</label>
                                    <input type="text" class="form-control mb-2 mr-sm-2 personalQuestionData{{$row->id}}{{$row->ques_type_id}}" placeholder="Personal question title" id="email">
                                </div>


                            </div>
                        </div>
                        <div class="col-md-9 mt-3 pt-1  editPannel "id="question_{{$row->ques_type_id}}{{$data['questionair'][0]->language_id}}">
                            <div class="w-100 mb-4">
                                <label for="email" class="w-100"> Question Name</label>
                                <input type="text" class="form-control has-search mb-2 d-inline-block quesName{{$row->id}}{{$row->ques_type_id}}{{$data['questionair'][0]->language_id}} q_{{$row->id}}{{$row->ques_type_id}}" placeholder="" > 

                                <i class="fa fa-star startCheck{{$row->id}}{{$row->ques_type_id}}{{$data['questionair'][0]->language_id}} color-dd" data-value="{{$row->id}}{{$row->ques_type_id}}{{$data['questionair'][0]->language_id}}" aria-hidden="true"></i>

                                <input type="hidden" class="startCheckValue{{$row->id}}{{$row->ques_type_id}}{{$data['questionair'][0]->language_id}}" name="starData" value="1">
                            </div>
                            <div class="w-100 mb-4">
                                <label for="email" class=""> Display Text</label>
                                <input class="form-control mb-2 displayText{{$row->id}}{{$row->ques_type_id}}{{$data['questionair'][0]->language_id}} dt_{{$row->id}}{{$row->ques_type_id}}" name="text" placeholder="" >
                            </div>
                        </div>

                        
                        @if(isset($data['questionair'][0]['quesLanguage']))

                            @foreach($data['questionair'][0]['quesLanguage'] as $i)
                                <div class="col-md-9 mt-3 pt-1 editPannel"  style="display: none;" id="question_{{$row->ques_type_id}}{{$i->language_id}}">
                                    <div class="w-100 mb-4">
                                        <label for="email" class="w-100"> Question Name</label>
                                        <input type="text" class="form-control has-search mb-2 d-inline-block quesName{{$row->id}}{{$row->ques_type_id}}{{$i->language_id}} q_{{$row->id}}{{$row->ques_type_id}}" placeholder="" id="quesName{{$row->id}}"> 

                                        <i class="fa fa-star  startCheck{{$row->id}}{{$row->ques_type_id}}{{$i->language_id}} color-dd" data-value="{{$row->id}}{{$row->ques_type_id}}{{$i->language_id}}" aria-hidden="true"></i>

                                        <input type="hidden" class="startCheckValue{{$row->id}}{{$row->ques_type_id}}{{$i->language_id}}" name="starData" value="1">
                                    </div>
                                    <div class="w-100 mb-4">
                                        <label for="email" class=""> Display Text</label>
                                        <input type="text" class="form-control mb-2 displayText{{$row->id}}{{$row->ques_type_id}}{{$i->language_id}} dt_{{$row->id}}{{$row->ques_type_id}}"   placeholder="">
                                    </div>
                                </div>
                            @endforeach
                        @endif
                    </div>
                    <!--End Open Question-->
                @endif

                @if($row->ques_type_id == 4)
                    <!--Start Picture Question-->       
                    <div class="row w-100 mt-5 mb-5 questionTypeEditPannel{{$row->ques_type_id}}"  style="display: none;">
                        <div class="col-md-12">
                            <h3 class="hednged">Question Editing Panel</h3>
                        </div>
                        <div class="col-md-9">
                            <h4 class="hedngead">
                            Picture Question</h3>
                        </div>
                        <div class="col-md-3"><button class="custom-button"><i class="fa fa-floppy-o" aria-hidden="true"></i> Save Question</button></div>
                        <div class="col-md-3">
                            <div class="w-100 mb-2">
                                <label for="email" class=""> Add Language</label>
                                @if(sizeof($data['questionair']) > 0 )
                                    <select class="form-control mb-3">
                                    @foreach($data['language'] as $col)
                                        @php
                                            if($col->id == $data['questionair'][0]->language_id){
                                                $langdata = $col->language;
                                                $langdataId = $col->id;
                                            }
                                        @endphp
                                    @endforeach
                                        <option value="{{$langdataId}}">{{$langdata}}</option>
                                        <option value="delete">Delete</option>
                                        <option value="deactivate">Deactivate</option>
                                    </select>
                                @endif

                                @if(!empty($data['questionair'][0]['quesLanguage']) )
                                    @foreach($data['questionair'][0]['quesLanguage'] as $row)          
                                        @foreach($data['language'] as $col)
                                                @php
                                                    if($col->id == $row->language_id){
                                                        $langdata = $col->language;
                                                        $langdataId = $col->id;
                                                    }
                                                @endphp
                                        @endforeach
                                        <select class="form-control mb-3">
                                            <option value="{{$langdataId}}" >{{$langdata}}</option>
                                            <option value="delete">Delete</option>
                                            <option value="deactivate">Deactivate</option>
                                        </select>
                                    @endforeach
                                @endif
                                <a href="#" class="adds mb-4">+ Add</a>
                                <div class="w-100 mt-4 mb-2">
                                    <label for="email" class="">Dependencies</label>
                                    <select  class="form-control mb-3">
                                        <option>Only Appears if Answer Checked</option>
                                        <option>Only Appears if Answer</option>
                                        <option>Unchecked</option>
                                        <option>No Dependcy</option>
                                    </select>
                                </div>
                                <div class="w-100 mt-4 mb-2">
                                    <label for="email" class="">Select Dependend Answer</label>
                                    <select  class="form-control mb-3">
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
                                    <label for="email" class="">Maximum Answers</label>
                                    <input type="text" class="form-control mb-2 mr-sm-2" placeholder="4" id="email">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-9 mt-3 pt-1">
                            <div class="w-100 mb-4">
                                <label for="email" class="w-100"> Question Name</label>
                                <input type="email" class="form-control mb-2 d-inline-block" placeholder="" id="email">
                            </div>
                            <div class="w-100 mb-4">
                                <label for="email" class=""> Display Text</label>
                                <input class="form-control mb-2" placeholder="">
                            </div>
                            <table class="table table-borderless table-scroll mt-3 mb-0" id="productTable">
                                <thead>
                                    <tr>
                                        <th scope="col">&nbsp;</th>
                                        <th scope="col">Answers/ Display Name</th>
                                        <th scope="col">Pictures</th>
                                        <th scope="col">Order</th>
                                        <th scope="col">Delete</th>
                                        <th scope="col">Dependency</th>
                                    </tr>
                                </thead>
                                <tbody id="addee">
                                    <tr>
                                        <td>
                                            1
                                        </td>
                                        <td><input type="text" class="form-control" placeholder=""></td>
                                        <td>
                                            <div class="input-filesss">
                                                <input type="file" id="file-upload" multiple required />
                                                <label for="file-upload" class="btnss"><i class="fa fa-picture-o m-0" aria-hidden="true"></i><span class="">Upload Picture</span></label>
                                                <div id="file-upload-filename"></div>
                                            </div>
                                        </td>
                                        <td class="text-center">
                                            <i class="fa fa-angle-up d-block" aria-hidden="true"></i>
                                            <i class="fa fa-angle-down d-block" aria-hidden="true"></i>
                                        </td>
                                        <td class="text-center">
                                            <p class="remove"><i class="fa fa-trash" aria-hidden="true"></i></p>
                                        </td>
                                        <td class="text-center"> <i class="fa fa-link" aria-hidden="true"></i></td>
                                    </tr>
                                </tbody>
                            </table>
                            <button class="btndfd" id="addProduct">+ Add</button>    
                        </div>
                    </div>
                    <!--End Picture Question--> 
                @endif

                @if($row->ques_type_id == 6)
                    <!--Start Scale Question-->       
                    <div class="row w-100 mt-5 mb-5 questionTypeEditPannel{{$row->ques_type_id}}"  style="display: none;">
                        <div class="col-md-12">
                            <h3 class="hednged">Question Editing Panel</h3>
                        </div>
                        <div class="col-md-9">
                            <h4 class="hedngead">
                            Scale Question</h3>
                        </div>
                        <div class="col-md-3"><button class="custom-button saveQuestion6" data-value="{{$row->id}}" data-index="{{$row->ques_type_id}}" id="save_question{{$row->id}}"><i class="fa fa-flopp-o" aria-hidden="true"></i> Save Question</button></div>
                        <div class="col-md-3">
                            <div class="w-100 mb-2">
                                <label for="email" class=""> Add Language</label>
                                @if(sizeof($data['questionair']) > 0 )
                                    <select class="form-control mb-3 language lang_{{$row->id}}{{$row->ques_type_id}}{{$data['questionair'][0]->language_id}} l_{{$row->ques_type_id}}" data-index="{{$data['questionair'][0]->language_id}}" data-v="{{$row->id}}" data-quest="{{$row->ques_type_id}}">
                                    @foreach($data['language'] as $col)
                                        @php
                                            if($col->id == $data['questionair'][0]->language_id){
                                                $langdata = $col->language;
                                                $langdataId = $col->id;
                                            }
                                        @endphp
                                    @endforeach
                                        <option value="{{$langdataId}}">{{$langdata}}</option>
                                        <option value="delete">Delete</option>
                                        <option value="deactivate">Deactivate</option>
                                    </select>
                                @endif

                                @if(!empty($data['questionair'][0]['quesLanguage']) )
                                    @foreach($data['questionair'][0]['quesLanguage'] as $row_)          
                                        @foreach($data['language'] as $col)
                                                @php
                                                    if($col->id == $row_->language_id){
                                                        $langdata = $col->language;
                                                        $langdataId = $col->id;
                                                    }
                                                @endphp
                                        @endforeach
                                        <select class="form-control mb-3 language lang_{{$row->id}}{{$row->ques_type_id}}{{$row_->language_id}} l_{{$row->ques_type_id}}" data-index="{{$row_->language_id}}" data-v="{{$row->id}}" data-quest="{{$row->ques_type_id}}">
                                            <option value="{{$langdataId}}" >{{$langdata}}</option>
                                            <option value="delete">Delete</option>
                                            <option value="deactivate" >Deactivate</option>
                                        </select>
                                    @endforeach
                                @endif
                              
                                <!-- <a href="#" class="adds mb-4">+ Add</a> -->
                                <div class="w-100 mt-4 mb-2">
                                    <label for="email" class="">Dependencies</label>
                                    <select  class="form-control mb-3">
                                        <option>Only Appears if Answer Checked</option>
                                        <option>Only Appears if Answer</option>
                                        <option>Unchecked</option>
                                        <option>No Dependcy</option>
                                    </select>
                                </div>
                                <div class="w-100 mt-4 mb-2">
                                    <label for="email" class="">Select Dependend Answer</label>
                                    <select  class="form-control mb-3">
                                        <option>Q22 Female</option>
                                        <option>Q02 First Time Visitor</option>
                                        <option>Q15 From the sourronding</option>
                                    </select>
                                </div>
                                <div class="w-100 mt-4 mb-2">
                                    <label for="email" class="">Scala Length</label>
                                    <input type="text" class="form-control mb-2 mr-sm-2 answerSize{{$row->id}}{{$row->ques_type_id}}" placeholder="6" id="email" value="1">
                                </div>
                                <div class="w-100 mt-4 mb-2">
                                    <label for="email" class="">Mandatory Question</label>
                                    <div class="wrappers">
                                        <input id="checkbox30" type="checkbox" class="checkbox mandatory{{$row->id}}{{$row->ques_type_id}} hidden" />
                                        <label class="switchbox" for="checkbox30"></label>
                                    </div>
                                </div>
                                <div class="w-100 mt-4 mb-2">
                                    <label for="email" class="">No Answer Option</label>
                                    <div class="wrappers">
                                        <input id="checkbox230" type="checkbox" class="checkbox no_answer{{$row->id}}{{$row->ques_type_id}} hidden" />
                                        <label class="switchbox" for="checkbox230"></label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-9 mt-3 pt-1 editPannel "id="question_{{$row->ques_type_id}}{{$data['questionair'][0]->language_id}}">
                            <div class="w-100 mb-4">
                                <label for="email" class="w-100"> Question Name</label>
                                <input type="text" class="form-control has-search mb-2 d-inline-block quesName{{$row->id}}{{$row->ques_type_id}}{{$data['questionair'][0]->language_id}} q_{{$row->id}}{{$row->ques_type_id}}" placeholder="" id="email"> 

                                <i class="fa fa-star startCheck{{$row->id}}{{$row->ques_type_id}}{{$data['questionair'][0]->language_id}} color-dd" data-value="{{$row->id}}{{$row->ques_type_id}}{{$data['questionair'][0]->language_id}}" aria-hidden="true"></i>

                                <input type="hidden" class="startCheckValue{{$row->id}}{{$row->ques_type_id}}{{$data['questionair'][0]->language_id}}" name="starData" value="1">
                            </div>
                            <div class="w-100 mb-4">
                                <label for="email" class=""> Display Text</label>
                                <input class="form-control mb-2 displayText{{$row->id}}{{$row->ques_type_id}}{{$data['questionair'][0]->language_id}} dt_{{$row->id}}{{$row->ques_type_id}}" name="text" placeholder="" >
                            </div>
                            <div class="w-100 mb-4">
                                <label for="email" class=""> Scale Description</label>
                                <input class="form-control mb-2   scaleDiscription{{$row->id}}{{$row->ques_type_id}}{{$data['questionair'][0]->language_id}}" placeholder="">
                            </div>
                            <div class="form-group has-search">
                                <span class="fa fa-search form-control-feedback"></span>
                                <input type="text" class="form-control" placeholder="Search Answer">
                            </div>
                            <table class="table table-borderless table-scroll mt-3 mb-0" id="productTable{{$row->id}}{{$row->ques_type_id}}{{$data['questionair'][0]->language_id}}">
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
                                <tbody id="addee">
                                    <tr>
                                        <td>
                                            1
                                        </td>
                                        <td><input type="text" class="form-control answerName{{$row->id}}{{$row->ques_type_id}}{{$data['questionair'][0]->language_id}}" placeholder=""></td>
                                        <td><input type="text" class="form-control ansdisplayText{{$row->id}}{{$row->ques_type_id}}{{$data['questionair'][0]->language_id}}" placeholder=""></td>
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
                                    <tr>
                                        <td>
                                            2
                                        </td>
                                        <td><input type="text" class="form-control answerName{{$row->id}}{{$row->ques_type_id}}{{$data['questionair'][0]->language_id}}" placeholder=""></td>
                                        <td><input type="text" class="form-control ansdisplayText{{$row->id}}{{$row->ques_type_id}}{{$data['questionair'][0]->language_id}}" placeholder=""></td>
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
                            <!-- <button class="btndfd" id="addProduct">+ Add</button>     -->
                        </div>
 
                        @if(isset($data['questionair'][0]['quesLanguage']))

                            @foreach($data['questionair'][0]['quesLanguage'] as $i)
                            <div class="col-md-9 mt-3 pt-1 editPannel "id="question_{{$row->ques_type_id}}{{$i->language_id}}" style="display: none;" >
                                <div class="w-100 mb-4">
                                    <label for="email" class="w-100"> Question Name</label>
                                    <input type="text" class="form-control has-search mb-2 d-inline-block quesName{{$row->id}}{{$row->ques_type_id}}{{$i->language_id}} q_{{$row->id}}{{$row->ques_type_id}}" placeholder="" id="email"> 

                                    <i class="fa fa-star startCheck{{$row->id}}{{$row->ques_type_id}}{{$i->language_id}} color-dd" data-value="{{$row->id}}{{$row->ques_type_id}}{{$i->language_id}}" aria-hidden="true"></i>

                                    <input type="hidden" class="startCheckValue{{$row->id}}{{$row->ques_type_id}}{{$i->language_id}}" name="starData" value="1">
                                </div>
                                <div class="w-100 mb-4">
                                    <label for="email" class=""> Display Text</label>
                                    <input class="form-control mb-2 displayText{{$row->id}}{{$row->ques_type_id}}{{$i->language_id}} dt_{{$row->id}}{{$row->ques_type_id}}" name="text" placeholder="" >
                                </div>
                                <div class="w-100 mb-4">
                                    <label for="email" class=""> Scale Description</label>
                                    <input class="form-control mb-2   scaleDiscription{{$row->id}}{{$row->ques_type_id}}{{$i->language_id}}" placeholder="">
                                </div>
                                <div class="form-group has-search">
                                    <span class="fa fa-search form-control-feedback"></span>
                                    <input type="text" class="form-control" placeholder="Search Answer">
                                </div>
                                <table class="table table-borderless table-scroll mt-3 mb-0" id="productTable{{$row->id}}{{$row->ques_type_id}}{{$i->language_id}}">
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
                                    <tbody id="addee">
                                        <tr>
                                            <td>
                                                1
                                            </td>
                                            <td><input type="text" class="form-control" placeholder=""></td>
                                            <td><input type="text" class="form-control" placeholder=""></td>
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
                                        <tr>
                                            <td>
                                                2
                                            </td>
                                            <td><input type="text" class="form-control" placeholder=""></td>
                                            <td><input type="text" class="form-control" placeholder=""></td>
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
                                <!-- <button class="btndfd" id="addProduct">+ Add</button>     -->
                            </div>
                            @endforeach
                        @endif
                    </div>
                    <!--End Scale Question--> 
                @endif

                @if($row->ques_type_id == 7)
                    <!--Start Number Question-->       
                    <div class="row w-100 mt-5 mb-5 questionTypeEditPannel{{$row->ques_type_id}}"  style="display: none;">
                        <div class="col-md-12">
                            <h3 class="hednged">Question Editing Panel</h3>
                        </div>
                        <div class="col-md-9">
                            <h4 class="hedngead">
                            Number Question</h3>
                        </div>
                        <div class="col-md-3"><button class="custom-button saveQuestion" data-value="{{$row->id}}" data-index="{{$row->ques_type_id}}" id="save_question{{$row->id}}"><i class="fa fa-flopp-o" aria-hidden="true"></i> Save Question</button></div>
                        <div class="col-md-3">
                            <div class="w-100 mb-2">
                                <label for="email" class=""> Add Language</label>
                                @if(sizeof($data['questionair']) > 0 )
                                    <select class="form-control mb-3 language lang_{{$row->id}}{{$row->ques_type_id}}{{$data['questionair'][0]->language_id}} l_{{$row->ques_type_id}}" data-index="{{$data['questionair'][0]->language_id}}" data-v="{{$row->id}}" data-quest="{{$row->ques_type_id}}">
                                    @foreach($data['language'] as $col)
                                        @php
                                            if($col->id == $data['questionair'][0]->language_id){
                                                $langdata = $col->language;
                                                $langdataId = $col->id;
                                            }
                                        @endphp
                                    @endforeach
                                        <option value="{{$langdataId}}">{{$langdata}}</option>
                                        <option value="delete">Delete</option>
                                        <option value="deactivate">Deactivate</option>
                                    </select>
                                @endif

                                @if(!empty($data['questionair'][0]['quesLanguage']) )
                                    @foreach($data['questionair'][0]['quesLanguage'] as $row_)          
                                        @foreach($data['language'] as $col)
                                                @php
                                                    if($col->id == $row_->language_id){
                                                        $langdata = $col->language;
                                                        $langdataId = $col->id;
                                                    }
                                                @endphp
                                        @endforeach
                                        <select class="form-control mb-3 language lang_{{$row->id}}{{$row->ques_type_id}}{{$row_->language_id}} l_{{$row->ques_type_id}}" data-index="{{$row_->language_id}}" data-v="{{$row->id}}" data-quest="{{$row->ques_type_id}}">
                                            <option value="{{$langdataId}}" >{{$langdata}}</option>
                                            <option value="delete">Delete</option>
                                            <option value="deactivate" >Deactivate</option>
                                        </select>
                                    @endforeach
                                @endif
                                <!-- <a href="#" class="adds mb-4">+ Add</a> -->
                                <div class="w-100 mt-4 mb-2">
                                    <label for="email" class="">Dependencies</label>
                                    <select  class="form-control mb-3">
                                        <option>Only Appears if Answer Checked</option>
                                        <option>Only Appears if Answer</option>
                                        <option>Unchecked</option>
                                        <option>No Dependcy</option>
                                    </select>
                                </div>
                                <div class="w-100 mt-4 mb-2">
                                    <label for="email" class="">Select Dependend Answer</label>
                                    <select  class="form-control mb-3">
                                        <option>Q22 Female</option>
                                        <option>Q02 First Time Visitor</option>
                                        <option>Q15 From the sourronding</option>
                                    </select>
                                </div>
                                <div class="w-100 mt-4 mb-2">
                                    <label for="email" class="">Number Length</label>
                                    <input type="text" class="form-control mb-2 mr-sm-2 answerSize{{$row->id}}{{$row->ques_type_id}}" placeholder="4" id="email">
                                </div>
                                <div class="w-100 mt-4 mb-2">
                                    <label for="email" class="">Unit</label>
                                    <input type="text" class="form-control mb-2 mr-sm-2 unit{{$row->id}}{{$row->ques_type_id}}" placeholder="€" id="email">
                                </div>
                                <div class="w-100 mt-4 mb-2">
                                    <label for="email" class="">Mandatory Question</label>
                                    <div class="wrappers">
                                        <input id="checkbox20" type="checkbox" class="checkbox  mandatory{{$row->id}}{{$row->ques_type_id}}  hidden" />
                                        <label class="switchbox" for="checkbox20"></label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-9 mt-3 pt-1  editPannel "id="question_{{$row->ques_type_id}}{{$data['questionair'][0]->language_id}}">
                            <div class="w-100 mb-4">
                                <label for="email" class="w-100"> Question Name</label>
                                <input type="text" class="form-control has-search mb-2 d-inline-block quesName{{$row->id}}{{$row->ques_type_id}}{{$data['questionair'][0]->language_id}} q_{{$row->id}}{{$row->ques_type_id}}" placeholder="" > 

                                <i class="fa fa-star startCheck{{$row->id}}{{$row->ques_type_id}}{{$data['questionair'][0]->language_id}} color-dd" data-value="{{$row->id}}{{$row->ques_type_id}}{{$data['questionair'][0]->language_id}}" aria-hidden="true"></i>

                                <input type="hidden" class="startCheckValue{{$row->id}}{{$row->ques_type_id}}{{$data['questionair'][0]->language_id}}" name="starData" value="1">
                            </div>
                            <div class="w-100 mb-4">
                                <label for="email" class=""> Display Text</label>
                                <input class="form-control mb-2 displayText{{$row->id}}{{$row->ques_type_id}}{{$data['questionair'][0]->language_id}} dt_{{$row->id}}{{$row->ques_type_id}}" name="text" placeholder="" >
                            </div>
                        </div>

                        @if(isset($data['questionair'][0]['quesLanguage']))

                            @foreach($data['questionair'][0]['quesLanguage'] as $i)
                                <div class="col-md-9 mt-3 pt-1 editPannel"  style="display: none;" id="question_{{$row->ques_type_id}}{{$i->language_id}}">
                                    <div class="w-100 mb-4">
                                        <label for="email" class="w-100"> Question Name</label>
                                        <input type="text" class="form-control has-search mb-2 d-inline-block quesName{{$row->id}}{{$row->ques_type_id}}{{$i->language_id}} q_{{$row->id}}{{$row->ques_type_id}}" placeholder="" id="quesName{{$row->id}}"> 

                                        <i class="fa fa-star  startCheck{{$row->id}}{{$row->ques_type_id}}{{$i->language_id}} color-dd" data-value="{{$row->id}}{{$row->ques_type_id}}{{$i->language_id}}" aria-hidden="true"></i>

                                        <input type="hidden" class="startCheckValue{{$row->id}}{{$row->ques_type_id}}{{$i->language_id}}" name="starData" value="1">
                                    </div>
                                    <div class="w-100 mb-4">
                                        <label for="email" class=""> Display Text</label>
                                        <input type="text" class="form-control mb-2 displayText{{$row->id}}{{$row->ques_type_id}}{{$i->language_id}} dt_{{$row->id}}{{$row->ques_type_id}}"   placeholder="">
                                    </div>
                                </div>
                            @endforeach
                        @endif
                    </div>
                    <!--End Number Question--> 
                @endif

                @if($row->ques_type_id == 8)
                    <!--Start Country Question-->       
                    <div class="row w-100 mt-5 mb-5 questionTypeEditPannel{{$row->ques_type_id}}"  style="display: none;">
                        <div class="col-md-12">
                            <h3 class="hednged">Question Editing Panel</h3>
                        </div>
                        <div class="col-md-9">
                            <h4 class="hedngead">
                            Country Question</h3>
                        </div>
                        <div class="col-md-3"><button class="custom-button"><i class="fa fa-floppy-o" aria-hidden="true"></i> Save Question</button></div>
                        <div class="col-md-3">
                            <div class="w-100 mb-2">
                                <label for="email" class=""> Add Language</label>
                                @if(sizeof($data['questionair']) > 0 )
                                    <select class="form-control mb-3">
                                    @foreach($data['language'] as $col)
                                        @php
                                            if($col->id == $data['questionair'][0]->language_id){
                                                $langdata = $col->language;
                                                $langdataId = $col->id;
                                            }
                                        @endphp
                                    @endforeach
                                        <option value="{{$langdataId}}">{{$langdata}}</option>
                                        <option value="delete">Delete</option>
                                        <option value="deactivate">Deactivate</option>
                                    </select>
                                @endif

                                @if(!empty($data['questionair'][0]['quesLanguage']) )
                                    @foreach($data['questionair'][0]['quesLanguage'] as $row)          
                                        @foreach($data['language'] as $col)
                                                @php
                                                    if($col->id == $row->language_id){
                                                        $langdata = $col->language;
                                                        $langdataId = $col->id;
                                                    }
                                                @endphp
                                        @endforeach
                                        <select class="form-control mb-3">
                                            <option value="{{$langdataId}}" >{{$langdata}}</option>
                                            <option value="delete">Delete</option>
                                            <option value="deactivate">Deactivate</option>
                                        </select>
                                    @endforeach
                                @endif
                                <a href="#" class="adds mb-4">+ Add</a>
                                <div class="w-100 mt-4 mb-2">
                                    <label for="email" class="">Dependencies</label>
                                    <select  class="form-control mb-3">
                                        <option>Only Appears if Answer Checked</option>
                                        <option>Only Appears if Answer</option>
                                        <option>Unchecked</option>
                                        <option>No Dependcy</option>
                                    </select>
                                </div>
                                <div class="w-100 mt-4 mb-2">
                                    <label for="email" class="">Select Dependend Answer</label>
                                    <select  class="form-control mb-3">
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
                            </div>
                        </div>
                        <div class="col-md-9 mt-3 pt-1">
                            <div class="w-100 mb-4">
                                <label for="email" class="w-100"> Question Name</label>
                                <input type="email" class="form-control has-search mb-2 d-inline-block" placeholder="Country of Residence" id="email"> <i class="fa fa-star color-dd" aria-hidden="true"></i>
                            </div>
                            <div class="w-100 mb-4">
                                <label for="email" class=""> Display Text</label>
                                <input class="form-control mb-2" placeholder="Which Country do you currently live?">
                            </div>
                            <div class="form-group has-search">
                                <span class="fa fa-search form-control-feedback"></span>
                                <input type="text" class="form-control" placeholder="Search Answer">
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
                                <tbody id="addee">
                                    <tr>
                                        <td>
                                            1
                                        </td>
                                        <td><input type="text" class="form-control" placeholder=""></td>
                                        <td><input type="text" class="form-control" placeholder=""></td>
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
                            <button class="btndfd" id="addProduct">+ Add</button>    
                        </div>
                    </div>
                    <!--End Country Question--> 
                @endif

                @if($row->ques_type_id == 9)
                    <!--Start Ranking Question-->       
                    <div class="row w-100 mt-5 mb-5 questionTypeEditPannel{{$row->ques_type_id}}"  style="display: none;">
                        <div class="col-md-12">
                            <h3 class="hednged">Question Editing Panel</h3>
                        </div>
                        <div class="col-md-9">
                            <h4 class="hedngead">
                            Ranking Question</h3>
                        </div>
                        <div class="col-md-3"><button class="custom-button"><i class="fa fa-floppy-o" aria-hidden="true"></i> Save Question</button></div>
                        <div class="col-md-3">
                            <div class="w-100 mb-2">
                                <label for="email" class=""> Add Language</label>
                                @if(sizeof($data['questionair']) > 0 )
                                    <select class="form-control mb-3">
                                    @foreach($data['language'] as $col)
                                        @php
                                            if($col->id == $data['questionair'][0]->language_id){
                                                $langdata = $col->language;
                                                $langdataId = $col->id;
                                            }
                                        @endphp
                                    @endforeach
                                        <option value="{{$langdataId}}">{{$langdata}}</option>
                                        <option value="delete">Delete</option>
                                        <option value="deactivate">Deactivate</option>
                                    </select>
                                @endif

                                @if(!empty($data['questionair'][0]['quesLanguage']) )
                                    @foreach($data['questionair'][0]['quesLanguage'] as $row)          
                                        @foreach($data['language'] as $col)
                                                @php
                                                    if($col->id == $row->language_id){
                                                        $langdata = $col->language;
                                                        $langdataId = $col->id;
                                                    }
                                                @endphp
                                        @endforeach
                                        <select class="form-control mb-3">
                                            <option value="{{$langdataId}}" >{{$langdata}}</option>
                                            <option value="delete">Delete</option>
                                            <option value="deactivate">Deactivate</option>
                                        </select>
                                    @endforeach
                                @endif
                                <a href="#" class="adds mb-4">+ Add</a>
                                <div class="w-100 mt-4 mb-2">
                                    <label for="email" class="">Dependencies</label>
                                    <select  class="form-control mb-3">
                                        <option>Only Appears if Answer Checked</option>
                                        <option>Only Appears if Answer</option>
                                        <option>Unchecked</option>
                                        <option>No Dependcy</option>
                                    </select>
                                </div>
                                <div class="w-100 mt-4 mb-2">
                                    <label for="email" class="">Select Dependend Answer</label>
                                    <select  class="form-control mb-3">
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
                                    <label for="email" class="">Maximum Rankings</label>
                                    <input type="text" class="form-control mb-2 mr-sm-2" placeholder="4" id="email">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-9 mt-3 pt-1">
                            <div class="w-100 mb-4">
                                <label for="email" class="w-100"> Question Name</label>
                                <input type="email" class="form-control has-search mb-2 d-inline-block" placeholder="" id="email"> <i class="fa fa-star color-dd" aria-hidden="true"></i>
                            </div>
                            <div class="w-100 mb-4">
                                <label for="email" class=""> Display Text</label>
                                <input class="form-control mb-2" placeholder="">
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
                                <tbody id="addee">
                                    <tr>
                                        <td>
                                            1
                                        </td>
                                        <td><input type="text" class="form-control" placeholder=""></td>
                                        <td><input type="text" class="form-control" placeholder=""></td>
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
                            <button class="btndfd" id="addProduct">+ Add</button>    
                        </div>
                    </div>
                    <!--End Ranking Question-->
                @endif

                @if($row->ques_type_id == 10)

                  <!--Start Aggrement Question -->       
                    <div class="row w-100 mt-5 mb-5 questionTypeEditPannel{{$row->ques_type_id}}   qt_{{$row->ques_type_id}}1"  style="display: none;">
                        <div class="col-md-12">
                            <h3 class="hednged">Question Editing Panel</h3>
                        </div>
                        <div class="col-md-9">
                            <h4 class="hedngead">
                            Aggrement Question </h3>
                        </div>
                        <div class="col-md-3"><button class="custom-button saveQuestion1" data-value="{{$row->id}}" data-index="{{$row->ques_type_id}}" id="save_question{{$row->id}}" data-i="1"><i class="fa fa-flopp-o" aria-hidden="true"></i> Save Question</button></div> 
                        <div class="col-md-3">
                            <div class="w-100 mb-2">
                                <label for="email" class=""> Add Language</label>
                                @if(sizeof($data['questionair']) > 0 )
                                    <select class="form-control mb-3 language1 lang1_{{$row->id}}{{$row->ques_type_id}}1{{$data['questionair'][0]->language_id}} l_{{$row->ques_type_id}}1" data-index="{{$data['questionair'][0]->language_id}}" data-v="{{$row->id}}" data-quest="{{$row->ques_type_id}}" data-i="1">
                                    @foreach($data['language'] as $col)
                                        @php
                                            if($col->id == $data['questionair'][0]->language_id){
                                                $langdata = $col->language;
                                                $langdataId = $col->id;
                                            }
                                        @endphp
                                    @endforeach
                                        <option value="{{$langdataId}}">{{$langdata}}</option>
                                        <option value="delete">Delete</option>
                                        <option value="deactivate">Deactivate</option>
                                    </select>
                                @endif

                                @if(!empty($data['questionair'][0]['quesLanguage']) )
                                    @foreach($data['questionair'][0]['quesLanguage'] as $row_)          
                                        @foreach($data['language'] as $col)
                                                @php
                                                    if($col->id == $row_->language_id){
                                                        $langdata = $col->language;
                                                        $langdataId = $col->id;
                                                    }
                                                @endphp
                                        @endforeach
                                        <select class="form-control mb-3 language1 lang1_{{$row->id}}{{$row->ques_type_id}}1{{$row_->language_id}} l_{{$row->ques_type_id}}1" data-index="{{$row_->language_id}}" data-v="{{$row->id}}" data-quest="{{$row->ques_type_id}}" data-i="1">
                                            <option value="{{$langdataId}}" >{{$langdata}}</option>
                                            <option value="delete">Delete</option>
                                            <option value="deactivate" >Deactivate</option>
                                        </select>
                                    @endforeach
                                @endif
                                <!-- <a href="#" class="adds mb-4">+ Add</a> -->
                            </div>
                            <div class="w-100 mt-4 mb-2">
                                <label for="email" class="">Mandatory Question</label>
                                <div class="wrappers">
                                    <input id="checkbox11" type="checkbox" class="checkbox mandatory{{$row->id}}{{$row->ques_type_id}} hidden" />
                                    <label class="switchbox" for="checkbox11"></label>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-9 mt-3 pt-1 editPannel1 "id="question_{{$row->ques_type_id}}1{{$data['questionair'][0]->language_id}}">
                            <div class="w-100 mb-4">
                                <label for="email" class="w-100"> Text</label>
                                <input type="text" class="form-control mb-2 d-inline-block quesName{{$row->id}}{{$row->ques_type_id}}1{{$data['questionair'][0]->language_id}} q_{{$row->id}}{{$row->ques_type_id}}" placeholder=" " id="" >

                                <input type="hidden" class="form-control mb-2 d-inline-block displayText{{$row->id}}{{$row->ques_type_id}}1{{$data['questionair'][0]->language_id}} q_{{$row->id}}{{$row->ques_type_id}}" placeholder=" " id="">


                                <input type="hidden" class="form-control mb-2 d-inline-block startCheckValue{{$row->id}}{{$row->ques_type_id}}1{{$data['questionair'][0]->language_id}} q_{{$row->id}}{{$row->ques_type_id}}" placeholder=" " value="0" id="" >
                            </div>
                        </div>

                        @if(isset($data['questionair'][0]['quesLanguage']))

                            @foreach($data['questionair'][0]['quesLanguage'] as $i)
                            <div class="col-md-9 mt-3 pt-1 editPannel1 "id="question_{{$row->ques_type_id}}1{{$i->language_id}}"   style="display:none;"> 
                                <div class="w-100 mb-4">
                                    <label for="email" class="w-100"> Text</label>
                                    <input type="text" class="form-control mb-2 d-inline-block quesName{{$row->id}}{{$row->ques_type_id}}1{{$i->language_id}} q_{{$row->id}}{{$row->ques_type_id}}" placeholder=" " id="" >

                                    <input type="hidden" class="form-control mb-2 d-inline-block displayText{{$row->id}}{{$row->ques_type_id}}1{{$i->language_id}} q_{{$row->id}}{{$row->ques_type_id}}" placeholder=" " id="">


                                    <input type="hidden" class="form-control mb-2 d-inline-block startCheckValue{{$row->id}}{{$row->ques_type_id}}1{{$i->language_id}} q_{{$row->id}}{{$row->ques_type_id}}" placeholder=" " value="0" id="" >
                                </div>
                            </div>

                            @endforeach
                        @endif
                    </div>
                    <!--End Aggrement Question 1-->

                     <!--Start Headline -->       
                    <div class="row w-100 mt-5 mb-5 questionTypeEditPannel{{$row->ques_type_id}}   qt_{{$row->ques_type_id}}2"  style="display: none;">
                        <div class="col-md-12">
                            <!-- <h3 class="hednged">Question Editing Panel</h3> -->
                        </div>
                        <div class="col-md-9">
                            <h4 class="hedngead">
                            Headline</h3>
                        </div>
                        <div class="col-md-3">
                            <button class="custom-button saveQuestion1" data-value="{{$row->id}}" data-index="{{$row->ques_type_id}}" id="save_question{{$row->id}}" data-i="2"><i class="fa fa-flopp-o" aria-hidden="true"></i> Save Question</button>
                        </div> 
                        <div class="col-md-3">
                            <div class="w-100 mb-2">
                                <label for="email" class=""> Add Language</label>
                                @if(sizeof($data['questionair']) > 0 )
                                    <select class="form-control mb-3 language1 lang1_{{$row->id}}{{$row->ques_type_id}}2{{$data['questionair'][0]->language_id}} l_{{$row->ques_type_id}}2" data-index="{{$data['questionair'][0]->language_id}}" data-v="{{$row->id}}" data-quest="{{$row->ques_type_id}}" data-i="2">
                                    @foreach($data['language'] as $col)
                                        @php
                                            if($col->id == $data['questionair'][0]->language_id){
                                                $langdata = $col->language;
                                                $langdataId = $col->id;
                                            }
                                        @endphp
                                    @endforeach
                                        <option value="{{$langdataId}}">{{$langdata}}</option>
                                        <option value="delete">Delete</option>
                                        <option value="deactivate">Deactivate</option>
                                    </select>
                                @endif

                                @if(!empty($data['questionair'][0]['quesLanguage']) )
                                    @foreach($data['questionair'][0]['quesLanguage'] as $row_)          
                                        @foreach($data['language'] as $col)
                                                @php
                                                    if($col->id == $row_->language_id){
                                                        $langdata = $col->language;
                                                        $langdataId = $col->id;
                                                    }
                                                @endphp
                                        @endforeach
                                        <select class="form-control mb-3 language1 lang1_{{$row->id}}{{$row->ques_type_id}}2{{$row_->language_id}} l_{{$row->ques_type_id}}2" data-index="{{$row_->language_id}}" data-v="{{$row->id}}" data-quest="{{$row->ques_type_id}}" data-i="2">
                                            <option value="{{$langdataId}}" >{{$langdata}}</option>
                                            <option value="delete">Delete</option>
                                            <option value="deactivate" >Deactivate</option>
                                        </select>
                                    @endforeach
                                @endif
                                <!-- <a href="#" class="adds mb-4">+ Add</a> -->
                            </div>
                        </div>
                        <div class="col-md-9 mt-3 pt-1 editPannel2 "id="question_{{$row->ques_type_id}}2{{$data['questionair'][0]->language_id}}">
                            <div class="w-100 mb-4">
                                <label for="email" class="w-100"> Text</label>
                                <input type="email" class="form-control mb-2 d-inline-block  quesName{{$row->id}}{{$row->ques_type_id}}2{{$data['questionair'][0]->language_id}} q_{{$row->id}}{{$row->ques_type_id}}" placeholder=" " id="">

                                <input type="hidden" class="form-control mb-2 d-inline-block displayText{{$row->id}}{{$row->ques_type_id}}2{{$data['questionair'][0]->language_id}} q_{{$row->id}}{{$row->ques_type_id}}" placeholder=" " id="">


                                <input type="hidden" class="form-control mb-2 d-inline-block startCheckValue{{$row->id}}{{$row->ques_type_id}}2{{$data['questionair'][0]->language_id}} q_{{$row->id}}{{$row->ques_type_id}}" placeholder=" " value="0" id="" >
                            </div>
                        </div>

                        @if(isset($data['questionair'][0]['quesLanguage']))

                            @foreach($data['questionair'][0]['quesLanguage'] as $i)

                                <div class="col-md-9 mt-3 pt-1 editPannel2 "id="question_{{$row->ques_type_id}}2{{$i->language_id}}" style="display:none;">
                                    <div class="w-100 mb-4">
                                        <label for="email" class="w-100"> Text</label>
                                        <input type="email" class="form-control mb-2 d-inline-block  quesName{{$row->id}}{{$row->ques_type_id}}2{{$i->language_id}} q_{{$row->id}}{{$row->ques_type_id}}" placeholder=" " id="">

                                        <input type="hidden" class="form-control mb-2 d-inline-block displayText{{$row->id}}{{$row->ques_type_id}}2{{$i->language_id}} q_{{$row->id}}{{$row->ques_type_id}}" placeholder=" " id="">


                                        <input type="hidden" class="form-control mb-2 d-inline-block startCheckValue{{$row->id}}{{$row->ques_type_id}}2{{$i->language_id}} q_{{$row->id}}{{$row->ques_type_id}}" placeholder=" " value="0" id="" >
                                    </div>
                                </div>
                            @endforeach
                        @endif
                    </div>
                    <!--End Headline -->

                    <!--Start Annotation-->       
                    <div class="row w-100 mt-5 mb-5 questionTypeEditPannel{{$row->ques_type_id}}   qt_{{$row->ques_type_id}}3"  style="display: none;">
                        <div class="col-md-12">
                            <!-- <h3 class="hednged">Question Editing Panel</h3> -->
                        </div>
                        <div class="col-md-9">
                            <h4 class="hedngead">
                            Annotation Question</h3>
                        </div>
                        <div class="col-md-3">
                            <button class="custom-button saveQuestion1" data-value="{{$row->id}}" data-index="{{$row->ques_type_id}}" id="save_question{{$row->id}}" data-i="3"><i class="fa fa-flopp-o" aria-hidden="true"></i> Save Question</button>
                        </div>                        
                        <div class="col-md-3">
                            <div class="w-100 mb-2">
                                <label for="email" class=""> Add Language</label>
                                @if(sizeof($data['questionair']) > 0 )
                                    <select class="form-control mb-3 language1 lang1_{{$row->id}}{{$row->ques_type_id}}3{{$data['questionair'][0]->language_id}} l_{{$row->ques_type_id}}3" data-index="{{$data['questionair'][0]->language_id}}" data-v="{{$row->id}}" data-quest="{{$row->ques_type_id}}" data-i="3">
                                    @foreach($data['language'] as $col)
                                        @php
                                            if($col->id == $data['questionair'][0]->language_id){
                                                $langdata = $col->language;
                                                $langdataId = $col->id;
                                            }
                                        @endphp
                                    @endforeach
                                        <option value="{{$langdataId}}">{{$langdata}}</option>
                                        <option value="delete">Delete</option>
                                        <option value="deactivate">Deactivate</option>
                                    </select>
                                @endif

                                @if(!empty($data['questionair'][0]['quesLanguage']) )
                                    @foreach($data['questionair'][0]['quesLanguage'] as $row_)          
                                        @foreach($data['language'] as $col)
                                                @php
                                                    if($col->id == $row_->language_id){
                                                        $langdata = $col->language;
                                                        $langdataId = $col->id;
                                                    }
                                                @endphp
                                        @endforeach
                                        <select class="form-control mb-3 language1 lang1_{{$row->id}}{{$row->ques_type_id}}3{{$row_->language_id}} l_{{$row->ques_type_id}}3" data-index="{{$row_->language_id}}" data-v="{{$row->id}}" data-quest="{{$row->ques_type_id}}" data-i="3">
                                            <option value="{{$langdataId}}" >{{$langdata}}</option>
                                            <option value="delete">Delete</option>
                                            <option value="deactivate" >Deactivate</option>
                                        </select>
                                    @endforeach
                                @endif
                                <!-- <a href="#" class="adds mb-4">+ Add</a> -->
                            </div>
                        </div>
                        <div class="col-md-9 mt-3 pt-1 editPannel3 "id="question_{{$row->ques_type_id}}3{{$data['questionair'][0]->language_id}}">
                            <div class="w-100 mb-4">
                                <label for="email" class="w-100"> Text</label>
                                <input type="text" class="form-control mb-2 d-inline-block quesName{{$row->id}}{{$row->ques_type_id}}3{{$data['questionair'][0]->language_id}} q_{{$row->id}}{{$row->ques_type_id}}" placeholder=" " id="">

                                <input type="hidden" class="form-control mb-2 d-inline-block displayText{{$row->id}}{{$row->ques_type_id}}3{{$data['questionair'][0]->language_id}} q_{{$row->id}}{{$row->ques_type_id}}" placeholder=" " id="">


                                <input type="hidden" class="form-control mb-2 d-inline-block startCheckValue{{$row->id}}{{$row->ques_type_id}}3{{$data['questionair'][0]->language_id}} q_{{$row->id}}{{$row->ques_type_id}}" placeholder=" " value="0" id="" >
                            </div>
                        </div>
                          
                        @if(isset($data['questionair'][0]['quesLanguage']))

                            @foreach($data['questionair'][0]['quesLanguage'] as $i)
                                <div class="col-md-9 mt-3 pt-1 editPannel3 "id="question_{{$row->ques_type_id}}3{{$i->language_id}}" style="display:none;">
                                    <div class="w-100 mb-4">
                                        <label for="email" class="w-100"> Text</label>
                                        <input type="text" class="form-control mb-2 d-inline-block quesName{{$row->id}}{{$row->ques_type_id}}3{{$i->language_id}} q_{{$row->id}}{{$row->ques_type_id}}" placeholder=" " id="">
                                        <input type="hidden" class="form-control mb-2 d-inline-block displayText{{$row->id}}{{$row->ques_type_id}}3{{$i->language_id}} q_{{$row->id}}{{$row->ques_type_id}}" placeholder=" " id="">

                                <input type="hidden" class="form-control mb-2 d-inline-block startCheckValue{{$row->id}}{{$row->ques_type_id}}3{{$i->language_id}} q_{{$row->id}}{{$row->ques_type_id}}" placeholder=" " value="0" id="">
                                    </div>
                                </div>
                            @endforeach
                        @endif
                    </div>
                    <!--End Annotation-->
                @endif

            @endforeach
    @endif
</div>

<!-- <div class="modal fade" id="questionType" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="modal-title" id="exampleModalCenterTitle">Add Question Type</h2>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body text-center">
               <select name="quesType" id="quesTypeSelect" class="form-control">
                   <option value="">Select Question Type</option>
                   @if($data['questionType'])
                        @foreach($data['questionType'] as $row)
                            <option value="{{$row->id}}">{{$row->title}}</option>
                        @endforeach
                   @endif
               </select>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" id="save_quesType">Save changes</button>
            </div>
        </div>
    </div>
</div> -->
@endsection
@push('js-script')


<script src="{{config('CONSTANT.ASSETS_URL')}}js/question.js"> </script>
@endpush
