<?php
require("connection.php");
require("utils.php");

json_encode(utf8ize($_POST));
// $sql = "SELECT * from councils";
// $result = $connection->query($sql);
// $response = array();
// if ($result->num_rows > 0) {
//     while ($row = $result->fetch_assoc()) {
//         array_push($response, $row);
//     }
// }
// header('Content-Type: application/json');
// echo json_encode(utf8ize($response));

?>
