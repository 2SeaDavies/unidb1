<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>SQL Query Generation</title>
</head>
<body>


<?php
//session_start();
  //  $access_level = $_SESSION['access_level_session'];
$access_level = $_COOKIE['access_level'];



function displayAccessLevelInformation($access_level) {
    if ($access_level == 'standarduser') {
        echo "<p>You are currently logged in as a standard user</p>";
    }
    elseif ($access_level == 'root') {
        echo "<p>You are currently logged in as a root user</p>";
        echo "<p>You now have access to additional administrative features</p>";
    }
}

displayAccessLevelInformation($access_level);

?>


</body>
</html>