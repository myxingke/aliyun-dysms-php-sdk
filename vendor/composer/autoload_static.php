<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitd8262ff4038bce3c039f8beaae513a2a
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'Aliyun\\Test\\' => 12,
            'Aliyun\\' => 7,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Aliyun\\Test\\' => 
        array (
            0 => __DIR__ . '/../..' . '/tests',
        ),
        'Aliyun\\' => 
        array (
            0 => __DIR__ . '/../..' . '/lib',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitd8262ff4038bce3c039f8beaae513a2a::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitd8262ff4038bce3c039f8beaae513a2a::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
