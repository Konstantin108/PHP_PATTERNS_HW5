<?php

abstract class Decorator implements Text
{
    protected $objText;

    public function __construct(Text $objText)
    {
        $this->objText = $objText;
    }
}