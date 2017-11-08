<?php
require('includes/config.php');
$target_dir = "files/private/".$_SESSION['memberID'].'/';
$uploadOk = 1;
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$imageFileType = pathinfo($target_file, PATHINFO_EXTENSION);
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
$check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
if ($check !== false) {
$error[] = "File is an image - " . $check["mime"] . ".";
$uploadOk = 1;
} else {
$uploadOk = 0;
}
}
// Check if file already exists
if (file_exists($target_file)) {
$uploadOk = 0;
}
// Check file size
if ($_FILES["fileToUpload"]["size"] > 5000000) {
$uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" && $imageFileType != "rar" && $imageFileType != "zip" ) {
$uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
header('Location: privatefile.php?action=error');
exit;
// if everything is ok, try to upload file
} else {
if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
$filename = basename( $_FILES["fileToUpload"]["name"]);
try {
//insert into database with a prepared statement
$stmt = $db->prepare('INSERT INTO files (memberID, filename, date, isPrivate, rating) VALUES (:memberID, :filename, :date, :isPrivate, :rating)');
$stmt->execute(array(
':memberID' => $_SESSION['memberID'],
'filename' => $filename,
'date' => date("Y-m-d H:i:s"),
'isPrivate' => 1,
'rating' => 0,
));
}
catch(PDOException $e) {
// $error[] = $e->getMessage();
}
header('Location: privatefile.php?action=uploaded');
exit;
}
}
?>