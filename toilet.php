<?php
include("includes/requests.php");
echo "<h3>Toilets</h3>";
$ok = json_decode(postRequest("https://erp.kathmandu.gov.np/apilink/village-profile-by-data",'{"data_type":"23"}'),true);
 $toilets = $ok["data"];

 foreach($toilets as $toilet){
    echo $toilet["sp_pp_name"]."<br>";
    echo "Location: ".$toilet["sp_pp_location_latitude"]." ".$toilet["sp_pp_location_longitude"]."<br>";
    $location = $toilet["sp_pp_location_latitude"].",".$toilet["sp_pp_location_longitude"];
    echo "<a href='https://www.google.com/maps/search/$location'>Google Maps Link</a><hr>";
 }
?>