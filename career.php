<?php $page_index = 4;?>
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
<img src="images/dict.png" alt="" style="width:860px; height:213px; text-align:center"/>
</div>
<!-- Banner Panel End -->

<!-- Middle Panel Start -->
<div class="middle">

<h1>Career: Be a Trendwiser</h1>

<div class="serviceContainer">
<span class="pic" id="partner"><img src="images/icon1.gif" alt="Partners" /></span>
<div class="right">
<h2>Life in Trendwise Analytics</h2>
<p> Every day is different for a typical Trendwiser. In Trendwise we look forward to it as an opportunity given for us to make a difference in the world of technology. We are in a race to stay ahead of the curve and deliver innovation. We are always in look out for the best of the breed engineers and analyst with sharp mind and keen eyes.</p>

<p> You can also be a part of this high energy- high performance team by letting us know about you and your ability. Find below the current openings in our company and send us your CV to <a href="mailto:career@trendwiseanalytics.com"><u> career@trendwiseanalytics.com</u> </a>. 
</p>

<p><b> SAS or SPSS Analyst : </b><br/>
- Have knowledge of econometric/statistical modeling and predictive modeling techniques<br/>
- Good knowledge of Regression analysis, Hypothesis testing, Multivariate statistical analysis<br/>
- Good knowledge of Time series analysis, Optimization techniques, cluster analysis, CART<br/>
- Should have hands on experience on statistical packages such as SAS, SPSS.<br/>
- Must have a Bachelor or Master degree in Statistics, Econometrics or Economics <br/>
</p>

<p><b> Apple iOS App Developer : </b> <br/>
Basic skill set should be -<br/> 
- Objective C, Object Oriented Programming<br/> 
- Basic SQL query and DBMS concepts<br/> 
- Programming Methodology & Software Architecture<br/> 
- Excellent in Maths and Physics<br/> 
 </p>

<p><b> Hadoop / Java Developer : </b> <br/>
- 2-5 years Java & advance Java experience <br/>
- Basic functional knowledge of any RDBMS and SQL <br/>
- Functional knowledge of working with cloud based clusters <br/>
</p>


<p><b> Fresh Graduate Engineer : </b> <br/>
Basic skill set should be -<br/> 
- One or more programming language<br/> 
- Object Oriented Programming & Design<br/> 
- Data structures and algorithm<br/> 
- Programming Methodology & Software Architecture<br/> 
</p>

<p><b> Note: All the above openings need  : </b> <br/>
- Verbal and written communication<br/> 
- Strong analytical and problem solving skil<br/> 
- Creative and team player <br/> 
- Must have an engineering or an MCA degree unless specified otherwise <br/> 
Location for all the positions is Bangalore
</p>

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
