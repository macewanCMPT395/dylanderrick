<!doctype html>

<html>
	<head>
		<meta charset="utf-8">

		{{ HTML::script('js/jquery-1.11.2.min.js'); }}
                {{ HTML::style('css/default.css'); }}
            
		@yield('header')
	</head>

	<body>
            <div class="defaultLayoutTitle">
                <h1 id="defaultLayoutName">
                    @yield('pageTitle')
                </h1>

                <div class="defaultLayoutMenu">
                    @yield('interface')
                </div>

            </div>
            
            <div class="defaultLayoutContent">   
              @yield('content')
            </div> 
            
	    <div class="defaultLayoutFooter">
            @yield('footer')
	    </div>
	</body>

</html>
