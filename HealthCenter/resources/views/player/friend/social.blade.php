<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>social</title>
		<link type="text/css" rel="stylesheet" href="/custom-font/font-awesome.css">
		<link type="text/css" rel="stylesheet" href="/css/materialize.css"  media="screen,projection"/>  
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
   		<script type="text/javascript" src="/js/jquery_min.js"></script>
		   <style type="text/css">
		   #slide-out{
		   	width: 16%;
		   	background-color: white;
		   }
		   	#header_img{
				width:  50%;
				padding-top: 5%;
				padding-bottom: 5%;
			}
			#header{
				text-align: center;
				box-shadow: 0 1px 3px 0 rgba(0, 0, 0, 0.18), 0 1px 3px 0 rgba(0, 0, 0, 0.15);
			}
			.side-nav{
				background-color: white;
				width: 16%;
				box-shadow: 0 2px 6px 0 rgba(0, 0, 0, 0.18), 0 2px 7px 0 rgba(0, 0, 0, 0.15);
			}
			.info{
				margin-top: -2%;
				padding-top: 5%;
				padding-left: 5%;
				padding-bottom: 1%;
				background-image: url(bkg.jpg);
			}
			.test{
				width: 64%;
				height: 64%;
			}
			.social-body{
				margin-left: 3%;
			}
			.release-body{
				margin-left: 5%;
			}
			.card-row{
				margin-top: 1px;
				margin-bottom: 1%;
			}
			.card-panel{
				padding-bottom: 1px;
			}
			.friend-group{
				float: right;
				/*width: 30%;*/
				margin-right: 5%;
			}
			#release{
				box-shadow: 0 2px 6px 0 rgba(0, 0, 0, 0.18), 0 2px 7px 0 rgba(0, 0, 0, 0.15);
				 
			}
			.card{
				box-shadow: 0 2px 6px 0 rgba(0, 0, 0, 0.18), 0 2px 7px 0 rgba(0, 0, 0, 0.15);
				/*padding-left: 5%;*/
				margin-left: 2%;
				/*position: fixed;*/
			}
			.card-info{
			box-shadow: 0 2px 6px 0 rgba(0, 0, 0, 0.18), 0 2px 7px 0 rgba(0, 0, 0, 0.15);
			background-color: #fff;
			border: 1px solid #e0e0e0;
			margin-top: 5%;
		}
		.card-image{
			width: 30%;
			height: 30%;
			float:left;
			margin-left: 5%;
		}
		.side-nav .collapsible-header{
			background-color: transparent;
			 float: none;
			 padding: 0 15px;
			 display: block;
			 font-size: 1rem;
			 height: 48px;
    		 line-height: 48px;
		}
		.note-panel{
			margin-top: -10%;
		}
		textarea.materialize-textarea{
			min-height :5rem;
		}
		   </style>
		}
		}
		}
	</head>
	<body>
		<script type="text/javascript" src="/js/materialize.min.js"></script>
		<div class="side-nav fixed">
	    <div id="header"><img class="circle responsive-img" src="/img/image.jpg" id ="header_img"></div>
  			<ul class="collapsible" data-collapsible="accordion" style="color:black;">
  				<li><a href="#!">首页</a></li>
				<li><a href="#!">体质数据</a></li>
				<li><a href="#!">兴趣组</a>
				<li><a href="#!"class="collapsible-header">好友</a>
					<div class="collapsible-body">
						<ul>
							<li>好友01</li>
						</ul>
					</div>
				</li>
				<li><a href="#!" class="collapsible-header">教练</a>
					<div class="collapsible-body">
						<ul>
							<li>教练01</li>
							
						</ul>
					</div>
				</li>
				<li><a href="#!"class="collapsible-header ">医生</a>
					<div class="collapsible-body">
						<ul>
							<li>医生01</li>
						</ul>
					</div>
				</li>
  			</ul>
	    </div>
		<div style="padding-left: 16%;">
	
		<!--profile-->
		<div class="info">
			<div class="row">
				<div class="head col s2">
					
					<img class="responsive-img test" src="/img/image.jpg">		
				</div>
				<div class="head s5 offset-s2" style="color:white">
					<h5>AC_CHAN</h5>
					<div style="margin:1%;">
						保持正派。保持冷静。其实还是活在梦里。
					</div>
					<span style="margin-right:2%;"><i class="fa  fa-map-marker"></i></span>NanJing				
				</div>
			</div>
		</div>
		<!--to do release-->
		<div>
			<div class="row">
				<div class="col s9">
				<div>
					<div class="row">
				    <form class="col s12" >
					<div class="row">
					<div class="input-field col s12" id="release">
					<textarea class="materialize-textarea" placeholder="说些什么吧..."></textarea>
					<div class="row">
					<a><span style="color:black;padding:2%"><i class="fa fa-photo">照片</i></span></a>
				    </div>
					<div class="row">
					<div class="col s4 offset-s9">
						<a class="waves-effect waves-light btn release-btn">发布</a>
					</div>		
					</div>
					
					
					</div>
				</div>
				</form>
			    </div>
				</div>

				<div class="note-panel">
					<div class="row">
						<div class="col s4 line1">
							<div class="card-info">
							   <div class="row card-title">
									<div class="card-image" style="text-align:left">
									<div class="note-card" style="width:100%;height:100%;padding-top:7%;">
										<img src="/img/image.jpg" id="header_img">
									</div>
									</div>
									<div class="card-title-info">
										<div style="margin-top:3%;padding-top:3%;">AC_CHAN</div>
										<div style="margin-top:3%;"><span style="margin-right:2%;"><i class="fa  fa-map-marker"></i></span>NanJing	</div>
									</div>
								</div>
								<div style="margin-left:5%;margin-top:-5%;">
									<div>我一个本科前两年几乎没写过前端的鶸，整个9月一直在写界面，而且有种还要继续写两个月的预感。，。
									</div>
									<div class="row">
										
									</div>
									<div style="text-align:right;margin-right:3%;">
									2015/1/23</div>	
									<div style="text-align:right;margin-right:3%"><a href="#!"><span style="color:black;">回复</span></a></div>				
								</div>
							</div>
							<div class="card-info">
							   <div class="row card-title">
									<div class="card-image" style="text-align:left">
									<div class="note-card" style="width:100%;height:100%;padding-top:7%;">
										<img src="/img/image.jpg" id="header_img">
									</div>
									</div>
									<div class="card-title-info">
										<div style="margin-top:3%;padding-top:3%;">AC_CHAN</div>
										<div style="margin-top:3%;"><span style="margin-right:2%;"><i class="fa  fa-map-marker"></i></span>NanJing	</div>
									</div>
								</div>
								<div style="margin-left:5%;margin-top:-5%;">
									<div>我一个本科前两年几乎没写过前端的鶸，整个9月一直在写界面，而且有种还要继续写两个月的预感。，。
									</div>
									<div class="row">
										
									</div>
									<div style="text-align:right;margin-right:3%;">
									2015/1/23</div>	
									<div style="text-align:right;margin-right:3%"><a href="#!"><span style="color:black;">回复</span></a></div>				
								</div>
							</div>
						</div>
						<div class="col s4 line2">
							<div class="card-info">
							   <div class="row card-title">
									<div class="card-image" style="text-align:left">
									<div class="note-card" style="width:100%;height:100%;padding-top:7%;">
										<img src="/img/image.jpg" id="header_img">
									</div>
									</div>
									<div class="card-title-info">
										<div style="margin-top:3%;padding-top:3%;">AC_CHAN</div>
										<div style="margin-top:3%;"><span style="margin-right:2%;"><i class="fa  fa-map-marker"></i></span>NanJing	</div>
									</div>
								</div>
								<div style="margin-left:5%;margin-top:-5%;">
									<div>我一个本科前两年几乎没写过前端的鶸，整个9月一直在写界面，而且有种还要继续写两个月的预感。，。
									</div>
									<div class="row">
										
									</div>
									<div style="text-align:right;margin-right:3%;">
									2015/1/23</div>	
									<div style="text-align:right;margin-right:3%"><a href="#!"><span style="color:black;">回复</span></a></div>				
								</div>
							</div>
						</div>
						<div class="col s4 line3">
						<div class="card-info">
							   <div class="row card-title">
									<div class="card-image" style="text-align:left">
									<div class="note-card" style="width:100%;height:100%;padding-top:7%;">
										<img src="/img/image.jpg" id="header_img">
									</div>
									</div>
									<div class="card-title-info">
										<div style="margin-top:3%;padding-top:3%;">AC_CHAN</div>
										<div style="margin-top:3%;"><span style="margin-right:2%;"><i class="fa  fa-map-marker"></i></span>NanJing	</div>
									</div>
								</div>
								<div style="margin-left:5%;margin-top:-5%;">
									<div>[盖伊鸡汤：生命是一场美丽的挣扎]国王球星鲁迪-盖伊在Instagram上发布了一张图片，与大家分享“鸡汤”文。 “生命其实是一场美丽的挣扎，”28岁的盖伊上赛季效力于国王，他场均上场35.4分钟得到21.1分5.9个篮板3.7次助攻
									</div>
									<div class="row">
										<div>
											<img class="materialboxed" width="30%" src="/img/test1.jpg">
										</div>
									</div>
									<div style="text-align:right;margin-right:3%;">
									2015/1/23</div>	
									<div style="text-align:right;margin-right:3%"><a href="#!"><span style="color:black;">回复</span></a></div>				
								</div>
							</div>
							
						</div>
					</div>
				</div>

				</div>
				<div class="col s3">
					<div class="card">
      			     <div class="row">
						   <div class="col s12">
							   <ul class="tabs">
								<li class="tab col s3"><a class="active" href="#daily_rank">排名</a></li>
								<li class="tab col s3"><a href="#rank">兴趣组</a></li>
								</ul>
								
								<div id="daily_rank">
									<table class="bordered" >
										<thead>
											<tr>
												<th>#</th>
												<th></th>
												<th></th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td>1</td>
												<td>
													<div style="width:36px; height:36px; border-radius:50%; overflow:hidden;">
														<img class="responsive-img" src="/img/image.jpg">
													</div>
												</td>
												<td>AC_CHAN</td>
											</tr>
											<tr>
												<td>2</td>
												<td>
													<div style="width:36px; height:36px; border-radius:50%; overflow:hidden;">
														<img class="responsive-img" src="/img/garen.png">
													</div>
												</td>
												<td>Garen</td>
											</tr>
											<tr>
												<td>3</td>
												<td>
													<div style="width:36px; height:36px; border-radius:50%; overflow:hidden;">
														<img class="responsive-img" src="/img/yi.png">
													</div>
												</td>
												<td>Master_Yi</td>
											</tr>
										</tbody>
									</table>
								</div>
						   </div>
					   </div>
				 </div>
			    </div>
				</div>
			</div>
		</div>
		</div>
	</body>
</html>