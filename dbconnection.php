<?php
// Create connection
$con=mysqli_connect("localhost:3306","amazonsc","5s7l9*Nh3n(A","amazonsc_hospital");

// Check connection
if (mysqli_connect_errno($con))
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
?>