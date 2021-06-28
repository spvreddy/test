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

    $data = json_decode(file_get_contents("php://input"));

    $item->userId = $data->userId;
    $item->channel = $data->channel;
    $item->psid = $data->psid;
    $item->appId = $data->appId;
    $item->event = $data->event;
    $item->ts = $data->ts;
    $item->tid = $data->tid;
    $item->message = $data->message;
    $item->attachments = $data->attachments;
    $item->locale = $data->locale;
    $item->gender = $data->gender;
    $item->timezone = $data->timezone;
    $item->pciInfo = $data->pciInfo;
    $item->created = date('Y-m-d H:i:s');
    
    if($item->createEmployee()){
        echo 'Employee created successfully.';
    } else{
        echo 'Employee could not be created.';
    }
?>