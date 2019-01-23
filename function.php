<?php
function spiralFill($m, $n)
{
    $val = 1;
    $arr = [];
    $k = 0;
    $l = 0;
    while ($k < $m && $l < $n)
    {
        for ($i = $l; $i < $n; ++$i)
            $arr[$k][$i] = $val++;

        $k++;

        for ($i = $k; $i < $m; ++$i)
            $arr[$i][$n - 1] = $val++;
        $n--;

        if ($k < $m)
        {
            for ($i = $n - 1; $i >= $l; --$i)
                $arr[$m - 1][$i] = $val++;
            $m--;
        }

        if ($l < $n)
        {
            for ($i = $m - 1; $i >= $k; --$i)
                $arr[$i][$l] = $val++;
            $l++;
        }
    }
    return $arr;
    
}