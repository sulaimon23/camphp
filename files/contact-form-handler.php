<?php 
if(isset($_POST['submit'])){
    $to = "tsulaimon96@gmail.com"; // this is your Email address
    $from = $_POST['tsulaimon21@yahoo.com']; // this is the sender's Email address
    $first_name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $subject = $_POST['message'];
    $subject2 = "Copy of your form submission";
    $message = $first_name . " " . $phone . " " . $email . " wrote the following:" . "\n\n" . $_POST['message'];
    $message2 = "Here is a copy of your message " . $first_name . "\n\n" . $_POST['message'];

    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    mail($to,$subject,$message,$headers);
    mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
    // echo "Mail Sent. Thank you " . $first_name . ", we will contact you shortly.";
    header('Location: third.html');
    // You cannot use header and echo together. It's one or the other.
    }
?>