<?php
include '../connect.php';

$collection_id  = filterRequest('collection_id');
$user_id = filterRequest('user_id');
deletedDataLove("`collection_id` = ? AND `user_id` = ? ", array($collection_id, $user_id));


function deletedDataLove($where, $values)
{
    global $con;
    $data = array();
    $stmt = $con->prepare("SELECT  `interset_coll_id` FROM `interset_coll` WHERE  $where ");
    $stmt->execute($values);
    $data = $stmt->fetch(PDO::FETCH_ASSOC);
    $count  = $stmt->rowCount();
    if ($count > 0) {
        $id  = $data['interset_coll_id'];
        deleteData('interset_coll', "`interset_coll_id` = $id");
    } else {
        echo json_encode(array("status" => "failure", 'msg' => 'Error while Deleting Love Data .', 'data' => null));
    }
    return $count;
}
