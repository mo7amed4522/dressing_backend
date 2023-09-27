<?php
include '../connect.php';
$prod_id = filterRequest('prod_id');
getDataProd("prod_id = ?", array($prod_id));



function getDataProd($where = null, $values = null)
{
    global $con;
    $data = array();
    $data2 = array();
    $data3 = array();
    $data5 = array();
    $stmt = $con->prepare("SELECT  product.*   FROM `product`  WHERE  $where ");
    $stmt2 = $con->prepare("SELECT  *  FROM `color`  WHERE  $where ");
    $stmt3 = $con->prepare("SELECT  *  FROM `images`  WHERE  $where ");
    $stmt5 = $con->prepare("SELECT  *  FROM `size_relation`  WHERE  $where ");
    $stmt->execute($values);
    $stmt2->execute($values);
    $stmt3->execute($values);
    $stmt5->execute($values);
    $data2 = $stmt2->fetchAll(PDO::FETCH_ASSOC);
    $data3 = $stmt3->fetchAll(PDO::FETCH_ASSOC);
    $data5 = $stmt5->fetchAll(PDO::FETCH_ASSOC);
    $data = $stmt->fetch(PDO::FETCH_ASSOC);
    $data4 = array(
        "prod_id" => $data['prod_id'],
        "name" => $data['name'],
        "description" => $data['description'],
        "rate" => $data['rate'],
        "price_1" => $data['price_1'],
        "price_2" => $data['price_2'],
        "price_3" => $data['price_3'],
        "price_4" => $data['price_4'],
        "dep_ID" => $data['dep_ID'],
        "is_show" => $data['is_show'],
        "amount" => $data['amount'],
        'color' => $data2,
        'photos' => $data3,
        'size' => $data5
    );
    $count  = $stmt->rowCount();
    if ($count > 0) {
        echo json_encode(array("status" => "success", 'msg' => 'data fetch correct ', "data" => $data4));
    } else {
        echo json_encode(array("status" => "failure", 'msg' => 'Error while Fetching Data .', 'data' => null));
    }
    return $count;
}
