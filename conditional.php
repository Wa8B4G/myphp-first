<?php
require 'array.php';
$age = 20;

// if ($age <=18){
//     echo "you are old enough to vote";
// }else{
//     echo "<h1 >you are not old enough to vote </h1>";
// }

$t = date("H");

if($t <= 12){
echo "<h1>Goodmorning sir</h1>";	
}elseif($t <= 16){
    echo "<h1> GoodAfternoon sir</h1>";

}else{
    echo "<h1>GoodEvening sir</h1>";	
}

// $post = ["apples", "orange"];
// if(!empty($post)){
//     echo ($post[0]);
// }else{
//     echo "no posts available";
// }
// echo !empty($post) ? $post[0] : 'no posts available';
?>

