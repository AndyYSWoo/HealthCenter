<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link href="/css/bootstrap.min.css" rel="stylesheet" />
	<link href="/css/font-awesome.css" rel="stylesheet" />
	<link href='http://fonts.googleapis.com/css?family=Abel|Open+Sans:400,600' rel='stylesheet'>
	<style>
		html{
			background:url(/img/bg1.jpg) no-repeat center center fixed;
			-webkit-background-size: cover;
			-moz-background-size: cover;
			-o-background-size: cover;
			background-size: cover;
		}
		h1 {
			font-family : "Abel",Arial,sans-serif;
			font-weight: 400;
			font-size: 40px;
		}
		body{
			padding-top: 20px;
			font-size: 16px;
			font-family: "Open Sans",serif;
			background: transparent;
		}
		.panel {
			background-color: rgba(255,255,255,0.5);
		}
		.margin-base-vertical{
			margin: 40px 0;
		}
	</style>
</head>

<body>
	<div class="container">
		<div class="row">
			<div class="col-md-4 col-md-offset-8 panel panel-default">
				
				<h1 class="margin-base-vertical">Have a healthy day</h1>
			
				<p>
					Thank you, 	
				</p>
				<p>
					I have other plans.
				</p>
			
				<form action="/auth/login" method="post" class="margin-base-vertical">
					{!! csrf_field() !!}
					<p class="input-group">
						<span class="input-group-addon"><span class="glyphicon glyphicon-user" aria-hidden="true"></span></span>
						<input type="email" class="form-control input-lg" name="email" placeholder="beste@bf.org" />
					</p>
					<p class="input-group">
						<span class="input-group-addon"><span class="glyphicon glyphicon-lock" aria-hidden="true"></span></span>
						<input type="password" class="form-control input-lg" name="password" placeholder="Password" />
					</p>

					<p class="text-center">
						<button type="submit" class="btn btn-success btn-lg">Sign in</button>
						<a class="btn btn-primary btn-lg" href= "/auth/register">Sign up</a>
					</p>
				</form>
			</div>
		</div>
	</div>

</body>
</html>