<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit9b33d4106b6035705cc06463d3d1a916
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'Abdelrhman\\Chat\\' => 16,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Abdelrhman\\Chat\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit9b33d4106b6035705cc06463d3d1a916::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit9b33d4106b6035705cc06463d3d1a916::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit9b33d4106b6035705cc06463d3d1a916::$classMap;

        }, null, ClassLoader::class);
    }
}
