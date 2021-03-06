<!DOCTYPE html>
<html>
<head>
	<title>User Modify</title>
	<meta charset="utf-8">
	<link type="text/css" rel="stylesheet" href="/custom-font/css/font-awesome.css">
	<link type="text/css" rel="stylesheet" href="/css/materialize.css"  media="screen,projection"/> 
	<link type="text/css" rel="stylesheet" href="/css/prism.css"  media="screen,projection"/>  
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<style type="text/css">
			#header_img{
				width:  50%;
				padding-top: 5%;
				padding-bottom: 5%;
			}
			#header{
				text-align: center;
				height: 24%;
				box-shadow: 0 1px 3px 0 rgba(0, 0, 0, 0.18), 0 1px 3px 0 rgba(0, 0, 0, 0.15);
			}
			/*.side-nav{
				background-color: white;
				width: 16%;
				box-shadow: 0 2px 6px 0 rgba(0, 0, 0, 0.18), 0 2px 7px 0 rgba(0, 0, 0, 0.15);
			}*/
			.side-nav .collapsible-header{
				background-color: transparent;
				float: none;
				padding: 0 15px;
				display: block;
				font-size: 1rem;
				height: 48px;
				line-height: 48px;
				margin-left: 0px;
			}
			.side-nav li {
				float: none;
				padding: 0 15px;
				border-bottom: 1 px; 
			}
			.side-nav a {
				color: #fff3e0;
				display: block;
				font-size: 1rem;
				height: 48px;
				line-height: 48px;
				padding: 0 15px; 
			}
			body{
				background-color: #ecf0f5;
			}
			.topbar{
				background-color: #408eba;
				height: 56px;
			}
			.container{
				width: 90%;
			}
			.btn{
				background-color: #408eba;
				box-shadow: 0 1px 3px 0 rgba(0, 0, 0, 0.18), 0 1px 3px 0 rgba(0, 0, 0, 0.15);
			}
			.btn:hover{
				box-shadow: none;
				background-color: #50b5ee;
			}
			input[type=text],input[type=email],input[type=password],input[type=number]{
				border: 2px solid #ddd;
				padding: 2%;
				border-radius: 5px;
				margin-bottom: -20px;
				height: 1rem;
			}
			input[type=text]:focus:not([readonly]),input[type=email]:focus:not([readonly]), input[type=password]:focus:not([readonly]),input[type=number]:focus:not([readonly]),textarea.materialize-textarea:focus:not([readonly]){
				border: 2px solid #408eba;
				border-bottom: 2px solid #408eba;
				box-shadow: none;
				height: 1rem;
			}
			textarea.materialize-textarea{
				border: 2px solid #ddd;
				padding: 2%;
				border-radius: 5px;
				height: 5rem;
				margin-bottom: -20px;
				min-height: 5rem; 
			}
			textarea {
			    width: 100%;
			    height: 5rem;
			    background-color: transparent; 
			}
			.blank{
				/*background-image: url(icon_add.png);*/
				width: 128px;
				height: 128px;
				background-repeat: no-repeat;
				max-width: 100%;
	  			height: auto;
			}
            .modal{
                width: 480px;
                height:200px;
            }
	</style>
</head>
<body>
             <header>
            <div class="container"><a href="#" data-activates="nav-mobile" class="button-collapse top-nav full hide-on-large-only"><i class="fa fa-navicon"></i></a></div>
            <ul id="nav-mobile" class="side-nav fixed">
            <li class="logo">
                <img src="{{ Auth::user()->portrait }}" class="logo-img responsive-img">
            </li>
        <li class="no-padding">
          <ul class="collapsible collapsible-accordion">
            <li class="bold"><a class="collapsible-header" href="/player">首页</a>
            </li>
            <li class="bold"><a class="collapsible-header">体质数据</a>
              <div class="collapsible-body">
                <ul>
                  <li><a href="/player/sports/data">运动数据</a></li>
                  <li><a href="/player/health/data">健康数据</a></li>
                </ul>
              </div>
            </li>
            <li class="bold"><a class="collapsible-header" href="/player/activity">活动</a></li>
            <li class="bold"><a class="collapsible-header " href="/player/group">兴趣组</a>
            </li>
            <li class="bold"><a class="collapsible-header" href="/player/social">朋友圈</a>
              
            </li>
            <li class="bold"><a href="#!" class="collapsible-header">教练</a>
					<div class="collapsible-body">
						<ul>
							<li><a href="/player/coach/1" style="margin:0;"> <div  style="height:48px;">
                                    <div style="padding-left:0%;padding-top:6px;">
                                        <div style="width:36px;height:36px;border-radius:50%; overflow:hidden;float:left;">
                                        <img src="/img/user.jpg" class="responsive-img">
                                    </div>
                                    <div style="margin-left:30%;margin-top:-2%;">
                                         Sarah Bullock
                                    </div>
                            		</div>
									</div>
								</a>
                            </li>
						</ul>
					</div>
				</li>
				<li class="bold"><a href="#!"class="collapsible-header ">医生</a>
					<div class="collapsible-body">
						<ul>
							<li><a href="/player/doctor/3" style="margin:0;"><div style="height:48px;">
                                    <div style="padding-left:0%;padding-top:6px;">
                                        <div style="width:36px;height:36px;border-radius:50%; overflow:hidden;float:left;">
                                        <img src="/img/user1.jpg" class="responsive-img">
                                    </div>
                                    <div style="margin-left:30%;margin-top:-2%;">
                                        Doctor
                                    </div>
									</div>
                            </div></a></li>
						</ul>
					</div>
				</li>
                <li class="bold"><a class="collapsible-header active" href="/player/{{ Auth::user()->id }}/edit">个人资料</a></li>
                <li class="bold"><a class="collapsible-header modal-trigger" onclick="logout()">退出</a></li>
          </ul>
        </li>
        </header>
        <div id="logoutTip" class="modal">
            <div class="modal-content" style="text-align:right;">
            <h4>确定要退出该账号？</h4>
            </div>
            <div class="modal-footer">
            <a class=" modal-action modal-close waves-effect waves-green btn-flat" href="/auth/logout">确定</a>
            <a href="#!" class=" modal-action modal-close waves-effect waves-green btn-flat">取消</a>
            </div>
        </div>
        <main>
        <div style="">
        	<div class="topbar">
        		<div style="font-size:1.5rem;padding:1%;padding-left:10%;color:white;">
        	个人信息修改
        	</div>
        	</div>
        	<div class="container" >
        			<div class="row" style="margin-top:4%;">
						<div class="col s8 offset-s2" style="z-index:999;border-top:2px solid #408eba;background-color:white;">
					<div style="font-size:1.25rem;padding:2%;">个人信息修改</div>
					<div class="divider"></div>
					<div class="row">
					{!! Form::open(array('url' => "/player/".Auth::user()->id,'files' => true,'method' => 'put')) !!}
					<div class="col s3" style="padding-top:4%;text-align:right;">头像</div>
					<div class="col s8">
						<div class="col s6">
						<div class="file-field input-field" id="i_file">
						<div class="blank">
							<input type="file" name="portrait">
							<img src="{{ Auth::user()->portrait }}"class="responsive-img" id="preview">
						</div>
						</div>
					</div>
					</div>
					</div>
					<div class="divider"></div>
					<div class="row">
						<div class="col s3"style="padding-top:3%;text-align:right;"><b>昵称<b></div>
						<div class="input-field col s5 text">
							<input  type="text" name="name" value="{{ $user->name }}">
						</div>
					</div>
					<div class="divider"></div>
					<div class="row">
						<div class="col s3"style="padding-top:3%;text-align:right;"><b>邮箱<b></div>
						<div class="input-field col s5 text">
							<input  type="email" id="mailaddr" name="email" value="{{ $user->email }}">
						</div>
					</div>
					<div class="divider"></div>
					<div class="row">
						<div class="col s3"style="padding-top:3%;text-align:right;"><b>密码<b></div>
						<div class="input-field col s5 text">
							<input  type="password" id="newPassword1" name="password">
						</div>
					</div>
					<div class="divider"></div>
					<div class="row">
						<div class="col s3"style="padding-top:3%;text-align:right;"><b>确认密码<b></div>
						<div class="input-field col s5 text">
							<input  type="password" id="newPassword2">
						</div>
					</div>
					<div class="divider"></div>
					<div class="row">
						<div class="col s3"style="padding-top:3%;text-align:right;">
						<div><b>身高</b></div>
						</div>
						<div class="input-field col s3 text" >
							<div class="row">
								<div class="col s8">
								@if($height)
								<input  type="number" id="height" name="height" value="{{ $height->value }}">
								@else
								<input  type="number" id="height" name="height">
								@endif
								</div>
								<div>
									CM
								</div>
							</div>
						</div>
					</div>
					<div class="divider" style="margin-top:-20px;"></div>
					<div class="row">
						<div class="col s3"style="padding-top:3%;text-align:right;">
						<div><b>体重</b></div>
						</div>
						<div class="input-field col s3 text">
							<div class="row">
								<div class="col s8">
								@if($weight)
								<input  type="number" id="weight" name="weight" value="{{ $weight->value }}">
								@else
								<input  type="number" id="weight" name="weight">
								@endif
								</div>
								<div>
									KG
								</div>
							</div>
						</div>
					</div>
					<div class="divider" style="margin-top:-20px;"></div>
					{{ csrf_field() }}
					{!! Form::close() !!}
					<div class="row">
						<div class="col s3 offset-s5" style="margin-bottom:3%;margin-right:3%;padding-top:2%;">
						<a class="waves-effect waves-light btn" style="width:120px;" onclick="checkValid()">确定</a>
						</div>
						<div class="col s3" style="padding-top:2%;">
						<a href="/player/{{ Auth::user()->id }}/edit" class="waves-effect waves-light btn" style="width:120px;">重置</a>
						</div>
					</div>
				</div>
				
			</div>
        		</div>
        </div>
        </main>
         <script type="text/javascript" src="/js/jquery_min.js"></script>	
	<script type="text/javascript" src="/js/materialize.min.js"></script>
	
        <script type="text/javascript">
         $(".button-collapse").sideNav();
            function logout(){
                $("#logoutTip").openModal();
            }
        </script>
   <script type="text/javascript">
		var filePath;
			$('#i_file').change( function(event) {
			filePath = URL.createObjectURL(event.target.files[0]);
			if(filePath!=""){
			var img = document.getElementById("preview");
			img.setAttribute("src",filePath);
			}
			});
		function checkValid(){
			var password1 = document.getElementById("newPassword1").value.trim();
			var password2 = document.getElementById("newPassword2").value.trim();
			var mailAddr  = document.getElementById("mailaddr").value.trim();
			var height    = document.getElementById("height").value;
			var weight    = document.getElementById("weight").value;
			
			if (mailAddr!=0) {
				var validMailAddr = /^\w+([-+.]\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*$/;
				if (!validMailAddr.test(mailAddr)) {
						alert("邮箱格式不正确");
						return;
				};
			};
			if (password1 === password2) {

			}else{
				alert("两次输入的密码不相同");
				return;
			};
			if (height>=300||height<=10) {
				alert("乖，憋xjb写");
				return;
			};
			if (weight>=400||weight<=0) {
				alert("乖，憋xjb写");
				return;
			};
			document.getElementsByTagName('form')[0].submit();
		} 
	</script>

</body>
</html>