<?php

namespace Bnomei;

class MobileDetect
{
    private static $detect = null;

    public static function instance()
    {
        if (!self::$detect) {
            self::$detect = new \Mobile_Detect;
        }
        return self::$detect;
    }
}
