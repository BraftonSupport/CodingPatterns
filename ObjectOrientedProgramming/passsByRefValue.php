<?php 

$a = "String";

$b = &$a;

$a = "int";
var_dump($a, $b);


// $a = new stdClass;
// $a->value = "string";

// $b = $a;
// $a->value = "int";
// var_dump($a, $b);