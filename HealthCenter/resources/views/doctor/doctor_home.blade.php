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
        @include('layout.doctor_side');
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
                                        <a href="/doctor/playerhealth/{{ $client->id }}" style="color:#fff;">健康情况</a>
                                        <a href="#" style="color:#fff;">运动情况</a>
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
                    @foreach($event_requests as $r)
                        <div class='fc-event'>{{ $r->user->name }}请求{{ $r->start_time }}到{{ $r->end_time }} : {{ $r->title }}</div>
                    @endforeach
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
        var ces =[];
 
        @foreach( $cal_events as $event )
            ces.push({
                title: '{{ $event->title }}',
                start: '{{ $event->start_time }}',
                end:   '{{ $event->end_time }}'
            });
        @endforeach

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
                                    start       : start.format('YYYY-MM-DD')+'T'+start.format('HH:mm:ss'),
                                    end         : end.format('YYYY-MM-DD')+'T'+end.format('HH:mm:ss'),
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
            events: ces,
            eventColor: "rgb(30, 128,240)"
		});
	});
    </script>
	</body>
</html>