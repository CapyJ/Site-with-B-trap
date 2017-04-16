<!DOCTYPE>
<!DOCTYPE html>
<html>
<head>
	<?php
		require_once "blocks/head.php";
	?>
	<title>About Us</title>
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
					<li><a href="../index.php">Домой</a></li>
					<li class="active"><a href="/aboutUs.php">О Нас</a></li>
					<li> <a href="#">Сервисы</a></li>
					<li> <a href="#">Работы</a></li>
					<li> <a href="/feedback.php"><i class="fa fa-envelope-o" aria-hidden="true"></i></a></li>
				</ul>
			</div>
		</div>
	</div>
	<div id="headerUs">
		<div class="container">
			<div class="row centered">
				<div class="col-lg-8 col-lg-offset-2">
				<br><br><br><br><br><br>
				<h1 class="inf">Info</h1>
				</div>
			</div>
		</div>
	</div>
<div class="container">
	<div class="row centered">
		<div class="abUs">
			<br><br>
			<div class="col-lg-4">
			<i class="fa fa-bed" aria-hidden="true"></i>
			<h4>We like to sleep</h4>
			<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
			</div>
			<div class="col-lg-4">
			<i class="fa fa-info-circle fa-2x" aria-hidden="true"></i>
			<h4>But we are good specialists</h4>
			<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.</p>
			</div>
			<div class="col-lg-4">
			<i class="fa fa-beer" aria-hidden="true"></i>
			<h4>We like to drink</h4>
			<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
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