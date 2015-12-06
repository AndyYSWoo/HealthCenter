<div class="side-nav fixed">
            <div id="header"><img class="circle responsive-img" src="{{ Auth::user()->portrait }}" id ="header_img"></div>
  			<ul class="collapsible" data-collapsible="accordion" style="color:black;">
  				<li><a href="/player">首页</a></li>
				<li>
                    <a href="#!" class="collapsible-header">体质数据</a>
                    <div class="collapsible-body">
                        <ul>
                            <li>
                                <a href="/player/sports/data">运动数据</a>
                            </li>
                            <li>
                                <a href="/player/health/data">健康数据</a>
                            </li>
                        </ul>
                    </div>
                </li>
				<li><a href="/player/activity">活动</a></li>
				<li><a href="/player/group">兴趣组</a></li>
				<li><a href="/player/social">朋友圈</a>
				<li>
                    <a href="#!" class="collapsible-header">教练</a>
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
									</a></li>
						</ul>
					</div>
				</li>
				<li>
                    <a href="#!"class="collapsible-header ">医生</a>
					<div class="collapsible-body">
						<ul>
							<li>
                                <a href="/player/doctor/3" style="margin:0;">
                                    <div style="height:48px;">
                                        <div style="padding-left:0%;padding-top:6px;">
                                            <div style="width:36px;height:36px;border-radius:50%; overflow:hidden;float:left;">
                                                <img src="/img/user1.jpg" class="responsive-img">
                                            </div>
                                            <div style="margin-left:30%;margin-top:-2%;">
                                                Doctor
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </li>
						</ul>
					</div>
				</li>
				<li><a href="/player/{{ Auth::user()->id }}/edit">个人资料</a></li>
				<li><a href="/auth/logout">退出登录</a></li>
  			</ul>
        </div>