<?php

spl_autoload_register(function ($classname) {
    require_once ($classname . '.php');
});

function TestDecorator($text)
{
    $showText = 
        new SendToFacebook(
            new SendToInstagram(
                new SendToTelegram(
                    new SendToVK(
                        new SendToWhatsApp(
                            new Base($text)
                        )
                    )
                )
            )
        );
    echo $showText->show();
}

$text = 'photo.png';

TestDecorator($text);

