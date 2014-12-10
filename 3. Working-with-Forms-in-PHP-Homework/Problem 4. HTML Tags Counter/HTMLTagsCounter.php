<?php
/*Write a PHP script HTMLTagsCounter.php which generates an HTML form like in the example below.
It should contain a label, an input text field and a submit button. The user enters HTML tag in the input field.
If the tag is valid, the script should print “Valid HTML tag!”, and if it is invalid – “Invalid HTML Tag!”.
On the second line, there should be a score counter. For every valid tag entered, the score should increase by 1.
Hint: You may use sessions. Use an array to store all valid HTML5 tags.*/

session_start();

function generateForm()
{
    if (isset($_POST['submitBtn'])) {
        if (!isset($_SESSION['count'])) {
            $_SESSION['count'] = 0;
        }
        $tag = $_POST['text'];
        global $counter;
        $tags = ['!--...--', '!DOCTYPE', 'a', 'abbr', 'acronym', 'address', 'applet', 'area', 'article', 'aside', 'audio',
            'b', 'base', 'basefont', 'bdi', 'bdo', 'big', 'blockquote', 'body', 'br', 'button', 'canvas', 'caption',
            'center', 'cite', 'code', 'col', 'colgroup', 'datalist', 'dd', 'del', 'details', 'dfn', 'dialog', 'dir',
            'div', 'dl', 'dt', 'em', 'embed', 'fieldset', 'figcaption', 'figure', 'font', 'footer', 'form', 'frame',
            'frameset', 'h1', 'h2', 'h3', 'h4', 'h5', 'h6', 'head', 'header', 'hgroup', 'hr', 'html', 'i', 'iframe',
            'img', 'input', 'ins', 'kbd', 'keygen', 'label', 'legend', 'li', 'link', 'main', 'map', 'mark', 'menu',
            'menuitem', 'meta', 'meter', 'nav', 'noframes', 'noscript', 'object', 'ol', 'optgroup', 'option', 'output',
            'p', 'param', 'pre', 'progress', 'q', 'rp', 'rt', 'ruby', 's', 'samp', 'script', 'section', 'select', 'small',
            'source', 'span', 'strike', 'strong', 'style', 'sub', 'summary', 'sup', 'table', 'tbody', 'td', 'textarea',
            'tfoot', 'th', 'thead', 'time', 'title', 'tr', 'track', 'tt', 'u', 'ul', 'var', 'video', 'wbr'];
        foreach ($tags as $value) {
            if ($tag == $value) {
                $_SESSION['count']++;
                echo "Valid HTML tag!"."<br/>";
                echo "Score: ".$_SESSION['count'];
                return;
            }
        }
        echo "Invalid HTML tag!"."<br/>";
        echo "Score: ".$_SESSION['count'];
    }
}
?>

<!doctype html>
<html lang="en">
<head>
    <style>
        form {
            width: 120px;
        }
    </style>
    <meta charset="UTF-8">
    <title>Problem 4. HTML Tags Counter</title>
</head>
<body>
<form action="" method="post">
    <label for="text">Enter HTML tags:</label>
    <input type="text" name="text"/>
    <input type="submit" name="submitBtn"/>
    <?php generateForm() ?>
</form>
</body>
</html>