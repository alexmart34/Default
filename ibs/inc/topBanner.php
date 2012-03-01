<script type="text/javascript">
	  $(document).ready(function() {
		  $(".paging").show();
		  $(".paging a:first").addClass("active");

		  var imageWidth = $(".window").width();
		  var imageSum = $(".image_reel img").size();
		  var imageReelWidth = imageWidth * imageSum;
		  
		  $(".image_reel").css({'width' : imageReelWidth});

		  rotate = function(){	
			  var triggerID = $active.attr("rel") - 1; 
			  var image_reelPosition = triggerID * imageWidth; 
			  $(".paging a").removeClass('active'); 
			  $active.addClass('active'); 
			  $(".image_reel").animate({ 
				  left: -image_reelPosition
			  }, 300 );
			  
		  }; 
		  rotateSwitch = function(){		
			  play = setInterval(function(){ 
				  $active = $('.paging a.active').next();
				  if ( $active.length === 0) { 
					  $active = $('.paging a:first'); 
				  }
				  rotate();
			  }, 8500); 
		  };
		  rotateSwitch(); 
		  
		  //On Hover
		  $(".image_reel a").hover(function() {
			  clearInterval(play); 
		  }, function() {
			  rotateSwitch();
		  });	
		  $(".paging a").click(function() {	
			  $active = $(this); 
			  clearInterval(play); 
			  rotate();
			  rotateSwitch(); 
			  return false;
		  });	
		  
	  });
</script>  

<style>
.main_view {position: relative;}
.window {height:213px;	width: 900px; overflow:hidden;	position: relative;}
.image_reel {position: absolute; top: 0; left: 0;}
.image_reel img {float: left;}
.paging {font-family:Arial, Helvetica, sans-serif;font-size:12px;position: absolute;bottom: 10px; left: 15px; width: 110px; height:25px; z-index: 100; text-align: center; vertical-align:middle; display: none;}
.paging a {padding: 2px 6px;margin:0 -1px; background:#333; border: solid 1px #999; text-decoration: none; color: #fff !important;}
.paging a.active {font-weight: bold; background:#666;}
.paging a:hover {font-weight: bold; background:#777;}
#pageID {top:-10px;}
</style>

<div class="main_view">
<div class="window">
<div class="image_reel">
        <img src="<?php echo ROOT."images/topBanner.png";?>">
        <img src="<?php echo ROOT."images/topBanner2.png";?>">
        <img src="<?php echo ROOT."images/topBanner3.png";?>">
        <img src="<?php echo ROOT."images/topBanner4.png";?>">
</div>
</div>
<div class="paging"><a href="#" rel="1">1</a> <a href="#" rel="2">2</a> <a href="#" rel="3">3</a> <a href="#" rel="4">4</a></div>
</div>