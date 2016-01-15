<html>
    <head>
      	<!--Import Google Icon Font-->
      	<link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      	<!--Import materialize.css-->
     	 <!-- Compiled and minified CSS -->
		<link rel="stylesheet" href="{{ URL::asset('css/bootstrap.min.css') }}">
		<link rel="stylesheet" href="{{ URL::asset('css/main.css') }}">

  		<!-- Compiled and minified JavaScript -->
  		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
      
           

      	<!--Let browser know website is optimized for mobile-->
      	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>

    <body>
    
 <!-- Page Layout here -->
      <div class="container logo">
        <div class="row">
          <div class="col-md-6">
            <img src="{{ URL::asset('img/logo.png') }}" class="pull-left" />
          </div>
          <div class="pull-right quote-otd col-md-6">
            <div class="well well-sm">
              <script type="text/javascript" src="http://www.brainyquote.com/link/quotefu.js"></script>
            </div>
          </div>
        </div>
      </div>
      <div class="container mobile-menu">
        @include('layouts/mobile-menu')
      </div>
      <div class="container">
        <div class="row">
          <div class="col-sm-3 main-nav">
            @include('layouts/main-menu')
          </div>
          <div class="col-sm-9 main-content">
            @yield('content')
          </div>
        </div>
      </div>
    	<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
      <script type="text/javascript" src="{{ URL::asset('js/materialize.min.js') }}"></script>
      <script type="text/javascript" src="{{ URL::asset('js/jquery.sticky.js') }}"></script>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
      <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
      <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
      <script src="//code.jquery.com/jquery-1.10.2.js"></script>
      <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
      <script>
  $(function() {
    $( "#date" ).datepicker();
  });
  </script>
    </body>
</html>