<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit24c0ba0bf4654b170844de0d99270003
{
    public static $prefixLengthsPsr4 = array (
        'T' => 
        array (
            'Taisen\\SmsSystem\\' => 17,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Taisen\\SmsSystem\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'AltoRouter' => __DIR__ . '/..' . '/altorouter/altorouter/AltoRouter.php',
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'ErrorCodes' => __DIR__ . '/../..' . '/model/sms/ErrorCodes.php',
        'RequestError' => __DIR__ . '/../..' . '/model/sms/RequestError.php',
        'SMSActivate' => __DIR__ . '/../..' . '/model/sms/SMSActivate.php',
        'cotrollerIndex' => __DIR__ . '/../..' . '/controller/controllerIndex.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit24c0ba0bf4654b170844de0d99270003::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit24c0ba0bf4654b170844de0d99270003::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit24c0ba0bf4654b170844de0d99270003::$classMap;

        }, null, ClassLoader::class);
    }
}
