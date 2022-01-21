
<main class="list-form">
    <div class="cotainer">
        <div class="row justify-content-center">
            <div class="col-md-4">
                <div class="card">
                    <h3 class="card-header text-center">List of Access User</h3>
                    <div class="card-body">
                        @php
                            //echo '<pre>';
                            //print_r($values);
                            //die;
                        @endphp
                        @if(Session::has('message'))
                            <div class="alert alert-success">
                                <h3>{{Session::get('message')}}</h3>
                            </div>
                        @endif

                        <div class="col-xl-12 col-lg-12">
                            <table border='1' class="table table-bordered" id="content">
                                <thead>
                                    <tr>
                                        <th>S NO.</th>
                                        <th>Name</th>
                                        <th>UserName</th>
                                        <th>Email</th>
                                        <th>Role</th>
                                        <th>Language</th>
                                        <th>Customer</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if(!empty($values))
                                    @foreach($values as $key => $value)
                                        <tr>
                                            <td>{{$values->firstItem() + $key}}</td>
                                            <td>{{$value->name}}</td>
                                            <td>{{$value->username}}</td>
                                            <td>{{$value->email}}</td>
                                            <td>{{$value->role}}</td>
                                            <td>{{$value->language[0]['language']}}</td>
                                            <td>{{$value->customer[0]['customer_name']}}</td>
                                            <td>
                                                <a href="{{route('edit.registration',['id'=>$value->id])}}"><button class="btn btn-primary">Edit</button></a> | 
                                                <a href="#"><button class="btn btn-primary">Delete</button></a> |
                                                <a href="{{route('email.send',['id'=>$value->id])}}"><button class="btn btn-primary">Send Mail</button></a>
                                            </td>
                                        </tr>
                                    @endforeach
                                    @else
                                        <tr>
                                            <td colspan="8">{{'No Record Found'}}</td>
                                        </tr>
                                    @endif
                                </tbody>
                            </table>
                            <span>{{$values->links()}}</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<style>
    .w-5{
        display:none;
    }
</style>
