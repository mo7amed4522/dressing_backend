<?php
include '../connect.php';
$user_id = filterRequest('user_id');
$collection_id = filterRequest('collection_id');
$stmt = $con->prepare("SELECT * FROM `interset_coll` WHERE `user_id` = ? AND  `collection_id` = ?");
$stmt->execute(array($user_id, $collection_id));
$count = $stmt->rowCount();
if ($count > 0) {
    echo json_encode(array("status" => "failure", 'msg' => 'You already interseted on it ', 'data' => null));
} else {
    $data = array(
        "user_id" => $user_id,
        "collection_id" => $collection_id,
    );
    insertData('interset_coll', $data);
}
