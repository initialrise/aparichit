<?php
/*Suggestion category and description needs login*/
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <form method="post" action="suggestions.php">
    <label for="field">Choose a field:</label>

<select name="field" id="field">
  <option value="education">Education</option>
  <option value="publiccon">Public Construction</option>
  <option value="tourism">Tourism and heritage</option>
  <option value="tax">Tax</option>
</select>
        <input type="text" name="description" placeholder="Description" ><br>
        <input type="submit" name="submit"><br>
</form>
     
</body>
</html>