<!--Write a PHP program TextFilter.php that takes a text from a textfield and a string of banned words from a text
 input field. All words included in the ban list should be replaced with asterisks "*", equal to the word’s length.
The entries in the banlist will be separated by a comma and space ", ".-->

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Problem 4. Text Filter</title>
</head>
<body>
<form action="" method="post">
    <label for="text">Text: </label><textarea name="text"></textarea><br/>
    <label for="banList">Ban list: </label><input type="text" name="banList"/><br/>
    <input type="submit" name="submitBtn" value="Submit"/>
</form>
<?php
if (isset($_POST['submitBtn'])):
    $banList = explode(', ', $_POST['banList']);
    $text = $_POST['text'];
    for ($i = 0; $i < count($banList); $i++) {
        $text = preg_replace('/' . $banList[$i] . '/i', stringBuilder($banList[$i]), $text);
    }
    echo $text;
    ?>
<?php
endif;
function stringBuilder($string)
{
    $builder = '';
    for ($i = 0; $i < strlen($string); $i++) {
        $builder .= '*';
    }
    return $builder;
}

?>
</body>
</html>