<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitf79d70715f4d40312550cfdb4fb4b001
{
    public static $files = array (
        '5771e51473d317da45c9dfba1be8844a' => __DIR__ . '/../..' . '/config.php',
    );

    public static $prefixLengthsPsr4 = array (
        'B' => 
        array (
            'Bnomei\\' => 7,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Bnomei\\' => 
        array (
            0 => __DIR__ . '/../..' . '/classes',
        ),
    );

    public static $prefixesPsr0 = array (
        'D' => 
        array (
            'Detection' => 
            array (
                0 => __DIR__ . '/..' . '/mobiledetect/mobiledetectlib/namespaced',
            ),
        ),
    );

    public static $classMap = array (
        'Mobile_Detect' => __DIR__ . '/..' . '/mobiledetect/mobiledetectlib/Mobile_Detect.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitf79d70715f4d40312550cfdb4fb4b001::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitf79d70715f4d40312550cfdb4fb4b001::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInitf79d70715f4d40312550cfdb4fb4b001::$prefixesPsr0;
            $loader->classMap = ComposerStaticInitf79d70715f4d40312550cfdb4fb4b001::$classMap;

        }, null, ClassLoader::class);
    }
}
