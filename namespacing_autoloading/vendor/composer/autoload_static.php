<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitdba8d7732e9bfafb39f0c7188c8a0f6d
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'Acme\\' => 5,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Acme\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitdba8d7732e9bfafb39f0c7188c8a0f6d::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitdba8d7732e9bfafb39f0c7188c8a0f6d::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
