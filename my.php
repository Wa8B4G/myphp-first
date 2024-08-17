<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $color = "red";

    $firstName = "Clever";
    $lastName = "Ebinum";
echo " <h1>$lastName $firstName</h1>";
echo "<h1>this is my first file</h1>".$color ,"<br>";
function myTest(){
     $name = 3;
    echo $name;
    $name++;
  
    myTest();
    

}
    ?>
</body>
</html>