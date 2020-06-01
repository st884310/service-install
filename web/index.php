<?php
//include ('./config.php');
require_once './dbconnect.php';
//$usr=trim($_POST['usr']);
$usr = 'amy';
$datas = $database->select("user_message","*");

echo json_encode($datas);
?>