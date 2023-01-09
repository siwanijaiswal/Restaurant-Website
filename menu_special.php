<?php
include './db.php';
include './header.php';
?>

<?php
$result = mysqli_query($link, 'select * from menu where is_special = 1');
?>
<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="css/menu.css">
</head>

<body>
    <table>

        <thead>
            <tr>
                <th>Item</th>
                <th>Price</th>
            </tr>
        </thead>

        <tbody>

            <?php
            while ($row = mysqli_fetch_array($result)) {
                echo '<tr>';
                echo '<td>';
                echo $row['item_name'];
                echo '</td>';
                echo '<td>';
                echo $row['price'];
                echo '</td>';
            }
            ?>
        </tbody>
    </table>
    <img src="" alt="">
</body>

</html>