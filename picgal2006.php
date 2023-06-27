<?php


	$title = "Welcome To DFW Diwali Mela - Gallery";
	$meta_keywords = "";
	$meta_description = "- ";
	$body_id = "body_home";
	include('includes/top.php');
	include('includes/header.php');

?>
<link rel="stylesheet" media="all" type="text/css" href="css/stunicholls.css">
<style type="text/css">
#stus-slideshow {width:500px; position:relative; height:370px; margin:0 auto;}
#nav {width:310px; height:48px; margin:0  auto;}
#nav img {display:block; float:left; margin:0 5px; display:inline;}
#nav h2 {width:130px; height:48px; line-height:45px; text-align:center; font-family:georgia, serif; color:#000; font-size:18px; font-weight:normal; padding:0; margin:0 5px; float:left; display:inline;}
#slideshow {width:450px; position:absolute; text-align:center; background:#000; padding:5px;}
#slideshow img {display:block; margin:0 auto; float:none;}
#slideshow .entry {position:absolute;display: none;margin:0 auto;}
.active9{text-decoration:none;
background: #F2EEE9; /* For browsers that do not support gradients */
background: -webkit-linear-gradient(top, #ffffff , #CCCCCC); /* For Safari 5.1 to 6.0 */
background: -o-linear-gradient(bottom, #ffffff, #CCCCCC); /* For Opera 11.1 to 12.0 */
background: -moz-linear-gradient(bottom, #ffffff, #CCCCCC); /* For Firefox 3.6 to 15 */
background: linear-gradient(to bottom, #ffffff , #CCCCCC); /* Standard syntax */
color:#AC1715!important;
position:relative;
border-top-left-radius:3px;
border-bottom-right-radius:5px;
</style>
<script type="text/javascript">
gallery = function() {
var current = 1;
var total = $('.entry').length;
$('.entry').hide();
$('#pic1').fadeIn('slow');
$('#imageNumber').html('1 of ' + total );
setHeight(1)


$('img.first').click(function(){
var prev  = 1;
if (current != 1) {
$('#pic' + current).fadeOut('slow');
setHeight(prev)
$('#pic' + prev).fadeIn('slow');
current = 1;
$('#imageNumber').html(current + ' of ' + total)
}
return false;
});


$('img.previous').click(function(){
var prev  = current - 1;
if (prev < 1) prev = 1;
if (current != 1) {
$('#pic' + current).fadeOut('slow');
$('#pic' + prev).fadeIn('slow');
current = prev;
setHeight(current)
$('#imageNumber').html(current + ' of ' + total)
}
return false;
});

$('img.next').click(function(){
var next = current + 1;
if (next > total) next = total;
if (current != total) {
$('#pic' + current).fadeOut('slow');
$('#pic' + next).fadeIn('slow');
current = next;
setHeight(current)
$('#imageNumber').html(current + ' of ' + total)
}
return false;
});

$('img.last').click(function(){
var next  = total;
if (current != total) {
$('#pic' + current).fadeOut('slow');
$('#pic' + next).fadeIn('slow');
current = total;
setHeight(current)
$('#imageNumber').html(current + ' of ' + total)
}
return false;
});

function setHeight(current) {
var entryHeight = $('#pic' + current).outerHeight() + 20;
$('#slideshow').animate({ height: entryHeight + 'px'}, 500 );
}

}
</script>
		
<div class="section5">
  <div class="section5-left">
   <h1>Diwali Photo Gallery-2006</h1>
    <h2>Photo Gallery</h2>
<div class="picgal_left">
<ul>
<li><a href="picgal.php" style="font-weight:bold; text-decoration:none; color:#000; font-size:15px;">2014</a></li>
<li><a href="picgal2013.php" style="font-weight:bold; text-decoration:none; color:#000; font-size:15px;">2013</a></li>
<li><a href="picgal2012.php" style="font-weight:bold; color:#000; text-decoration:none;  font-size:15px;">2012</a></li>
<li><a href="picgal2011.php" style="font-weight:bold; color:#000; text-decoration:none;  font-size:15px;">2011</a></li>
<li><a href="picgal2010.php" style="font-weight:bold; text-decoration:none; color:#000; font-size:15px;">2010</a></li>
<li><a href="picgal2008.php" style="font-weight:bold; text-decoration:none; color:#000; font-size:15px;">2008</a></li>
<li><a href="picgal2007.php" style="font-weight:bold; text-decoration:none;  color:#000; font-size:15px;">2007</a></li>
<li><a href="picgal2006.php" style="font-weight:bold; color:#000; font-size:15px;">2006 >></a></li>
</ul>


</div>

	<div id="stus-slideshow">
	   <div style="height: 316px; display: block;" id="slideshow">
	
		
		<div style="display: none;" id="pic1" class="entry"><img src="gallery/2006/DSC00130.jpg" alt="">
			
		</div>
		<div style="display: none;" id="pic3" class="entry"><img src="gallery/2006/DSC00084.jpg" alt="">
			
		</div>
		<div style="display: none;" id="pic4" class="entry"><img src="gallery/2006/DSC00086.jpg" alt="">
			
		</div>
		<div style="display: none;" id="pic5" class="entry"><img src="gallery/2006/DSC00088.jpg" alt="">
			
		</div>
		<div style="display: none;" id="pic6" class="entry"><img src="gallery/2006/DSC00089.jpg" alt="">
			
		</div>
		<div style="display: none;" id="pic7" class="entry"><img src="gallery/2006/DSC00093.jpg" alt="">
			
		</div>
		<div style="display: none;" id="pic8" class="entry"><img src="gallery/2006/DSC00095.jpg" alt="">
			
		</div>
		<div style="display: none;" id="pic9" class="entry"><img src="gallery/2006/DSC00096.jpg" alt="">
			
		</div>
		<div style="display: none;" id="pic10" class="entry"><img src="gallery/2006/DSC00100.jpg" alt="">
		</div>
		
		
		
		<div style="display: none;" id="pic11" class="entry"><img src="gallery/2006/DSC00101.jpg" alt="">
		</div>
		
		<div style="display: none;" id="pic12" class="entry"><img src="gallery/2006/DSC00106.jpg" alt="">
		</div>
		
		<div style="display: none;" id="pic13" class="entry"><img src="gallery/2006/DSC00114.jpg" alt="">
		</div>
		
		<div style="display: none;" id="pic14" class="entry"><img src="gallery/2006/DSC00115.jpg" alt="">
		</div>
		
		<div style="display: none;" id="pic15" class="entry"><img src="gallery/2006/DSC00118.jpg" alt="">
		</div>
		
		<div style="display: none;" id="pic16" class="entry"><img src="gallery/2006/DSC00129.jpg" alt="">
		</div>
		
		<div style="display: none;" id="pic17" class="entry"><img src="gallery/2006/DSC00083.jpg" alt="">
		</div>
		
		<div style="display: none;" id="pic18" class="entry"><img src="gallery/2006/DSC00138.jpg" alt="">
		</div>
		
		<div style="display: none;" id="pic19" class="entry"><img src="gallery/2006/DSC00142.jpg" alt="">
		</div>
		
		<div style="display: none;" id="pic20" class="entry"><img src="gallery/2006/DSC00144.jpg" alt="">
		
		</div>
		<div style="display: none;" id="pic21" class="entry"><img src="gallery/2006/DSC00146.jpg" alt="">
		
		</div>
		<div style="display: none;" id="pic22" class="entry"><img src="gallery/2006/DSC00151.jpg" alt="">
		
		</div>
		<div style="display: none;" id="pic23" class="entry"><img src="gallery/2006/DSC00153.jpg" alt="">
		</div>
		
		
		<div style="display: none;" id="pic24" class="entry"><img src="gallery/2006/DSC00154.jpg" alt="">
		</div>
		<div style="display: none;" id="pic25" class="entry"><img src="gallery/2006/DSC00155.jpg" alt="">
		</div>
		<div style="display: none;" id="pic26" class="entry"><img src="gallery/2006/DSC00156.jpg" alt="">
		</div>
		<div style="display: none;" id="pic27" class="entry"><img src="gallery/2006/DSC00157.jpg" alt="">
		</div>
		<div style="display: none;" id="pic28" class="entry"><img src="gallery/2006/DSC00161.jpg" alt="">
		</div>
		<div style="display: none;" id="pic29" class="entry"><img src="gallery/2006/DSC00167.jpg" alt="">
		</div>
		<div style="display: none;" id="pic30" class="entry"><img src="gallery/2006/DSC00169.jpg" alt="">
		</div>
		<div style="display: none;" id="pic31" class="entry"><img src="gallery/2006/DSC00178.jpg" alt="">
		</div>
		<div style="display: none;" id="pic32" class="entry"><img src="gallery/2006/DSC00184.jpg" alt="">
		</div>
		<div style="display: none;" id="pic33" class="entry"><img src="gallery/2006/DSC00189.jpg" alt="">
		</div>
		<div style="display: none;" id="pic34" class="entry"><img src="gallery/2006/DSC00190.jpg" alt="">
		</div>
		<div style="display: none;" id="pic35" class="entry"><img src="gallery/2006/DSC00198.jpg" alt="">
		</div>
		<div style="display: none;" id="pic36" class="entry"><img src="gallery/2006/DSC00199.jpg" alt="">
		</div>
		<div style="display: none;" id="pic37" class="entry"><img src="gallery/2006/DSC00208.jpg" alt="">
		</div>
		
		<div style="display: none;" id="pic38" class="entry"><img src="gallery/2006/DSC00210.jpg" alt="">
		</div>
		<div style="display: none;" id="pic39" class="entry"><img src="gallery/2006/DSC00214.jpg" alt="">
		</div>
		<div style="display: none;" id="pic40" class="entry"><img src="gallery/2006/DSC00216.jpg" alt="">
		</div>
		<div style="display: none;" id="pic41" class="entry"><img src="gallery/2006/DSC00217.jpg" alt="">
		</div>
		<div style="display: none;" id="pic42" class="entry"><img src="gallery/2006/DSC00222.jpg" alt="">
		</div>
		<div style="display: none;" id="pic43" class="entry"><img src="gallery/2006/DSC00228.jpg" alt="">
		</div>
		<div style="display: none;" id="pic44" class="entry"><img src="gallery/2006/DSC00232.jpg" alt="">
		</div>
		<div style="display: none;" id="pic45" class="entry"><img src="gallery/2006/DSC00233.jpg" alt="">
		</div>
		<div style="display: none;" id="pic46" class="entry"><img src="gallery/2006/DSC00235.jpg" alt="">
		</div>
		<div style="display: none;" id="pic47" class="entry"><img src="gallery/2006/DSC00238.jpg" alt="">
		</div>
		<div style="display: none;" id="pic48" class="entry"><img src="gallery/2006/DSC00239.jpg" alt="">
		</div>
		<div style="display: none;" id="pic49" class="entry"><img src="gallery/2006/DSC00250.jpg" alt="">
		</div>
		<div style="display: none;" id="pic50" class="entry"><img src="gallery/2006/DSC00251.jpg" alt="">
		</div>
		<div style="display: none;" id="pic51" class="entry"><img src="gallery/2006/DSC00254.jpg" alt="">
		</div>
		<div style="display: none;" id="pic52" class="entry"><img src="gallery/2006/DSC00256.jpg" alt="">
		</div>
		<div style="display: none;" id="pic53" class="entry"><img src="gallery/2006/DSC00257.jpg" alt="">
		</div>
		<div style="display: none;" id="pic54" class="entry"><img src="gallery/2006/DSC00260.jpg" alt="">
		</div>
		<div style="display: none;" id="pic55" class="entry"><img src="gallery/2006/DSC00262.jpg" alt="">
		</div>
		<div style="display: none;" id="pic56" class="entry"><img src="gallery/2006/DSC00266.jpg" alt="">
		</div>
		<div style="display: none;" id="pic57" class="entry"><img src="gallery/2006/DSC00270.jpg" alt="">
		</div>
		<div style="display: none;" id="pic58" class="entry"><img src="gallery/2006/DSC00272.jpg" alt="">
		</div>
		<div style="display: none;" id="pic59" class="entry"><img src="gallery/2006/DSC00274.jpg" alt="">
		</div>
		<div style="display: none;" id="pic60" class="entry"><img src="gallery/2006/DSC00277.jpg" alt="">
		</div>
		
		<div style="display: none;" id="pic61" class="entry"><img src="gallery/2006/DSC00284.jpg" alt="">
		</div>
		<div style="display: none;" id="pic62" class="entry"><img src="gallery/2006/DSC00286.jpg" alt="">
		</div>
		<div style="display: none;" id="pic63" class="entry"><img src="gallery/2006/DSC00290.jpg" alt="">
		</div>
		<div style="display: none;" id="pic64" class="entry"><img src="gallery/2006/DSC00292.jpg" alt="">
		</div>
		<div style="display: none;" id="pic65" class="entry"><img src="gallery/2006/DSC00295.jpg" alt="">
		</div>
		<div style="display: none;" id="pic66" class="entry"><img src="gallery/2006/DSC00298.jpg" alt="">
		</div>
		
		
		<div style="display: none;" id="pic67" class="entry"><img src="gallery/2006/DSC00298.jpg" alt="">
		</div>
		<div style="display: none;" id="pic68" class="entry"><img src="gallery/2006/DSC00298.jpg" alt="">
		</div>
		<div style="display: none;" id="pic69" class="entry"><img src="gallery/2006/DSC00298.jpg" alt="">
		</div>
		<div style="display: none;" id="pic70" class="entry"><img src="gallery/2006/DSC00298.jpg" alt="">
		</div>
		<div style="display: none;" id="pic71" class="entry"><img src="gallery/2006/DSC00298.jpg" alt="">
		</div>
		<div style="display: none;" id="pic72" class="entry"><img src="gallery/2006/DSC00298.jpg" alt="">
		</div>
		<div style="display: none;" id="pic73" class="entry"><img src="gallery/2006/DSC00298.jpg" alt="">
		</div>
		<div style="display: none;" id="pic74" class="entry"><img src="gallery/2006/DSC00298.jpg" alt="">
		</div>
		<div style="display: none;" id="pic75" class="entry"><img src="gallery/2006/DSC00299.jpg" alt="">
		</div>
		<div style="display: none;" id="pic76" class="entry"><img src="gallery/2006/DSC00300.jpg" alt="">
		</div>
		<div style="display: none;" id="pic77" class="entry"><img src="gallery/2006/DSC00304.jpg" alt="">
		</div>
		<div style="display: none;" id="pic78" class="entry"><img src="gallery/2006/DSC00305.jpg" alt="">
		</div>
		<div style="display: none;" id="pic79" class="entry"><img src="gallery/2006/DSC00307.jpg" alt="">
		</div>
		<div style="display: none;" id="pic80" class="entry"><img src="gallery/2006/DSC00308.jpg" alt="">
		</div>
		<div style="display: none;" id="pic81" class="entry"><img src="gallery/2006/DSC00313.jpg" alt="">
		</div>
		<div style="display: none;" id="pic82" class="entry"><img src="gallery/2006/DSC00315.jpg" alt="">
		</div>
		<div style="display: none;" id="pic83" class="entry"><img src="gallery/2006/DSC00317.jpg" alt="">
		</div>
		
		<div style="display: none;" id="pic84" class="entry"><img src="gallery/2006/DSC00318.jpg" alt="">
		</div>
		<div style="display: none;" id="pic85" class="entry"><img src="gallery/2006/DSC00319.jpg" alt="">
		</div>
		<div style="display: none;" id="pic86" class="entry"><img src="gallery/2006/DSC00321.jpg" alt="">
		</div>
		<div style="display: none;" id="pic87" class="entry"><img src="gallery/2006/DSC00322.jpg" alt="">
		</div>
		<div style="display: none;" id="pic88" class="entry"><img src="gallery/2006/DSC00323.jpg" alt="">
		</div>
		<div style="display: none;" id="pic89" class="entry"><img src="gallery/2006/DSC00330.jpg" alt="">
		</div>
		<div style="display: none;" id="pic90" class="entry"><img src="gallery/2006/DSC00334.jpg" alt="">
		</div>
		<div style="display: none;" id="pic100" class="entry"><img src="gallery/2006/DSC00338.jpg" alt="">
		</div>
		<div style="display: none;" id="pic101" class="entry"><img src="gallery/2006/DSC00376.jpg" alt="">
		</div>
		
		<div style="display: none;" id="pic102" class="entry"><img src="gallery/2006/DSC00385.jpg" alt="">
		</div>
		<div style="display: none;" id="pic103" class="entry"><img src="gallery/2006/DSC00390.jpg" alt="">
		</div>
		<div style="display: none;" id="pic104" class="entry"><img src="gallery/2006/DSC00394.jpg" alt="">
		</div>
		<div style="display: none;" id="pic105" class="entry"><img src="gallery/2006/photo002.jpg" alt="">
		</div>
		<div style="display: none;" id="pic106" class="entry"><img src="gallery/2006/photo003.jpg" alt="">
		</div>
				<div style="display: none;" id="pic107" class="entry"><img src="gallery/2006/photo004.jpg" alt="">
		</div>
				<div style="display: none;" id="pic108" class="entry"><img src="gallery/2006/photo005.jpg" alt="">
		</div>
				<div style="display: none;" id="pic109" class="entry"><img src="gallery/2006/photo006.jpg" alt="">
		</div>
		
		<div style="display: none;" id="pic110" class="entry"><img src="gallery/2006/photo7.jpg" alt="">
		</div>

	</div>
</div>
	<div id="nav">
		<img class="previous" src="images/previous.gif" alt="Previous">
		<h2 id="imageNumber">1 of 19</h2> 
		<img class="next" src="images/next.gif" alt="Next">
	
	</div>
	<script src="js/urchin.js" type="text/javascript">
	</script>
	<script type="text/javascript">
	_uacct = "UA-451410-2";
	urchinTracker();
	</script>
</div>
	<div class="section5-right">
   <?php include('includes/rightcol.php');?>
  </div>

</div>	
<?php include('includes/footer.php');?>




