<div id="head">
<div id="map">
<script src='https://maps.googleapis.com/maps/api/js?v=3.exp'>
</script><div style='overflow:hidden;height:316px;width:692px;'>
<div id='gmap_canvas' style='height:316px;width:692px;'></div>
<style>#gmap_canvas img{max-width:none!important;background:none!important}</style>
</div> <a href='http://www.maps-generator.com/'>www.maps-generator</a>
 <script type='text/javascript' src='https://embedmaps.com/google-maps-authorization/script.js?id=1286ef7aa79b889db79652385893132f7daa4b31'>
 </script>
 <script type='text/javascript'>
 function init_map(){var myOptions = {zoom:12,center:new google.maps.LatLng(30.0130557,31.2088526),mapTypeId: google.maps.MapTypeId.ROADMAP};map = new google.maps.Map(document.getElementById('gmap_canvas'), myOptions);marker = new google.maps.Marker({map: map,position: new google.maps.LatLng(30.0130557,31.2088526)});infowindow = new google.maps.InfoWindow({content:'<strong>rerosa</strong><br><br> Giza<br>'});google.maps.event.addListener(marker, 'click', function(){infowindow.open(map,marker);});infowindow.open(map,marker);}google.maps.event.addDomListener(window, 'load', init_map);
 </script>
</div>
<div id="about">
this is rerosa restaurant the bigist restaurant in egypt<br>
our location in Giza your visite make us happy 
</div>

</div>
<hr>
<div id="boot">
<div id="chart">
 <script type="text/javascript" src="/js/Chart.min.js"></script>
<div class="container">
	
	
		<canvas id="canvas" height="400" width="400"></canvas>
	</div>
	<?php
	$result=query("select * from `foods` order by vote  desc
limit 5");
  $drop=query("select * from `foods`");
	?>	
<script>
var first="<?php echo $result[0]['name'];?>"; 

  var second="<?php echo $result[1]['name'];?>";
  var third="<?php echo$result[2]['name'];?>";
  var fourth="<?php echo$result[3]['name'];?>";
  var fifth="<?php echo$result[4]['name'];?>";
  var firstv="<?php echo$result[0]['vote']/$result[0]['number'];?>";
  var secondv="<?php echo$result[1]['vote']/$result[1]['number'];?>";
  var thirdv="<?php echo$result[2]['vote']/$result[2]['number'];?>";
  var fourthv="<?php echo $result[3]['vote']/$result[3]['number'] ;?>";
  var fifthv="<?php echo $result[4]['vote']/$result[4]['number']; ?>";
		var LineChart = {
			labels : [first, second,third,fourth,fifth],
			datasets : [
				{
					fillColor : "rgba(151,249,190,0.5)",
					strokeColor : "rgba(255,255,255,1)",
					pointColor : "rgba(220,220,220,1)",
					pointStrokeColor : "#fff",
					data : [0,10,20,30,40]
				},
				{
					fillColor : "rgba(252,147,65,0.5)",
					strokeColor : "rgba(255,255,255,1)",
					pointColor : "rgba(173,173,173,1)",
					pointStrokeColor : "#fff",
					data : [firstv, secondv,thirdv,fourthv,fifthv]
				}
			]
			
		}

	var myLineChart = new Chart(document.getElementById("canvas").getContext("2d")).Line(LineChart, {scaleFontSize : 13, 	scaleFontColor : "#ffa45e"});
	</script>
</div>
<div id="text">
<p class="texte">
New data from the USDA’s Economic <br>
Research Service (ERS) lets you peek <br>
into the kitchens of Americans and find<br>
out how they’re eating—based on what they’re<br>
buying.The ERS’s Food Availability data measures<br>
yearly supplies of several food commodities in the U.S.,<br>
and this year, some of the most<br> 
interesting results are that sweet foods <br>
like ice cream appear to dropping, though we tend to mostly<br>
 like our fruit in
 </p> 
 <br>
 <button id="drag"  class="btn btn-default">Vote</button>
<button id="drt"  class="btn btn-default">Forget</button>
 <form action="restaurant.php" method="post" id="do">
<select name="selected" class="form-control">
<?php 
foreach($drop as $symbol){
?>
<option value="<?=$symbol['id']?>" ><?=$symbol['name']?>
<?php } ?>
</select> 
<input type="number" min=1 max=10 class="form-control" name="vote" required>
  <input type="submit" value="Vote"  class="btn btn-default">
 </form>
</div>

</div>
  <script src="/js/scripts.js"></script>
