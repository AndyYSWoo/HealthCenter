<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Register</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link href="/css/bootstrap.min.css" rel="stylesheet" />
	<link href="/custom-font/css/font-awesome.css" rel="stylesheet" />
	<link href='http://fonts.googleapis.com/css?family=Abel|Open+Sans:400,600' rel='stylesheet'>
	<style>
		html{
			background:url(/img/neitherland.jpg) no-repeat center center fixed;
			-webkit-background-size: cover;
			-moz-background-size: cover;
			-o-background-size: cover;
			background-size: cover;
		}
		
		h2 {
			font-family : "Abel",Arial,sans-serif;
			font-weight: 400;
			font-size: 30px;
		}
		
		body{
			padding-top: 20px;
			font-size: 16px;
			font-family: "Open Sans",serif;
			background: transparent;
		}
		
		.panel {
			background-color: rgba(255,255,255,0.9);
			padding-bottom: 30px;
		}
	</style>
</head>

<body>
	<div class="container">
	
	<div class="row">
		<div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-1 col-md-offset-3 panel panel-default">
				<h2>请提供注册信息 <small>First step towards a healthier life.</small></h2>
				<hr class="colorgraph">
				{!! Form::open(array('url' => "/auth/reg",'method' => 'POST')) !!}
				<div class="form-group">
					<div class="input-group">
							<div class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></div>
							<input type="email" name="email" id="email" class="form-control input-lg" placeholder="Email地址" tabindex="1">
					</div>
				</div>
				<div class="row">
					<div class="col-xs-6 col-sm-6 col-md-6">
							<div class="form-group">
								<div class="input-group">
									<div class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></div>
									<input type="password" name="password" id="password" class="form-control input-lg" placeholder="密码" tabindex="2">
								</div>
							</div>
					</div>
					<div class="col-xs-6 col-sm-6 col-md-6">
						<div class="form-group">
							<div class="input-group">
								<div class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></div>
								<input type="password" name="password_confirmation" id="password_confirmation" class="form-control input-lg" placeholder="确认密码" tabindex="3">
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-xs-6 col-sm-6 col-md-6">
						<div class="form-group">
							<div class="input-group">
								<div class="input-group-addon"><span class="glyphicon glyphicon-info-sign"></span></div>
								<input type="text" name="first_name" id="first_name" class="form-control input-lg" placeholder="名" tabindex="4">
							</div>
						</div>
					</div>
					<div class="col-xs-6 col-sm-6 col-md-6">
						<div class="form-group">
							<div class="input-group">
								<div class="input-group-addon"><span class="glyphicon glyphicon-info-sign"></span></div>
								<input type="text" name="last_name" id="last_name" class="form-control input-lg" placeholder="姓" tabindex="5">
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-xs-8 col-sm-8 col-md-8">
						<div class="form-group">
							<div class="input-group">
								<div class="input-group-addon"><span class="glyphicon glyphicon-user"></span></div>
								<input type="text" name="display_name" id="display_name" class="form-control input-lg" placeholder="昵称" tabindex="6">
							</div>
						</div>
					</div>
					<div class="col-xs-4 col-sm-4 col-md-4">
						<div class="form-group">
							<div class="input-group">
								<select class="form-control input-lg" name="gender" id="gender" tabindex="7">
									<option value="none">性别</option>
									<option value="1">♂</option>
									<option value="2">♀</option>
								</select>
							</div>
						</div>
					</div>
				</div>
				<div class="form-group">
					<div class="input-group">
						<div class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></div>
						<input type="datetime-local" class="form-control input-lg" placeholder="生日" tabindex="8" name="birthday" id="birthday">
					</div>
				</div>
				<div class="row">
					<div class="col-xs-6 col-sm-6 col-md-6">
						<div class="form-group">
							<div class="input-group">
								<div class="input-group-addon">W</div>
								<input type="number" name="weight" id="weight" class="form-control input-lg" placeholder="体重" tabindex="9">
								<div class="input-group-addon">kg</div>
							</div>
						</div>
					</div>
					<div class="col-xs-6 col-sm-6 col-md-6">
						<div class="form-group">
							<div class="input-group">
								<div class="input-group-addon">H</div>
								<input type="number" name="height" id="height" class="form-control input-lg" placeholder="身高" tabindex="10">
								<div class="input-group-addon">cm</div>
							</div>
						</div>
					</div>
				</div>
				{{ csrf_field() }}
				{!! Form::close() !!}
				<hr class="colorgraph">
				<div class="row">
					<div class="col-xs-6 col-md-6"><a class="btn btn-primary btn-block btn-lg" onclick="reg()">注册</a></div>
					<div class="col-xs-6 col-md-6"><a href="/auth/login" class="btn btn-success btn-block btn-lg">登录</a></div>
				</div>
		</div>
	</div>
	<script src="/js/jquery_min.js"></script>
	<script src="/js/bootstrap.js"></script>
	<script>
		function reg(){
			if($('input#email').val().length == 0
		 	 	||$('input#password').val().length == 0
			  	||$('input#first_name').val().length == 0
				||$('input#last_name').val().length == 0
				||$('input#display_name').val().length == 0
				||$('input#birthday').val().length == 0){
				alert('请输入完整信息');
				return;
			}
			if($('input#password').val()!=$('input#password_confirmation').val()){
				alert('两次密码不一致');
				return;
			}
			$('form').submit();
		}
	</script>
</body>
</html>