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
<div id="rotate">INPUT</div>
<div id="input">
    <form method="post" action="">
        Broj redaka
        <br>
        <input type="text" name="a" placeholder="4" value="<?php if (isset($_POST['a'])) {
            echo $_POST['a'];
        } ?>" id="inp">
        <br>
        <br>
        Broj stupaca
        <br>
        <input type="text" name="b" placeholder="5" value="<?php if (isset($_POST['a'])) {
            echo $_POST['b'];
        } ?>" id="inp">
        <br>
        <br>
        <br>
        <input type="submit" value="KREIRAJ TABLICU" id="button">
    </form>
</div>
<div id="rotate">OUTPUT</div>
<div id="table">
    <?php
    include_once 'function.php';
    if (isset($_POST['a']) && isset($_POST['b'])) {
        $a = $_POST['a'];
        $b = $_POST['b'];
        $arr = spiralFill($a, $b);
        echo '<table id="cells" cellspacing="0">';
        for ($y = 0; $y < $a; $y++) {
            echo '<tr>';
            for ($x = 0; $x < $b; $x++) {
                if ($x === 0 && $y === 0) {
                    echo '<td id="cellColor"><div class="start"></div>', ($arr[$y][$x]['val']), '</td>';
                } else {
                    ?>
                    <td id="cell"> <?php echo $arr[$y][$x]['val'];
                        if($arr[$y][$x]['l']) {echo '<div class="l"></div>';}
                        if($arr[$y][$x]['r']) {echo '<div class="r"></div>';}
                        if($arr[$y][$x]['u']) {echo '<div class="u"></div>';}
                        if($arr[$y][$x]['d']) {echo '<div class="d"></div>';}
                        ?> </td> <?php
                }
            }
            echo '</tr>';
        }
        echo '</table>';
    }
    ?>
</div>
</body>
</html>