<?php
/*Write a PHP script PrintTags.php which generates an HTML input text field and a submit button.
n the text field the user must enter different tags, separated by a comma and a space (", "). When the information is submitted,
the script should split the tags, put them in an array and print out the array. Semantic HTML is required. Styling is not required.  Example:

Input
Pesho, homework, homework, exam, course, PHP*/

function GetData() {
    if (isset($_POST['submitButton'])) {
        $tags = explode(", ", $_POST['fieldVal']);?>
        <p><?php foreach ($tags as $key => $value) {
                echo $key,': ',$value, '</br>';
        }; ?></p>
    <?php
    }
}
?>

<!doctype html>
<html lang="en">
<head>
    <style>
        form {
            width: 300px;
        }
        input {
            margin-top: 10px;
        }
        label {
            display: block;
        }
    </style>
    <meta charset="UTF-8">
    <title>Print Tags</title>
</head>
<body>
<form action="" method="post">
    <label for="fieldVal">Enter Tags:</label>
    <input type="text" name="fieldVal" required="required"/>
    <input type="submit" name="submitButton"/>
</form>
<?php GetData() ?>
</body>
</html>