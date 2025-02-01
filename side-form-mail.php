<?php
if($_POST){

 $name = $_POST['name'];	
 $email = $_POST['email']; 
 $contact = $_POST['mobile'];
 $desc = $_POST['message'];


 
$headers = "Content-type: text/html; charset=iso-8859-1" . "\r\n";
$headers .= "From: AnimotionsZ@noreply.in" . "\r\n";
$headers .= "Reply-To:AnimotionsZ@noreply.in" . "\r\n" .

"X-Mailer: PHP/" . phpversion();


$to  = "animotionsz@gmail.com,sarang@animotionsz.com" ;

$subject = "AnimotionsZ Enquiry Form"; 

$message .= " Name : ". $name."<br>";
$message .= " Email : ". $email."<br>";
$message .= " Contact : ". $contact."<br>";
$message .= " Comments : ". $desc."<br>";
  

 
 
if(mail($to,$subject,$message,$headers)){ 
  header("Location:thankyou.php");
  
}else{
  echo "Mail was not sent!";
}

}


?>