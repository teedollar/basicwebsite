<!DOCTYPE html>
<html>
<head>
	<title>Basic Site</title>
	<link rel="stylesheet" type="text/css" href="/css/app.css">
</head>
<body>

	@include('inc.navbar')

	<div class="container">
		@if(Request::is('/'))
			@include('inc.showcase')
		@endif

		<div class="row">
			<div class="col-md-8 col-lg-8">
				@include('inc.messages')
				
				@yield('content')
			</div>

			<div class="col-md-4 col-lg-4">
				@include('layouts.sidebar')
			</div>
		</div>
	</div>

	
	<footer id="footer" class="text-center">
		<p>Copyright {{date('Y')}} &copy; TeeDollar</p>
	</footer>
	


</body>
</html>