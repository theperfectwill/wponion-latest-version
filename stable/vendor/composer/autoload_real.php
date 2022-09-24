<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInitfe1bd4b00d7aacbc7c2fd8f547e1d634
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

        spl_autoload_register(array('ComposerAutoloaderInitfe1bd4b00d7aacbc7c2fd8f547e1d634', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInitfe1bd4b00d7aacbc7c2fd8f547e1d634', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInitfe1bd4b00d7aacbc7c2fd8f547e1d634::getInitializer($loader));

        $loader->register(true);

        $includeFiles = \Composer\Autoload\ComposerStaticInitfe1bd4b00d7aacbc7c2fd8f547e1d634::$files;
        foreach ($includeFiles as $fileIdentifier => $file) {
            composerRequirefe1bd4b00d7aacbc7c2fd8f547e1d634($fileIdentifier, $file);
        }

        return $loader;
    }
}

/**
 * @param string $fileIdentifier
 * @param string $file
 * @return void
 */
function composerRequirefe1bd4b00d7aacbc7c2fd8f547e1d634($fileIdentifier, $file)
{
    if (empty($GLOBALS['__composer_autoload_files'][$fileIdentifier])) {
        $GLOBALS['__composer_autoload_files'][$fileIdentifier] = true;

        require $file;
    }
}
