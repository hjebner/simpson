<!DOCTYPE html>
<html lang="en">
<head>
  <script src="https://cdn.tailwindcss.com"></script>
    <title>Simpson</title>

  <style>
    body {
        background: url('../bilder/family.jpg') no-repeat;
        background-size: cover;
    }
    #member {
        font-family: Arial, Helvetica, sans-serif;
        border-collapse: collapse;
        width: 60%;
        height: auto;
        margin-right: 20px;
        margin-left: auto;
    }

    #member td, #member th {
        border: 2px solid black;
        padding: 4px;
    }

    #member tr:nth-child(even){
        background-color: #f2f2f2;
    }

    #member tr:hover {
        background-color: #ddd;
    }

    #member th {
        padding-top: 12px;
        padding-bottom: 12px;
        text-align: left;
        background-color: black;
        color: white;
    }

  </style>

</head>
<?php
include "family_list.php";
?>
</html>