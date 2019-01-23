<?php
function spiralFill($a, $b)
{
    //krece od 1 do sveukupne kolicine polja
    $val = 1;

    //array u koji spremam vrijednosti
    $arr = [];

    //redak
    $k = 0;

    //stupac
    $l = 0;

    while ($k < $a && $l < $b)
    {
        //upisuju u prvi red s lijeva na desno
        for ($i = $l; $i < $b; ++$i) {
            $arr[$k][$i] = $val++;
        }
        //smanjuje visinu za 1
        $k++;

        //upisuje u zadnji stupac od gore prema dolje
        for ($i = $k; $i < $a; ++$i) {
            $arr[$i][$b - 1] = $val++;
        }
        //smanjuje sirinu za 1
        $b--;

        if ($k < $a)
        {
            //upisuje u zadnju red s desna na lijevo
            for ($i = $b - 1; $i >= $l; --$i) {
                $arr[$a - 1][$i] = $val++;
            }
            //smanjuje visinu za 1
            $a--;
        }

        if ($l < $b)
        {
            //upisuje u prvi stupac od dolje prema gore
            for ($i = $a - 1; $i >= $k; --$i){
                $arr[$i][$l] = $val++;
            }
            //smanjuje sirinu za 1
            $l++;
        }
    }
    //vraca array
    return $arr;
}