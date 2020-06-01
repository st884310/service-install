<?php
require_once './dbconnect.php';
$searname=$_POST["searname"];
if($searname=="123"){
    $searname="id";
}
$sdata=$_POST["sdata"];
$datas = $database->select("user_message", "*", [
    $searname."[~]" => $sdata
]);
//$datas = $database->query("select * from uesr_message where ".$sfield." like '%".$sdata."%';")->fetchAll();
echo json_encode($datas);
?>