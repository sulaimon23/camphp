<?php 
//Mail sending function
$subject = $_POST['name'];
$to = $_POST['tsulaimon21@yahoo.com'];
$from = "tsulaimon96@gail.com";

//data
$msg = "Your MSG <br>\n";       

//Headers
$headers  = "MIME-Version: 1.0\r\n";
$headers .= "Content-type: text/html; charset=UTF-8\r\n";
$headers .= "From: <".$from. ">" ;

mail($to,$subject,$msg,$headers);
echo "Mail Sent.";
?>