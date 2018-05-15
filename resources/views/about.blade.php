@extends('layouts.fmaster')
@section('pageTitle', 'About Us | ')
@section('styles')
<link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css">
@endsection
@section('mainContent')
<div class="wrapper row3">
  <main class="hoc container clear"> 
    <!-- main body -->
    <!-- ################################################################################################ -->
      @include('components._aboutSection')
    <!-- ################################################################################################ -->
    <!-- ################################################################################################ -->
    <div class="content three_quarter"> 
      <!-- ################################################################################################ -->
      <h1>OUR PEOPLE</h1>
      <div class="scrollable">
        <table id="example" class="display" style="width:100%">
          <thead>
            <tr>
              <th>Name</th>
              <th>Position</th>
              <th>Address</th>
              <th>Email</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td><a href="/people">Value 1</a></td>
              <td>Value 2</td>
              <td>Value 3</td>
              <td>Value 4</td>
            </tr>
          </tbody>
        </table>
      </div>
      <!-- ################################################################################################ -->
    </div>
    <!-- ################################################################################################ -->
    <!-- / main body -->
    <div class="clear"></div>
  </main>
</div>
@endsection
@section('scripts')
<script type="text/javascript" src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
<script type="text/javascript">
	$(document).ready(function() {
	    $('#example').DataTable({
	    	"lengthMenu" : ["25"]
	    });
	} );
</script>
@endsection