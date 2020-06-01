<?php
//include ('./config.php');
require_once './dbconnect.php';
session_start();
$id=$_GET['x'];

//$usr=trim($_POST['usr']);
$datas = $database->delete("user_message",[
    "id" => $id
]);
echo $id;
//echo json_encode($datas);
?>