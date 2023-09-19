<?php
include '../connect.php';
$prod_id = filterRequest('prod_ID');
$user_ID = filterRequest('user_ID');
$amount = filterRequest('amount');
$total_price = filterRequest('total_price');
$color = filterRequest('color_id');
$pay_now = 0;
$created_at = date("Y-m-d H:i:s");

$stmt = $con->prepare('SELECT * FROM `orders` WHERE  `prod_ID` = ? AND `user_ID`= ?');
$stmt->execute(array($prod_id, $user_ID));
$count = $stmt->rowCount();
if ($count > 0) {
    echo json_encode(array("status" => "failure", "msg" => "The order is already exist", "data" => null));
} else {
    $data = array(
        "created_at" => $created_at,
        "prod_ID" => $prod_id,
        "user_ID" => $user_ID,
        "amount" => $amount,
        "total_price" => $total_price,
        "color_id" => $color,
        "pay_now" => $pay_now,
    );
    insertData('orders', $data,);
}
