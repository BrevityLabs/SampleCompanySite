<?php $page_index = 0;?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<script src="http://static.dudamobile.com/DM_redirect.js" type="text/javascript"></script> <script type="text/javascript"> DM_redirect("http://mobile.dudamobile.com/site/trendwiseanalytics"); </script>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Trendwise Analytics</title>
<link href="css/main.css" rel="stylesheet" type="text/css" />
<link rel="icon" href="favicon.gif" type="image/gif">

<!--Common Js -->
<script type="text/javascript" src="js/jquery.min.js"></script>

<!--Scroll -->
<script type="text/javascript" src="js/scrolltopcontrol.js"></script>

<!--Banner Slider -->
<link href="css/nivo_slider.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="js/jquery.nivo.slider.js"></script> 
<script type="text/javascript" src="js/global.js"></script>

<!-- Conatct validation -->
<script src="js/ajax_master.js" type="text/javascript"></script>
<script src="js/validate.js" type="text/javascript"></script>

<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-23872309-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>

</head>

<body>
<!-- Header Panel Start -->
<div class="header">
<?php include('inc_header_menu.php'); ?>
<?php include('inc_service_menu.php'); ?>
</div>
<!-- Header Panel End -->

<!-- Banner Panel Start -->
<div class="banner">
<div class="bannerSlider" id="slides">
<img src="images/banner_home1.jpg" alt="" />
<img src="images/banner_home2.jpg" alt="" />
<img src="images/banner_home3.jpg" alt="" />
<img src="images/banner_home4.jpg" alt="" />
</div>
</div>
            
<!-- Banner Panel End -->


<!-- Middle Panel Start -->
<div class="middle">

<!-- Box-01 Start -->
<div class="contentBox">
<h1>Welcome to Trendwise Analytics</h1>
<img src="images/photo1.jpg" alt="" />
<span>Trendwise is formed by a group of technocrats whose experiences from the industry forms a strong foundation of the company. Advanced analytics today is very similar to CRM at the turn of the millenium...... <a href="about.html#ov">Read More</a></span></div>
<!-- Box-01 End -->

<!-- Box-02 Start -->
<div class="contentBox">
<h1>Our Vision</h1>
<img src="images/photo2.jpg" alt="" />
<span>To be one of the most valuable companies in the area of advanced analytics with a strong global presence with a wide client base for our products and solutions.</span></div>
<!-- Box-02 End -->

<!-- Box-03 Start -->
<div class="contentBox mr0">
<h1>Our Video Center</h1>
<iframe width="280" height="200" src="http://www.youtube.com/embed/CwcUyF5HDmQ" frameborder="0" allowfullscreen></iframe>
</div>
<!-- Box-03 End -->

<div class="clear"></div> 
</div>
<!-- Middle Panel End -->

<?php include ('inc_footer.php') ; ?>

</body>
</html>
