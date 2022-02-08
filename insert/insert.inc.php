<?php

include_once "../database/database.php";

if(isset($_POST['submit'])){
    if(!empty($_POST['name']) && !empty($_POST['lastName']) && !empty($_POST['gender'])) {

        $name = $_POST['name'];
        $lastName = $_POST['lastName'];
        $gender = $_POST['gender'];

        $sql = "INSERT INTO familie(f_firstName, f_lastName, f_gender) 
                VALUES ('$name', '$lastName', '$gender')";

        $run = mysqli_query($conn, $sql);
        if($run){
            echo " Neues Mitglied wurde hinzugefügt!";
        } else {
            echo " Form not submitted";
        }

    } else {
        echo "Sie müssen alle Felder ausfüllen";
    }
    header('Refresh: 2; URL="insert_layout.php"');
}




