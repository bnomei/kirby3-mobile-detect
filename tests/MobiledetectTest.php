<?php

require_once __DIR__ . '/../vendor/autoload.php';

use Bnomei\MobileDetect;
use PHPUnit\Framework\TestCase;

final class MobiledetectTest extends TestCase
{
    public function testStaticInstance()
    {
        $md = MobileDetect::instance();
        $this->assertInstanceOf(Mobile_Detect::class, $md);
    }
}
