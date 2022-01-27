@extends('layouts.main')

@section('title','DataSet')

@section('content')
    <div class="content quereszz">
        <div class="row">
            <div class="col-md-12">
                <h1>Select a Dataset</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 mb-4">
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
            <div class="col-md-6">
                <div id="date_range_slider" class="w-100"></div>
            </div>
            <div class="col-md-3">
                <button class="custom-button"><img src="{{asset('assets/img/8.svg')}}">Download PDF</button>
            </div>
            <div class="col-md-3">
                <button class="custom-button"><img src="{{asset('assets/img/7.svg')}}"> Download Excel</button>
            </div>
        </div>

    </div>
</div>
@endsection
