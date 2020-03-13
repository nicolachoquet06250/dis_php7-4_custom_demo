<?php

namespace app\classes\services;

use dis\core\classes\mvc\Controller;
use dis\core\traits\DIS;
use dis\core\traits\Singleton;

/**
 * Class Test2
 * @package classes\services
 *
 * @method static Test2 create(Controller $controller)
 */
class Test2 {
    use Singleton;
    use DIS;

    private ?Controller $controller = null;

    protected function __construct(Controller $controller) {
        var_dump($controller, __LINE__);
    }

    public function test() {
        var_dump($this->controller, __LINE__);
    }
}