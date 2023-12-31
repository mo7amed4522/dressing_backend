<?php
include '../connect.php';
$user_id = filterRequest('user_id');

getAllINTEREST("`user_id` = ?", array($user_id));

function getAllINTEREST($where = null, $values = null, $json = true)
{
    global $con;
    $data = array();
    $stmt = $con->prepare("SELECT  collection.col_id ,collection.collection_name,collection.photo,collection.rate FROM  `collection` INNER JOIN `interset_coll` on collection.col_id = interset_coll.collection_id   WHERE   $where");
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
