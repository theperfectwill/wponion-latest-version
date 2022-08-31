<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInit82c54f32d8c8e8dc2f4ab4f05b1702f2
{
    private static $loader;

    public static function loadClassLoader($class)
    {
        if ('Composer\Autoload\ClassLoader' === $class) {
            require __DIR__ . '/ClassLoader.php';
        }
    }

    /**
     * @return \Composer\Autoload\ClassLoader
     */
    public static function getLoader()
    {
        if (null !== self::$loader) {
            return self::$loader;
        }

        spl_autoload_register(array('ComposerAutoloaderInit82c54f32d8c8e8dc2f4ab4f05b1702f2', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInit82c54f32d8c8e8dc2f4ab4f05b1702f2', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInit82c54f32d8c8e8dc2f4ab4f05b1702f2::getInitializer($loader));

        $loader->register(true);

        $includeFiles = \Composer\Autoload\ComposerStaticInit82c54f32d8c8e8dc2f4ab4f05b1702f2::$files;
        foreach ($includeFiles as $fileIdentifier => $file) {
            composerRequire82c54f32d8c8e8dc2f4ab4f05b1702f2($fileIdentifier, $file);
        }

        return $loader;
    }
}

/**
 * @param string $fileIdentifier
 * @param string $file
 * @return void
 */
function composerRequire82c54f32d8c8e8dc2f4ab4f05b1702f2($fileIdentifier, $file)
{
    if (empty($GLOBALS['__composer_autoload_files'][$fileIdentifier])) {
        $GLOBALS['__composer_autoload_files'][$fileIdentifier] = true;

        require $file;
    }
}
