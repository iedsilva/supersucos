<link href="css.css" rel="stylesheet" type="text/css">
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script src="http://malsup.github.com/jquery.cycle.all.js"></script>
<script language="JavaScript" type="text/javascript">
$(function() {
$("#slideshow").cycle({ 
 fx:    "fade", 
 sync:   0, 
 delay: 2000 
 });
});
</script>

<script type="text/javascript">
$(document).ready(function(){
   $("#abacaxi").click(function(event){
      event.preventDefault();
      $("#img").hide('fast').fadeIn('fast').load('abacaxiimg.php');
	  $("#descr").hide('fast').load('abacaxi.php', function() {
         $(this).fadeIn('fast');
      });
   });
});	
</script>
