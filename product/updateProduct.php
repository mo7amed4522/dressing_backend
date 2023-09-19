<?php
include '../connect.php';

$prod_id = filterRequest('prod_id');
$name = filterRequest('name');
$photo = imageUploadPrd('photo', 'product_image');
$des = filterRequest('description');
$rate = filterRequest('rate');
$price_1 = filterRequest('price_1');
$price_2 = filterRequest('price_2');
$price_3 = filterRequest('price_3');
$price_4 = filterRequest('price_4');
$size = filterRequest('size');
$amount = filterRequest('amount');

$data = array(
    'name' => $name,
    "photo" => $photo,
    "description" => $des,
    "rate" => $rate,
    "price_1" => $price_1,
    "price_2" => $price_2,
    "price_3" => $price_3,
    "price_4" => $price_4,
    "size" => $size,
    "amount" => $amount,
);
updateData('product', $data, "`prod_id` = $prod_id");

function imageUploadPrd($imageRequest, $path)
{
    global $msgError;
    $imagename  = $_FILES[$imageRequest]['name'];
    $imagetmp   = $_FILES[$imageRequest]['tmp_name'];
    $imagesize  = $_FILES[$imageRequest]['size'];
    $allowExt   = array("jpg", "JPG", "png", "PNG", "gif", "mp3", "pdf", "docx", ".");
    $strToArray = explode(".", $imagename);
    $ext        = end($strToArray);
    $ext        = strtolower($ext);

    if (!empty($imagename) && !in_array($ext, $allowExt)) {
        $msgError = "EXT";
    }
    if ($imagesize > 1000 * MB) {
        $msgError = "size";
    }
    if (empty($msgError)) {
        move_uploaded_file($imagetmp,  "../upload/$path" . $imagename);
        return "https://localhost/dressing_backend/upload/$path/$imagename";
    } else {
        return "fail";
    }
}
