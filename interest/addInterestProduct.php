<?php
include '../connect.php';
$user_id = filterRequest('user_id');
$prod_id = filterRequest('prod_id');

$stmt = $con->prepare("SELECT * FROM `interest` WHERE `user_id` = ? AND  `prod_id` = ?");
$stmt->execute(array($user_id, $prod_id));
$count = $stmt->rowCount();
if ($count > 0) {
    echo json_encode(array("status" => "failure", 'msg' => 'You already interseted on it ', 'data' => null));
} else {
    $data = array(
        "user_id" => $user_id,
        "prod_id" => $prod_id,
    );
    insertData('interest', $data);
}
