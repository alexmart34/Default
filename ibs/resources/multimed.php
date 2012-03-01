<script type="text/javascript">
			
			$(function(){
				$('#dialog8').dialog({autoOpen: false,width: 625,modal:true,});
				$('#dialog9').dialog({autoOpen: false,width: 820,modal:true,});
				$('#dialog10').dialog({autoOpen: false,width: 820,modal:true,});

				$('#dialog_link8').click(function(){$('#dialog8').dialog('open');return false;});
				$('#dialog_link9').click(function(){$('#dialog9').dialog('open');return false;});
				$('#dialog_link10').click(function(){$('#dialog10').dialog('open');return false;});
				
			});
</script>


<div id="multimed">
	<a href="#" id="dialog_link8"><div id="multimedcont" style="border:none;">
    <img src="../images/multimedia/audio.png" border="0"/>
    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p> 
    </div></a>
    
    <a href="#" id="dialog_link9"><div id="multimedcont">
    <img src="../images/multimedia/video.png" border="0" />
    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p> 
    </div></a>
    
    <a href="#" id="dialog_link10"><div id="multimedcont">
    <img src="../images/multimedia/photos.png" border="0"/>
    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p> 
    </div></a>
    
</div>


<!-- Modal Windows -->


<!-- Audio Modal -->
<div id="dialog8">
<?php include("../resources/audio.php"); ?>
</div>


<!-- Video Modal -->
<div id="dialog9">
 <?php include("../resources/video.php"); ?>
</div>


<!-- Photo Modal -->

<div id="dialog10">
<?php include("../resources/photos.php"); ?>
</div>
