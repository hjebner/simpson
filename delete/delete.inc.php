<?php

$dbServername = "localhost";
$dbUsername = "root";
$dbPassword = "root";
$dbName = "simpson";
$conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);

$sql = "SELECT * FROM familie";
$result = $conn->query($sql);

if(isset($_GET['id'])){
    $id = $_GET['id'];

    $sql = "DELETE FROM familie WHERE f_id=$id";
    $result = $conn->query($sql) or die($mysqli->error());

    if($result){
        echo " Member was deleted!";
    } else {
        echo " Form not delete";
    }
    header('Refresh: 2; URL="delete.php"');
}




