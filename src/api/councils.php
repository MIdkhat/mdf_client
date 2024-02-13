<?php
require("databaseinfo_user.php");
require("utils.php");

$connection = mysqli_connect ('localhost', $username, $password);
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  exit;
} 

$db =  mysqli_select_db($connection, $database);
if (!$db) {
    die ('Can\'t use db : ' . mysqli_error());
} 

$sql = "SELECT * from councils";
$result = $connection->query($sql);
$response = array();
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        array_push($response, $row);
    }
}
header('Content-Type: application/json');
echo json_encode(utf8ize($response));

?>
