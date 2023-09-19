<?php
include '../connect.php';
$prod_id = filterRequest('prod_id');
deleteData('product', "`prod_id` = ?", array($prod_id));
