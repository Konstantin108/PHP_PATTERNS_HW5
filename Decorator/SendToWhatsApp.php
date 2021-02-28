<?php


class SendToWhatsApp extends Decorator
{

    public function show()
    {
        return 'Поделиться через в WhatsApp' . '<br>' . $this->objText->show();
    }
}