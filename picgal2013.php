<?php
	$title = "Welcome To DFW Diwali Mela - Gallery";
	$meta_keywords = "";
	$meta_description = "- ";
	$body_id = "body_home";
	include('includes/top.php');
	include('includes/header.php');
	//include('includes/rightcolumn.php');

?>
<style type="text/css">
#stus-slideshow {width:500px; position:relative; height:330px; margin:0 auto;}
#nav {width:310px; height:48px; margin:0 auto;}
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
}
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
   <h1>Diwali Photo Gallery-2013</h1>
    <h2>Photo Gallery</h2>
     <div class="picgal_left">
<ul>
<li><a href="picgal.php" style="font-weight:bold; text-decoration:none; color:#000; font-size:15px;">2014</a></li>
<li><a href="picgal2013.php" style="font-weight:bold; color:#000; font-size:15px;">2013 >></a></li>
<li><a href="picgal2012.php" style="font-weight:bold; text-decoration:none; color:#000; font-size:15px;">2012</a></li>
<li><a href="picgal2011.php" style="font-weight:bold; text-decoration:none; color:#000; font-size:15px;">2011</a></li>
<li><a href="picgal2010.php" style="font-weight:bold; text-decoration:none; color:#000; font-size:15px;">2010</a></li>
<li><a href="picgal2008.php" style="font-weight:bold; text-decoration:none; color:#000; font-size:15px;">2008</a></li>
<li><a href="picgal2007.php" style="font-weight:bold; text-decoration:none; color:#000; font-size:15px;">2007</a></li>
<li><a href="picgal2006.php" style="font-weight:bold; text-decoration:none; color:#000; font-size:15px;">2006</a></li>
	
	
</ul>


</div>

	<div id="stus-slideshow">
	

	<div style="height: 316px; display: block;" id="slideshow">
	
		<div style="display: none;" id="pic1" class="entry"><img src="gallery/2013/25.png" alt="sd">
			</div>
		<div style="display: none;" id="pic2" class="entry"><img src="gallery/2013/2.png" alt="">
			
		</div>
		<div style="display: none;" id="pic3" class="entry"><img src="gallery/2013/3.png" alt="">
			
		</div>
		<div style="display: none;" id="pic4" class="entry"><img src="gallery/2013/4.png" alt="">
			
		</div>
		<div style="display: none;" id="pic5" class="entry"><img src="gallery/2013/5.png" alt="">
			
		</div>
		<div style="display: none;" id="pic6" class="entry"><img src="gallery/2013/6.png" alt="">
			
		</div>
		<div style="display: none;" id="pic7" class="entry"><img src="gallery/2013/7.png" alt="">
			
		</div>
		<div style="display: none;" id="pic8" class="entry"><img src="gallery/2013/8.png" alt="">
			
		</div>
		<div style="display: none;" id="pic9" class="entry"><img src="gallery/2013/9.png" alt="">
			
		</div>
		<div style="display: none;" id="pic10" class="entry"><img src="gallery/2013/10.png" alt="">
		</div>
		
		
		
		<div style="display: none;" id="pic11" class="entry"><img src="gallery/2013/11.png" alt="">
		</div>
		
		<div style="display: none;" id="pic12" class="entry"><img src="gallery/2013/12.png" alt="">
		</div>
		
		<div style="display: none;" id="pic13" class="entry"><img src="gallery/2013/13.png" alt="">
		</div>
		
		
		<div style="display: none;" id="pic14" class="entry"><img src="gallery/2013/14.png" alt="">
		</div>
		<div style="display: none;" id="pic15" class="entry"><img src="gallery/2013/15.png" alt="">
		</div>
		<div style="display: none;" id="pic16" class="entry"><img src="gallery/2013/16.png" alt="">
		</div>
		<div style="display: none;" id="pic17" class="entry"><img src="gallery/2013/17.png" alt="">
		</div>
		<div style="display: none;" id="pic18" class="entry"><img src="gallery/2013/18.png" alt="">
		</div>
		<div style="display: none;" id="pic19" class="entry"><img src="gallery/2013/19.png" alt="">
		</div>
		<div style="display: none;" id="pic20" class="entry"><img src="gallery/2013/20.png" alt="">
		</div>
		<div style="display: none;" id="pic21" class="entry"><img src="gallery/2013/21.png" alt="">
		</div>
		<div style="display: none;" id="pic22" class="entry"><img src="gallery/2013/22.png" alt="">
		</div>
		<div style="display: none;" id="pic23" class="entry"><img src="gallery/2013/23.png" alt="">
		</div>
		<div style="display: none;" id="pic24" class="entry"><img src="gallery/2013/24.png" alt="">
		</div>
		<div style="display: none;" id="pic25" class="entry"><img src="gallery/2013/1.png" alt="">
		</div>
		<div style="display: none;" id="pic26" class="entry"><img src="gallery/2013/26.png" alt="">
		</div>
		<div style="display: none;" id="pic27" class="entry"><img src="gallery/2013/27.png" alt="">
		</div>
		<div style="display: none;" id="pic28" class="entry"><img src="gallery/2013/28.png" alt="">
		</div>
		<div style="display: none;" id="pic29" class="entry"><img src="gallery/2013/29.png" alt="">
		</div>
		<div style="display: none;" id="pic30" class="entry"><img src="gallery/2013/30.png" alt="">
		</div>
		
		<div style="display: none;" id="pic31" class="entry"><img src="gallery/2013/31.png" alt="">
		</div>
		<div style="display: none;" id="pic32" class="entry"><img src="gallery/2013/32.png" alt="">
		</div>
		<div style="display: none;" id="pic33" class="entry"><img src="gallery/2013/33.png" alt="">
		</div>
		<div style="display: none;" id="pic34" class="entry"><img src="gallery/2013/34.png" alt="">
		</div>
		<div style="display: none;" id="pic35" class="entry"><img src="gallery/2013/35.png" alt="">
		</div>
		<div style="display: none;" id="pic36" class="entry"><img src="gallery/2013/36.png" alt="">
		</div>
		<div style="display: none;" id="pic37" class="entry"><img src="gallery/2013/37.png" alt="">
		</div>
		<div style="display: none;" id="pic38" class="entry"><img src="gallery/2013/38.png" alt="">
		</div>
		<div style="display: none;" id="pic39" class="entry"><img src="gallery/2013/39.png" alt="">
		</div>
		
		<div style="display: none;" id="pic40" class="entry"><img src="gallery/2013/40.png" alt="">
		</div>
		
		<div style="display: none;" id="pic41" class="entry"><img src="gallery/2013/41.png" alt="">
		</div>
		<div style="display: none;" id="pic42" class="entry"><img src="gallery/2013/42.png" alt="">
		</div>
		<div style="display: none;" id="pic43" class="entry"><img src="gallery/2013/43.png" alt="">
		</div>
		<div style="display: none;" id="pic44" class="entry"><img src="gallery/2013/44.png" alt="">
		</div>
		<div style="display: none;" id="pic45" class="entry"><img src="gallery/2013/45.png" alt="">
		</div>
		<div style="display: none;" id="pic46" class="entry"><img src="gallery/2013/46.png" alt="">
		</div>
		<div style="display: none;" id="pic47" class="entry"><img src="gallery/2013/47.png" alt="">
		</div>
		<div style="display: none;" id="pic48" class="entry"><img src="gallery/2013/48.png" alt="">
		</div>
		<div style="display: none;" id="pic49" class="entry"><img src="gallery/2013/49.png" alt="">
		</div>
		<div style="display: none;" id="pic50" class="entry"><img src="gallery/2013/50.png" alt="">
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



