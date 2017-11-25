<?php 
session_start(); 

// Making database connection //
$connection=mysqli_connect('localhost','root','','kmc');
if(!$connection){
	die("connection failed" .mysqli_error());
}


// confirm query
function confirm($result){
  global $connection;
  if(!$result){
    die(mysqli_error($connection));
  }
}


function clean($data) {
  $data= trim($data);
  $data= stripslashes($data);
  $data= htmlspecialchars($data);
  return $data;
}
