<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>social</title>
		<link type="text/css" rel="stylesheet" href="/custom-font/css/font-awesome.css">
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
			.card-image{
				width: 30%;
				height: 30%;
				float:left;
				margin-left: 5%;
			}
			
			.topbar{
				background-color: #408eba;
				height: 56px;
			}
			body{
				background-color: #ecf0f5;
			}
			.news{
				margin-top: 2%;
				padding-bottom: 2%;
				transition: box-shadow 500ms;
				-moz-transition: box-shadow 500ms;	/* Firefox 4 */
				-webkit-transition: box-shadow 500ms;	/* Safari 和 Chrome */
				-o-transition: box-shadow 500ms;
			}
			.news:hover{
				box-shadow: 0 2px 6px 0 rgba(0, 0, 0, 0.18), 0 2px 7px 0 rgba(0, 0, 0, 0.15);
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
				width: 64px;
				height: 64px;
				background-repeat: no-repeat;
				max-width: 100%;
	  			height: auto;
			}
			.collapsible-header {
				  display: block;
				  cursor: pointer;
				  width: 140px;
				  padding-top:-10px;
				  min-height: 1rem;
  				  line-height: 1rem;
  				  padding-top: 1%;
  				  /*text-align: center;*/
  				  padding: .25rem 1.5rem;

				  background-color: #fff;
				  border-bottom: 1px solid #ddd; 
			}
		    .collapsible-header i {
		    		width: auto;
				    font-size: 1rem;
				    line-height: 1rem;
				    display: block;
				    /*text-align: center;*/
			}
			.collapsible{
				border: none;
				margin: 0px;
				padding-left: 0px;
				padding-right: 0px;
				box-shadow: none;
			}
			.collapsible-body{
				border-bottom: none;
			}
			.btn{
				background-color: #408eba;
				box-shadow: 0 1px 3px 0 rgba(0, 0, 0, 0.18), 0 1px 3px 0 rgba(0, 0, 0, 0.15);
			}
			.btn:hover{
				box-shadow: none;
				background-color: #50b5ee;
			}
			.like{
				background-color: #ddd;
				width: 56px;
				height: 24px;
				margin-left: 2%;
				padding-right: 1%;
				-moz-border-radius: 15px; 
				-webkit-border-radius: 15px; 
				border-radius:15px;
			}
			.like:hover{
				cursor: pointer;
			}
			.comments{
				background-color: #ddd;
				height: 24px;
				margin-left: 15%;
				text-align: center;
				-moz-border-radius: 15px; 
				-webkit-border-radius: 15px; 
				border-radius:15px;
			}
			.comments:hover{
				cursor: pointer;
			}
			.comment-content{
				padding-top:2%;
				background-color: #f0f0f0;
			}
			.replyBtn{
				color:black;
				font-size:0.75rem;
				background-color:#bfbfbf;
				padding:1%;
				-moz-border-radius: 5px; 
				-webkit-border-radius: 5px; 
				border-radius:5px;
				cursor: pointer;
			}
		   </style>
	</head>
	<body>
		<script type="text/javascript" src="/js/materialize.min.js"></script>
@include('layout.player_side')
		<div style="padding-left: 16%;">
			<div class="topbar">
				<div style="font-size:1.5rem;padding:1%;padding-left:10%;color:white;">
        			朋友圈
        		</div>	
			</div>
			<div class="container" style="margin-top:4%;">
				<div style="width:72%;background-color:white;">
					<div class="row">
						<div class="col s2" style="padding-top:3%;text-align:center;font-size:0.75rem"><b>说些什么吧</b></div>
						<div class="col s9 " style="padding-bottom:1%;">
						{!! Form::open(array('url' => "/player/social",'files' => true,'method' => 'POST')) !!}
							<div class="input-field">
								<textarea class="materialize-textarea" id="post_content" name="post_content"></textarea>
							</div>
							<div class="file-field input-field" id="i_file" style="margin-top:5%;width:32%;float:left;">
								<div class="blank">
									<input type="file" id="post_photo" name="post_photo">
									<img src="/img/icon_add.png"class="responsive-img" id="preview">
								</div>
							</div>
						{{ csrf_field() }}
						{!! Form::close() !!}
							<div style="text-align:right;margin-top:12%;"><a class="waves-effect waves-light btn" style="width:128px;font-size:0.75rem;" onclick="publish()">发布</a></div>
						</div>	
					</div>
					<div class="divider"></div>
				</div>
				@foreach(Auth::user()->feed->sortByDesc('id') as $feed)
				<div class="news" style="background-color:white;width:72%;">
					<div class="row">
						<div style="text-align:center;float:left;margin-left:5%;margin-top:2%;">
							<div style="width:36px;height:36px;">
							<img src="/img/portrait/user_portrait_{{ Auth::user()->id }}.jpg" alt="img" class="circle responsive-img">
							</div>
						</div>
						<div class="col s3" style="margin-top:2%;">
							<div style="font-size:0.75rem"> {{ $feed->user->name }}</div>
							<div style="font-size:0.5rem;color:grey">{{$feed->created_at}}</div>
						</div>
					</div>
					<div class="divider" style="margin-top:-10px;"></div>
					<div>
						@if($feed->photo != 'null')
						<div style="padding:2%;">
						<img src="{{ $feed->photo }}" class="responsive-img"> 
						</div>
						@endif
						<div style="font-size:0.75rem;padding:2%;">
							{{ $feed->content }}
						</div>
					</div>
					<div class="like" style="padding-left:2%;padding-bottom:2%;float:left;">
						<a id="likeIcon" style="color:black;font-size:0.75rem" onclick="changeIcon(this)"><i class="fa fa-thumbs-o-up" style="font-size:1rem;"></i>Like</a>
					</div>
					<ul class="collapsible" data-collapsible="accordion">
						<li>
							<div class="collapsible-header comments">
								<a style="color:black;font-size:0.75rem"><i class="fa fa-comments-o" style="font-size:1rem;"></i>Comments</a>
							</div>
							<div class="collapsible-body" >
							@foreach($feed->comment as $comment)
								<div style="margin-top:2%;background-color:#f7f7f7;">
									<div class="comment-content">
										<div class="row">
											<div style="width:36px; height:36px;float:left;border-radius:50%;overflow:hidden;margin-left:4%;">
												<img class="responsive-img" src="/img/user1.jpg">
											</div>
											<div style="padding-left:12%;">
												<div style="float:left;">
													{{ $comment->user->name }}
												</div>
												<div style="text-align:right;padding-right:5%;padding-top:1%;color:grey;font-size:0.75rem;">
													{{ $comment->created_at }}
												</div>
											</div>
										</div>
										<div style="margin-left:10%;margin-top:-5%;font-size:0.75rem;">{{ $comment->content }}</div>
										<br>
										<div style="text-align:right;margin-top:-10px;padding-right:2%;">
											<a class="replyBtn" onclick="replyTo(this)">Reply</a>
										</div>
										<div class="divider" style="margin-top:1%;"></div>
									</div>
								</div>
							@endforeach
								<div>
									<div class="row">
										<div style="width:36px; height:36px;float:left;overflow:hidden;margin-left:4%;margin-top:2%;">
												<img class="circle responsive-img" src="/img/user.jpg">
										</div>
										<div class="input-field col s9 text">
											<input  type="text" placeholder="Press enter to post comment" id="reply">
										</div>
									</div>
								</div>
							</div>
						</li>
					</ul>
				</div>
				@endforeach
			</div>
		</div>
	
	<script type="text/javascript" src="/js/materialize.min.js"></script>
	<script type="text/javascript">
		var isLike = false;
		function changeIcon(icon){
			var icon = document.getElementById("icon.id");
			if(!isLike){
				isLike = true;
				document.getElementById("likeIcon").style.color = '#d13d3d';
			}else{
				isLike = false;
				document.getElementById("likeIcon").style.color = 'black';
			}
		}

	</script>
	<script type="text/javascript">
		document.onkeydown = function(event){
			var e = event || window.event || arguments.callee.caller.arguments[0];
			if(e && e.keyCode==13){ // enter 
                 var reply = document.getElementById("reply").value;
                 alert(reply);
                 document.getElementById("reply").value = "";
            }
		};
	</script>
	<script type="text/javascript">
		function replyTo(reply){
			var comment = document.getElementById(reply.id);
			document.getElementById("reply").value = ("Reply to :");
		}
	</script>
	<script type="text/javascript">
		var filePath;
	          $('#i_file').change( function(event) {
	          filePath = URL.createObjectURL(event.target.files[0]);
	          if(filePath!=""){
	          	var img = document.getElementById("preview");
	          	img.setAttribute("src",filePath);
	          }
	          });
	</script>
	<script>
		function publish(){
			document.getElementsByTagName('form')[0].submit();
		}
	</script>
	</body>

</html>