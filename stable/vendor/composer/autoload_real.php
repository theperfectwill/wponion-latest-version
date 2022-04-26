<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInitd36b60240f98f86e8a5d7ab56639975e
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

        spl_autoload_register(array('ComposerAutoloaderInitd36b60240f98f86e8a5d7ab56639975e', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInitd36b60240f98f86e8a5d7ab56639975e', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInitd36b60240f98f86e8a5d7ab56639975e::getInitializer($loader));

        $loader->register(true);

        $includeFiles = \Composer\Autoload\ComposerStaticInitd36b60240f98f86e8a5d7ab56639975e::$files;
        foreach ($includeFiles as $fileIdentifier => $file) {
            composerRequired36b60240f98f86e8a5d7ab56639975e($fileIdentifier, $file);
        }

        return $loader;
    }
}

/**
 * @param string $fileIdentifier
 * @param string $file
 * @return void
 */
function composerRequired36b60240f98f86e8a5d7ab56639975e($fileIdentifier, $file)
{
    if (empty($GLOBALS['__composer_autoload_files'][$fileIdentifier])) {
        $GLOBALS['__composer_autoload_files'][$fileIdentifier] = true;

        require $file;
    }
}
