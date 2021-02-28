<?php


class Base implements Text
{
    private $text;

    public function __construct($text)
    {
        $this->text = $text;
    }

    public function show()
    {
        echo '<h3>Поделиться</h3>';
        return $this->text;
    }
}