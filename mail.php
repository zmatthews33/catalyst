<?php
    $to = 'chelsea@catalystptp.com'; //Server needed? node mailer and twilio
    $firstname = $_POST["fname"];
    $phone= $_POST["phone"];
    $email= $_POST["email"];
    $call=$_POST["15mincall"];
    $pain=$_POST["pain"];
    $message= $_POST["message"];
    


    $headers = 'MIME-Version: 1.0' . "\r\n";
    $headers .= "From: " . $email . "\r\n"; // Sender's E-mail
    $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

    $message ='<table style="width:100%">
        <tr><td>'.$firstname.'</td></tr>
        <tr><td>Subject: '.$subject.'</td></tr>
        <tr><td>Email: '.$email.'</td></tr>
        <tr><td>15 min. call?: '.$call.'</td></tr>
        <tr><td>How long has the problem been going on?: '.$pain.'</td></tr>
        <tr><td>Message: '.$message.'</td></tr>
    </table>';

    if (@mail($to, $email, $message, $headers))
    {
        echo 'The message has been sent.';
    }else{
        echo 'Message failed. Please try again.';
    }

?>
