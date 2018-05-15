@if(session('success'))
         <div class="alert alert-success" style="color: white; width: 100%">
         	{{session('success')}}
         </div>
       
@endif
@if(count($errors))
	@foreach($errors->all() as $error)
       <div class="alert alert-danger">
       	{{$error}}
       </div>
    @endforeach
@endif