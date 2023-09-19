<?php
include '../connect.php';
$prod_id = filterRequest('prod_id');

function getProduct($table, $where = null, $values = null)
{
    global $con;
    $data = array();
    $stmt = $con->prepare("SELECT  * FROM $table WHERE  $where ");
    $stmt->execute($values);
    $data = $stmt->fetch(PDO::FETCH_ASSOC);
    $count  = $stmt->rowCount();
    if ($count > 0) {
        echo json_encode(array("status" => "success", 'msg' => 'data fetch correct ', "data" => $data));
    } else {
        echo json_encode(array("status" => "failure", 'msg' => 'Error while Fetching Data .', 'data' => null));
    }
    return $count;
}
