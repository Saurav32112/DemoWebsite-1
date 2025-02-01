<?php
if($_POST){

$contact = $_POST['phno'];
 
$headers = "Content-type: text/html; charset=iso-8859-1" . "\r\n";
$headers .= "From: AnimotionsZ@noreply.in" . "\r\n";
$headers .= "Reply-To: AnimotionsZ@noreply.in" . "\r\n" .
"Bcc: " . "\r\n" .
"X-Mailer: PHP/" . phpversion();


$to  = "animotionsz@gmail.com, sarang@animotionsz.com," ;

$subject = "AnimotionsZ Requestcall back"; 

$message .= " Contact : ". $contact."<br>";
  

if(mail($to,$subject,$message,$headers)){ 
  header("Location:thankyou.php");
  
}else{
  echo "Mail was not sent!";
}

}


?>