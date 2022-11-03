<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json;");

        $hng = [
            "slackUsername"=> "ajileyebolu",
            "backend"=>TRUE,
            "age"=> 23,
            "bio"=> "I am Ajileye Boluwatife, A recent graduate transitioning into tech. I'm so glad to be part of HNG9 interns"
        
        ];
    
    echo json_encode($hng);

    
    $json = file_get_contents('php://input');
    $data = json_decode($json);

 echo json_encode($data);

?>
