<?php
/*Write a PHP script MostFrequentTag.php which generates an HTML input text field and a submit button.
In the text field the user must enter different tags, separated by a comma and a space (", ").
When the information is submitted, the script should generate a list of the tags, sorted by frequency.
Then you must print: "Most Frequent Tag is: [most frequent tag]". Semantic HTML is required. Styling is not required.
 */

function GetData()
{
    if (isset($_POST['submitButton'])) {
        $tags = explode(", ", $_POST['fieldVal']);
        $countValues = array_count_values($tags);?>
        <p><?php foreach ($countValues as $key => $value) {
                echo $key . ": " . $value . " times", '</br>';
            }; ?></p>
        <?php echo 'Most frequent tag is: ', array_search(max($countValues), $countValues);
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