<?php
$number = [2, 3, 4, 5 ];
$fruit = array('apple', 'orange', 'mango');


echo $fruit[1];
$person = [
    [
        'first_name' => 'clever',
        'last_name' => 'chuks',
        'phone' => '090764824',
    ],
    [
        'first_name' => 'john',
        'last_name' => 'deo',
        'phone' => '091459834',
    ],
    [
        'first_name' => 'jane',
        'last_name' => 'deo',
        'phone' => '081239374',
    ],

];
echo (json_encode($person[1]['first_name'] )."</br>\n"); ;

?>