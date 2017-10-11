<?php
 /* Здесь проверяется существование переменных */
 if (isset($_POST['name'])) {$name = $_POST['name'];}
 if (isset($_POST['phone'])) {$phone = $_POST['phone'];}
 if (isset($_POST['email'])) {$email = $_POST['email'];}
 if (isset($_POST['Android'])) {$Android = $_POST['Android'];}
 if (isset($_POST['iPhone'])) {$iPhone = $_POST['iPhone'];}
 if (isset($_POST['iPad'])) {$iPad = $_POST['iPad'];}
 if (isset($_POST['social'])) {$social = $_POST['social'];}
 if (isset($_POST['rfid'])) {$rfid = $_POST['rfid'];}
 if (isset($_POST['crm'])) {$crm = $_POST['crm'];}
 if (isset($_POST['consult'])) {$consult = $_POST['consult'];}
 if (isset($_POST['concept'])) {$concept = $_POST['concept'];}
 if (isset($_POST['design'])) {$design = $_POST['design'];}
 if (isset($_POST['prodacshin'])) {$prodacshin = $_POST['prodacshin'];}
 if (isset($_POST['intro'])) {$intro = $_POST['intro'];}
 if (isset($_POST['seo'])) {$seo = $_POST['seo'];}
 if (isset($_POST['support'])) {$support = $_POST['support'];}
 if (isset($_POST['descript'])) {$descript = $_POST['descript'];}
 if (isset($_POST['company'])) {$company = $_POST['company'];}


/* Сюда впишите свою эл. почту */
 $address = "kosta@mail.ru";

/* А здесь прописывается текст сообщения, \n - перенос строки */
 $mes = " НОВЫЙ БРИФ!
\nКакие услуги его интересуют?\n   $iPad , $iPhone , $Android , $social , $rfid , $crm , $consult
\nЧто требуется от нас?\n          $concept , $design , $prodacshin , $intro , $seo , $support \nКраткое описание: $descript
\nКак нам с вами связаться?\n     \nИмя: $name\nТелефон: $phone\nE-mail: $email\nДолжность: $company";

/* А эта функция как раз занимается отправкой письма на указанный вами email */
$sub='Заказ'; //сабж
$email='Заказ <farnedo.ru>'; // от кого сюда вписываем свой сайт
 $send = mail ($address,$sub,$mes,"Content-type:text/plain; charset = utf-8\r\nFrom:$email");

ini_set('short_open_tag', 'On');
header('Refresh: 3; URL=index.htm');
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Отправка Брифа</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel="stylesheet" type="text/css" href="css/red.css" />
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
Нет ПОСТА<div class="success">
	<h1>Спасибо за запрос!</h1>
	<h3>Наш менеджер свяжется с вами в ближайшее время!</h3>
</div>
</body></html>