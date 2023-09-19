<?php
include '../connect.php';
$dep_ID = filterRequest('product_id');
getAllProduct(array($dep_ID));


function getAllProduct($values = null, $json = true)
{
    global $con;
    $data1 = array();
    $stmt1 = $con->prepare("SELECT DISTINCT product.* FROM `product` WHERE `prod_id` = ?");
    $stmt1->execute($values);
    $data1 = $stmt1->fetchAll(PDO::FETCH_ASSOC);
    $count  = $stmt1->rowCount();
    if ($json == true) {
        if ($count > 0) {
            echo json_encode(array("status" => "success", 'msg' => 'data fetch correct .', "data" => $data1));
        } else {
            echo json_encode(array("status" => "failure", 'msg' => 'Error while Fetching Data .', 'data' => null));
        }
        return $count;
    } else {
        if ($count > 0) {
            return $data1;
        } else {
            echo json_encode(array("status" => "failure", 'msg' => 'Error while Fetching Data .', 'data' => null));
        }
    }
}
