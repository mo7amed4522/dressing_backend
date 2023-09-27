<?php
error_reporting(0);
include '../connect.php';
$dep_id  = filterRequest('dep_id');
$dep_name  = filterRequest('dep_name');
$dep_photo  = filterRequest('dep_photo');


if (!isset($_FILES['dep_photo'])) {
    $data = array(
        'dep_name' => $dep_name,
    );
    updateData('department', $data, "`dep_id` = $dep_id");
} else {
    global $con;
    $data = array();
    $stmt = $con->prepare("SELECT  SUBSTRING_INDEX(department.dep_photo,'/',-1)  AS namePho FROM `department` WHERE  `dep_id` =?");
    $stmt->execute(array($dep_id));
    $data = $stmt->fetch(PDO::FETCH_ASSOC);
    $count  = $stmt->rowCount();
    if ($count > 0) {
        deleteFile('../upload/department_image/', $data['namePho']);
        $dep_photo  = imageUploadDep('dep_photo', 'department_image');
        $data = array(
            'dep_name' => $dep_name,
            'dep_photo' => $dep_photo,
        );
        updateData('department', $data, "`dep_id` = $dep_id");
    } else {
    }
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
