<?php
require_once "db_connect.php";

$conn = getDBConnection();

$sql = "SELECT * FROM menu_items";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>Pete's Little Lunchbox</title>
    <link rel="stylesheet" href="style.css" />
</head>
<body>

<h1>Sandwiches</h1>

<table>
    <tr>
        <?php
        while ($field = mysqli_fetch_field($result)) {
            echo "<th>{$field->name}</th>";
        }
        ?>
    </tr>

    <?php
    mysqli_data_seek($result, 0);
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        foreach ($row as $value) {
            echo "<td>$value</td>";
        }
        echo "</tr>";
    }
    ?>
</table>

</body>
</html>
