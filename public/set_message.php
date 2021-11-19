<?php
include '../src/Flash.php';
$flashMessage = new FlasMessage();
$flashMessage->setMessage($_POST['status'], $_POST['message'] );
header('Location: index.php');
?>
