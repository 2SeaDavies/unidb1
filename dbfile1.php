<?php
/**
 * Created by PhpStorm.
 * User: 0702555
 * Date: 10/10/2016
 * Time: 14:24
 */

include ("dbconnect.php");

$db;

        
if($db->connect_errno) {
    die('connectfailed['.$db->connect_error.']');
}

else {
    echo" lol";
}

$sql_query="SELECT * FROM superheroes WHERE superpower LIKE '%aser%'";
$result = $db->query($sql_query);

while($row=$result->fetch_array()){
    echo "<p>".$row['superheroName']."</p>";
}

$result->close();