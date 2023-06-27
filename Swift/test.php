<?php

require_once 'lib/swift_required.php';

//Create the Transport
// Connect to local smtp server on port 25...?
$transport = Swift_SmtpTransport::newInstance('localhost', 25);

/*
   You could alternatively use a different transport such as Sendmail or Mail:

//Sendmail

//Mail
$transport = Swift_MailTransport::newInstance();
 */

if (! isset($_SERVER['SERVER_NAME'])) {
  $_SERVER['SERVER_NAME'] = "infinitemassage.com";
}
// $transport = Swift_SendmailTransport::newInstance('/usr/sbin/sendmail -bs');

//Create the Mailer using your created Transport
$mailer = Swift_Mailer::newInstance($transport);

//Create a message
$message = Swift_Message::newInstance('Milton test smtp from apache')
->setFrom(array('info@infinitemassage.com' => 'Infinite Massage Again'))
->setTo(array('root@localhost' => 'Infinite Massage Root' ))
->setBody('Test of receiving mail at root');
;

//Send the message
$result = $mailer->send($message);

/*
   You can alternatively use batchSend() to send the message

   $result = $mailer->batchSend($message);
*/


