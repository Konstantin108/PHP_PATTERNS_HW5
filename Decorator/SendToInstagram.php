<?php


class SendToInstagram extends Decorator
{

    public function show()
    {
        return 'Опубликовать в Instagram' . '<br>' . $this->objText->show();
    }
}