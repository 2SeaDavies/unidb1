<?php
/**
 * Created by PhpStorm.
 * User: 0702555
 * Date: 10/10/2016
 * Time: 13:46
 */


define('DB_SERVER','eu-cdbr-azure-west-a.cloudapp.net');
define('DB_USERNAME','bed1a260976364');
define('DB_PASSWORD','e0e92477');
define('DB_DATABASE','cregdata');

$db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
