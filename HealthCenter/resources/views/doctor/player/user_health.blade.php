<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>user</title>
		<link type="text/css" rel="stylesheet" href="/custom-font/font-awesome.css">
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
		</style>
	</head>
	<body>
		<script type="text/javascript" src="/js/materialize.min.js"></script>
	    <div class="side-nav fixed">
             <div id="header"><img class="circle responsive-img" src="/img/image.jpg" id ="header_img"></div>
  			<ul class="collapsible" data-collapsible="accordion" style="color:black;">
  				<li><a href="index.html">首页</a></li>
				<li><a  class="collapsible-header">体质数据</a>
                    <div class="collapsible-body">
                        <ul>
                            <li>
                                <a href="user_act.html" style="margin:0;"><div style="padding-left:10%;">运动数据</div></a>
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
                                        <img src="user.jpg" class="responsive-img">
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
                                        <img src="user1.jpg" class="responsive-img">
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
                                        <img src="user.jpg" class="responsive-img">
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
							<li><a href="player_see_doctor.html" style="margin:0;"><div style="height:48px;">
                                    <div style="padding-left:0%;padding-top:6px;">
                                        <div style="width:36px;height:36px;border-radius:50%; overflow:hidden;float:left;">
                                        <img src="user1.jpg" class="responsive-img">
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
								<div style="font-size:2rem;"><b>175</b><a style="color:white;font-size:0.75rem;">cm</a>
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
								<div style="font-size:2rem;"><b>60</b><a style="color:white;font-size:0.75rem;">kg</a>
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
									<div style="font-size:2rem;">95/123</div>
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
								<div style="font-size:2rem;"><b>65</b><a style="color:white;font-size:0.75rem;">次/分</a>
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
								<div style="font-size:1.25rem;"><b>63 KG</b></div>
								</div>
							</div>
								</div>
							</div>
							</div>
							
					</div>  
					<div class="row">
						<div class="col s12">
					       <div class="comment">
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
                                    <div style="margin-left:13%;margin-top:-8%;font-size:0.75rem;">有啊，很多年前，我后面跟了十几亿人，要不是我腿快，现在就没我了。</div>
                                    <div style="text-align:right;margin-top:-0px;padding-right:2%;">
                                        <a style="color:black;">回复</a>
                                    </div>
                                    <div class="divider" style="margin-top:1%;"></div>
                                </div>
                                <div>
                                    <div class="row">
                                    <div style="width:36px; height:36px;float:left;border-radius:50%;overflow:hidden;margin-left:4%;margin-top:1.75%;">
                                        <img class="responsive-img" src="/img/user.jpg">
                                    </div>
                                    <div class="input-field col s8">
                                    <textarea id="textarea1" class="materialize-textarea"></textarea>
                                    </div>
                                    <div class="col s4" style="width:100%;font-size:0.75rem;margin-top:-2%;padding-left:80%;">
                                        <a class="waves-effect waves-light btn" style="color:white;height:24px;line-height: 24px;padding: 0 1rem;">发送</a></div>
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
    $('#compare').highcharts({
        chart: {
            type: 'bar'
        },
        title: {
            text: '与相对健康数据对比'
        },
        subtitle: {
            text: 'Source: <a href="https://en.wikipedia.org/wiki/World_population">Wikipedia.org</a>'
        },
        xAxis: {
            categories: ['Africa', 'America', 'Asia', 'Europe', 'Oceania'],
            title: {
                text: null
            }
        },
        yAxis: {
            min: 0,
            title: {
                text: 'Population (millions)',
                align: 'high'
            },
            labels: {
                overflow: 'justify'
            }
        },
        tooltip: {
            valueSuffix: ' millions'
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
            name: 'Year 1800',
            data: [107, 31, 635, 203, 2]
        }, {
            name: 'Year 1900',
            data: [133, 156, 947, 408, 6]
        }, {
            name: 'Year 2012',
            data: [1052, 954, 1250, 740, 38]
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

    // Get the data. The contents of the data file can be viewed at
    // https://github.com/highslide-software/highcharts.com/blob/master/samples/data/activity.json
    $.getJSON('http://www.highcharts.com/samples/data/jsonp.php?filename=activity.json&callback=?', function (activity) {
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
                            format: '{value} km'
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
    $('#weight').highcharts({
        chart: {
            type: 'line'
        },
        title: {
            text: '体重变化'
        },
        subtitle: {
            text: 'Source: WorldClimate.com'
        },
        xAxis: {
            categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec']
        },
        yAxis: {
            title: {
                text: 'Temperature (°C)'
            }
        },
        plotOptions: {
            line: {
                dataLabels: {
                    enabled: true
                },
                enableMouseTracking: false
            }
        },
        series: [{
            name: 'Tokyo',
            data: [7.0, 6.9, 9.5, 14.5, 18.4, 21.5, 25.2, 26.5, 23.3, 18.3, 13.9, 9.6]
        }, {
            name: 'London',
            data: [3.9, 4.2, 5.7, 8.5, 11.9, 15.2, 17.0, 16.6, 14.2, 10.3, 6.6, 4.8]
        }]
    });
});
		</script>
		<script src="/js/highcharts/highcharts.js"></script>
		
	</body>
</html>