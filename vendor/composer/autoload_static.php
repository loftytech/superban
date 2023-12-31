<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit28ceceffc4e5640020b47fe000869e69
{
    public static $prefixLengthsPsr4 = array (
        'L' => 
        array (
            'Loftytech\\Superban\\' => 19,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Loftytech\\Superban\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit28ceceffc4e5640020b47fe000869e69::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit28ceceffc4e5640020b47fe000869e69::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit28ceceffc4e5640020b47fe000869e69::$classMap;

        }, null, ClassLoader::class);
    }
}
