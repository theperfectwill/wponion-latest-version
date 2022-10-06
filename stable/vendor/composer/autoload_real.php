<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInitdd2ad1f9a7f3b1db20fad7226c55c206
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

        spl_autoload_register(array('ComposerAutoloaderInitdd2ad1f9a7f3b1db20fad7226c55c206', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInitdd2ad1f9a7f3b1db20fad7226c55c206', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInitdd2ad1f9a7f3b1db20fad7226c55c206::getInitializer($loader));

        $loader->register(true);

        $includeFiles = \Composer\Autoload\ComposerStaticInitdd2ad1f9a7f3b1db20fad7226c55c206::$files;
        foreach ($includeFiles as $fileIdentifier => $file) {
            composerRequiredd2ad1f9a7f3b1db20fad7226c55c206($fileIdentifier, $file);
        }

        return $loader;
    }
}

/**
 * @param string $fileIdentifier
 * @param string $file
 * @return void
 */
function composerRequiredd2ad1f9a7f3b1db20fad7226c55c206($fileIdentifier, $file)
{
    if (empty($GLOBALS['__composer_autoload_files'][$fileIdentifier])) {
        $GLOBALS['__composer_autoload_files'][$fileIdentifier] = true;

        require $file;
    }
}
