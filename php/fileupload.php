<?php 
error_reporting();


$filename = $_FILES["uploadfile"]["name"];
$tempname = $_FILES["uploadfile"]["tmp_name"];
$folder = "folder/".$filename;
echo $folder;
move_uploaded_file($tempname,$folder);
echo "<img src = '$folder' height = '100' width = '100'/>"
?>