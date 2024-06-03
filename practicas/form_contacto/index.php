<?php

$errores = "";
$sendit = "";

if(isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $name = $_POST['message'];

    if(!empty($name)) {
        $name = trim($name);

    } else {
        $errores .= 'Please add a name <br />';
    }

    if(!empty($email)) {
        $email = filter_var($email, FILTER_SANITIZE_EMAIL);


    } else {
        $errores .= 'Please add an email <br />';
    }

    if(!empty($message)) {
        $message = htmlspecialchars($message);
        $message = trim($message);
        $message = stripcslashes($message);
    } else {
        $errores .= 'Please add a message <br /> ';
    }

    if(!$errores) {
         $sendto = 'name@email.com';
         $topic = 'email sent from form.com';
         $message_prep = "From: $name \n";
         $message_prep .= "Mail: $email \n";
         $message_prep .= "Message: " . $message;

         //mail($sendto, $topic, $message_prep);
         $sent = 'true';
    }
}



require 'index.view.php';

?>