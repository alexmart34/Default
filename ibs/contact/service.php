<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>:: Welcome to Iglesia Bautista Shalom! :: </title>

<link href="../css/ibs-site_general.css" rel="stylesheet" type="text/css" />
<link href="../css/jquery-ui-1.7.2.custom.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="../js/jquery-1.3.2.min.js"></script>
<script type="text/javascript" src="../js/jquery-ui-1.7.2.custom.min.js"></script>
<script type="text/javascript" src="../js/ajaxtabs.js"></script>
<script type="text/javascript">

	var countries=new ddajaxtabs("countrytab", "countrydivcontainer")
	countries.setpersist(true)
	countries.setselectedClassTarget("link") //"link" or "linkparent"
	countries.init()
	
</script>

</head>
<body>
<div id="container">
	
    <div>
    <?php include("../inc/header.php"); ?>
    </div>
    
    <div id="top-banner">
    </div>
  
  <div id="side-bar"> 
    <div style="padding-top:20px; text-align:center">
      <a href="#"><img src="../images/sidebar/youth.png" border="0" /></a>
      <a href="#"><img src="../images/sidebar/aquaViva.png" border="0" /></a>
      <a href="#"><img src="../images/sidebar/estudioBib_2.png" border="0" /></a>
    </div>	
  </div>	
 
  <div id="body-content">
  
  <div id="body-text">
    <h1>Contact Us</h1>
    
    <ul id="contactTab">
    	
        <li><a href="service.php"><div class="contactTab" style="background-color:#09f; color:white;">
        Service Times
        </div></a></li>
        
        <li><a href="index.php"><div class="contactTab" >
        Contact Info
        </div></a></li>

    </ul>
    
    <div id="content-container">
    <?php include("../contact/servtime.php"); ?>
    </div>
  
  </div>
  
  </div>
  <div>
  <?php include("../inc/footer.php"); ?>
</div>
    
</div>
</body>
</html>
