<?php
/**
 * Created by PhpStorm.
 * User: 0702555
 * Date: 10/10/2016
 * Time: 13:46
 */


define('DB_SERVER','eu-cdbr-azure-west-a.cloudapp.net');
define('DB_USERNAME','bdd5d40f057cd1');
define('DB_PASSWORD','bd25e521');
define('DB_DATABASE','cregdata1');

$db_conn = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
