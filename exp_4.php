<?php
	session_start();
	$mobile=$_SESSION['user']['name'];
        $servername = "localhost";
        $username = "btech2017";
        $password = "btech2017";
        $dbname = "btech2017";
        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
        if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
        }
        $sql="select Name,`Mobile No.`,start,end from trial_1 where `Mobile No.`!=".$mobile;
//      $sql = "SELECT start,end from trial_1 where ``=$mobile";
        $result = $conn->query($sql);
	$_SESSION['user1']=$result->fetch_assoc();
	//echo $_SESSION['user1']['Mobile No.'];
        //echo $sql;
        //echo $_SESSION['user']['start'];
        $conn->close();
?>

<!DOCTYPE html>
<html>
        <head>
                <title>Simple Map</title>
                <meta name="viewport" content="initial-scale=1.0">
                <meta charset="utf-8">

<style>
      /* Always set the map height explicitly to define the size of the div
       * element that contains the map. */
      #map {
        height: 40%;
        margin: 5%;
        padding: 5%;
      }
      /* Optional: Makes the sample page fill the window. */
      html, body {
        height: 100%;
        margin: 0;
        padding: 0;
      }
    </style>
        </head>
<body>
	<div id="name"></div>
	<div id="map"></div>
	<form action="book.php" method="post">
		<input type="submit" value="Book the car">
	</form>
	<script>
		document.getElementByID("name")=<?php echo $_SESSION['user1']['Name'] ?>;
		function initMap() {
      var directionsService = new google.maps.DirectionsService;
        var directionsRenderer = new google.maps.DirectionsRenderer;
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 6,
          center: {lat: 22.565, lng: 88.300}
        });
        directionsRenderer.setMap(map);

        document.getElementById('submit').addEventListener('click', function() {
          calculateAndDisplayRoute(directionsService, directionsRenderer);
        });
		}

	function calculateAndDisplayRoute(directionsService, directionsRenderer) 
      {
          directionsService.route({
            origin:<?php echo '"'.$_SESSION['user1']['start'].'"' ?> ,
            destination: <?php echo '"'.$_SESSION['user1']['start'].'"' ?> ,
            optimizeWaypoints: false,
            //waypoints:[{location:"Howrah Station",stopover:true}],
            travelMode: 'DRIVING'
          }, function(response, status) {
            if (status === 'OK') {
              directionsRenderer.setDirections(response);
              
            } else {
              window.alert('Directions request failed due to ' + status);
            }
          });
      }
	</script>
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB1eVkd3FfLjMoZQFr219uDVf5-UehI_mU&callback=initMap"
    async defer></script>	

</body>
</html>
