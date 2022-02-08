<!DOCTYPE html>
<html>
<head>

</head>
<body>
<table>
    <tr>
        <th>ID</th>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Gender</th>
        <th>Delete</th>
    </tr>

    <?php
    require_once "delete.inc.php";

    while ($row = $result->fetch_assoc()) {
        echo "<tr>
            <td>" . $row["f_id"] . "</td>";
            echo "<td>" . $row["f_firstName"] . "</td>";
            echo "<td>" . $row["f_lastName"] . "</td>";
            echo "<td>" . $row["f_gender"] . "</td>";
            echo "<td>";
            echo "<form method='get' action='delete.inc.php'>";
            echo " <a href='delete.php?id=" . $row["f_id"] . "' name='id'><button name=''>Delete</button></a>";
            echo "</tr>";
        //echo  "<input type='submit' value='delete' id='delete' name='delete'/>";

    }

    ?>
</table>


<a href="../insert/insert.php">Go to Insert</a>
<a href="../dropdown/dropdown.php">Go to Dropdown</a>
</body>
</html>
