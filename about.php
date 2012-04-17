<?php $page_index = 1;?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Trendwise Analytics</title>
<link href="css/main.css" rel="stylesheet" type="text/css" />
<link rel="icon" href="favicon.ico" type="image/x-icon">

<!--Common Js -->
<script type="text/javascript" src="js/jquery.min.js"></script>

<!--Scroll -->
<script type="text/javascript" src="js/scrolltopcontrol.js"></script>

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

<body style="background:url(images/header_bg2.gif) top left repeat-x #FFF;">

<!-- Header Panel Start -->
<div class="header">
<?php include('inc_header_menu.php'); ?>
<?php include('inc_service_menu.php'); ?>
</div>
<!-- Header Panel End -->

<!-- Banner Panel Start -->
<div class="banner_inside">
<img src="images/banner_inside.jpg" alt="" />
</div>
<!-- Banner Panel End -->
<center><a href="http://strataconf.com/strata2012?cmp=ba-conf-st12-exhibitor-banner-728-90"><img src="http://assets.en.oreilly.com/1/event/75/strata2012_exhibitor_banner_728x90.jpg" style="width:728px; height:90px; text-align:center"  alt="Strata 2012"/></a></center>

<!-- Middle Panel Start -->
<div class="middle">

<h1>About Us</h1>
<h2 id="ov">Overview</h2>
<p>Trendwise is formed by a group of technocrats whose experiences from the industry forms a strong foundation of the company. Advanced analytics today is very similar to CRM at the turn of the millenium. The founder members of Trendwise had been a part of early CRM evolution and hence establishes an authority over CRM analytics. Our focus would be set on the newer aspects of analytics which is yet to come of age. While Hadoop, Cloud Computing, BigData analytics for the technological basis for us, our domain focus is on predictive aspect of analytics which would create insights for our customers like never before.</p>

<h2 id="vision">Vision</h2>
<p>To be one of the most valueable companies in the area of advanced analytics with a strong global presence with a wide client base for our products and solutions. </p>

<h2 id="mission">Mission</h2>
<p>To develop analytics tools and solutions for handling big, unstructured data for creating business insights. The offerings would be targeted to specific business areas and industry streams. Also to provide support and services to our customers on our products and solutions. </p>

<h2>Competitive Edge</h2>
<p>Be first to adopt a leading edge technologies, be connected well throughout the community, create intellectual property and build high performing team. Also need to maintain global presence and be efficient &amp; cost effective.</p>

<h2>Corporate Social Responsibility</h2>
<p>Visit our <a href="csr.html"> <u>CSR page </u></a>to know more about our activities towards making a difference to our society.</p>


<div class="clear"></div> 
</div>
<!-- Middle Panel End -->

<?php include ('inc_footer.php') ; ?>

<script language="JavaScript">
// Code for validating the form
// Visit http://www.javascript-coder.com/html-form/javascript-form-validation.phtml
// for details
var frmvalidator  = new Validator("contactform");
frmvalidator.addValidation("name","req","Please provide your name"); 
frmvalidator.addValidation("email","req","Please provide your email"); 
frmvalidator.addValidation("email","email","Please enter a valid email address"); 
frmvalidator.addValidation("message","message","Please enter message"); 
</script>

</body>
</html>
