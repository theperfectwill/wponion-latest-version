<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInit763eb5cb0622fe0a0ca7f92ff659c8ad
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

        spl_autoload_register(array('ComposerAutoloaderInit763eb5cb0622fe0a0ca7f92ff659c8ad', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInit763eb5cb0622fe0a0ca7f92ff659c8ad', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInit763eb5cb0622fe0a0ca7f92ff659c8ad::getInitializer($loader));

        $loader->register(true);

        $includeFiles = \Composer\Autoload\ComposerStaticInit763eb5cb0622fe0a0ca7f92ff659c8ad::$files;
        foreach ($includeFiles as $fileIdentifier => $file) {
            composerRequire763eb5cb0622fe0a0ca7f92ff659c8ad($fileIdentifier, $file);
        }

        return $loader;
    }
}

/**
 * @param string $fileIdentifier
 * @param string $file
 * @return void
 */
function composerRequire763eb5cb0622fe0a0ca7f92ff659c8ad($fileIdentifier, $file)
{
    if (empty($GLOBALS['__composer_autoload_files'][$fileIdentifier])) {
        $GLOBALS['__composer_autoload_files'][$fileIdentifier] = true;

        require $file;
    }
}
