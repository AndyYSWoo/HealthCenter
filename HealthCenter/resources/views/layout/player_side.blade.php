<div class="side-nav fixed">
            <div id="header"><img class="circle responsive-img" src="/img/image.jpg" id ="header_img"></div>
  			<ul class="collapsible" data-collapsible="accordion" style="color:black;">
  				<li><a href="/player">首页</a></li>
				<li>
                    <a href="#!" class="collapsible-header">体质数据</a>
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
				<li><a href="/player/activity">活动</a></li>
				<li><a href="group_index.html">兴趣组</a></li>
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
				<li>
                    <a href="#!" class="collapsible-header">教练</a>
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
				<li>
                    <a href="#!"class="collapsible-header ">医生</a>
					<div class="collapsible-body">
						<ul>
							<li>
                                <a href="player_see_doctor.html" style="margin:0;">
                                    <div style="height:48px;">
                                        <div style="padding-left:0%;padding-top:6px;">
                                            <div style="width:36px;height:36px;border-radius:50%; overflow:hidden;float:left;">
                                                <img src="/img/user1.jpg" class="responsive-img">
                                            </div>
                                            <div style="margin-left:30%;margin-top:-2%;">
                                                Alexander Pierc
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </li>
						</ul>
					</div>
				</li>
				<!--<li><a href={{ "/player/".Auth::user()->id."/edit" }}>个人资料</a></li>-->
				<li><a href="/player/{{ Auth::user()->id }}/edit">个人资料</a></li>
  			</ul>
        </div>