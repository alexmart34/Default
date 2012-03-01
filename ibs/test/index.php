<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>:: Welcome to Iglesia Bautista Shalom! :: </title>

<link href="../css/ibs-site_general.css" rel="stylesheet" type="text/css" />
<link type="text/css" href="../css/jquery-ui-1.7.2.custom.css" rel="stylesheet" />	
<script type="text/javascript" src="../js/jquery-1.3.2.min.js"></script>
<script type="text/javascript" src="../js/jquery-ui-1.7.2.custom.min.js"></script>
<script type="text/javascript">
			$(function(){
	

				// Dialog			
				$('#dialog').dialog({
					autoOpen: false,
					width: 600,
					modal:true,
				});
				
				$('#dialog2').dialog({
					autoOpen: false,
					width: 600,
					modal:true,
				});
				
				// Dialog Link
				$('#dialog_link').click(function(){
					$('#dialog').dialog('open');
					return false;
				});
				
				$('#dialog_link2').click(function(){
					$('#dialog2').dialog('open');
					return false;
				})
				
			});
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
        <h1>Welcome the Iglesia Bautista Shalom!</h1>
        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.</p>
    <p>Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi.</p>
    Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus.
    
    <img src="../images/pastorSig_11.png" style="float:right;"/>
        </div>
        
        <div id="body-btmCont">    
         
          <div id="weekDev">
          <h2 style="margin:0px;">Weekly Devotional</h2><span style="line-height:1.5em; font-weight:bold;"><p style="margin:0px;"><verse>12</verse> I know what it is to be in need, and I know what it is to have plenty. I have learned the secret of being content in any and every situation, whether well fed or hungry, whether living in plenty or in want. <verse>13</verse> I can do everything through him who gives me strength.</p></span>
      <span style="text-align:right"><p><verse>Philippians 4:12-13 (NIV)</verse></p></span>
          <span style="color:#7b7b7b;"><p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.</p>
          <p>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu.</p></span>
          </div>
          
              <div id="upEvent">
              <table width="260" border="0" cellpadding="0" cellspacing="0" style="text-align:left;">
          <tr>
            <th scope="col"><h2>Upcoming Events</h2></th>
          </tr>
          <tr>
            <td class="eventTable"><t>Friday, January 17, 2009</t><br /> First men’s group reunion @ 7:30pm.</td>
          </tr>
          <tr>
            <td class="eventTable"><t>Friday, January 17, 2009</t><br /> First men’s group reunion @ 7:30pm.</td>
          </tr>
          <tr>
            <td class="eventTable"><t>Friday, January 17, 2009</t><br /> First men’s group reunion @ 7:30pm.</td>
          </tr>
          <tr>
            <td class="eventTable"><t>Friday, January 17, 2009</t><br /> First men’s group reunion @ 7:30pm.</td>
          </tr>
          <tr>
            <td class="eventTable"><t>Friday, January 17, 2009</t><br /> First men’s group reunion @ 7:30pm.</td>
          </tr>
        </table>
              
              <div style="margin-top:2em;">
              <a href="#" id="dialog_link" class="ui-state-default ui-corner-all">Test Dialog</a>
              <a href="#" id="dialog_link2" class="ui-state-default ui-corner-all">Test Dialog 2</a>
              </div>
              
              <div id="dialog" style="display:none;">
              <?php include("modal.php"); ?>
              </div>
              
              <div id="dialog2" style="display:none;">
              <?php include("modal2.php"); ?>
              </div>
              
              </div>
          
          </div>     
    
  </div>

<div>
<?php include("../inc/footer.php"); ?>
</div>
    
</div>
</body>
</html>
