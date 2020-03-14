<script type="text/javascript">

	$(document).ready(function(){

	     	 $("#getbtn").click(function(){

	     	 	$.ajax({
	     	 		url:'<?php echo site_url()?>/UsermanagementController/forwardtrack',
	     	 		// url:'forwardtrack.php',
	     	 		type:'POST',
	     	 		success:function(dataresponse){
	     	 			$(' #loadcontent').html();
	     	 		});

	     	 	});
	     	 });

	     	});




	</script>