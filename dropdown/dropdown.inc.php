<?php
include '../database/database.php';


$sql = "SELECT * FROM familie";
$list = mysqli_query($conn, $sql);

