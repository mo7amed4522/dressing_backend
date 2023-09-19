<?php
include '../connect.php';
$user_id = filterRequest('user_id');
$name  = filterRequest('name');
$email = filterRequest("email");
$phone = filterRequest('phone');
$age = filterRequest('age');
$place = filterRequest('place');
$confirm_phone = filterRequest('confirm_phone');

$stmt = $con->prepare('SELECT * FROM `users` WHERE `name` = ? AND `email`= ? AND `phone` =?  AND `age` =? AND `place` = ? AND `confirm_phone` = ? ');
$stmt->execute(array($name, $email, $phone, $age, $place, $confirm_phone));
$count = $stmt->rowCount();
if ($count > 0) {
    echo json_encode(array("status" => "failure", "msg" => "This no Data have change you don`t have right to do that", "data" => null));
} else {
    $data = array(
        'user_id' => $user_id,
        'name' => $name,
        'email' => $email,
        'phone' => $phone,
        'age' => $age,
        'place' => $place,
        'confirm_phone' => $confirm_phone,
    );

    updateUserData('users', $data, "`user_id` = $user_id");
    getData('users', "`user_id` = ?", array($user_id));
}


function updateUserData($table, $data, $where, $json = true)
{
    global $con;
    $cols = array();
    $vals = array();

    foreach ($data as $key => $val) {
        $vals[] = "$val";
        $cols[] = "`$key` =  ? ";
    }
    $sql = "UPDATE $table SET " . implode(', ', $cols) . " WHERE $where";

    $stmt = $con->prepare($sql);
    $stmt->execute($vals);
    $count = $stmt->rowCount();
    if ($json == true) {
        if ($count > 0) {
        } else {
            echo json_encode(array("status" => "failure", 'msg' => 'Data not update successfully', 'data' => null));
        }
    }
    return $count;
}
