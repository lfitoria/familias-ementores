<?php
session_start();
include '../connection/conexion.php';

mysqli_set_charset($mysqli, "utf8");

$data = $_POST["data"];
$step = $_POST["step"];

$last_id = $_SESSION['last_id'];

switch ($step) {
    case 2:
        $field = "fullname";
        $url = "0-05_registro_03.php";
        $data = "'" . $data . "'";
        break;
    case 3:
        $field = "genre";
        $url = "0-05_registro_04.php";
        break;
    case 4:
        $field = "age";

        $url = "0-05_registro_05.php";

        break;
    case 5:
        $type = $_POST["type"];
        
        $field = $type == "1"? "id_number":"email";

        if($type == "1"){
            $query2 = "UPDATE user set role = 'ROLE_ADMIN' where id = $last_id";
        }else{
            $query2 = "UPDATE user set role = 'ROLE_USER' where id = $last_id";
        }
        $data = "'" . $data . "'";
        $mysqli->query($query2);

        $url = "0-05_registro_07.php";
        
        $query1 = "SELECT * FROM user WHERE id = $last_id";
        
        $result1 = $mysqli->query($query1);
        $value1 = mysqli_fetch_assoc($result1);
        
        $_SESSION['user'] = $value1;

        break;
    default:
        break;
}

$query = "UPDATE user set $field = $data where id = $last_id";

$mysqli->query($query);

header("Location: ../../$url");
die();
?>