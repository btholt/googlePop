<?


//If you want to use a Google Key, uncomment these two lines here and put your key here.
//Otherwise leave it as it.
// $key = "YOUR GOOGLE KEY HERE!";
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