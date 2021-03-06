<!DOCTYPE html>
<html>
<head>
	<title>Activity Release</title>
	<meta charset="utf-8">
	<link type="text/css" rel="stylesheet" href="/custom-font/css/font-awesome.css">
	<link type="text/css" rel="stylesheet" href="/css/materialize.css"  media="screen,projection"/> 
	<link type="text/css" rel="stylesheet" href="/css/prism.css"  media="screen,projection"/>  
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
			/*.side-nav{
				background-color: white;
				width: 16%;
				box-shadow: 0 2px 6px 0 rgba(0, 0, 0, 0.18), 0 2px 7px 0 rgba(0, 0, 0, 0.15);
			}*/
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
				width: 128px;
				height: 128px;
				background-repeat: no-repeat;
				max-width: 100%;
	  			height: auto;
			}
            .title-header{
            margin-top: 3%;
            text-align: right;
            }
            .modal{
                width: 480px;
                height:200px;
            }
	</style>
</head>
<body>
        <header>
            <div class="container"><a href="#" data-activates="nav-mobile" class="button-collapse top-nav full hide-on-large-only"><i class="fa fa-navicon"></i></a></div>
            <ul id="nav-mobile" class="side-nav fixed">
            <li class="logo">
                <img src="{{ Auth::user()->portrait }}" class="logo-img responsive-img">
            </li>
        <li class="no-padding">
          <ul class="collapsible collapsible-accordion">
            <li class="bold"><a class="collapsible-header" href="/player">首页</a>
            </li>
            <li class="bold"><a class="collapsible-header">体质数据</a>
              <div class="collapsible-body">
                <ul>
                  <li><a  href="/player/sports/data">运动数据</a></li>
                  <li><a href="/player/health/data">健康数据</a></li>
                </ul>
              </div>
            </li>
            <li class="bold"><a class="collapsible-header active" href="/player/activity">活动</a></li>
            <li class="bold"><a class="collapsible-header" href="/player/group">兴趣组</a>
            </li>
            <li class="bold"><a class="collapsible-header" href="/player/social">朋友圈</a>
              
            </li>
            <li class="bold"><a href="#!" class="collapsible-header">教练</a>
					<div class="collapsible-body">
						<ul>
							<li><a href="/player/coach/1" style="margin:0;"> <div  style="height:48px;">
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
						</ul>
					</div>
				</li>
				<li class="bold"><a href="#!"class="collapsible-header ">医生</a>
					<div class="collapsible-body">
						<ul>
							<li><a href="/player/doctor/3" style="margin:0;"><div style="height:48px;">
                                    <div style="padding-left:0%;padding-top:6px;">
                                        <div style="width:36px;height:36px;border-radius:50%; overflow:hidden;float:left;">
                                        <img src="/img/user1.jpg" class="responsive-img">
                                    </div>
                                    <div style="margin-left:30%;margin-top:-2%;">
                                        Doctor
                                    </div>
									</div>
                            </div></a></li>
						</ul>
					</div>
				</li>
                <li class="bold"><a class="collapsible-header " href="/player/{{ Auth::user()->id }}/edit">个人资料</a></li>
                <li class="bold"><a class="collapsible-header modal-trigger" onclick="logout()">退出</a></li>
          </ul>
        </li>
        </header>
        <div id="logoutTip" class="modal">
            <div class="modal-content" style="text-align:center;">
            <h4>确定要退出该账号？</h4>
            </div>
            <div class="modal-footer">
            <a class=" modal-action modal-close waves-effect waves-green btn-flat" href="/auth/logout">确定</a>
            <a href="#!" class=" modal-action modal-close waves-effect waves-green btn-flat">取消</a>
            </div>
        </div>
        <main>
        <div style="">
        	<div class="topbar">
        		<div style="font-size:1.5rem;padding:1%;padding-left:10%;color:white;">
        	      活动发布
        	    </div>
        	</div>
        	<div >
        		<div class="container" >
        			<div class="row" style="margin-top:4%;margin-left:6%;">
						<div class="col s10 offset-s1" style="z-index:999;border-top:2px solid #408eba;background-color:white;">
					<div style="font-size:1.25rem;padding:2%;">发布活动</div>
					<div class="divider"></div>
					<form action="/player/activity" method="post" id="postform" enctype="multipart/form-data">
					<div class="row">
						<div class="col s3 title-header"><b>活动名称<b></div>
						<div class="input-field col s8 text">
							<input  type="text" id="name" name="name">
						</div>
					</div>
					<div class="divider"></div>
					<div class="row">
						<div class="col s3 title-header"><b>类型<b></div>
						<div class="input-field col s8 text">
							<input name="group1" type="radio" id="type1" value = "1"/>
							<label for="type1">跑步</label>
							<input name="group1" type="radio" id="type2" value = "2"/>
							<label for="type2">球类</label>
							<input name="group1" type="radio" id="type3" value = "3"/>
							<label for="type3">健身</label>
						</div>
					</div>
					<div class="divider"></div>
					<div class="row">
						<div class="col s3 title-header"><b>活动地点<b></div>
						<div class="input-field col s8 text">
							<input  type="text" id="place" name="place">
						</div>
					</div>
					<div class="divider"></div>
					<div class="row">
					<div class="col s3 title-header"><b>活动详情</b></div>
					<div class="col s8 " style="padding-top:1%;">
						<div class="input-field">
							<textarea class="materialize-textarea" id="description" name="desc"></textarea>
						</div>
					</div>						
					</div>
					<div class="divider"></div>
					<div class="row">
						<div class="col s3 title-header" >活动海报</div>
						<div class="col s8">
							<div class="col s8">
							<div class="file-field input-field" id="i_file">
							<div class="blank">
								<input type="file" id="poster" name="poster">
								<img src="/img/icon_add.png"class="responsive-img" id="preview">
							</div>
							</div>
						</div>
						</div>
					</div>
					<div class="divider"></div>
					<div class="row">
						<div class="col s3 title-header">
							活动日期
						</div>
						
						<div style="padding-top:1%;" class="input-field col s8">
							<div class="row">
                            <div class="col s6"><input type="date" class="datepicker"placeholder="选择日期" id="date" name="date"></div>
                            <div class="col s4">
                            </div>
                            </div>
                        </div>
						<div class="col s3 title-header"><b>活动时间<b></div>
						<div class="input-field col s8 text">
							<input  type="text" id="time" name="time">
						</div>
					</div>
					<div class="divider"></div>
					<div class="row">
					<div class="col s3 title-header"><b>联系方式</b></div>
					<div class="col s8 " style="padding-top:1%;">
						<div class="input-field">
							<textarea class="materialize-textarea" id="contact" name="contact"></textarea>
						</div>
					</div>		
									
					</div>
					<div class="divider"></div>
					<div class="row">
						<div class="col s3 offset-s5" style="margin-bottom:3%;margin-right:3%;padding-top:2%;">
						{{ csrf_field() }}
						</form>
						<a class="waves-effect waves-light btn" onclick="publish()">发布</a>
						</div>
						<div class="col s3" style="padding-top:2%;">
						<a class="waves-effect waves-light btn" href="/player/activity">取消</a>
						</div>
					</div>
				</div>
				
			</div>
        		</div>
        	</div>
        </div>
        </main>
        <script type="text/javascript">
        $(".button-collapse").sideNav();
            function logout(){
                $("#logoutTip").openModal();
            }
        </script>
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
			  
		function publish(){
			var type = $('input[name="group1"]:checked').val();
			var name = document.getElementById("name").value;
			var place = document.getElementById("place").value;
			var desc = document.getElementById("description").value;
			var poster = document.getElementById("poster");
			var date = document.getElementById("date").value;
			var time = document.getElementById("time").value;
			var contact = document.getElementById("contact").value;
			if(name.length == 0){
				alert('请输入活动名称');
				return;
			}
			if(typeof type == 'undefined'){
				alert('请选择活动类型');
				return;
			}
			if(place.length == 0){
				alert('请输入活动地点');
				return;
			}
			if(desc.length == 0){
				alert('请输入活动名称');
				return;
			}
			if(poster.length == 0){
				alert('请上传活动海报');
				return;				
			}
			if(date.length == 0){
				alert('请选择活动日期');
				return;				
			}
			if(time.length == 0){
				alert('请输入活动时间');
				return;				
			}
			if(contact.length == 0){
				alert('请输入活动联系方式');
				return;				
			}		
			document.getElementById('postform').submit();
		}
	</script>
	<script>
            $('.datepicker').pickadate({
            selectMonths: true, // Creates a dropdown to control month
            selectYears: 15, // Creates a dropdown of 15 years to control year
			format:"yyyy-mm-dd"
        });
    </script>
</body>
</html>