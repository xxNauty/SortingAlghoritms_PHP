<?php

function isSorted(array $data): bool
{
    for ($i = 0; $i < count($data) - 1; $i++) {
        if($data[$i] > $data[$i+1]) {
            return false;
        }
    }

    return true;
}
