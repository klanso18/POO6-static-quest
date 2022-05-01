<?php

class Speedometer 
{
    public const MILES_CONVERSION = 0.6214;
    public const KM_CONVERSION = 1.61;

    private float $miles;
    private float $km; 

    public static function convertKmToMiles(float $km): float
    {
        return $km * self::MILES_CONVERSION;
    }

    public static function convertMilesToKm(float $miles): float
    {
        return $miles * self::KM_CONVERSION;
    }
}

