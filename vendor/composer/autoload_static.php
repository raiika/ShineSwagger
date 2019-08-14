<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit73592ee209074fa44ce42a07c7656d20
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Shinedira\\ShineSwagger\\' => 23,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Shinedira\\ShineSwagger\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit73592ee209074fa44ce42a07c7656d20::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit73592ee209074fa44ce42a07c7656d20::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
