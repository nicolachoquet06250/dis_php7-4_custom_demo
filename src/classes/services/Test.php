<?php

namespace app\classes\services;

use dis\core\traits\Singleton;

/**
 * Class Test
 * @package classes\services
 *
 * @method static Test create()
 */
class Test {
    use Singleton;

    public function test() {
        var_dump('HELLO');
    }
}