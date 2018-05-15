@extends('layouts.fmaster')
@section('pageTitle', 'Our People | ')
@section('styles')
	
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
      <h1>Rabindra Nath Shrestha</h1>
      <img class="imgr borderedbox inspace-5" src="/images/people/1.jpg" alt="">
       	<h4>PhD Researcher</h4>
       	<p>Room: <a href="#">2.10/LG.122</a></p>
        <p>Email: <a href="mailto:"xxx@cidsioe.edu.np">xxx@cidsioe.edu.np</a></p>
        <p>Research Group: <a href="#">Spatial Modeling and Dynamics</a></p>    
       <div class="hoc clear">
       	<div class="accordion" id="accordionExample">
 			<ul class="nav nav-tabs" id="myTab" role="tablist">
			  <li class="nav-item">
			    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Profile</a>
			  </li>
			  <li class="nav-item">
			    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Research</a>
			  </li>
			  <li class="nav-item">
			    <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Teaching</a>
			  </li>
			  <li class="nav-item">
			    <a class="nav-link" id="publications-tab" data-toggle="tab" href="#publications" role="tab" aria-controls="publications" aria-selected="false">Publications</a>
			  </li>
			</ul>
			<div class="tab-content" id="myTabContent">
			  <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
			  
			  	<div class="content mt-3 ml-3">
			  		<p>Home Content</p>
				</div>
			  </div>
			  <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
			  	<div class="content mt-3 ml-3">
			  		<p>Home Content</p>
				</div></div>
			  <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
			  	<div class="content mt-3 ml-3">
			  		<p>Contact Content</p>
				</div>
			  </div>
			  <div class="tab-pane fade" id="publications" role="tabpanel" aria-labelledby="publications-tab">
			  	<div class="content mt-3 ml-3">
			  		<p>Publications Content</p>
				</div>
			  </div>
			</div>
		</div>
       </div>
    </div>
    <!-- ################################################################################################ -->
    <!-- / main body -->
    <div class="clear"></div>
  </main>
</div>
@endsection

@section('scripts')
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
@endsection
