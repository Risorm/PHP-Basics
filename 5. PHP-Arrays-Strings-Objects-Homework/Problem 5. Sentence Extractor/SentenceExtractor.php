<!--Write a PHP program SentenceExtractor.php that takes a text from a textarea and a word from an input field and
prints all sentences from the text, containing that word. A sentence is any sequence of words ending with ., ! or ?.-->

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Problem 5. Sentence Extractor</title>
</head>
<body>
<form action="" method="post">
    <label for="text">Text: </label><textarea name="text"></textarea><br/>
    <label for="word">Word: </label><input type="text" name="word"/><br/>
    <input type="submit" name="submitBtn" value="Submit"/>
</form>
<?php
if (isset($_POST['submitBtn'])):
    $text = $_POST['text'];
    $word = $_POST['word'];
    $sentences = preg_split('/[\?|!|.]/', $text);
    for ($i = 0; $i < count($sentences); $i++) {
        if (preg_match('/ ' . $word . ' /', $sentences[$i])) {
            echo substr(strstr($text, $sentences[$i]), 0, strlen($sentences[$i]) + 1);
        }
    }
    ?>
<?php
endif;
?>
</body>
</html>