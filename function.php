<?php
function spiralFill($a, $b)
{
    $maxValue = $a * $b;

    //krece od 1 do sveukupne kolicine polja
    $val = 1;

    //array u koji spremam vrijednosti
    $arr = [];

    //redak
    $k = 0;

    //stupac
    $l = 0;

    //posljednji clan
    $last = false;

    function isLast($val, $maxValue){
        if ($maxValue  === $val) {
            return true;
        }
        return false;
    }

    while ($k < $a && $l < $b) {
        //provjera dali je zadnji clan

        //upisuju u prvi red s lijeva na desno
        for ($i = $l; $i < $b; ++$i) {
            $arr[$k][$i]['val'] = $val++;
            if ($last) {
                $arr[$k][$i]['l'] = true;
                return $arr;
            } elseif ($i + 1 >= $b) {
                $arr[$k][$i]['l'] = true;
                $arr[$k][$i]['d'] = true;
            } else {
                $arr[$k][$i]['l'] = true;
                $arr[$k][$i]['r'] = true;
            }
            $last = isLast($val,$maxValue);
        }
        //smanjuje visinu za 1
        $k++;

        //upisuje u zadnji stupac od gore prema dolje
        for ($i = $k; $i < $a; ++$i) {
            $arr[$i][$b - 1]['val'] = $val++;
            if ($last) {
                $arr[$i][$b -1]['u'] = true;
                return $arr;
            } elseif ($i + 1 == $a) {
                $arr[$i][$b - 1]['u'] = true;
                $arr[$i][$b - 1]['l'] = true;
            } else {
                $arr[$i][$b - 1]['u'] = true;
                $arr[$i][$b - 1]['d'] = true;
            }
            $last = isLast($val,$maxValue);
        }
        //smanjuje sirinu za 1
        $b--;

        if ($k < $a) {
            //upisuje u zadnju red s desna na lijevo
            for ($i = $b - 1; $i >= $l; --$i) {
                $arr[$a - 1][$i]['val'] = $val++;
                if ($last) {
                    $arr[$a-1][$i]['r'] = true;
                    return $arr;
                } elseif ($i - 1 < $l) {
                    $arr[$a - 1][$i]['u'] = true;
                    $arr[$a - 1][$i]['r'] = true;
                } else {
                    $arr[$a - 1][$i]['l'] = true;
                    $arr[$a - 1][$i]['r'] = true;
                }
                $last = isLast($val,$maxValue);
            }
            //smanjuje visinu za 1
            $a--;
        }

        if ($l < $b) {
            //upisuje u prvi stupac od dolje prema gore
            for ($i = $a - 1; $i >= $k; --$i) {
                $arr[$i][$l]['val'] = $val++;
                if ($last) {
                    $arr[$i][$l]['d'] = true;
                    return $arr;
                } elseif ($i - 1 < $k) {
                    $arr[$i][$l]['d'] = true;
                    $arr[$i][$l]['r'] = true;
                } else {
                    $arr[$i][$l]['u'] = true;
                    $arr[$i][$l]['d'] = true;
                }
                $last = isLast($val,$maxValue);
            }
            //smanjuje sirinu za 1
            $l++;
        }
    }
    return $arr;
}