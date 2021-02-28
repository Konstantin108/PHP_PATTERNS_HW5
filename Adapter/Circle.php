<?php


class Circle implements ICircle
{
    function circleArea($circumference)
    {
        $radius = $circumference / (2 * M_PI);
        $areaCircle = M_PI * $radius**2;
        return $areaCircle . ' - площадь круга' . '<br>';
    }
}