<!DOCTYPE html>
<html>
<head>
	<title>Group Index</title>
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
			.sendBtn{
				padding-left: 1%;
				padding-right: 1%;
				color: grey;
				text-align:right;
				cursor: pointer;
				float: right;
				font-size: 0.75rem;
				background-color: #ddd;
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
			.blank{
				/*background-image: url(icon_add.png);*/
				width: 128px;
				height: 128px;
				background-repeat: no-repeat;
				max-width: 100%;
	  			height: auto;
			}
			.tipmodal{
				width: 32%;
				height: 24%;
			}
	</style>
</head>
<body>
@include('layout.player_side')
        <div style="padding-left:16%;">
        	<div class="topbar">
        		<div style="font-size:1.5rem;padding:1%;padding-left:10%;color:white;">
        			小组首页
        		</div>
        	</div>
        	<div class="container" style="margin-top:4%;background-color:white;padding-bottom:2%;padding-top:2%;">
        		<div style="margin-top:2%;">
						<div class="row">
							<div class="col s5" style="text-align:center;">
								<img style="height:120px;" src="{{ $group->poster }}" alt="poster" class="responsive-img">
							</div>
							<div class="col s7" style="color:grey;font-size:0.75rem;"> 
								<div style="font-size:1.25rem;">
									<a style="color:#408eba;">{{ $group->name }}</a><span style="font-size:0.75rem;margin-left:2%;">{{ $group->motto }}</span>
								</div>
								<div style="margin-top:2%;">
								<div style="width:72%;background-color:#fff4e9;color:black;padding:1%">
									{{ $group->description }} 
								</div>
								<div class="row">
									<div class="col s2" style="background-color:#ddd;text-align:center;margin-top:1%;">
										<div id="cnt" style="font-size:1.25rem">
										{{ App\player_in_group::where('group_id',$group->id)->count() }} 
										</div>
										人参与
									</div>
									@if($in == 0)
									<div class="col s2" id="join" style="background-color:#ddd;text-align:center;margin-top:1%;padding-top:1.8%;margin-left:2%;cursor:pointer;height:32px" onclick="joinGroup()">
										我要参加
									</div>
									@else
									<div class="col s2" id="join" style="background-color:#ddd;text-align:center;margin-top:1%;padding-top:1.8%;margin-left:2%;cursor:pointer;height:32px">
										已经参加
									</div>									
									@endif
								</div>
								</div>
							</div>
						</div>
						<div class="divider"></div>
						<div class="container" style="margin-top:2%;">
							<div class="row">
								<div class="col s3" style="font-size:1.25rem;color:#408eba;">
									最近话题
								</div>
								<a class="modal-trigger btn col s1  offset-s8" href="#modal1" id="send" onclick="sendTopic()">
									发言
								</a>
								<div id="tipmodal1" class="modal tipmodal">
									<div style="height:72%;text-align:center;padding-top:6%;">
										<h5>先加入小组才可以发言</h5>
									</div>
									<div class="divider" style="margin-bottom:2%;"></div>
									<div style="text-align:center;"><a style="cursor:pointer;font-size:1.25rem;color:black;" onclick="agreeTip()">好的</a></div>
								</div>
								<div id="tipmodal2" class="modal tipmodal">
									<div style="height:72%;text-align:center;padding-top:6%;">
										<h5>你已经加入了该小组啦,快去发言吧</h5>
									</div>
									<div class="divider" ></div>
									<div style="text-align:center;"><a style="cursor:pointer;font-size:1.25rem;color:black;" onclick="agreeTip()">好的</a></div>
								</div>
								<div id="modal1" class="modal" >
								    <div class="modal-content" >
								      <h4>小组发言</h4>
										{!! Form::open(array('url' => "/player/post",'method' => 'POST')) !!}
										<input type="text" name="group_id" style="display:none;" value="{{ $group->id }}">
								      <div class="container" >
								      	<div class="row">
											<div class="col s2"style="padding-top:3%;text-align:right;"><b>标题</b></div>
											<div class="input-field col s8 text" >
												<input type="text" id="title" name="title">
											</div>
										</div>
										<div class="row">
											<div class="col s2" style="padding-top:4%;text-align:right;"><b>内容</b></div>
											<div class="col s8 " style="padding-top:2%;">
												<div class="input-field">
													<textarea class="materialize-textarea" placeholder="写下想说的话..." id="content" name="content"></textarea>
												</div>
											</div>						
										</div>
										{{ csrf_field() }}
										{!! Form::close() !!}
								      </div>
								    </div>
								    <div class="divider" style="margin-top:-15px;"></div>
								    <div>
								    	<div class="row" >
											<div class="col s3 offset-s5" style="margin-bottom:3%;margin-right:3%;padding-top:1%;">
											<a class="waves-effect waves-light btn" style="width:120px;" onclick="confirmSend()">确定</a>
											</div>
											<div class="col s3" style="padding-top:1%;">
											<a class="waves-effect waves-light btn" style="width:120px;" onclick="cancelSend()">取消</a>
											</div>
										</div>
								    </div>
								</div>
							</div>
							<div>
								<table class="striped">
						        <thead>
						          <tr>
						              <th data-field="id" style="width:50%;">话题</th>
						              <th data-field="name">作者</th>
						              <th data-field="price">最后回应时间</th>
						          </tr>
						        </thead>

						        <tbody>
									@foreach($posts as $post)
									<tr>
										<td><span style="cursor:pointer;" id="topicId"><a href="/player/post/{{ $post->id }}" style="color:black;">{{ $post->title }}</a></span></td>
										<td>{{ $post->author->name }}</td>
										@if($post->comments->count()!=0)
										<td>{{ $post->comments->sortByDesc('created_at')->first()->created_at }}</td>
										@else
										<td>No Comment</td>
										@endif
						          	</tr>
									@endforeach
						        </tbody>
						      	</table>
							</div>
						</div>
				</div>
        	</div>
        </div>

    
    <script type="text/javascript">
		@if($in == 0)
		var isJoin = false;
		@else
    	var isJoin = true;
		@endif
    	function joinGroup(){
			$.ajax({
				type    : "GET",
				url     : "{{ "/player/group/".$group->id."/join" }}",
				dataType: "JSON",
				success :function(data){
					var join = document.getElementById("join");
					join.innerHTML = "已经参加";
					var cnt = document.getElementById("cnt");
					cnt.innerHTML = parseInt(cnt.innerHTML)+1;
				},
				error: function(e) {
					console.log(e.responseText);
				}
			});
    	}
    	function sendTopic(){
    		if (isJoin) {
    			$('#modal1').openModal();
    		}else{
    			$('#tipmodal1').openModal();
    		};
    	}
    	function confirmSend(){
    		$('form').submit();
    	}
    	function cancelSend(){
    		$('#modal1').closeModal();
    	}
    	function agreeTip(){
    		$('#tipmodal1').closeModal();
    		$('#tipmodal2').closeModal();
    	}
    </script>
	<script type="text/javascript" src="/js/jquery_min.js"></script>	
	<script type="text/javascript" src="/js/materialize.min.js"></script>
	<script type="text/javascript">
			var filePath;
            $('#i_file').change(function(event) {
            filePath = URL.createObjectURL(event.target.files[0]);
            if(filePath!=""){
          	var img = document.getElementById("preview");
          	img.setAttribute("src",filePath);
        }
        });
	</script>
</body>
</html>