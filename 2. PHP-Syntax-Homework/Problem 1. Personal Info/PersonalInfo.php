<?php
/*Write a PHP script PersonalInfo.php. Declare a few variables. The first variable should hold your first name, the second should hold your
last name, the third - your age, and the last one should hold your full name (use concatenation).
The result should be printed.  Sample output:
Output
My name is Mister DakMan and I am 21 years old.
My name is Pesho Peshev and I am 55 years old. */

$firstName = 'John';
$lastName = 'Doe';
$age = 32;
$fullName = "{$firstName} {$lastName}";

echo("My name is {$fullName} and I am {$age} years old.");

?>