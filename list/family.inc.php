<?php

$dbServername = "localhost";
$dbUsername = "root";
$dbPassword = "root";
$dbName = "simpson";
$conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);

$sql = "SELECT * FROM familie";
$result = $conn->query($sql);





