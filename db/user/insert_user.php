<?php

session_start();
include '../connection/conexion.php';

mysqli_set_charset($mysqli, "utf8");

$name = $_POST["name"];

$result = $mysqli->query($query);

$query = "INSERT INTO user (fullname) VALUES ('" . $name . "');";

$mysqli->query($query);
$last_id = $mysqli->insert_id;

$query1 = "INSERT INTO module (`step`, `module`, `user`, `is_completed`) VALUES (1, 1, $last_id, 0), (2, 1, $last_id, 0), (3, 1, $last_id, 0), (4, 1, $last_id, 0), (5, 1, $last_id, 0), (6, 1, $last_id, 0), (7, 1, $last_id, 0), (8, 1, $last_id, 0); ";
$mysqli->query($query1);
$query2 = "INSERT INTO module (`step`, `module`, `user`, `is_completed`) VALUES (1, 2, $last_id, 0), (2, 2, $last_id, 0), (3, 2, $last_id, 0), (4, 2, $last_id, 0), (5, 2, $last_id, 0), (6, 2, $last_id, 0), (7, 2, $last_id, 0), (8, 2, $last_id, 0), (9, 2, $last_id, 0), (10, 2, $last_id, 0); ";
$mysqli->query($query2);
$query3 = "INSERT INTO module (`step`, `module`, `user`, `is_completed`) VALUES (1, 3, $last_id, 0), (2, 3, $last_id, 0), (3, 3, $last_id, 0), (4, 3, $last_id, 0), (5, 3, $last_id, 0), (6, 3, $last_id, 0), (7, 3, $last_id, 0); ";
$mysqli->query($query3);

$query1 = "INSERT INTO `activity`(`user`, `module`, `score`, `is_approved`) VALUES ($last_id, 1, 0, 0), ($last_id, 2, 0, 0), ($last_id, 3, 0, 0)";
$mysqli->query($query1);

$_SESSION['last_id'] = $last_id;

header("Location: ../../0-05_registro_03.php");
die();

?>