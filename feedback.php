<!DOCTYPE>
<!DOCTYPE html>
<html>
<head>
	<?php
		require_once "blocks/head.php";
	?>
	<title>Feedback</title>
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
					<li><a href="/aboutUs.php">О Нас</a></li>
					<li> <a href="#">Сервисы</a></li>
					<li> <a href="#">Работы</a></li>
					<li class="active"> <a href="/feedback.php"><i class="fa fa-envelope-o" aria-hidden="true"></i></a></li>
				</ul>
			</div>
		</div>
	</div>
	<div id="headerUs">
		<div class="container">
			<div class="row centered">
				<div class="col-lg-8 col-lg-offset-2">
				<br><br><br>
				<h1 class="inf">Свяжитесь с нами</h1>
				</div>
			</div>
		</div>
	</div>
<div class="container">
	<div class="row centered">
		<div class="abUs">
			<br><br>
			<i class="fa fa-comments-o fa-2x" aria-hidden="true"></i>
			<div class="">
				<h2>Напишите нам</h2>
				<form action="/submit.php" method="POST">
					<input name="email" placeholder="Email"><br>
					<input name="name" placeholder="Имя"><br>
					<input name="phone" placeholder="Телефон"><br>
					<textarea name="message" placeholder="Сообщение"></textarea><br>
					<input type="submit" value="Отправить сообщение">
				</form>
			</div>
			<br><br>
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