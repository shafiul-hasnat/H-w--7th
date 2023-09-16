<?php


$result=1;

for($i = 1;$i <=5;$i++) {

    $result = $result * $i;
}
echo $result;


// 
echo '<br>';


// for($i = 1; $i <= 10; $i++) {
    
//     for($j = 1; $j <= 10;$j++) {
//         echo "$i x $j = ". $i * $j . '<br>';
//     }
//     echo "<br>";
// }
 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="./main.php" method="post">
        <input type="text" placeholder="enter your first name" name="1stname">
        <input type="text" placeholder="enter your last name" name="lastname"><br>
        <input type="email" placeholder="enter your email" name="email">
        <input type="text" placeholder=" your blood group" name="blood">
        <button type="submit">submit</button>
    </form>
</body>
</html>