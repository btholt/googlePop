<?

if ($_SERVER['HTTP_HOST'] == "stage-v2.ksl.com")
    $key = $Google_key = "ABQIAAAAKrYcz86Ziq3DEMj9A-rqARRCuMQwNnedTDmrr1aW3BX2yfoHvBScT5Z0ki_oiKzwxAUop4WNHqIUWw";
elseif($_SERVER['HTTP_HOST'] == "classifieds.desnews.com")
    $key = $Google_key = "ABQIAAAAqgqtaIrxPSulOh9D2wbOZxRiSJwCZNWuRTidLrzadyLtPrBEvBQ6FdRFQTPKNW5GiA7dxj-QPThBzA";
elseif($_SERVER['HTTP_HOST'] == "classifieds.deseretnews.com")
    $key = $Google_key = "ABQIAAAAqgqtaIrxPSulOh9D2wbOZxSLGJTKabsqCvdUo26v8ueCctCpKxSafHFo49rAagLzSoEcCezjXl0zPQ";
else //ksl.com key
    $key = $Google_key = "ABQIAAAAyDfUGKEbnVPeZXbna1ojzxRqjEo0UWv7NML1CvfGrigFhkUudRQwCyLjK_SyhV0WozCnRaFbjkadhg";
// $source = "http://maps.googleapis.com/maps/api/js?sensor=false&amp;key=$key";
$source = "http://maps.googleapis.com/maps/api/js?sensor=false";

?>

<script src="<? echo $source ?>" type="text/javascript"></script>

<body onload="GLoad()">
	<div id="google_map_canvas" style="width: 410; height: 340">Google Map goes here!</div>
	 <div id="address_bar" style="position:absolute;width:410px;top:290px;background-color:#369;color:#fff;text-align:center;padding:5px 0px 5px 0px;border-top:1px solid #fff;border-bottom:1px solid #fff;"><? echo $_GET['display']?></div>
	
</body>


<script type="text/javascript">

//

	function GLoad () {
		var triad = new google.maps.LatLng(<? echo $_GET['latitude'] ?>,<? echo $_GET['longitude'] ?>);
		
		var myOptions = {
			zoom: 16,
			center: triad,
			mapTypeId: google.maps.MapTypeId.ROADMAP
		};
		
	
		var map = new google.maps.Map(document.getElementById("google_map_canvas"), myOptions);
		
		var marker = new google.maps.Marker({
	      position: triad, 
	      map: map, 
		});
	}
	
</script>