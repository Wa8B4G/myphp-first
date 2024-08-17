<?php 
// require 'myname.php';
$names = "hello world! but don't forget to change";
echo strlen($names). "<br />"; 
echo str_word_count($names), "<br />";
$val = "hello world!";
echo strpos($val, "world!"),"<br />";
echo substr($val, -5, 3),"<br />";
echo strtoupper($val);
?>