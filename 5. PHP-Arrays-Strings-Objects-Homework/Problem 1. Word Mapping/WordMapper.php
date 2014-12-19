<!--Write a PHP program WordMapper.php that takes a text from a textarea and prints each word and the number of times
 it occurs in the text. The search should be case-insensitive. The result should be printed as an HTML table.-->


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Problem 1. Word Mapping</title>
</head>
<body>
<form method="post">
    <textarea name="content"></textarea><input type="submit" name="submit" value="Submit" />
</form>
<?php
if($_POST):
    $lowerStr=strtolower($_POST['content']);
    $split=explode(' ', $lowerStr);
    $resultArr=[];
    for($i=0; $i<count($split); $i++){
        $split[$i]=preg_replace('/[^a-zA-Z]/', "$1", $split[$i]);
        if(array_key_exists($split[$i], $resultArr)){
            $resultArr[$split[$i]]+=1;
        }
        else{
            $resultArr[$split[$i]]=1;
        }
    }
    ?>
    <table border="1">
        <?php
        foreach($resultArr as $key => $value){
            ?>
            <tr>
                <td><?php echo $key; ?></td><td><?php echo $value; ?></td>
            </tr>
        <?php
        }
        ?>
    </table>
<?php
endif;
?>
</body>
</html>
