<?php 
include("includes/header.php");
?>
    <link rel="stylesheet" href="./css/view_suggestions.css" />
    <link rel="stylesheet" href="css/view_tickets.css" />
    <title>Help Posts </title>
<?php 
include("includes/nav.php");
?>

    <?php 
    echo "<div class='ticket-container'>";
     include("includes/db.php");
    $sqlquery = "SELECT * from helpposts";
    $result = mysqli_query($conn,$sqlquery);

    while($row=mysqli_fetch_assoc($result)){
      $username = $row["username"];
      $description = $row["description"];
      $created = $row["created"];
      //echo "Category $field <br> $suggestion <br> Suggested by $username at $created<hr>";
        echo "<div class='suggestion'>
                <h3>Help Tickets</h3>
                <p>$description</p>
                <h5>Created by $username</h5><h6>at $created</h6>
            </div>";
    }
    echo "</div>";
    ?>
            <div class="create-button">
                <a href="helpup.php" class="button">Create</a>
            </div>
  </div>
    
        <hr>
    <?php include("includes/footer.php"); ?>
    
</body>
</html>
    