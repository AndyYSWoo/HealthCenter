<!DOCTYPE html>
<html>
<head>
	<title>精选小组</title>
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
                  <li><a  href="/player/sports/data">运动数据</a></li>
                  <li><a href="/player/health/data">健康数据</a></li>
                </ul>
              </div>
            </li>
            <li class="bold"><a class="collapsible-header" href="/player/activity">活动</a></li>
            <li class="bold"><a class="collapsible-header active" href="/player/group">兴趣组</a>
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
        			兴趣组
        		</div>
        	</div>
        	<div>
        		<div class="container" style="margin-top:4%;background-color:white;padding-bottom:2%;">
        			<div class="container">
        				<div class="row">
        					<div class="col s3" style="font-size:1.75rem;padding-top:2%;">精选小组</div>
        					<div class="col s9" style="padding-top:2%;text-align:right;">
								<a class="waves-effect waves-light btn" style="color:white;" href="/player/group/create">创建兴趣组</a>
							</div>
						</div>
					</div>
					@foreach($groups as $group)
					<div class="divider"></div>
					<div style="margin-top:2%;">
						<div class="row">
							<div class="col s5" style="text-align:center;">
								<img style="height:160px;width:160px;" src="{{ $group->poster }}" alt="poster" class="responsive-img">
							</div>
							<div class="col s7" style="color:grey;font-size:0.75rem;"> 
								<div style="font-size:1.25rem;">
									<a style="color:#408eba;" href="/player/group/{{ $group->id }}">{{ $group->name }}</a><span style="font-size:0.75rem;margin-left:2%;">{{ $group->motto }}</span>
								</div>
								<div style="margin-top:2%;">
								<div style="width:72%;background-color:#fff4e9;color:black;padding:1%">
									{{ $group->description }} 
								</div>
								<div style="background-color:#ddd;width:18%;text-align:center;margin-top:1%;">
									<b style="font-size:1.25rem">{{ App\player_in_group::where('group_id',$group->id)->count() }}</b> 人参与
								</div>
								</div>
							</div>
						</div>
					</div>					
					@endforeach
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
</body>
</html>