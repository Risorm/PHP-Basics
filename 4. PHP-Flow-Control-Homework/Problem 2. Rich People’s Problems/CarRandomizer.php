<!--You are a very rich billionaire with an unhidden passion for cars.
You like certain car manufacturers but you don’t really care about anything else, and that’s why you
need your own randomizing algorithm that helps you decide how many and what color cars you should buy.
Write a PHP script CarRandomizer.php that receives a string of cars from an input HTML form, separated by a comma
 and space (“, “). It then prints each car, a random color and a random quantity in a table like the one shown below.
Use colors by your choice. Use as quantity a random number in range [1...5]. Styling the page is optional. -->



<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Problem 2. Rich People’s Problems</title>
</head>
<body>
<form action="" method="post">
    <label for="carsField">Enter cars</label>
    <input type="text" name="carsField"/>
    <input type="submit" name="submitBtn" value="Show result"/>
</form>
<?php function randCars() {
if (isset($_POST['submitBtn'])) {
$cars = explode(", ", $_POST['carsField']);
$colors = array('yellow', 'red', 'pink', 'brown');
?>
<table>
    <?php foreach ($cars as $value):
        $num = rand(1, 5);
        $colorIndex = rand(0, 3); ?>
        <tr>
            <td><?php echo htmlentities($value)?></td>
            <td><?php echo $num?></td>
            <td><?php echo $colors[$colorIndex]?></td>
        </tr>
    <?php endforeach;
    }
    }
    randCars();
    ?>
</table>
</body>
</html>