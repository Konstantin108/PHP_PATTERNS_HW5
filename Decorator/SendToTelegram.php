<?php


class SendToTelegram extends Decorator
{

    public function show()
    {
        return 'Отправить в Telegram' . '<br>' . $this->objText->show();
    }
}