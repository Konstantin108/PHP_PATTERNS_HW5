<?php


class SendToVK extends Decorator
{

    public function show()
    {
        return 'Опубликовать на своей странице в VK' . '<br>' . $this->objText->show();
    }
}