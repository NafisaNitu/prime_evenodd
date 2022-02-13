<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit1bf271c37f0670594bcaaa967b812f1c
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit1bf271c37f0670594bcaaa967b812f1c::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit1bf271c37f0670594bcaaa967b812f1c::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit1bf271c37f0670594bcaaa967b812f1c::$classMap;

        }, null, ClassLoader::class);
    }
}