<?php

namespace Bnomei;

use Mobile_Detect;

class MobileDetect
{
    private static $detect = null;

    public static function instance()
    {
        if (!self::$detect) {
            self::$detect = new Mobile_Detect();
        }
        return self::$detect;
    }
}
