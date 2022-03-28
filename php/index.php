<?php
	header("Content-Type: text/html; charset=utf-8");
	$name = $_POST['name'];
	$email = $_POST['email'];
	$subject = $_POST['subject'];
	$company = $_POST['company'];
	$text = $_POST['text'];

	$arr = [];

check_error();

	if($arr[0] == 2) {
		header("location: ../index.html?send=notsended#contacts");
	} else {
		include_once('send.php');
		header("location: ../index.html?send=sended#contacts");
	}

function check_error() {
	global $name, $email, $text, $subject, $company, $arr;
	
	// Проверка почты
		if(preg_match("/@/", $email)) {
			// echo "email is correct<br>";
			$arr[0] = 1;
		} else {
			// echo "email is incorrect<br>";
			return $arr[0] = 2;
		}
	// Проверка на заполнение полей

	if ($name  AND $email  AND $text  AND $subject AND $company) {
		// echo 'поля заполнены<br>';
		$arr[0] = 1;
	} else {
		// echo 'поля не заполнены<br>';
		return $arr[0] = 2;
		// header("location: index.html?send=notallfield#conts");
	}
}	
// var_dump($arr);

?>