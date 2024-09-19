<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitfa44bcb955c4f7e1dbb5772461403b2a
{
    public static $prefixLengthsPsr4 = array (
        'J' => 
        array (
            'Jayaswalrupam13\\Chatbot\\' => 24,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Jayaswalrupam13\\Chatbot\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitfa44bcb955c4f7e1dbb5772461403b2a::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitfa44bcb955c4f7e1dbb5772461403b2a::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitfa44bcb955c4f7e1dbb5772461403b2a::$classMap;

        }, null, ClassLoader::class);
    }
}
