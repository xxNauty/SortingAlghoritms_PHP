<?php

namespace Common;

class CommonFunctions
{
    public static function printArray(array $data): void
    {
        foreach ($data as $value) {
            echo $value . " ";
        }
        echo "\n";
    }

    public static function isSorted(array $data): bool
    {
        for ($i = 0; $i < count($data) - 1; $i++) {
            if ($data[$i] > $data[$i + 1]) {
                return false;
            }
        }

        return true;
    }

    public static function swap(mixed &$a, mixed &$b): void
    {
        $temp = $a;
        $a = $b;
        $b = $temp;
    }

    public static function mix(array &$data): void
    {
        for ($i = 0; $i < count($data); $i++) {
            self::swap(
                $data[rand(0, count($data))],
                $data[rand(0, count($data))]
            );
        }
    }
}