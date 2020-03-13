<?php


namespace app\classes\commands;


class Register extends \dis\core\classes\commands\Register {
    public static function set_commands() {
        static::$commands = [
            ...static::$commands,
            'my-command' => MyCommand::class,
            'generate' => Generate::class,
        ];
    }
}