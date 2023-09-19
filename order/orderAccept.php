<?php
include '../connect.php';
getAllDatatype();
function getAllDatatype()
{
    global $con;
    $data = array();
    $stmt = $con->prepare("SELECT  COUNT(`prod_id`) AS `COUNT` FROM  `product` WHERE `is_show` = 1");
    $stmt->execute();
    $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
    $count = $stmt->rowCount();
    if ($count > 0) {
        echo json_encode(array("status" => "success", 'msg' => 'data fetch correct .', "data" => $data));
    } else {
        echo json_encode(array("status" => "failure", 'msg' => 'Error while Fetching Data .', 'data' => null));
    }
}
