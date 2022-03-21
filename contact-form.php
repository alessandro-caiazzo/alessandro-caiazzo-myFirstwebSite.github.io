<?php

 if (isset($_POST['submit' ])) {



$name = $_POST[ 'name']; $_POST['name'];
$subject = $_POST['subject'];
$mail From $_POST['mail']; =
$message = $_POST [ 'message'];

$mailTo "alessandro.caiazzo26@gmail.com"; =
$headers = "From: ".$mailFrom;
$txt = "You have received an e-mail from ".$name.". \n\n".$message;

mail($mailTo, $subject, $txt, $headers);
header("Location: index.php?mailsend");
}
?>
