<?php 
session_start();
include("includes/db.php") 
?>

<?php
if(isset($_POST["submit"])){
    $username = $_POST["username"];
    $password = md5($_POST["password"]);

    $checkquery = "SELECT * FROM users where username='$username' and password='$password'";
   // echo $checkquery;
    $result = mysqli_query($conn,$checkquery);
    //$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
    $row = mysqli_fetch_row($result);
    if(is_null($row)){
        echo "Invalid username/password";
    }
    else {
        echo "Login Successful";
        $_SESSION["username"] = $username;
        header("Location: index.php");
}
  
   
}
?>

<?php
if(!isset($_SESSION["username"])) {
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
    <form method="POST" action="login.php">
        <div id="userinput"><input type="text" name="username" id="username" placeholder="Username"></div>
        <div id="passinput"><input type="password" name="password" id="password" placeholder="Password"></div>
        <input type="submit" name="submit" value="Login">
</form>
    
</body>
</html>
<?php }
else
header("Location: index.php");
 ?>
