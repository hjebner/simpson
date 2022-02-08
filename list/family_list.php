 <body>
 <a href="../insert/insert_layout.php">Go to Insert</a>
 <br>
 <a href="../dropdown/dropdown_layout.php">Go to Dropdown</a>
    <table id="member">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Last Name</th>
            <th>Gender</th>
            <th>Delete</th>
        </tr>

    <?php
    require_once "family.inc.php";

        while ($row = $result->fetch_assoc()) {
            echo "<tr>
            <td>" . $row["f_id"] . "</td>";
            echo "<td>" . $row["f_firstName"] . "</td>";
            echo "<td>" . $row["f_lastName"] . "</td>";
            echo "<td>" . $row["f_gender"] . "</td>";
            echo "<td>";
            echo "<form method='get' action='../delete/delete.inc.php'>";
            echo " <a href='delete.php?id=" . $row["f_id"] . "'><button>Delete</button></a>";
            echo "</td></tr>";

            }

    ?>
    </table>
    </body>

