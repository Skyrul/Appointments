<?php
//phpinfo();
//exit;
// the message
//$msg = "First line of text\nSecond line of text";

// use wordwrap() if lines are longer than 70 characters
// $msg = wordwrap($msg,70);

// send email
//mail("jovenbarola@gmail.com","Test Engagexappointments.com",$msg);

//mail("jim.campbell@engagex.com","Test Engagexappointments.com",$msg);

error_reporting(E_ALL ^ E_NOTICE ^ E_DEPRECATED ^ E_STRICT);

set_include_path("." . PATH_SEPARATOR . ($UserDir = dirname($_SERVER['DOCUMENT_ROOT'])) . "/pear/php" . PATH_SEPARATOR . get_include_path());

require_once "Mail.php";

$username = 'jovenb@engagexappointments.com';
$password = 'jb1234';
//$smtpHost = 'mail.engagex-mail.com';
$smtpHost = 'mail.engagexappointments.com';
$smtpPort = '25';
//$to = 'jovenbarola@gmail.com';
//$to = 'jim.campbell@engagex.com';
$to = 'campbell10@gmail.com';
$from =  'Engagexappointments';

$subject = 'Engagexappointments Subject';
$successMessage = 'Message successfully sent!';


$replyTo = '';
$name = '';
$body = 'Im only test email';


$headers = array(
    'From' => $name . " <" . $from . ">",
    'To' => $to,
    'Subject' => $subject
);
$smtp = Mail::factory('smtp', array(
            'host' => $smtpHost,
            'port' => $smtpPort,
            'auth' => true,
            'username' => $username,
            'password' => $password
        ));

$mail = $smtp->send($to, $headers, $body);

if (PEAR::isError($mail)) {
    echo($mail->getMessage());
} else {
    echo($successMessage);
}
?>

