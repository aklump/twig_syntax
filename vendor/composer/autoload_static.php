<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitf3239fac4b5c6ac55352d3b5a33da7b6
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'AKlump\\TwigSyntax\\' => 18,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'AKlump\\TwigSyntax\\' => 
        array (
            0 => __DIR__ . '/../..' . '/',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitf3239fac4b5c6ac55352d3b5a33da7b6::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitf3239fac4b5c6ac55352d3b5a33da7b6::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}