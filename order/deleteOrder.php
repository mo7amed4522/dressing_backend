<?php
include '../connect.php';
$order_id = filterRequest('order_id');
deleteData('order', "`order_id` = $order_id");
