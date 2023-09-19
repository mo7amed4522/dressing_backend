<?php
include "../connect.php";
$email = filterRequest("email");
$verfiyCode = filterRequest('verfiyCode');
getData('users', "`email` = ? AND `verfiyCode` = ?", array($email, $verfiyCode));
