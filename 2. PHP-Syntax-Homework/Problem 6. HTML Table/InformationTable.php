<?php
/*
Write a PHP script InformationTable.php which generates an HTML table by given information about a person
(name, phone number, age, address). Styling the table is optional. Semantic HTML is required. Examples:
Input	Output
Gosho
0882-321-423
24
Hadji Dimitar
Pesho
0884-888-888
67
Suhata Reka */

function generateTable($string)
{
    $arrData = explode("\n", $string);
    $arrCategories = ['Name', 'Phone number', 'Age', 'Address'];
    $rows = 4;

    echo "<table border='1'>";

    for ($tr = 0; $tr < $rows; $tr++) {
        echo "<tr>";
        echo "<td>{$arrCategories[$tr]}</td>";
        echo "<td>{$arrData[$tr]}</td>";
        echo "</tr>";
    }

    echo "</table>";
    echo "</br>";
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Information Table</title>
    <link rel="stylesheet" href="styles.css"/>
</head>
<body>

<?php
generateTable(<<<EOT
Gosho
0882-321-423
24
Hadji Dimitar
EOT
);

generateTable(<<<EOT
Pesho
0884-888-888
67
Suhata Reka
EOT
);
?>

</body>
</html>
