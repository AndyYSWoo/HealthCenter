<!DOCTYPE html>
<html>
<head>
	<title>Activity Info</title>
	<meta charset="utf-8">
	<link type="text/css" rel="stylesheet" href="/custom-font/font-awesome.css">
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
        <div style="padding-left:16%;">
        	<div class="topbar">
        		<div style="font-size:1.5rem;padding:1%;padding-left:10%;color:white;">
	        	活动信息
	        	</div>
        	</div>
        	<div class="container">
        		<div style="margin-top:4%;background-color:white;padding:1%;">
					<div class="row">
        				<div class="col s5" style="text-align:center;">
        					<img src="{{ $activity->poster }}" alt="poster" class="responsive-img" style="width:300px;">
        				</div>
        				<div class="col s5" style="border-top:1px solid #ddd;">
        					<div>
        						<div>
        							<h5>{{ $activity->name }}</h5>
        						</div>
        						<div style="margin-top:2%;color:grey;">
        						<div>
        							时间： {{ $activity->date }} {{ $activity->time }}
        						</div>
        						<div>
									地点： {{ $activity->place }}
								</div>
								<div>
									发起： {{ $activity->author->name }}
								</div>
								<div  style="background-color:#ddd;width:18%;text-align:center;">
									<div id="cnt">{{ $activity->members->count() }}</div> 人参与
								</div>
								<div style="margin-top:3%;">
									@if($join == 0)
									<a id="join" class="waves-effect waves-light btn" style="color:white;height:24px;line-height: 24px;padding: 0 1rem;font-size:0.5rem;" onclick="join()">我要参加</a></div>
									@else
									<a id="join" class="waves-effect waves-light btn disabled" style="background-color:#ddd;color:black;height:24px;line-height: 24px;padding: 0 1rem;font-size:0.5rem;">已经参加</a></div>
									@endif
								</div>
								</div>
        					</div>
        				</div>
        				<div style="padding:2%;border-top:1px solid #ddd;">
        					<div style="font-size:1.25rem;color:#408eba">活动详情</div>
        					<div style="width:64%;font-size:0.75rem;">
								{{ $activity->description }}
        					</div>
        					<div style="font-size:1.25rem;color:#408eba;margin-top:2%;">
        						联系方式
        					</div>
        					<div style="font-size:0.75rem;">
								{{ $activity->contact }}
        					</div>
        				</div>
        			</div>
        			
        		</div>
        	</div>
        </div>
    <script type="text/javascript" src="/js/jquery_min.js"></script>	
	<script type="text/javascript" src="/js/materialize.min.js"></script>
	<script>
		function join(){
			$.ajax({
                        type    : "GET",
                        url     : "{{ "/player/activity/".$activity->id."/join" }}",
                        dataType: "JSON",
                        success :function(data){
							var join_btn = document.getElementById("join");
							join_btn.innerHTML="已经参与"
							join_btn.class="waves-effect waves-light btn disabled";
							join_btn.onclick="";
							join_btn.style.background="#ddd";
							join_btn.style.color="black";
							
							var cnt = document.getElementById("cnt");
							cnt.innerHTML = parseInt(cnt.innerHTML)+1;
                        },
                        error: function(e) {
                            console.log(e.responseText);
                        }
                    });
		}
	</script>
</body>
</html>