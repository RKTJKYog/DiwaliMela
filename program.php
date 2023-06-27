<?php
	$title = "Welcome To DFW Diwali Mela";
	$meta_keywords = "";
	$meta_description = "- ";
	$body_id = "body_home";
	include('includes/top.php');
	include('includes/header.php');
?>

<div class="section4">
  <div class="section4-left">
   <h1>Event Poster</h1>
    <!--<p class="flayer"><iframe src="pdf/flayer.pdf#zoom=62"></iframe></p>-->
<p class="flayer"><img src="images/new/flyer-2019.gif?<?php echo time(); ?>" alt="DFW ICS DIWALI MELA 2019" style="max-width:100%;"></p>
  </div>

  <div class="section4-right">
   <?php include('includes/rightcol.php');?>
  </div>
 
</div>
<?php include('includes/footer.php');?>



