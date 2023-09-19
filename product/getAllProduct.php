<?php
include '../connect.php';
$dep_ID = filterRequest('dep_ID');
getAllData("product", "`dep_ID` = ?", array($dep_ID));
