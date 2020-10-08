<?php
use PHPMailer\PHPMailer\PHPMailer;

if(isset($_POST["name"]) && isset($_POST['email'])){
    $name= $_POST['name'];
    $email = $_POST['email'];
    $subject=$_POST['subject'];
    $message=$_POST['message'];
    
    require_once "PHPMailer/PHPMailer.php";
    require_once "PHPMailer/SMTP.php";
    require_once "PHPMailer/Exception.php";

$mail = new PHPMailer();

//smtp setting

$mail->isSMTP();
$mail->Host = "smtp.gmail.com";
$mail->Host = "smtp.gmail.com";
$mail->SMTPAuth = true;
$mail->Username = "racer.shakil111gmail.com";
$mail->Password = "";
$mail->Port = "465";
$mail->SMTPSecure = "ssl";

//email setting

$mail->isHTML(true);
$mail->setForm($email, $name);
$mail->addAddress("racer.shakil111gmail.com");
$mail->Subject = ("$email ($subject)");
$mail->Message = $message;

if($mail->send()){
	$status = "success";
	$respond = "Email is sent";
}
else{
	$status = "Failed";
	$respond = "Email is not sent: <br>" .$mail->ErrorInfo;
}
}
?>
