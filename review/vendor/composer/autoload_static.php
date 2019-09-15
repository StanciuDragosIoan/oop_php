<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit5b29c535aef20f8acf2baee67d3a738b
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'Acme2\\' => 6,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Acme2\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit5b29c535aef20f8acf2baee67d3a738b::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit5b29c535aef20f8acf2baee67d3a738b::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}