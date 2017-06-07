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

		<meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no"> 
		<link rel="shortcut icon" href="#">
		<!-- <link rel="stylesheet" type="text/css" href="css/index.css"> -->
	</head>
	<body >
		<div id="entire">
			<div id="header">
				<!--nav-->
				<div class=".visible-desktop"> 电脑可见</div>
				<div class=".hidden-desktop">电脑不可见</div>
			</div>
			<div style="margin:3%;">
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
				            <img src="/img/slide/slide1.jpg" alt="First slide">
				        </div>
				        <div class="item">
				            <img src="/img/slide/slide2.jpg" alt="Second slide">
				        </div>
				        <div class="item">
				            <img src="/img/slide/slide3.jpg" alt="Third slide">
				        </div>
				    </div>
				    <!-- 轮播（Carousel）导航 -->
				    <a class="carousel-control left" href="#myCarousel" 
				        data-slide="prev">&lsaquo;
				    </a>
				    <a class="carousel-control right" href="#myCarousel" 
				        data-slide="next">&rsaquo;
				    </a>
				</div>
			</div>
			<div id="content">
				<div><H1>This is a testing.</H1>
					<img class="img-responsive" src="img/#" alt="响应式图像">
					
				</div>
				<div>
				</div>
				<div>
				</div>
			</div>
			<div id="footer">
				//<h5>copyright 2017-<?php echo date("Y")."赣ICP备17003211号-1"?></h5>
			</div>
		</div>
	</body>
</html>