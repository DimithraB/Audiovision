<?php

$convdevice = mysqli_connect('localhost', 'root', ''); 

if(!$convdevice)       //to check the server connection
{
	echo "Not Connected To the server"; 
}

if(!mysqli_select_db($convdevice,'w1743067_device_interface')) //to check the database connection
{
	echo 'Database not selected';        
}

$w1743067_deviceCatalogID =  $_POST['w1743067_deviceCatalogID'];
$w1743067_frameBrand = $_POST['w1743067_frameBrand'];
$w1743067_frameModel = $_POST['w1743067_frameModel'];
$w1743067_LensSerialNo =  $_POST['w1743067_LensSerialNo'];
$w1743067_lensVisionType = $_POST['w1743067_lensVisionType'];
$w1743067_lensTint = $_POST['w1743067_lensTint'];
$w1743067_lensThicknessLevel = $_POST['w1743067_lensThicknessLevel'];

$sql = "INSERT INTO w1743067_visual_device(w1743067_deviceCatalogID,w1743067_frameBrand,w1743067_frameModel,w1743067_LensSerialNo,w1743067_lensVisionType,w1743067_lensTint,w1743067_lensThicknessLevel) VALUES ('$w1743067_deviceCatalogID','$w1743067_frameBrand','$w1743067_frameModel','$w1743067_LensSerialNo','$w1743067_lensVisionType','$w1743067_lensTint','$w1743067_lensThicknessLevel')";

if(!mysqli_query($convdevice,$sql))
{
	echo "Not Inserted";
}
else
{
	echo "Data Inserted Successfully";
}

header("refresh:2; url=deviceHTML.php"); //to auto refresh the brower after inserting the data 


?>