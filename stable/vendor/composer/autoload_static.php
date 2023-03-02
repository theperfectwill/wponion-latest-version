<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInita935208bb80fcf78502ab31c18dd9acd
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
            $loader->prefixLengthsPsr4 = ComposerStaticInita935208bb80fcf78502ab31c18dd9acd::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInita935208bb80fcf78502ab31c18dd9acd::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInita935208bb80fcf78502ab31c18dd9acd::$classMap;

        }, null, ClassLoader::class);
    }
}
