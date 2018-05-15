<!DOCTYPE html>
<html>
<head>
  <meta name="csrf-token" content="{{ csrf_token() }}">
<title>@yield('pageTitle') {{ config('app.name', 'Laravel') }}</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.12/css/all.css" integrity="sha384-G0fIWCsCzJIMAVNQPfjH08cyYaUtMwjJwqiRKxxE/rx96Uroj1BtIQ6MLJuheaO9" crossorigin="anonymous">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
<link href="{{ asset('layout/styles/layout.css') }}" rel="stylesheet" type="text/css" media="all">
<link rel="stylesheet" type="text/css" href="{{asset('css/overrides.css')}}">
@yield('styles')
</head>
<body id="top">
<div class="wrapper row0">
  @include('components._topbar')
</div>
<div class="wrapper row1">
  @include('components._LowerTopbar')
</div>
<div class="wrapper row2">
  @include('components._nav')
</div>
@yield('mainContent')
<div class="wrapper row4">
  <footer id="footer" class="hoc clear"> 
    @include('components._footer')
  </footer>
</div>
<div class="wrapper row5">
  <div id="copyright" class="hoc clear"> 
   
    <p class="fl_left">Copyright &copy; 2018 - All Rights Reserved - <a href="#">CIDSIOE</a></p>
    <p class="fl_right">Developed By <a target="_blank" href="http://www.seedsgroup.com.np" title="Seeds Group">SEEDS GROUP</a></p>
   
  </div>
</div>
<a id="backtotop" href="#top"><i class="fa fa-chevron-up"></i></a>
<!-- JAVASCRIPTS -->
<script src="{{asset('layout/scripts/jquery.min.js')}}"></script>
<script src="{{asset('layout/scripts/jquery.backtotop.js')}}"></script>
<script src="{{asset('layout/scripts/jquery.mobilemenu.js')}}"></script>
<script src="/layout/scripts/jquery.flexslider-min.js"></script>
@yield('scripts')
</body>
</html>