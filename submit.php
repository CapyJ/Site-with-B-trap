<?php
	if (!empty($_POST['name']) AND !empty($_POST['email']) AND !empty($_POST[message])) {
		
		$headers = 'From: Кротов Роман'.
		 			'Reply-To: turyatko1@ukr.net\r\n'.
		 			'X-Mailer: PHP/'.phpversion();
		
		$theme = 'Новое сообщение';

		$letter = 'Данные сообщения:\r\n';
		$letter .='Имя: '.$_POST['name'].'\r\n';
		$letter .='Email: '.$_POST['email'].'\r\n';
		$letter .='Телефон: '.$_POST['phone'].'\r\n';
		$letter .='Сообщение: '.$_POST['message'].'\r\n';
		
		if (mail('turyatko1@ukr.net', $theme, $letter, $headers)) {
			header('Location:/thankyou.php');
		} else {
			header('Location:/error.php');
		}
	}
	else {
		header('Location:/');
	}
?>