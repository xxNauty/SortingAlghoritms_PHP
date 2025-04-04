<?php

require_once "./BogoSort/main.php";
require_once "./BozoSort/main.php";
require_once "./BubbleSort/main.php";
require_once "./StalinSort/main.php";
require_once "./Common/array_printer.php";

$data = [
    57, 10, 25, 3, 40,
    76, 1, 84, 62, 23,
    95, 19, 44, 13, 58,
//    80, 8, 36, 74, 98,
//    21, 6, 92, 71, 87,
//    34, 48, 89, 15, 53,
//    29, 41, 82, 5, 100,
//    17, 27, 60, 68, 9,
//    31, 50, 83, 16, 64,
//    4, 97, 39, 45, 94,
//    26, 47, 14, 78, 90,
//    33, 85, 2, 59, 22,
//    72, 7, 30, 66, 49,
//    12, 99, 43, 28, 88,
//    11, 54, 65, 32, 79,
//    20, 56, 24, 70, 91,
//    46, 18, 67, 35, 86,
//    61, 42, 96, 75, 52,
//    63, 93, 37, 77, 38,
//    81, 55, 69, 73, 51,
//    10, 25, 92, 41, 83,
//    64, 97, 33, 59, 66,
//    11, 43, 79, 24, 46,
//    37, 81, 55, 11, 92,
//    34, 48, 89, 15, 53,
//    29, 41, 82, 5, 100,
//    17, 27, 60, 68, 9,
//    31, 50, 83, 16, 64,
//    4, 97, 39, 45, 94,
//    26, 47, 14, 78, 90,
//    33, 85, 2, 59, 22,
//    72, 7, 30, 66, 49,
//    12, 99, 43, 28, 88,
//    11, 54, 65, 32, 79,
//    20, 56, 24, 70, 91,
//    46, 18, 67, 35, 86,
//    61, 42, 96, 75, 52,
//    63, 93, 37, 77, 38,
//    81, 55, 69, 73, 51,
//    10, 25, 92, 41, 83,
//    64, 97, 33, 59, 66,
//    11, 43, 79, 24, 46,
//    37, 81, 55, 11, 92,
];
echo "--------------\n";
echo "Dane wejściowe: \n";
printArray($data);
echo "--------------\n";
//benchmarkForBogoSort();
//benchmarkForBozoSort();
benchmarkForBubbleSort();
benchmarkForStalinSort();

//---------------------------------------------

function benchmarkForBogoSort(): void
{
    global $data;
    $dataToSort = $data;

    $startTime = microtime(true);

    bogoSort($dataToSort);

    $endTime = microtime(true);

    $executionTime = $endTime - $startTime;
    echo "Czas sortowania metodą BogoSort: " . number_format($executionTime, 15) . " sekund.\n";
}

function benchmarkForBozoSort(): void
{
    global $data;
    $dataToSort = $data;

    $startTime = microtime(true);

    bozoSort($dataToSort);

    $endTime = microtime(true);

    $executionTime = $endTime - $startTime;
    echo "Czas sortowania metodą BozoSort: " . number_format($executionTime, 15) . " sekund.\n";
}

function benchmarkForBubbleSort(): void
{
    global $data;
    $dataToSort = $data;

    $startTime = microtime(true);

    bubbleSort($dataToSort);

    $endTime = microtime(true);

    $executionTime = $endTime - $startTime;
    echo "Czas sortowania metodą BubbleSort: " . number_format($executionTime, 15) . " sekund.\n";
}

function benchmarkForStalinSort(): void
{
    global $data;
    $dataToSort = $data;

    $startTime = microtime(true);

    stalinSort($dataToSort);

    $endTime = microtime(true);

    $executionTime = $endTime - $startTime;
    echo "Czas sortowania metodą StalinSort: " . number_format($executionTime, 15) . " sekund.\n";
}
