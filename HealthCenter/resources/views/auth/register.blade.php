<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Register</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link href="/css/bootstrap.min.css" rel="stylesheet" />
	<link href="/custom-font/css/font-awesome.css" rel="stylesheet" />
	<link href="/css/bootstrap-datetimepicker.min.css" rel="stylesheet" media="screen">
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
				<h2>Fill in your infomation <small>First step towards a healthier life.</small></h2>
				<hr class="colorgraph">
				{!! Form::open(array('url' => "/auth/reg",'method' => 'POST')) !!}
				<div class="form-group">
					<div class="input-group">
							<div class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></div>
							<input type="email" name="email" id="email" class="form-control input-lg" placeholder="example@healthcenter.com" tabindex="1">
					</div>
				</div>
				<div class="row">
					<div class="col-xs-6 col-sm-6 col-md-6">
							<div class="form-group">
								<div class="input-group">
									<div class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></div>
									<input type="password" name="password" id="password" class="form-control input-lg" placeholder="Password" tabindex="2">
								</div>
							</div>
					</div>
					<div class="col-xs-6 col-sm-6 col-md-6">
						<div class="form-group">
							<div class="input-group">
								<div class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></div>
								<input type="password" name="password_confirmation" id="password_confirmation" class="form-control input-lg" placeholder="Password confirm" tabindex="3">
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-xs-6 col-sm-6 col-md-6">
						<div class="form-group">
							<div class="input-group">
								<div class="input-group-addon"><span class="glyphicon glyphicon-info-sign"></span></div>
								<input type="text" name="first_name" id="first_name" class="form-control input-lg" placeholder="First Name" tabindex="4">
							</div>
						</div>
					</div>
					<div class="col-xs-6 col-sm-6 col-md-6">
						<div class="form-group">
							<div class="input-group">
								<div class="input-group-addon"><span class="glyphicon glyphicon-info-sign"></span></div>
								<input type="text" name="last_name" id="last_name" class="form-control input-lg" placeholder="Second Name" tabindex="5">
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-xs-8 col-sm-8 col-md-8">
						<div class="form-group">
							<div class="input-group">
								<div class="input-group-addon"><span class="glyphicon glyphicon-user"></span></div>
								<input type="text" name="display_name" id="display_name" class="form-control input-lg" placeholder="Nickname" tabindex="6">
							</div>
						</div>
					</div>
					<div class="col-xs-4 col-sm-4 col-md-4">
						<div class="form-group">
							<div class="input-group">
								<select class="form-control input-lg" name="gender" id="gender" tabindex="7">
									<option value="none">Gender</option>
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
						<div class="input-group date form_date" data-date="" data-date-format="dd MM yyyy" data-link-field="dtp_input2" data-link-format="yyyy-mm-dd" style="width:220px">
							<input class="form-control input-lg" type="datetime-local" value=""  name="birthday" id="birthday">
							<span class="input-group-addon"><span class="glyphicon glyphicon-remove"></span></span>
						</div>
						{{--<input type="datetime-local hidden" class="form-control input-lg" placeholder="Birthday" tabindex="8" name="birthday" id="birthday">--}}
					</div>
				</div>
				<div class="row">
					<div class="col-xs-6 col-sm-6 col-md-6">
						<div class="form-group">
							<div class="input-group">
								<div class="input-group-addon">W</div>
								<input type="number" name="weight" id="weight" class="form-control input-lg" placeholder="Weigth" tabindex="9">
								<div class="input-group-addon">kg</div>
							</div>
						</div>
					</div>
					<div class="col-xs-6 col-sm-6 col-md-6">
						<div class="form-group">
							<div class="input-group">
								<div class="input-group-addon">H</div>
								<input type="number" name="height" id="height" class="form-control input-lg" placeholder="Height" tabindex="10">
								<div class="input-group-addon">cm</div>
							</div>
						</div>
					</div>
				</div>
				{{ csrf_field() }}
				{!! Form::close() !!}
				<hr class="colorgraph">
				<div class="row">
					<div class="col-xs-6 col-md-6"><a class="btn btn-primary btn-block btn-lg" onclick="reg()">Register</a></div>
					<div class="col-xs-6 col-md-6"><a href="/auth/login" class="btn btn-success btn-block btn-lg">Login</a></div>
				</div>
		</div>
	</div>
	<script src="/js/jquery_min.js"></script>
	<script src="/js/bootstrap.js"></script>
	<script type="text/javascript" src="/js/bootstrap-datetimepicker.js" charset="UTF-8"></script>
	<script type="text/javascript" src="/js/locales/bootstrap-datetimepicker.en.js" charset="UTF-8"></script>
	<script type="text/javascript" src="/js/validator.js" charset="UTF-8"></script>
	<script>
		$('.form_date').datetimepicker({
			language:  'fr',
			weekStart: 1,
			todayBtn:  1,
			autoclose: 1,
			todayHighlight: 1,
			startView: 2,
			minView: 2,
			forceParse: 0
		});
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
		$("form").validator();
	</script>
</body>
</html>