@extends('layouts.main')

@section('title','Create New Questionair')

@section('content')

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
    </nav>
    <!-- End Navbar -->
    <div class="content quereszz">
        <div class="row">
            <div class="col-md-9">
                <h1>Global Questionair Settings and Start Page</h1>
            </div>
            <div class="col-md-3">
                <button class="custom-button"><i class="fa fa-pencil" aria-hidden="true"></i> Publish</button>
            </div>
        </div>
        <div class="row">
            <div class="col-md-9">
                <form class="" action="/action_page.php">
                    <div class="row w-100">
                        <div class="col-md-3">
                            <label for="email" class="mr-sm-2">Questionair Name</label>
                        </div>
                        <div class="col-md-9">
                            <input type="text" class="form-control mb-2 mr-sm-2" placeholder="Alte Meister" id="email">
                        </div>
                    </div>
                    <div class="row w-100">
                        <div class="col-md-3">
                            <label for="email" class="mr-sm-2">Year</label>
                        </div>
                        <div class="col-md-9">
                            <input type="text" class="form-control mb-2 mr-sm-2" placeholder="2021" id="email">
                        </div>
                    </div>
                    <div class="row w-100">
                        <div class="col-md-3">
                            <label for="email" class="mr-sm-2">Base Color</label>
                        </div>
                        <div class="col-md-9">
                            <input type="text" class="form-control mb-2 mr-sm-2" placeholder="#48KKAS" id="email">
                        </div>
                    </div>
                    <div class="row w-100">
                        <div class="col-md-3">
                            <label for="email" class="mr-sm-2"> Button Background</label>
                        </div>
                        <div class="col-md-9">
                            <input type="email" class="form-control mb-2 mr-sm-2" placeholder=" #48KKAS" id="email">
                        </div>
                    </div>
                    <div class="row w-100">
                        <div class="col-md-3">
                            <label for="email" class="mr-sm-2"> Button Text</label>
                        </div>
                        <div class="col-md-9">
                            <input type="email" class="form-control mb-2 mr-sm-2" placeholder=" #48KKAS" id="email">
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-md-3">
                <button class="custom-button"><i class="fa fa-pencil" aria-hidden="true"></i> Start Edit</button>
                <button class="custom-button"><i class="fa fa-floppy-o" aria-hidden="true"></i> Safe Draft</button>
                <button class="custom-button"><i class="fa fa-trash" aria-hidden="true"></i> Delete Draft</button>
            </div>
        </div>
        <div class="row w-100">
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
                        <div class="input-filesss">
                            <input type="file" id="file-uploads" multiple required />
                            <label for="file-uploads" class="btns"><i class="fa fa-picture-o "
                                    aria-hidden="true"></i><span class="">Upload Start Page Picture</span></label>
                            <div id="file-uploads-filename"></div>
                        </div>
                    </div>
                    <div class="w-100 mt-4 mb-2">
                        <div class="input-filesss">
                            <input type="file" id="file-uploads" multiple required />
                            <label for="file-uploads" class="btns"><i class="fa fa-picture-o"
                                    aria-hidden="true"></i><span class="">Upload Last Page Picture</span></label>
                            <div id="file-uploads-filename"></div>
                        </div>
                    </div>
                    <div class="w-100 mt-4 mb-2">
                        <label for="email" class="">Display Progress Bar</label>
                        <div class="wrappers">
                            <input id="checkbox" type="checkbox" class="checkbox hidden" />
                            <label class="switchbox" for="checkbox"></label>
                        </div>
                    </div>
                    <div class="w-100 mt-4 mb-2">
                        <label for="email" class="">Last Page Timer (Seconds)</label>
                        <input type="text" class="form-control mb-2 mr-sm-2" placeholder="10" id="email">
                    </div>
                    <div class="w-100 mt-4 mb-2">
                        <label for="email" class="">Idle Timer (Seconds)</label>
                        <input type="text" class="form-control mb-2 mr-sm-2" placeholder="10" id="email">
                    </div>
                    <div class="w-100 mt-4 mb-2">
                        <label for="email" class="">Protect Link with Password</label>
                        <div class="wrappers">
                            <input id="checkbox2" type="checkbox" class="checkbox hidden" />
                            <label class="switchbox" for="checkbox2"></label>
                        </div>
                    </div>
                    <div class="w-100 mt-4 mb-2">
                        <label for="email" class="">Select</label>
                        <select class="form-control mb-3">
                            <option>Customer</option>
                            <option>Customer</option>
                            <option>Customer</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="col-md-9 mt-3 pt-1">

                <div class="w-100 mb-4">
                    <label for="email" class=""> Headline Questionair (repeats on each page)</label>
                    <input type="email" class="form-control mb-2" placeholder="" id="email">
                </div>
                <div class="w-100 mb-4">
                    <label for="email" class=""> Start Page Text</label>
                    <textarea class="form-control mb-2" placeholder=""></textarea>
                </div>
                <div class="w-100 mb-4">
                    <label for="email" class=""> Last Page</label>
                    <textarea class="form-control mb-2" placeholder=""></textarea>
                </div>
            </div>
        </div>
    </div>

</div>

@endsection
