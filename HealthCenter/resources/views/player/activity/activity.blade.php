<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link type="text/css" rel="stylesheet" href="/custom-font/font-awesome.css">
	<link type="text/css" rel="stylesheet" href="/css/materialize.css"  media="screen,projection"/> 
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<title>Activity List</title>
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
	</style>
</head>
<body>
 			    @include('layout.player_side');
		<div style="padding-left:16%;">
        <div class="topbar">
        	<div style="font-size:1.5rem;padding:1%;padding-left:10%;color:white;">
        	活动列表
        	</div>
        </div>
        <div class="container" style="margin-top:4%;background-color:white;">
        	<div class="row">
        		<div class="col s8" style="paadding:2%;">
        			<div class="row">
					    <div class="col s6" style="margin-left:10%;">
					      <ul class="tabs">
					        <li class="tab col s3"><a class="active" href="#run">跑步</a></li>
					        <li class="tab col s3"><a href="#badminton">球类</a></li>
					        <li class="tab col s3"><a href="#fitness">健身</a></li>
					      </ul>
					    </div>
                        <div class="col s3 offset-s1">
                            <div style="text-align:right;padding-top:5%;padding-bottom:2%;">
                                <a class="waves-effect waves-light btn" style="width:140px;color:white;height:36px;line-height: 24px;font-size:0.5rem;padding-top:4%;" href="/player/activity/create">创建新活动</a>
                            </div>
                        </div>
					</div>
					<div>
						<div id="run" class="col s12">
							@foreach($activities as $activity)
								@if($activity->type == App\activity::TYPE_RUN)
									<div class="row">
										<div class="col s5" style="text-align:center;">
											<img style="height:120px;" src="{{ $activity->poster }}" alt="poster" class="responsive-img">
										</div>
										<div class="col s7" style="border-top:1px solid #ddd;color:grey;font-size:0.75rem;"> 
											<div style="font-size:1.25rem;">
												<a href={{ "/player/activity/".$activity->id }}>{{ $activity->name }}</a>
											</div>
											<div style="margin-top:2%;">
											<div>
												时间： {{ $activity->date }} {{ $activity->time }}
											</div>
											<div>
												地点： {{ $activity->place }}
											</div>
											<div>
												发起： {{ $activity->author->name }}
											</div>
											<div style="background-color:#ddd;width:18%;text-align:center;">
												{{ $activity->members->count() }} 人参与
											</div>
											</div>
										</div>
									</div>
								@endif
							@endforeach
						</div>
					    <div id="badminton" class="col s12">
							@foreach($activities as $activity)
								@if($activity->type == App\activity::TYPE_SPORTS)
									<div class="row">
										<div class="col s5" style="text-align:center;">
											<img style="height:120px;" src="{{ $activity->poster }}" alt="poster" class="responsive-img">
										</div>
										<div class="col s7" style="border-top:1px solid #ddd;color:grey;font-size:0.75rem;"> 
											<div style="font-size:1.25rem;">
												<a href={{ "/player/activity/".$activity->id }}>{{ $activity->name }}</a>
											</div>
											<div style="margin-top:2%;">
											<div>
												时间： {{ $activity->date }} {{ $activity->time }}
											</div>
											<div>
												地点： {{ $activity->place }}
											</div>
											<div>
												发起： {{ $activity->author->name }}
											</div>
											<div style="background-color:#ddd;width:18%;text-align:center;">
												{{ $activity->members->count() }} 人参与
											</div>
											</div>
										</div>
									</div>
								@endif
							@endforeach
					    </div>
					    <div id="fitness" class="col s12">
							@foreach($activities as $activity)
								@if($activity->type == App\activity::TYPE_WORKOUT)
									<div class="row">
										<div class="col s5" style="text-align:center;">
											<img style="height:120px;" src="{{ $activity->poster }}" alt="poster" class="responsive-img">
										</div>
										<div class="col s7" style="border-top:1px solid #ddd;color:grey;font-size:0.75rem;"> 
											<div style="font-size:1.25rem;">
												<a href={{ "/player/activity/".$activity->id }}>{{ $activity->name }}</a>
											</div>
											<div style="margin-top:2%;">
											<div>
												时间： {{ $activity->date }} {{ $activity->time }}
											</div>
											<div>
												地点： {{ $activity->place }}
											</div>
											<div>
												发起： {{ $activity->author->name }}
											</div>
											<div style="background-color:#ddd;width:18%;text-align:center;">
												{{ $activity->members->count() }} 人参与
											</div>
											</div>
										</div>
									</div>
								@endif
							@endforeach
					    </div>
					</div>
					
        		</div>
        		<div class="col s4" style="padding:2%;margin-top:2%;border-left:1px solid #ddd;">
        			<div>
        				<div>
        					最火的活动
        				</div>
        				<table class="centered">
				        <thead>
				          <tr>
				              <th data-field="rank">#</th>
				              <th data-field="name">活动</th>
				              <th data-field="calorie">参与人数</th>
				          </tr>
				        </thead>

				        <tbody>
				          <tr>
				            <td>1</td>
				            <td>
				            <div style="float:left;height:36px;width:36px;">
				            	<img src="/img/user.jpg" class="circle responsive-img ">
				            </div>
				            <div style="font-size:0.75rem;padding-top:5%;color:grey;">千里之行，始于足下</div>
				            </td>
				            <td>5445</td>
				          </tr>
				          <tr>
				            <td>2</td>
				            <td>
				            <div style="float:left;height:36px;width:36px;">
				            	<img src="/img/user1.jpg" class="circle responsive-img ">
				            </div>
				            <div style="font-size:0.75rem;padding-top:5%;color:grey;">以球会友</div>
				            </td>
				            <td>3231</td>
				          </tr>
				          <tr>
				            <td>3</td>
				            <td>
							<div style="float:left;height:36px;width:36px;">
				            	<img src="/img/user2.jpg" class="circle responsive-img" style="height:36px;width:36px;">
				            </div>
				            <div style="font-size:0.75rem;padding-top:5%;color:grey;">健身活动</div>
				            </td>
				            <td>1235</td>
				          </tr>
				        </tbody>
				      </table>
        			</div>
        		</div>
        	</div>
        </div>
        </div>
	<script type="text/javascript" src="/js/jquery_min.js"></script>	
	<script type="text/javascript" src="/js/materialize.min.js"></script>

</body>
</html>>