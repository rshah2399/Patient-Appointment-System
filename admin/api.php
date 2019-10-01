<?php
session_start();
error_reporting(0);
$cnt = 1;
$con = mysqli_connect("localhost", "root", "", "patient_system");
// Check connection
if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

// Perform queries

header('Content-Type: application/json');

if (isset($_POST['name']) && isset($_POST['date']) ) {
    $query = mysqli_query($con, "SELECT * FROM appointment WHERE name='{$_POST['name']}' AND sdate='{$_POST['date']}'");
}


echo json_encode("burhan");
