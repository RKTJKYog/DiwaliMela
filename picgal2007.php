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

<!--<script src="js/jquery-1.js" type="text/javascript"></script>-->

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
   <h1>Diwali Photo Gallery-2007</h1>
    <h2>Photo Gallery</h2>
<div class="picgal_left">
<ul>
<li><a href="picgal.php" style="font-weight:bold; text-decoration:none; color:#000; font-size:15px;">2014</a></li>
<li><a href="picgal2013.php" style="font-weight:bold; text-decoration:none; color:#000; font-size:15px;">2013</a></li>
<li><a href="picgal2012.php" style="font-weight:bold; color:#000; text-decoration:none;  font-size:15px;">2012</a></li>
<li><a href="picgal2011.php" style="font-weight:bold; color:#000; text-decoration:none;  font-size:15px;">2011</a></li>
<li><a href="picgal2010.php" style="font-weight:bold; text-decoration:none; color:#000; font-size:15px;">2010</a></li>
<li><a href="picgal2008.php" style="font-weight:bold; text-decoration:none; color:#000; font-size:15px;">2008</a></li>
<li><a href="picgal2007.php" style="font-weight:bold; color:#000; font-size:15px;">2007 >></a></li>
<li><a href="picgal2006.php" style="font-weight:bold; text-decoration:none;  color:#000; font-size:15px;">2006</a></li>
	
</ul>

</div>

	<div id="stus-slideshow">
	

	<div style="height: 316px; display: block;" id="slideshow">
	
		<div style="display: none;" id="pic1" class="entry"><img src="gallery/2007/_MG_6882.jpg" alt="sd">
			</div>
		<div style="display: none;" id="pic2" class="entry"><img src="gallery/2007/_MG_6485.jpg" alt="">
			
		</div>
		<div style="display: none;" id="pic3" class="entry"><img src="gallery/2007/_MG_6500.jpg" alt="">
			
		</div>
		<div style="display: none;" id="pic4" class="entry"><img src="gallery/2007/_MG_6504.jpg" alt="">
			
		</div>
		<div style="display: none;" id="pic5" class="entry"><img src="gallery/2007/_MG_6507.jpg" alt="">
			
		</div>
		<div style="display: none;" id="pic6" class="entry"><img src="gallery/2007/_MG_6508.jpg" alt="">
			
		</div>
		<div style="display: none;" id="pic7" class="entry"><img src="gallery/2007/_MG_6512.jpg" alt="">
			
		</div>
		<div style="display: none;" id="pic8" class="entry"><img src="gallery/2007/_MG_6515.jpg" alt="">
			
		</div>
		<div style="display: none;" id="pic9" class="entry"><img src="gallery/2007/_MG_6523.jpg" alt="">
			
		</div>
		<div style="display: none;" id="pic10" class="entry"><img src="gallery/2007/_MG_6524.jpg" alt="">
		</div>
		
		
		
		<div style="display: none;" id="pic11" class="entry"><img src="gallery/2007/_MG_6525.jpg" alt="">
		</div>
		
		<div style="display: none;" id="pic12" class="entry"><img src="gallery/2007/_MG_6526.jpg" alt="">
		</div>
		
		<div style="display: none;" id="pic13" class="entry"><img src="gallery/2007/_MG_6527.jpg" alt="">
		</div>
		
		<div style="display: none;" id="pic14" class="entry"><img src="gallery/2007/_MG_6531.jpg" alt="">
		</div>
		
		<div style="display: none;" id="pic15" class="entry"><img src="gallery/2007/_MG_6532.jpg" alt="">
		</div>
		
		<div style="display: none;" id="pic16" class="entry"><img src="gallery/2007/_MG_6543.jpg" alt="">
		</div>
		
		<div style="display: none;" id="pic17" class="entry"><img src="gallery/2007/_MG_6544.jpg" alt="">
		</div>
		
		<div style="display: none;" id="pic18" class="entry"><img src="gallery/2007/_MG_6546.jpg" alt="">
		</div>
		
		<div style="display: none;" id="pic19" class="entry"><img src="gallery/2007/_MG_6554.jpg" alt="">
		</div>
		
		<div style="display: none;" id="pic20" class="entry"><img src="gallery/2007/_MG_6572.jpg" alt="">
		
		</div>
		<div style="display: none;" id="pic21" class="entry"><img src="gallery/2007/_MG_6581.jpg" alt="">
		
		</div>
		<div style="display: none;" id="pic22" class="entry"><img src="gallery/2007/_MG_6593.jpg" alt="">
		
		</div>
		<div style="display: none;" id="pic23" class="entry"><img src="gallery/2007/_MG_6608.jpg" alt="">
		</div>
		
		
		<div style="display: none;" id="pic24" class="entry"><img src="gallery/2007/_MG_6610.jpg" alt="">
		</div>
		<div style="display: none;" id="pic25" class="entry"><img src="gallery/2007/_MG_6616.jpg" alt="">
		</div>
		<div style="display: none;" id="pic26" class="entry"><img src="gallery/2007/_MG_6630.jpg" alt="">
		</div>
		<div style="display: none;" id="pic27" class="entry"><img src="gallery/2007/_MG_6650.jpg" alt="">
		</div>
		<div style="display: none;" id="pic28" class="entry"><img src="gallery/2007/_MG_6665.jpg" alt="">
		</div>
		<div style="display: none;" id="pic29" class="entry"><img src="gallery/2007/_MG_6666.jpg" alt="">
		</div>
		<div style="display: none;" id="pic30" class="entry"><img src="gallery/2007/_MG_6667.jpg" alt="">
		</div>
		<div style="display: none;" id="pic31" class="entry"><img src="gallery/2007/_MG_6671.jpg" alt="">
		</div>
		<div style="display: none;" id="pic32" class="entry"><img src="gallery/2007/_MG_6686.jpg" alt="">
		</div>
		<div style="display: none;" id="pic33" class="entry"><img src="gallery/2007/_MG_6710.jpg" alt="">
		</div>
		<div style="display: none;" id="pic34" class="entry"><img src="gallery/2007/_MG_6714.jpg" alt="">
		</div>
		<div style="display: none;" id="pic35" class="entry"><img src="gallery/2007/_MG_6718.jpg" alt="">
		</div>
		<div style="display: none;" id="pic36" class="entry"><img src="gallery/2007/_MG_6735.jpg" alt="">
		</div>
		<div style="display: none;" id="pic37" class="entry"><img src="gallery/2007/_MG_6743.jpg" alt="">
		</div>
		
		<div style="display: none;" id="pic38" class="entry"><img src="gallery/2007/_MG_6746.jpg" alt="">
		</div>
		<div style="display: none;" id="pic39" class="entry"><img src="gallery/2007/_MG_6755.jpg" alt="">
		</div>
		<div style="display: none;" id="pic40" class="entry"><img src="gallery/2007/_MG_6759.jpg" alt="">
		</div>
		<div style="display: none;" id="pic41" class="entry"><img src="gallery/2007/_MG_6764.jpg" alt="">
		</div>
		<div style="display: none;" id="pic42" class="entry"><img src="gallery/2007/_MG_6786.jpg" alt="">
		</div>
		<div style="display: none;" id="pic43" class="entry"><img src="gallery/2007/_MG_6793.jpg" alt="">
		</div>
		<div style="display: none;" id="pic44" class="entry"><img src="gallery/2007/_MG_6794.jpg" alt="">
		</div>
		<div style="display: none;" id="pic45" class="entry"><img src="gallery/2007/_MG_6799.jpg" alt="">
		</div>
		<div style="display: none;" id="pic46" class="entry"><img src="gallery/2007/_MG_6807.jpg" alt="">
		</div>
		<div style="display: none;" id="pic47" class="entry"><img src="gallery/2007/_MG_6826.jpg" alt="">
		</div>
		<div style="display: none;" id="pic48" class="entry"><img src="gallery/2007/_MG_6830.jpg" alt="">
		</div>
		<div style="display: none;" id="pic49" class="entry"><img src="gallery/2007/_MG_6865.jpg" alt="">
		</div>
		<div style="display: none;" id="pic50" class="entry"><img src="gallery/2007/_MG_6474.jpg" alt="">
		</div>
		<div style="display: none;" id="pic51" class="entry"><img src="gallery/2007/_MG_6936.jpg" alt="">
		</div>
		<div style="display: none;" id="pic52" class="entry"><img src="gallery/2007/_MG_6954.jpg" alt="">
		</div>
		<div style="display: none;" id="pic53" class="entry"><img src="gallery/2007/_MG_6956.jpg" alt="">
		</div>
		<div style="display: none;" id="pic54" class="entry"><img src="gallery/2007/_MG_7016.jpg" alt="">
		</div>
		<div style="display: none;" id="pic55" class="entry"><img src="gallery/2007/_MG_7024.jpg" alt="">
		</div>
		<div style="display: none;" id="pic56" class="entry"><img src="gallery/2007/_MG_7041.jpg" alt="">
		</div>
		<div style="display: none;" id="pic57" class="entry"><img src="gallery/2007/_MG_7112.jpg" alt="">
		</div>
		<div style="display: none;" id="pic58" class="entry"><img src="gallery/2007/_MG_7133.jpg" alt="">
		</div>
		<div style="display: none;" id="pic59" class="entry"><img src="gallery/2007/_MG_7135.jpg" alt="">
		</div>
		<div style="display: none;" id="pic60" class="entry"><img src="gallery/2007/_MG_7151.jpg" alt="">
		</div>
		
		<div style="display: none;" id="pic61" class="entry"><img src="gallery/2007/_MG_7156.jpg" alt="">
		</div>
		<div style="display: none;" id="pic62" class="entry"><img src="gallery/2007/_MG_7158.jpg" alt="">
		</div>
		<div style="display: none;" id="pic63" class="entry"><img src="gallery/2007/_MG_7196.jpg" alt="">
		</div>
		<div style="display: none;" id="pic64" class="entry"><img src="gallery/2007/_MG_7208.jpg" alt="">
		</div>
		<div style="display: none;" id="pic65" class="entry"><img src="gallery/2007/_MG_7214.jpg" alt="">
		</div>
		<div style="display: none;" id="pic66" class="entry"><img src="gallery/2007/_MG_7229.jpg" alt="">
		</div>
		
		
		<div style="display: none;" id="pic67" class="entry"><img src="gallery/2007/_MG_7236.jpg" alt="">
		</div>
		<div style="display: none;" id="pic68" class="entry"><img src="gallery/2007/DSC_8908.jpg" alt="">
		</div>
		<div style="display: none;" id="pic69" class="entry"><img src="gallery/2007/DSC_8915.jpg" alt="">
		</div>
		<div style="display: none;" id="pic70" class="entry"><img src="gallery/2007/DSC_8916.jpg" alt="">
		</div>
		<div style="display: none;" id="pic71" class="entry"><img src="gallery/2007/DSC_8918.jpg" alt="">
		</div>
		<div style="display: none;" id="pic72" class="entry"><img src="gallery/2007/DSC_8923.jpg" alt="">
		</div>
		<div style="display: none;" id="pic73" class="entry"><img src="gallery/2007/DSC_8924.jpg" alt="">
		</div>
		<div style="display: none;" id="pic74" class="entry"><img src="gallery/2007/DSC_8926.jpg" alt="">
		</div>
		<div style="display: none;" id="pic75" class="entry"><img src="gallery/2007/DSC_8928.jpg" alt="">
		</div>
		<div style="display: none;" id="pic76" class="entry"><img src="gallery/2007/DSC_8930.jpg" alt="">
		</div>
		<div style="display: none;" id="pic77" class="entry"><img src="gallery/2007/DSC_8932.jpg" alt="">
		</div>
		<div style="display: none;" id="pic78" class="entry"><img src="gallery/2007/DSC_8935.jpg" alt="">
		</div>
		<div style="display: none;" id="pic79" class="entry"><img src="gallery/2007/DSC_8938.jpg" alt="">
		</div>
		<div style="display: none;" id="pic80" class="entry"><img src="gallery/2007/DSC_8939.jpg" alt="">
		</div>
		<div style="display: none;" id="pic81" class="entry"><img src="gallery/2007/DSC_8941.jpg" alt="">
		</div>
		<div style="display: none;" id="pic82" class="entry"><img src="gallery/2007/DSC_8942.jpg" alt="">
		</div>
		<div style="display: none;" id="pic83" class="entry"><img src="gallery/2007/DSC_8943.jpg" alt="">
		</div>
		
		<div style="display: none;" id="pic84" class="entry"><img src="gallery/2007/DSC_8948.jpg" alt="">
		</div>
		<div style="display: none;" id="pic85" class="entry"><img src="gallery/2007/DSC_8949.jpg" alt="">
		</div>
		<div style="display: none;" id="pic86" class="entry"><img src="gallery/2007/DSC_8950.jpg" alt="">
		</div>
		<div style="display: none;" id="pic87" class="entry"><img src="gallery/2007/DSC_8951.jpg" alt="">
		</div>
		<div style="display: none;" id="pic88" class="entry"><img src="gallery/2007/DSC_8956.jpg" alt="">
		</div>
		<div style="display: none;" id="pic89" class="entry"><img src="gallery/2007/DSC_8958.jpg" alt="">
		</div>
		<div style="display: none;" id="pic90" class="entry"><img src="gallery/2007/DSC_8960.jpg" alt="">
		</div>
		<div style="display: none;" id="pic100" class="entry"><img src="gallery/2007/DSC_8961.jpg" alt="">
		</div>
		<div style="display: none;" id="pic101" class="entry"><img src="gallery/2007/DSC_8965.jpg" alt="">
		</div>
		
		<div style="display: none;" id="pic102" class="entry"><img src="gallery/2007/DSC_8968.jpg" alt="">
		</div>
		<div style="display: none;" id="pic103" class="entry"><img src="gallery/2007/DSC_8969.jpg" alt="">
		</div>
		<div style="display: none;" id="pic104" class="entry"><img src="gallery/2007/DSC_8971.jpg" alt="">
		</div>
		<div style="display: none;" id="pic105" class="entry"><img src="gallery/2007/DSC_8972.jpg" alt="">
		</div>
		<div style="display: none;" id="pic106" class="entry"><img src="gallery/2007/DSC_8978.jpg" alt="">
		</div>
				<div style="display: none;" id="pic107" class="entry"><img src="gallery/2007/DSC_8983.jpg" alt="">
		</div>
				<div style="display: none;" id="pic108" class="entry"><img src="gallery/2007/DSC_8984.jpg" alt="">
		</div>
				<div style="display: none;" id="pic109" class="entry"><img src="gallery/2007/DSC_8986.jpg" alt="">
		</div>
		
		<div style="display: none;" id="pic110" class="entry"><img src="gallery/2007/DSC_8987.jpg" alt="">
		</div>
		<div style="display: none;" id="pic111" class="entry"><img src="gallery/2007/DSC_8989.jpg" alt="">
		</div>
				<div style="display: none;" id="pic112" class="entry"><img src="gallery/2007/DSC_8990.jpg" alt="">
		</div>
				<div style="display: none;" id="pic113" class="entry"><img src="gallery/2007/DSC_8992.jpg" alt="">
		</div>
				<div style="display: none;" id="pic114" class="entry"><img src="gallery/2007/DSC_8993.jpg" alt="">
		</div>
				<div style="display: none;" id="pic115" class="entry"><img src="gallery/2007/DSC_8994.jpg" alt="">
		</div>
				<div style="display: none;" id="pic116" class="entry"><img src="gallery/2007/DSC_8997.jpg" alt="">
		</div>
				<div style="display: none;" id="pic117" class="entry"><img src="gallery/2007/DSC_8999.jpg" alt="">
		</div>
				<div style="display: none;" id="pic118" class="entry"><img src="gallery/2007/DSC_9012.jpg" alt="">
		</div>
				<div style="display: none;" id="pic119" class="entry"><img src="gallery/2007/DSC_9017.jpg" alt="">
		</div>
				<div style="display: none;" id="pic120" class="entry"><img src="gallery/2007/DSC_9031.jpg" alt="">
		</div>
				<div style="display: none;" id="pic121" class="entry"><img src="gallery/2007/DSC_9034.jpg" alt="">
		</div>
				<div style="display: none;" id="pic122" class="entry"><img src="gallery/2007/DSC_9036.jpg" alt="">
		</div>
		
						<div style="display: none;" id="pic123" class="entry"><img src="gallery/2007/DSC_9039.jpg" alt="">
		</div>
						<div style="display: none;" id="pic124" class="entry"><img src="gallery/2007/DSC_9040.jpg" alt="">
		</div>
						<div style="display: none;" id="pic125" class="entry"><img src="gallery/2007/DSC_9043.jpg" alt="">
		</div>
						<div style="display: none;" id="pic126" class="entry"><img src="gallery/2007/DSC_9046.jpg" alt="">
		</div>
						<div style="display: none;" id="pic127" class="entry"><img src="gallery/2007/DSC_9062.jpg" alt="">
		</div>
						<div style="display: none;" id="pic128" class="entry"><img src="gallery/2007/DSC_9078.jpg" alt="">
		</div>
						<div style="display: none;" id="pic129" class="entry"><img src="gallery/2007/DSC_9084.jpg" alt="">
		</div>
						<div style="display: none;" id="pic130" class="entry"><img src="gallery/2007/DSC_9093.jpg" alt="">
		</div>
						<div style="display: none;" id="pic131" class="entry"><img src="gallery/2007/DSC_9094.jpg" alt="">
		</div>
						<div style="display: none;" id="pic132" class="entry"><img src="gallery/2007/DSC_9095.jpg" alt="">
		</div>
						<div style="display: none;" id="pic133" class="entry"><img src="gallery/2007/DSC_9098.jpg" alt="">
		</div>
						<div style="display: none;" id="pic134" class="entry"><img src="gallery/2007/DSC_9102.jpg" alt="">
		</div>
						<div style="display: none;" id="pic135" class="entry"><img src="gallery/2007/DSC_9103.jpg" alt="">
		</div>
						<div style="display: none;" id="pic136" class="entry"><img src="gallery/2007/DSC_9104.jpg" alt="">
		</div>
<div style="display: none;" id="pic137" class="entry"><img src="gallery/2007/DSC_9105.jpg" alt="">
</div>
<div style="display: none;" id="pic138" class="entry"><img src="gallery/2007/DSC_9108.jpg" alt="">
</div>
<div style="display: none;" id="pic139" class="entry"><img src="gallery/2007/DSC_9111.jpg" alt="">
</div>
<div style="display: none;" id="pic140" class="entry"><img src="gallery/2007/DSC_9124.jpg" alt="">
</div>
<div style="display: none;" id="pic141" class="entry"><img src="gallery/2007/DSC_9148.jpg" alt="">
</div>
<div style="display: none;" id="pic142" class="entry"><img src="gallery/2007/DSC_9150.jpg" alt="">
</div>
<div style="display: none;" id="pic143" class="entry"><img src="gallery/2007/DSC_9161.jpg" alt="">
</div>
<div style="display: none;" id="pic144" class="entry"><img src="gallery/2007/DSC_9162.jpg" alt="">
</div>
<div style="display: none;" id="pic145" class="entry"><img src="gallery/2007/DSC_9163.jpg" alt="">
</div>
<div style="display: none;" id="pic146" class="entry"><img src="gallery/2007/DSC_9164.jpg" alt="">
</div>
<div style="display: none;" id="pic147" class="entry"><img src="gallery/2007/DSC_9188.jpg" alt="">
</div>
<div style="display: none;" id="pic148" class="entry"><img src="gallery/2007/DSC_9197.jpg" alt="">
</div>
<div style="display: none;" id="pic149" class="entry"><img src="gallery/2007/DSC_9214.jpg" alt="">
</div>
<div style="display: none;" id="pic150" class="entry"><img src="gallery/2007/DSC_9224.jpg" alt="">
</div>
<div style="display: none;" id="pic151" class="entry"><img src="gallery/2007/DSC_9229.jpg" alt="">
</div>
<div style="display: none;" id="pic152" class="entry"><img src="gallery/2007/DSC_9235.jpg" alt="">
</div>
<div style="display: none;" id="pic153" class="entry"><img src="gallery/2007/DSC_9238.jpg" alt="">
</div>

<div style="display: none;" id="pic154" class="entry"><img src="gallery/2007/DSC_9241.jpg" alt="">
</div>
<div style="display: none;" id="pic155" class="entry"><img src="gallery/2007/DSC_9257.jpg" alt="">
</div>
<div style="display: none;" id="pic156" class="entry"><img src="gallery/2007/DSC_9259.jpg" alt="">
</div>
<div style="display: none;" id="pic157" class="entry"><img src="gallery/2007/DSC_9260.jpg" alt="">
</div>
<div style="display: none;" id="pic158" class="entry"><img src="gallery/2007/DSC_9261.jpg" alt="">
</div>
<div style="display: none;" id="pic159" class="entry"><img src="gallery/2007/DSC_9263.jpg" alt="">
</div>
<div style="display: none;" id="pic160" class="entry"><img src="gallery/2007/DSC_9268.jpg" alt="">
</div>
<div style="display: none;" id="pic161" class="entry"><img src="gallery/2007/DSC_9269.jpg" alt="">
</div>
<div style="display: none;" id="pic162" class="entry"><img src="gallery/2007/DSC_9270.jpg" alt="">
</div>
<div style="display: none;" id="pic163" class="entry"><img src="gallery/2007/DSC_9271.jpg" alt="">
</div>

<div style="display: none;" id="pic110" class="entry"><img src="gallery/2007/DSC_9280.jpg" alt="">
</div>
<div style="display: none;" id="pic110" class="entry"><img src="gallery/2007/DSC_9285.jpg" alt="">
</div>
<div style="display: none;" id="pic110" class="entry"><img src="gallery/2007/DSC_9293.jpg" alt="">
</div>
<div style="display: none;" id="pic110" class="entry"><img src="gallery/2007/DSC_9350.jpg" alt="">
</div>
	</div>
</div>
	<div id="nav">
		<!--<img class="first" src="images/first.gif" alt="First">-->
		<img class="previous" src="images/previous.gif" alt="Previous">
		<h2 id="imageNumber">1 of 19</h2> 
		<img class="next" src="images/next.gif" alt="Next">
	<!--	<img class="last" src="images/last.gif" alt="Last">-->
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




