<?php
require("connection.php");
require("utils.php");

// Check if the 'id' parameter is set in the POST request
echo $_POST;
if(isset($_POST['id'])) {
    // Access the 'id' parameter value
    $id = $_POST['id'];

    // Send the 'id' parameter back to the client in the response
    $responseData = array(
        'id' => $id
    );
    header('Content-Type: application/json');
    echo json_encode($responseData);
} else {
    // 'id' parameter not found, send an error response
    header('Content-Type: application/json');
    echo json_encode(array('error' => 'ID parameter not provided'));
}




// require("connection.php");
// require("utils.php");

// json_encode(utf8ize($_POST));
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
