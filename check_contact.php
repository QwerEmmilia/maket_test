<?php
    session_start();

    unset($_SESSION['user_name']);
    unset($_SESSION['email']);
    unset($_SESSION['subject']);
    unset($_SESSION['message']);

    unset($_SESSION['error_username']);
    unset($_SESSION['error_email']);
    unset($_SESSION['error_subject']);
    unset($_SESSION['error_message']);

    function redirect() {
        header('Location: contact.php');
        exit;
    }
     $user_name = htmlspecialchars(trim($_POST["username"]));
    $from = htmlspecialchars(trim($_POST["email"]));
    $subject = htmlspecialchars(trim($_POST["subject"]));
    $message = htmlspecialchars(trim($_POST["message"]));

    $_SESSION['user_name'] = $user_name;
    $_SESSION['email'] = $from;
    $_SESSION['subject'] = $subject;
    $_SESSION['message'] = $message;

    if(strlen($user_name) <= 1) {
        $_SESSION['error_username'] = "Ведіть вірне ім'я";
        redirect();
    }
    else if(strlen($from) < 5 || strpos($from, "@") == false) {
        $_SESSION['error_email'] = "Ви вели невірно email";
        redirect();
    }
    else if(strlen($subject) <= 5) {
        $_SESSION['error_subject'] = "Тема повідомлення не меньше 5 символів";
        redirect();
    }
    else if(strlen($message) <= 15) {
        $_SESSION['error_message'] = "Тема повідомлення не меньше 15 символів";
        redirect();
    }
    else {
        $subject = "=?utf-8?B?" . base64_encode($subject) . "?=";
        $headers = "From: $from\r\nReply-to: $from\r\nContent-type:text/plain; charset=urf-8\r\n";
        mail("admnn@gmail.com", $subject, $message, $headers);
        $_SESSION['success_mail'] = "Ви відправили повідомлення";
        redirect();
    }
?>