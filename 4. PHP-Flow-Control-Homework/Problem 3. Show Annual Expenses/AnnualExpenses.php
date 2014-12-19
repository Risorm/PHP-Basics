<!--Write a PHP script AnnualExpenses.php that receives n years from an input HTML form and creates a table
(like the one shown below) with random expenses by months and the corresponding years (n years back).
For example, if N is 10, create a table that shows the expenses for each month for the last 10 years.
Add a "Total" column at the end, showing the total expenses for the same year.
The random expenses in the table should be in the range [0…999]. Styling the page is optional.-->



<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <title>Problem 3. Show Annual Expenses</title>
</head>
<body>
<form method="post" action="AnnualExpenses.php">
    <label for="year">Enter number of years: </label>
    <input type="text" name="year"/>
    <input type="submit" value="Show costs" />
</form>
<?php
$months = array('January', 'February', 'March', 'April', 'May', 'June', 'July',
    'August', 'September', 'October', 'November', 'December');
if (isset($_POST['year'])): ?>
    <table border="1">
        <thead>
        <tr>
            <th>Year</th>
            <?php for ($i=0; $i < count($months); $i++): ?>
                <th><?= $months[$i]?></th>
            <?php endfor; ?>
            <th>Total</th>
        </tr>
        </thead>
        <tbody>
        <?php
        for ($i=2014; $i > 2014 - $_POST['year'] ; $i--):
            $sum = 0;
            ?>
            <tr>
                <td><?= $i ?></td>
                <?php
                for ($j=0; $j < count($months); $j++):
                    $expense = rand(0, 999);
                    $sum += $expense;
                    ?>
                    <td><?= $expense ?></td>
                <?php endfor; ?>
                <td><?= $sum ?></td>
            </tr>
        <?php endfor; ?>
        </tbody>
    </table>
<?php endif; ?>
</body>
</html>