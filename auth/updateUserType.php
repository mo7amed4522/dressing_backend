<?php
include '../connect.php';
$user_id = filterRequest('user_id');
$data = array(
    'type' => '1',
);

updateData('users', $data, "`user_id` = $user_id");
