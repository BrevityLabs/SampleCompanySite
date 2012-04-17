<?php $page_index = 3;?>
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
<center><a href="http://strataconf.com/strata2012?cmp=ba-conf-st12-exhibitor-banner-728-90"><img src="http://assets.en.oreilly.com/1/event/75/strata2012_exhibitor_banner_728x90.jpg" style="width:728px; height:90px; text-align:center"  alt="Strata 2012"/></a></center>

</div>
<!-- Banner Panel End -->

<!-- Middle Panel Start -->
<div class="middle">

<h1>Partners</h1>

<div class="serviceContainer">
<span class="pic" id="partner"><img src="images/icon1.gif" alt="Partners" /></span>
<div class="right">
<h2>Partners</h2>
<p> Trendwise has been in constant pursuit to build relationship with other like-minded organizations with specific focus in their respective but related areas. In an ecosystem like today's it is difficult to cater to a variety of problems without strong and meaningful partnerships.</p>

<br/><br/>
<p>
<a href="www.jaspersoft.com"><img src=images/Jaspersoft.png><br/><u>Jaspersoft</u></a> provides the most flexible, cost effective and widely deployed business intelligence software in the world, enabling better decision making through highly interactive, web-based reports, dashboards and analysis. </p>

<br/><br/>
<p>
<a href="www.cloudera.com"><img src="images/Cloudera.png"> <br/><u>Cloudera </u> </a> offers enterprises a powerful new data platform built on the popular Apache Hadoop open-source software package. We enhance the storage and processing technologies originally developed by the world’s biggest Web companies, allowing our growing list of global customers to use Hadoop to solve problems and achieve their particular business goals.

</p>
<br/><br/>
<p>
<a href="http://www.hpccsystems.com"><img src="images/hpcc.png"> <br/><u> HPCC  (High Performance Computing Cluster) </u></a>is a cluster computing platform used to solve Big Data problems. Its unique architecture and simple yet powerful data programming language (ECL) makes it a compelling solution to solve data intensive computing needs.  </p>
<br/><br/>
<p>
<a href="http://www.hortonworks.com"><img src="images/hortonworks-logo.jpg"> <br/><u> Hortonworks </u></a> promotes the development and adoption of Apache Hadoop. Together with the Apache community, Hortonworks is making Hadoop more robust and easier to install, manage and use. The Hortonworks Data Platform powered by Apache Hadoop provides an open and stable foundation for enterprises and a growing ecosystem to build and deploy big data solutions.
</p>
<br/><br/>
<!-- p>
<a href="www.???.com"><img src="images/???.png"> <br/> ???? </a> ???
</p -->


<br/><br/><br/><br/><br/><br/>
</div>
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
