<?php

spl_autoload_register(function ($classname) {
    require_once ($classname . '.php');
});

function getAreaCircle(CircleAreaLib $circleAreaLib)
{
    $circleAreaLib->getCircleArea(null);
}

$circumference = 5;

$circle = new Circle();
echo $circle->circleArea($circumference);

$circleAdapter = new CircleAdapter($circle);
getAreaCircle($circleAdapter);

function getAreaSquare(SquareAreaLib $squareAreaLib)
{
    $squareAreaLib->getSquareArea(null);
}

$sideSquare = 5;

$square = new Square();
echo $square->squareArea($sideSquare);

$squareAdapter = new SquareAdapter($square);
getAreaSquare($squareAdapter);

