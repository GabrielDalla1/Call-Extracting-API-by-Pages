<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit5814aa1e0da4906cf9e01d387146007a
{
    public static $prefixLengthsPsr4 = array (
        'm' => 
        array (
            'magnusbilling\\api\\' => 18,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'magnusbilling\\api\\' => 
        array (
            0 => __DIR__ . '/..' . '/magnussolution/magnusbilling-api/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit5814aa1e0da4906cf9e01d387146007a::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit5814aa1e0da4906cf9e01d387146007a::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit5814aa1e0da4906cf9e01d387146007a::$classMap;

        }, null, ClassLoader::class);
    }
}
