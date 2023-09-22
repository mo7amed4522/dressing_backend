<?php
error_reporting(0);
include "../connect.php";
$collection_name = filterRequest("collection_name");
$photo = imageUploadDep("photo", "collection_image");
$description = filterRequest("description");
$rate = filterRequest("rate");
$nameProduct1 = filterRequest("nameProduct1") ?? null;
$nameProduct2 = filterRequest("nameProduct2") ?? null;
$nameProduct3 = filterRequest("nameProduct3") ?? null;
$nameProduct4 = filterRequest("nameProduct4") ?? null;
$nameProduct5 = filterRequest("nameProduct5") ?? null;
$nameProduct6 = filterRequest("nameProduct6") ?? null;
$nameProduct7 = filterRequest("nameProduct7") ?? null;
$nameProduct8 = filterRequest("nameProduct8") ?? null;
$nameProduct9 = filterRequest("nameProduct9") ?? null;
$nameProduct10 = filterRequest("nameProduct10") ?? null;
$is_show = filterRequest("is_show");
$price_1 = filterRequest("price_1");
$price_2 = filterRequest("price_2");

$stmt = $con->prepare("SELECT * FROM `collection` WHERE `collection_name` = ?");
$stmt->execute(array($collection_name));
$count = $stmt->rowCount();
if ($count > 0) {
    echo json_encode(array("status" => "failure", "msg" => "The Name of this Collection is EXIST", "data" => null));
} else {
    /*     $data = array(
        "collection_name" => $collection_name,
        "photo" => $photo,
        "description" => $description,
        "rate" => $rate,
        "nameProduct1" => $nameProduct1,
        "nameProduct2" => $nameProduct2,
        "nameProduct3" => $nameProduct3,
        "nameProduct4" => $nameProduct4,
        "nameProduct5" => $nameProduct5,
        "nameProduct6" => $nameProduct6,
        "nameProduct7" => $nameProduct7,
        "nameProduct8" => $nameProduct8,
        "nameProduct9" => $nameProduct9,
        "nameProduct10" => $nameProduct10,
        "is_show" => $is_show,
        "price_1" => $price_1,
        "price_2" => $price_2,
    );

    insertData("collection", $data); */

    if ($nameProduct2 == null && $nameProduct3 == null && $nameProduct4 == null && $nameProduct5 == null && $nameProduct6 == null && $nameProduct7 == null && $nameProduct8 == null && $nameProduct9 == null && $nameProduct10 == null) {
        $data = array(
            "collection_name" => $collection_name,
            "photo" => $photo,
            "description" => $description,
            "rate" => $rate,
            "nameProduct1" => $nameProduct1,
            "is_show" => $is_show,
            "price_1" => $price_1,
            "price_2" => $price_2,
        );
        insertData('collection', $data);
    } else if ($nameProduct3 == null && $nameProduct4 == null && $nameProduct5 == null && $nameProduct6 == null && $nameProduct7 == null && $nameProduct8 == null && $nameProduct9 == null && $nameProduct10 == null) {
        $data = array(
            "collection_name" => $collection_name,
            "photo" => $photo,
            "description" => $description,
            "rate" => $rate,
            "nameProduct1" => $nameProduct1,
            "nameProduct2" => $nameProduct2,
            "is_show" => $is_show,
            "price_1" => $price_1,
            "price_2" => $price_2,
        );
        insertData('collection', $data);
    } else if ($nameProduct4 == null && $nameProduct5 == null && $nameProduct6 == null && $nameProduct7 == null && $nameProduct8 == null && $nameProduct9 == null && $nameProduct10 == null) {
        $data = array(
            "collection_name" => $collection_name,
            "photo" => $photo,
            "description" => $description,
            "rate" => $rate,
            "nameProduct1" => $nameProduct1,
            "nameProduct2" => $nameProduct2,
            "nameProduct3" => $nameProduct3,
            "is_show" => $is_show,
            "price_1" => $price_1,
            "price_2" => $price_2,
        );
        insertData('collection', $data);
    } else if ($nameProduct5 == null && $nameProduct6 == null && $nameProduct7 == null && $nameProduct8 == null && $nameProduct9 == null && $nameProduct10 == null) {
        $data = array(
            "collection_name" => $collection_name,
            "photo" => $photo,
            "description" => $description,
            "rate" => $rate,
            "nameProduct1" => $nameProduct1,
            "nameProduct2" => $nameProduct2,
            "nameProduct3" => $nameProduct3,
            "nameProduct4" => $nameProduct4,
            "is_show" => $is_show,
            "price_1" => $price_1,
            "price_2" => $price_2,
        );
        insertData('collection', $data);
    } else if ($nameProduct6 == null && $nameProduct7 == null && $nameProduct8 == null && $nameProduct9 == null && $nameProduct10 == null) {
        $data = array(
            "collection_name" => $collection_name,
            "photo" => $photo,
            "description" => $description,
            "rate" => $rate,
            "nameProduct1" => $nameProduct1,
            "nameProduct2" => $nameProduct2,
            "nameProduct3" => $nameProduct3,
            "nameProduct4" => $nameProduct4,
            "nameProduct5" => $nameProduct5,
            "is_show" => $is_show,
            "price_1" => $price_1,
            "price_2" => $price_2,
        );
        insertData('collection', $data);
    } else if ($nameProduct7 == null && $nameProduct8 == null && $nameProduct9 == null && $nameProduct10 == null) {
        $data = array(
            "collection_name" => $collection_name,
            "photo" => $photo,
            "description" => $description,
            "rate" => $rate,
            "nameProduct1" => $nameProduct1,
            "nameProduct2" => $nameProduct2,
            "nameProduct3" => $nameProduct3,
            "nameProduct4" => $nameProduct4,
            "nameProduct5" => $nameProduct5,
            "nameProduct6" => $nameProduct6,
            "is_show" => $is_show,
            "price_1" => $price_1,
            "price_2" => $price_2,
        );
        insertData('collection', $data);
    } else if ($nameProduct8 == null && $nameProduct9 == null && $nameProduct10 == null) {
        $data = array(
            "collection_name" => $collection_name,
            "photo" => $photo,
            "description" => $description,
            "rate" => $rate,
            "nameProduct1" => $nameProduct1,
            "nameProduct2" => $nameProduct2,
            "nameProduct3" => $nameProduct3,
            "nameProduct4" => $nameProduct4,
            "nameProduct5" => $nameProduct5,
            "nameProduct6" => $nameProduct6,
            "nameProduct7" => $nameProduct7,
            "is_show" => $is_show,
            "price_1" => $price_1,
            "price_2" => $price_2,
        );
        insertData('collection', $data);
    } else if ($nameProduct9 == null && $nameProduct10 == null) {
        $data = array(
            "collection_name" => $collection_name,
            "photo" => $photo,
            "description" => $description,
            "rate" => $rate,
            "nameProduct1" => $nameProduct1,
            "nameProduct2" => $nameProduct2,
            "nameProduct3" => $nameProduct3,
            "nameProduct4" => $nameProduct4,
            "nameProduct5" => $nameProduct5,
            "nameProduct6" => $nameProduct6,
            "nameProduct7" => $nameProduct7,
            "nameProduct8" => $nameProduct8,
            "is_show" => $is_show,
            "price_1" => $price_1,
            "price_2" => $price_2,
        );
        insertData('collection', $data);
    } else if ($nameProduct10 == null) {
        $data = array(
            "collection_name" => $collection_name,
            "photo" => $photo,
            "description" => $description,
            "rate" => $rate,
            "nameProduct1" => $nameProduct1,
            "nameProduct2" => $nameProduct2,
            "nameProduct3" => $nameProduct3,
            "nameProduct4" => $nameProduct4,
            "nameProduct5" => $nameProduct5,
            "nameProduct6" => $nameProduct6,
            "nameProduct7" => $nameProduct7,
            "nameProduct8" => $nameProduct8,
            "nameProduct9" => $nameProduct9,
            "is_show" => $is_show,
            "price_1" => $price_1,
            "price_2" => $price_2,
        );
        insertData('collection', $data);
    } else {
        $data = array(
            "collection_name" => $collection_name,
            "photo" => $photo,
            "description" => $description,
            "rate" => $rate,
            "nameProduct1" => $nameProduct1,
            "nameProduct2" => $nameProduct2,
            "nameProduct3" => $nameProduct3,
            "nameProduct4" => $nameProduct4,
            "nameProduct5" => $nameProduct5,
            "nameProduct6" => $nameProduct6,
            "nameProduct7" => $nameProduct7,
            "nameProduct8" => $nameProduct8,
            "nameProduct9" => $nameProduct9,
            "nameProduct10" => $nameProduct10,
            "is_show" => $is_show,
            "price_1" => $price_1,
            "price_2" => $price_2,
        );

        insertData("collection", $data);
    }
}


function imageUploadDep($imageRequest, $path)
{
    global $msgError;
    $imagename  = $_FILES[$imageRequest]["name"];
    $imagetmp   = $_FILES[$imageRequest]["tmp_name"];
    $imagesize  = $_FILES[$imageRequest]["size"];
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
        return "http://localhost:8000/upload/$path/$imagename";
    } else {
        return "fail";
    }
}
