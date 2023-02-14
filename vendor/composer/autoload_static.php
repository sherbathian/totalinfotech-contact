<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitcd553422a4125931bd3ec5894dd96873
{
    public static $prefixLengthsPsr4 = array (
        'T' => 
        array (
            'TotalinfoTech\\Contact\\' => 22,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'TotalinfoTech\\Contact\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitcd553422a4125931bd3ec5894dd96873::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitcd553422a4125931bd3ec5894dd96873::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitcd553422a4125931bd3ec5894dd96873::$classMap;

        }, null, ClassLoader::class);
    }
}
