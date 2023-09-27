<?php
include '../connect.php';
$dep_nmae = filterRequest('dep_name');
$photo = imageUploadDep('dep_photo', 'department_image');
$stmt = $con->prepare("SELECT * FROM  `department` WHERE `dep_name` = ?");
$stmt->execute(array($dep_nmae));
$count = $stmt->rowCount();
if ($count > 0) {
    echo json_encode(array("status" => "failure", 'msg' => 'This department is EXIST', 'data' => null));
} else {
    $data = array(
        "dep_name" => $dep_nmae,
        "dep_photo" => $photo,
    );
    insertData('department', $data);
}


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

        move_uploaded_file($imagetmp,  "../upload/$path/" . $imagename);
        return "http://localhost:8000/upload/$path/$imagename";
    } else {
        return "fail";
    }
}
