<!DOCTYPE html>
<html>
<head>
<?php
	require_once "blocks/head.php"
?>
<title>Bootstrap</title>
</head>
<body>
	<div class = "navbar navbar-inverse navbar-fixed-top"> 
		<div class="container">
			<div class="navbar-header">
				<button type="bitton" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="../index.php">PR<i class="fa fa-circle"></i>GER</a>
			</div>
			<div class="navbar-collapse collapse">
				<ul class="nav navbar-nav navbar-right">
					<li class="active"><a href="../index.php">Домой</a></li>
					<li><a href="/aboutUs.php">О Нас</a></li>
					<li> <a href="#">Сервисы</a></li>
					<li> <a href="#">Работы</a></li>
					<li> <a href="/feedback.php"><i class="fa fa-envelope-o" aria-hidden="true"></i></a></li>
				</ul>
			</div>
		</div>
	</div>
<?php
	require_once "blocks/headerwrap.php"
?>
	<div class="container w">
		<div class="row centered">
			<br><br>
			<div class="col-lg-4">
				<i class="fa fa-heart"></i>
				<h4>Дизайн</h4>
				<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
			</div>
			<div class="col-lg-4">
				<i class="fa fa-laptop"></i>
				<h4>Ваня Красавчик!</h4>
				<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
			</div>
			<div class="col-lg-4">
				<i class="fa fa-trophy"></i>
				<h4>Помощь</h4>
				<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
			</div>
		</div>
	<br><br>
	</div>
	<div id="dg">
		<div class="container">
			<div class="row centered">
				<h4>Choose</h4>
				<br>
				<div class="col-lg-4">
					<div class="tilt">
						<a href="#"><img src="img/p01.png" alt=""></a>
					</div>
				</div>
				<div class="col-lg-4">
					<div class="tilt">
						<a href="#"><img src="img/p03.png" alt=""></a>
					</div>
				</div>
				<div class="col-lg-4">
					<div class="tilt">
						<a href="#"><img src="img/p02.png" alt=""></a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="container wb">
		<div class="row centered">
			<br><br>
			<div class="col-lg-8 col-lg-offset-2">
				<h4>Мы создаем сайты</h4>
				<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
				<p><br><br></p>
			</div>
			<div class="col-lg-2"></div>
				<div class="col-lg-10 col-lg-offset-1">
					<img src="img/munter.png" alt="" class="img-responsive">
				</div>
		</div>
	</div>
	<div id="lg">
		<div class="container">
			<div class="row centered">
				<h4>Партнеры</h4>
				<div class="col-lg-2 col-lg-offset-1">
					<img src="img/c01.png" alt="">
				</div>
				<div class="col-lg-2 ">
					<img src="img/c02.png" alt="">
				</div>
				<div class="col-lg-2 ">
					<img src="img/c03.png" alt="">
				</div>
				<div class="col-lg-2 ">
					<img src="img/c04.png" alt="">
				</div>
				<div class="col-lg-2 ">
					<img src="img/c05.png" alt="">
				</div>
			</div>
		</div>
	</div>
	<div id="r">
		<div class="container">
			<div class="row centered">
				<div class=" col-lg-8 col-lg-offset-2">
					<h4>Разработка сайтов с душой!</h4>
					<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
				</div>
			</div>
		</div>
	</div>
<?php
	require_once "blocks/footer.php"
?>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
</body>
</html>