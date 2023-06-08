<?php include("includes/db.php") ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    $sqlquery = "SELECT * from corruption";
    $result = mysqli_query($conn,$sqlquery);

    while($row=mysqli_fetch_assoc($result)){
      $url = $row["vidurl"];
      $description = $row["description"];
      $created = $row["created"];
      echo "<video src='uploads/$url'></video>";
      echo "<br>$description <br> Suggested by anonymous at $created<hr>";
    }
    ?>
    
</body>
</html>