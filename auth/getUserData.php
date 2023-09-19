<?php
include '../connect.php';
$email = filterRequest("email");
$stmt = $con->prepare("SELECT * FROM `users` WHERE `email` = ? ");
$stmt->execute(array($email));
$count = $stmt->rowCount();
if ($count > 0) {
    getData('users', "`email` = ?", array($email));
} else {
    echo json_encode(array("status" => "failure", 'msg' => 'This e - maill is not been to access in our application you can register New one', 'data' => null));
}
