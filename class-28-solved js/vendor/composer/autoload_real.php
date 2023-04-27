<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInit71f22c3f61f5c140a8382c56e4a88562
{
    private static $loader;

    public static function loadClassLoader($class)
    {
        if ('Composer\Autoload\ClassLoader' === $class) {
            require __DIR__ . '/ClassLoader.php';
        }
    }

    /**
     * @return \Composer\Autoload\ClassLoader
     */
    public static function getLoader()
    {
        if (null !== self::$loader) {
            return self::$loader;
        }

        spl_autoload_register(array('ComposerAutoloaderInit71f22c3f61f5c140a8382c56e4a88562', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInit71f22c3f61f5c140a8382c56e4a88562', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInit71f22c3f61f5c140a8382c56e4a88562::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}