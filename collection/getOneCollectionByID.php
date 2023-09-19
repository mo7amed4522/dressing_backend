<?php
include '../connect.php';
$col_id = filterRequest('col_id');

getData('collection', "`col_id` = ?", array($col_id));
