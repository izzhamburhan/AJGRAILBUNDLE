<!-- <?php

$con=mysqli_connect("localhost","root","","testing");

if(mysqli_connect_error()){
	echo"Cannot connect to database";
	exit();
}

?> -->

<?php
// Create connection to Oracle
$conn = oci_connect("example@gmail.com", "*********", "//localhost/orcl");
if (!$conn) {
   $m = oci_error();
   echo $m['message'], "\n";
   exit;
}
else {
   print "Connected to Oracle!";
}
// Close the Oracle connection
oci_close($conn);
?>