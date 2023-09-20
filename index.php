<?php
$words = range("a","z");
$numbers = range("0","9");
$symbols = array("!","@","#","$","%","^","&");

$result = array_merge($words,$numbers,$symbols);

$password = "";
shuffle($result);

for($i = 0 ; $i < 8;$i++){
    $password .= $result[$i];
}

echo $password;