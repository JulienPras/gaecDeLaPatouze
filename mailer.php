<?php

const RECAPTCHA_SECRET = "6Le-RW4UAAAAANy2b7-NI2hzG5S73tDCg7KJ25-u";
const RECAPTCHA_URL = "https://www.google.com/recaptcha/api/siteverify";
const RECEIVER_MAIL = "julien.pras@gmail.com";

$data = array(
    'secret' => RECAPTCHA_SECRET,
    'response' => $_POST["g-recaptcha-response"]
);
$options = array(
    'http' => array (
        'method' => 'POST',
        'content' => http_build_query($data)
    )
);
$context  = stream_context_create($options);
$verify = file_get_contents(RECAPTCHA_URL, false, $context);
$captchaSsuccess = json_decode($verify);

if ($captchaSsuccess->success == true)
{
    $name = $_REQUEST["name"];
    $subject = $_REQUEST["subject"];
    $message = $_REQUEST["message"];
    $from = $_REQUEST["from"];

    $name = stripslashes($name);
    $message = stripslashes($message);
    $subject = stripslashes($subject);
    $from = stripslashes($from);

    $message = "Name: ".$name."\n".$message;
    $message = "From: ".$from."\n".$message;
    $success = mail(RECEIVER_MAIL, 'Contact Gaec-de-la-Patouze.fr : '.$subject, $message, "From: $from");

    if($success)
    {
        header("Location:contact.php?error=0");
    }
    else
    {
        header("Location:contact.php?error=1");
    }
}
else
{
    header("Location:contact.php?error=2");
}
exit;