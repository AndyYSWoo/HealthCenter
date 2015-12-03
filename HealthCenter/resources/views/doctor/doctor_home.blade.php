<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Doctor Home</title>
		<link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
		<link type="text/css" rel="stylesheet" href="/css/materialize.min.css"  media="screen,projection"/>  
		<link type="text/css" rel="stylesheet" href="/css/fullcalendar/fullcalendar.min.css"  media="screen,projection"/>  
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
		<style type="text/css">
			#header_img{
				width:  50%;
				padding-top: 5%;
				padding-bottom: 5%;
			}
			#nav-mobile{
				text-align: center;
                box-shadow: 0 1px 3px 0 rgba(0, 0, 0, 0.18), 0 1px 3px 0 rgba(0, 0, 0, 0.15);
                width: 12%;
			}
            nav{
                background-color: rgb(30, 128,240);
            }
            .colorgraph {
                height: 2px;
                border-top: 0;
                background: rgb(30, 128,240);
            }
            .waves-effect.waves-blue .waves-ripple {
                background-color: rgba(30, 128,240,0.7);
            }
            .apply{
                color: rgb(30, 128,240);
            }
            .fc-event{
                background-color: rgb(30, 128,240);
                border-color: rgb(30, 128,240);
            }
            #external-events .fc-event {
                margin: 10px 0;
                cursor: pointer;
            }
            
		</style>
	</head>
	<body>
       <header>
        <nav class="top-nav">
            <div class="container">
                <div class="nav-wrapper"><a class="page-title">欢迎您, 陈大夫</a></div>
            </div>
        </nav>
        
	    <ul id="nav-mobile" class="side-nav fixed" >
            <li class="logo">
                    <img class="circle responsive-img" src="/img/cmp.jpg" id ="header_img">
            </li>
            <hr class="colorgraph">
            <li style="font-size:11px">没有学会游泳, 你就会紧张, 就会不知所措, 就会被水淹没</li>
            <hr class="colorgraph">
            <li><a href="#!" class="collapsible-header  waves-effect waves-blue">首页</a></li>
            
            <ul class="collapsible collapsible-accordion">
                <li><a href="#!" class="collapsible-header  waves-effect waves-blue">问诊<span class="badge">2</span></a>
                    <div class="collapsible-body">
                        <ul>
                            <li>问诊信息1</li>
                            <li>问诊信息2</li>
                        </ul>
                    </div>
                </li>
                <li><a href="#!" class="collapsible-header  waves-effect waves-blue">用户</a>
                    <div class="collapsible-body">
                        <ul>
                            <li>陈先生</li>
                            <li>高小姐</li>
                            <li>黄太太</li>
                        </ul>
                    </div>
                </li>
            </ul>
            <li><a href="#!" class="collapsible-header  waves-effect waves-blue">设置</a></li>
	    </ul>
    </header>
    
    <div id="main" style="padding-left: 12%">
        <div class="row">
            <div class="col s12 l6 client">
                <h5>客户列表</h5>
                <ul class="collapsible" data-collapsible="expandable">
                    @foreach($clients as $client)
                        <li>
                            <div class="collapsible-header"><i class="material-icons">perm_identity</i>{{ $client->user->true_name }}</div>
                            <div class="collapsible-body">
                                <div class="card blue">
                                    <div class="card-content white-text">
                                    @if($client->user->gender == App\User::GENDER_MALE)
                                        <span class="card-title">男, {{ $client->player->age }}岁, 体质健康</span>
                                    @else
                                        <span class="card-title">女, {{ $client->player->age }}岁, 体质健康</span>
                                    @endif
                                    <p>
                                        从上一次检查与教学后, 该客户游泳技能和身体状况突飞猛进。
                                    </p>
                                    </div>
                                    <div class="card-action">
                                        <a href="#" style="color:#fff;">查看详情</a>
                                        <a href="#" style="color:#fff;">更改备忘</a>
                                    </div>
                                </div>
                            </div>
                        </li>
                    @endforeach
                </ul>
                <h5>申请队列</h5>          
                <ul class="collection">
                    @foreach($requests as $request)
                        <li class="collection-item avatar">
                            <i class="material-icons circle blue">label_outline</i>
                            <span class="title"><a href="#!">{{ $request->user->true_name }}</a></span>
                            <p>
                                {{ $request->message }}
                            </p>
                            <a class="secondary-content"> <a href={{ "/doctor/deny/".$request->id }}><i class="material-icons apply" >visibility_off</i></a> <a href={{ "/doctor/accept/".$request->id }}><i class="material-icons apply">done</i></a></a>
                        </li>
                    @endforeach
                </ul>                     
            </div>
            <div class="col s12 l6 personal">
                <meta name="csrf-token" content="{{ csrf_token() }}" />
                <h5>日程安排</h5>
                <div id="calendar">   </div>
                <h5>客户日程请求</h5>
                <hr class="colorgraph">
                <div id="external-events">
                    <div class='fc-event'>陈先生: 腹痛, 门诊诊断</div>
                    <div class='fc-event'>高小姐: 失眠, 电话咨询</div>
                    <div class='fc-event'>高小姐: 失眠, 视频咨询</div>
                    <div class='fc-event'>黄太太: 皮肤问题, 图文描述诊断</div>
                </div>
                <hr class="colorgraph">
            </div>
        </div>
    </div>
    <script type="text/javascript" src="/js/jquery_min.js"></script>
    <script src="/js/fullcalendar/jquery-ui.custom.min.js"></script>
    <script src="/js/highcharts/highcharts.js"></script>
    <script src="/js/materialize.js"></script>
    <script src="/js/fullcalendar/moment.min.js"></script>
    <script src="/js/fullcalendar/fullcalendar.min.js"></script>
    <script src="/js/fullcalendar/zh-cn.js"></script>
    <script>
        $(document).ready(function() {
        $('#external-events .fc-event').each(function() {
			// store data so the calendar knows to render an event upon drop
			$(this).data('event', {
				title: $.trim($(this).text()), // use the element's text as the event title
				stick: true // maintain when user navigates (see docs on the renderEvent method)
			});

			// make the event draggable using jQuery UI
			$(this).draggable({
				zIndex: 999,
				revert: true,      // will cause the event to go back to its
				revertDuration: 0  //  original position after the drag
			});

		});
            
        $('#calendar').fullCalendar({
			header: {
				left: 'prev,next today',
				center: 'title',
				right: 'month,agendaWeek,agendaDay'
			},
            defaultView: "agendaDay",
            height: 650,
			defaultDate: '2015-02-12',
            selectable: true,
			selectHelper: true,
			select: function(start, end) {
				var title = prompt('事件描述:');
				var eventData;
				if (title) {
					eventData = {
						title: title,
						start: start,
						end: end
					};
					$('#calendar').fullCalendar('renderEvent', eventData, true); // stick? = true
                    var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
                    $.ajax({
                        type    : "POST",
                        url     : "/doctor/calendar",
                        dataType: "html",
                        data    : { title       : title,
                                    start       : start.format('YYYY-MM-DD')+'T'+start.format('h:mm:ss'),
                                    end         : end.format('YYYY-MM-DD')+'T'+end.format('h:mm:ss'),
                                    _token      : CSRF_TOKEN 
                                   },
                        dataType: 'JSON',
                        success :function(data){
                        },
                        error: function(e) {
                            console.log(e.responseText);
                        }
                    });
                    
				}
				$('#calendar').fullCalendar('unselect');
			},
			editable: true,
            droppable: true,
            drop: function() {
					$(this).remove();
			},
			eventLimit: true, // allow "more" link when too many events
			events: [
				{
					title: 'All Day Event',
					start: '2015-02-01'
				},
				{
					title: 'Long Event',
					start: '2015-02-07',
					end: '2015-02-10'
				},
				{
					id: 999,
					title: 'Repeating Event',
					start: '2015-02-09T16:00:00'
				},
				{
					id: 999,
					title: 'Repeating Event',
					start: '2015-02-16T16:00:00'
				},
				{
					title: 'Conference',
					start: '2015-02-11',
					end: '2015-02-13'
				},
				{
					title: 'Meeting',
					start: '2015-02-12T10:30:00',
					end: '2015-02-12T12:30:00'
				},
				{
					title: 'Lunch',
					start: '2015-02-12T12:00:00'
				},
				{
					title: 'Meeting',
					start: '2015-02-12T14:30:00'
				},
				{
					title: 'Happy Hour',
					start: '2015-02-12T17:30:00'
				},
				{
					title: 'Dinner',
					start: '2015-02-12T20:00:00'
				},
				{
					title: 'Birthday Party',
					start: '2015-02-13T07:00:00'
				},
				{
					title: 'Click for Google',
					url: 'http://google.com/',
					start: '2015-02-28'
				}
			],
                eventColor: "rgb(30, 128,240)"
		});
		
	});
    </script>
	</body>
</html>