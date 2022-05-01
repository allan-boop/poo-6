<?php

class Speedometer
{
    public const DISTANCE_CONVERSION = 1.609;

    public static function convertKilometersToMiles(float $kilometers): float
    {
        return $kilometers / self::DISTANCE_CONVERSION;
    }

    public static function convertMilesToKilometers(float $miles): float
    {
        return $miles * self::DISTANCE_CONVERSION;
    }
}

echo Speedometer::convertKilometersToMiles(10) . PHP_EOL;
echo Speedometer::convertMilesToKilometers(10) . PHP_EOL;