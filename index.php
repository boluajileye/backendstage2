<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json;");

    
    $json = file_get_contents('php://input');
    $data = json_decode($json);

    $operation = $data['operation_type'];
    $x = $data['x'];
    $y = $data[''];


 echo json_encode($operation);
echo json_encode($x);
echo json_encode($y);
?>
