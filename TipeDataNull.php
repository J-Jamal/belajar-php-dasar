<?php

$name = "jajang";
$name = null;

$age = null;

echo "Name : ";
echo $name;
echo "\n";

echo "Age : ";
echo $age;
echo "\n";

echo "Is Name NULL? : ";
var_dump(is_null($name));
echo "\n";
// menghapus variabel
$contoh = "Jajang";
unset($contoh);
// sama fungsinya dengan is_null
$contoh = "Jamaludin";
var_dump(isset($contoh));