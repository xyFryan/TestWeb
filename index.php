<!DOCTYPE html>
<html lang="zh-CN">
	<head>
		<title>
			Ryan个人测试网站
		</title>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<link rel="stylesheet" href="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
		<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
		<!-- 最新的 Bootstrap 核心 JavaScript 文件 -->
		<script src="https://cdn.bootcss.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	</head>
	<body >
		<div id="entire" style="#">
			<div id="header">
				<!--nav-->
				<div style="#">
					<nav class="navbar navbar-default" role="navigation">
						    <div class="container-fluid">
						    <div class="navbar-header">
						        <button type="button" class="navbar-toggle" data-toggle="collapse"
						                data-target="#example-navbar-collapse">
						            <span class="sr-only">切换导航</span>
						            <span class="icon-bar"></span>
						            <span class="icon-bar"></span>
						            <span class="icon-bar"></span>
						        </button>
						        <a class="navbar-brand" href="#">
						        	<img alt="Brand" src="img/1.png" style="width:20px;height:30px;">
						        </a>
						    </div>
						    <div class="collapse navbar-collapse" id="example-navbar-collapse">
						        <ul class="nav navbar-nav">
						            <li class="active"><a href="#">首页</a></li>
						            <li><a href="#">文章</a></li>
						            <li class="dropdown">
						                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
						                    个人 <b class="caret"></b>
						                </a>
						                <ul class="dropdown-menu">
						                    <li><a href="#">我</a></li>
						                    <li><a href="#">最</a></li>
						                    <li><a href="#">帅</a></li>
						                    <li class="divider"></li>
						                    <li><a href="#">嗯！</a></li>
						                    <li class="divider"></li>
						                    <li><a href="#">是的！</a></li>
						                </ul>
						            </li>
						        </ul>
						    </div>
						    </div>
						</nav>
				</div>
			</div>
			<div style="#">
				<div id="myCarousel" class="carousel slide">
				    <!-- 轮播（Carousel）指标 -->
				    <ol class="carousel-indicators">
				        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
				        <li data-target="#myCarousel" data-slide-to="1"></li>
				        <li data-target="#myCarousel" data-slide-to="2"></li>
				    </ol>   
				    <!-- 轮播（Carousel）项目 -->
				    <div class="carousel-inner" >
				        <div class="item active">
				            <img src="/img/slide/slide1.jpg" alt="First slide" width="100%">
				        </div>
				        <div class="item">
				            <img src="/img/slide/slide2.jpg" alt="Second slide" width="100%">
				        </div>
				        <div class="item">
				            <img src="/img/slide/slide3.jpg" alt="Third slide" width="100%">
				        </div>
				    </div>
				    <!-- 轮播（Carousel）导航 -->
				    <a class="carousel-control left" href="#myCarousel" 
				        data-slide="prev">
				        <!-- &lsaquo; -->
				        <span class="glyphicon glyphicon-chevron-left"></span>
				    </a>
				    <a class="carousel-control right" href="#myCarousel" 
				        data-slide="next">
				        <!-- &rsaquo; -->
				        <span class="glyphicon glyphicon-chevron-right"></span>
				    </a>
				</div>
			</div>
			<div id="content" class="row" style="margin-top:2%">
				<div class="col-md-4">
					<div class="panel panel-default">
						<div class="panel-heading">文章</div>
						<!-- <div class="panel-body">
						</div> -->
							<ul class="list-group">
								<li class="list-group-item"><a href="#">文章一</a></li>
								<li class="list-group-item"><a href="#">文章二</a></li>
								<li class="list-group-item"><a href="#">文章三</a></li>
								<li class="list-group-item"><a href="#">文章四</a></li>
								<li class="list-group-item text-right"><a href="#">更多</a></li>
							</ul>
							
						
					</div>
				</div>
				<div class="col-md-4">
					<div class="panel panel-default">
						<div class="panel-heading">笑话</div>
						<!-- <div class="panel-body">
						</div> -->
							<ul class="list-group">
								<li class="list-group-item"><a href="#">笑话一</a></li>
								<li class="list-group-item"><a href="#">笑话二</a></li>
								<li class="list-group-item"><a href="#">笑话三</a></li>
								<li class="list-group-item"><a href="#">笑话四</a></li>
								<li class="list-group-item text-right"><a href="#">更多</a></li>
							</ul>
							
						
					</div>
				</div>
				<div class="col-md-4 ">
                  <div class="jumbotron">
                    <h1>Welcome This </h1>
                    <a href="#">Admin</a>
                    </div>
				</div>
			</div>
			<div id="footer"  style="background-color:gray;height:50px;">
				<h5 class="text-center" style="padding-top:30px">copyright 2017-<?php echo date("Y")."赣ICP备17003211号-1"?></h5>
			</div>
		</div>
	</body>
</html>