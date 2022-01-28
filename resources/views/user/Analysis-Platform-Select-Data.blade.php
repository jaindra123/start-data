@extends('layouts.main')

@section('title','DataSets')

@section('content')
    <div class="content quereszz">
        <div class="row">
            <div class="col-md-9">
                <h1>Select one or more datasets</h1>
            </div>
            <div class="col-md-3">
                <button class="custom-button"><i class="fa fa-bar-chart" aria-hidden="true"></i>Analyze Data</button>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
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
                                            <input id="che-1" name="radio" type="checkbox" class="individual">
                                            <label for="che-1" class="radio-label">Questionair Name 1</label>
                                        </div>
                                    </td>
                                    <td>2020-02-02</td>
                                    <td> 326</td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="radiodd">
                                            <input id="che-2" name="radio" type="checkbox" class="individual">
                                            <label for="che-2" class="radio-label">Questionair Name 2</label>
                                        </div>
                                    </td>
                                    <td>2020-03-05</td>
                                    <td> 326</td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="radiodd">
                                            <input id="che-3" name="radio" type="checkbox" class="individual">
                                            <label for="che-3" class="radio-label">Questionair Name 3</label>
                                        </div>
                                    </td>
                                    <td>2020-09-04</td>
                                    <td> 326</td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="radiodd">
                                            <input id="che-4" name="radio" type="checkbox" class="individual">
                                            <label for="che-4" class="radio-label">Questionair Name 4</label>
                                        </div>
                                    </td>
                                    <td>2019-01-02</td>
                                    <td> 326</td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="radiodd">
                                            <input id="che-5" name="radio" type="checkbox" class="individual">
                                            <label for="che-5" class="radio-label">Questionair Name 5</label>
                                        </div>
                                    </td>
                                    <td>2019-01-02</td>
                                    <td> 326</td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="radiodd">
                                            <input id="che-6" name="radio" type="checkbox" class="individual">
                                            <label for="che-6" class="radio-label">Questionair Name 6</label>
                                        </div>
                                    </td>
                                    <td>2019-01-02</td>
                                    <td> 326</td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="radiodd">
                                            <input id="che-7" name="radio" type="checkbox" class="individual">
                                            <label for="che-7" class="radio-label">Questionair Name 7</label>
                                        </div>
                                    </td>
                                    <td>2019-01-02</td>
                                    <td> 326</td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="radiodd">
                                            <input id="che-8" name="radio" type="checkbox" class="individual">
                                            <label for="che-8" class="radio-label">Questionair Name 8</label>
                                        </div>
                                    </td>
                                    <td>2019-01-02</td>
                                    <td> 326</td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="radiodd">
                                            <input id="che-9" name="radio" type="checkbox" class="individual">
                                            <label for="che-9" class="radio-label">Questionair Name 9</label>
                                        </div>
                                    </td>
                                    <td>2019-01-02</td>
                                    <td> 326</td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="radiodd">
                                            <input id="che-10" name="radio" type="checkbox" class="individual">
                                            <label for="che-10" class="individual radio-label">Questionair Name 10</label>
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
            <div class="col-md-12">
                <div class="card card-plain">
                    <div class="card-body">
                        <table class="table">
                            <tbody>
                                <tr>
                                    <td width="50%">
                                        <div class="radiodd">
                                            <input id="che11" name="radio" type="checkbox">
                                            <label for="che11" class="selectall radio-label">Select All</label>
                                        </div>
                                    </td>
                                    <td>
                                        <button class="custom-button"><img src="{{asset('assets/img/8.svg')}}"> Download PDF</button>
                                    </td>
                                    <td>
                                        <button class="custom-button"><img src="{{asset('assets/img/7.svg')}}"> Download
                                            Excel</button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div id="date_range_slider" class="w-100"></div>
        </div>

    </div>
</div>
@endsection