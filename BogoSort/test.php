<?php

require_once "main.php";
require_once "../Common/array_printer.php";

$data = [45, 23, 98, 51, 76, 12, 31, 94, 61/*, 87, 10, 25, 37, 61, 87, 49, 73, 96, 28, 71*/];

printArray($data);

$data = bogoSort($data);

printArray($data);
