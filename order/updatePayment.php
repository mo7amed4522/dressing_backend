<?php
include '../connect.php';
$order_id = filterRequest('order_id');
$pay_now = filterRequest('pay_now');
$update_at = date("Y-m-d H:i:s");
$data = array(
    'pay_now' => $pay_now,
    'update_at' => $update_at,
);
updateData('orders', $data, "`order_id` = $order_id");
