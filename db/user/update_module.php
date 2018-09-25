<?php
session_start();
include '../connection/conexion.php';

mysqli_set_charset($mysqli, "utf8");

$module = $_POST["module"];
$step = $_POST["step"];
$last_id = $_SESSION['user']["id"];


$query1 = "SELECT * FROM module where step = $step and user = $last_id and module = $module";
$result2 = $mysqli->query($query1);

$row_cnt = $result2->num_rows;

if($row_cnt == 0){
	$query = "INSERT INTO module (`step`, `module`, `user`, `is_completed`) VALUES ($step, $module, $last_id, 1)";
}else{
	$query = "UPDATE module set is_completed = 1 where step = $step and user = $last_id and module = $module";
}
var_dump($query);
$mysqli->query($query);
die();
?>