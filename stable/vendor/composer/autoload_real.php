<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInit34de1db1690dd3a5be8c7e4f5fb3566a
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

        spl_autoload_register(array('ComposerAutoloaderInit34de1db1690dd3a5be8c7e4f5fb3566a', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInit34de1db1690dd3a5be8c7e4f5fb3566a', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInit34de1db1690dd3a5be8c7e4f5fb3566a::getInitializer($loader));

        $loader->register(true);

        $includeFiles = \Composer\Autoload\ComposerStaticInit34de1db1690dd3a5be8c7e4f5fb3566a::$files;
        foreach ($includeFiles as $fileIdentifier => $file) {
            composerRequire34de1db1690dd3a5be8c7e4f5fb3566a($fileIdentifier, $file);
        }

        return $loader;
    }
}

/**
 * @param string $fileIdentifier
 * @param string $file
 * @return void
 */
function composerRequire34de1db1690dd3a5be8c7e4f5fb3566a($fileIdentifier, $file)
{
    if (empty($GLOBALS['__composer_autoload_files'][$fileIdentifier])) {
        $GLOBALS['__composer_autoload_files'][$fileIdentifier] = true;

        require $file;
    }
}
