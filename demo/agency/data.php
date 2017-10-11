<?php
 /* Здесь проверяется существование переменных */
 if (isset($_POST['name'])) {$name = $_POST['name'];}
  if (isset($_POST['phone'])) {$phone = $_POST['phone'];}
 if (isset($_POST['email'])) {$email = $_POST['email'];}
 if (isset($_POST['tmessage'])) {$tmessage = $_POST['tmessage'];}
 if (isset($_POST['message'])) {$message = $_POST['message'];}
 if (isset($_POST['theme'])) {$theme = $_POST['theme'];}

/* Сюда впишите свою эл. почту */
 $address = "kosta@mail.ru";

/* А здесь прописывается текст сообщения, \n - перенос строки */
 $mes = " $theme!\nИмя: $name\nТелефон: $phone\nE-mail: $email\nТема письма: $tmessage\nЧем Помочь: $message";

/* А эта функция как раз занимается отправкой письма на указанный вами email */
$sub='Заказ'; //сабж
$email='Заказ <site.ru>'; // от кого сюда вписываем свой сайт
 $send = mail ($address,$sub,$mes,"Content-type:text/plain; charset = utf-8\r\nFrom:$email");

ini_set('short_open_tag', 'On');
header('Refresh: 3; URL=index.htm');
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Отправка заявки</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel="stylesheet" type="text/css" href="css/style.css" />
<style>
body {background: #FFFFFF;}
div.success {background: #58AAEA;width: 600px;padding: 50px 30px;margin: 10% auto;text-align: center;}
div.success h1 {font: 38px "Roboto";color: #FFFFFF;}
div.success h3 {font: 26px "Roboto";color: #FFFFFF;padding: 15px 0 0;}
</style>

<script type="text/javascript">
setTimeout('location.replace("/")', 3000); /*Изменить текущий адрес страницы через 3 секунды (3000 миллисекунд)*/
</script> 

</head>

<body>

<div class="success">
	<h1>Спасибо за запрос!</h1>
	<h3>Наш менеджер свяжется с вами в ближайшее время!</h3>
</div>

</body></html>