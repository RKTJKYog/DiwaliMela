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
$email=$_POST['email'];



$transport =Swift_SmtpTransport::newInstance('in-v3.mailjet.com', 465, "ssl")
 ->setUsername('447de019d3612c696dadcc45fff180c3')
 ->setPassword('e28417ab185cc32001f16085cb792012');

$mess = " Here are the details:\n Email: $email \n\n\n Newsletter form submitted from dfwdiwalimela.com";
$subject="Newsletter form submitted from dfwdiwalimela.com";
$mailer = Swift_Mailer::newInstance($transport);
$message = Swift_Message::newInstance($subject)
	->setFrom(array('noreply@dfwdiwalimela.com' => 'DFWICS'))
	->setTo(array('dfwdiwalimela@yahoo.com' => 'DFWICS'))
	//->setTo(array('rahul.gupta@snssystem.com' => 'DFWICS'))
	->setBody($mess);

$numSent = $mailer->send($message);
echo 'Thank you for Submitting your email.';
//error_log("===========ok".print_r($mess, true));
}else {
//error_log("===========error");
echo json_encode(array('status'=>'error'));
}

?>
</p>
<p class="para1">Sincerely, DFW ICS</p>
</div>
<div class="section4-right">
 <?php include('includes/rightcol.php');?>
</div>
</div>
<?php include('includes/footer.php');?>


