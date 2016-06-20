<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>user</title>
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
			body{
				background-color: #ecf0f5;
			}
			.topbar{
				background-color: #408eba;
				height: 56px;
			}
			.uploadBtn{
				cursor: pointer;
				height: 100%;
				padding-top: 1%;
				padding-right:1%;
			}
			.uploadBtn:hover{
				background-color: #67acd3;
			}
			.comment-content{
				padding-top:2%;
				background-color: white;
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
			.btn{
				width: 48%;
				background-color: #408eba;
			}
			.btn:hover{
				box-shadow: none;
				background-color: #50b5ee;
			}
		</style>
	</head>
	<body>
		<script type="text/javascript" src="/js/materialize.min.js"></script>
@include('layout.player_side')
		<div style="padding-left:16%;">
			<div class="topbar">
				<div class="uploadBtn" style="float:right;margin-right:4%;">
					<a style="color:white;" href="/player/sports/data/create"><i class="fa fa-download" style="padding:0 1rem;"></i>数据导入</a>
				</div>
			</div>
			
			<div style="margin-top:5%;">
				<div class="row">
					<div class="col s10">
						<div class="col s4">
						<div class="row" style="background-color:#1a9abe;">
							<div class="col s4" style="padding-top:8%;text-align:center;">
								<a style="color:white;"><i class="fa fa-paw fa-3x"></i></a>
							</div>
							<div class="col s8" style="background-color:#20c1ed;color:white;">
								<div class="row" style="border-bottom:2px solid #1a9abe;margin-top:3%;">
									<div class="col s6" style="border-right:2px solid #1a9abe;">
									<div style="font-size:0.64rem">今日距离</div>
									<div style="font-size:0.5rem;">{{ $distance }}</div>
								</div>
									<div class="col s6">
										<div style="font-size:0.64rem">目标距离</div>
										<div style="font-size:0.5rem;">{{ $target_distance }}</div>
									</div>
								</div>
								@if($distance <= $target_distance)
									<div style="font-size:0.75rem;margin-top:-10px;">已完成目标{{ round(($distance/$target_distance)*100,1) }}%</div>
								@else
									<div style="font-size:0.75rem;margin-top:-10px;">已完成目标100%</div>
								@endif
								 <div class="progress" style="background-color:#1a9abe;">
									<div class="determinate animated slideInLeft" style="width: {{ round(($distance/$target_distance)*100,1) }}%;background-color:white;"></div>
								</div>
							</div>
						</div>
					</div>
					<div class="col s4">
						<div class="row" style="background-color:#af3d32;">
							<div class="col s4" style="padding-top:8%;text-align:center;">
								<a style="color:white;"><i class="fa fa-fire fa-3x"></i></a>
							</div>
							<div class="col s8" style="background-color:#db4c3f;color:white;">
								<div class="row" style="border-bottom:2px solid #af3d32;margin-top:3%;">
									<div class="col s6" style="border-right:2px solid #af3d32;">
									<div style="font-size:0.64rem">今日消耗</div>
									<div style="font-size:0.5rem;">{{ $calory }}</div>
								</div>
									<div class="col s6">
										<div style="font-size:0.64rem">目标消耗</div>
										<div style="font-size:0.5rem;">{{ $target_calory }}</div>
									</div>
								</div>
								@if($calory <= $target_calory)
									<div style="font-size:0.75rem;margin-top:-10px;">已完成目标{{ round(($calory/$target_calory)*100,1) }}%</div>
								@else
									<div style="font-size:0.75rem;margin-top:-10px;">已完成目标100%</div>
								@endif
								 <div class="progress" style="background-color:#af3d32;">
									<div class="determinate animated slideInLeft" style="width: {{ round(($calory/$target_calory)*100,1) }}%;background-color:white;"></div>
									
								</div>
							</div>
						</div>
					</div>
					<div class="col s4">
						<div class="row" style="background-color:#13844a;">
							<div class="col s4" style="padding-top:8%;text-align:center;">
								<a style="color:white;"><i class="fa fa-clock-o fa-3x"></i></a>
							</div>
							<div class="col s8" style="background-color:#18a55d;color:white;">
								<div class="row" style="border-bottom:2px solid #13844a;margin-top:3%;margin-left:-2%;">
									<div class="col s6" style="border-right:2px solid #13844a;">
									<div style="font-size:0.64rem">运动时长</div>
									<div style="font-size:0.5rem;">{{ round($time/60,1) }} min</div>
								</div>
									<div class="col s6">
										<div style="font-size:0.64rem">目标时长</div>
										<div style="font-size:0.5rem;">{{ round($target_time/60,1) }} min</div>
									</div>
								</div>
								@if($time <= $target_time)
								<div style="font-size:0.75rem;margin-top:-10px;">已完成目标{{ round(($time/$target_time)*100,1) }}%</div>
								@else
								<div style="font-size:0.75rem;margin-top:-10px;">已完成目标100%</div>
								@endif
								 <div class="progress" style="background-color:#13844a;">
									<div class="determinate animated slideInLeft" style="width: {{ round(($time/$target_time)*100,1) }}%;background-color:white;"></div>
									
								</div>
							</div>
						</div>
					</div>
					</div>
					<div class="col s2">
						<div style=""><a class="modal-trigger waves-effect waves-light btn" href="#modal1" style="color:white;cursor:pointer;width:90%;" onclick="modify()">修改目标</a></div>
						<div id="modal1" class="modal" style="width:48%;">
							<div class="container" style="height:72%;padding-top:6%;">
								<h5>修改目标</h5>
								<div class="row">
									<div class="col s3"style="padding-top:3%;text-align:right;"><b>目标距离</b></div>
									<div class="input-field col s6 text" >
										<input type="number" id="distance">
									</div>
									<div class="col s1" style="padding-top:3%;">M</div>
								</div>
								
								<div class="row">
									<div class="col s3"style="padding-top:3%;text-align:right;"><b>目标消耗</b></div>
									<div class="input-field col s6 text" >
										<input type="number" id="calorie">
									</div>
									<div class="col s1" style="padding-top:3%;">卡</div>
								</div>

								<div class="row">
									<div class="col s3"style="padding-top:3%;text-align:right;"><b>目标时长</b></div>
									<div class="input-field col s6 text" >
										<input type="number" id="time">
									</div>
									<div class="col s2" style="padding-top:3%;">min</div>
								</div>

							</div>
							<div class="divider" style="margin-bottom:2%;"></div>
							<div class="row" >
								<div class="col s3 offset-s5" style="margin-bottom:3%;margin-right:3%;padding-top:1%;">
								<a class="waves-effect waves-light btn" style="width:120px;">确定</a>
								</div>
								<div class="col s3" style="padding-top:1%;">
								<a class="waves-effect waves-light btn" style="width:120px;">取消</a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="row" >
					<div class="col s12">
						<div class="row">
							<div class="col s9" >
								<div id="walk_line_chart" style="max-width:inherit; height: 400px; margin: 0 auto;border-top:2px solid #ddd;border-bottom:2px solid #ddd;"></div>
							</div>
							<div class="col s3" style="background-color:white;border-top:2px solid #ddd;padding-bottom:2%;">
								<div style="padding:2%;font-size:1.25rem;">好友排名</div>
								<div style="margin-top:-10%;padding:2%;">
								<table class="bordered" style="background-color:white;">
										<thead>
											<tr>
												<th></th>
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
														<img class="responsive-img" src="/img/user.jpg">
													</div>
												</td>
												<td>Alexander Pierce</td>
											</tr>
											<tr>
												<td>3</td>
												<td>
													<div style="width:36px; height:36px; border-radius:50%; overflow:hidden;">
														<img class="responsive-img" src="/img/user1.jpg">
													</div>
												</td>
												<td>Sarah Bullock</td>
											</tr>
										</tbody>
									</table>
									</div>
							</div>
					</div>
					<div class="row" style="margin-top:-20px;">
						<div class="col s3" style="text-align:center;padding-right:0%;">
							<div class="row" style="background-color:white;padding-top:2%;border-right:2px solid #ddd;padding-bottom:2%;">
								<div class="col s12">
								<div style="font-size:0.75rem;color:green;"><a style="color:green"><i class="fa fa-angle-up"></i></a> 18%</div>
								<div style="font-size:1.25rem;"><b>{{ $total_dis }}米</b></div>
								<div>运动总距离</div>
								</div>
							</div>
						</div>
						<div class="col s3" style="text-align:center;padding-left:0;padding-right:0;">
							<div class="row" style="background-color:white;padding-top:2%;border-right:2px solid #ddd;padding-bottom:2%;">
								<div class="col s12">
								<div style="font-size:0.75rem;color:green;"><a style="color:green"><i class="fa fa-angle-up"></i></a> 15%</div>
								<div style="font-size:1.25rem;"><b>{{ $total_cal }}卡</b></div>
								<div>运动总消耗</div>
								</div>
							</div>
						</div>
						<div class="col s3" style="text-align:center;padding-left:0;">
							<div class="row" style="background-color:white;padding-top:2%;padding-bottom:2%;">
								<div class="col s12">
								<div style="font-size:0.75rem;color:green;"><a style="color:green"><i class="fa fa-angle-up"></i></a> 13%</div>
								<div style="font-size:1.25rem;"><b>{{ round($total_time/3600,0) }}时{{ round($total_time%3600/60,0) }}分</b></div>
								<div>运动总时间</div>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col s9">
							<div style="background-color:white;padding-bottom:3%;">
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
										<a style="color:black;cursor:pointer;"onclick="reply(this)">回复</a>
									</div>
									<div class="divider" style="margin-top:1%;"></div>
								</div>

								<div class="row">
								<div style="width:36px; height:36px;float:left;border-radius:50%;overflow:hidden;margin-left:4%;margin-top:1.75%;">
									<img class="responsive-img" src="/img/user.jpg">
								</div>
								<div class="input-field col s8">
									<textarea id="textarea1" class="materialize-textarea"></textarea>
								</div>
								<div class="col s4" style="width:100%;font-size:0.75rem;margin-top:-1.25%;padding-left:78%;">
									<a onclick="send()" class="waves-effect waves-light btn" style="color:white;height:24px;line-height: 24px;padding: 0 1rem;">发送</a></div>
								</div>

							</div>
						</div>
					</div>
					</div>
				</div>
				
			</div>
		</div>
		<script type="text/javascript">
			function reply (commentId) {
				var replyContent = document.getElementById("textarea1");
				replyContent.innerHTML = "Reply to:";
			}
			function send (){
				var replyContent = document.getElementById("textarea1");
				replyContent.innerHTML = "";
			}
			function modify(){
				$('#modal1').openModal();
			}
		</script>
		<script src="/js/highcharts/highcharts.js"></script>
		<script type="text/javascript">
	$(function () {
		var disArr = []
		@foreach($all_run as $run)
			disArr.push({{ $run->value }});
		@endforeach
    $('#walk_line_chart').highcharts({
        title: {
            text: '运动历史数据',
            x: -20 //center
        },
        subtitle: {
            x: -20
        },
        xAxis: {
            categories: []
        },
        yAxis: {
            title: {
                text: 'Distance (m)'
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
            name: 'Running',
            data: disArr
        }]
    });
});
		</script>
		
	</body>
</html>