<?php

namespace Benchmark;

require '../vendor/autoload.php'; //wymagane by działały namespace i importowanie z użyciem use

use Algorithms\BogoSort\BogoSort;
use Algorithms\BozoSort\BozoSort;
use Algorithms\BubbleSort\BubbleSort;
use Algorithms\BucketSort\BucketSort;
use Algorithms\CombSort\CombSort;
use Algorithms\CountingSort\CountingSort;
use Algorithms\StalinSort\StalinSort;

use Common\CommonFunctions;

class Benchmark
{
    public const array DATA = [
        57, 10, 25, 3, 40, 76, 1, 84, 62, 23,
        95, 19, 44, 13, 58, 80, 8, 36, 74, 98,
        21, 6, 92, 71, 87, 34, 48, 89, 15, 53,
        29, 41, 82, 5, 100, 17, 27, 60, 68, 9,
        31, 50, 83, 16, 64, 4, 97, 39, 45, 94,
        26, 47, 14, 78, 90, 33, 85, 2, 59, 22,
        72, 7, 30, 66, 49, 12, 99, 43, 28, 88,
        11, 54, 65, 32, 79, 20, 56, 24, 70, 91,
        46, 18, 67, 35, 86, 61, 42, 96, 75, 52,
        63, 93, 37, 77, 38, 81, 55, 69, 73, 51,
        10, 25, 92, 41, 83, 64, 97, 33, 59, 66,
        11, 43, 79, 24, 46, 37, 81, 55, 11, 92,
        34, 48, 89, 15, 53, 29, 41, 82, 5, 100,
        17, 27, 60, 68, 9, 31, 50, 83, 16, 64,
        4, 97, 39, 45, 94, 26, 47, 14, 78, 90,
        33, 85, 2, 59, 22, 72, 7, 30, 66, 49,
        12, 99, 43, 28, 88, 11, 54, 65, 32, 79,
        20, 56, 24, 70, 91, 46, 18, 67, 35, 86,
        61, 42, 96, 75, 52, 63, 93, 37, 77, 38,
        81, 55, 69, 73, 51, 10, 25, 92, 41, 83,
        64, 97, 33, 59, 66, 11, 43, 79, 24, 46,
        37, 81, 55, 11, 92, 39, 11, 32, 23, 99,
    ];

    public function __invoke(): void
    {
        echo "--------------\n";
        echo "Dane wejściowe: \n";
        CommonFunctions::printArray(self::DATA);
        echo "--------------\n";
        echo "Rozmiar tablicy wejściowej: " . count(self::DATA) . "\n";
        echo "--------------\n";

//        $this->benchmarkForBogoSort();
//        $this->benchmarkForBozoSort();
        $bubblesort = $this->benchmarkForBubbleSort();
        $bucketsort = $this->benchmarkForBucketSort();
        $countingsort = $this->benchmarkForCountingSort();
        $combsort = $this->benchmarkForCombSort();
        $stalinsort = $this->benchmarkForStalinSort();

        $results = [
            'BubbleSort' => $bubblesort,
            'BucketSort' => $bucketsort,
            'CountingSort' => $countingsort,
            'CombSort' => $combsort,
            'StalinSort' => $stalinsort,
        ];

        $highestFunction = array_keys($results, max($results))[0];
        $lowestFunction = array_keys($results, min($results))[0];

        echo "--------------\n";

        echo "Najszybsze sortowanie: " . $lowestFunction . " z czasem: " . number_format($results[$highestFunction], 15) . " sekund.\n";
        echo "Najwolniejsze sortowanie: " . $highestFunction . " z czasem: " . number_format($results[$lowestFunction], 15) . " sekund.\n";
    }

    private function benchmarkForBogoSort(): float
    {
        $dataToSort = self::DATA;

        $startTime = microtime(true);

        $algorithm = new BogoSort();
        $sortedData = $algorithm->bogoSort($dataToSort);

        $endTime = microtime(true);

        $executionTime = $endTime - $startTime;
        echo "Czas sortowania metodą BogoSort: " . number_format($executionTime, 15) . " sekund.\n";
//        echo "Rozmiar tablicy po sortowaniu: " . count($sortedData) . "\n";

        return (float) number_format($executionTime, 15);
    }

    private function benchmarkForBozoSort(): float
    {
        $dataToSort = self::DATA;

        $startTime = microtime(true);

        $algorithm = new BozoSort();
        $sortedData = $algorithm->bozoSort($dataToSort);

        $endTime = microtime(true);

        $executionTime = $endTime - $startTime;
        echo "Czas sortowania metodą BozoSort: " . number_format($executionTime, 15) . " sekund.\n";
//        echo "Rozmiar tablicy po sortowaniu: " . count($sortedData) . "\n";

        return (float) number_format($executionTime, 15);
    }

    private function benchmarkForBubbleSort(): float
    {
        $dataToSort = self::DATA;

        $startTime = microtime(true);

        $algorithm = new BubbleSort();
        $sortedData = $algorithm->sort($dataToSort);

        $endTime = microtime(true);

        $executionTime = $endTime - $startTime;
        echo "Czas sortowania metodą BubbleSort:   " . number_format($executionTime, 15) . " sekund.\n";
//        echo "Rozmiar tablicy po sortowaniu: " . count($sortedData) . "\n";

        return (float) number_format($executionTime, 15);
    }

    private function benchmarkForBucketSort(): float
    {
        $dataToSort = self::DATA;

        $startTime = microtime(true);

        $algorithm = new BucketSort();
        $sortedData = $algorithm->sort($dataToSort);

        $endTime = microtime(true);

        $executionTime = $endTime - $startTime;
        echo "Czas sortowania metodą BucketSort:   " . number_format($executionTime, 15) . " sekund.\n";
//        echo "Rozmiar tablicy po sortowaniu: " . count($sortedData) . "\n";

        return (float) number_format($executionTime, 15);
    }

    private function benchmarkForCombSort(): float
    {
        $dataToSort = self::DATA;

        $startTime = microtime(true);

        $algorithm = new CombSort();
        $sortedData = $algorithm->sort($dataToSort);

        $endTime = microtime(true);

        $executionTime = $endTime - $startTime;
        echo "Czas sortowania metodą CombSort:     " . number_format($executionTime, 15) . " sekund.\n";
//        echo "Rozmiar tablicy po sortowaniu: " . count($sortedData) . "\n";

        return (float) number_format($executionTime, 15);
    }

    private function benchmarkForCountingSort(): float
    {
        $dataToSort = self::DATA;

        $startTime = microtime(true);

        $algorithm = new CountingSort();
        $sortedData = $algorithm->countingSort($dataToSort);

        $endTime = microtime(true);

        $executionTime = $endTime - $startTime;
        echo "Czas sortowania metodą CountingSort: " . number_format($executionTime, 15) . " sekund.\n";
//        echo "Rozmiar tablicy po sortowaniu: " . count($sortedData) . "\n";

        return (float) number_format($executionTime, 15);
    }

    private function benchmarkForStalinSort(): float
    {
        $dataToSort = self::DATA;

        $startTime = microtime(true);

        $algorithm = new StalinSort();
        $sortedData = $algorithm->stalinSort($dataToSort);

        $endTime = microtime(true);

        $executionTime = $endTime - $startTime;
        echo "Czas sortowania metodą StalinSort:   " . number_format($executionTime, 15) . " sekund.\n";
//        echo "Rozmiar tablicy po sortowaniu: " . count($sortedData) . "\n";

        return (float) number_format($executionTime, 15);
    }
}

$benchmark = new Benchmark();
$benchmark();
