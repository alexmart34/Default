<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>:: Welcome to Iglesia Bautista Shalom! :: </title>

<link href="../css/ibs-site_general.css" rel="stylesheet" type="text/css" />
<link href="../css/jquery-ui-1.7.2.custom.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="../js/jquery-1.3.2.min.js"></script>
<script type="text/javascript" src="../js/jquery-ui-1.7.2.custom.min.js"></script>
<script type="text/javascript">
			
			$(function(){

				// Dialog			
				$('#dialog').dialog({
					autoOpen: false,
					width: 650,
					height: 450,
					modal: true,
				});
				
				$('#dialog2').dialog({
					autoOpen: false,
					width: 650,
					height: 450,
					modal: true,
				});
				
				// Dialog Link
				$('#dialog_link').click(function(){
					$('#dialog').dialog('open');
					return false;
				});

				$('#dialog_link2').click(function(){
					$('#dialog2').dialog('open');
					return false;
				});
				
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
  
    <div>
    <?php include ROOT."inc/sidebar.php"; ?>
    </div>		
 
  <div id="body-content">
    
    <div id="body-text">
    
      <div>
      <h1 style="margin-bottom:.3em;">Ministries </h1>
      <span style="font-size:11px; color:#909090;">Here at Shalom we believe in providing opportunities of fellowship, personal growth, and spiritual formation.  We have numerous ministries ranging from marriage group to youth ministry whose focus is to support your walk with Christ regardless of age or geneder.  We invite you to explore our ministries and get involved with our community! </span>    
      </div>
    
  </div>
    
  
  <div id="body-btmCont" style="margin-top:30px;">
		 
		 <?php 
    
            $pass = array('men-women','youth','marriage','sunschool','daycare','music');

            if (in_array($_GET['id'], $pass)) {
                include ('../ministries/' . $_GET['id'] . '.php'); 
            } 
            
            elseif (!isset($_GET['id'])) {
                include ("../ministries/min_home.php"); 
            }
    
		  ?>
          
    </div>
  
  </div>
  
  <div>
<?php include ROOT."inc/footer.php"; ?>
</div>
    
</div>
</body>
</html>
