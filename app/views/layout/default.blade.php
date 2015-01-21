<!doctype html>

<html>
	<head>
		<meta charset="utf-8">

		{{ HTML::script('js/jquery-1.11.2.min.js') }}
		@yield('header')
	</head>

	<body>

	  @yield('content')



	  @yield('footer')
	</body>


</html>
