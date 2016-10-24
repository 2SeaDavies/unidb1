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


$name =$_POST["Username"];
$word = $_POST["Password"];

if ($username == $name && $password == $word) {
    setcookie('access_level','standarduser');
}

header('Location: homepage.php');







?>
</body>
</html>
