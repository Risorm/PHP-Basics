<!--Write a PHP program URLReplacer.php that takes a text from a textarea and replaces all URLs with the HTML syntax
<a href= "…" ></a> with a special forum-style syntax [URL=…][/URL].-->

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Problem 6. URL Replacer</title>
</head>
<body>
<form action="" method="post">
    <label for="text">Text: </label><textarea name="text"></textarea><br/>
    <input type="submit" name="submitBtn" value="Submit"/>
</form>
<?php
if (isset($_POST['submitBtn'])):
    $text = htmlspecialchars($_POST['text']);
    $text = preg_replace('/&lt;a href=(.*?)&gt;(.*?)&lt;\/a&gt;/', '<strong>[URL=$1]</strong>$2<strong>[/URL]</strong>', $text);
    echo $text;
endif;
?>
</body>
</html>