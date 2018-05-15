@extends('layouts.fmaster')
@section('pageTitle', 'Research | ')
@section('mainContent')
<div class="wrapper row3">
  <main class="hoc container clear"> 
    <!-- main body -->
      @include('components._aboutSection')
    <!-- ################################################################################################ -->
    <div class="content three_quarter text-justify"> 
      <!-- ################################################################################################ -->
	 <h5>RESEARCH</h5>
	 	<p>CIDS is a leading research centre worldwide. We deliver internationally excellent research outputs, which impact upon transport policy and practice, and contribute to the wider economy and society. Our research mission is to support the development of intelligent mobility systems that are connected, inclusive, productive and resilient.</p>
	 <ul class="nospace group elements">
      <li class="one_third first mt-4">
        <figure><img src="images/demo/320x220.png" alt="">
          <figcaption><a href="/researchTopic">Biomedical</a></figcaption>
        </figure>
      </li>
      <li class="one_third mt-4">
        <figure><img src="images/demo/320x220.png" alt="">
          <figcaption><a href="#">Sed praesent</a></figcaption>
        </figure>
      </li>
      <li class="one_third mt-4">
        <figure><img src="images/demo/320x220.png" alt="">
          <figcaption>
          	<a href="#">Economic and Appraisal</a>
          </figcaption>
        </figure>
      </li>
      <li class="one_third first mt-4">
        <figure><img src="images/demo/320x220.png" alt="">
          <figcaption><a href="#">Arcu maximus</a></figcaption>
        </figure>
      </li>
      <li class="one_third mt-4">
        <figure><img src="images/demo/320x220.png" alt="">
          <figcaption><a href="#">Sed praesent</a></figcaption>
        </figure>
      </li> 
      <li class="one_third mt-4">
        <figure><img src="images/demo/320x220.png" alt="">
          <figcaption>
          	<a href="#">Economic and Appraisal</a>
          </figcaption>
        </figure>
      </li>
    </ul>
      <!-- ################################################################################################ -->
    </div>
    <!-- ################################################################################################ -->
    <!-- / main body -->
    <div class="clear"></div>
  </main>
</div>
@endsection