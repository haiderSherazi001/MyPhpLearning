<?php
$username = "mrhyder_29";
$password = 8989;
if($_POST['username'] == $username && $_POST['password'] == $password){
    echo "You have entered correct information! <br>";
}
else{
    echo "Incorrect password or username! <br>";
    echo "<a href = form.html>try again</a><br>";
}
?>