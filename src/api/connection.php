<?php
header("Access-Control-Allow-Origin: https://melbournedroneflyers.netlify.app");
header("Access-Control-Allow-Methods: GET, POST");
header("Access-Control-Allow-Headers: Content-Type");

require("databaseinfo_user.php");

$connection = mysqli_connect ('localhost', $username, $password);
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  exit;
} 

$db =  mysqli_select_db($connection, $database);
if (!$db) {
    die ('Can\'t use db : ' . mysqli_error());
} 

?>
