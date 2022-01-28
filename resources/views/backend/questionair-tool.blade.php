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
                                        <tr>
                                            <td>22</td>
                                            <td>How long have you been staying in Frankfurt? </td>
                                            <td>Single </td>
                                            <td class="text-center">
                                                <i class="fa fa-angle-up d-block" aria-hidden="true"></i>
                                                <i class="fa fa-angle-down d-block" aria-hidden="true"></i>
                                            </td>
                                            <td class="text-center"> <i class="fa fa-trash" aria-hidden="true"></i></td>
                                        </tr>
                                        <tr>
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
                                                <i class="fa fa-angle-down d-block" aria-hidden="true"></i></td>
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
                                        </tr>
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
                    <input type="text" class="form-control" placeholder="Search Question">
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="card table-new">
                            <div class="card-body">
                                <table class="table">
                                    <thead class="text-primary">
                                        <tr>
                                            <th>Question Name </th>
                                            <th>Question Type </th>
                                            <th>Languages</th>
                                            <th>Answers</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>How did you like the Exhibition?</td>
                                            <td>Skalar </td>
                                            <td>3</td>
                                            <td>6</td>
                                        </tr>
                                        <tr>
                                            <td>Age</td>
                                            <td>Single </td>
                                            <td>2</td>
                                            <td>7</td>
                                        </tr>
                                        <tr>
                                            <td>ZIP Code</td>
                                            <td>Multi </td>
                                            <td>4</td>
                                            <td>1</td>
                                        </tr>
                                        <tr>
                                            <td>Gender</td>
                                            <td>Multi </td>
                                            <td>7</td>
                                            <td>3</td>
                                        </tr>
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
                <button class="custom-button"><i class="fa fa-floppy-o" aria-hidden="true"></i> Safe
                    Draft</button>
                <button class="custom-button"><i class="fa fa-trash" aria-hidden="true"></i> Delete
                    Draft</button>
            </div>
        </div>
        <!--Start Multiple Choice Question-->
        <div class="row w-100">
            <div class="col-md-12">
                <h3 class="hednged">Question Editing Panel</h3>
            </div>
            <div class="col-md-9">
                <h4 class="hedngead">Multiple Choice Question</h3>
            </div>
            <div class="col-md-3"><button class="custom-button"><i class="fa fa-floppy-o" aria-hidden="true"></i> Save
                    Question</button></div>
            <div class="col-md-3">
                <div class="w-100 mb-2">
                    <label for="email" class=""> Add Language</label>
                    <select class="form-control mb-3">
                        <option>English</option>
                        <option>English</option>
                        <option>English</option>
                    </select>
                    <select class="form-control mb-3">
                        <option>German</option>
                        <option>German</option>
                        <option>German</option>
                    </select>
                    <select class="form-control mb-3">
                        <option>Spanish</option>
                        <option>Delete</option>
                        <option>Deactivate</option>
                    </select>
                    <a href="#" class="adds mb-4">+ Add</a>

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
                    <input type="email" class="form-control has-search mb-2 d-inline-block" placeholder="" id="email">
                    <i class="fa fa-star color-dd" aria-hidden="true"></i>
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
        <!--End Multiple Choice Question-->

        <!--Start Single Choice Question-->
        <div class="row w-100 mt-5 mb-5">
            <div class="col-md-9">
                <h4 class="hedngead">Single Choice Question</h3>
            </div>
            <div class="col-md-3"><button class="custom-button"><i class="fa fa-floppy-o" aria-hidden="true"></i> Save
                    Question</button></div>
            <div class="col-md-3">
                <div class="w-100 mb-2">
                    <label for="email" class=""> Add Language</label>
                    <select class="form-control mb-3">
                        <option>English</option>
                        <option>English</option>
                        <option>English</option>
                    </select>
                    <select class="form-control mb-3">
                        <option>German</option>
                        <option>German</option>
                        <option>German</option>
                    </select>
                    <select class="form-control mb-3">
                        <option>Spanish</option>
                        <option>Delete</option>
                        <option>Deactivate</option>
                    </select>
                    <a href="#" class="adds mb-4">+ Add</a>

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
                    <input type="email" class="form-control has-search mb-2 d-inline-block" placeholder="" id="email">
                    <i class="fa fa-star color-dd" aria-hidden="true"></i>
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

        <!--Start Matrix Question-->
        <div class="row w-100 mt-5 mb-5">
            <div class="col-md-9">
                <h4 class="hedngead">Matrix Question</h3>
            </div>
            <div class="col-md-3"><button class="custom-button"><i class="fa fa-floppy-o" aria-hidden="true"></i> Save
                    Question</button></div>
            <div class="col-md-3">
                <div class="w-100 mb-2">
                    <label for="email" class=""> Add Language</label>
                    <select class="form-control mb-3">
                        <option>English</option>
                        <option>English</option>
                        <option>English</option>
                    </select>
                    <select class="form-control mb-3">
                        <option>German</option>
                        <option>German</option>
                        <option>German</option>
                    </select>
                    <select class="form-control mb-3">
                        <option>Spanish</option>
                        <option>Delete</option>
                        <option>Deactivate</option>
                    </select>
                    <a href="#" class="adds mb-4">+ Add</a>

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
                    <input type="email" class="form-control has-search mb-2 d-inline-block" placeholder="" id="email">
                    <i class="fa fa-star color-dd" aria-hidden="true"></i>
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
        <!--Start Open Question-->
        <div class="row w-100 mt-5 mb-5">
            <div class="col-md-9">
                <h4 class="hedngead">Open Question</h3>
            </div>
            <div class="col-md-3"><button class="custom-button"><i class="fa fa-flopp-o" aria-hidden="true"></i>
                    Save Question</button></div>
            <div class="col-md-3">
                <div class="w-100 mb-2">
                    <label for="email" class=""> Add Language</label>
                    <select class="form-control mb-3">y
                        <option>English</option>
                        <option>English</option>
                        <option>English</option>
                    </select>
                    <select class="form-control mb-3">
                        <option>German</option>
                        <option>German</option>
                        <option>German</option>
                    </select>
                    <select class="form-control mb-3">
                        <option>Spanish</option>
                        <option>Delete</option>
                        <option>Deactivate</option>
                    </select>
                    <a href="#" class="adds mb-4">+ Add</a>

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
                        <label for="email" class="">Answer Field Size (Rows)</label>
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
                        <label for="email" class="">Personal Data Question</label>
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
                    <input type="email" class="form-control has-search mb-2 d-inline-block" placeholder="" id="email">
                    <i class="fa fa-star color-dd" aria-hidden="true"></i>
                </div>
                <div class="w-100 mb-4">
                    <label for="email" class=""> Display Text</label>
                    <input class="form-control mb-2" placeholder="">
                </div>
            </div>
        </div>
        <!--End Open Question-->
        <!--Start Picture Question-->
        <div class="row w-100 mt-5 mb-5">
            <div class="col-md-9">
                <h4 class="hedngead">Picture Question</h3>
            </div>
            <div class="col-md-3"><button class="custom-button"><i class="fa fa-floppy-o" aria-hidden="true"></i> Save
                    Question</button></div>
            <div class="col-md-3">
                <div class="w-100 mb-2">
                    <label for="email" class=""> Add Language</label>
                    <select class="form-control mb-3">
                        <option>English</option>
                        <option>English</option>
                        <option>English</option>
                    </select>
                    <select class="form-control mb-3">
                        <option>German</option>
                        <option>German</option>
                        <option>German</option>
                    </select>
                    <select class="form-control mb-3">
                        <option>Spanish</option>
                        <option>Delete</option>
                        <option>Deactivate</option>
                    </select>
                    <a href="#" class="adds mb-4">+ Add</a>

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
                                    <label for="file-upload" class="btnss"><i class="fa fa-picture-o m-0"
                                            aria-hidden="true"></i><span class="">Upload Picture</span></label>
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
        <!--Start Scale Question-->
        <div class="row w-100 mt-5 mb-5">
            <div class="col-md-9">
                <h4 class="hedngead">Scale Question</h3>
            </div>
            <div class="col-md-3"><button class="custom-button"><i class="fa fa-floppy-o" aria-hidden="true"></i> Save
                    Question</button></div>
            <div class="col-md-3">
                <div class="w-100 mb-2">
                    <label for="email" class=""> Add Language</label>
                    <select class="form-control mb-3">
                        <option>English</option>
                        <option>English</option>
                        <option>English</option>
                    </select>
                    <select class="form-control mb-3">
                        <option>German</option>
                        <option>German</option>
                        <option>German</option>
                    </select>
                    <select class="form-control mb-3">
                        <option>Spanish</option>
                        <option>Delete</option>
                        <option>Deactivate</option>
                    </select>
                    <a href="#" class="adds mb-4">+ Add</a>

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
                        <label for="email" class="">Scala Length</label>
                        <input type="text" class="form-control mb-2 mr-sm-2" placeholder="6" id="email">
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
                    <input type="email" class="form-control has-search mb-2 d-inline-block" placeholder="" id="email">
                    <i class="fa fa-star color-dd" aria-hidden="true"></i>
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
        <!--End Scale Question-->

        <!--Start Number Question-->
        <div class="row w-100 mt-5 mb-5">
            <div class="col-md-9">
                <h4 class="hedngead">Number Question</h3>
            </div>
            <div class="col-md-3"><button class="custom-button"><i class="fa fa-floppy-o" aria-hidden="true"></i> Save
                    Question</button></div>
            <div class="col-md-3">
                <div class="w-100 mb-2">
                    <label for="email" class=""> Add Language</label>
                    <select class="form-control mb-3">
                        <option>English</option>
                        <option>English</option>
                        <option>English</option>
                    </select>
                    <select class="form-control mb-3">
                        <option>German</option>
                        <option>German</option>
                        <option>German</option>
                    </select>
                    <select class="form-control mb-3">
                        <option>Spanish</option>
                        <option>Delete</option>
                        <option>Deactivate</option>
                    </select>
                    <a href="#" class="adds mb-4">+ Add</a>

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
                        <label for="email" class="">Number Length</label>
                        <input type="text" class="form-control mb-2 mr-sm-2" placeholder="4" id="email">
                    </div>
                    <div class="w-100 mt-4 mb-2">
                        <label for="email" class="">Unit</label>
                        <input type="text" class="form-control mb-2 mr-sm-2" placeholder="€" id="email">
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
                    <input type="email" class="form-control has-search mb-2 d-inline-block" placeholder="" id="email">
                    <i class="fa fa-star color-dd" aria-hidden="true"></i>
                </div>
                <div class="w-100 mb-4">
                    <label for="email" class=""> Display Text</label>
                    <input class="form-control mb-2" placeholder="">
                </div>
            </div>
        </div>
        <!--End Number Question-->

        <!--Start Country Question-->
        <div class="row w-100 mt-5 mb-5">
            <div class="col-md-9">
                <h4 class="hedngead">Country Question</h3>
            </div>
            <div class="col-md-3"><button class="custom-button"><i class="fa fa-floppy-o" aria-hidden="true"></i> Save
                    Question</button></div>
            <div class="col-md-3">
                <div class="w-100 mb-2">
                    <label for="email" class=""> Add Language</label>
                    <select class="form-control mb-3">
                        <option>English</option>
                        <option>English</option>
                        <option>English</option>
                    </select>
                    <select class="form-control mb-3">
                        <option>German</option>
                        <option>German</option>
                        <option>German</option>
                    </select>
                    <select class="form-control mb-3">
                        <option>Spanish</option>
                        <option>Delete</option>
                        <option>Deactivate</option>
                    </select>
                    <a href="#" class="adds mb-4">+ Add</a>

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
                </div>
            </div>
            <div class="col-md-9 mt-3 pt-1">

                <div class="w-100 mb-4">
                    <label for="email" class="w-100"> Question Name</label>
                    <input type="email" class="form-control has-search mb-2 d-inline-block"
                        placeholder="Country of Residence" id="email"> <i class="fa fa-star color-dd"
                        aria-hidden="true"></i>
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

        <!--Start Ranking Question-->
        <div class="row w-100 mt-5 mb-5">
            <div class="col-md-9">
                <h4 class="hedngead">Ranking Question</h3>
            </div>
            <div class="col-md-3"><button class="custom-button"><i class="fa fa-floppy-o" aria-hidden="true"></i> Save
                    Question</button></div>
            <div class="col-md-3">
                <div class="w-100 mb-2">
                    <label for="email" class=""> Add Language</label>
                    <select class="form-control mb-3">
                        <option>English</option>
                        <option>English</option>
                        <option>English</option>
                    </select>
                    <select class="form-control mb-3">
                        <option>German</option>
                        <option>German</option>
                        <option>German</option>
                    </select>
                    <select class="form-control mb-3">
                        <option>Spanish</option>
                        <option>Delete</option>
                        <option>Deactivate</option>
                    </select>
                    <a href="#" class="adds mb-4">+ Add</a>

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
                        <label for="email" class="">Maximum Rankings</label>
                        <input type="text" class="form-control mb-2 mr-sm-2" placeholder="4" id="email">
                    </div>

                </div>
            </div>
            <div class="col-md-9 mt-3 pt-1">

                <div class="w-100 mb-4">
                    <label for="email" class="w-100"> Question Name</label>
                    <input type="email" class="form-control has-search mb-2 d-inline-block" placeholder="" id="email">
                    <i class="fa fa-star color-dd" aria-hidden="true"></i>
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

        <!--Start Headline 1-->
        <div class="row w-100 mt-5 mb-5">
            <div class="col-md-9">
                <h4 class="hedngead">Headline 1</h3>
            </div>
            <div class="col-md-3"><button class="custom-button"><i class="fa fa-floppy-o" aria-hidden="true"></i> Save
                    Question</button></div>
            <div class="col-md-3">
                <div class="w-100 mb-2">
                    <label for="email" class=""> Add Language</label>
                    <select class="form-control mb-3">
                        <option>English</option>
                        <option>English</option>
                        <option>English</option>
                    </select>
                    <select class="form-control mb-3">
                        <option>German</option>
                        <option>German</option>
                        <option>German</option>
                    </select>
                    <select class="form-control mb-3">
                        <option>Spanish</option>
                        <option>Delete</option>
                        <option>Deactivate</option>
                    </select>
                    <a href="#" class="adds mb-4">+ Add</a>
                </div>
            </div>
            <div class="col-md-9 mt-3 pt-1">
                <div class="w-100 mb-4">
                    <label for="email" class="w-100"> Text</label>
                    <input type="email" class="form-control mb-2 d-inline-block" placeholder="HEADLINE TEXT" id="email">
                </div>
            </div>
        </div>
        <!--End Headline 1-->

        <!--Start Headline 2-->
        <div class="row w-100 mt-5 mb-5">
            <div class="col-md-9">
                <h4 class="hedngead">Headline 1</h3>
            </div>
            <div class="col-md-3"><button class="custom-button"><i class="fa fa-floppy-o" aria-hidden="true"></i> Save
                    Question</button></div>
            <div class="col-md-3">
                <div class="w-100 mb-2">
                    <label for="email" class=""> Add Language</label>
                    <select class="form-control mb-3">
                        <option>English</option>
                        <option>English</option>
                        <option>English</option>
                    </select>
                    <select class="form-control mb-3">
                        <option>German</option>
                        <option>German</option>
                        <option>German</option>
                    </select>
                    <select class="form-control mb-3">
                        <option>Spanish</option>
                        <option>Delete</option>
                        <option>Deactivate</option>
                    </select>
                    <a href="#" class="adds mb-4">+ Add</a>
                </div>
            </div>
            <div class="col-md-9 mt-3 pt-1">
                <div class="w-100 mb-4">
                    <label for="email" class="w-100"> Text</label>
                    <input type="email" class="form-control mb-2 d-inline-block" placeholder="HEADLINE TEXT" id="email">
                </div>
            </div>
        </div>
        <!--End Headline 2-->

        <!--Start Annotation-->
        <div class="row w-100 mt-5 mb-5">
            <div class="col-md-9">
                <h4 class="hedngead">Headline 1</h3>
            </div>
            <div class="col-md-3"><button class="custom-button"><i class="fa fa-floppy-o" aria-hidden="true"></i> Save
                    Question</button></div>
            <div class="col-md-3">
                <div class="w-100 mb-2">
                    <label for="email" class=""> Add Language</label>
                    <select class="form-control mb-3">
                        <option>English</option>
                        <option>English</option>
                        <option>English</option>
                    </select>
                    <select class="form-control mb-3">
                        <option>German</option>
                        <option>German</option>
                        <option>German</option>
                    </select>
                    <select class="form-control mb-3">
                        <option>Spanish</option>
                        <option>Delete</option>
                        <option>Deactivate</option>
                    </select>
                    <a href="#" class="adds mb-4">+ Add</a>
                </div>
            </div>
            <div class="col-md-9 mt-3 pt-1">
                <div class="w-100 mb-4">
                    <label for="email" class="w-100"> Text</label>
                    <input type="email" class="form-control mb-2 d-inline-block" placeholder="HEADLINE TEXT" id="email">
                </div>
            </div>
        </div>
        <!--End Annotation-->

        <!--Start Annotation 2-->
        <div class="row w-100 mt-5 mb-5">
            <div class="col-md-9">
                <h4 class="hedngead">Headline 1</h3>
            </div>
            <div class="col-md-3"><button class="custom-button"><i class="fa fa-floppy-o" aria-hidden="true"></i> Save Question</button></div>
            <div class="col-md-3">
                <div class="w-100 mb-2">
                    <label for="email" class=""> Add Language</label>
                    <select class="form-control mb-3">
                        <option>English</option>
                        <option>English</option>
                        <option>English</option>
                    </select>
                    <select class="form-control mb-3">
                        <option>German</option>
                        <option>German</option>
                        <option>German</option>
                    </select>
                    <select class="form-control mb-3">
                        <option>Spanish</option>
                        <option>Delete</option>
                        <option>Deactivate</option>
                    </select>
                    <a href="#" class="adds mb-4">+ Add</a>
                </div>
            </div>
            <div class="col-md-9 mt-3 pt-1">
                <div class="w-100 mb-4">
                    <label for="email" class="w-100"> Text</label>
                    <input type="email" class="form-control mb-2 d-inline-block" placeholder="HEADLINE TEXT" id="email">
                </div>
            </div>
        </div>
        <!--End Annotation 2-->

    </div>

</div>

@endsection
