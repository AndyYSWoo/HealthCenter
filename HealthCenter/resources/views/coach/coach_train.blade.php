<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>coach</title>
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
			 margin-left:0px;
			 display: block;
			 font-size: 1rem;
			 height: 48px;
    		 line-height: 48px;
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
		
		input[type=text]{
			border: 2px solid #ddd;
			padding: 2%;
			border-radius: 5px;
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
			border-radius: 5px;
			height: 5rem;
			margin-bottom: -20px;
		}
		body{
			background-color:#ecf0f5;
		}
		.blank{
			/*background-image: url(icon_add.png);*/
			width: 128px;
			height: 128px;
			background-repeat: no-repeat;
			max-width: 100%;
  			height: auto;
		}
		.add-train{
			/*width:100px;
			height:100px;*/
			/*background:red;*/
			
			visibility: hidden;
		}
		.train-content{
			margin-bottom:5%;
			/*border-bottom:2px solid #ddd;*/
			box-shadow: 0 1px 3px 0 rgba(0, 0, 0, 0.18), 0 1px 3px 0 rgba(0, 0, 0, 0.15);
			padding-top:5%;
			padding-left: 2%;
			padding-right:2%;
			background-color:white;
		}
		.btn{
			width: 100%;
			background-color: #408eba;
		}
		.btn:hover{
			box-shadow: none;
			background-color: #50b5ee;
		}
		@keyframes myfirst
		{
		from {margin-left: 0%;}
		to {margin-left:  50%;}
		}

		@-webkit-keyframes myfirst /* Safari and Chrome */
		{
		from {margin-left: 0%;}
		to {margin-left:  50%;}
		}

		</style>
	</head>
	<body>
@include('layout.coach_side')
		<div style="padding-left:16%;">
			<div class="topbar"></div>
			
			<div class="row" style="margin-top:4%;margin-left:2%;">
				<div class="col s7" style="z-index:999;">
					<div style="border-top:2px solid #408eba;background-color:white;">
					<div style="font-size:1.25rem;padding:2%;">发布训练</div>
					<div class="divider"></div>
					<div class="row">
						<div class="col s3"style="padding-top:4%;"><b>训练名称<b></div>
						<div class="input-field col s8 text">
							<input  type="text" style="height:1rem;">
						</div>
					</div>
					<div class="divider"></div>
					<div class="row">
					<div class="col s3" style="padding-top:4%;"><b>训练内容</b></div>
					<div class="col s3 offset-s3" style="padding-top:4%;">
					<a class="waves-effect waves-light btn" onclick="myFunction()">新训练</a>
					</div>						
					</div>
					<div class="divider"></div>
					<div class="row" style="padding-top:4%;background-color:#ddd;padding-bottom:4%;">
						<div class="col s4">
								  <div class="train-content">
									  <div style="text-align:center;">
										  <img src="/img/train1.jpg" style="width:48%;height:48%;" class="responsive-img">
									  </div>
									  <div style="text-align:center;">开合跳</div>
									  <div style="font-size:0.75rem;">双脚并立，手臂放于两侧。然后开跳，着地时双脚稍比肩宽，同时霜比在头上拍手，最后跳回原处。</div>
								  </div>
								  <div class="train-content">
									  <div style="text-align:center;">
										  <img src="/img/train1.jpg" style="width:48%;height:48%;" class="responsive-img">
									  </div>
									  <div style="text-align:center;">开合跳</div>
									  <div style="font-size:0.75rem;">双脚并立，手臂放于两侧。然后开跳，着地时双脚稍比肩宽，同时霜比在头上拍手，最后跳回原处。</div>
								  </div>
						 </div>
						 <div class="col s4">
							 <div class="train-content">
									  <div style="text-align:center;">
										  <img src="/img/train1.jpg" style="width:48%;height:48%;" class="responsive-img">
									  </div>
									  <div style="text-align:center;">开合跳</div>
									  <div style="font-size:0.75rem;">双脚并立，手臂放于两侧。然后开跳，着地时双脚稍比肩宽，同时霜比在头上拍手，最后跳回原处。</div>
								  </div>
						 </div>
						 <div class="col s4">
							 <div class="train-content">
									  <div style="text-align:center;">
										  <img src="/img/train1.jpg" style="width:48%;height:48%;" class="responsive-img">
									  </div>
									  <div style="text-align:center;">开合跳</div>
									  <div style="font-size:0.75rem;">双脚并立，手臂放于两侧。然后开跳，着地时双脚稍比肩宽，同时霜比在头上拍手，最后跳回原处。</div>
								  </div>
						 </div>
					</div>
					<div class="row">
						<div class="col s3 offset-s5" style="margin-bottom:3%;margin-right:3%;">
						<a class="waves-effect waves-light btn" >发布</a>
						</div>
						<div class="col s3">
						<a class="waves-effect waves-light btn" >取消</a>
						</div>
					</div>
					</div>
				</div>
				<div class="col s5 add-train" id="add">
					<div style="border-top:2px solid #408eba;background-color:white;">
						<div style="padding:2%;font-size:1.25rem;">训练内容</div>
						<div class="divider"></div>
						<div style="padding:5%;"> 
							<form action="#">
							<div>图片描述</div>
							<div class="file-field input-field" id="i_file">
							<div class="blank">
								<input type="file">
								<img src="/img/icon_add.png"class="responsive-img" id="preview">
							</div>
							</div>
							<div style="margin-top:2%;padding-right:5%;">
								<div>文字描述</div>
									<div class="input-field">
									<textarea id="textarea1" class="materialize-textarea"></textarea>
									</div>
							</div>
							  <div style="margin-top:7%;text-align:right;">
								  <div class="row">
									  <div class="col s4 offset-s4">
									  <a class="waves-effect waves-light btn" onclick="slideOut()">确定</a>
									  </div>
									  <div class="col s4">
									  <a class="waves-effect waves-light btn" onclick="slideOut()">取消</a>
									  </div>
								  </div>
							  </div>
				    		</form>
						 
						  </div>
						  
						  
					</div>
				</div>
			</div>
			
			
		</div>
		 <script type="text/javascript">
                          $('#i_file').change( function(event) {
                          var tmppath = URL.createObjectURL(event.target.files[0]);
                            $("#preview").fadeIn("fast").attr('src',URL.createObjectURL(event.target.files[0]));
                          });
                          </script>	
		<script type="text/javascript">
			function myFunction(){
				document.getElementById("add").className='col s5 animated slideInRight';
			}
		</script>
		<script type="text/javascript">
			function slideOut(){
				document.getElementById("add").className='col s5 animated slideOutRight';
			}
		</script>
	</body>
</html>