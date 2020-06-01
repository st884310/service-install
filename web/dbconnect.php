<?php
	header("Access-Control-Allow-Origin: *");
	require_once './Medoo.php';
	use Medoo\Medoo;

    // Initialize
    $database = new Medoo([
        'database_type' => 'mysql',
        'database_name' => 'test',
        'server' => 'localhost',
        'username' => 'root',
        'password' => '2354159',
        'charset' => 'utf-8'
    ]);
?>