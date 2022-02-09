<?
    $lat = "";
    $lng = "";
    if(isset($_GET['submit'])){
        $lat = $_GET['lat'];
        $lng = $_GET['lng'];
    }
    $address = getaddress($lat,$lng);

  function getaddress($lat,$lng) {
     $url = 'https://maps.googleapis.com/maps/api/geocode/json?latlng='.trim($lat).','.trim($lng).'&sensor=false';
     $json = @file_get_contents($url);
     $data=json_decode($json);
     $status = $data->status;
     if($status=="OK")
     {
       return $data->results[0]->formatted_address;
     }
     else
     {
       return false;
     }
  }
?>

<!DOCTYPE html>
<html>
    <head>
        <style type="text/css">
          #map{ width:700px; height: 500px; }
        </style>
        <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js"></script>
        <title>Save Marker Example</title>
    </head>
    <body>
        <?php echo "Lat: ".$lat . " " . "Long: ".$lng; ?>
        <h1>Select a location!</h1>
        <p>Click on a location on the map to select it. Drag the marker to change location.</p>
        
        <!--map div-->
        <div id="map"></div>
        
        <!--our form-->
        <h2>Chosen Location</h2>
        <form action="./maps.php" method="get">
            <input type="text" id="lat" name="lat" readonly="yes"><br>
            <input type="text" id="lng" name="lng" readonly="yes">
            <input type="submit" name="submit" value="enviar">
        </form>

        <label>
            <?php if($address) {
                    echo $address;
                } else {
                    echo "Not found";
                } ?>
        </label>
        
        <script type="text/javascript" src="map.js"></script>
    </body>
</html>