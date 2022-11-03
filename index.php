<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json;");

    
    $bolu = file_get_contents('php://input');
    $data = json_decode($bolu, true);

    $operation = $data['operation_type'];
    $x = $data['x'];
    $y = $data['y'];


    switch ($result) {
    case '$operation == "addition"':
       $result = $x + $y;
        break;
    case '$operation == "subtraction"':
       $result = $x - $y;
        break;
    case '$operation == "multiplication"':
       $result = $x * $y;
        break;
    case '$operation == "division"':
       $result = $x / $y;
        break;
    default:
        $result = "Invalid Operation Used"
        break;
}


    $ajileyebolu = [
  "slackUsername"=>"ajileyebolu",
  "operation_type"=> $operation,
   "result"=> $result
       ];


 echo json_encode($ajileyebolu);
?>


   
