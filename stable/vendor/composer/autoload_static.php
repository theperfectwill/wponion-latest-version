<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit6a8392b00e87219857f6ad493f3b7e43
{
    public static $files = array (
        'eba23924a915eda61344d946053e1609' => __DIR__ . '/..' . '/varunsridharan/wp-conditional-logic/src/functions.php',
        '0435a58c821d590b8a56387329899da3' => __DIR__ . '/..' . '/varunsridharan/wp-conditional-logic/src/WP_Conditional_Logic.php',
        '011316cc7fd7a11c4bebeb6bcdea5621' => __DIR__ . '/..' . '/varunsridharan/wp-dependencies/src/dependencies.php',
        '2a9c288188fe6d81555feec2fa6ec428' => __DIR__ . '/../..' . '/index.php',
    );

    public static $prefixLengthsPsr4 = array (
        'V' => 
        array (
            'Varunsridharan\\WordPress\\WP_Conditional_Logic\\' => 46,
            'Varunsridharan\\PHP\\' => 19,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Varunsridharan\\WordPress\\WP_Conditional_Logic\\' => 
        array (
            0 => __DIR__ . '/..' . '/varunsridharan/wp-conditional-logic/src',
        ),
        'Varunsridharan\\PHP\\' => 
        array (
            0 => __DIR__ . '/..' . '/varunsridharan/php-autoloader/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit6a8392b00e87219857f6ad493f3b7e43::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit6a8392b00e87219857f6ad493f3b7e43::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit6a8392b00e87219857f6ad493f3b7e43::$classMap;

        }, null, ClassLoader::class);
    }
}
