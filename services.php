<?php $page_index = 2;?>
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

<!-- Middle Panel Start -->
<div class="middle" style='min-height:300px;border:1px'>
	<h1>Services</h1>
 	<?php include('inc_services.php'); ?>

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
