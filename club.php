<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8" />
	<link rel="stylesheet" type="text/css" href="style/main.css" />
	<link rel="stylesheet" type="text/css" href="style/club.css" />
	<script charset="utf-8" src="script/club.js"></script>
	<title>Club</title>
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
							<li><a href="index.php">首页</a>
							</li>
							<li><a href="#">微软俱乐部</a>
							</li>
						</ul>
						<div id="nav_search">
							<form id="nav_search_form" action="" method="post">
								<input id="nav_search_box" type="text" name="search_box" />
								<input id="nav_search_button" type="button" name="search_button" value="搜索" />
							</form>
						</div>
					</div>
				</div>
				<div class="club_title">
					<img src="image/self_background.jpg" alt="Club图片" />
				</div>
			</div>
		</header>
		<div id="page">
			<div class="content">
				<div id="mid_nav" class="mov_nav">
					<ul id="page_ul">
						<li><a href="#C1">文章</a>
						</li>
						<li><a href="#C2">讨论</a>
						</li>
					</ul>
					<div id="search">
						<form id="search_form" action="" method="post">
							<input id="search_box" type="text" name="search_box" placeholder="搜索文章和讨论" />
						</form>
					</div>
				</div>
			</div>
			<div class="article">
				<div id="bodytext">
					<div id="bodytext_title">
						Title
					</div>
					<div id="bodytext_text">
						Text
					</div>
				</div>
				<div id="comment">
					<p>评论</p>
					<div class="comment_content">
						<div id="comment_user">
							<div id="commentusername">User ID</div>
							<div id="commentdislike">反对</div>
							<div id="commentlike">赞成</div>
						</div>
						<div id="comment_text">
							Text
						</div>
					</div>
					<div class="comment_content">
						<div id="comment_user">
							<div id="commentusername">User ID</div>
							<div id="commentdislike">反对</div>
							<div id="commentlike">赞成</div>
						</div>
						<div id="comment_text">
							Text
						</div>
					</div>
				</div>
			</div>
			<div id="clubinfo" class="mov_clubinfo">
				<div id="clubicon">
					<img src="image/Club.png" alt="">
					<p>CCMTC</p>
				</div>
				<div id="function">
					<button class="functionbutton">关注</button>
					<button class="functionbutton">加入</button>
				</div>
				<div id="clubtext">
					<p>介绍和一些信息</p>
				</div>
			</div>

		</div>
	</div>
</body>

</html>