<?php 
	$file_arr = array (
			0 => 'index.php'	,
			1 => 'about.php'	,
			2 => 'services.php'	,
			3 => 'partners.php'	,
			4 => 'career.php'	,
			5 => 'contact.php'	,
	);

	$title_arr = array (
			0 => 'Home'	,
			1 => 'About Us'	,
			2 => 'Services'	,
			3 => 'Partners'	,
			4 => 'Careers'	,
			5 => 'Contact'	,
	);
	
?>
    <h1><a href="index.php" title="Trendwise Analytics">Trendwise Analytics</a></h1>
	<div class='title'><font size='5pt'>Trendwise Analytics</font> <br/>An Analytics Company	</div>
    <div class="mainMenu">
      <ul>
<?php 
	for ($i=0;$i<6;$i++){
		echo "<li><a href='" . $file_arr[$i] . "'" ;
		if ($page_index == $i)
			echo " class='active'" ;
		echo ">" . $title_arr[$i] . "</a></li>" ;
	}
?>
    </ul>
    </div>
    