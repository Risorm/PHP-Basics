<?php
/*Download, install and configure PHPStorm. Write and run a PHP script Numbers.php that prints the numbers from 1 to 100.
Configure the debugger (enable XDebug in the php.ini) and trace the execution of the script:
•	Debug it as PHP script (as console application). First enable and configure XDebug in php.ini, then add a breakpoint in your
    project and run it through the debugger.
•	Debug it at the PHP Server (as Web application). The simplest way to do this is to place your project files in the document
    root directory of the Apache Server (e.g. C:\XAMPP\htdocs\PHPProject\Numbers.php) and access it from the Apache Server
    (e.g. http://localhost/PHPProject/Numbers.php).

Author's note: DONE! */

$arr = [];

for ($i = 1; $i <= 100; $i++ ) {
    array_push($arr, $i);
}

echo(join(", ", $arr));

?>