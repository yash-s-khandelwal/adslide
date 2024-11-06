<?php
    // using Post method to get data from 'FORM'
    $name = filter_input(INPUT_POST, 'name');
    $email = filter_input(INPUT_POST, 'email');
    $phone = filter_input(INPUT_POST, 'phone');
    $msg = filter_input(INPUT_POST, 'message');

    // require send_mail.php file for sending mail.
    include("send_mail.php");
?>