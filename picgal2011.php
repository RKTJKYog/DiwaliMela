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
   <h1>Diwali Photo Gallery-2011</h1>
    <h2>Photo Gallery</h2>
     <div class="picgal_left">
	<ul>
	<li><a href="picgal.php" style="font-weight:bold; text-decoration:none; color:#000; font-size:15px;">2014</a></li>
	<li><a href="picgal2013.php" style="font-weight:bold; text-decoration:none; color:#000; font-size:15px;">2013</a></li>
	<li><a href="picgal2012.php" style="font-weight:bold; color:#000; text-decoration:none;  font-size:15px;">2012</a></li>
	<li><a href="picgal2011.php" style="font-weight:bold; color:#000; font-size:15px;">2011 >></a></li>
	<li><a href="picgal2010.php" style="font-weight:bold; text-decoration:none; color:#000; font-size:15px;">2010</a></li>
	<li><a href="picgal2008.php" style="font-weight:bold; text-decoration:none; color:#000; font-size:15px;">2008</a></li>
	<li><a href="picgal2007.php" style="font-weight:bold; text-decoration:none; color:#000; font-size:15px;">2007</a></li>
	<li><a href="picgal2006.php" style="font-weight:bold; text-decoration:none; color:#000; font-size:15px;">2006</a></li>
       </ul>
	</div>

	<div id="stus-slideshow">
	<div style="height: 316px; display: block;" id="slideshow">
	
		<div style="display: none;" id="pic1" class="entry"><img src="gallery/2011/25.jpg" alt="sd">
			</div>
		<div style="display: none;" id="pic2" class="entry"><img src="gallery/2011/2.jpg" alt="">
			
		</div>
		<div style="display: none;" id="pic3" class="entry"><img src="gallery/2011/3.jpg" alt="">
			
		</div>
		<div style="display: none;" id="pic4" class="entry"><img src="gallery/2011/4.jpg" alt="">
			
		</div>
		<div style="display: none;" id="pic5" class="entry"><img src="gallery/2011/5.jpg" alt="">
			
		</div>
		<div style="display: none;" id="pic6" class="entry"><img src="gallery/2011/6.jpg" alt="">
			
		</div>
		<div style="display: none;" id="pic7" class="entry"><img src="gallery/2011/7.jpg" alt="">
			
		</div>
		<div style="display: none;" id="pic8" class="entry"><img src="gallery/2011/8.jpg" alt="">
			
		</div>
		<div style="display: none;" id="pic9" class="entry"><img src="gallery/2011/9.jpg" alt="">
			
		</div>
		<div style="display: none;" id="pic10" class="entry"><img src="gallery/2011/10.jpg" alt="">
		</div>
		
		
		
		<div style="display: none;" id="pic11" class="entry"><img src="gallery/2011/11.jpg" alt="">
		</div>
		
		<div style="display: none;" id="pic12" class="entry"><img src="gallery/2011/12.jpg" alt="">
		</div>
		
		<div style="display: none;" id="pic13" class="entry"><img src="gallery/2011/13.jpg" alt="">
		</div>
		
		
		<div style="display: none;" id="pic14" class="entry"><img src="gallery/2011/14.jpg" alt="">
		</div>
		<div style="display: none;" id="pic15" class="entry"><img src="gallery/2011/15.jpg" alt="">
		</div>
		<div style="display: none;" id="pic16" class="entry"><img src="gallery/2011/16.jpg" alt="">
		</div>
		<div style="display: none;" id="pic17" class="entry"><img src="gallery/2011/17.jpg" alt="">
		</div>
		<div style="display: none;" id="pic18" class="entry"><img src="gallery/2011/18.jpg" alt="">
		</div>
		<div style="display: none;" id="pic19" class="entry"><img src="gallery/2011/19.jpg" alt="">
		</div>
		<div style="display: none;" id="pic20" class="entry"><img src="gallery/2011/20.jpg" alt="">
		</div>
		<div style="display: none;" id="pic21" class="entry"><img src="gallery/2011/21.jpg" alt="">
		</div>
		<div style="display: none;" id="pic22" class="entry"><img src="gallery/2011/22.jpg" alt="">
		</div>
		<div style="display: none;" id="pic23" class="entry"><img src="gallery/2011/23.jpg" alt="">
		</div>
		<div style="display: none;" id="pic24" class="entry"><img src="gallery/2011/24.jpg" alt="">
		</div>
		<div style="display: none;" id="pic25" class="entry"><img src="gallery/2011/1.jpg" alt="">
		</div>
		<div style="display: none;" id="pic26" class="entry"><img src="gallery/2011/26.jpg" alt="">
		</div>
		<div style="display: none;" id="pic27" class="entry"><img src="gallery/2011/27.jpg" alt="">
		</div>
		<div style="display: none;" id="pic28" class="entry"><img src="gallery/2011/28.jpg" alt="">
		</div>
		<div style="display: none;" id="pic29" class="entry"><img src="gallery/2011/29.jpg" alt="">
		</div>
		<div style="display: none;" id="pic30" class="entry"><img src="gallery/2011/30.jpg" alt="">
		</div>
		
		<div style="display: none;" id="pic31" class="entry"><img src="gallery/2011/31.jpg" alt="">
		</div>
		<div style="display: none;" id="pic32" class="entry"><img src="gallery/2011/32.jpg" alt="">
		</div>
		<div style="display: none;" id="pic33" class="entry"><img src="gallery/2011/33.jpg" alt="">
		</div>
		<div style="display: none;" id="pic34" class="entry"><img src="gallery/2011/34.jpg" alt="">
		</div>
		<div style="display: none;" id="pic35" class="entry"><img src="gallery/2011/35.jpg" alt="">
		</div>
		<div style="display: none;" id="pic36" class="entry"><img src="gallery/2011/36.jpg" alt="">
		</div>
		<div style="display: none;" id="pic37" class="entry"><img src="gallery/2011/37.jpg" alt="">
		</div>
		<div style="display: none;" id="pic38" class="entry"><img src="gallery/2011/38.jpg" alt="">
		</div>
		<div style="display: none;" id="pic39" class="entry"><img src="gallery/2011/39.jpg" alt="">
		</div>
		
		<div style="display: none;" id="pic40" class="entry"><img src="gallery/2011/40.jpg" alt="">
		</div>
		
		<div style="display: none;" id="pic41" class="entry"><img src="gallery/2011/41.jpg" alt="">
		</div>
		<div style="display: none;" id="pic42" class="entry"><img src="gallery/2011/42.jpg" alt="">
		</div>
		<div style="display: none;" id="pic43" class="entry"><img src="gallery/2011/43.jpg" alt="">
		</div>
		<div style="display: none;" id="pic44" class="entry"><img src="gallery/2011/44.jpg" alt="">
		</div>
		<div style="display: none;" id="pic45" class="entry"><img src="gallery/2011/45.jpg" alt="">
		</div>
		<div style="display: none;" id="pic46" class="entry"><img src="gallery/2011/46.jpg" alt="">
		</div>
		<div style="display: none;" id="pic47" class="entry"><img src="gallery/2011/47.jpg" alt="">
		</div>
		<div style="display: none;" id="pic48" class="entry"><img src="gallery/2011/48.jpg" alt="">
		</div>
		<div style="display: none;" id="pic49" class="entry"><img src="gallery/2011/49.jpg" alt="">
		</div>
		<div style="display: none;" id="pic50" class="entry"><img src="gallery/2011/50.jpg" alt="">
		</div>
		
		
		<div style="display: none;" id="pic51" class="entry"><img src="gallery/2011/51.jpg" alt="">
		</div>
		<div style="display: none;" id="pic52" class="entry"><img src="gallery/2011/52.jpg" alt="">
		</div>
		<div style="display: none;" id="pic53" class="entry"><img src="gallery/2011/53.jpg" alt="">
		</div>
		<div style="display: none;" id="pic54" class="entry"><img src="gallery/2011/54.jpg" alt="">
		</div>
		<div style="display: none;" id="pic55" class="entry"><img src="gallery/2011/55.jpg" alt="">
		</div>
		<div style="display: none;" id="pic56" class="entry"><img src="gallery/2011/56.jpg" alt="">
		</div>
		<div style="display: none;" id="pic57" class="entry"><img src="gallery/2011/57.jpg" alt="">
		</div>
		<div style="display: none;" id="pic58" class="entry"><img src="gallery/2011/58.jpg" alt="">
		</div>
		<div style="display: none;" id="pic59" class="entry"><img src="gallery/2011/59.jpg" alt="">
		</div>
		<div style="display: none;" id="pic60" class="entry"><img src="gallery/2011/60.jpg" alt="">
		</div>
		
		<div style="display: none;" id="pic61" class="entry"><img src="gallery/2011/61.jpg" alt="">
		</div>
		<div style="display: none;" id="pic62" class="entry"><img src="gallery/2011/62.jpg" alt="">
		</div>
		<div style="display: none;" id="pic63" class="entry"><img src="gallery/2011/63.jpg" alt="">
		</div>
		<div style="display: none;" id="pic64" class="entry"><img src="gallery/2011/64.jpg" alt="">
		</div>
		<div style="display: none;" id="pic65" class="entry"><img src="gallery/2011/65.jpg" alt="">
		</div>
		<div style="display: none;" id="pic66" class="entry"><img src="gallery/2011/66.jpg" alt="">
		</div>
		<div style="display: none;" id="pic67" class="entry"><img src="gallery/2011/67.jpg" alt="">
		</div>
		<div style="display: none;" id="pic68" class="entry"><img src="gallery/2011/68.jpg" alt="">
		</div>
		<div style="display: none;" id="pic69" class="entry"><img src="gallery/2011/69.jpg" alt="">
		</div>
		<div style="display: none;" id="pic70" class="entry"><img src="gallery/2011/70.jpg" alt="">
		</div>
		
		<div style="display: none;" id="pic71" class="entry"><img src="gallery/2011/71.jpg" alt="">
		</div>
		<div style="display: none;" id="pic72" class="entry"><img src="gallery/2011/72.jpg" alt="">
		</div>
		<div style="display: none;" id="pic73" class="entry"><img src="gallery/2011/73.jpg" alt="">
		</div>
		<div style="display: none;" id="pic74" class="entry"><img src="gallery/2011/74.jpg" alt="">
		</div>
		<div style="display: none;" id="pic75" class="entry"><img src="gallery/2011/75.jpg" alt="">
		</div>
		<div style="display: none;" id="pic76" class="entry"><img src="gallery/2011/76.jpg" alt="">
		</div>
		<div style="display: none;" id="pic77" class="entry"><img src="gallery/2011/77.jpg" alt="">
		</div>
		<div style="display: none;" id="pic78" class="entry"><img src="gallery/2011/78.jpg" alt="">
		</div>
		<div style="display: none;" id="pic79" class="entry"><img src="gallery/2011/79.jpg" alt="">
		</div>
		<div style="display: none;" id="pic80" class="entry"><img src="gallery/2011/80.jpg" alt="">
		</div>
		
		<div style="display: none;" id="pic81" class="entry"><img src="gallery/2011/81.jpg" alt="">
		</div>
		<div style="display: none;" id="pic82" class="entry"><img src="gallery/2011/82.jpg" alt="">
		</div>
		<div style="display: none;" id="pic83" class="entry"><img src="gallery/2011/83.jpg" alt="">
		</div>
		<div style="display: none;" id="pic84" class="entry"><img src="gallery/2011/84.jpg" alt="">
		</div>
		<div style="display: none;" id="pic85" class="entry"><img src="gallery/2011/85.jpg" alt="">
		</div>
		<div style="display: none;" id="pic86" class="entry"><img src="gallery/2011/86.jpg" alt="">
		</div>
		<div style="display: none;" id="pic87" class="entry"><img src="gallery/2011/87.jpg" alt="">
		</div>
		<div style="display: none;" id="pic88" class="entry"><img src="gallery/2011/88.jpg" alt="">
		</div>
		<div style="display: none;" id="pic89" class="entry"><img src="gallery/2011/89.jpg" alt="">
		</div>
		
		<div style="display: none;" id="pic90" class="entry"><img src="gallery/2011/90.jpg" alt="">
		</div>
		
		<div style="display: none;" id="pic91" class="entry"><img src="gallery/2011/91.jpg" alt="">
		</div>
		<div style="display: none;" id="pic92" class="entry"><img src="gallery/2011/92.jpg" alt="">
		</div>
		<div style="display: none;" id="pic93" class="entry"><img src="gallery/2011/93.jpg" alt="">
		</div>
		<div style="display: none;" id="pic94" class="entry"><img src="gallery/2011/94.jpg" alt="">
		</div>
		<div style="display: none;" id="pic95" class="entry"><img src="gallery/2011/95.jpg" alt="">
		</div>
		<div style="display: none;" id="pic96" class="entry"><img src="gallery/2011/96.jpg" alt="">
		</div>
		<div style="display: none;" id="pic97" class="entry"><img src="gallery/2011/97.jpg" alt="">
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



