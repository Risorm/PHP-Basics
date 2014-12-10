<?php
/*Write a PHP script DumpVariable.php that declares a variable. If the variable is numeric, print it by the built-in function var_dump().
If the variable is not numeric, print its type at the input. Examples:
Input	        Output
"hello"	        string
15	            int(15)
1.234	        double(1.234)
array(1,2,3)	array
(object)[2,34]	object */

function dump($arr) {
    if (gettype($arr) == 'double' || gettype($arr) == 'integer') :
       var_dump($arr);
        echo "\r\n";
        else:
            echo(gettype($arr)."\r\n");
            endif;
}

dump("hello");
dump(15);
dump(1.234);
dump(array(1,2,3));
dump((object)[2,34]);

?>