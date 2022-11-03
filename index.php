<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json;");

    
    $json = file_get_contents('php://input');
    $data = json_decode($json, true);

    $operation = $data['operation_type'];
    $x = $data['x'];
    $y = $data['y'];

    $bolu = [
  "slackUsername":"ajileye",
  "result": $operation,
       "x"; $x,
        "y"; $y
       ];


 echo json_encode($bolu);
?>

