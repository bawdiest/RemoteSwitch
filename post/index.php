<?php
$con=mysqli_connect("localhost","root","Gaffe2012","wateringStation");
// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

echo $_SERVER['REMOTE_ADDR'];
echo ("Hallo");
$server = $_SERVER['REMOTE_ADDR'];

$query = "INSERT INTO msgLog (msgid, var1, var2, var3, var4) VALUES ('18', '$server', '2', '3', '4')";

if (!mysqli_query($con, $query)) {
  die('Error: ' . mysqli_error($con));
}
echo "1 record added";

mysqli_close($con);
?>