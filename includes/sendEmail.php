<?php

function send_email(){

    if(empty($_POST['email'])){
        header('Location:/index.php?status=error');
        exit();
    }

    if(!isset($_POST['message']) || !isset($_POST['email'])){
        header('Location:/index.php');
        exit();
    }

    $to = 'daniellebutters37@gmail.com';
    $subject = 'Email: daniellebutters.ca';
    $message = 'Message Body:'.$_POST['message'];
    $headers = 'From: noreply@daniellebutters.ca'.'/r/n';
    $headers .= 'Reply-To:'.$_POST['email'];

    if(mail($to, $subject, $message, $headers)){
        header('Location:/index.php?status=successful'); 
    }
    
    var_dump($_POST);
}

    send_email();

    
    
?>