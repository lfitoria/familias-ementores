<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
mysqli_set_charset($mysqli, "utf8");
function getIncompletedModule($last_id, $module){
    $query = "SELECT * FROM module where user = $last_id and module = $module";
    $result = $mysqli->query($query);

    $row_cnt = $result->num_rows;

    return $row_cnt;
}