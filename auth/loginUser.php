<?php
include "../connect.php";

$email = filterRequest("email");
$password = sha1($_POST['password']);
Login('users', "`email` = ? AND `password` = ? AND `type` = 1 ;", array($email, $password));



function Login($table, $where = null, $values = null)
{
    global $con;
    $data = array();
    $stmt = $con->prepare("SELECT  * FROM $table WHERE  $where");
    $stmt->execute($values);
    $data = $stmt->fetch(PDO::FETCH_ASSOC);
    $count  = $stmt->rowCount();
    if ($count > 0) {
        echo json_encode(array("status" => "success", 'msg' => 'Successful authentication process', "data" => $data));
    } else {
        echo json_encode(array("status" => "failure", 'msg' => 'faild authentication process.', 'data' => null));
    }
    return $count;
}
