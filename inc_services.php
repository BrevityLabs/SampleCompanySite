<?php $s_item = @$_REQUEST['s'];
?>
<div class="serviceContainer">
<?php if ($s_item == 'crm') { ?>
<span class="pic" id="crm"><img src="images/icon1.gif" alt="CRM Analytics" /></span>
<div class="right">
<h2>CRM Analytics</h2>
<p>Understanding the customer demands, preferences (which could even be latent in nature) and responding to them appropriately is the key to successful business. Today, customer data is available in plenty - they exist in multiple enterprise systems, customers share lots of information on social media and more. However, the challenge for businesses has been to scan through the loads of available information, establish association and derive actionable business insights. </p>

<p>Businesses rely on CRM analytics to help uncover customer insights. It's leveraged to effectively segment the customer base, devise strategy for customer acquisition &amp; retention, personalize product/services offerings, measure campaign/customer promotion yield, monitor social media buzz, refine/realign business execution plan based on the pulse of the customer (and more)</p>
<p>Trendwise specializes in this domain and helps customers devise/design end-to-end CRM analytics implementation strategy to take their CRM practice to the next level</p>
</div>
<?php } else { //else # 1
	if ($s_item == 'cst') { 
?>

<span class="pic" id="hr"><img src="images/icon2.gif" alt="HR Analytics" /></span>
<div class="right">
<h2>Case Studies</h2>
</div>

<?php } else { //else # 2
	if ($s_item == 'big') { 
?>

<span class="pic" id="bda"><img src="images/icon3.gif" alt="Big Data Analysis" /></span>
<div class="right">
<h2>Big Data Analysis (leveraging Hadoop)</h2>
<p>Businesses are leveraging big data today to anticipate demand, ....   (Why Big data and why should you bother)<br />
We undertake Hadoop   implementation, in combination with existing data warehouse system, to manage additional and peak data analytics workload</p>
</div>
</div>

<?php } else { //else # 3
	if ($s_item == 'som') { 
?>

<span class="pic" id="sma"><img src="images/icon4.gif" alt="Social Media and Text Analytics" /></span>
<div class="right">
<h2>Social Media and Text Analytics-- (Radian6, BuzzMetrics)</h2>
<p>Monitor conversation (consumer, competition, colleague/employee) about your product/services on social media<br />
Build a comprehensive social scorecard / Index to support business decision</p>
</div>

<?php } else { //else # 4
	if ($s_item == 'ada') { 
?>

<span class="pic" id="ada"><img src="images/icon5.gif" alt="Advanced Analytics and Predictive Modeling" /></span>
<div class="right">
<h2>Advanced Analytics and Predictive Modeling </h2>
<p>SAS / SPSS</p>
</div>

<?php } else { //else # 5
	if ($s_item == 'moa') { 
?>

<span class="pic" id="mma"><img src="images/icon6.gif" alt="Mobility &amp; Mobile Analytics" /></span>
<div class="right">
<h2>Mobility &amp; Mobile Analytics</h2>
</div>
<?php } else { //else # 6
?>
<div style='font-size:12pt;'>
<ul style='margin:0px 20px auto'>
<li><a href="services.php?s=big" >-	Big Data Analytics 		</a></li>
<li><a href="services.php?s=som" >-	Social Media 		 	</a></li>
<li><a href="services.php?s=crm" >-	CRM Analytics	  		</a></li>
<li><a href="services.php?s=ada" >-	Advanced Anaytics	 	</a></li>
<li><a href="services.php?s=moa" >-	Mobile Analytics 		</a></li>
<li><a href="services.php?s=cst" >-	Case Studies	 		</a></li>
</ul>
</div>
<?php 
} //else # 6
} //else # 5
} //else # 4
} //else # 3
} //else # 2
} //else # 1
?>
</div>


