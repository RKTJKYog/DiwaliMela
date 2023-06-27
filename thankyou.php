<?php
	

	$title = "Welcome To DFW Diwali Mela - Contact Us";
	$meta_keywords = "";
	$meta_description = "Welcome To DFW Diwali Mela - Contact Us ";
	$body_id = "body_home";
	include('includes/top.php');
	include('includes/header.php');
	

?>
<script type="text/javascript">
function goBack() {
javascript: history.go(-1);
}
function timer() {
setTimeout("goBack()", 10000);
}
window.onload=timer;
</script>



<div class="section4">
  <div class="section4-left">
     <h1>Thank You</h1>
<p class="para1">
<?php
require_once 'Swift/lib/swift_required.php';
if(!empty($_POST)){
$name=$_POST['name'];
$email=$_POST['email'];
$message=$_POST['message'];



$transport =Swift_SmtpTransport::newInstance('in-v3.mailjet.com', 465, "ssl")
 ->setUsername('447de019d3612')
 ->setPassword('e28417ab185c');

$mess = " Here are the details:\n Name: $name \n Email: $email \n Message: $message \n\n\n Contact form submitted from dfwdiwalimela.com";
$subject="Contact form submitted from dfwdiwalimela.com";
$mailer = Swift_Mailer::newInstance($transport);
$message = Swift_Message::newInstance($subject)
	->setFrom(array('noreply@dfwdiwalimela.com' => 'DFWICS'))
	->setTo(array('test@yahoo.com' => 'DFWICS'))
	->setBody($mess);

$numSent = $mailer->send($message);
echo 'Thank you for Contacting us';
//error_log("===========ok".print_r($mess, true));
}else {
//error_log("===========error");
echo json_encode(array('status'=>'error'));
}

?>
</p>
<p class="para1">We will respond to you as soon as possiblle.<br />Sincerely, DFW ICS</p>
</div>
<div class="section4-right">
 <?php include('includes/rightcol.php');?>
</div>
</div>
<?php include('includes/footer.php');?>


