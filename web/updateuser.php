<?php
require_once './dbconnect.php';
session_start();
$id=$_POST["id"];
$age=$_POST["age"];
$name=$_POST["name"];
$phone=$_POST["phone"];

//$usr=trim($_POST['usr']);
$datas = $database->update("user_message",["name" => $name,"age" => $age,"phone"=> $phone],[
    "id" => $id
]);
echo json_encode($datas);
?>