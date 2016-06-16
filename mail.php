<!DOCTYPE html>
<html>
<head>
<title>用PHPmailer寄送電子郵件</title>
<meta charset="UTF-8">
<style>
  body{background-color:azure}
  div{color:navy;width:750px;border:2  dashed}
  </style>
  </head>
  <body>
  <?php
  require("connection.php");
require("PHPMailer/PHPMailerAutoload.php");

if(!empty($_POST['to']) && !empty($_POST['subject']))  {
	


$mail = new PHPMailer();
$mail->IsSMTP(); // telling the class to use SMTP
$mail->SMTPAuth = true; // enable SMTP authentication
$mail->Host = "jasonson82668.org.tw"; // sets GMAIL as the SMTP server
$mail->Port = 25; // set the SMTP port for the GMAIL server
$mail->Username = "jasonson82668"; // GMAIL username
$mail->Password = "jason850826"; // GMAIL password
$mail->From = "jasonson82668@gmil.com";
$mail->FromName ="jasonson82668";
$mail->IsHTML(true);
$mail->Subject="PHP期末報到_A1033338";
$mail->AddAddress($email);
$mail->AddAddress('jasonson82668@gmail.com');
$mail->AddAddress('php@nuk.im');
$mail->CharSet = "utf-8";
$message.="<br/>MISNC 201 at Kean University, New Jersey, USA";
$mail->Body = "A1033338_172.20.107.61";
$mail->Send();


}

<form method="post"  action="<?php  echo  $SERVER['PHP_SELF'];?>">
<div>收件人:<input type="text"  name="to"  size="50">

</div><br>
<div>信件內容:<br>
   <textarea  rows="10"  cols="72"  name="body"></body></textarea>
   </div>
   <input type="sumbit"  value="立即寄出">
   <input type="reset"   value="清除重寫">
   </form>
   </body>
   </html>
