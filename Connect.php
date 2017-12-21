<!DOCTYPE>
<html lang="zh-CN">
		<head>
			<title>asd</title>
			<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
			<link rel="stylesheet" href="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
		<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
		<!-- 最新的 Bootstrap 核心 JavaScript 文件 -->
		<script src="https://cdn.bootcss.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
		<script type="text/javascript">
		function next(){
			
		}
		</script>
		</head>
		<body>
			<div>
				<!--nav-->
				<div style="margin-left:-3%;margin-right:-3%;">
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
						            <li class="#"><a href="#">首页</a></li>
						            <li><a href="#">文章</a></li>
						            <li class="dropdown">
						                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
						                    个人 <b class="caret"></b>
						                </a>
						                <ul class="dropdown-menu">
						                    <li><a href="#">我</a></li>
						                    <li><a href="#">最</a></li>
						                    <li><a href="/Connect.php" class="active">帅</a></li>
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

				<div  class="row-fluid">

					<div class="panel panel-default span12">
						  <div class="panel-heading" ><h5>首页->考点</h5></div>
						  <div class="panel-body text-center" >
											   	<?php
										$servername = "localhost";
										$username = "root";
										$password = "jynl199669";
										$dbname = "test1";
										 
										// 创建连接
										$conn = new mysqli($servername, $username, $password, $dbname);
										// Check connection
										if ($conn->connect_error) {
										    die("连接失败: " . $conn->connect_error);
										} 
										 //需要得到数据库中第id条数据
										function seed()
										{
										list($msec, $sec) = explode(' ', microtime());
										return (float) $sec;
										}
										// //播下随机数发生器种子，用srand函数调用seed函数的返回结果
										srand(seed());
										//输出产生的随机数，随机数的范围为10-100
										$sql = "SELECT ID, Message FROM Message ";
										$result = $conn->query($sql);
										$sjs= rand(0,$result->num_rows-1);

										$sql = "SELECT Message FROM Message limit ".$sjs.",1";
										$result = $conn->query($sql);
										 
										if ($result->num_rows) {
											while($row = $result->fetch_assoc()) {
										        echo $row["Message"]."<br />";
										    }
										} else {
										    echo "0 结果";
										}
										$conn->close();
										?> 
										<button class="btn btn-default" type="button" onclick="{location.replace(document.referrer)}">下一个</button>
						  </div>
					</div>
					
				</div>
			</div>
	
		</body>
</html>

