<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitc3886259fd5e104ff640ca0bb4b99c7c
{
    public static $prefixLengthsPsr4 = array (
        'D' => 
        array (
            'Dealerdirect\\Composer\\Plugin\\Installers\\PHPCodeSniffer\\' => 55,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Dealerdirect\\Composer\\Plugin\\Installers\\PHPCodeSniffer\\' => 
        array (
            0 => __DIR__ . '/..' . '/dealerdirect/phpcodesniffer-composer-installer/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitc3886259fd5e104ff640ca0bb4b99c7c::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitc3886259fd5e104ff640ca0bb4b99c7c::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
