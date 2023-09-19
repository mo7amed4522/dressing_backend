<?php
include '../connect.php';

$col_id  = filterRequest('col_id');
$collection_name = filterRequest('collection_name');
$photo = imageUploadDep('photo', 'collection_image');
$description = filterRequest('description');
$rate = filterRequest('rate');
$id_1 = filterRequest('id_1');
$id_2 = filterRequest('id_2');
$id_3 = filterRequest('id_3');
$id_4 = filterRequest('id_4');
$id_5 = filterRequest('id_5');
$id_6 = filterRequest('id_6');
$id_7 = filterRequest('id_7');
$id_8 = filterRequest('id_8');
$id_9 = filterRequest('id_9');
$id_10 = filterRequest('id_10');
$is_show = filterRequest('is_show');
$price_1 = filterRequest('price_1');
$price_2 = filterRequest('price_2');
$data = array(
    'collection_name' => $collection_name,
    'photo' => $photo,
    'description' => $description,
    'rate' => $rate,
    'id_1' => $id_1,
    'id_2' => $id_2,
    'id_3' => $id_3,
    'id_4' => $id_4,
    'id_5' => $id_5,
    'id_6' => $id_6,
    'id_7' => $id_7,
    'id_8' => $id_8,
    'id_9' => $id_9,
    'id_10' => $id_10,
    'is_show' => $is_show,
    'price_1' => $price_1,
    'price_2' => $price_2,
);

updateData('collection', $data, "`col_id` = $col_id");
function imageUploadDep($imageRequest, $path)
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
