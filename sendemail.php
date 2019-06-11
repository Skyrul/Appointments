<?php
error_reporting(E_ALL ^ E_NOTICE ^ E_DEPRECATED ^ E_STRICT);

set_include_path("." . PATH_SEPARATOR . ($UserDir = dirname($_SERVER['DOCUMENT_ROOT'])) . "/pear/php" . PATH_SEPARATOR . get_include_path());

require_once "Mail.php";

if (isset($_POST['taction'])) {
    if ($_POST['taction'] == 'sendemail') {
        // BEGIN: ****** SEND EMAIL ******
        //       Send email to jim.campbell@engagex.com


        $username = 'jovenb@engagexappointments.com';
        $password = 'jb1234';
        $smtpHost = 'mail.engagexappointments.com';
        $smtpPort = '25';
        //$to = 'jovenbarola@gmail.com';
        $to = 'jim.campbell@engagex.com';
        //$to = 'campbell10@gmail.com';
        $from =  'Engagexappointments';

        $subject = 'Engagexappointments.com Contact form submission';
        $successMessage = 'Message successfully sent!';


        $replyTo = '';
        $name = '';
        // $body = 'Sample body';
        $body = '<table>';
        
        $body .= '<tr>';
        $body .= '<td>Name</td>';
        $body .= '<td>'. $_POST['tname'] .'</td>';
        $body .= '</tr>';
        
        $body .= '<tr>';
        $body .= '<td>Company</td>';
        $body .= '<td>'. $_POST['tcompany'] .'</td>';
        $body .= '</tr>';

        $body .= '<tr>';
        $body .= '<td>Email Address</td>';
        $body .= '<td>'. $_POST['temail'] .'</td>';
        $body .= '</tr>';

        
        $body .= '<tr>';
        $body .= '<td>Phone Number</td>';
        $body .= '<td>'. $_POST['tphone'] .'</td>';
        $body .= '</tr>';

        $body .= '<tr>';
        $body .= '<td>Return Call Date/Time</td>';
        $body .= '<td>'. $_POST['tdate'] .'  / '. $_POST['tdate'] .'</td>';
        $body .= '</tr>';

        $body .= '<tr>';
        $body .= '<td>Notes</td>';
        $body .= '<td>'. $_POST['tnotes'] .'</td>';
        $body .= '</tr>';
        $body .= '</table>';


        $headers = array(
            'From' => $name . " <" . $from . ">",
            'To' => $to,
            'Subject' => $subject,
            'MIME-Version' => '1.0',
            'Content-type' => 'text/html; charset=utf-8'
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
    }
    // ****** SEND EMAIL ******

} else {
    echo 'Invalid action';
}
?>
