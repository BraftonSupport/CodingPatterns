<?php 
//did you know the following all return a value;
//do you kow the diff between all three?

/** @var wow */
$include = include 'included.php';
// $require = require 'included.php';
// $require_once = require_once 'included.php';
// $include_once = include_once 'included.php';


echo $include->getFeature();