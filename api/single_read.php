<?php
    header("Access-Control-Allow-Origin: *");
    header("Content-Type: application/json; charset=UTF-8");
    header("Access-Control-Allow-Methods: POST");
    header("Access-Control-Max-psid: 3600");
    header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

    include_once '../config/database.php';
    include_once '../class/employees.php';

    $database = new Database();
    $db = $database->getConnection();

    $item = new Employee($db);

    $item->id = isset($_GET['id']) ? $_GET['id'] : die();
  
    $item->getSingleEmployee();

    if($item->userId != null){
        // create array
        $emp_arr = array(
            "id" =>  $item->id,
            "userId" => $item->userId,
            "channel" => $item->channel,
            "psid" => $item->psid,
            "appId" => $item->appId,
            "event" => $item->event,
            "ts" => $item->ts,
            "tid" => $item->tid,
            "message" => $item->message,
            "attachments" => $item->attachments,
            "locale" => $item->locale,
            "gender" => $item->gender,
            "timezone" => $item->timezone,
            "pciInfo" => $item->pciInfo,
            "created" => $item->created
        );
      
        http_response_code(200);
        echo json_encode($emp_arr);
    }
      
    else{
        http_response_code(404);
        echo json_encode("Employee not found.");
    }
?>