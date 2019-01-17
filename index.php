<?php
session_start(); # стартуем сессию
?> 

<!DOCTYPE html>
<html>
<head>
	<title>IQ NINJA</title>
	<link rel="stylesheet" type="text/css" href="index_style.css">
</head>
<body id="index_body">
	
		<h1 align="center">IQ NINJA</h1>
		<div id=block_for_message align="center" class="simpleText">  <!--div для вывода сообщения об ошибке-->
	<? if (isset($_SESSION["error_messages"]) && !empty($_SESSION["error_messages"])){
		echo $_SESSION["error_messages"];
		unset($_SESSION["error_messages"]);
	}
	?>
</div>
<div id=start_battle> 
	<form action="login.php" method="post"> <!--файл login.php это обработчик формы-->
		Login <input id="login" type="text" name="login" required="required" maxlength="25"><br />
		<br />
		Password <input id="password" type="password" name="password" required="required" maxlength="32"><br /><br />
		<input type="submit" name="auth_button" value="Вход" /><br /><br />
	</form>	
		<input type="button" name="GO" value="Регистрация" onclick='location.href="reg.php"' />
	
</div>
	

</body>
</html>
