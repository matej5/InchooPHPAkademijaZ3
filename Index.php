<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Document</title>
</head>
<body>
<?php
include_once 'function.php';

$a = 7;
$b = 4;
$arr = spiralFill($a, $b);
?>
<table id="table">
    <?php
    for ($y = 0; $y < $a; $y++) {
        echo '<tr>';
        for ($x = 0; $x < $b; $x++) {
            if ($x === 0 && $y === 0) {
                echo '<td id="cellColor">', ($arr[$y][$x]), '</td>';
            } else {
                echo '<td id="cell">', ($arr[$y][$x]), '</td>';
            }
        }
        echo '</tr>';
    }

    ?>
</table>
</body>
</html>