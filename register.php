
<?php
if(isset($_POST["submit"])){
    $fullname = $_POST["fullname"];
    $username = $_POST["username"];
    $password = md5($_POST["password"]);
    $number = $_POST["number"];

    $checkquery = "SELECT * FROM users where username='$username'";
    //echo $checkquery;
    $result = mysqli_query($conn,$checkquery);
    //$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
    $row = mysqli_fetch_row($result);
    if(is_null($row)){
        $insertquery = "INSERT INTO users VALUES (NULL, '$fullname', '$username', '$password', $number)";
        //echo $insertquery;
        mysqli_query($conn,$insertquery);
     echo "Registration Successfull";
    header("Location: login.php");
    }
    else {
        echo "Username exists";
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
   <form action="register.php" method="POST">
    <input type="text" name="fullname" placeholder="Full Name"><br>
    <input type="text" name="username" placeholder="Username"><br>
    <input type="password" name="password" placeholder="Password"><br>
    <input type="number" name="number" placeholder="Phone number"><br>
    <input type="submit" name="submit">
</form> 
</body>
</html>
<?php }else  
header("Location: login.php");
?>