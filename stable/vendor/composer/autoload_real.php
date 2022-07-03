<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInit44aa3bd94c54ee0e0ae1b23795fa3ea8
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

        spl_autoload_register(array('ComposerAutoloaderInit44aa3bd94c54ee0e0ae1b23795fa3ea8', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInit44aa3bd94c54ee0e0ae1b23795fa3ea8', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInit44aa3bd94c54ee0e0ae1b23795fa3ea8::getInitializer($loader));

        $loader->register(true);

        $includeFiles = \Composer\Autoload\ComposerStaticInit44aa3bd94c54ee0e0ae1b23795fa3ea8::$files;
        foreach ($includeFiles as $fileIdentifier => $file) {
            composerRequire44aa3bd94c54ee0e0ae1b23795fa3ea8($fileIdentifier, $file);
        }

        return $loader;
    }
}

/**
 * @param string $fileIdentifier
 * @param string $file
 * @return void
 */
function composerRequire44aa3bd94c54ee0e0ae1b23795fa3ea8($fileIdentifier, $file)
{
    if (empty($GLOBALS['__composer_autoload_files'][$fileIdentifier])) {
        $GLOBALS['__composer_autoload_files'][$fileIdentifier] = true;

        require $file;
    }
}
