<?php
include "../connect.php";
$ID = filterRequest("user_id");
$password = sha1($_POST['password']);
$data1 = array(
    "password" => $password,
);
updatePassword('users', $data1, "`user_id` = $ID");


function updatePassword($table, $data, $where, $json = true)
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
            echo json_encode(array("status" => "success", 'msg' => 'Password Updated Successfully', 'data' => $data));
        } else {
            echo json_encode(array("status" => "failure", "msg" => 'Error While Updating Password', 'data' => null));
        }
    }
    return $count;
}
