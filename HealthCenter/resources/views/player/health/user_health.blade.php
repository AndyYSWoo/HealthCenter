<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>user</title>
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
		    .chart {
                min-width: 320px;
                max-width: 800px;
                height: 220px;
                margin: 0 auto;
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
            .uploadBtn{
                cursor: pointer;
                height: 100%;
                padding-top: 1%;
                padding-right:1%;
            }
            .uploadBtn:hover{
                background-color: #67acd3;
            }
		</style>
        <script type="text/javascript">
            $(window).load(function(){  
                $("#loading").hide();  
            });
        </script>
	</head>
	<body>
		<script type="text/javascript" src="/js/materialize.min.js"></script>
@include('layout.player_side')
		<div style="padding-left:16%;">
			<div class="topbar">
                <div class="uploadBtn" style="float:right;margin-right:4%;">
                    <a style="color:white;" href="/player/health/data/create"><i class="fa fa-download" style="padding:0 1rem;"></i>数据导入</a>
                </div>
			</div>
			<div>
				<div class="row" style="margin-top:5%;">
					<div class="col s3">
						<div class="row" style="background-color:#1a9abe;">
							<div class="col s4" style="padding-top:5%;text-align:center;">
								<a style="color:white;"><i class="fa fa-user fa-3x"></i></a>
							</div>
							<div class="col s8" style="background-color:#20c1ed;color:white;">
								<div style="margin-top:4%;font-size:1rem;border-bottom:1px solid #1a9abe;">身高</div>
								<div style="font-size:2rem;"><b>{{ $last_height->value }}</b><a style="color:white;font-size:0.75rem;">cm</a>
								<a style="color:white;margin-left:10%;font-size:1rem;"><i class="fa fa-pencil"></i></a>
								</div>
							</div>
						</div>
					</div>
					<div class="col s3">
						<div class="row" style="background-color:#c37d0e;">
							<div class="col s4" style="padding-top:5%;text-align:center;">
								<a style="color:white;"><i class="fa fa-glass fa-3x"></i></a>
							</div>
							<div class="col s8" style="background-color:#f39c12;color:white;">
								<div style="margin-top:4%;font-size:1rem;border-bottom:1px solid #c37d0e;">体重</div>
								<div style="font-size:2rem;"><b>{{ $last_weight->value }}</b><a style="color:white;font-size:0.75rem;">kg</a>
								<a style="color:white;margin-left:10%;font-size:1rem;"><i class="fa fa-pencil"></i></a>
								</div>
							</div>
						</div>
					</div>
					<div class="col s3">
						<div class="row" style="background-color:#13844a;">
							<div class="col s4" style="padding-top:5%;text-align:center;">
								<a style="color:white;"><i class="fa fa-stethoscope fa-3x"></i></a>
							</div>
							<div class="col s8" style="background-color:#18a55d;color:white;">
								<div style="margin-top:4%;font-size:1rem;border-bottom:1px solid #13844a;">血压</div>
								<div class="row" style="margin-bottom:0px;">
									<div class="col s8"style="padding-left:0;">
									<div style="font-size:2rem;">{{ round($last_bp->value,0) }}/{{ round($last_bp->value2,0) }}</div>
								</div>
								<div class="col s4" style="padding-bottom:0;">
									<a style="color:white;font-size:.75rem;">mmHg</a>
									<a style="color:white;margin-left:0%;font-size:0.75rem;margin-top:-10px;"><i class="fa fa-pencil"></i></a>
								</div></div>
								</div>
						</div>
					</div>
					<div class="col s3">
						<div class="row" style="background-color:#af3d32;">
							<div class="col s4" style="padding-top:5%;text-align:center;">
								<a style="color:white;"><i class="fa fa-heartbeat fa-3x"></i></a>
							</div>
							<div class="col s8" style="background-color:#db4c3f;color:white;">
								<div style="margin-top:4%;font-size:1rem;border-bottom:1px solid #af3d32;">心率</div>
								<div style="font-size:2rem;"><b>{{ round($last_hr->value,0) }}</b><a style="color:white;font-size:0.75rem;">次/分</a>
								<a style="color:white;margin-left:10%;font-size:1rem;"><i class="fa fa-pencil"></i></a>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div>
					<div class="row">
						<div class="col s8">
							<div id="check" style="background-color:white;border-top:2px solid #ddd;border-bottom:2px solid #ddd;">
								<div style="padding:2%;font-size:1.25rem;">
									运动时状况分析
								</div>
                                <div id="loading" style="text-align:center;">
                                    <div class="preloader-wrapper big active" >
                                        <div class="spinner-layer spinner-blue-only">
                                          <div class="circle-clipper left">
                                            <div class="circle"></div>
                                          </div><div class="gap-patch">
                                            <div class="circle"></div>
                                          </div><div class="circle-clipper right">
                                            <div class="circle"></div>
                                          </div>
                                        </div>
                                      </div>
                                </div>
							</div>
                <div>
                    <div class="row">
                        <div class="col s12">
                        <div class="comment">
                            <div style="padding:2%;font-size:1.25rem;">健康建议</div>
                            <div class="divider"></div>
                            @foreach($health_advices as $health_advice)
                            <div class="comment-content">
                                <div class="row">
                                    <div style="width:36px; height:36px;float:left;border-radius:50%;overflow:hidden;margin-left:4%;">
                                        <img class="responsive-img" src="{{ $health_advice->docUser->portrait }}">
                                    </div>
                                    <div class="test"style="padding-left:10%;">
                                        <div style="float:left;">
                                            {{ $health_advice->docUser->true_name }}
                                        </div>
                                        <div style="text-align:right;padding-right:2%;padding-top:1%;color:grey;font-size:0.75rem;">
                                            {{ $health_advice->created_at }}
                                        </div>
                                    </div>
                                </div>
                                <div style="margin-left:10%;margin-top:-4%;font-size:0.75rem;"><br>{{ $health_advice->content }}</div>

                                <div class="divider" style="margin-top:1%;"></div>
                            </div>
                            @endforeach
                            <div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
						</div>
						<div class="col s4">
							<div id="compare" style="max-width:inherit; height: 400px; margin: 0 auto;border-top:2px solid #ddd;border-bottom:2px solid #ddd;"></div>
							<div style="margin-top:5%;background-color:white;">
							<div id="weight" style="max-width:inherit; height: 400px; margin: 0 auto;border-top:2px solid #ddd;border-bottom:2px solid #ddd;"></div>
								<div>
								<div class="row" style="background-color:white;padding-top:2%;padding-bottom:2%;">
								<div class="col s4" style="font-size:1.25rem;border-right:2px solid #ddd;padding-top:2%;padding-bottom:2%;">
									当前体重
								</div>
								<div class="col s6">
								<div style="font-size:0.75rem;color:green;"><a style="color:green"><i class="fa fa-angle-up"></i></a> 5%</div>
								<div style="font-size:1.25rem;"><b>{{ $last_weight->value }} KG</b></div>
								</div>
							</div>
								</div>
							</div>
							</div>
							
					</div>  
						             
				</div>
			</div>
					
		</div>
		<script type="text/javascript">
$(function () {
    var g = [];
    var y = [{{ $last_height->value }},{{ $last_weight->value }},{{ $last_bp->value }},{{ $last_bp->value2 }},{{ $last_hr->value }}];
    var a = [];
    @for($i =0 ;$i<5;++$i)
        g.push({{ $goods[$i] }});
        a.push({{ $avgs[$i]   }});
    @endfor
    $('#compare').highcharts({
        chart: {
            type: 'bar'
        },
        title: {
            text: '与相对健康数据对比'
        },
        subtitle: {
        },
        xAxis: {
            categories: ['Height', 'Weight', 'Low-BP', 'High-BP', 'HeartRate'],
            title: {
                text: '数据来源:WHO'
            }
        },
        yAxis: {
            min: 0,
            title: {
                align: 'high'
            },
            labels: {
                overflow: 'justify'
            }
        },
        tooltip: {
        },
        plotOptions: {
            bar: {
                dataLabels: {
                    enabled: true
                }
            }
        },
        legend: {
            layout: 'vertical',
            align: 'right',
            verticalAlign: 'top',
            x: -40,
            y: 80,
            floating: true,
            borderWidth: 1,
            backgroundColor: ((Highcharts.theme && Highcharts.theme.legendBackgroundColor) || '#FFFFFF'),
            shadow: true
        },
        credits: {
            enabled: false
        },
        series: [{
            name: 'Avg',
            data: a
        }, {
            name: 'Yours',
            data: y
        }, {
            name: 'Good',
            data: g
        }]
    });
});
		</script>
		<script type="text/javascript">
/*
The purpose of this demo is to demonstrate how multiple charts on the same page can be linked
through DOM and Highcharts events and API methods. It takes a standard Highcharts config with a
small variation for each data set, and a mouse/touch event handler to bind the charts together.
*/

$(function () {


    /**
     * In order to synchronize tooltips and crosshairs, override the
     * built-in events with handlers defined on the parent element.
     */
    $('#check').bind('mousemove touchmove', function (e) {
        var chart,
            point,
            i;

        for (i = 0; i < Highcharts.charts.length; i++) {
            chart = Highcharts.charts[i];
            e = chart.pointer.normalize(e); // Find coordinates within the chart
            point = chart.series[0].searchPoint(e, true); // Get the hovered point

            if (point) {
                point.onMouseOver(); // Show the hover marker
                chart.tooltip.refresh(point); // Show the tooltip
                chart.xAxis[0].drawCrosshair(e, point); // Show the crosshair
            }
        }
    });
    /**
     * Override the reset function, we don't need to hide the tooltips and crosshairs.
     */
    Highcharts.Pointer.prototype.reset = function () {};

    /**
     * Synchronize zooming through the setExtremes event handler.
     */
    function syncExtremes(e) {
        var thisChart = this.chart;

        Highcharts.each(Highcharts.charts, function (chart) {
            if (chart !== thisChart) {
                if (chart.xAxis[0].setExtremes) { // It is null while updating
                    chart.xAxis[0].setExtremes(e.min, e.max);
                }
            }
        });
    }

    $.getJSON('/player/health/json', function (activity) {
        $.each(activity.datasets, function (i, dataset) {

            // Add X values
            dataset.data = Highcharts.map(dataset.data, function (val, i) {
                return [activity.xData[i], val];
            });

            $('<div class="chart">')
                .appendTo('#check')
                .highcharts({
                    chart: {
                        marginLeft: 40, // Keep all charts left aligned
                        spacingTop: 20,
                        spacingBottom: 20
                        // zoomType: 'x',
                        // pinchType: null // Disable zoom on touch devices
                    },
                    title: {
                        text: dataset.name,
                        align: 'left',
                        margin: 0,
                        x: 30
                    },
                    credits: {
                        enabled: false
                    },
                    legend: {
                        enabled: false
                    },
                    xAxis: {
                        crosshair: true,
                        events: {
                            setExtremes: syncExtremes
                        },
                        labels: {
                            format: '{value} '
                        }
                    },
                    yAxis: {
                        title: {
                            text: null
                        }
                    },
                    tooltip: {
                        positioner: function () {
                            return {
                                x: this.chart.chartWidth - this.label.width, // right aligned
                                y: -1 // align to title
                            };
                        },
                        borderWidth: 0,
                        backgroundColor: 'none',
                        pointFormat: '{point.y}',
                        headerFormat: '',
                        shadow: false,
                        style: {
                            fontSize: '18px'
                        },
                        valueDecimals: dataset.valueDecimals
                    },
                    series: [{
                        data: dataset.data,
                        name: dataset.name,
                        type: dataset.type,
                        color: Highcharts.getOptions().colors[i],
                        fillOpacity: 0.3,
                        tooltip: {
                            valueSuffix: ' ' + dataset.unit
                        }
                    }]
                });
        });
    });
});
		</script>
		<script type="text/javascript">
$(function () {
    var weightArr = [];
    @foreach($weights as $weight)
        weightArr.push({{ $weight->value }});
    @endforeach
    $('#weight').highcharts({
        chart: {
            type: 'line'
        },
        title: {
            text: '体重变化'
        },
        subtitle: {
        },
        xAxis: {
            categories: []
        },
        yAxis: {
            title: {
                text: 'Weight (Kg)'
            }
        },
        plotOptions: {
            line: {
                dataLabels: {
                    enabled: true
                },
                enableMouseTracking: true
            }
        },
        series: [{
            name: 'Weight',
            data: weightArr
        }]
    });
});
		</script>
		<script src="/js/highcharts/highcharts.js"></script>
		<script type="text/javascript"> 
            var test = document.getElementById('check');
            test.addEventListener('load', function () {
                    // console.log('complete');
                    alert("aaa");
             });
        
        </script> 
	</body>
</html>