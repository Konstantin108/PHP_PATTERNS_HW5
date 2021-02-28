<?php


class SendToFacebook extends Decorator
{

    public function show()
    {
        return 'Опубликовать на Facebook' . '<br>' . $this->objText->show();
    }
}