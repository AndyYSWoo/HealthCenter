<!DOCTYPE html>
<html>
<head>
	<title>admin</title>
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
			.modal{
				width: 36%;
			}
	</style>
</head>
<body>
@include('layout.admin_side')
	<div style="padding-left:16%;">
		<div class="topbar">
        	<div style="font-size:1.5rem;padding:1%;padding-left:10%;color:white;">
        		管理员
        	</div>
        </div>
		<div class="container" style="margin-top:4%;background-color:white;">
			<div>
				<div class="row">
					<div class="col s5" style="text-align:center;padding:3%;">
						<img src="/img/user.jpg" alt="img" class="circle responsive-img">
						<div>Nina Mcintire</div>
					</div>
					<div class="col s7" style="padding-right:2%;">
						<div>
        				<table class="centered bordered ">
				        <thead>
				          <tr>
				              <th data-field="type"></th>
				              <th data-field="count"></th>
				          </tr>
				        </thead>
				        <tbody>
				          <tr>
				            <td>
				            教练用户人数
				            </td>
				            <td>{{ $coachs->count() }}</td>
				          </tr>
				          <tr>
				            <td>
				            医生用户人数
				            </td>
				            <td>{{ $doctors->count() }}</td>
				          </tr>
				          <tr>
				            <td>
				            普通用户人数
				            </td>
				            <td>{{ $users->count() }}</td>
				          </tr>
				          
				        </tbody>
				      </table>
        			</div>
					</div>
				</div>
				<div class="divider"></div>
				<div style="margin-top:2%;">
					<div class="row">
						<div class="col s4" style="padding-left:2%;padding-right:2%;">
							<ul class="collection with-header" id="coachList">
					        <li class="collection-header"><h5>教练用户</h5></li>
							@foreach($coachs as $coach)
					        <li class="collection-item" id="{{ $coach->id }}"><div>{{ $coach->true_name }}<a href="#modal1" class="secondary-content modal-trigger" onclick="deleteCoach(this)" id="{{ $coach->id }}delete"><i class="fa fa-trash-o"></i></a></div></li>
							@endforeach
					      	</ul>
						</div>
						<div id="modal1" class="modal">
					    <div class="modal-content">
					    <div style="text-align:center;">	
					      <h5>确定删除该用户吗？</h5>
					    </div>
					    <div class="divider"></div>
					    <div class="row" >
					    	<div class="col s6" style="text-align:center;border-right:1px solid #ddd;padding-top:2%;padding-bottom:2%;">
					    		<a onclick="confrim()" style="color:black;cursor:pointer;">确定</a>
					    	</div>
					    	<div class="col s6" style="text-align:center;padding-top:2%;padding-bottom:2%;">
					    		<a style="color:black;cursor:pointer;">取消</a>
					    	</div>
					    </div>
					    <div class="divider" style="margin-top:-20px;"></div>
					    </div>
					    
					  </div>
						<div class="col s4" style="padding-left:2%;padding-right:2%;">
							<ul class="collection with-header">
					        <li class="collection-header"><h5>医生用户</h5></li>
							@foreach($doctors as $doctor)
					        <li class="collection-item" id="{{ $doctor->id }}"><div>{{ $doctor->true_name }}<a href="#modal1" class="secondary-content modal-trigger" onclick="deleteCoach(this)" id="{{ $doctor->id }}delete"><i class="fa fa-trash-o"></i></a></div></li>
							@endforeach
					      	</ul>
						</div>
						<div class="col s4" style="padding-left:2%;padding-right:2%;height:500px;overflow:auto;">
							<ul class="collection with-header">
					        <li class="collection-header"><h5>普通用户</h5></li>
							@foreach($users as $user)
					        <li class="collection-item" id="{{$user->id }}"><div>{{ $user->true_name }}<a href="#modal1" class="secondary-content modal-trigger" onclick="deleteCoach(this)" id="{{ $user->id }}delete"><i class="fa fa-trash-o"></i></a></div></li>
							@endforeach
					      	</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	<script type="text/javascript">
		var isConfirm = false;
		var userId;
		function deleteCoach(user){
			userId =  user.id;
			$('#modal1').openModal();
		}
		function confrim(){
			var childId = userId.substring(0,userId.length-6);
			document.getElementById("coachList").removeChild(document.getElementById(childId));
			$('#modal1').closeModal();
		}
		function cancel(){
			$('modal1').closeModal();
		}
	</script>

	<script type="text/javascript" src="/js/jquery_min.js"></script>
	<script type="text/javascript" src="/js/materialize.min.js"></script>
</body>
</html>