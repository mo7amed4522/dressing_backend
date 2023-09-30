<?php
include './connect.php';
getConcoluction();



function getConcoluction()
{
    global $con;
    $data = array();
    $data2 = array();
    $stmt = $con->prepare("SELECT COUNT(department.dep_id) AS numDep FROM department");
    $stmt2 = $con->prepare("SELECT COUNT(product.prod_id) AS numProd FROM product");
    $stmt->execute();
    $stmt2->execute();
    $data = $stmt->fetch(PDO::FETCH_ASSOC);
    $data2 = $stmt2->fetch(PDO::FETCH_ASSOC);
    $count  = $stmt->rowCount();
    $data3 = array(
        $data,
        $data2,
    );
    if ($count > 0) {
        echo json_encode(array("status" => "success", 'msg' => 'data fetch correct ', "data" => $data3));
    } else {
        echo json_encode(array("status" => "failure", 'msg' => 'Error while Fetching Data .', 'data' => null));
    }
    return $count;
}
