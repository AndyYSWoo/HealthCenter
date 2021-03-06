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
			}
			body{
			background-color: #ecf0f5;
		}
		.topbar{
			background-color: #408eba;
			height: 56px;
		}
		</style>
	</head>
	<body>
		<script type="text/javascript" src="/js/materialize.min.js"></script>
@include('layout.doctor_side')
		<div style="padding-left:16%;">
			<div class="topbar">
				
			</div>
			
			<div style="margin-top:5%;">
				<div class="row">
					<div class="col s10">
						<div class="col s4">
						<div class="row" style="background-color:#1a9abe;">
							<div class="col s4" style="padding-top:8%;text-align:center;">
								<a style="color:white;"><i class="fa fa-tags fa-3x"></i></a>
							</div>
							<div class="col s8" style="background-color:#20c1ed;color:white;">
								<div class="row" style="border-bottom:2px solid #1a9abe;margin-top:3%;">
									<div class="col s6" style="border-right:2px solid #1a9abe;">
									<div style="font-size:0.64rem">今日步数</div>
									<div style="font-size:0.5rem;">10500</div>
								</div>
									<div class="col s6">
										<div style="font-size:0.64rem">目标步数</div>
										<div style="font-size:0.5rem;">15000<a style="color:white;margin-left:10%;"><i class="fa fa-pencil"></i></a></div>
									</div>
								</div>
								<div style="font-size:0.75rem;margin-top:-10px;">已完成目标70%</div>
								 <div class="progress" style="background-color:#1a9abe;">
									<div class="determinate animated slideInLeft" style="width: 70%;background-color:white;"></div>
									
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
									<div style="font-size:0.5rem;">600</div>
								</div>
									<div class="col s6">
										<div style="font-size:0.64rem">目标消耗</div>
										<div style="font-size:0.5rem;">1000<a style="color:white;margin-left:10%;"><i class="fa fa-pencil"></i></a></div>
									</div>
								</div>
								<div style="font-size:0.75rem;margin-top:-10px;">已完成目标60%</div>
								 <div class="progress" style="background-color:#af3d32;">
									<div class="determinate animated slideInLeft" style="width: 60%;background-color:white;"></div>
									
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
								<div class="row" style="border-bottom:2px solid #13844a;margin-top:3%;">
									<div class="col s6" style="border-right:2px solid #13844a;">
									<div style="font-size:0.64rem">运动时长</div>
									<div style="font-size:0.5rem;">70 m</div>
								</div>
									<div class="col s6">
										<div style="font-size:0.64rem">目标时长</div>
										<div style="font-size:0.5rem;">100 m<a style="color:white;margin-left:10%;"><i class="fa fa-pencil"></i></a></div>
									</div>
								</div>
								<div style="font-size:0.75rem;margin-top:-10px;">已完成目标70%</div>
								 <div class="progress" style="background-color:#13844a;">
									<div class="determinate animated slideInLeft" style="width: 70%;background-color:white;"></div>
									
								</div>
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
														<img class="responsive-img" src="image.jpg">
													</div>
												</td>
												<td>AC_CHAN</td>
											</tr>
											<tr>
												<td>2</td>
												<td>
													<div style="width:36px; height:36px; border-radius:50%; overflow:hidden;">
														<img class="responsive-img" src="user.jpg">
													</div>
												</td>
												<td>Alexander Pierce</td>
											</tr>
											<tr>
												<td>3</td>
												<td>
													<div style="width:36px; height:36px; border-radius:50%; overflow:hidden;">
														<img class="responsive-img" src="user1.jpg">
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
								<div style="font-size:1.25rem;"><b>123232</b></div>
								<div>运动总步数</div>
								</div>
							</div>
						</div>
						<div class="col s3" style="text-align:center;padding-left:0;padding-right:0;">
							<div class="row" style="background-color:white;padding-top:2%;border-right:2px solid #ddd;padding-bottom:2%;">
								<div class="col s12">
								<div style="font-size:0.75rem;color:green;"><a style="color:green"><i class="fa fa-angle-up"></i></a> 15%</div>
								<div style="font-size:1.25rem;"><b>5432</b></div>
								<div>运动总消耗</div>
								</div>
							</div>
						</div>
						<div class="col s3" style="text-align:center;padding-left:0;">
							<div class="row" style="background-color:white;padding-top:2%;padding-bottom:2%;">
								<div class="col s12">
								<div style="font-size:0.75rem;color:green;"><a style="color:green"><i class="fa fa-angle-up"></i></a> 13%</div>
								<div style="font-size:1.25rem;"><b>342</b></div>
								<div>运动总时间</div>
								</div>
							</div>
						</div>
						
					</div>
					</div>
				</div>
				
			</div>
		</div>
		<script src="/js/highcharts/highcharts.js"></script>
		<script type="text/javascript">
	$(function () {
    $('#walk_line_chart').highcharts({
        title: {
            text: 'Monthly Average Temperature',
            x: -20 //center
        },
        subtitle: {
            text: 'Source: WorldClimate.com',
            x: -20
        },
        xAxis: {
            categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun',
                'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec']
        },
        yAxis: {
            title: {
                text: 'Temperature (°C)'
            },
            plotLines: [{
                value: 0,
                width: 1,
                color: '#808080'
            }]
        },
        tooltip: {
            valueSuffix: '°C'
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
	</body>
</html>