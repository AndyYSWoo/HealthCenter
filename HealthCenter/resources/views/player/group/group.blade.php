<!DOCTYPE html>
<html>
<head>
	<title>精选小组</title>
	<meta charset="utf-8">
	<link type="text/css" rel="stylesheet" href="/custom-font/css/font-awesome.css">
	<link type="text/css" rel="stylesheet" href="/css/materialize.css"  media="screen,projection"/> 
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
	@include('layout.player_side')
        <div style="padding-left:16%">
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
								<a class="waves-effect waves-light btn" style="width:160px;color:white;height:36px;line-height: 24px;font-size:0.5rem;padding-top:1%;" href="/player/group/create">创建兴趣组</a>
							</div>
						</div>
					</div>
					@foreach($groups as $group)
					<div class="divider"></div>
					<div style="margin-top:2%;">
						<div class="row">
							<div class="col s5" style="text-align:center;">
								<img style="height:120px;" src="{{ $group->poster }}" alt="poster" class="responsive-img">
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
									{{ App\player_in_group::where('group_id',$group->id)->count() }} 人参与
								</div>
								</div>
							</div>
						</div>
					</div>					
					@endforeach
        		</div>
        	</div>
        </div>
	<script type="text/javascript" src="/js/jquery_min.js"></script>	
	<script type="text/javascript" src="/js/materialize.min.js"></script>
</body>
</html>