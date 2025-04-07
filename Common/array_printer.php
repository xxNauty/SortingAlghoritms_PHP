<?php

namespace Common;

function printArray(array $data): void
{
    foreach ($data as $value) {
        echo $value . " ";
    }
    echo "\n";
}
