<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8" />
		<link rel="stylesheet" type="text/css" href="style/main.css" />
		<link rel="stylesheet" type="text/css" href="style/index.css" />
		<script charset="utf-8" src="script/index.js"></script>
		<title>Club - 华中大学生团体聚合社区</title>
	</head>
	<body>
		<div id="container">
			<!-- 页面顶部，左侧简介，右侧实现登录功能 -->
			<header>
				<div class="content">
					<div id="top_nav" class="mov_nav">
						<div id="nav_top">

						</div>
						<div id="nav_bar">
							<div id="logo">
								<img src="" alt="" />
							</div>
							<ul id="nav_ul">
								<li><a href="index.php">首页</a></li>
								<li><a href="#">微软俱乐部</a></li>
							</ul>
							<div id="search">
								<form id="search_form" action="" method="post">
									<input id="search_box" type="text" name="search_box" />
									<input id="search_button" type="button" name="search_button" value="搜索" />
								</form>
							</div>
						</div>
					</div>
					<div id="left">
						<div id="intro">
							<span id="intro_title">华中大学生团体聚合平台</span>
							<br /><br />
							<span id="intro_content">一起学习，一起成长！</span>
						</div>
						<div id="setup">
							<input id="setup_button" type="button" name="setup" onclick="location.href='create.php'" value="创建俱乐部" />
						</div>
					</div>
					<div class="right login">
						<form name="login" method="post">
							<br />
							<div id="login_textbox">
								<input id="login_username" class="textbox" type="text" name="username" placeholder="用户名" value="" />
								<input id="login_password" class="textbox" type="password" name="password" placeholder="密码" value="" />
							</div>
							<div id="login_checkbox">
								<input id="login_autoflag" type="checkbox" name="autoFlag" value="" />
								<span>记住我的登录状态</span>
							</div>

								<input id="login_button" type="button" name="login" value="登录" />

							<div id="signup_text">
								还没有Club账户？赶快<a href="signup.php">注册</a>吧！
							</div>
						</form>
					</div>
					<div class="right logged">
						<div class="logged_icon">
							<img src="image/Club.png" alt="icon" />
						</div>
						<div class="profile_button">
							<button class="button" name="button">个人资料</button>
							<button class="button" name="button">退出登录</button>
						</div>
					</div>
				</div>
			</header>
			<div id="page">
				<div class="content">
					<div id="mid_nav" class="mov_nav">
						<ul id="page_ul">
							<li><a href="#C1">热门访问</a></li>
							<li><a href="#C2">闲谈乱扯</a></li>
							<li><a href="#C3">所有Club</a></li>
							<li><a href="#C4">加入我们</a></li>
						</ul>
					</div>
				</div>
				<div class="content hotclub">
					<a name="C1"></a>

				</div>
				<div class="content chats">
					<a name="C2"></a>

				</div>
				<div class="content allclub">
					<a name="C3"></a>

				</div>
				<div class="content joinus">
					<a name="C4"></a>

				</div>
			</div>
		</div>
	</body>
</html>
