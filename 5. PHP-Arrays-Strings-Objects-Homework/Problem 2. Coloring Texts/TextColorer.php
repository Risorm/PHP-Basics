<!--Write a PHP program TextColorer.php that takes a text from a textfield, colors each character according to its
ASCII value and prints the result. If the ASCII value of a character is odd, the character should be printed in blue.
 If it’s even, it should be printed in red.-->

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Problem 2. Coloring Texts</title>
</head>
<body>
<form method="post">
    <input type="text" name="input" />
    <input type="submit" name="submitBtn" value="Color text" />
</form>
<?php
if(isset($_POST['submitBtn'])){
    $chars=str_split($_POST['input']);
    for($i=0; $i < count($chars); $i++){
        if(ord($chars[$i]) % 2 == 0):
            ?>
            <span style="color: red"><?php echo $chars[$i]; ?></span>
        <?php
        else:
            ?>
            <span style="color: blue"><?php echo $chars[$i]; ?></span>
        <?php
        endif;
    }
}
?>
</body>
</html>