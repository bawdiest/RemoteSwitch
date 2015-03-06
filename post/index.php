<?php
$con=mysqli_connect("localhost","root","Gaffe2012","wateringStation");
// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

echo $_SERVER['REMOTE_ADDR'];
echo ("Hallo");
$server = $_SERVER['REMOTE_ADDR'];

if(isset($_GET['msgID'])) {$msgID = $_GET['msgID'];};
if(isset($_GET['var1'])) {$var1 = $_GET['var1'];};

$query = "INSERT INTO msgLog (msgid, var1, var2, var3, var4) VALUES ($msgID, $var1, 2, 3, 4)";

if (!mysqli_query($con, $query)) {
  die('Error: ' . mysqli_error($con));
}
echo "1 record added";

mysqli_close($con);
?>