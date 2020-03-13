<?php

use app\classes\commands\Register;
use dis\core\classes\Command;
use dis\core\main\Main;

require_once __DIR__.'/../../vendor/autoload.php';

Command::set_register(Register::class);
Main::main(['cmd.php', 'generate:cmd'], 2);
Main::main(['cmd.php', 'generate:index', '-p', 'context=api'], 4);