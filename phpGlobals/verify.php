<?php
$username = "mrhyder_29";
$password = 8989;
$count = 3;
while($count>0){
if($_POST['username'] == $username && $_POST['password'] == $password){
    echo "You have entered correct information! <br>";
    break;
}

else{
    echo "Incorrect password or username! <br>";
    echo "<a href = form.html>try again</a><br>";
    $count--;
}
}
?>