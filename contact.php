<?php $page_index = 5;?>
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
<img src="images/trendwise_logo.png" width='944' height='200' alt="" />
</div>
<!-- Banner Panel End -->

<!-- Middle Panel Start -->
<div class="middle">

<h1>Contact Us</h1>

<div class="contactDtls">
<strong>TELEPHONE</strong>
<span>Land:</span> +91 80 4094 9600 <br />
<span>Cell:</span> +91 9845 815003 <br /><br />  
<span>US Tollfree:</span> +1 877 268 2872 <br /><br />  

<br />          
<strong>EMAIL</strong><a href="mailto:info@trendwiseanalytics.com">info@trendwiseanalytics.com</a><br /><br />      
<strong>VISIT US</strong>
Trendwise Analytics<br />
109 Regent Prime<br />
48 Whitefield Road <br />
Bangalore 560 066<br />
INDIA
</div>

<div class="contactMap">
<iframe width="425" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://maps.google.co.in/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=Regent+Prime,+Whitefield,+Bangalore,+Karnataka&amp;aq=&amp;sll=12.972207,77.750561&amp;sspn=0.002133,0.003573&amp;vpsrc=6&amp;ie=UTF8&amp;hq=Regent+Prime,&amp;hnear=Whitefield,+Bengaluru,+Bengaluru+Rural,+Karnataka&amp;ll=12.972217,77.750665&amp;spn=0.006295,0.006295&amp;t=h&amp;output=embed"></iframe>
<br/>
<div class="clear"></div>
<a href="http://maps.google.co.in/maps?f=q&amp;source=embed&amp;hl=en&amp;geocode=&amp;q=Regent+Prime,+Whitefield,+Bangalore,+Karnataka&amp;aq=&amp;sll=12.972207,77.750561&amp;sspn=0.002133,0.003573&amp;vpsrc=6&amp;ie=UTF8&amp;hq=Regent+Prime,&amp;hnear=Whitefield,+Bengaluru,+Bengaluru+Rural,+Karnataka&amp;ll=12.972217,77.750665&amp;spn=0.006295,0.006295&amp;t=h" class="mapbtn" target="_blank">View Larger Map</a>
</div>


<div style='margin:0 764px auto;border:1px ;width:160px;height:600px '>
<a href="http://strataconf.com/strata2012?cmp=ba-conf-st12-exhibitor-banner-160-600">
<img src="http://assets.en.oreilly.com/1/event/75/strata2012_exhibitor_banner_160x600.gif" width="160" height="600" border="0" alt="Strata 2012"/></a>
<div>
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
