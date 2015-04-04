<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8" />
		<link rel="stylesheet" type="text/css" href="style/main.css" />
		<link rel="stylesheet" type="text/css" href="style/index.css" />
		<link rel="stylesheet" type="text/css" href="style/create.css" />
		<title>主页</title>
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
					<div id="page">

					</div>
				</div>
			</header>
			<div id="page">
				<div class="content create">
					<p id="create_title">
						创建一个Club
					</p>
					<form name="create" method="post">
						<br />
						<div id="create_textbox">
							<input id="create_clubname" class="textbox create-textbox" type="text" name="clubname" placeholder="Club名称" value="" />
							<br />
							<input id="create_leadername" class="textbox create-textbox" type="text" name="leadername" placeholder="部长用户名（选填）" value="" />
							<br />
						</div>
							<input id="create_button" type="button" name="create" value="立即创建" />
					</form>
				</div>
			</div>
		</div>
	</body>
</html>
