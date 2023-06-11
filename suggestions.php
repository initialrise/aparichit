<?php include("includes/header.php") ?>
    <?php 
    echo "<div class='suggestion-container'>";
    include("includes/db.php");
    $sqlquery = "SELECT * from suggestions";
    $result = mysqli_query($conn,$sqlquery);

    while($row=mysqli_fetch_assoc($result)){
      $field = $row["category"];
      $username = $row["username"];
      $suggestion = $row["description"];
      $created = $row["created"];
      //echo "Category $field <br> $suggestion <br> Suggested by $username at $created<hr>";
        echo "<div class='suggestion'>
                <h3>Suggestion</h3>
                <p>$suggestion</p>
                <h5>Created by $username</h5><h6>at $created</h6>
            </div>";
    }
    echo "</div>";
    ?>
            <div class="create-button">
                <a href="corruptionup.php" class="button">Create</a>
            </div>
  </div>
    
        <hr>
    <?php include("includes/footer.php"); ?>
    
</body>
</html>
    