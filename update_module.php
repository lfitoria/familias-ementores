<?php
session_start();
include '../connection/conexion.php';

mysqli_set_charset($mysqli, "utf8");

$module = $_POST["module"];
$step = $_POST["step"];
$last_id = $_SESSION['user']["id"];

var_dump("UPDATE module set is_completed = 1 where step = $step and user = $last_id and module = $module");
$query = "UPDATE module set is_completed = 1 where step = $step and user = $last_id and module = $module";
$mysqli->query($query);

die();
?>