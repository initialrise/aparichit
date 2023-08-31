<?php 
include("includes/header.php");
?>
    <link rel="stylesheet" href="./css/view_suggestions.css" />
    <link rel="stylesheet" href="css/view_tickets.css" />
    <title>Notices </title>
<?php 
include("includes/nav.php");
?>
<?php
include("includes/requests.php");
$newsresp = getRequest("https://kathmandu.gov.np/api/articles-api");
$news = json_decode($newsresp,true);
echo "<div style='margin:20px;margin-left:50px'>";
foreach($news as $article){
echo $article["Title"]."<hr><br>";
}
echo "</div>";
?>
    <?php include("includes/footer.php"); ?>
    
</body>
</html>
    
