<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInita0b5bd73b536adc435baeed42de92a4a
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'PHPMailer\\PHPMailer\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'PHPMailer\\PHPMailer\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpmailer/phpmailer/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInita0b5bd73b536adc435baeed42de92a4a::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInita0b5bd73b536adc435baeed42de92a4a::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
