<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit71f22c3f61f5c140a8382c56e4a88562
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit71f22c3f61f5c140a8382c56e4a88562::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit71f22c3f61f5c140a8382c56e4a88562::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit71f22c3f61f5c140a8382c56e4a88562::$classMap;

        }, null, ClassLoader::class);
    }
}