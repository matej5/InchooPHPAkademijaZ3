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
<div id="input">
    <form method="post">
        Broj redaka
        <br>
        <input type="text" name="a" placeholder="8">
        <br>
        Broj stupaca
        <br>
        <input type="text" name="b" placeholder="10">
        <br>
        <input type="submit" value="Create Table">
    </form>
</div>
<div id="table">
    <?php
    include_once 'function.php';
    if (isset($_POST['a']) && isset($_POST['b'])){
    $a = $_POST['a'];
    $b = $_POST['b'];
    $arr = spiralFill($a, $b);
    ?>
    <table id="cells" cellspacing="0">
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
        }
        ?>
    </table>
</div>
</body>
</html>