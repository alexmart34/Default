
<link href="../css/ibs-site_general.css" rel="stylesheet" type="text/css">
<?php include("../xml/spirFormEntry.php"); ?>

<!-- Spiritual Formation Page Excerpt -->

  <div>
  
		<a href="../resources/index.php?id=entry1"><div id="spirformab">
		  <?php 
		  	echo $title;
			preg_match('/^([^.!?]*[\.!?]+){0,3}/', strip_tags($desc1), $abstract);
			echo $abstract[0];
			echo "<strong>&nbsp;&nbsp;Read more...</strong>";
			
		  ?>
		</div></a>
        
        <a href="../resources/index.php?id=entry2"><div id="spirformab" style="margin-top:25px;">
		  <?php 
		  	echo $title2;
			preg_match('/^([^.!?]*[\.!?]+){0,2}/', strip_tags($desc2), $abstract);
			echo $abstract[0];
			echo "<strong>&nbsp;&nbsp;Read more...</strong>";
			
		  ?>
		</div></a>
        
        <a href="../resources/index.php?id=entry3"><div id="spirformab" style="margin-top:25px;">
		  <?php 
		  	echo $title3;
			preg_match('/^([^.!?]*[\.!?]+){0,2}/', strip_tags($desc3), $abstract);
			echo $abstract[0];
			echo "<strong>&nbsp;&nbsp;Read more...</strong>";
			
		  ?>
		</div></a>
  
  </div>