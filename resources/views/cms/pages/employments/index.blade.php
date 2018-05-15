@extends('layouts.aMaster')
@section('pageTitle', 'Type of employment')
@section('mainContent')
@include('cms.components.notification')
<div class="col-12 card">
	<div class="card-body">
		<div class="row">
		<div class="col-6">
			<h3>Add New</h3>
			<hr>
			<form action="{{route('emp.store')}}" method="post" class="form">
				@csrf
				<div class="form-group">
					<input type="text" name="name" class="form-control">
				</div>
				
				<button class="btn btn-success" type="Submit">Submit</button>
			</form>
		</div>
		<div class="col-6">
			<h3>List</h3>
			<hr>
			<div class="table-responsive">
				<table class="table">
					<thead>
						<th>#</th>
						<th>Type</th>
						<th></th>
					</thead>
					<tbody>
						@foreach($datas as $key=>$data)
							<tr>
								<td>{{$key+1}}</td>
								<td>{{$data->name}}</td>
								<td>
									<form action="/emp/{{$data->id}}" method="POST">
									   @method('DELETE')
									  @csrf
									   <button type="submit" onclick="confirm('Are you sure you want to delete this?')" class="btn btn-outline-danger rounded-circle"><i class="fa fa-trash"></i></button>
									</form>					
								</td>
							</tr>
						@endforeach
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>
</div>
@endsection
