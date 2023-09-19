<?php
include '../connect.php';

$poduct_id = filterRequest('prod_id');
$user_id = filterRequest('user_id');
deletedDataLove("`prod_id` = ? AND `user_id` = ? ", array($poduct_id, $user_id));

function deletedDataLove($where, $values)
{
    global $con;
    $data = array();
    $stmt = $con->prepare("SELECT  `inter_id` FROM `interest` WHERE  $where ");
    $stmt->execute($values);
    $data = $stmt->fetch(PDO::FETCH_ASSOC);
    $count  = $stmt->rowCount();
    if ($count > 0) {
        $id  = $data['inter_id'];
        deleteData('interest', "`inter_id` = $id");
    } else {
        echo json_encode(array("status" => "failure", 'msg' => 'Error while Deleting Love Data .', 'data' => null));
    }
    return $count;
}
