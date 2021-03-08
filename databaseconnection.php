<?php



$server   = "localhost";
$userName = "root";
$password = "";
$dbName   = "posts";

    $con = mysqli_connect($server,$userName,$password,$dbName);


if(!$con)  {


    die ('error:' .mysqli_connect_error());
}