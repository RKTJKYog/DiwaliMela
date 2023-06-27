<meta http-equiv="cache-control" content="no-cache">
<meta http-equiv="pragma" content="no-cache">
<meta http-equiv="expires" content="0">

<script>
var originalNavClasses;
function toggleNav() {
var elem = document.getElementById('navigation_list');
var classes = elem.className;
if (originalNavClasses === undefined) {
originalNavClasses = classes;
}
elem.className = /expanded/.test(classes) ? originalNavClasses : originalNavClasses + ' expanded';
}
</script>
<div class="sponsor-left">
    <a href="sponsors.php"><img src="images/new/sponsors.png" style="box-shadow: 0px 0px 10px rgb(0,0,0, 0.3); border-radius: 5px;"></a>
</div>

  <div class="top_banner">
    <img src="images/new/header.jpg?<?php echo time(); ?>" alt="DFWICS Diwali Mela" >

   </div>
    <div id="navigation">
      <a class="menu_button" href="#footer_nav" onclick="toggleNav(); return false;"><img src="images/icon-menu.png" alt="menu" width="15px" height="auto" style="margin-left:10px;"/>MENU</a>
      <ul id="navigation_list" role="navigation">
	<li><a href="index.php" class="active1">HOME</a></li>
	<li><a href="http://www.dfwics.org" target="_blank" class="active2">DFWICS</a></li>
	<li><a href="dwm11.php" class="active3">DIWALI</a></li>
    <li><a href="sponsors.php" class="active4">SPONSORSHIP</a></li>
	<li><a href="ticket-info.php" class="active5">TICKET INFO</a></li>
	<li><a href="boothinfo.php" class="active6">BOOTH INFO</a></li>
	<li><a href="ramlila.php" class="active12">RAMLILA</a></li>
	<li><a href="commperf.php" class="active7">COMMUNITY PERFORMANCES</a></li>
    <li><a href="raffle.php" class="active8">RAFFLE</a></li>
	<li><a href="picgal.php" class="active9">GALLERY</a></li>
	<li><a href="faq.php" class="active10">FAQ</a></li>
	<li><a href="contact-us.php" class="active11">CONTACT US</a></li>
	<li><a href="/pdf/Diwali-Mela-VIP-Parking-Map-2015.pdf" target="_blank" class="active13">VENUE</a></li>
	
	  </ul>
    </div>




