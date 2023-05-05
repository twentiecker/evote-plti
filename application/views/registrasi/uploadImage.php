<?php

if (isset($_FILES["webcam"]["tmp_name"])){
$tmpName = $_FILES["webcam"]["tmp_name"];

$imageName = $nik."_".$no.".jpeg";

//move_uploaded_file($tmpName,'img/'.$foldername.'/'.$imageName);
move_uploaded_file($tmpName,'img/'.$imageName);

}
    
?>