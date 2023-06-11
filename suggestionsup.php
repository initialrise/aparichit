<?php
//session_start();
include("includes/header.php");
include("includes/db.php");
if(!isset($_SESSION["username"])){
  header("Location: login.php?location=".urlencode($_SERVER['REQUEST_URI']));
}

if(isset($_POST["submit"])){
  $field = $_POST["field"];
  $description = $_POST["description"];
  $username = $_SESSION["username"];

  $insertquery = "INSERT into suggestions VALUES(NULL,'$username','$field','$description',current_timestamp())";
  //echo $insertquery;
  mysqli_query($conn,$insertquery);
}
/*Suggestion category and description needs login*/
?>
   
            
            <h2>Your Suggestions Here</h2>
            <form action="#" method="POST">
                   <div class="help-desk">
            <div class="help-desk-title">
                <label for="field">Category:</label>
                <select id="field" name="field">
                <option value="education">Education</option>
                <option value="health">Health</option>
                <option value="environment">Environment</option>
            <!-- Add more options as needed -->
                </select>
            </div>
              <div class="form-group">
                <label for="description">Description:</label>
                <textarea id="description" name="description" rows="5" placeholder="Enter your Suggestions" required></textarea>
              </div>
              <div class="form-group">
                <button type="submit" name="submit">Submit</button>
              </div>
            </form>
          </div>

          




    </div>
    <hr>
    <?php include("includes/footer.php"); ?>

<!-- 
   <form method="post" action="suggestionsup.php">
    <label for="field">Choose a field:</label>

<select name="field" id="field">
  <option value="education">Education</option>
  <option value="construction">Public Construction</option>
  <option value="tourism">Tourism and heritage</option>
  <option value="tax">Tax</option>
</select>
        <input type="text" name="description" placeholder="Description" ><br>
        <input type="submit" name="submit"><br>
</form>
     
</body>
</html> -->