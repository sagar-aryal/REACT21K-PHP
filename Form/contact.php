<?php

$fullname = $email = $phone = $message = "";
$fullname_error = $email_error = $phone_error = $status = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    //fullname valadation

    if (empty($_POST['fullname'])) {
        $fullname_error = 'Name is required';
    } 
    else {
        $fullname = ($_POST['fullname']);

        if ((!preg_match("/^[a-zA-Z ]*$/",$fullname))) {
            $fullname_error = 'Please input a valid fullname';

        }
    }

    //email address validation

    
    if (empty($_POST['email'])) {
        $email_error = 'Email address is required';

    } 
    else {
        $email = ($_POST['email']);

        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $email_error = 'Please input a valid email address';

        }
    }

    //phone number validation

    if (empty($_POST['phone'])) {
        $phone_error = 'Phone number is required';

    } 
    else {
        $phone = ($_POST['phone']);

        if (!preg_match("/^(\d[\s-]?)?[\(\[\s-]{0,2}?\d{3}[\)\]\s-]{0,2}?\d{3}[\s-]?\d{4}$/i",$phone)){
            $phone_error = 'Please input a valid phone number';

        }
    }

    $message = $_POST['message'];

    if ($fullname_error == '' && $email_error == '' && $phone_error == '') {

        $subject = "New Form Submission";
        $email_to = 'sagar_yal92@yahoo.com';

        $send_mail = mail($email_to, $subject, $message);

        if($send_mail){
        $status = 'Message send, Thank you';
        $fullname =$email = $phone = $message = '';
    }

    }
}




?>