<?php
/*Write a PHP script CalculateInterest.php which generates an HTML page that contains:
•	An input text field to hold the amount of money
•	Radio buttons to choose the currency
•	An input text field to enter the compound annual interest amount
•	A dropdown menu to choose the period of time
•	A submit button
When the information is submitted, the script should print out the amount of money you will have after the selected period,
rounded to 2 decimal places. Semantic HTML is required. Styling is not required. Example:
Input
1000
USD
12
6 months */

function interest()
{
    if (isset($_POST['submitButton'])) {
        $amount = $_POST['amount'];
        $currency = $_POST['currency'];
        $interest = $_POST['interest']/12;
        $duration = $_POST['duration'];
        for ($i = 0; $i < $duration; $i++) {
            $amount = $amount + $amount * $interest / 100;
        }
        echo "<p>" . $currency . number_format($amount, 2) . "</p>";
    }
}

?>

<!doctype html>
<html lang="en">
<head>
    <style>
        form {
            width: 180px;
        }
    </style>
    <meta charset="UTF-8">
    <title>Problem 3. Calculate Interest</title>
</head>
<body>
<form action="" method="post">
    <label for="amount">Enter Amount</label>
    <input type="number" name="amount"/>
    <input type="radio" name="currency" value="USD"/>USD<br>
    <input type="radio" name="currency" value="EUR"/>EUR<br>
    <input type="radio" name="currency" value="BGN"/>BGN<br>
    <label for="interest">Compound Interest Amount</label>
    <input type="number" name="interest"/>
    <select name="duration">
        <option value="6">6 months</option>
        <option value="12">1 year</option>
        <option value="24">2 years</option>
        <option value="60">5 years</option>
    </select>
    <input type="submit" value="Calculate" name="submitButton"/>
</form>
<?php interest()?>
</body>
</html>