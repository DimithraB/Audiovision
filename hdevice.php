<?php

$conhdevice = mysqli_connect('localhost', 'root', '');

if(!$conhdevice)    //to check the server connection
{
	echo "Not Connected To the server";
}

if(!mysqli_select_db($conhdevice,'w1743067_device_interface'))     //to check the database connection
{
	echo 'Database not selected';
}

$w1743067_deviceCatalogID =  $_POST['w1743067_deviceCatalogID'];
$w1743067_hdMake = $_POST['w1743067_hdMake'];
$w1743067_hdModel = $_POST['w1743067_hdModel'];

$sql = "INSERT INTO w1743067_hearing_device(w1743067_deviceCatalogID,w1743067_hdMake,w1743067_hdModel) VALUES ('$w1743067_deviceCatalogID','$w1743067_hdMake','$w1743067_hdModel')";

if(!mysqli_query($conhdevice,$sql))
{
	echo "Not Inserted";
}
else
{
	echo "Data Inserted Successfully";
}

header("refresh:2; url=deviceHTML.php");    //to auto refresh the brower after inserting the data 


?>