<?php
include "../connect.php";

$email = filterRequest("email");
$pass = sha1($_POST['password']);
LoginAdmin("users", "`email` = ? AND `password` = ? AND `type` = 2", array($email, $pass),);



function LoginAdmin($table, $where = null, $values = null)
{
    global $con;
    $data = array();
    $stmt = $con->prepare("SELECT  * FROM $table WHERE   $where");
    $stmt->execute($values);
    $data = $stmt->fetch(PDO::FETCH_ASSOC);
    $count  = $stmt->rowCount();
    if ($count > 0) {
        echo json_encode(array("status" => "success", 'msg' => 'Successful authentication Admin', "data" => $data));
    } else {
        echo json_encode(array("status" => "failure", 'msg' => 'faild authentication Admin.', 'data' => null));
    }
    return $count;
}
