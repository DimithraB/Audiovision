<?php

$condevice = mysqli_connect('localhost', 'root', '');

if(!$condevice)   //to check the server connection
{
	echo "Not Connected To the server";
}

if(!mysqli_select_db($condevice,'w1743067_device_interface'))   //to check the database connection
{
	echo 'Database not selected';
}

$w1743067_deviceCatalogID =  $_POST['w1743067_deviceCatalogID'];
$w1743067_deviceCatalogName = $_POST['w1743067_deviceCatalogName'];
$w1743067_deviceDescription = $_POST['w1743067_deviceDescription'];
$w1743067_deviceAvailability = $_POST['w1743067_deviceAvailability'];

$sql = "INSERT INTO w1743067_device(w1743067_deviceCatalogID,w1743067_deviceCatalogName,w1743067_deviceDescription,w1743067_deviceAvailability) VALUES ('$w1743067_deviceCatalogID','$w1743067_deviceCatalogName','$w1743067_deviceDescription','$w1743067_deviceAvailability')";

if(!mysqli_query($condevice,$sql))
{
	echo "Not Inserted";
}
else
{
	echo "Data Inserted Successfully";
}

header("refresh:2; url=deviceHTML.php");   //to auto refresh the brower after inserting the data 


?>