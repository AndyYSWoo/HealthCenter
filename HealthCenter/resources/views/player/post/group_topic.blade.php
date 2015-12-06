<!DOCTYPE html>
<html>
<head>
	<title>Group Topic</title>
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
	</style>
</head>
<body>
@include('layout.player_side')
        <div style="padding-left:16%">
        	<div class="topbar">
        		<div style="font-size:1.5rem;padding:1%;padding-left:10%;color:white;">
        			话题
        		</div>	
        	</div>
        	<div class="container" style="margin-top:4%;width:72%;">
        		<div style="background-color:white;">
        			<div style="padding:2%;font-size:1.25rem;">
        				<b>{{$post->title}}</b>
        			</div>
        			<div class="row">
        				<div  style="text-align:center;float:left;margin-left:5%;">
        					<img src="{{ $post->author->portrait }}" alt="user" style="width:48px;height:48px" class="circle responsive-img">
        				</div>
        				<div class="col s8">
        					<span style="font-size:0.75rem;color:grey;margin-right:2%;">From:</span><span>{{ $post->author->name }}</span>
        					<div style="font-size:0.75rem;color:grey;">{{ $post->created_at }}</div>
        				</div>
        			</div>
        			<div class="divider"></div>
        			<div class="row">
        				<div class="col s8 offset-s1" style="padding-top:2%;">
							{{ $post->content }}
        				</div>
        			</div>
        			<div class="divider"></div>
					<div style="margin-top:4%;">
					@foreach($post->comments as $comment)
						<div class="comment-content">
							<div class="row">
								<div style="width:36px; height:36px;float:left;border-radius:50%;overflow:hidden;margin-left:4%;">
									<img class="responsive-img" src="{{ $comment->author->portrait }}">
								</div>
								<div class="test"style="padding-left:10%;">
								<div style="float:left;">
									{{ $comment->author->name }}
								</div>
								<div style="text-align:right;padding-right:2%;padding-top:1%;color:grey;font-size:0.75rem;">
								{{ $comment->created_at }}
								</div>
								</div>	
					
							</div>
							<div style="margin-left:10%;margin-top:-4%;font-size:0.75rem;"><br>{{ $comment->content }}</div>
							<div style="text-align:right;margin-top:-10px;padding-right:2%;">
								<br>
							</div>
							<div class="divider" style="margin-top:1%;"></div>
						</div>
					@endforeach

					</div>
					<div style="padding-bottom:3%;padding-top:2%;">
							<div class="row">
							<div style="width:36px; height:36px;float:left;border-radius:50%;overflow:hidden;margin-left:4%;margin-top:1.75%;">
								<img class="responsive-img" src="{{ Auth::user()->portrait }}">
							</div>
							{!! Form::open(array('url' => "/player/post/comment",'method' => 'POST')) !!}
							<div class="input-field col s8">
								<textarea id="textarea1" class="materialize-textarea" name="content"></textarea>
							</div>
							<input type="text" name="post_id" value="{{ $post->id }}" style="display:none;">
							{{ csrf_field() }}
							{!! Form::close() !!}
							<div class="col s4" style="width:100%;font-size:0.75rem;margin-top:-1.25%;padding-left:78%;">
								<a onclick="send()" class="waves-effect waves-light btn" style="color:white;height:24px;line-height: 24px;padding: 0 1rem;">发送</a></div>
							</div>
				 	</div>
        		</div>
        	</div>
        </div>
    <script type="text/javascript" src="/js/jquery_min.js"></script>	
	<script type="text/javascript" src="/js/materialize.min.js"></script>
	<script type="text/javascript">
		function reply (commentId) {
			var replyContent = document.getElementById("textarea1");
			replyContent.innerHTML = "Reply to:";
		}
		function send (){
			$('form').submit();
		}
	</script>
</body>
</html>