<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Dr.陈</title>
		<link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
		<link type="text/css" rel="stylesheet" href="/css/materialize.css"  media="screen,projection"/>  
		<link type="text/css" rel="stylesheet" href="/css/animate/animate.min.css"/>  
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
		<style type="text/css">
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
			nav {
				box-shadow: 0 2px 6px 0 rgba(0, 0, 0, 0.18), 0 2px 7px 0 rgba(0, 0, 0, 0.15);
                background-color: rgb(30, 128,240);
                padding-left: 5%
			}
            
            .shallowblue{
               background-color:  #00c0ef;
            }
            .darkblue{
                background-color: #1397c5;
                color: #1397c5;
            }
        .box {
            position: relative;
            border-radius: 3px;
            background: #ffffff;
            border-top: 3px solid #d2d6de;
            margin-bottom: 20px;
            width: 100%;
            box-shadow: 0 1px 1px rgba(0, 0, 0, 0.1);
        }
        .box-widget {
            border: none;
            position: relative;
        }
        .widget-user .widget-user-header {
            padding: 20px;
            height: 120px;
            border-top-right-radius: 3px;
            border-top-left-radius: 3px;
        }
        .widget-user .widget-user-username {
            margin-top: 0;
            margin-bottom: 5px;
            font-size: 25px;
            font-weight: 300;
            text-shadow: 0 1px 1px rgba(0, 0, 0, 0.2);
        }
        .widget-user .widget-user-desc {
            margin-top: 0;
        }
        .widget-user .widget-user-image {
            position: absolute;
            top: 50px;
            left: 50%;
            margin-left: -45px;
        }
        .box-footer {
            border-top-left-radius: 0;
            border-top-right-radius: 0;
            border-bottom-right-radius: 3px;
            border-bottom-left-radius: 3px;
            border-top: 1px solid #f4f4f4;
            padding: 10px;
            background-color: #ffffff;
        }
        .box .border-right {
            border-right: 1px solid #f4f4f4;
        }
        .description-block {
            display: block;
            margin: 10px 0;
            text-align: center;
        }
        .description-block > .description-header {
            margin: 0;
            padding: 0;
            font-weight: 600;
            font-size: 16px;
        }
        .description-block > .description-text {
            text-transform: uppercase;
        }
        .bg-aqua-active{
            background-color: #00a7d0 !important;
            color: #fff !important;
        }
        .img-circle {
            border-radius: 50%;
        }
		</style>

		
	</head>
	<body>

@include('layout.player_side')
			
		<div id="main" style="padding-left: 16%;">
			<div class="row">
                <div class="col s12">
                    <div class="box box-widget widget-user animated fadeInDown">
                        <div class="widget-user-header bg-aqua-active">
                            <h3 class="widget-user-username">中国医学科学院游泳健康所</h3>
                            <h5 class="widget-user-desc">陈茂蓬，主任医师</h5>
                        </div>
                        <div class="widget-user-image">
                            <img class="img-circle responsive-img" src="/img/cmp.jpg" alt="User Avatar" style="width:40%;">
                        </div>
                        <div class="box-footer">
                            <div class="row">
                                <div class="col s4 border-right">
                                    <div class="description-block">
                                        <h5 class="description-header">3,200</h5>
                                        <span class="description-text">病人</span>
                                    </div>
                                </div>
                                <div class="col s4 border-right">
                                    <div class="description-block">
                                        <h5 class="description-header">13,000</h5>
                                        <span class="description-text">解答</span>
                                    </div>
                                </div>
                                <div class="col s4">
                                    <div class="description-block">
                                        <h5 class="description-header">35</h5>
                                        <span class="description-text">文章</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
			<div class="row">
                <div class="col s12 m6">
                    <div class="card shallowblue animated fadeInLeft">
                        <div class="card-content white-text">
                        <span class="card-title">医生简介</span>
                        <p>陈茂蓬教授从事游泳健康事业二十余年，对溺水、肌肉控制无力等症状的诊断治疗拥有丰富经验。</p>
                        </div>
                        <div class="card-action">
                        <a class="btn darkblue" style="background-color:#00a7d0; color:#fff;">关注</a>
                        <a class="btn darkblue" style="background-color:#00a7d0; color:#fff;">问诊</a>
                        </div>
                    </div>
                    <hr>
                    <h5 class="center">健康建议</h5>
                    <ul class="tabs">
                        <li class="tab col s3"><a class="active"href="#personal">个人建议</a></li>
                        <li class="tab col s3"><a href="#public">公开建议</a></li>
                    </ul>
                    <div id="personal" class="col s12">
                        <ul class="collapsible animated fadeInRight" data-collapsible="expandable">
                            <li>
                                <div class="collapsible-header active"><i class="material-icons">loyalty</i>秋季游泳注意事项</div>
                                <div class="collapsible-body">
                                    <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat
                                    </p>
                                    <!--<p><a href="#!">查看详细</a></p>-->
                                </div>
                            </li>
                        </ul>                        
                    </div>
                    <div id="public" class="col s12">
                        <ul class="collapsible animated fadeInLeft" data-collapsible="expandable">
                            <li>
                                <div class="collapsible-header active"><i class="material-icons">receipt</i>秋季游泳注意事项</div>
                                <div class="collapsible-body">
                                    <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat
                                    </p>
                                    <!--<p><a href="#!">查看详细</a></p>-->
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="col s12 m6">
                    <h5 class="center animated fadeInRight"> 文章列表</h5>
                    <ul class="collapsible animated fadeInRight" data-collapsible="expandable">
                        <li>
                            <div class="collapsible-header active"><i class="material-icons">subject</i>秋季游泳注意事项</div>
                            <div class="collapsible-body">
                                <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat
                                </p>
                                <!--<p><a href="#!">查看全文</a></p>-->
                            </div>
                        </li>
                        <li>
                            <div class="collapsible-header"><i class="material-icons">subject</i>夏季游泳注意事项</div>
                            <div class="collapsible-body">
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat
                                </p>
                                <!--<p><a href="#!">查看全文</a></p>-->
                            </div>
                        </li>
                        <li>
                            <div class="collapsible-header"><i class="material-icons">subject</i>春季游泳注意事项</div>
                            <div class="collapsible-body">
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat
                                </p>
                                <!--<p><a href="#!">查看全文</a></p>-->
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            
        </div>
        <script type="text/javascript" src="/js/jquery_min.js"></script>
        <script type="text/javascript" src="/js/materialize.js"></script>
	</body>
</html>