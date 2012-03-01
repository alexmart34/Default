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
<script type="text/javascript">
			$(function(){

				// Dialog			
				$('#dialog').dialog({autoOpen: false,width: 625,modal:true,});
				$('#dialog2').dialog({autoOpen: false,width: 625,modal:true,});
				$('#dialog3').dialog({autoOpen: false,width: 625,modal:true,});
				$('#dialog4').dialog({autoOpen: false,width: 625,modal:true,});
				$('#dialog5').dialog({autoOpen: false,width: 625,modal:true,});
				$('#dialog6').dialog({autoOpen: false,width: 625,modal:true,});
				$('#dialog7').dialog({autoOpen: false,width: 625,modal:true,});
				$('#dialog8').dialog({autoOpen: false,width: 625,modal:true,});
				$('#dialog9').dialog({autoOpen: false,width: 625,modal:true,});
				$('#dialog10').dialog({autoOpen: false,width: 625,modal:true,});
				$('#dialog11').dialog({autoOpen: false,width: 625,modal:true,});
								
				// Dialog Link
				$('#dialog_link').click(function(){$('#dialog').dialog('open');return false;});
				$('#dialog_link2').click(function(){$('#dialog2').dialog('open');return false;});
				$('#dialog_link3').click(function(){$('#dialog3').dialog('open');return false;});
				$('#dialog_link4').click(function(){$('#dialog4').dialog('open');return false;});
				$('#dialog_link5').click(function(){$('#dialog5').dialog('open');return false;});
				$('#dialog_link6').click(function(){$('#dialog6').dialog('open');return false;});
				$('#dialog_link7').click(function(){$('#dialog7').dialog('open');return false;});
				$('#dialog_link8').click(function(){$('#dialog8').dialog('open');return false;});
				$('#dialog_link9').click(function(){$('#dialog9').dialog('open');return false;});
				$('#dialog_link10').click(function(){$('#dialog10').dialog('open');return false;});
				$('#dialog_link11').click(function(){$('#dialog11').dialog('open');return false;});
				
			});
</script>
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
  
<div id="btm-cont" style="height:670px;">
    <?php include ROOT."inc/sidebar.php"; ?>
		
 
  <div id="body-content">
  
  <div id="body-text">
    <h1>Contact Us</h1>
    
	<div id="subNav">
  <?
include ROOT."xml/tabs.php";

$tabs = new tabs("contactTab");

	$tabs->start("Service Times");
	echo ""; include("servtime.php");
	$tabs->end();
	
	$tabs->start("Contact Info");
    echo ""; include("contact.php");
	$tabs->end(); 

$tabs->active = "Contact Info";
$tabs->run();

?>
	</div>  
    
  </div>
  
  </div>
  
</div>

  <div>
  <?php include ROOT."inc/footer.php"; ?>
</div>
    
</div>
</body>
</html>
