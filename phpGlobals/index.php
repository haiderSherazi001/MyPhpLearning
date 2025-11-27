<?php
//global variable $GLOBALS OR GLOBAL
// $GLOBALS['x'] = 4589;
// function useglobal(){
//     global $x;
//     global $y;
//     $y = 34;
//     echo $x;
// }
// useglobal();
// echo $y;

//$_SERVER

// echo $_SERVER['PHP_SELF'];
// echo '<hr>';
// echo $_SERVER['GATEWAY_INTERFACE'];
// echo '<hr>';
// echo $_SERVER['SERVER_ADDR'];
// echo '<hr>';
// echo $_SERVER['SERVER_NAME'];
// echo '<hr>';
// echo $_SERVER['SERVER_SOFTWARE'];
// echo '<hr>';
// echo $_SERVER['SERVER_PROTOCOL'];
// echo '<hr>';
?>

<!-- $_REQUEST -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>testing request</title>
</head>
<body>
    <form action="get.php" method="get" target = "_blank">  

        <!-- action = "" will tell that submit
        form at the same page-->

        <label for="username">Enter your name:</label><br>
        <input type="text" name="username" id="username"><br>
        <label for="age">Enter your age:</label><br>
        <input type="number" name = "userage" id = "age"><br>
        <input type="submit" name="submit" id="submit">
    </form>
</body>
</html>

<?php
// if (isset($_POST['username'])){
// $name = $_POST['username'];
// echo "the username is $name.<hr>";
// }
?>

