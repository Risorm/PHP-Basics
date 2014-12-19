<!--/*Write a PHP script SumOfDigits.php which receives a comma-separated list of integers from an input form and creates a two-column table.
The first column should contain each of the values from the input. The second column should contain the sum of the digits of each value.
If the value is not an integer number, print "I cannot sum that". Styling the page is optional. */-->


<!DOCTYPE html>
<html>
<head>
<title>Problem 5. Sum of Digits</title>
</head>
<body>
<form action="" method="POST">
<label for="numbers">Enter string: </label>
<input type="text" id="numbers" name="numbers" />
<input type="submit" name="submit" value="Submit" />
</form>
<?php
if($_POST && isset($_POST['submit'])):
    $input = $_POST['numbers'];
    $numbers = explode(", ", $input);
    ?>
    <table>
        <tbody>
        <?php
        foreach($numbers as $number):
            ?>
            <tr>
                <td><?= $number ?></td>
                <td><?= getSumOfDigits($number) ?></td>
            </tr>
        <?php
        endforeach;
        ?>
        </tbody>
    </table>
<?php
endif;
function getSumOfDigits($number) {
    if(is_numeric($number)) {
        return array_sum(str_split($number));
    } else {
        return "I cannot sum that";
    }
}
?>
</body>
</html>