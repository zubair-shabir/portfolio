<?php 

	$name = $_POST["name"];
	$email = $_POST["email"];
	$mess = $_POST["message"];

	
	$to = 'zubairshabir980@gmail.com';

	$subject = 'Portfolio : People Who wants to contact you';

	$message = 'name ='.$name.'<br/> Email ='.$email.'<br> message = '.$mess;

	$headers = "From:".$email."\n";
	$headers .= "MIME-Version: 1.0\n";
	$headers .= "Content-type: text/html; charset=iso-8859-1\n"; 

	mail($to, $subject, $message, $headers);
	
	echo "Mail Sent Successfully";

 ?>
