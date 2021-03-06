<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit050b4573c74f1765562215afd83a5938
{
    public static $prefixLengthsPsr4 = array (
        'D' => 
        array (
            'DigitalStar\\vk_api\\' => 19,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'DigitalStar\\vk_api\\' => 
        array (
            0 => __DIR__ . '/..' . '/digitalstars/simplevk/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit050b4573c74f1765562215afd83a5938::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit050b4573c74f1765562215afd83a5938::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit050b4573c74f1765562215afd83a5938::$classMap;

        }, null, ClassLoader::class);
    }
}
