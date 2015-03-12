<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>My ToDo Web App</title>

		<!-- Bootstrap CSS -->
		<link href="/css/bootstrap/bootstrap.css" rel="stylesheet">
		<link href="/css/style.css" rel="stylesheet">
		<link href="/css/font-awesome/font-awesome.css" rel="stylesheet">
		

		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
			<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
	</head>
	<body>
		<nav class="navbar navbar-default navbar-inverse navbar-fixed-top" role="navigation">
			<div class="container">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="/">Basic ToDo</a>
				</div>
			</div>
		</nav>
		<div class="container">
			<div class="row">
				<div class="jumbotron">
					<h1 class="text-center">My ToDo Web App</h1>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
					<form action="/" method="POST" role="form">
						<legend>Add new</legend>
					
						<div class="form-group">
							<label for="">New ToDo Item</label>
							<input type="text" class="form-control" id="" placeholder="Input field">
						</div>

						<button type="submit" class="btn btn-primary pull-right">Submit</button>
					</form>
				</div>
				<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
					<ul class="list-group">
						<li class="list-group-item active">
							<a href="" role="button" class="btn btn-default" title="Done">
								<span class="glyphicon glyphicon-ok" aria-hidden="true"></span>
							</a>
							To Do Item 1
							<div class="btn-group-md pull-right" role="group" aria-label="...">
								
								<a href="" role="button" class="btn btn-default" title="Working">
									<span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
								</a>
								<a href="" role="button" class="btn btn-default" title="Save">
									<span class="glyphicon glyphicon-save" aria-hidden="true"></span>
								</a>
							</div>
						</li>
						<li class="list-group-item">
							<a href="" role="button" class="btn btn-default" title="Done">
								<span class="glyphicon glyphicon-ok" aria-hidden="true"></span>
							</a>
							To Do Item 1
							<div class="btn-group-md pull-right" role="group" aria-label="...">
								
								<a href="" role="button" class="btn btn-default" title="Working">
									<span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
								</a>
								<a href="" role="button" class="btn btn-default" title="Save">
									<span class="glyphicon glyphicon-save" aria-hidden="true"></span>
								</a>
							</div>
						</li>
						<li class="list-group-item">
							<a href="" role="button" class="btn btn-default" title="Done">
								<span class="glyphicon glyphicon-ok" aria-hidden="true"></span>
							</a>
							To Do Item 1
							<div class="btn-group-md pull-right" role="group" aria-label="...">
								
								<a href="" role="button" class="btn btn-default" title="Working">
									<span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
								</a>
								<a href="" role="button" class="btn btn-default" title="Save">
									<span class="glyphicon glyphicon-save" aria-hidden="true"></span>
								</a>
							</div>
						</li>
						<li class="list-group-item list-group-item-success">
							<a href="" role="button" class="btn btn-default" title="Done">
								<span class="glyphicon glyphicon-ok" aria-hidden="true"></span>
							</a>
							To Do Item 1
							<div class="btn-group-md pull-right" role="group" aria-label="...">
								
								<a href="" role="button" class="btn btn-default" title="Working">
									<span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
								</a>
								<a href="" role="button" class="btn btn-default" title="Save">
									<span class="glyphicon glyphicon-save" aria-hidden="true"></span>
								</a>
							</div>
						</li>
						<li class="list-group-item">
							<a href="" role="button" class="btn btn-default" title="Done">
								<span class="glyphicon glyphicon-ok" aria-hidden="true"></span>
							</a>
							To Do Item 1
							<div class="btn-group-md pull-right" role="group" aria-label="...">
								
								<a href="" role="button" class="btn btn-default" title="Working">
									<span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
								</a>
								<a href="" role="button" class="btn btn-default" title="Save">
									<span class="glyphicon glyphicon-save" aria-hidden="true"></span>
								</a>
							</div>
						</li>
						<li class="list-group-item">
							<a href="" role="button" class="btn btn-default" title="Done">
								<span class="glyphicon glyphicon-ok" aria-hidden="true"></span>
							</a>
							To Do Item 1
							<div class="btn-group-md pull-right" role="group" aria-label="...">
								
								<a href="" role="button" class="btn btn-default" title="Working">
									<span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
								</a>
								<a href="" role="button" class="btn btn-default" title="Save">
									<span class="glyphicon glyphicon-save" aria-hidden="true"></span>
								</a>
							</div>
						</li>
					</ul>
				</div>
				<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
						<h3 class="text-center"><b>Social media</b></h3>
							<p class="text-center "><b>Facebook</b></p>
							<p class="text-center">
							<a href="https://www.facebook.com/luis.daniel.108889" target="_blank">
							<i class="fa fa-facebook-official fa-4x"></i> </a>
				</div>
			</div>
		</div>

		<hr>
		
		<footer>
			<div class="container">
				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
						<p>Copyright &copy; IESO Basic Practice</p>
					</div>
				</div>
			</div>
		</footer>

		<!-- jQuery -->
		<script src="/js/jquery/jquery.min.js"></script>
		<!-- Bootstrap JavaScript -->
		<script src="/js/bootstrap/bootstrap.min.js"></script>
	</body>
</html>