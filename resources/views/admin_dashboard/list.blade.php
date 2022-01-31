@extends('layouts.main')

@section('title','Dashboard')

@section('content')
@push('css-script')
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<style>
    .list a{
        color: #323759 !important;
    }

    .w-5{
        display: none;
    }
   
    .hidden p{
        display: none;
    }


    
</style>
@endpush('css-script')

    <div class="content quereszzz">
		<div class="row mb-5">
			<div class="col-md-4">
				<div class="box-dash">
					<div class="icondd"> <img src="{{config('CONSTANT.ASSET_IMAGE_FULL')}}1.svg"> </div>
					<div class="box-conrt">
						<h3>Active Questionairs</h3>
						<h4>{{$activeCount}}</h4>
					</div>  
				</div>
			</div>
			<div class="col-md-4">
			<div class="box-dash">
					<div class="icondd"> <img src="{{config('CONSTANT.ASSET_IMAGE_FULL')}}2.svg"> </div>
					<div class="box-conrt">
					<h3>Inactive Questionairss</h3>
					<h4>{{$inactiveCount}}</h4>
					</div>
			</div>
			</div>
			<div class="col-md-4">
			<div class="box-dash">
					<div class="icondd"> <img src="{{config('CONSTANT.ASSET_IMAGE_FULL')}}3.svg"> </div>
					<div class="box-conrt">
					<h3>Drafts</h3>
					<h4>{{$draftCount}}</h4>
					</div>
			</div>
			</div>
		</div>
        <div class="row">
			<div class="col-md-12">
				<h1>Drafts</h1>
			</div>
        </div>
        <div class="row">
			<div class="col-md-12">
				<div class="card table-new">
				<div class="card-body">
					<table class="table">
						<thead class="text-primary">
						<tr>
							<th>Your Questionairs </th>
							<th>Last Edit </th>
						</tr>
						</thead>
						<tbody class='list'>
						@if($draftRecord)
						
							@foreach($draftRecord as $row)
						<tr>
							<td><a href="{{route('edit-questionairs',encrypt_decrypt($row->id))}}">{{$row->name}}</a></td>
							<td>{{$row->updated_at == NULL ? changeNewsDateFormat($row->created_at) : changeNewsDateFormat($row->updated_at)}} </td>
						</tr>
							@endforeach
						
						
							@endif
						
						</tbody>
						<!-- <div class="pagination-container card-footer"> -->
						<!-- </div> -->
					</table>
					<div class="text-right pagination-container card-footer">

					{{ $draftRecord->links() }}
					</div>
				</div>
				</div>
			</div>
              
        </div>
        <div class="row">
			<div class="col-md-12">
				<h1>Inactive Questionairs</h1>
			</div>
        </div>
        <div class="row">
			<div class="col-md-12">
			<div class="card table-new">
				<div class="card-body">
					<table class="table">
					<thead class="text-primary">
						<tr>
						<th>Your Questionairs </th>
						<th>Password </th>
						<th>Last Date</th>
						<th>Datasets</th>
						<th>Copy Link</th>
						</tr>
					</thead>
					<tbody class='list'>
						@if($inactiveRecord)
						
						@foreach($inactiveRecord as $row)
						<tr>
						<td><a href="{{route('edit-questionairs',encrypt_decrypt($row->id))}}">{{$row->name}}</a></td>
						<td>{{$row->password_for_protected_link}}</td>
						<td>{{$row->updated_at == NULL ? changeNewsDateFormat($row->created_at) : changeNewsDateFormat($row->updated_at)}} </td>
						<td>0</td>
						<td class="text-left"><i id="link{{$row->id}}" href="{{config('CONSTANT.QUESTIONAIR_URL')}}/{{$row->url_link}}/{{$row->language_id}}" data-index="{{$row->id}}" class="fa fa-pencil-square-o linkCopy" aria-hidden="true"></i></td>
						</tr>
						@endforeach
						@endif
						
					</tbody>
					</table>
					<div class="text-right pagination-container card-footer">

					{{ $inactiveRecord->links() }}
					</div>
				</div>
			</div>
			</div>
              
        </div>
        <div class="row">
			<div class="col-md-12">
				<h1>Active Questionairs</h1>
			</div>
        </div>
        <div class="row">
			<div class="col-md-12">
			<div class="card table-new">
				<div class="card-body">
					<table class="table">
					<thead class="text-primary">
						<tr>
						<th>Your Questionairs </th>
						<th>Password </th>
						<th>Last Date</th>
						<th>Datasets</th>
						<th>Copy Link</th>
						</tr>
					</thead>
					<tbody class='list'>  
					@if($activeRecord)
						
						@foreach($activeRecord as $row)
						<tr>
						<td><a href="{{route('edit-questionairs',encrypt_decrypt($row->id))}}">{{$row->name}}</a></td>
						<td>{{$row->password_for_protected_link}}</td>
						<td>{{$row->updated_at == NULL ? changeNewsDateFormat($row->created_at) : changeNewsDateFormat($row->updated_at)}} </td>
						<td>0</td>
						<td class="text-left"><i id="link{{$row->id}}"  href="{{config('CONSTANT.QUESTIONAIR_URL')}}/{{$row->url_link}}/{{$row->language_id}}" data-index="{{$row->id}}" class="fa fa-pencil-square-o linkCopy" aria-hidden="true"></i></td>
						</tr>
						@endforeach
						@endif
						
					</tbody>
					</table>
					<div class="text-right pagination-container card-footer">

					{{ $activeRecord->links() }}
					</div>
				</div>
			</div>
			</div>

              
        </div>
      </div>
      

@endsection

@push('js-script')

<script>

    $(function(){
		var $temp = $("<input>");
		$('.linkCopy').click(function(){
			var quesId = $(this).data('index'),
			urlId = $('#link'+quesId).attr('href');
			$("body").append($temp);
			$temp.val(urlId).select();
			prompt('copy to clipboard',urlId);
			document.execCommand("copy");
			$temp.remove();
		})

    });


</script>

@endpush
