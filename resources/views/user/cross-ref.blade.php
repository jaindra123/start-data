@extends('layouts.main')

@section('title','Cross Reference')

@section('content')


    <div class="content quereszz">
        <div class="row">
            <div class="col-md-9">
                <h1>Analyze your Data</h1>
            </div>
            <div class="col-md-3">
                <button class="custom-button" data-toggle="modal" data-target="#exampleModal3"><img src="{{asset('assets/img/6.svg')}}">Cross Reference</button>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <ul class="nav nav-tabs">
                    <li class="nav-item">
                        <a class="nav-link " data-toggle="tab" href="#home">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="19"
                                height="19" viewBox="0 0 19 19">
                                <defs>
                                    <clipPath id="clip-path">
                                        <rect id="Rectangle_191" data-name="Rectangle 191" width="19" height="19"
                                            fill="#ccc" />
                                    </clipPath>
                                </defs>
                                <g id="BarChartIcon" clip-path="url(#clip-path)">
                                    <path id="Path_121" data-name="Path 121"
                                        d="M743.268,204.256H752.8v3h-9.533Zm0-4.085h15.252v3H743.268Zm0-4.085H752.8v3h-9.533Zm0-4.085h4.9v3h-4.9ZM740,192h1.634v16.887h16.887v1.634H740Z"
                                        transform="translate(-740 -192)" fill="#ccc" fill-rule="evenodd" />
                                </g>
                            </svg>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" data-toggle="tab" href="#menu1">
                            <svg xmlns="http://www.w3.org/2000/svg" width="18.521" height="18.521"
                                viewBox="0 0 18.521 18.521">
                                <g id="ColumnChartIcon" transform="translate(0)">
                                    <path id="Path_122" data-name="Path 122" d="M15.634,14H14V32.521H32.521V30.887H15.634Z"
                                        transform="translate(-14 -14)" fill="#dc3912" />
                                    <rect id="Rectangle_192" data-name="Rectangle 192" width="3" height="10"
                                        transform="translate(2.972 5)" fill="#dc3912" />
                                    <rect id="Rectangle_193" data-name="Rectangle 193" width="3" height="15"
                                        transform="translate(6.972)" fill="#dc3912" />
                                    <rect id="Rectangle_194" data-name="Rectangle 194" width="3" height="10"
                                        transform="translate(11.972 5)" fill="#dc3912" />
                                    <rect id="Rectangle_195" data-name="Rectangle 195" width="2" height="5"
                                        transform="translate(15.972 10)" fill="#dc3912" />
                                </g>
                            </svg>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#menu2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20.672" height="20.7" viewBox="0 0 20.672 20.7">
                                <g id="PieChartIcon" transform="translate(0)">
                                    <path id="Path_123" data-name="Path 123"
                                        d="M19.805,10a10.357,10.357,0,0,0,.545,20.7,10.145,10.145,0,0,0,6.918-2.669l-7.463-7.463Z"
                                        transform="translate(-10 -10)" fill="#ccc" />
                                    <path id="Path_124" data-name="Path 124"
                                        d="M50,10v9.805h9.778A10.326,10.326,0,0,0,50,10Z" transform="translate(-39.105 -10)"
                                        fill="#ccc" />
                                    <path id="Path_125" data-name="Path 125"
                                        d="M52.8,50l6.373,6.373A10.137,10.137,0,0,0,61.815,50Z"
                                        transform="translate(-41.143 -39.105)" fill="#ccc" />
                                </g>
                            </svg>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#menu3">
                            <svg xmlns="http://www.w3.org/2000/svg" width="21.789" height="15.252"
                                viewBox="0 0 21.789 15.252">
                                <g id="TableIcon" transform="translate(0)">
                                    <path id="Path_126" data-name="Path 126"
                                        d="M28.155,24.9H22.708V21.634h5.447Zm0,4.358H22.708V25.992h5.447Zm0,4.358H22.708V30.35h5.447Zm-11.984,0V30.35h5.447v3.268Zm-6.537,0V30.35h5.447v3.268Zm0-7.626h5.447V29.26H9.634Zm0-4.358h5.447V24.9H9.634Zm11.984,4.358V29.26H16.171V25.992Zm0-4.358V24.9H16.171V21.634ZM8,20V35.252H29.789V20Z"
                                        transform="translate(-8 -20)" fill="#ccc" />
                                </g>
                            </svg>
                        </a>
                    </li>
                    <span class="ml-4 float-right ttttt">
                        <span class="tyur mr-3"><button class="custom-button2">Show Key Figures</button><img
                                src="{{asset('assets/img/5.svg')}}" class="mr-2 ml-2">Compare</span>
                        <div class="tyurd">
                            <div class="wrappers">
                                <input id="checkbox" type="checkbox" class="checkbox hidden">
                                <label class="switchbox" for="checkbox"></label>
                            </div>
                        </div>
                    </span>
                </ul>

                <!-- Tab panes -->
                <div class="tab-content">
                    <div class="tab-pane active container" id="home"><canvas id="myChart"></canvas></div>
                    <div class="tab-pane container" id="menu1">
                        <div>
                            <canvas id="barChart"></canvas>
                        </div>
                    </div>
                    <div class="tab-pane container" id="menu2">
                        <div>
                            <canvas id="myChart"></canvas>
                        </div>
                    </div>
                    <div class="tab-pane container" id="menu3">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Antwork</th>
                                    <th>Under 18</th>
                                    <th>18-24</th>
                                    <th>25-34</th>
                                    <th>35-44</th>
                                    <th>45-54</th>
                                    <th>55-67</th>
                                    <th>Over 67</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>0.6</td>
                                    <td>3.5</td>
                                    <td>4.5</td>
                                    <td>4.2</td>
                                    <td>7.7</td>
                                    <td>11.7</td>
                                    <td>9.8</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>0.6</td>
                                    <td>3.5</td>
                                    <td>4.5</td>
                                    <td>4.2</td>
                                    <td>7.7</td>
                                    <td>11.7</td>
                                    <td>9.8</td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>0.6</td>
                                    <td>3.5</td>
                                    <td>4.5</td>
                                    <td>4.2</td>
                                    <td>7.7</td>
                                    <td>11.7</td>
                                    <td>9.8</td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>0.6</td>
                                    <td>3.5</td>
                                    <td>4.5</td>
                                    <td>4.2</td>
                                    <td>7.7</td>
                                    <td>11.7</td>
                                    <td>9.8</td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td>0.6</td>
                                    <td>3.5</td>
                                    <td>4.5</td>
                                    <td>4.2</td>
                                    <td>7.7</td>
                                    <td>11.7</td>
                                    <td>9.8</td>
                                </tr>
                                <tr>
                                    <td>6</td>
                                    <td>0.6</td>
                                    <td>3.5</td>
                                    <td>4.5</td>
                                    <td>4.2</td>
                                    <td>7.7</td>
                                    <td>11.7</td>
                                    <td>9.8</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="row">
                    <div class="col-md-8">
                        <h5 class="htksma">Select your Question and Filter your Answers</h5>
                    </div>
                    <div class="col-md-4">
                        <a href="#" class="hdksae"><img src="{{asset('assets/img/9.svg')}}" class="mr-2">Remove Filters</a>
                    </div>
                </div>
                <div class="card table-neww">
                    <div class="card-body">
                        <table class="table">
                            <thead class="text-primary">
                                <tr>
                                    <th>Question </th>
                                    <th>Answers </th>
                                    <th>
                                        <div class="radiodd">
                                            <input id="che11" name="radio" type="checkbox">
                                            <label for="che11" class="selectall radio-label ggggg">Select All</label>
                                        </div>
                                    </th>
                                </tr>
                            </thead>
                        </table>
                        <table class="table">
                            <tbody>
                                <tr>
                                    <td>
                                        <div class="radiodd">
                                            <input id="che-1" name="radio" type="checkbox" class="individual">
                                            <label for="che-1" class="radio-label">Gender</label>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="rtyf">
                                            <div class="radiodd">
                                                <input id="che-31" name="radio" type="checkbox">
                                                <label for="che-31" class="radio-label">Male</label>
                                            </div>
                                            <div class="radiodd">
                                                <input id="che-32" name="radio" type="checkbox">
                                                <label for="che-32" class="radio-label">Female</label>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="radiodd">
                                            <input id="che-33" name="radio" type="checkbox" class="individual">
                                            <label for="che-33" class="radio-label">Age</label>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="radiodd">
                                            <input id="che-36" name="radio" type="checkbox" class="individual">
                                            <label for="che-36" class="radio-label">How often have you visited us last
                                                year?</label>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="radiodd">
                                            <input id="che-40" name="radio" type="checkbox" class="individual">
                                            <label for="che-40" class="radio-label">How did you like the Exhibition?</label>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div id="date_range_slider" class="w-100 ui-rangeSlider ui-rangeSlider-withArrows ui-dateRangeSlider"
                    style="position: relative;">
                    <div class="ui-rangeSlider-container" style="position: absolute; width: 507.6px;">
                        <div class="ui-rangeSlider-innerBar"
                            style="position: absolute; top: 0px; left: 0px; width: 517.6px;"></div>
                        <div style="position: absolute; top: 0px; width: 264.8px; left: 29.75px;"
                            class="ui-rangeSlider-bar"></div>
                        <div style="position: absolute; top: 0px; left: 29.7447px;"
                            class="ui-rangeSlider-handle ui-rangeSlider-leftHandle">
                            <div class="ui-rangeSlider-handle-inner"></div>
                        </div>
                        <div style="position: absolute; top: 0px; left: 263.545px;"
                            class="ui-rangeSlider-handle ui-rangeSlider-rightHandle">
                            <div class="ui-rangeSlider-handle-inner"></div>
                        </div>
                    </div>
                    <div class="ui-rangeSlider-arrow ui-rangeSlider-leftArrow" style="position: absolute; left: 0px;">
                        <div class="ui-rangeSlider-arrow-inner"></div>
                    </div>
                    <div class="ui-rangeSlider-arrow ui-rangeSlider-rightArrow" style="position: absolute; right: 0px;">
                        <div class="ui-rangeSlider-arrow-inner"></div>
                    </div>
                    <div class="ui-rangeSlider-label ui-rangeSlider-leftLabel"
                        style="position: absolute; display: block; right: 429.15px;">
                        <div class="ui-rangeSlider-label-value">2010-02-11</div>
                        <div class="ui-rangeSlider-label-inner"></div>
                    </div>
                    <div class="ui-rangeSlider-label ui-rangeSlider-rightLabel"
                        style="position: absolute; display: block; right: 195.75px;">
                        <div class="ui-rangeSlider-label-value">2011-02-11</div>
                        <div class="ui-rangeSlider-label-inner"></div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <button class="custom-button"><img src="{{asset('assets/img/8.svg')}}">Download PDF</button>
            </div>
            <div class="col-md-3">
                <button class="custom-button"><img src="{{asset('assets/img/7.svg')}}"> Download Excel</button>
            </div>
            <div class="col-md-12 mt-5 mb-4">
                <div class="card table-new">
                    <div class="card-body">
                        <table class="table">
                            <thead class="text-primary">
                                <tr>
                                    <th>File Name </th>
                                    <th>Last Date </th>
                                    <th>Datasets </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <div class="radiodd">
                                            <input id="che-1" name="radio" type="radio" class="individual">
                                            <label for="che-1" class="radio-label">Dataset Name 1</label>
                                        </div>
                                    </td>
                                    <td>2020-02-02</td>
                                    <td> 326</td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="radiodd">
                                            <input id="che-2" name="radio" type="radio" class="individual">
                                            <label for="che-2" class="radio-label">Dataset Name 2</label>
                                        </div>
                                    </td>
                                    <td>2020-03-05</td>
                                    <td> 326</td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="radiodd">
                                            <input id="che-3" name="radio" type="radio" class="individual">
                                            <label for="che-3" class="radio-label">Dataset Name 3</label>
                                        </div>
                                    </td>
                                    <td>2020-09-04</td>
                                    <td> 326</td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="radiodd">
                                            <input id="che-4" name="radio" type="radio" class="individual">
                                            <label for="che-4" class="radio-label">Dataset Name 4</label>
                                        </div>
                                    </td>
                                    <td>2019-01-02</td>
                                    <td> 326</td>
                                </tr>


                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

@endsection
