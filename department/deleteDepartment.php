<?php

include '../connect.php';
$dep_id  = filterRequest('dep_id');

global $con;
$data = array();
$stmt = $con->prepare("SELECT  SUBSTRING_INDEX(department.dep_photo,'/',-1)  AS namePho FROM `department` WHERE  `dep_id` =?");
$stmt->execute(array($dep_id));
$data = $stmt->fetch(PDO::FETCH_ASSOC);
$count  = $stmt->rowCount();
if ($count > 0) {
    deleteFile('../upload/department_image/', $data['namePho']);
    deleteData('department', "`dep_id` = $dep_id");
} else {
}

function deleteDataDepartment($table, $where, $json = true)
{
    global $con;
    $stmt = $con->prepare("DELETE FROM $table WHERE $where");
    $stmt->execute();
    $count = $stmt->rowCount();
    if ($json == true) {
        if ($count > 0) {
            echo json_encode(array("status" => "success", 'msg' => 'correct process !', 'data' => $count));
        } else {
            echo json_encode(array("status" => "failure", 'msg' => 'Delete not corredt !', 'data' => null));
        }
    }
    return $count;
}
