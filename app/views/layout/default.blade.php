<!doctype html>

<html>
	<head>
		<meta charset="utf-8">

		{{ HTML::script('js/jquery-1.11.2.min.js'); }}
                {{ HTML::style('css/default.css'); }}
                {{ HTML::style('css/titleBanner.css'); }}
            
		@yield('header')
	</head>

	<body>
            
            <div class="titleBlock">
                <h1 id="name">
                    @yield('pageTitle')
                </h1>

                <div class="menuBlock">
                    @yield('interface')
                </div>

            </div>

            <div class="layoutContentBlock">   

              @yield('content')

            </div> 
            
            @yield('footer')
	</body>

</html>
