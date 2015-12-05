<!DOCTYPE html>
<html>
<head>
	<title>Create Coach</title>
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
			.select-label {
			  	position: absolute; }

			.select-wrapper {
			  	position: relative; }
			.select-wrapper input.select-dropdown {
			    position: relative;
			    cursor: pointer;
			    background-color: transparent;
			    border: none;
			    border-bottom: 1px solid #9e9e9e;
			    outline: none;
			    height: 2rem;
			    line-height: 2rem;
			    width: 100%;
			    font-size: 0.75rem;
			    margin: 0 0 15px 0;
			    padding: 0;
			    display: block; }
			.select-wrapper span.caret {
			    color: initial;
			    position: absolute;
			    right: 0;
			    top: 16px;
			    font-size: 10px; 
			}
			.select-wrapper span.caret.disabled {
			    color: rgba(0, 0, 0, 0.26); 
			}
			.select-wrapper + label {
			    position: absolute;
			    top: -14px;
			    font-size: 0.8rem; 
			}

			select {
			  	display: none; 
			}

			select.browser-default {
			  	display: block; 
			}

			select:disabled {
			  	color: rgba(0, 0, 0, 0.3); 
			}

			.select-wrapper input.select-dropdown:disabled {
				  color: rgba(0, 0, 0, 0.3);
				  cursor: default;
				  -webkit-user-select: none;
				  /* webkit (safari, chrome) browsers */
				  -moz-user-select: none;
				  /* mozilla browsers */
				  -ms-user-select: none;
				  /* IE10+ */
				  border-bottom: 1px solid rgba(0, 0, 0, 0.3); }

			.select-wrapper i {
			  	color: rgba(0, 0, 0, 0.3); }

			.select-dropdown li.disabled {
				  color: rgba(0, 0, 0, 0.3);
				  background-color: transparent; 
			}
			.dropdown-content{
				box-shadow: 0 1px 3px 0 rgba(0, 0, 0, 0.18), 0 1px 3px 0 rgba(0, 0, 0, 0.15);

			}
			.dropdown-content li {
			    clear: both;
			    color: rgba(0, 0, 0, 0.87);
				color: #408eba;
			    cursor: pointer;
			    line-height: 1.5rem;
			    width: 100%;
			    text-align: left;
			    text-transform: none; 
			}
			.tip:hover{
				cursor: pointer;
			}
			.tip{

				display:inline;
				font-size:0.75rem;
				padding:4%;
				background-color:#E4E4E4;
				color:black;
				-moz-border-radius: 15px; 
				-webkit-border-radius: 15px; 
				border-radius:15px;
				margin-right: 3%; 
			}
	</style>
</head>
<body>
@include('layout.admin_side')
	    <div style="padding-left:16%">
	    	<div style="font-size:1.5rem;padding:1%;padding-left:10%;color:white;">
        			管理员
        		</div>
	    	<div>
	    		<div class="container" >
        			<div class="row" style="margin-top:4%;margin-left:6%;">
						<div class="col s7" style="z-index:999;border-top:2px solid #408eba;background-color:white;">
					<div style="font-size:1.25rem;padding:2%;">创建教练用户</div>
					<div class="divider"></div>
					<div class="row">
					<div class="col s3" style="padding-top:4%;text-align:center;">头像</div>
					<div class="col s8">
						<div class="col s6">
						<div class="file-field input-field" id="i_file">
						<div class="blank">
							<input type="file">
							<img src="/img/user_normal.jpg"class="responsive-img" id="preview">
						</div>
						</div>
					</div>
					</div>
					</div>
					<div class="divider"></div>
					<div class="row">
						<div class="col s3"style="padding-top:3%;text-align:center;"><b>昵称<b></div>
						<div class="input-field col s5 text">
							<input  type="text">
						</div>
					</div>
					<div class="divider"></div>
					<div class="row">
						<div class="col s3"style="padding-top:3%;text-align:center;"><b>邮箱<b></div>
						<div class="input-field col s5 text">
							<input  type="email" id="mailaddr">
						</div>
					</div>
					<div class="divider"></div>
					<div class="row">
						<div class="col s3"style="padding-top:3%;text-align:center;"><b>密码<b></div>
						<div class="input-field col s5 text">
							<input  type="password" id="newPassword1">
						</div>
					</div>
					<div class="divider"></div>
					<div class="row">
						<div class="col s3"style="padding-top:3%;text-align:center;"><b>确认密码<b></div>
						<div class="input-field col s5 text">
							<input  type="password" id="newPassword2">
						</div>
					</div>
					<div class="divider"></div>
					<div class="row">
					<div class="col s3" style="padding-top:4%;text-align:center;"><b>个人简介</b></div>
					<div class="col s8 " style="padding-bottom:1%;">
						<div class="input-field">
							<textarea class="materialize-textarea"></textarea>
						</div>
					</div>						
					</div>
					<div class="divider"></div>
					<div class="row">
						<div class="col s3"style="padding-top:3%;text-align:center;"><b>地点<b></div>
						<div class="input-field col s3 text">
							<select id="province">
								<option>江苏</option>
								<option>上海</option>
							</select>
						</div>
						<div class="input-field col s3 text">
							<select id="city">
								<option>南京</option>
							</select>
						</div>
					</div>
					<div class="divider"></div>
					<div class="row">
						<div class="col s3"style="padding-top:3%;text-align:center;"><b>训练方向<b></div>
						<div class="col s8" id="trainTip" style="margin-top:4%;"></div>
					</div>
					<div class="divider"></div>
					<div class="row" style="margin-top:4%;">
						<div class="col s8 offset-s3" id="tipList">
							<div class="tip" id="tip1" onclick="addTips(this)"><a style="color:black;padding-right:1%;"><i class="fa fa-tag"></i></a>健身</div>
							<div class="tip" id="tip2" onclick="addTips(this)"><a style="color:black;padding-right:1%;"><i class="fa fa-tag"></i></a>游泳</div>
							<div class="tip" id="tip3" onclick="addTips(this)"><a style="color:black;padding-right:1%;"><i class="fa fa-tag"></i></a>羽毛球</div>
							<div class="tip" id="tip4" onclick="addTips(this)"><a style="color:black;padding-right:1%;"><i class="fa fa-tag"></i></a>减肥</div>
						</div>
					</div>
					<div class="divider"></div>
					<div class="row">
					<div class="col s3" style="padding-top:4%;text-align:center;"><b>个人签名</b></div>
					<div class="col s8 " style="padding-bottom:1%;">
						<div class="input-field">
							<textarea class="materialize-textarea"></textarea>
						</div>
					</div>						
					</div>
					<div class="divider"></div>
					<div class="row">
						<div class="col s3"style="padding-top:3%;text-align:center;"><b>评级<b></div>
						<div class="input-field col s3 text">
							<select id="level">
								<option>初级教练</option>
								<option>专业教练</option>
							</select>
						</div>
					</div>
					<div class="divider"></div>
					
					
					<div class="row">
						<div class="col s3 offset-s5" style="margin-bottom:3%;margin-right:3%;padding-top:2%;">
						<a class="waves-effect waves-light btn" style="width:120px;" onclick="checkValid()">确定</a>
						</div>
						<div class="col s3" style="padding-top:2%;">
						<a class="waves-effect waves-light btn" style="width:120px;">取消</a>
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
	<script type="text/javascript">
		function addTips(tip){
			var coachTip = document.getElementById(tip.id).innerHTML;
			var tiplist = "<div class = \"tip\">" + coachTip + "</div>";
			alert(tiplist);
			var coachTips = document.getElementById("trainTip");
			coachTips.innerHTML = coachTips.innerHTML + tiplist;
			var list = document.getElementById("tipList");
			var childTip = document.getElementById(tip.id);
			list.removeChild(childTip);
			// coachTips.appendChild(tiplist);
		}
	</script>
	<script type="text/javascript">
		$(document).ready(function() {
    		$('select').material_select();
  		});

		function checkValid(){
			var password1 = document.getElementById("newPassword1").value.trim();
			var password2 = document.getElementById("newPassword2").value.trim();
			var mailAddr  = document.getElementById("mailaddr").value.trim();
			if (mailAddr!=0) {
				var validMailAddr = /^\w+([-+.]\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*$/;
				if (!validMailAddr.test(mailAddr)) {
						alert("邮箱格式不正确");
				};
			};
			if ((password1.length!=0)&&(password2.length!=0)){

			}else{
				alert("密码为空");
			}   
			if (password1 === password2) {

			}else{
				alert("两次输入的密码不相同")
			};
			
			var province = document.getElementById("province");
			var city     = document.getElementById("city");
			var level    = document.getElementById("level");
			var index    = province.selectedIndex;
			var text     = province.options[index].text;
			alert(text);

		} 
	</script>
</body>
</html>