<?php
session_start();
include '../connection/conexion.php';

mysqli_set_charset($mysqli, "utf8");

$data = $_POST["data"];
$type = $_POST["type"];

if ($type == 1) {
    $query = "SELECT *  FROM user  WHERE id_number = $data ";
} else {
    $query = "SELECT * FROM user WHERE email = '" . $data . "'";
}


$result = $mysqli->query($query);
$value = mysqli_fetch_assoc($result);
$row_cnt = $result->num_rows;



if ($row_cnt > 0) {
    unset($_SESSION['user']);
    $_SESSION['user'] = $value;
    $_SESSION['incorrect_user'] = false;
    $_SESSION['duplicated_user'] = false;
    header("Location: ../../0-03_menu.php");
    die();
}else{
    $_SESSION['user'] = null;
    $_SESSION['incorrect_user'] = true;
    $_SESSION['duplicated_user'] = false;
    header("Location: ../../0-02_login.php");
    die();
}