<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>:: Welcome to Iglesia Bautista Shalom! :: </title>

<link href="css/ibs-site_general.css" rel="stylesheet" type="text/css" />
<link href="css/jquery-ui-1.7.2.custom.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="js/jquery-1.3.2.min.js"></script>
<script type="text/javascript" src="js/jquery-ui-1.7.2.custom.min.js"></script>
<?php define("ROOT",""); ?>
</head>
<body>				
<div id="container">
	
    <div>
    <?php include ROOT."inc/header.php"; ?>
    </div>
    
    <div>
    <?php include ROOT."inc/topBanner.php"; ?>
    </div>
  
<div id="btm-cont">
	
  <?php include ROOT."inc/sidebar.php"; ?>
  	 
  <div id="body-content">
  
  <div id="body-text">
  <h1>Welcome the Iglesia Bautista Shalom!</h1>
  <p> Thank you for visiting Iglesia Bautista Shalom! We welcome you to our new home on the world wide web.  Here you will find extensive information about our congregation, events, services, projects, and purpose.  We are committed to providing our visitors with a memorable experience whether at our physical home in Highland Park, CA or our virtual home on the web.</p>
<p>I.B.S. is a Christian congregation devoted to serving our community with God’s truth and love through teachings, intimate worship experience, personal growth, and genuine fellowship.  As our name states, we are a church that lives Shalom, the peace of God.  Understanding the hardships this life presents, we provide our visitors the opportunity to experience the peace and love of God. </p>
  
  <div style="clear:both;"><img src="images/pastorSig_11.png" align="right" style="margin-bottom:15px;"/></div>
  </div>
  
  <div id="body-btmCont">    
  
  <div id="weekDev-hme" class="weekdevcont">
	<?php include ROOT."xml/weekdevcont.php"; echo $weekdev070110; ?>
    <p><a href="<? echo ROOT.'resources' ?>">view more &raquo;</a></p>
  </div>
  
    <a href="news"  onclick="tab_aboutTab('Events');" >
    <div id="upEvent">
    <table width="260" border="0" cellpadding="0" cellspacing="0" style="text-align:left;">
  <tr>
  <th scope="col"><h2 style="margin-bottom:.5em;">Upcoming Events</h2></th>
  </tr>
  <tr>
  <td class="eventTable"><t>Friday, February 12, 2010</t><br />    
      Men’s group reunion @ 7:30pm.</td>
  </tr>
  <tr>
  <td class="eventTable"><t>Saturday, February 13, 2010</t><br /> 
  Annual Couples Dinner @ 5:00pm.</td>
  </tr>
  <tr>
  <td class="eventTable"><t>Sunday, February 28, 2010</t><br /> First men’s group reunion @ 7:30pm.</td>
  </tr>
  <tr>
  <td class="eventTable"><t>Saturday, March 06, 2010</t><br /> 
  Women's Event in South Gate @ 9:00am.</td>
  </tr>
  <tr>
  <td class="eventTable"><t>Friday, January 17, 2009</t><br /> First men’s group reunion @ 7:30pm.</td>
  </tr>
  </table>
    </div>
    </a>
  
  </div>  
  
  </div>
</div>
    
	<div>
    <?php include ROOT."inc/footer.php"; ?>
	</div>
    
  </div>
    
</div>
</body>
</html>
