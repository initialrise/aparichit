<?php
include("includes/header.php");
include("includes/db.php");

if(isset($_POST["submit"])){
$filepath = $_FILES['videofile']['tmp_name'];
$fileSize = filesize($filepath);
$fileinfo = finfo_open(FILEINFO_MIME_TYPE);
$filetype = finfo_file($fileinfo, $filepath);
$allowedTypes = [ 'video/mp4' => 'mp4', 
            'video/webm' => 'webm'
            ];
if ($fileSize === 0) {
   die("The file is empty.");
}
if(!in_array($filetype, array_keys($allowedTypes))) {
   die("File not allowed. Only .mp4 and .webm are supported");
}
$filename = md5(date("h:i:sa")); 
$extension = $allowedTypes[$filetype];
$targetDirectory = __DIR__ . "/uploads"; 
$newFilepath = $targetDirectory . "/" . $filename . "." . $extension;
if (!copy($filepath, $newFilepath )) {    die("Can't move file.");
}
unlink($filepath);
echo "Submitted Successfully";
//db entries
$vidurl = $filename.".".$extension;
$description = $_POST["description"];
$sqlquery = "INSERT into corruption values(NULL,'$vidurl','$description',current_timestamp())";
mysqli_query($conn,$sqlquery);
header("Location: corruption.php");
}
?>
      <div class="upload-container">
            <h1>Video Upload</h1>
            <form method="post" enctype="multipart/form-data" id="upload-form" action="corruptionup.php">
                <div class="form-group">
                    <label for="videofile" class="vdo"><h2 class="vdo">Select Video</h2></label>
                    <input type="file" id="videofile" name="videofile" accept="video/*" required>
                </div>
                <div class="form-group">
                    <label for="description"><h3>Description</h3></label>
                    <textarea id="description" name="description" cols="65" rows="10" placeholder="write about video"></textarea>
                </div>
                <div class="form-group">
                    <button type="submit" name="submit">Upload</button>
                </div>
            </form>
        </div>

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
    <form method="post" action="corruptionup.php" enctype="multipart/form-data">
        <input type="text" name="description" placeholder="Description" ><br>
        <input type="file" name="videofile"><br>
        <input type="submit" name="submit"><br>
</form>
    
</body> 
</html>-->