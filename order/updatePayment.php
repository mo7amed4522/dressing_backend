<?php
include '../connect.php';
$orderRentID = filterRequest('orderRentID');
$pay_now = filterRequest('pay_now');
$update_at = date("Y-m-d H:i:s");
$data = array(
    'pay_now' => $pay_now,
    'update_at' => $update_at,
);
updateData('orderRant', $data, "`orderRentID` = $orderRentID");
