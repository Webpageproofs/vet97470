<?
// header("Content-Type: text/html; charset=utf-8");
// Файлы phpmailer
require 'phpmailer/PHPMailer.php';
require 'phpmailer/SMTP.php';
require 'phpmailer/Exception.php';
	$mail = new PHPMailer\PHPMailer\PHPMailer();
	$mail->CharSet = 'UTF-8';

	$subject = $_POST['subject'];
	$company = $_POST['company'];
	$name = $_POST['name'];
	$email = $_POST['email'];
	$text = $_POST['text'];

// Настройки SMTP

	$mail->isSMTP();
	$mail->SMTPAuth = true;
	$mail->SMTPDebug = 0;

	$mail->Host = 'ssl://smtp.mail.ru';
	$mail->Port = 465;
	$mail->Username = 'alilianna13@bk.ru';
	$mail->Password = 'kfylsib896FR';

// От кого
	
	$mail->setFrom('alilianna13@bk.ru');

// Кому

	$mail->addAddress('alilianna13@bk.ru');

// Тема письма

	$mail->Subject = 'Start up"';

//Тело письма

	$body = "
<h2>Новое письмо</h2>
<b>Тема:</b> $subject<br>
<b>Имя:</b> $name<br>
<b>Почта:</b> $email<br>
<b>Компания:</b> $company<br><br>
<b>Сообщение:</b><br>$text
";
	$mail->msgHTML($body);  

// Пприложение

	$mail->addAttachment (__DIR__ . '/image.jpg');

	if(!$mail->send()) {
		echo 'error';
	} else {
		// header("location: ../../index.html#contact");
	}





?>