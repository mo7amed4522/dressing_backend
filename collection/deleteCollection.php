<?php
include '../connect.php';

$col_id = filterRequest('col_id');
deleteData("collection", "`col_id` = $col_id");
