<?php

function swap(&$a, &$b): void
{
    $temp = $a;
    $a = $b;
    $b = $temp;
}