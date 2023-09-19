<?php
include '../connect.php';
$color_name = filterRequest('color_name');
$prod_id = filterRequest('product_id');
$stmt  = $con->prepare("SELECT * FROM `color` WHERE `color_name` =? AND `product_id`=? ");
$stmt->execute(array($color_name, $prod_id));
$count = $stmt->rowCount();
if ($count > 0) {
    echo json_encode(array("status" => "failure", 'msg' => 'This Color for this Product is EXEIST', 'data' => null));
} else {
    $data = array(
        'color_name' => $color_name,
        'product_id' => $prod_id,
    );
    insertData("color", $data);
    updateProduct(array($prod_id));
}
function updateProduct($values)
{
    global $con;
    $stmt  = $con->prepare("UPDATE product SET `amount`=(`amount`+1) WHERE `prod_id` = ?");
    $stmt->execute();
    $count = $stmt->rowCount($values);
    if ($count > 0) {
        return true;
    } else {
        return false;
    }
}
