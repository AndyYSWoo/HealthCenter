<!DOCTYPE html>
<html>
<head>
	<title>Activity Release</title>
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
			input[type=text]{
				border: 2px solid #ddd;
				padding: 2%;
				border-radius: 5px;
				margin-bottom: -20px;
				height: 1rem;
			}
			input[type=text]:focus:not([readonly]), textarea.materialize-textarea:focus:not([readonly]){
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
	</style>
</head>
<body>
	<div class="side-nav fixed">
             <div id="header"><img class="circle responsive-img" src="/img/image.jpg" id ="header_img"></div>
  			<ul class="collapsible" data-collapsible="accordion" style="color:black;">
  				<li><a href="index.html">首页</a></li>
				<li><a href="#!" class="collapsible-header">体质数据</a>
                    <div class="collapsible-body">
                        <ul>
                            <li>
                                <a href="#!" style="margin:0;"><div style="padding-left:10%;">运动数据</div></a>
                            </li>
                            <li>
                                <a href="user_health.html" style="margin:0;"><div style="padding-left:10%;">健康数据</div></a>
                            </li>
                        </ul>
                    </div>
                </li>
				<li><a href="group_index.html">兴趣组</a>
				<li><a href="#!"class="collapsible-header">好友</a>
					<div class="collapsible-body">
						<ul>
							<li><a href="index.html" style="margin:0;"> <div  style="height:48px;">
                                    <div style="padding-left:0%;padding-top:6px;">
                                        <div style="width:36px;height:36px;border-radius:50%; overflow:hidden;float:left;">
                                        <img src="/img/user.jpg" class="responsive-img">
                                    </div>
                                    <div style="margin-left:30%;margin-top:-2%;">
                                         Sarah Bullock
                                    </div>
                            		</div>
									</div>
									</a>
                            </li>
                            <li>
                              <a href="index.html" style="margin:0;"><div style="height:48px;">
                                    <div style="padding-left:0%;padding-top:6px;">
                                        <div style="width:36px;height:36px;border-radius:50%; overflow:hidden;float:left;">
                                        <img src="/img/user1.jpg" class="responsive-img">
                                    </div>
                                    <div style="margin-left:30%;margin-top:-2%;">
                                         Alexander Pierc
                                    </div>
									</div>
                            </div></a>
                            </li>
						</ul>
					</div>
				</li>
				<li><a href="#!" class="collapsible-header">教练</a>
					<div class="collapsible-body">
						<ul>
							<li><a href="coach.html" style="margin:0;"> <div  style="height:48px;">
                                    <div style="padding-left:0%;padding-top:6px;">
                                        <div style="width:36px;height:36px;border-radius:50%; overflow:hidden;float:left;">
                                        <img src="/img/user.jpg" class="responsive-img">
                                    </div>
                                    <div style="margin-left:30%;margin-top:-2%;">
                                         Sarah Bullock
                                    </div>
                            		</div>
									</div>
									</a></li>
						</ul>
					</div>
				</li>
				<li><a href="#!"class="collapsible-header ">医生</a>
					<div class="collapsible-body">
						<ul>
							<li><a href="index.html" style="margin:0;"><div style="height:48px;">
                                    <div style="padding-left:0%;padding-top:6px;">
                                        <div style="width:36px;height:36px;border-radius:50%; overflow:hidden;float:left;">
                                        <img src="/img/user1.jpg" class="responsive-img">
                                    </div>
                                    <div style="margin-left:30%;margin-top:-2%;">
                                         Alexander Pierc
                                    </div>
									</div>
                            </div></a></li>
						</ul>
					</div>
				</li>
  			</ul>
        </div>
        <div style="padding-left:16%;">
        	<div class="topbar">
        		<div>
        		</div>
        	</div>
        	<div >
        		<div class="container" >
        			<div class="row" style="margin-top:4%;margin-left:6%;">
						<div class="col s7" style="z-index:999;border-top:2px solid #408eba;background-color:white;">
					<div style="font-size:1.25rem;padding:2%;">发布活动</div>
					<div class="divider"></div>
					<div class="row">
						<div class="col s3"style="padding-top:4%;"><b>活动名称<b></div>
						<div class="input-field col s8 text">
							<input  type="text">
						</div>
					</div>
					<div class="divider"></div>
					<div class="row">
						<div class="col s3"style="padding-top:4%;"><b>活动地点<b></div>
						<div class="input-field col s8 text">
							<input  type="text">
						</div>
					</div>
					<div class="divider"></div>
					<div class="row">
					<div class="col s3" style="padding-top:4%;"><b>活动详情</b></div>
					<div class="col s8 " style="padding-top:2%;">
						<div class="input-field">
							<textarea class="materialize-textarea"></textarea>
						</div>
					</div>						
					</div>
					<div class="divider"></div>
					<div class="row">
						<div class="col s3" style="padding-top:3%;">活动海报</div>
						<div class="col s8">
							<div class="col s8">
							<div class="file-field input-field" id="i_file">
							<div class="blank">
								<input type="file">
								<img src="/img/icon_add.png"class="responsive-img" id="preview">
							</div>
							</div>
						</div>
						</div>
					</div>
					<div class="divider"></div>
					<div class="row">
						<div class="col s3" style="padding-top:3%;">
							活动时间
						</div>
						
						<div class="input-field col s8">
							<div class="row">
                            <div class="col s6"><input type="date" class="datepicker"placeholder="选择日期"></div>
                            <div class="col s4">
                            </div>
                            </div>
                        </div>
					</div>
					<div class="divider"></div>
					<div class="row">
					<div class="col s3" style="padding-top:4%;"><b>联系方式</b></div>
					<div class="col s8 " style="padding-top:2%;">
						<div class="input-field">
							<textarea class="materialize-textarea"></textarea>
						</div>
					</div>						
					</div>
					<div class="divider"></div>
					<div class="row">
						<div class="col s3 offset-s5" style="margin-bottom:3%;margin-right:3%;padding-top:2%;">
						<a class="waves-effect waves-light btn" >发布</a>
						</div>
						<div class="col s3" style="padding-top:2%;">
						<a class="waves-effect waves-light btn" >取消</a>
						</div>
					</div>
				</div>
				
			</div>
        		</div>
        	</div>
        </div>
	<script type="text/javascript" src="/js/jquery_min.js"></script>	
	<script type="text/javascript" src="/js/materialize.min.js"></script>
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
            $('.datepicker').pickadate({
            selectMonths: true, // Creates a dropdown to control month
            selectYears: 15 // Creates a dropdown of 15 years to control year
        });
    </script>
</body>
</html>