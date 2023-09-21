<?php
include '../connect.php';
$user_ID = filterRequest('user_ID');
getAllData('orderRant', "`user_ID` = ?", array($user_ID));
