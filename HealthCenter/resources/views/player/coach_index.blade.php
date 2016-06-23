<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>coach</title>
		<link type="text/css" rel="stylesheet" href="/custom-font/css/font-awesome.css">
		<link type="text/css" rel="stylesheet" href="/css/materialize.min.css"  media="screen,projection"/> 
		<link type="text/css" rel="stylesheet" href="/css/index.css"> 
		<link type="text/css" rel="stylesheet" href="/css/prism.css"  media="screen,projection"/>  
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
		<script type="text/javascript" src="/js/jquery_min.js"></script>
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
			margin-left:0px;
			padding: 0 15px;
			display: block;
			font-size: 1rem;
			height: 48px;
			line-height: 48px;
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
		.profile{
			background-color:white;
			padding:3%;
			box-shadow: none;
			border-top:2px solid #408eba;
			transition: box-shadow 500ms;
			-moz-transition: box-shadow 500ms;	/* Firefox 4 */
			-webkit-transition: box-shadow 500ms;	/* Safari 和 Chrome */
			-o-transition: box-shadow 500ms;
		}
		.profile:hover{
			box-shadow: 0 2px 6px 0 rgba(0, 0, 0, 0.18), 0 2px 7px 0 rgba(0, 0, 0, 0.15);
		}
		.tip{
			display:inline;
			padding:4%;
			background-color:#E4E4E4;
			color:black;
			-moz-border-radius: 15px; 
			-webkit-border-radius: 15px; 
			border-radius:15px;
			margin-right: 3%; 
		}
		body{
			background-color: #ecf0f5;
		}
		.train-line{
			height:480px;
			overflow:auto;
			border-top:2px solid #408eba;
			border-left:1px solid #ddd;
			border-right:1px solid #ddd;
			border-bottom:1px solid #ddd;
			padding-top:1%;
			padding-left:1%;
			background-color:#f0f0f0;
			margin-right:2%;
			transition: box-shadow 500ms;
			-moz-transition: box-shadow 500ms;	/* Firefox 4 */
			-webkit-transition: box-shadow 500ms;	/* Safari 和 Chrome */
			-o-transition: box-shadow 500ms;
		}
		.train-line:hover{
			box-shadow: 0 2px 6px 0 rgba(0, 0, 0, 0.18), 0 2px 7px 0 rgba(0, 0, 0, 0.15);
		
		}
		nav{
			background-color: #408eba;
		}
		nav .nav-wrapper i {
     		 display: block;
      		font-size: 1.25rem; 
			  }
		.comment{
			margin-right:2%;
			margin-top:2%;
			padding-bottom:1%;
			border-top:2px solid #408eba;
			border-left:1px solid #ddd;
			border-right:1px solid #ddd;
			background-color: white;
		}
		.comment-content{
			padding-top:2%;
			background-color: #f0f0f0;
		}
		input[type=text]{
			border: 2px solid #ddd;
			padding: 2%;
			height: 3rem;
			margin-bottom: -20px;
		}
		input[type=text]:focus:not([readonly]), textarea.materialize-textarea:focus:not([readonly]){
			border: 2px solid #408eba;
			border-bottom: 2px solid #408eba;
			box-shadow: none;
		}
		textarea.materialize-textarea{
			border: 2px solid #ddd;
			padding: 2%;
			height: 3rem;
			margin-bottom: -20px;
		}
		.btn{
			background-color: #408eba;
		}
		.btn:hover{
			box-shadow: none;
			background-color: #50b5ee;
		}
		.topbar{
			background-color: #408eba;
			height: 56px;
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
            <li class="bold"><a class="collapsible-header" href="/player/group">兴趣组</a>
            </li>
            <li class="bold"><a class="collapsible-header" href="/player/social">朋友圈</a>
              
            </li>
            <li class="bold"><a href="#!" class="collapsible-header active">教练</a>
					<div class="collapsible-body">
						<ul>
							<li class="active"><a href="/player/coach/1" style="margin:0;"> <div  style="height:48px;">
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
			<!--<nav>
			<div class="nav-wrapper" style="margin-right:0%;">
				<ul class="right hide-on-med-and-down" >
				<li><a class="dropdown-button" href="#!" data-activates="dropdown1"><i class="fa fa-envelope-o"></i></a></li>
				</ul>
			</div>
			</nav>
			<ul id="dropdown1" class="dropdown-content" style="margin-top:64px;">
			<li><a href="#!">one</a></li>
			<li><a href="#!">two</a></li>
			<li class="divider"></li>
			<li><a href="#!">three</a></li>
			</ul>-->
			<div class="topbar">
                <div style="font-size:1.5rem;padding:1%;padding-left:10%;color:white;">
                  教练主页
                </div>
            </div>
			<div>
				<div class="row" style="margin-top:5%;">
					<div class="col s3">
					<div class="profile">
					<div style="text-align:center">
					<div >
						<img src="/img/user.jpg" class="circle responsive-img">
					</div>
					<div style="font-size:2rem;">Nina Mcintire</div>
					<div style="color:grey;">健身教练</div>
					</div>
					<div class="divider"></div>
					<div style="margin-top:5%;margin-bottom:5%;">
					<div style="float:left;">
						关注者
					</div>
					<div style="text-align:right;">
						1,232
					</div>
					</div>
					<div class="divider"></div>
					<div style="margin-top:5%;margin-bottom:5%;">
					<div style="float:left;">
						已发教程
					</div>
					<div style="text-align:right;">
						23
					</div>
					</div>
					<div class="divider"></div>
					<div style="margin-top:5%;margin-bottom:5%;">
					<a class="waves-effect waves-light btn" style="width:100%;" id="follow" onclick="follow()">关注</a>
					</div>
				</div>
				
				<div class="profile" style="padding:3%;margin-top:10%;">
					  <div style="font-size:1.5rem;">
						  About Me
					  </div>
					  <div class="divider"></div>
					  <div style="margin-top:3%;margin-bottom:3%;">
					<a style="color:black;padding-right:3%;"><i class="fa fa-user"></i></a>个人简介
					</div>
					<div style="color:grey;font-size:0.75rem;margin-bottom:3%">
						实力教练，南京体育大学毕业，拥有多年教学经验，帮助多名学生塑造健康身材
					</div>
					<div class="divider"></div>
					<div style="margin-top:3%;margin-bottom:3%;">
						<a style="color:black;padding-right:3%;"><i class="fa fa-map-marker"></i></a>地点
					</div>
					<div style="color:grey;font-size:0.75rem;margin-bottom:3%;">
						江苏，南京
					</div>
					<div class="divider"></div>
					<div style="margin-top:3%;margin-bottom:3%;">
						<a style="color:black;padding-right:3%;"><i class="fa fa-pencil"></i></a>训练方向
					</div>
					<div style="color:grey;font-size:0.75rem;margin-bottom:3%;padding:3%;">
						<div>
							<div class="tip"><a style="color:black;padding-right:1%;"><i class="fa fa-tag"></i></a>健身</div>
							<div class="tip"><a style="color:black;padding-right:1%;"><i class="fa fa-tag"></i></a>减肥</div>
						</div>
					</div>
					<div class="divider"></div>
					<div style="margin-top:3%;margin-bottom:3%;">
						<a style="color:black;padding-right:3%;"><i class="fa fa-star"></i></a>个人签名
					</div>
					<div style="color:grey;font-size:0.75rem;margin-bottom:3%;">
						找到一块不大不小，不深不浅的水池
					</div>
					</div>
				</div>
			
				<div class="col s9">
					
				 <div class=" train-line">
					 <ul class="timeline">
					<li class="time-label">
							<span>
							已发布训练
							</span>
					</li>
					<li>
						<i class="fa fa-fire"></i>
						<div class="timeline-item">
							<span class="time"><i class="fa fa-clock-o"></i>2015/9/01 20:03:12</span>
							<h3 class="timeline-header">全身训练</h3>
							<div class="timeline-body">
								全身锻炼可以锻炼到全身各个部位，此锻炼总会让你满意
								<div>
									<div class="row" style="margin-top:2%;padding-top:1%;width:64%;background-color:#ddd;margin-left:0%;">
										<div class="col s4">
									<img src="/img/train1.jpg" style="width:100%;height:100%;" class="responsive-img">
									</div>
									<div class="col s4">
									<img src="/img/train1.jpg" style="width:100%;height:100%;" class="responsive-img">
									</div>
									<div class="col s4"><img src="/img/train1.jpg" style="width:100%;height:100%;" class="responsive-img">
									</div>
								  </div>
								</div>
								<div>
									<div style="float:left;font-size:0.75rem;color:grey;margin-top:.5%;margin-right:1%;">
										共有932位学员参加了训练
									</div>
									<div>
										<img src="/img/user.jpg" class="circle responsive-img" style="width:24px;height:24px;margin-right:1%;">
									    <img src="/img/user1.jpg" class="circle responsive-img" style="width:24px;height:24px;margin-right:1%;">
										...
									</div>
								</div>
							</div>
				
							<div class="timeline-footer">
							</div>
						</div>
					</li>
					<li>
						<i class="fa fa-fire"></i>
						<div class="timeline-item">
							<span class="time"><i class="fa fa-clock-o"></i>2015/9/01 20:03:12</span>
							<h3 class="timeline-header">全身训练</h3>
							<div class="timeline-body">
								全身锻炼可以锻炼到全身各个部位，此锻炼总会让你满意
								<div>
									<div class="row" style="margin-top:2%;padding-top:1%;width:64%;background-color:#ddd;margin-left:0%;">
										<div class="col s4">
									<img src="/img/train1.jpg" style="width:100%;height:100%;" class="responsive-img">
									</div>
									<div class="col s4">
									<img src="/img/train1.jpg" style="width:100%;height:100%;" class="responsive-img">
									</div>
									<div class="col s4"><img src="/img/train1.jpg" style="width:100%;height:100%;" class="responsive-img">
									</div>
								  </div>
								</div>
								<div>
									<div style="float:left;font-size:0.75rem;color:grey;margin-top:.5%;margin-right:1%;">
										共有932位学员参加了训练
									</div>
									<div>
										<img src="/img/user.jpg" class="circle responsive-img" style="width:24px;height:24px;margin-right:1%;">
									    <img src="/img/user1.jpg" class="circle responsive-img" style="width:24px;height:24px;margin-right:1%;">
										...
									</div>
								</div>
							</div>
				
							<div class="timeline-footer">
							</div>
						</div>
					</li>
					<li>
						<i class="fa fa-fire"></i>
						<div class="timeline-item">
							<span class="time"><i class="fa fa-clock-o"></i>2015/9/01 20:03:12</span>
							<h3 class="timeline-header">全身训练</h3>
							<div class="timeline-body">
								全身锻炼可以锻炼到全身各个部位，此锻炼总会让你满意
								<div>
									<div class="row" style="margin-top:2%;padding-top:1%;width:64%;background-color:#ddd;margin-left:0%;">
										<div class="col s4">
									<img src="/img/train1.jpg" style="width:100%;height:100%;" class="responsive-img">
									</div>
									<div class="col s4">
									<img src="/img/train1.jpg" style="width:100%;height:100%;" class="responsive-img">
									</div>
									<div class="col s4"><img src="/img/train1.jpg" style="width:100%;height:100%;" class="responsive-img">
									</div>
								  </div>
								</div>
								<div>
									<div style="float:left;font-size:0.75rem;color:grey;margin-top:.5%;margin-right:1%;">
										共有932位学员参加了训练
									</div>
									<div>
										<img src="/img/user.jpg" class="circle responsive-img" style="width:24px;height:24px;margin-right:1%;">
									    <img src="/img/user1.jpg" class="circle responsive-img" style="width:24px;height:24px;margin-right:1%;">
										...
									</div>
								</div>
							</div>
				
							<div class="timeline-footer">
							</div>
						</div>
					</li>
				</ul> 
				 </div>
				 <!--comment-->
				 <div class="comment" id="list">
					 <div style="padding:2%;font-size:1.25rem;">留言</div>
					 <div class="divider"></div>
					 <div class="comment-content">
					<div class="row">
							<div style="width:36px; height:36px;float:left;border-radius:50%;overflow:hidden;margin-left:4%;">
								<img class="responsive-img" src="/img/user1.jpg">
							</div>
						<div class="test"style="padding-left:10%;">
							<div style="float:left;">
							Alexander Pierce
							</div>
							<div style="text-align:right;padding-right:2%;padding-top:1%;color:grey;font-size:0.75rem;">
							2015/11/11 11:11:11
							</div>
						</div>	
							
					</div>
					<div style="margin-left:10%;margin-top:-4%;font-size:0.75rem;">有啊，很多年前，我后面跟了十几亿人，要不是我腿快，现在就没我了。</div>
					<div style="text-align:right;margin-top:-10px;padding-right:2%;">
							<a style="color:black;">回复</a>
						</div>
					<div class="divider" style="margin-top:1%;"></div>
				</div>
				 <div class="comment-content">
					<div class="row">
							<div style="width:36px; height:36px;float:left;border-radius:50%;overflow:hidden;margin-left:4%;">
								<img class="responsive-img" src="/img/user1.jpg">
							</div>
						<div class="test"style="padding-left:10%;">
							<div style="float:left;">
							Alexander Pierce
							</div>
							<div style="text-align:right;padding-right:2%;padding-top:1%;color:grey;font-size:0.75rem;">
							2015/11/11 11:11:11
							</div>
						</div>	
							
					</div>
					<div style="margin-left:10%;margin-top:-4%;font-size:0.75rem;">有啊，很多年前，我后面跟了十几亿人，要不是我腿快，现在就没我了。</div>
					<div style="text-align:right;margin-top:-10px;padding-right:2%;">
							<a style="color:black;">回复</a>
						</div>
					<div class="divider" style="margin-top:1%;"></div>
				</div>
				
				 
				</div>
                <div style="background-color:white;margin-right:2%;padding-bottom:2%;border-left:1px solid #ddd;border-right:1px solid #ddd;">
					<div class="row">
					<div style="width:36px; height:36px;float:left;border-radius:50%;overflow:hidden;margin-left:4%;margin-top:1.75%;">
						<img class="responsive-img" src="/img/user1.jpg">
					</div>
					<div class="input-field col s8">
					<textarea id="textarea1" class="materialize-textarea"></textarea>
					</div>
					<div class="col s4" style="width:100%;font-size:0.75rem;margin-top:-1.25%;padding-left:78%;">
						<a class="waves-effect waves-light btn" style="color:white;height:24px;line-height: 24px;padding: 0 1rem;" onclick="sendAdvice()">发送</a></div>
				</div>
				 </div>
			</div>
		
		</div>
		</div>
		</div>
        </main>
        <script type="text/javascript">
         
         var isFollowed = false;
			function follow(){
				var btn = document.getElementById("follow");
				if(!isFollowed){
					isFollowed = true;

					setTimeout(function(){
						btn.innerHTML = "已关注";
						btn.className = "btn disabled";
					},500);
					
				}
			}
            function logout(){
                $("#logoutTip").openModal();
            }
        </script>
		<script type="text/javascript" src="/js/materialize.min.js"></script>
		<script>
            $(".button-collapse").sideNav();
			$(".dropdown-button").dropdown();
	    </script>
        <script type="text/javascript">
			function sendAdvice(){
				var advice = document.getElementById("textarea1");
				var myDate = new Date();
				var mytime=myDate.toLocaleString();
				var newAdvice = "";
				newAdvice += "<div class=\"comment-content\">";
				newAdvice += "<div class=\"row\">";
				newAdvice += "<div style=\"width:36px; height:36px;float:left;border-radius:50%;overflow:hidden;margin-left:4%;\">";
				newAdvice += "<img class=\"responsive-img\" src=\"/img/user1.jpg\"></div>";
				newAdvice += "<div class=\"test\"style=\"padding-left:10%;\">";
				newAdvice += "<div style=\"float:left;\">";
				newAdvice += "Nina Mcintire";
				newAdvice += "</div><div style=\"text-align:right;padding-right:2%;padding-top:1%;color:grey;font-size:0.75rem;\">";
				newAdvice += mytime;
				newAdvice += "</div></div></div><div style=\"margin-left:10%;margin-top:-4%;font-size:0.75rem;\">";
				newAdvice += advice.value;
				newAdvice += "</div><div style=\"text-align:right;margin-top:-10px;padding-right:2%;\">";
				newAdvice += "<a style=\"color:black;\">回复</a></div>";
				newAdvice += "<div class=\"divider\" style=\"margin-top:1%;\"></div></div>";
				var list = document.getElementById("list");
				list.innerHTML = list.innerHTML + newAdvice;
				advice.value = "";
			}
		</script>
	</body>
</html>