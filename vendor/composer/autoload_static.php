<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitf4561ae2f388bbcedc33405daed490b0
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Simplexi\\Greetr\\' => 16,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Simplexi\\Greetr\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitf4561ae2f388bbcedc33405daed490b0::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitf4561ae2f388bbcedc33405daed490b0::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitf4561ae2f388bbcedc33405daed490b0::$classMap;

        }, null, ClassLoader::class);
    }
}
