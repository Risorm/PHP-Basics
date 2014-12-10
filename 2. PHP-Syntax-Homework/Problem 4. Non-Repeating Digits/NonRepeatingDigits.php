<?php
/*Write a PHP script NonRepeatingDigits.php that declares an integer variable N, and then finds all 3-digit numbers
 that are less or equal than N (<= N) and consist of unique digits. Print "no" if no such numbers exist. Examples:
Input	Output
1234	102, 103, 104, 105, 106, 107, 108, 109, 120, 123, 124, 125, 126, 127, 128, 129, 130, 132, 134, 135, …, 980, 981, 982, 983, 984,
        985, 986, 987,
145	    102, 103, 104, 105, 106, 107, 108, 109, 120, 123, 124, 125, 126, 127, 128, 129, 130, 132, 134, 135, 136, 137,
        138, 139, 140, 142, 143, 145
15	    no
247    	102, 103, 104, 105, 106, 107, 108, 109, 120, 123, 124, 125, 126, 127, 128, 129, 130, 132, 134, 135, 136, 137, 138, 139, 140, 142,
        143, 145, 146, 147, 148, 149, 150, 152, 153, 154, 156, 157, 158, 159, 160, 162, 163, 164, 165, 167, 168, 169, 170, 172, 173, 174,
        175, 176, 178, 179, 180, 182, 183, 184, 185, 186, 187, 189, 190, 192, 193, 194, 195, 196, 197, 198, 201, 203, 204, 205, 206, 207,
        208, 209, 210, 213, 214, 215, 216, 217, 218, 219, 230, 231, 234, 235, 236, 237, 238, 239, 240, 241, 243, 245, 246, 247 */

function nonRepeating($number) {
    $arr = [];
    if ($number >= 100) {

        for ($i = 100; $i <= $number; $i++) {
            $lastDigit = $i % 10;
            $secondDigit = $i/10 % 10;
            $firstDigit = $i/100 % 10;

            if ($i < 999 && $lastDigit != $firstDigit && $secondDigit != $firstDigit && $lastDigit != $secondDigit) {
                array_push($arr,$i);
            }
       }
        echo(join(", ", $arr)."\r\n");
    }
    else {
        echo('no'."\r\n");
    }
}

nonRepeating(1234);
nonRepeating(145);
nonRepeating(15);
nonRepeating(247);