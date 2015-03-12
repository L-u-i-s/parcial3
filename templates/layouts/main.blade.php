<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Todo App</title>

		<!-- Bootstrap CSS -->
		<link href="/css/font-awesome/font-awesome.css" rel="stylesheet">
        <link href="/css/bootstrap-social/bootstrap-social.css" rel="stylesheet">
		<link href="/css/bootstrap/bootstrap.css" rel="stylesheet">

		<link href="/css/style.css" rel="stylesheet">

		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
			<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
	</head>
	<body>
		@include('widgets.header')
		
		@yield('content')
		
		<hr>
		
		@include('widgets.footer')

		<!-- jQuery -->
		<script src="/js/jquery/jquery.min.js"></script>
		<!-- Bootstrap JavaScript -->
		<script src="/js/bootstrap/bootstrap.min.js"></script>
	</body>
</html>