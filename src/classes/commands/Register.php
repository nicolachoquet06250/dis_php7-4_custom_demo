<?php


namespace app\classes\commands;


class Register extends \dis\core\classes\commands\Register {
    protected static array $commands = [
        'my-command' => MyCommand::class,
        'generate' => Generate::class,
    ];
}