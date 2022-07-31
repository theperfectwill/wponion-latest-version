<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInitf129dd543ee66a0b2b6e9b7335b9ce57
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

        spl_autoload_register(array('ComposerAutoloaderInitf129dd543ee66a0b2b6e9b7335b9ce57', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInitf129dd543ee66a0b2b6e9b7335b9ce57', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInitf129dd543ee66a0b2b6e9b7335b9ce57::getInitializer($loader));

        $loader->register(true);

        $includeFiles = \Composer\Autoload\ComposerStaticInitf129dd543ee66a0b2b6e9b7335b9ce57::$files;
        foreach ($includeFiles as $fileIdentifier => $file) {
            composerRequiref129dd543ee66a0b2b6e9b7335b9ce57($fileIdentifier, $file);
        }

        return $loader;
    }
}

/**
 * @param string $fileIdentifier
 * @param string $file
 * @return void
 */
function composerRequiref129dd543ee66a0b2b6e9b7335b9ce57($fileIdentifier, $file)
{
    if (empty($GLOBALS['__composer_autoload_files'][$fileIdentifier])) {
        $GLOBALS['__composer_autoload_files'][$fileIdentifier] = true;

        require $file;
    }
}
