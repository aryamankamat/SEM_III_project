<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "billys_login_db";

if(!$con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname))
{
    die("failed to connect to Database.");
}
