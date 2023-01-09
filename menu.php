<?php
include './db.php';
include './header.php';
?>

<?php
$result = mysqli_query($link, 'select * from menu');
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
                <th></th>
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
                echo '<td>';
                echo '<button>Order Now</button>';
                echo '</td>';
                echo '</tr>';
            }
            ?>
        </tbody>
    </table>
</body>

</html>