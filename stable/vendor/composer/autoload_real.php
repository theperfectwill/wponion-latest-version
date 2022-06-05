<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInit7aa5c201bc6c14a15edbf7f412bd3aaa
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

        spl_autoload_register(array('ComposerAutoloaderInit7aa5c201bc6c14a15edbf7f412bd3aaa', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInit7aa5c201bc6c14a15edbf7f412bd3aaa', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInit7aa5c201bc6c14a15edbf7f412bd3aaa::getInitializer($loader));

        $loader->register(true);

        $includeFiles = \Composer\Autoload\ComposerStaticInit7aa5c201bc6c14a15edbf7f412bd3aaa::$files;
        foreach ($includeFiles as $fileIdentifier => $file) {
            composerRequire7aa5c201bc6c14a15edbf7f412bd3aaa($fileIdentifier, $file);
        }

        return $loader;
    }
}

/**
 * @param string $fileIdentifier
 * @param string $file
 * @return void
 */
function composerRequire7aa5c201bc6c14a15edbf7f412bd3aaa($fileIdentifier, $file)
{
    if (empty($GLOBALS['__composer_autoload_files'][$fileIdentifier])) {
        $GLOBALS['__composer_autoload_files'][$fileIdentifier] = true;

        require $file;
    }
}
