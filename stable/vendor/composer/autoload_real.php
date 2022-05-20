<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInit12e7a9d8a9ef910ba0637f3a1beff8fd
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

        spl_autoload_register(array('ComposerAutoloaderInit12e7a9d8a9ef910ba0637f3a1beff8fd', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInit12e7a9d8a9ef910ba0637f3a1beff8fd', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInit12e7a9d8a9ef910ba0637f3a1beff8fd::getInitializer($loader));

        $loader->register(true);

        $includeFiles = \Composer\Autoload\ComposerStaticInit12e7a9d8a9ef910ba0637f3a1beff8fd::$files;
        foreach ($includeFiles as $fileIdentifier => $file) {
            composerRequire12e7a9d8a9ef910ba0637f3a1beff8fd($fileIdentifier, $file);
        }

        return $loader;
    }
}

/**
 * @param string $fileIdentifier
 * @param string $file
 * @return void
 */
function composerRequire12e7a9d8a9ef910ba0637f3a1beff8fd($fileIdentifier, $file)
{
    if (empty($GLOBALS['__composer_autoload_files'][$fileIdentifier])) {
        $GLOBALS['__composer_autoload_files'][$fileIdentifier] = true;

        require $file;
    }
}
