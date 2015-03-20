<link rel="stylesheet" href="main.css" />
<?php 
$vars = array();
	$vars = explode("/", $_GET['var']);

/*
	echo '<pre>';
	print_r($vars);
	echo '</pre>';
	*/
	
	if (file_exists($vars[0].".php")) 
	{
					include($vars[0].".php");
	}
	else
	{
								
				if($vars[0]=="" || $vars[0]==null || $vars[0]=="index")
				{
					include("?var=home.php");
				}
				
				
	}

include_once("renderCss.php");
include_once("footer.php");

?>
