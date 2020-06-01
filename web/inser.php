<?php
require_once './dbconnect.php';
session_start();
$age=$_POST["iage"];
$name=$_POST["iname"];
$phone=$_POST["iphone"];

$database->query("insert into user_message select max(id)+1,'$name','$age','$phone' from user_message")->fetchAll();
$datas = $database->select("user_message","*",["name" => $name,"age" => $age,"phone" => $phone]);
echo json_encode($datas);
?>