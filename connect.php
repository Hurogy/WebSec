<?php
$dbhost = 'localhost';
$username = 'root';
$password = 'the db password here';
$database = 'WebSecExam';
//create the connection
$conn = mysqli_connect($dbhost, $username, $password, $database);

//test if connection is successfully
if (mysqli_connect_errno()) {
    die("Database connection failed: " .
    mysqli_connect_error() .
    " ( " . mysqli_connect_errno() . ")" );
}