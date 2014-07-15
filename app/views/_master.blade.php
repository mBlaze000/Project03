<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>@yield('title','Developer\'s Best Friend')</title>
    
        <!-- Bootstrap core CSS -->
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Custom styles for this template -->
    <link rel="stylesheet" href="{{ URL::asset('styles/justified-nav.css') }}" type="text/css">
    
    <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body>

    <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="/">Developer's Best Friend</a>
            </div>
            <div class="collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="@yield('home')"><a href="/">Home</a></li>
                    <li class="@yield('lorem')"><a href="/lorem">Lorem Ipsum</a></li>
                    <li class="@yield('users')"><a href="/users">Faux Users</a></li>
                </ul>
            </div><!--/.nav-collapse -->
        </div>
    </div>
    
    <div class="container">

        <h1>@yield('title','Developer\'s Best Friend')</h1>
        @yield('body')
        
        <!-- Site footer -->
        <div class="footer">
            <p>&copy; Dynamic Web Applications - Summer 2014</p>
        </div>
    
    </div><!-- /.container -->
    
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
  <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>

</body>
</html>
