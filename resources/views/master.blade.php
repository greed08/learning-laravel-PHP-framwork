<html>
<head>
<title> @yield('title') </title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6\
/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6\
/css/bootstrap-theme.min.css">
<script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.mi\
n.js"></script>
</head>
<body>

<nav class="navbar navbar-default">
<div class="container-fluid">
<!-- Brand and toggle get grouped for better mobile display -->
<div class="navbar-header">
<button type="button" class="navbar-toggle collapsed" data-toggle="c\
ollapse"
data-target="#bs-example-navbar-collapse-1">
<span class="sr-only">Toggle navigation</span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
</button>
<a class="navbar-brand" href="#">Learning Laravel</a>
</div>
<!-- Navbar Right -->
<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
<ul class="nav navbar-nav navbar-right">
<li class="active"><a href="/">Home</a></li>
<li><a href="/laravel/public/about">About</a></li>
<li><a href="/laravel/public/contact">Contact</a></li>
<li class="dropdown">
<a href="#" class="dropdown-toggle" data-toggle="dropdown" r\
ole="button" aria-expanded="false">Member
<span class="caret"></span></a>
<ul class="dropdown-menu" role="menu">
<li><a href="/users/register">Register</a></li>
<li><a href="/users/login">Login</a></li>
</ul>
</li>
</ul>
</div>
</div>
</nav>
@yield('content')
<script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js\
"></script>
</body>
</html>
