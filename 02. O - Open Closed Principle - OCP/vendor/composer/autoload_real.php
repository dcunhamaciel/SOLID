<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInitb26aba94508adce1a0e561a0b592c417
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

        spl_autoload_register(array('ComposerAutoloaderInitb26aba94508adce1a0e561a0b592c417', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInitb26aba94508adce1a0e561a0b592c417', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInitb26aba94508adce1a0e561a0b592c417::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
