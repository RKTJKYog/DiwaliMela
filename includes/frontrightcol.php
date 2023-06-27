<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="cache-control" content="no-cache">
<meta http-equiv="pragma" content="no-cache">
<meta http-equiv="expires" content="0">
</head>
<body style="font-family:Arial, Verdana;background-color:#fff;">
    <script type="text/javascript" src="js/jssor.slider.debug.js"></script>
    <!-- use jssor.slider.min.js instead for release -->

    <script>
        jssor_slider1_starter = function (containerId) {
            var options = {
                $AutoPlay: true,                                    //[Optional] Whether to auto play, to enable slideshow, this option must be set to true, default value is false
                $AutoPlaySteps: 1,                                  //[Optional] Steps to go for each navigation request (this options applys only when slideshow disabled), the default value is 1
                $Idle: 0,                            //[Optional] Interval (in milliseconds) to go for next slide since the previous stopped if the slider is auto playing, default value is 3000
                $PauseOnHover: 1,                               //[Optional] Whether to pause when mouse over if a slider is auto playing, 0 no pause, 1 pause for desktop, 2 pause for touch device, 3 pause for desktop and touch device, 4 freeze for desktop, 8 freeze for touch device, 12 freeze for desktop and touch device, default value is 1

                $ArrowKeyNavigation: true,   			            //[Optional] Allows keyboard (arrow key) navigation or not, default value is false
                $SlideEasing: $JssorEasing$.$EaseLinear,          //[Optional] Specifies easing for right to left animation, default value is $JssorEasing$.$EaseOutQuad
                $SlideDuration: 2500,                                //[Optional] Specifies default duration (swipe) for slide in milliseconds, default value is 500
                $MinDragOffsetToSlide: 20,                          //[Optional] Minimum drag offset to trigger slide , default value is 20
                $SlideWidth: 330,                                   //[Optional] Width of every slide in pixels, default value is width of 'slides' container
                $SlideHeight: 72,                                //[Optional] Height of every slide in pixels, default value is height of 'slides' container
                $SlideSpacing: 0, 					                //[Optional] Space between each slide in pixels, default value is 0
                $Cols: 7,                                  //[Optional] Number of pieces to display (the slideshow would be disabled if the value is set to greater than 1), the default value is 1
                $ParkingPosition: 0,                              //[Optional] The offset position to park slide (this options applys only when slideshow disabled), default value is 0.
                $UISearchMode: 1,                                   //[Optional] The way (0 parellel, 1 recursive, default value is 1) to search UI components (slides container, loading screen, navigator container, arrow navigator container, thumbnail navigator container etc).
                $PlayOrientation: 2,                                //[Optional] Orientation to play slide (for auto play, navigation), 1 horizental, 2 vertical, 5 horizental reverse, 6 vertical reverse, default value is 1
                $DragOrientation: 2                                //[Optional] Orientation to drag slide, 0 no drag, 1 horizental, 2 vertical, 3 either, default value is 1 (Note that the $DragOrientation should be the same as $PlayOrientation when $Cols is greater than 1, or parking position is not 0)
            };

            var jssor_slider1 = new $JssorSlider$(containerId, options);

            //responsive code begin
            //you can remove responsive code if you don't want the slider scales while window resizing
            function ScaleSlider() {
                var parentWidth = jssor_slider1.$Elmt.parentNode.clientWidth;
                if (parentWidth)
                    jssor_slider1.$ScaleWidth(Math.min(parentWidth, 300));
                else
                    $Jssor$.$Delay(ScaleSlider, 30);
            }

            ScaleSlider();
            $Jssor$.$AddEvent(window, "load", ScaleSlider);

            $Jssor$.$AddEvent(window, "resize", ScaleSlider);
            $Jssor$.$AddEvent(window, "orientationchange", ScaleSlider);
            //responsive code end
        };
    </script>
    <div id="slider1_container" style="position: relative; top: -18px; left: 0px; width:220px; height: 600px;  overflow: hidden; ">
      <!-- Slides Container -->
        <div u="slides" style="cursor: move; position: absolute; left: 0px; top: 0px; width: 220px; height: 600px; overflow: hidden;">
   		<div><img src="images/sponsors/2016/2016-right/chinmaya-new.png" alt="CHINMAYA MISSION"  /></div>
		<div><img src="images/sponsors/2016/2016-right/eknazar.png" alt="eknazar"  /></div>
		<div><img src="images/sponsors/2017/joyous.png" alt="joyous"  /></div>
		<div><img src="images/sponsors/2017/asiatv.png" alt="asiatv"  /></div>
		<div><img src="images/sponsors/2018/Tanmai.jpg" alt="tanmai"  /></div>
		<div><img src="images/sponsors/2016/2016-right/Indian-Property.jpg" alt="Indian-Property"/></div>
  <div><img src="images/sponsors/2016/2016-right/Godraj.jpg" alt="Godraj"/></div>
		<div><img src="images/sponsors/2017/ACT.png" alt="ACT"  /></div>
		<div><img src="images/sponsors/2017/toyota.png" alt="toyota"  /></div>
		<div><img src="images/sponsors/2017/patelbro.png" alt="patel brother" /></div>
		<div><img src="images/sponsors/2017/prosperity.png" alt="prosperity"/></div>
		<div><img src="images/sponsors/2017/capital.png" alt="capital"  /></div>
		<div><img src="images/sponsors/2016/2016-right/wipro.png" alt="wipro"  /></div>
		<div><img src="images/sponsors/2016/2016-right/ekal.png" alt="Ekal Vidyalaya"  /></div>
		<div><img src="images/sponsors/2016/2016-right/universty-college.png" alt="University of Dallas"  /></div>
		<div><img src="images/sponsors/2016/2016-right/asdfw.png" alt="asdfw"  /></div>
		<div><img src="images/sponsors/2016/2016-right/upsna.png" alt="upsna"  /></div>
		<div><img src="images/sponsors/2016/2016-right/sns.png" alt="SNSSystem.com - Clound application developer"  /></div>
		<div><img src="images/sponsors/2016/2016-right/richa.png" alt="richa"  /></div>
		<div><img src="images/sponsors/2016/2016-right/india-bazaar-sponsor.png" alt="india-bazaar"  /></div>
		<!--<div><img src="images/sponsors/2016/2016-right/micropx.png" alt="micropix"  /></div>-->
		<div><img src="images/sponsors/2017/vishnu.png" alt="vishnu"  /></div>
		<div><img src="images/sponsors/2016/2016-right/needle.png" alt="NEEDLE IN THE HAYSTACK"  /></div>
		<div><img src="images/sponsors/2016/2016-right/rich-raghaw-new.png" alt="Mr rich raghav and prabhar mohan"  /></div>
		<div><img src="images/sponsors/2016/2016-right/my_deals.png" alt="mydealshub"  /></div>
		<div><img src="images/sponsors/2016/2016-right/giftindia.png" alt="Send Gift to India"  /></div>
		<div><img src="images/sponsors/2016/2016-right/poonam.png" alt="DR. POONAM AND ANSHU AGGARWAL"  /></div>
		<div><img src="images/sponsors/2016/2016-right/encore.png" alt="encore"  /></div>
		<div><img src="images/sponsors/2018/dr-rohit.jpg" alt="parmar"  /></div>
		<div><img src="images/sponsors/2016/2016-right/walk-away-from-drugs.png" alt="Walk Away From Drugs"  /></div>			
		<div><img src="images/sponsors/2018/top-picknew.jpg" alt="Top Pick for you"  /></div>
		<div><img src="images/sponsors/2018/swingle.jpg" alt="Swingle Collins"  /></div>
		<div><img src="images/sponsors/2018/dr-deepak.jpg" alt="Dr. Deepak and pallavi chavda"  /></div>
		<div><img src="images/sponsors/2018/Kashish.jpg" alt="Kashish"  /></div>
		<div><img src="images/sponsors/2018/dfwindia.jpg" alt="dfwIndia.com"  /></div>
		<div><img src="images/sponsors/2018/nort-texas-food-bank.gif" alt="nort texas food bank"  /></div>
		<div><img src="images/sponsors/2018/GSDFW_logo.jpg" alt="GSDFW"  /></div>
		<div><img src="images/sponsors/2018/IANT-Logo.jpg" alt="IANT"  /></div>
		<div><img src="images/sponsors/2018/US-India.jpg" alt="US-India"  /></div>
		<div><img src="images/sponsors/2016/2016-right/dp.png" alt="Desiplaza TV"  /></div>
		<div><img src="images/sponsors/2016/2016-right/funasia.png" alt="Fun Asia"  /></div>
		<div><img src="images/sponsors/2018/ensupra-solar.jpg" alt="Ensupra Solar"  /></div>
		<div><img src="images/sponsors/2018/gopal.jpg" alt="Gopal"  /></div>
		<div><img src="images/sponsors/2018/Dolphin.jpg" alt="Dolphin"  /></div>
		<div><img src="images/sponsors/2018/ATandT.jpg" alt="AT&T"  /></div>
		<div><img src="images/sponsors/2018/hotstar.jpg" alt="Hotstar"  /></div>
        </div>
      
        <script>
            jssor_slider1_starter('slider1_container');
        </script>

    </div>
    <!-- Jssor Slider End -->
</body>
</html>
