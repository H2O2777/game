<?php
$text_message['message'];
$email=$_POST['email'];

$db=mysqli_connect('localhost', 'root', '', 'DB');

$sql = "INSERT INTO `table`('message', 'email') VALUES ('$text_message', '$email' )";
$result=mysqli_query($db, $sql);
header('Location: http://game.ru/index3.php');
exit;
?>