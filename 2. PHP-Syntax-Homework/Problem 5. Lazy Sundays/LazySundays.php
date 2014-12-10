<?php
/*Write a PHP script LazySundays.php which prints the dates of all Sundays in the current month.*/

function getSundays()
{
    date_default_timezone_set("Europe/Sofia");
    $today = getdate();
    $year = $today["year"];
    $currentMonth = $today["mon"];

    $sunday = getdate(strtotime("first Sunday of", strtotime($year . "-" . $currentMonth . "-" . "1")))['mday'] . "-" .
        getdate(strtotime("first Sunday of", strtotime($year . "-" . $currentMonth . "-" . "1")))['mon'] . "-" .
        getdate(strtotime("first Sunday of", strtotime($year . "-" . $currentMonth . "-" . "1")))['year'];
    $iterateMonth = date('m', strtotime($sunday));
    while ($iterateMonth == $currentMonth) {
        echo date('jS F, o;', strtotime($sunday)) . "\r\n";
        $sunday = date('d-m-Y', strtotime($sunday . " + 7 days"));
        $iterateMonth = date('m', strtotime($sunday));
    }
}

getSundays();

?>