<meta http-equiv="Content-Type" content="text/html;charset=utf-8"/>
<head>
	<title>企业商城</title>
	<link rel="stylesheet" type="text/css" href="css/home.css">
</head>
<body>
	<!-- 头部 -->
	<div class="head">
		<div class="head-wrap">
			<div class="head-left">
				<ul>
					<li><a href="company/index.html">企业介绍</a></li>
					<li><a href="">意见反馈</a></li>
					<li><a href="">留言板</a></li>
				</ul>
			</div>
			<div class="head-right">
				<ul>
					<!-- <li><?php include 'php/deallogin.php' ?></li> -->
					<li><a id="login" href="#">登陆</a></li>
					<li><a id="register" href="#">注册</a></li>
 					<li><a href="">我的订单</a></li>
					<li><a href="">购物车</a>(0)</li>
				</ul>
<!-- 				<ul style="display:none;">
					<li>欢迎</li>
					<li></li>
					<li>我的订单</li>
					<li>退出</li>
				</ul> -->

			</div>
		</div>
	</div>
	<!-- 登陆 -->
	<div class="mask"></div>
	<div class="login" id="login-ui">
		<div class="login-title">尔尔商城登陆<img id="login-close" src="images/close_def.png"></div>
		<form class="login-form" action="php/loginchek.php" method="post">
			<div><span>账号</span><input class="login-input" type="text" name="name" placeholder="用户名"></div>
			<div><span>密码</span><input class="login-input" type="password" name="password" placeholder="密码"></div>
			<div><input class="login-button" type="submit" name="submit" value="登陆"></div>
		</form>
	</div>
	<!-- 注册 -->
	<div>
		<div class="register" id="register-ui">
			<div class="register-title">尔尔商城注册<img id="register-close" src="images/close_def.png"></div>
			<form class="register-form" action="php/register.php" method="post">
				<div><span>账号</span><input class="register-input" type="text" name="register_account" placeholder="账号"></div>
				<div><span>密码</span><input class="register-input" type="password" name="register_password" placeholder="密码"></div>
				<div><span>确认</span><input class="register-input" type="password" name="confirm" placeholder="再次确认密码"></div>
				<div><input class="register-button" type="submit" name="submit" value="注册"></div>
			</form>
		</div>
	</div>
	<!--  -->
	<div class="box">
		<!-- 搜索 -->
		<div class="search">
			<input type="text" name="search">
			<button type="sumit">搜索</button>
		</div>
		<!-- 导航 -->
		<div class="nav">
			<div class="nav-left">
				<div>全部商品</div>
				<div class="nav-left-show" id="nav-left-title-1">
					<div>手机<span>&gt;</span></div>
					<div class="nav-left-phone" id="nav-left-title-show-1">
						<div>尔1系列</div>
						<div>尔2系列</div>
					</div>
				</div>
				<div class="nav-left-show" id="nav-left-title-2">
					<div>笔记本 平板<span>&gt;</span></div>
					<div class="nav-left-book" id="nav-left-title-show-2">
						<div>笔记本系列</div>
						<div>平板系列</div>
					</div>
				</div>
				<div class="nav-left-show" id="nav-left-title-3">
					<div>电视 盒子<span>&gt;</span></div>
					<div class="nav-left-tv" id="nav-left-title-show-3">
						<div>电视</div>
						<div>盒子</div>
					</div>
				</div>
				<div class="nav-left-show" id="nav-left-title-4">
					<div>耳机 音响<span>&gt;</span></div>
					<div class="nav-left-earphone" id="nav-left-title-show-4">
						<div>耳机</div>
						<div>音响</div>
					</div>
				</div>
				<div class="nav-left-show" id="nav-left-title-5">
					<div>路由器 智能设备<span>&gt;</span></div>
					<div class="nav-left-smart" id="nav-left-title-show-5">
						<div>路由器</div>
						<div>智能设备</div>
					</div>
				</div>
				<div class="nav-left-show" id="nav-left-title-6">
					<div>移动电源 电池<span>&gt;</span></div>
					<div class="nav-left-power" id="nav-left-title-show-6">
						<div>移动电源</div>
						<div>电池</div>
					</div>
				</div>
				<div class="nav-left-show" id="nav-left-title-7">
					<div>手机壳 钢化膜<span>&gt;</span></div>
					<div class="nav-left-shell" id="nav-left-title-show-7">
						<div>手机壳</div>
						<div>钢化膜</div>
					</div>
				</div>
				<div class="nav-left-show" id="nav-left-title-8">
					<div>鼠标 键盘<span>&gt;</span></div>
					<div class="nav-left-mouse" id="nav-left-title-show-8">
						<div>鼠标</div>
						<div>键盘</div>
					</div>
				</div>
			</div>

			<div class="nav-right">
				<div class="nav-right-box">
					<div id="nav-right-list" style="left: -980px">
						<img src="images/5.jpg" alt="5">
						<img src="images/1.jpg" alt="1">
						<img src="images/2.jpg" alt="2">
						<img src="images/3.jpg" alt="3">
						<img src="images/4.jpg" alt="4">			
						<img src="images/5.jpg" alt="5">
						<img src="images/1.jpg" alt="1">
					</div>
					<div id="nav-right-buttons">
						<span index="1" class="nav-right-on"></span>
						<span index="2"></span>
						<span index="3"></span>
						<span index="4"></span>
						<span index="5"></span>
					</div>
					<a href="javascript:;" id="nav-right-prev" class="nav-right-arrow">&lt;</a>
					<a href="javascript:;" id="nav-right-next" class="nav-right-arrow">&gt;</a>
				</div>
			</div>
		</div>
		<div class="phone">
			<div class="phone-title">手机</div>
			<ul class="phone-list">
				<li>
					<a href=""><img src="images/phone/home/hongmi1.jpg"></a>
					<p>尔尔手机1</p>
					<p>1099元</p>
				</li>
				<li>
					<a href=""><img src="images/phone/home/hongmi2.jpg"></a>
					<p>尔尔手机2</p>
					<p>1299元</p>
				</li>
				<li>
					<a href=""><img src="images/phone/home/hongmi3.jpg"></a>
					<p>尔尔手机3</p>
					<p>1399元</p>
				</li>
				<li>
					<a href=""><img src="images/phone/home/hongmi3.jpg"></a>
					<p>尔尔手机4</p>
					<p>1499元</p>
				</li>
				<li>
					<a href=""><img src="images/phone/home/hongmi3.jpg"></a>
					<p>尔尔手机4</p>
					<p>1499元</p>
				</li>
				<li>
					<a href=""><img src="images/phone/home/hongmi3.jpg"></a>
					<p>尔尔手机4</p>
					<p>1499元</p>
				</li>
				<li>
					<a href=""><img src="images/phone/home/hongmi3.jpg"></a>
					<p>尔尔手机3</p>
					<p>1399元</p>
				</li>
				<li>
					<a href=""><img src="images/phone/home/hongmi3.jpg"></a>
					<p>尔尔手机4</p>
					<p>1499元</p>
				</li>
				<li>
					<a href=""><img src="images/phone/home/hongmi3.jpg"></a>
					<p>尔尔手机4</p>
					<p>1499元</p>
				</li>
				<li>
					<a href=""><img src="images/phone/home/hongmi3.jpg"></a>
					<p>尔尔手机4</p>
					<p>1499元</p>
				</li>
			</ul>
		</div>
		<div class="computer">
			<div class="computer-title">笔记本</div>
			<ul class="computer-list">
				<li>
					<a href=""><img src="images/phone/home/hongmi3.jpg"></a>
					<p>尔尔手机4</p>
					<p>1499元</p>
				</li>
				<li>
					<a href=""><img src="images/phone/home/hongmi3.jpg"></a>
					<p>尔尔手机3</p>
					<p>1399元</p>
				</li>
				<li>
					<a href=""><img src="images/phone/home/hongmi3.jpg"></a>
					<p>尔尔手机4</p>
					<p>1499元</p>
				</li>
				<li>
					<a href=""><img src="images/phone/home/hongmi3.jpg"></a>
					<p>尔尔手机4</p>
					<p>1499元</p>
				</li>
				<li>
					<a href=""><img src="images/phone/home/hongmi3.jpg"></a>
					<p>尔尔手机4</p>
					<p>1499元</p>
				</li>
			</ul>
		</div>
		<div class="tv">
			<div class="tv-title">电视</div>
			<ul class="tv-list">
				<li>
					<a href=""><img src="images/phone/home/hongmi3.jpg"></a>
					<p>尔尔手机4</p>
					<p>1499元</p>
				</li>
				<li>
					<a href=""><img src="images/phone/home/hongmi3.jpg"></a>
					<p>尔尔手机3</p>
					<p>1399元</p>
				</li>
				<li>
					<a href=""><img src="images/phone/home/hongmi3.jpg"></a>
					<p>尔尔手机4</p>
					<p>1499元</p>
				</li>
				<li>
					<a href=""><img src="images/phone/home/hongmi3.jpg"></a>
					<p>尔尔手机4</p>
					<p>1499元</p>
				</li>
				<li>
					<a href=""><img src="images/phone/home/hongmi3.jpg"></a>
					<p>尔尔手机4</p>
					<p>1499元</p>
				</li>
			</ul>
		</div>
		<div class="earphone">
			<div class="earphone-title">耳机</div>
			<ul class="earphone-list">
				<li>
					<a href=""><img src="images/phone/home/hongmi3.jpg"></a>
					<p>尔尔手机4</p>
					<p>1499元</p>
				</li>
				<li>
					<a href=""><img src="images/phone/home/hongmi3.jpg"></a>
					<p>尔尔手机3</p>
					<p>1399元</p>
				</li>
				<li>
					<a href=""><img src="images/phone/home/hongmi3.jpg"></a>
					<p>尔尔手机4</p>
					<p>1499元</p>
				</li>
				<li>
					<a href=""><img src="images/phone/home/hongmi3.jpg"></a>
					<p>尔尔手机4</p>
					<p>1499元</p>
				</li>
				<li>
					<a href=""><img src="images/phone/home/hongmi3.jpg"></a>
					<p>尔尔手机4</p>
					<p>1499元</p>
				</li>
			</ul>
		</div>
	</div>
	<script type="text/javascript" src="script/home.js"></script>
</body>
</html>