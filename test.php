<?php
include './connect.php';
getAllDataD('test');


function getAllDataD($table, $where = null, $values = null, $json = true)
{
    global $con;
    $data = array();
    if ($where == null) {
        $stmt = $con->prepare("SELECT  *  FROM $table ");
    } else {
        $stmt = $con->prepare("SELECT  * FROM $table WHERE   $where ");
    }
    $stmt->execute($values);
    $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
    $count  = $stmt->rowCount();
    if ($json == true) {
        if ($count > 0) {
            echo json_encode(array("status" => "success", 'msg' => 'data fetch correct .', "data" => $data));
        } else {
            echo json_encode(array("status" => "failure", 'msg' => 'Error while Fetching Data .', 'data' => null));
        }
        return $count;
    } else {
        if ($count > 0) {
            return $data;
        } else {
            echo json_encode(array("status" => "failure", 'msg' => 'Error while Fetching Data .', 'data' => null));
        }
    }
}
