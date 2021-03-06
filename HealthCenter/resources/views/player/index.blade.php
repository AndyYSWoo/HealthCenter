<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>index</title>
     	<link type="text/css" rel="stylesheet" href="/custom-font/css/font-awesome.css">
		<link type="text/css" rel="stylesheet" href="/css/materialize.css"  media="screen,projection"/>  
        <link type="text/css" rel="stylesheet" href="/css/prism.css"  media="screen,projection"/>  
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
                box-shadow: 0 1px 3px 0 rgba(0, 0, 0, 0.18), 0 1px 3px 0 rgba(0, 0, 0, 0.15);
            
            }
            .container{
                width:90%
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
            #daily-data{
                text-align: center;
                padding-top: 5%;
                padding-bottom: 5%;
            }
            .card-panel{
                box-shadow: 0 1px 3px 0 rgba(0, 0, 0, 0.18), 0 1px 3px 0 rgba(0, 0, 0, 0.15);
                transition: box-shadow 500ms;
                -moz-transition: box-shadow 500ms;	/* Firefox 4 */
                -webkit-transition: box-shadow 500ms;	/* Safari 和 Chrome */
                -o-transition: box-shadow 500ms;
            }
            .card-panel:hover{
                    box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15);
            }
            .data{
                height: 30%;
                box-shadow: 0 1px 3px 0 rgba(0, 0, 0, 0.18), 0 1px 3px 0 rgba(0, 0, 0, 0.15);
                transition: box-shadow 500ms;
                -moz-transition: box-shadow 500ms;	/* Firefox 4 */
                -webkit-transition: box-shadow 500ms;	/* Safari 和 Chrome */
                -o-transition: box-shadow 500ms;
            }
            .data:hover{
                box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15);
                
            }
            nav {
                box-shadow: 0 2px 6px 0 rgba(0, 0, 0, 0.18), 0 2px 7px 0 rgba(0, 0, 0, 0.15);
                background-color: #408eba;
                /*background-color: cornflowerblue;*/
            }
            body{
                background-color: #ecf0f5; 
            }
            
            .exercise{
                border-right: solid 1px #ddd;
            }
            .coach-header{
                float: left;
            }
            .coach-advice{
                padding-left: 5%;
                padding-right: 5%;
                    box-shadow: 0 1px 3px 0 rgba(0, 0, 0, 0.18), 0 1px 3px 0 rgba(0, 0, 0, 0.15);
            }
            .comment{
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
            input[type=text]{
                border: 2px solid #ddd;
                padding: 2%;
                height: 3rem;
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
                height: 3rem;
                margin-bottom: -20px;
            }
            .btn{
                background-color: #408eba;
            }
            .btn:hover{
                box-shadow: none;
                background-color: #50b5ee;
            }
            .modal{
                width: 480px;
                height:200px;
            }
		</style>
   		<script type="text/javascript">
            $(function () {
                var timeArr = new Array();
                var dataArr = new Array();
                @foreach( $sports_entries as $entry )
                    dataArr.push({{ $entry->value }});
                @endforeach
                $(document).ready(function () {
                    Highcharts.setOptions({
                        global: {
                        useUTC: false
                        }
                    });

            $('#today_health_line_chart').highcharts({
                title: {
                    text: 'Work Out',
                    x: -20 //center
                },
                xAxis: {
                    categories: []
                },
                yAxis: {
                    title: {
                        text: 'Value'
                    },
                    plotLines: [{
                        value: 0,
                        width: 1,
                        color: '#808080'
                    }]
                },
                tooltip: {
                    valueSuffix: 'm'
                },
                series: [{
                    name: 'Running',
                    data: dataArr
                }]
            });
        });
    });
		</script>
        <script type="text/javascript">
        $(function () {
            var timeArr = new Array();
            var dataArr = new Array();
            @foreach( $sports_entries as $entry )
                dataArr.push({{ $entry->value }});
            @endforeach
            $(document).ready(function () {
                Highcharts.setOptions({
                    global: {
                    useUTC: false
                    }
                });

        $('#bp_line_chart').highcharts({
            title: {
                text: 'Work Out',
                x: -20 //center
            },
            xAxis: {
                categories: []
            },
            yAxis: {
                title: {
                    text: 'Value'
                },
                plotLines: [{
                    value: 0,
                    width: 1,
                    color: '#808080'
                }]
            },
            tooltip: {
                valueSuffix: 'm'
            },
            series: [{
                name: 'Running',
                data: dataArr
            }]
        });
    });
});
    </script>
		<script type="text/javascript">
		$(function () {
			$('#sleep_pie_chart').highcharts({
				chart: {
                plotBackgroundColor: null,
                plotBorderWidth: null,
                plotShadow: false,
                type: 'pie'
            },
            title: {
                text: 'Sleeping Status'
            },
            tooltip: {
                pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
            },
            plotOptions: {
                pie: {
                    allowPointSelect: true,
                    cursor: 'pointer',
                    dataLabels: {
                        enabled: false
                    },
                    showInLegend: true
                }
            },
            series: [{
                name: "Type",
                colorByPoint: true,
                data: [{
                    name: "Bad",
                    y: {{ $bad_sleep }}
                }, {
                    name: "Medium",
                    y: {{ $mid_sleep }}
                }, {
                    name: "Good",
                    y: {{ $good_sleep }},
                    sliced: true,
                    selected: true
                }]
            }]
        });
    });
		</script>
		
	</head>
	<body>
	   <script type="text/javascript" src="/js/materialize.min.js"></script>
		         <header>
            <div class="container"><a href="#" data-activates="nav-mobile" class="button-collapse top-nav full hide-on-large-only"><i class="fa fa-navicon"></i></a></div>
            <ul id="nav-mobile" class="side-nav fixed">
            <li class="logo">
                <img src="{{ Auth::user()->portrait }}" class="logo-img responsive-img">
            </li>
        <li class="no-padding">
          <ul class="collapsible collapsible-accordion">
            <li class="bold"><a class="collapsible-header active" href="/player">首页</a>
            </li>
            <li class="bold"><a class="collapsible-header">体质数据</a>
              <div class="collapsible-body">
                <ul>
                  <li><a  href="/player/sports/data">运动数据</a></li>
                  <li><a href="/player/health/data">健康数据</a></li>
                </ul>
              </div>
            </li>
            <li class="bold"><a class="collapsible-header" href="/player/activity">活动</a></li>
            <li class="bold"><a class="collapsible-header " href="/player/group">兴趣组</a>
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
		<nav>
        	首页
	   </nav>
			
		<div class="container">
			
			<div class="row" style="margin-top:5%;">
			<div class="col s6 exercise">
                  <div class="data" style="background-color: #1bc1ed;color :#fff;">
					<div style="background:#0aa6cd;padding-left:1%;padding-top:10px;padding-bottom:5px;"><h5>今日运动</h5></div>
                   
                    <div class="row" style="padding-top:5px;border-bottom:2px solid #f2e1ad;margin-left:1%;margin-right:1%;">
                        <div class="col s7" >
                            今日步行＋跑步 
                            <div>{{ $running_distance }} 米</div>
                        </div>
                        <div class="col s5" style="border-left:2px solid #f2e1ad">
                            今日步行平均速度
                            <div>{{ $running_speed }} km/h</div>
                        </div>
                    </div>
                    <div class="row" style="margin-top:-20px;margin-left:1%;margin-right:1%;">
                        <div class="col s5" style="border-right:2px solid #f2e1ad">
                            今日消耗
                            <div>{{ $calories }} 大卡</div>
                        </div>
                        <div class="col s7">
                            今日运动排名
                            <div>第4名</div>
                        </div>
                    </div>
                    
                    
				</div>
                
                <div class="card-panel white ">	
                <div class="row">
                    <div class="col s6">
                        <ul class="tabs">
                        <li class="tab col s3"><a class="active" href="#livedata">今日数据</a></li>
                        <li class="tab col s3"><a href="#history">过往数据</a></li>
                        </ul>
                    </div>
                    <div class="col s12">
                        <div id="livedata"><div id="today_health_line_chart" style="min-width: 310px; height: 360px; margin: 0 auto"></div>	</div>
                        <div id="history">
                            <form>
                             <div  class="input-field col s4">
                                 
                                 <div><input type="date" class="datepicker"placeholder="选择时间"></div>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
						
			</div>
          <div>
					<div class="row">
						<div class="col s12">
					       <div class="comment" id="field1list">
                                <div style="padding:2%;font-size:1.25rem;">教练建议</div>
                                <div class="divider"></div>
                                <div class="comment-content">
                                    <div class="row">
                                        <div style="width:36px; height:36px;float:left;border-radius:50%;overflow:hidden;margin-left:4%;">
                                        <img class="responsive-img" src="/img/user1.jpg">
                                        </div>
                                        <div class="test"style="padding-left:15%;">
                                            <div style="float:left;">
                                                Alexander Pierce
                                            </div>
                                            <div style="text-align:right;padding-right:4%;padding-top:1%;color:grey;font-size:0.75rem;">
                                                2015/11/11 11:11:11
                                            </div>
                                        </div>	
                                    </div>
                                    <div style="margin-left:13%;margin-top:-8%;font-size:0.75rem;"><br>有啊，很多年前，我后面跟了十几亿人，要不是我腿快，现在就没我了。</div>
                                    <div style="text-align:right;margin-top:-0px;padding-right:2%;">
                                        <a style="color:black;">回复</a>
                                    </div>
                                    <div class="divider" style="margin-top:1%;"></div>
                                </div>
				 <div class="comment-content">
					<div class="row">
							<div style="width:36px; height:36px;float:left;border-radius:50%;overflow:hidden;margin-left:4%;">
								<img class="responsive-img" src="/img/user1.jpg">
							</div>
						<div class="test"style="padding-left:15%;">
							<div style="float:left;">
							Alexander Pierce
							</div>
							<div style="text-align:right;padding-right:4%;padding-top:1%;color:grey;font-size:0.75rem;">
							2015/11/11 11:11:11
							</div>
						</div>	
							
					</div>
					<div style="margin-left:13%;margin-top:-8%;font-size:0.75rem;"><br>有啊，很多年前，我后面跟了十几亿人，要不是我腿快，现在就没我了。</div>
					<div style="text-align:right;margin-top:-0px;padding-right:2%;">
							<a style="color:black;">回复</a>
						</div>
					<div class="divider" style="margin-top:1%;"></div>
				</div>
				
				 
						</div>
                    <div style="background-color:white;padding-bottom:2%;border-left:1px solid #ddd;border-right:1px solid #ddd;">
					<div class="row">
					<div style="width:36px; height:36px;float:left;border-radius:50%;overflow:hidden;margin-left:4%;margin-top:1.75%;">
						<img class="responsive-img" src="/img/user.jpg">
					</div>
					<div class="input-field col s8">
					<textarea id="field1" class="materialize-textarea"></textarea>
					</div>
					<div class="col s4" style="width:100%;font-size:0.75rem;margin-top:-2%;padding-left:80%;">
						<a id="field1send" class="waves-effect waves-light btn" style="color:white;height:24px;line-height: 24px;padding: 0 1rem;" onclick="sendAdvice(this)">发送</a></div>
				</div>
				 </div>
					    </div>
					</div>
				</div>
			</div>
			
			<div class="col s6 health"style="border-left:1px solid #ddd;">
                <div class="data" style="background-color:#f06b5a;color:white;">
                    <div style="background-color:#d96051;padding-left:1%;padding-top:10px;padding-bottom:5px;"><h5>今日健康数据</h5></div>
                     
                     <div class="row" style="padding-top:5px;border-bottom:2px solid #f2e1ad;margin-left:1%;margin-right:1%;">
                        <div class="col s7" >
                            今日平均体温 
                            <div>{{ $avg_t }} C</div>
                        </div>
                        <div class="col s5" style="border-left:2px solid #f2e1ad">
                            今日平均心率
                            <div>{{ $avg_hr }} 次/分</div>
                        </div>
                    </div>
                    <div class="row" style="margin-top:-20px;margin-left:1%;margin-right:1%;">
                        <div class="col s5" style="border-right:2px solid #f2e1ad">
                            今日血压状况
                            <div>{{ $avg_bp_low }}/{{ $avg_bp_high }} mmHg</div>
                        </div>
                        <div class="col s7">
                            今日深度睡眠占比
                            @if(($good_sleep+$mid_sleep+$bad_sleep)!=0)
                            <div>{{ round($good_sleep/($good_sleep+$mid_sleep+$bad_sleep) * 100,1) }}%</div>
                            @else
                            <div>No data</div>
                            @endif
                        </div>
                    </div>
                </div>
				<div class="card-panel white">
                    <div class="row">
                    <div class="col s6">
                        <ul class="tabs">
                        <li class="tab col s3"><a  href="#temp">体温</a></li>
                        <li class="tab col s3"><a href="#heartbeat">心率</a></li>
                        <li class="tab col s3"><a href="#bloodpressure">血压</a></li>
                        <li class="tab col s3"><a class="active" href="#sleep">睡眠</a></li>
                        </ul>
                    </div> 
                    <div class="col s12">
                       <div id="sleep">
                       <div id="sleep_pie_chart" style="min-width: 310px; height: 360px;margin: 0 auto"></div>			
			           </div>
                    </div>
                    <div class="col s12">
                       <div id="bloodpressure">
                       <div id="bp_line_chart" style="min-width: 310px; height: 360px;margin: 0 auto"></div>			
			           </div>
                    </div>
                    </div>
			</div>
				
                <div>
                      <div class="row">
						<div class="col s12">
					    <div class="comment" id="field2list">
                        <div style="padding:2%;font-size:1.25rem;">医生建议</div>
                        <div class="divider"></div>
                       @foreach($health_advices as $health_advice)
                            <div class="comment-content">
                                <div class="row">
                                    <div style="width:36px; height:36px;float:left;border-radius:50%;overflow:hidden;margin-left:4%;">
                                        <img class="responsive-img" src="{{ $health_advice->docUser->portrait }}">
                                    </div>
                                <div class="test"style="padding-left:15%;">
                                    <div style="float:left;">
                                    {{ $health_advice->docUser->name }}
                                    </div>
                                    <div style="text-align:right;padding-right:4%;padding-top:1%;color:grey;font-size:0.75rem;">
                                    {{ $health_advice->created_at }}
                                    </div>
                                </div>	
                            </div>
                            <div style="margin-left:13%;margin-top:-8%;font-size:0.75rem;"><br>{{ $health_advice->content }}<br></div>

                            <div class="divider" style="margin-top:1%;"></div>
                        </div>
                    @endforeach
						</div>
                        <div style="background-color:white;padding-bottom:2%;border-left:1px solid #ddd;border-right:1px solid #ddd;">
					<div class="row">
					<div style="width:36px; height:36px;float:left;border-radius:50%;overflow:hidden;margin-left:4%;margin-top:1.75%;">
						<img class="responsive-img" src="/img/user.jpg">
					</div>
					<div class="input-field col s8">
					<textarea id="field2" class="materialize-textarea"></textarea>
					</div>
					<div class="col s4" style="width:100%;font-size:0.75rem;margin-top:-2%;padding-left:80%;">
						<a id="field2send" class="waves-effect waves-light btn" style="color:white;height:24px;line-height: 24px;padding: 0 1rem;" onclick="sendAdvice(this)">发送</a></div>
				</div>
				 </div>
					    </div>
					</div>
                    </div>
			</div>
			</div>	
		</div>
		</div>
		</div>
        </main>
        <script type="text/javascript">
			function sendAdvice(element){
                var id = element.id.substring(0,6);
				var advice = document.getElementById(id);
				var myDate = new Date();
				var mytime=myDate.toLocaleString();
				var newAdvice = "";
				newAdvice += "<div class=\"comment-content\">";
				newAdvice += "<div class=\"row\">";
				newAdvice += "<div style=\"width:36px; height:36px;float:left;border-radius:50%;overflow:hidden;margin-left:4%;\">";
				newAdvice += "<img class=\"responsive-img\" src=\"./img/user.jpg\"></div>";
				newAdvice += "<div class=\"test\"style=\"padding-left:15%;\">";
				newAdvice += "<div style=\"float:left;\">";
				newAdvice += "Nina Mcintire";
				newAdvice += "</div><div style=\"text-align:right;padding-right:4%;padding-top:1%;color:grey;font-size:0.75rem;\">";
				newAdvice += mytime;
				newAdvice += "</div></div></div><div style=\"margin-left:15%;margin-top:-4%;font-size:0.75rem;\">";
				newAdvice += advice.value;
				newAdvice += "</div><div style=\"text-align:right;margin-top:-10px;padding-right:2%;\">";
				newAdvice += "<a style=\"color:black;\">回复</a></div>";
				newAdvice += "<div class=\"divider\" style=\"margin-top:1%;\"></div></div>";
				var list = document.getElementById(id+"list");
				list.innerHTML = list.innerHTML + newAdvice;
				advice.value = "";
			}
		</script>
        <script type="text/javascript">
         $(".button-collapse").sideNav();
            function logout(){
                $("#logoutTip").openModal();
            }
        </script>
		<script src="/js/highcharts/highcharts.js"></script>
		<script>
            $('.datepicker').pickadate({
                selectMonths: true, // Creates a dropdown to control month
                selectYears: 15 // Creates a dropdown of 15 years to control year
            });
        </script>
	</body>
<!--</html>-->