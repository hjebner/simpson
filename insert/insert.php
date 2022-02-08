<?php
include_once './database/database.php';
?>
<!DOCTYPE html>
<html>
<head>
    <title>Insert Member</title>
</head>
<body>

<form action="insert.inc.php" method="post">
    <label>Name:</label><input type="text" name="name"><br>

    <label>Last Name:</label><input type="text" name="lastName"><br>

    <label>Gender:</label><input type="text" name="gender"><br>

    <button type="submit" name="submit">Submit</button>

</form>

<a href="../dropdown/dropdown.php">Go to Dropdown</a>
<a href="../list/family_list.php">Go to List</a>

</body>
</html>
