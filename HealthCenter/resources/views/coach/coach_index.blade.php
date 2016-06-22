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
		.side-nav{
			background-color: white;
			width: 16%;
			box-shadow: 0 2px 6px 0 rgba(0, 0, 0, 0.18), 0 2px 7px 0 rgba(0, 0, 0, 0.15);
		}
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
					<img src="/img/user.jpg" class="logo-img responsive-img">
				</li>
				<li class="no-padding">
					<ul class="collapsible collapsible-accordion" data-collapsible="accordion" style="color:black;">
						<li class="active"><a href="/coach">首页</a></li>
						<li class=""><a href="/coach/coach_train">发布训练</a></li>
						<li class=""><a href="#!"class="collapsible-header">学员</a>
							<div class="collapsible-body">
								<ul>
									<li><a href="/coach/trainer" style="margin:0;"> <div  style="height:48px;">
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
									<li> <a href="/coach/trainer" style="margin:0;"><div style="height:48px;">
												<div style="padding-left:0%;padding-top:6px;">
													<div style="width:36px;height:36px;border-radius:50%; overflow:hidden;float:left;">
														<img src="/img/user1.jpg" class="responsive-img">
													</div>
													<div style="margin-left:30%;margin-top:-2%;">
														Alexander Pierc
													</div>
												</div>
											</div></a>
									</li>
								</ul>
							</div>
						</li>
						<li class=""><a class="collapsible-header modal-trigger waves-effect waves-blue" onclick="logout()">退出</a></li>
					</ul>
				</li>
			</ul>
		</header>
		<div id="logoutTip" class="modal">
			<div class="modal-content" style="text-align:center;">
				<h4>Log out your account?</h4>
			</div>
			<div class="modal-footer">
				<a href="/auth/logout" class=" modal-action modal-close waves-effect waves-green btn-flat">Yes</a>
				<a href="#!" class=" modal-action modal-close waves-effect waves-green btn-flat">Cancel</a>
			</div>
		</div>
		<div style="padding-left:16%;">
			<div class="topbar"></div>
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
						3
					</div>
					</div>
					<div class="divider"></div>
					<div style="margin-top:5%;margin-bottom:5%;">
					  <div style="float:left;">
						评级
					</div>
					<div style="text-align:right;">
						专业教练
					</div>
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
							<span class="time"><i class="fa fa-clock-o"></i>2016/6/22 14:03:12</span>
							<h3 class="timeline-header">起跳训练</h3>
							<div class="timeline-body">
								
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
										共有0位学员参加了训练
									</div>
									<div>
										<!--<img src="/img/user.jpg" class="circle responsive-img" style="width:24px;height:24px;margin-right:1%;">
									    <img src="/img/user1.jpg" class="circle responsive-img" style="width:24px;height:24px;margin-right:1%;">
										...-->
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
										共有92位学员参加了训练
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
							<span class="time"><i class="fa fa-clock-o"></i>2015/4/01 15:23:12</span>
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
										共有32位学员参加了训练
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
				 <div class="comment">
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
				<div>
					<div class="row">
					<div style="width:36px; height:36px;float:left;border-radius:50%;overflow:hidden;margin-left:4%;margin-top:1.75%;">
						<img class="responsive-img" src="/img/user.jpg">
					</div>
					<div class="input-field col s8">
					<textarea id="textarea1" class="materialize-textarea"></textarea>
					</div>
					<div class="col s4" style="width:100%;font-size:0.75rem;margin-top:-1.25%;padding-left:78%;">
						<a class="waves-effect waves-light btn" style="color:white;height:24px;line-height: 24px;padding: 0 1rem;">发送</a></div>
				</div>
				 </div>
				 
				</div>
			</div>
		
		</div>
		</div>
		</div>
		<script type="text/javascript" src="/js/materialize.min.js"></script>
		<script type="text/javascript">
			function logout(){
				$("#logoutTip").openModal();
			}
		</script>
		<script>
			$(".dropdown-button").dropdown();
	    </script>

	</body>
</html>