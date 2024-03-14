<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit65db5061f03b101426f090f3f84eebb1
{
    public static $prefixLengthsPsr4 = array (
        'L' => 
        array (
            'Lucas\\OopPhp2\\' => 14,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Lucas\\OopPhp2\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit65db5061f03b101426f090f3f84eebb1::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit65db5061f03b101426f090f3f84eebb1::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit65db5061f03b101426f090f3f84eebb1::$classMap;

        }, null, ClassLoader::class);
    }
}
