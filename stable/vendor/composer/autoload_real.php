<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInit5e5ab47a6d6c7e6dc09eb09fe1d425ca
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

        spl_autoload_register(array('ComposerAutoloaderInit5e5ab47a6d6c7e6dc09eb09fe1d425ca', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInit5e5ab47a6d6c7e6dc09eb09fe1d425ca', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInit5e5ab47a6d6c7e6dc09eb09fe1d425ca::getInitializer($loader));

        $loader->register(true);

        $includeFiles = \Composer\Autoload\ComposerStaticInit5e5ab47a6d6c7e6dc09eb09fe1d425ca::$files;
        foreach ($includeFiles as $fileIdentifier => $file) {
            composerRequire5e5ab47a6d6c7e6dc09eb09fe1d425ca($fileIdentifier, $file);
        }

        return $loader;
    }
}

/**
 * @param string $fileIdentifier
 * @param string $file
 * @return void
 */
function composerRequire5e5ab47a6d6c7e6dc09eb09fe1d425ca($fileIdentifier, $file)
{
    if (empty($GLOBALS['__composer_autoload_files'][$fileIdentifier])) {
        $GLOBALS['__composer_autoload_files'][$fileIdentifier] = true;

        require $file;
    }
}
