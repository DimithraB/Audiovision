<!DOCTYPE html>
<html>
<head>
<title>DBPART2</title>
<link rel="stylesheet" type="text/css" href="main.css">
</head>
<body>

<div class="navbar">
<ul>
  <li><a class="active" href="#home">Home</a></li>
  <li><a href="vdeviceHTML.php">Visual Device</a></li>
  <li><a href="hdeviceHTML.php">Hearing Device</a></li>
  <li><a href="#contact">Contact</a></li>
  <li style="float:right"><a class="active" href="#about">AudioVizzion</a></li>
</ul>
</div>

<div class="wrapper">

<div class="img">
</div>

<div class="frm">

<h1>Welcome To AudioVizzion System</h1>
<h2>Add Your Device</h2>

<form action="device.php" method="post">
<table>
<tr>
<td>Device Catelog ID:</td>
<td><input type="text" name="w1743067_deviceCatalogID" ></td>
</tr>
<tr>
<td>Device Catelog Name:</td>
<td><input type="text" name="w1743067_deviceCatalogName" ></td>
</tr>
<tr>
<td>Description:</td>
<td><input type="text" name="w1743067_deviceDescription" ></td>
</tr>
<tr>
<td>Availability:</td>
<td><input type="text" name="w1743067_deviceAvailability" ></td>
</tr>
<tr>
<td><input type="submit" name="Add" value="Submit"></td>
</tr>
</table>

</form>

</div>

<footer>
<div>
  <p>Copyright © 2019 - Westminster - All Rights Reserved. Concept, Design & Development by AudioVizzion</p>
</div>
</footer> <!--footer ends here-->

</body>
</html>