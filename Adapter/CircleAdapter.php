<?php


class CircleAdapter extends CircleAreaLib
{
    private $circle;

    public function __construct(Circle $circle)
    {
        $this->circle = $circle;
    }

    public function getCircleArea($diagonal)
    {
        $circumference = $diagonal * M_PI;
        return $this->circle->circleArea($circumference);
    }
}