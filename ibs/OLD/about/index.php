<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>:: Welcome to Iglesia Bautista Shalom! :: </title>

<link href="../css/ibs-site_general.css" rel="stylesheet" type="text/css" />
<link href="../css/tabs.css" rel="stylesheet" type="text/css" />
<link href="../css/jquery-ui-1.7.2.custom.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="../js/jquery-1.3.2.min.js"></script>
<script type="text/javascript" src="../js/jquery-ui-1.7.2.custom.min.js"></script>
<?php define("ROOT","../"); ?>
</head>

<body>
<div id="container">
	
    <div>
    <?php include ROOT."inc/header.php"; ?>
    </div>
    
    <div>
    <?php include ROOT."inc/topBanner.php"; ?>
    </div>
  
	<div>
	<?php include ROOT."inc/sidebar.php"; ?>
  	</div>		
 
  <div id="body-content">
  
  <div id="body-text">
    <h1>About Us</h1>
    
	<div id="subNav">
  <?php include ROOT."xml/tabs.php";

$tabs = new tabs("aboutTab");

		
	$tabs->start("Our Vision");
	echo " "; include("vision.php");
	$tabs->end();
		
	$tabs->start("Our Staff");
	echo " "; include("staff.php");
	$tabs->end();
	
	$tabs->start("Our Pastors");
	echo " "; include("pastors.php");
	$tabs->end();
	
	$tabs->start("Our Community");
	echo " "; include("community.php");
	$tabs->end();

	$tabs->start("Our Truth");
    echo " ";include("truth.php");
	$tabs->end(); 

$tabs->active = "Our Truth";
$tabs->run();

?>
	</div>  
    
  </div>
  
  </div>

    <div>
    <?php include ROOT."inc/footer.php"; ?>
    </div>
    
</div>
</body>
</html>
