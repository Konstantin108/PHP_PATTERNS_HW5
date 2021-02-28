<?php


class Square implements ISquare
{
    function squareArea($sideSquare)
    {
        $areaSquare = $sideSquare**2;
        return $areaSquare . ' - площадь квадрата' . '<br>';
    }
}