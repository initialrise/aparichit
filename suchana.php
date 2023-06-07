<?php
include("includes/requests.php");
$newsresp = getRequest("https://kathmandu.gov.np/api/articles-api");
$news = json_decode($newsresp,true);

foreach($news as $article){
echo $article["Title"]."<hr><br>";

//echo $article["Body"]."<br>";
}
?>