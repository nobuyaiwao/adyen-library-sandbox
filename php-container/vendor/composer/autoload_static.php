<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit7d8a6d6f62d8e6d91406614b9a24aa9b
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'Psr\\Log\\' => 8,
        ),
        'M' => 
        array (
            'Monolog\\' => 8,
        ),
        'A' => 
        array (
            'Adyen\\' => 6,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Psr\\Log\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/log/src',
        ),
        'Monolog\\' => 
        array (
            0 => __DIR__ . '/..' . '/monolog/monolog/src/Monolog',
        ),
        'Adyen\\' => 
        array (
            0 => __DIR__ . '/..' . '/adyen/php-api-library/src/Adyen',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit7d8a6d6f62d8e6d91406614b9a24aa9b::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit7d8a6d6f62d8e6d91406614b9a24aa9b::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit7d8a6d6f62d8e6d91406614b9a24aa9b::$classMap;

        }, null, ClassLoader::class);
    }
}
