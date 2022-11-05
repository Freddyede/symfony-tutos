<?php

namespace App\Tests\Func;

use App\Services\ControllerServices;
use PHPUnit\Framework\TestCase;

class AppTest extends TestCase
{
    public function testSomething(): void {
        $services = new ControllerServices();
        $services->setName('HomeController');
        $this->assertEquals('HomeController', $services->getName());
    }
}
