<?php
include("includes/header.php");
?>
<link rel="stylesheet" href="./css/help_panel.css">
<?php
include("includes/nav.php");
include("includes/db.php");
if(!isset($_SESSION["username"])){
  header("Location: login.php?location=".urlencode($_SERVER['REQUEST_URI']));
}

if(isset($_POST["submit"])){
  $description = $_POST["description"];
  $username = $_SESSION["username"];

  $insertquery = "INSERT into helpposts VALUES(NULL,'$username','$description',current_timestamp())";
  //echo $insertquery;
  mysqli_query($conn,$insertquery);
}
/*Suggestion category and description needs login*/
?>
<div class="help-desk">
            <h2>Create New Ticket</h2>
            <form action="helpup.php" method="POST">
              <div class="form-group">
                <label for="description">Description:</label>
                <textarea id="description" name="description" rows="5" placeholder="Enter your Problems" required=""></textarea>
              </div>
              <div class="form-group">
                <button type="submit" name="submit">Submit</button>
              </div>
            </form>
          </div> <hr>
    <?php include("includes/footer.php"); ?>

<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <form method="post" action="suggestionsup.php">
        <input type="text" name="description" placeholder="Description" ><br>
        <input type="submit" name="submit"><br>
</form>
     
</body>
</html> -->