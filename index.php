<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json;");

    
    $json = file_get_contents('php://input');
    $data = json_decode($json);

 echo json_encode($data);

?>
