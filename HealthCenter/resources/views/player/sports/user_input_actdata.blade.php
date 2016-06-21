<!DOCTYPE html>
<html>
<head>
	<title>运动数据导入</title>
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
			.file-field .btn, .file-field{
			    float: left;
			    height: 3rem;
			    line-height: 3rem; 
			}
			.file-field input[type=file] {
			    position: absolute;
			    top: 0;
			    right: 0;
			    left: 0;
			    bottom: 0;
			    width: 100%;
			    margin: 0;
			    padding: 0;
			    font-size: 20px;
			    cursor: pointer;
			    opacity: 0;
			    filter: alpha(opacity=0); 
			}
			.file-field input.file-path {
    			width: 72%; 
    			height: 1.5rem;
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
            <li class="bold"><a class="collapsible-header active">体质数据</a>
              <div class="collapsible-body">
                <ul>
                  <li class="active"><a  href="/player/sports/data">运动数据</a></li>
                  <li><a href="/player/health/data">健康数据</a></li>
                </ul>
              </div>
            </li>
            <li class="bold"><a class="collapsible-header" href="/player/activity">活动</a></li>
            <li class="bold"><a class="collapsible-header" href="/player/group">兴趣组</a>
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
                <li class="bold"><a class="collapsible-header " href="/player/{{ Auth::user()->id }}/edit">个人资料</a></li>
                <li class="bold"><a class="collapsible-header modal-trigger" onclick="logout()">退出</a></li>
          </ul>
        </li>
        </header>
        <div id="logoutTip" class="modal">
            <div class="modal-content" style="text-align:center;">
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
        			运动信息数据导入
        		</div>	
        	</div>
        	<div>
        		<div>
        			<div class="container" style="margin-top:4%;background-color:white;width:72%;">
        				<div class="row" style="text-align:center;">
					    <div class="col s8 offset-s2">
					      <ul class="tabs">
					        <li class="tab col s3"><a class="active" href="#byhand">手动输入</a></li>
					        <li class="tab col s3"><a href="#byfile">文件导入</a></li>
					      </ul>
					    </div>
					    <div id="byhand" class="col s12">
							{!! Form::open(array('url' => "/player/sports/data",'method' => 'POST')) !!}
					    	<div class="row">
								<div class="col s3"style="padding-top:3%;text-align:center;"><b>运动距离<b></div>
								<div class="input-field col s4 text">
									<input  type="number" id="dis" name="dis">
								</div>
								<div class="col s2" style="padding-top:2%;font-size:1.25rem;">米</div>
							</div>
							<div class="divider"></div>
					<div class="row">
						<div class="col s3"style="padding-top:3%;text-align:center;"><b>运动时间<b></div>
						<div class="input-field col s1 text" style="padding-top:2%">
							<input  type="number" id="l_h" name="l_h">
						</div>
						<div class="col s1" style="font-size:1.25rem;padding-top:3%;">时</div>
						<div class="input-field col s1 text" style="padding-top:2%">
							<input  type="number" id="l_m" name="l_m">
						</div>
						<div class="col s1" style="font-size:1.25rem;padding-top:3%;">分</div>
						<div class="input-field col s1 text" style="padding-top:2%">
							<input  type="number" id="l_s" name="l_s">
						</div>
						<div class="col s1" style="font-size:1.25rem;padding-top:3%;">秒</div>
					</div>
					<div class="divider"></div>
					<div class="row">
						<div class="col s3"style="padding-top:3%;text-align:center;"><b>消耗能量<b></div>
						<div class="input-field col s4 text">
							<input  type="number" id="cal" name="cal">
						</div>
						<div class="col s2" style="font-size:1.25rem;padding-top:2%;">卡</div>
					</div>
					<div class="divider"></div>
					<div class="row">
						<div class="col s3"style="padding-top:3%;text-align:center;"><b>开始时间<b></div>
						<input type="date" class="datepicker col s2" placeholder="选择日期" id="date" name="date" style="height:1rem;margin-top:3%">
						<div class="input-field col s1 text" style="padding-top:1%">
							<input  type="number" id="s_h" name="s_h">
						</div>
						<div class="col s1" style="font-size:1.25rem;padding-top:2%;">:</div>
						<div class="input-field col s1 text" style="padding-top:1%">
							<input  type="number" id="s_m" name="s_m">
						</div>
						<div class="col s1" style="font-size:1.25rem;padding-top:2%;">:</div>
						<div class="input-field col s1 text" style="padding-top:1%">
							<input  type="number" id="s_s" name="s_s">
						</div>
						{{ csrf_field() }}
						{!! Form::close() !!}
					</div>
					<div class="divider"></div>
					    </div>
					    <div id="byfile" class="col s12">
					    	<div><h5>请导入XML格式的文件</h5></div>
					    	<div class="file-field input-field" style="margin-left:24%;">
						      <div class="btn">
						        <span>File</span>
								{!! Form::open(array('url' => "/player/sports/data",'files' => true,'method' => 'POST')) !!}
									<input type="file" id="sports_file" name="sports_file">
								{{ csrf_field() }}
								{!! Form::close() !!}
						      </div>
						      <div class="file-path-wrapper" style="width:360px;">
						        <input class="file-path validate" type="text" id="up_file" name="up_file">
						      </div>
						    </div>
					    </div>
					    <div class="row">
						<div class="col s3 offset-s5" style="margin-bottom:3%;margin-right:3%;padding-top:2%;">
						<a class="waves-effect waves-light btn" style="width:120px;" onclick="sub()">确定</a>
						</div>
						<div class="col s3" style="padding-top:2%;">
						<a class="waves-effect waves-light btn" style="width:120px;" href="/player/sports/data">取消</a>
						</div>
					</div>
					  </div>
        			</div>
        		</div>
        	</div>
        </div>
        </main>
        <script type="text/javascript">
         $(".button-collapse").sideNav();
            function logout(){
                $("#logoutTip").openModal();
            }
        </script>
	<script type="text/javascript" src="/js/jquery_min.js"></script>	
	<script type="text/javascript" src="/js/materialize.min.js"></script>
	<script>
            $('.datepicker').pickadate({
            selectMonths: true, // Creates a dropdown to control month
            selectYears: 15, // Creates a dropdown of 15 years to control year
			format:"yyyy-mm-dd"
        });
    </script>
	<script>
		function sub(){
			if($('input#up_file').val().length == 0){// 手动
				if($('input#dis').val().length == 0){
					alert('请输入距离');
					return;
				}else if($('input#l_h').val().length 	== 0 
					  || $('input#l_h').val() 			> 24
					  || $('input#l_h').val() 			< 0
					  || $('input#l_m').val().length 	== 0
					  || $('input#l_m').val()			< 0
					  || $('input#l_m').val()			> 60
					  || $('input#l_s').val().length	== 0
					  || $('input#l_s').val()			< 0
					  || $('input#l_s').val()			> 60 ){
					alert('请输入正确的持续时间');
					return;
				}else if($('input#cal').val().length == 0){
					alert('请输入消耗的卡路里');
					return;
				}else if($('input#date').val().length == 0){
					alert('请输入开始日期');
					return;
				}else if($('input#s_h').val().length 	== 0 
					  || $('input#s_h').val() 			> 24
					  || $('input#s_h').val() 			< 0
					  || $('input#s_m').val().length 	== 0
					  || $('input#s_m').val()			< 0
					  || $('input#s_m').val()			> 60
					  || $('input#s_s').val().length	== 0
					  || $('input#s_s').val()			< 0
					  || $('input#s_s').val()			> 60 ){
					alert('请输入正确的开始时间');
					return;
				}
				$('form:first').submit();
			}else{// 文件
				$('form:last').submit();
			}
		}
	</script>
</body>
</html>