<?php
$color_id  = filterRequest('color_id');
$color_name = filterRequest('color_name');
$prod_id = filterRequest('product_id');

$data = array(
    'color_name' => $color_name,
    'product_id' => $prod_id,
);

updateData('color', $data, "`color_id` = $color_id");
