<?php
echo "today is ".date("d-m-y").'<br>';
echo "today is ".date("l").'<br>';  //day of the week e.g. friday
date_default_timezone_set("Asia/Karachi");
echo "the time is ". date("H:i:sa") . '<br>';

?>