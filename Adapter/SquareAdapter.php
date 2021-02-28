<?php


class SquareAdapter extends SquareAreaLib
{
    private $square;

    public function __construct(Square $square)
    {
        $this->square = $square;
    }

    public function getSquareArea($diagonal)
    {
        $sideSquare = $diagonal / sqrt(2);
        return $this->square->squareArea($sideSquare);
    }
}