@extends('layouts.aMaster')
@section('pageTitle', 'Type of employment')
@section('mainContent')
@include('cms.components.notification')

<div class="card">
    <div class="card-body">
        <h3>Research List</h3>
        <div class="table-responsive">
            <table id="researchTable" class="table display table-bordered table-striped">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Topic</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                    	<td></td>
                    	<td></td>
                    	<td></td>
                    </tr>
                </tbody>
            </table>
		</div>
	</div>
</div>	
@endsection
@section('scripts')
	@include('cms.components.datatables')
	<script>
		$(document).ready(function() {
        	$('#researchTable').DataTable();
    	});
	</script>
@endsection