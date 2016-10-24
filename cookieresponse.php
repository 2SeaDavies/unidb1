<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>INDEX</title>
</head>
<body>
<?php
$username = "lol";
$password = "lol";


$name = $_POST["Username"];
$word = $_POST["Password"];

if ($name = $username && $word == $password) {
    session_start();
    $_SESSION['access_level_session'] = "standard_user";
}

header('Location: homepage.php');







?>
</body>
</html>
