<!--Write a PHP script SquareRootSum.php that displays a table in your browser with 2 columns.
The first column should contain a number (even numbers from 0 to 100) and the second column should
contain the square root of that number, rounded to the second digit after the decimal point.
The last row of the table should contain the sum of all values in the Square column.
Styling the page is optional.
-->

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Problem 1. Square Root Sum</title>
</head>
<body>
<table border="1">
    <thead>
    <tr>
    <th>Number</th>
    <th>Square</th>
    </tr>
    </thead>
    <tbody>
<?php
$sum = 0;
for ($i = 0; $i <= 100; $i+=2):
        $sum += sqrt($i)?>
        <tr>
            <td><?php echo $i?></td>
            <td><?php echo round(sqrt($i),2)?></td>
        </tr>
<?php endfor ?>
    </tbody>
    <tfoot>
    <tr>
        <td>Total:</td>
        <td><?php echo round($sum,2) ?></td>
    </tr>
    </tfoot>
</table>
</body>
</html>