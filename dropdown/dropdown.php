<?php
include_once 'dropdown.inc.php';
?>
<!DOCTYPE html>
<html>
<head>
    <title>Insert Member</title>
</head>
<body>


<label for="name">
    <p>Looking for a member?</p>
    <select name="name">

        <?php
            foreach ($list as $member){
                echo "<option value=' . $member[f_id] . '>";
                echo $member['f_firstName'] . " " . $member['f_lastName'];
                echo "\n";
                echo  "</option>";
        }
        ?>
    </select>
</label>
<br />
<a href="../insert/insert.php">Go to Insert</a>
<br />
<a href="../list/family_list.php">Go to List</a>
</body>
</html>

