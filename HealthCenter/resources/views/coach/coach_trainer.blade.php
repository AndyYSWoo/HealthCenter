<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>trainer</title>
		<link type="text/css" rel="stylesheet" href="/custom-font/css/font-awesome.css">
		<link type="text/css" rel="stylesheet" href="/css/materialize.css"  media="screen,projection"/> 
		<link type="text/css" rel="stylesheet" href="/css/animate/animate.min.css">
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
			.topbar{
				background-color: #408eba;
				height: 56px;
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
			.comment{
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
			.tabs .tab a {
				color: #397da3;
			}
			.tabs .tab a:hover {
				color: #50b5ee;
			}
			.tabs .indicator {
				background-color:#397da3;
			}
		</style>
	</head>
	<body>
		<script type="text/javascript" src="/js/materialize.min.js"></script>
		@include('layout.coach_side');
		<div style="padding-left:16%;">
			<div class="topbar">
				
			</div>
			
			<div>
			 <div class="row">
				<div class="col s3" style="margin-top:5%;">
					<div class="profile">
					<div style="text-align:center">
					<div >
						<img src="/img/user1.jpg" class="circle responsive-img">
					</div>
					<div style="font-size:2rem;">AC_CHAN</div>
					</div>
				</div>
				
				</div> 
				<div class="col s9" style="margin-top:5%;">
					<div class="col s4">
						<div class="row" style="background-color:#1a9abe;">
							<div class="col s4" style="padding-top:5%;text-align:center;">
								<a style="color:white;"><i class="fa fa-tags fa-3x"></i></a>
							</div>
							<div class="col s8" style="background-color:#20c1ed;color:white;">
								<div style="font-size:0.75rem">今日步数</div>
								<div style="font-size:0.5rem;">13134</div>
								<div style="font-size:0.75rem">已完成目标70%</div>
								 <div class="progress" style="background-color:#1a9abe;">
									<div class="determinate animated slideInLeft" style="width: 70%;background-color:white;"></div>
								</div>
							</div>
						</div>
					</div>
					
					<div class="col s4">
						<div class="row" style="background-color:#af3d32;">
							<div class="col s4" style="padding-top:5%;text-align:center;">
								<a style="color:white;"><i class="fa fa-fire fa-3x"></i></a>
							</div>
							<div class="col s8" style="background-color:#db4c3f;color:white;">
								<div style="font-size:0.75rem">今日消耗</div>
								<div style="font-size:0.5rem;">1313</div>
								<div style="font-size:0.75rem">已完成目标60%</div>
								 <div class="progress" style="background-color:#af3d32;">
									<div class="determinate animated slideInLeft" style="width: 60%;background-color:white;"></div>
								</div>
							</div>
						</div>
					</div>
					
					<div class="col s4">
						<div class="row" style="background-color:#13844a;">
							<div class="col s4" style="padding-top:5%;text-align:center;">
								<a style="color:white;"><i class="fa fa-clock-o fa-3x"></i></a>
							</div>
							<div class="col s8" style="background-color:#18a55d;color:white;">
								<div style="font-size:0.75rem">今日运动时间</div>
								<div style="font-size:0.5rem;">120 min</div>
								<div style="font-size:0.75rem">已完成目标64%</div>
								 <div class="progress" style="background-color:#13844a;">
									<div class="determinate animated slideInLeft" style="width: 64%;background-color:white;"></div>
								</div>
							</div>
						</div>
					</div>
					<div>
						<div class="row">
							<div class="col s12">
								<div id="walk_line_chart" style="max-width:inherit; height: 400px; margin: 0 auto"></div>
							</div>
						<!-- 	<div class="col s6">
								<ul class="tabs">
								<li class="tab col s4"><a href="#walk">步数</a></li>
								<li class="tab col s4"><a href="#swim">游泳</a></li>
								<li class="tab col s4"><a href="#badminton">羽毛球</a></li>
								</ul>
							</div> -->
							<!-- <div >
							<div class="col s12">
								<div id="walk">
									<div id="walk_line_chart" style="max-width:inherit; height: 400px; margin: 0 auto"></div>
								</div>
								
							</div>
							<div class="col s12">
								<div id="swim" style="background-color:white;">
									<div id="swim_line_chart" style=" height: 400px; margin: 0 auto"></div>
								</div>
							</div>
							<div class="col s12">
								<div id="badminton"style="background-color:white;">
									<div id="badminton_line_chart" style=" height: 400px; margin: 0 auto"></div>
								</div>
							</div>
							</div> -->
						</div>
				</div>
				<div>
					<div class="row">
						<div class="col s12">
					    <div class="comment">
							 <div style="padding:2%;font-size:1.25rem;">留言</div>
					 <div class="divider"></div>
					 <div id="list">
						 
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
				<div>
					<div class="row">
					<div style="width:36px; height:36px;float:left;border-radius:50%;overflow:hidden;margin-left:4%;margin-top:1.75%;">
						<img class="responsive-img" src="/img/user.jpg">
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
				</div>
			</div>
			
			</div>
		</div>
		<script>
			function sendAdvice(){
				var advice = document.getElementById("textarea1");
				var myDate = new Date();
				var mytime=myDate.toLocaleString();
				var newAdvice = "";
				newAdvice += "<div class=\"comment-content\">";
				newAdvice += "<div class=\"row\">";
				newAdvice += "<div style=\"width:36px; height:36px;float:left;border-radius:50%;overflow:hidden;margin-left:4%;\">";
				newAdvice += "<img class=\"responsive-img\" src=\"/img/user.jpg\"></div>";
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
		<script type="text/javascript">
			$(function () {
		    $('#walk_line_chart').highcharts({
		        title: {
		            text: '运动历史数据',
		            x: -20 //center
		        },
		        subtitle: {
		            text: '',
		            x: -20
		        },
		        xAxis: {
		            categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun',
		                'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec']
		        },
		        yAxis: {
		            title: {
		                text: 'Distance(m)'
		            },
		            plotLines: [{
		                value: 0,
		                width: 1,
		                color: '#808080'
		            }]
		        },
		        tooltip: {
		            valueSuffix: 'm'
		        },
		        legend: {
		            layout: 'vertical',
		            align: 'right',
		            verticalAlign: 'middle',
		            borderWidth: 0
		        },
		        series: [{
		            name: 'Tokyo',
		            data: [7.0, 6.9, 9.5, 14.5, 18.2, 21.5, 25.2, 26.5, 23.3, 18.3, 13.9, 9.6]
		        }, {
		            name: 'New York',
		            data: [-0.2, 0.8, 5.7, 11.3, 17.0, 22.0, 24.8, 24.1, 20.1, 14.1, 8.6, 2.5]
		        }, {
		            name: 'Berlin',
		            data: [-0.9, 0.6, 3.5, 8.4, 13.5, 17.0, 18.6, 17.9, 14.3, 9.0, 3.9, 1.0]
		        }, {
		            name: 'London',
		            data: [3.9, 4.2, 5.7, 8.5, 11.9, 15.2, 17.0, 16.6, 14.2, 10.3, 6.6, 4.8]
		        }]
		    });
		});
		</script>
		<script src="/js/highcharts/highcharts.js"></script>
		
	</body>
</html>