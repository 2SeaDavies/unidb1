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