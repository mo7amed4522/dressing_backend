<?php
include '../connect.php';
$user_ID = filterRequest('user_ID');
$collection_id = filterRequest('collection_id');
$amount = filterRequest('amount');
$total_price = filterRequest('total_price');
$pay_now = 0;
$prod_id = null;
$created_at = date("Y-m-d H:i:s");
$update_at = filterRequest("update_at");
$end_at = filterRequest("end_at");
$stmt = $con->prepare('SELECT * FROM `orderRant` WHERE  `collection_id` = ? AND `user_ID`= ?');
$stmt->execute(array($prod_id, $user_ID));
$count = $stmt->rowCount();
if ($count > 0) {
    echo json_encode(array("status" => "failure", "msg" => "The order is already exist", "data" => null));
} else {
    $data = array(
        "created_at" => $created_at,
        "prod_ID" => $prod_id,
        'user_ID' => $user_ID,
        "amount" => $amount,
        "total_price" => $total_price,
        'collection_id' => $collection_id,
        "pay_now" => $pay_now,
        'update_at' => $update_at,
        'end_at' => $end_at,
    );
    insertData('orderRant', $data);
}
