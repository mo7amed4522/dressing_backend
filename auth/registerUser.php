<?php
include "../connect.php";

$name  = filterRequest('name');
$email = filterRequest("email");
$password = sha1($_POST['password']);
$phone = filterRequest('phone');
$age = filterRequest('age');
$place = filterRequest('place');
$type = filterRequest('type');
$verfiy_code = rand(10000, 99999);


$stmt = $con->prepare("SELECT * FROM `users` WHERE `email` = ? AND  `type` = 0");
$stmt->execute(array($email));
$count = $stmt->rowCount();
if ($count > 0) {
    echo json_encode(array("status" => "failure", 'msg' => 'The user is already register signup NOW', 'data' => null));
} else {
    $data = array(
        'name' => $name,
        "email" => $email,
        "password" => $password,
        "phone" => $phone,
        "age" => $age,
        "place" => $place,
        "type" => $type,
        'verfiyCode' => $verfiy_code,
    );
    sendEmail($email, "Verfiy Code", "You have to put this to verfiy code page to access to your account \n The Code is  => $verfiy_code");
    regesterUser("users", $data, $email);
}


function regesterUser($table, $data, $email, $json = true)
{
    global $con;
    foreach ($data as $field => $v)
        $ins[] = ':' . $field;
    $ins = implode(',', $ins);
    $fields = implode(',', array_keys($data));
    $sql = "INSERT INTO $table ($fields) VALUES ($ins)";

    $stmt = $con->prepare($sql);
    foreach ($data as $f => $v) {
        $stmt->bindValue(':' . $f, $v);
    }
    $stmt->execute();
    $count = $stmt->rowCount();
    if ($json == true) {
        if ($count > 0) {
            $data2 = getData('users', "`email` = ?", array($email));
        } else {
            echo json_encode(array("status" => "failure", 'msg' => 'Error While register new user', 'data' => null));
        }
    }
    return $count;
}
