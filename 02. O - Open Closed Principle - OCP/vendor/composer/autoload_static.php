<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitb26aba94508adce1a0e561a0b592c417
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
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitb26aba94508adce1a0e561a0b592c417::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitb26aba94508adce1a0e561a0b592c417::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitb26aba94508adce1a0e561a0b592c417::$classMap;

        }, null, ClassLoader::class);
    }
}