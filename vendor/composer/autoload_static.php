<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitd45f172588cb9a7e32fbd3c43b81e4b0
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'App\\wcs\\' => 8,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'App\\wcs\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/wcs',
        ),
    );

    public static $prefixesPsr0 = array (
        'H' => 
        array (
            'HelloWorld' => 
            array (
                0 => __DIR__ . '/..' . '/ehime/hello-world/src',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitd45f172588cb9a7e32fbd3c43b81e4b0::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitd45f172588cb9a7e32fbd3c43b81e4b0::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInitd45f172588cb9a7e32fbd3c43b81e4b0::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}
