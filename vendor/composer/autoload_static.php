<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitbbc33637f8d17a6f942e03d3ba2b8e73
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitbbc33637f8d17a6f942e03d3ba2b8e73::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitbbc33637f8d17a6f942e03d3ba2b8e73::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitbbc33637f8d17a6f942e03d3ba2b8e73::$classMap;

        }, null, ClassLoader::class);
    }
}
