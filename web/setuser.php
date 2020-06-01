<?php
require_once './dbconnect.php';
session_start();
$id=$_GET['x'];
$datas = $database->select("user_message","*",[
"id" => $id
]);
echo json_encode($datas);
?>