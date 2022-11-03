<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json;");

    
    $bolu = file_get_contents('php://input');
    $data = json_decode($bolu, true);

    $operation = $data['operation_type'];
    $x = $data['x'];
    $y = $data['y'];


    switch ($operation) {
    case "addition":
       $result = $x + $y;
        break;
    case "subtraction":
       $result = $x - $y;
        break;
    case "multiplication":
       $result = $x * $y;
        break;
    case "division":
       $result = $x / $y;
        break;
    default:
        $result = "Invalid Operation";
}


    $ajileyebolu = [
  "slackUsername"=>"ajileyebolu",
  "operation_type"=> $operation,
   "result"=> $result
       ];


 echo json_encode($ajileyebolu);
?>


   
