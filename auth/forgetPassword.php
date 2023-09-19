<?php
include '../connect.php';
$user_id = filterRequest('user_id');
$email = filterRequest('email');
$verfiy_code = rand(10000, 99999);

$stmt = $con->prepare("SELECT * FROM `users` WHERE `email` = ? ");
$stmt->execute(array($email));
$count = $stmt->rowCount();
if ($count < 0) {
    echo json_encode(array("status" => "failure", 'msg' => 'This e - maill is not been to access in our application you can register New one', 'data' => null));
} else {
    $data = array(
        'verfiyCode' => $verfiy_code,
    );
    sendEmail($email, "Verfiy Code", "this is the reset code you have to put in account to reset your password  \n The Code is  => $verfiy_code");
    updateData('users', $data, "`user_id` = $user_id");
}
