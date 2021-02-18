<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit0e94ced8a8b3d6fe45d7b85d4fb7a68f
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'PhpQuery\\' => 9,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'PhpQuery\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpquery/phpquery/src',
        ),
    );

    public static $prefixesPsr0 = array (
        'K' => 
        array (
            'KubAT\\PhpSimple\\HtmlDomParser' => 
            array (
                0 => __DIR__ . '/..' . '/kub-at/php-simple-html-dom-parser/src',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit0e94ced8a8b3d6fe45d7b85d4fb7a68f::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit0e94ced8a8b3d6fe45d7b85d4fb7a68f::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInit0e94ced8a8b3d6fe45d7b85d4fb7a68f::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}