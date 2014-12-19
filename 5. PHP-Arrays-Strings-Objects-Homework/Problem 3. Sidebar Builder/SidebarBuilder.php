<!--Write a PHP program SidebarBuilder.php that takes data from several input fields and builds 3 sidebars.
The input fields are categories, tags and months. The first sidebar should contain a list of the categories,
the second sidebar – a list of the tags and the third should contain the months. The entries in the input strings
will be separated by a comma and space ", ". Styling the page is optional. Semantic HTML is required.-->

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Problem 3. Sidebar Builder</title>
</head>
<body>
<form method="post">
    <label for="categories">Categories: </label>
    <input type="text" required name="categories" />
    <label for="tags">Tags: </label>
    <input type="text" required name="tags" />
    <label for="months">Months: </label>
    <input type="text" required name="months" />
    <input type="submit" name="submitBtn" value="Generate" />
</form>
<?php
if(isset($_POST['submitBtn'])):
    foreach($_POST as $key => $value){
        if($key != 'submit'){
            makeResult($value);
        }
    }
endif;
function splitCounter($expression){
    $num = explode(', ', $expression);
    return count($num);
}
function partsOfInput($expression, $counter){
    $split = explode(', ', $expression);
    return $split[$counter];
}
function makeResult($post){
    ?>
    <ul>
        <?php
        for($i = 0; $i < splitCounter($post); $i++){
            ?>
            <li>
                <?php
                echo partsOfInput($post, $i);
                ?>
            </li>
        <?php
        }
        ?>
    </ul>
<?php
}
?>
</body>
</html>