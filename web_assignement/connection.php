<?php
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "web"; 

if(!$con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname))
{
    die("fail to connect!");
}