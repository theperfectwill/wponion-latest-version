<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInitdfc68f3aa4cb3fa426de8ce62c0d3183
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

        spl_autoload_register(array('ComposerAutoloaderInitdfc68f3aa4cb3fa426de8ce62c0d3183', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInitdfc68f3aa4cb3fa426de8ce62c0d3183', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInitdfc68f3aa4cb3fa426de8ce62c0d3183::getInitializer($loader));

        $loader->register(true);

        $includeFiles = \Composer\Autoload\ComposerStaticInitdfc68f3aa4cb3fa426de8ce62c0d3183::$files;
        foreach ($includeFiles as $fileIdentifier => $file) {
            composerRequiredfc68f3aa4cb3fa426de8ce62c0d3183($fileIdentifier, $file);
        }

        return $loader;
    }
}

/**
 * @param string $fileIdentifier
 * @param string $file
 * @return void
 */
function composerRequiredfc68f3aa4cb3fa426de8ce62c0d3183($fileIdentifier, $file)
{
    if (empty($GLOBALS['__composer_autoload_files'][$fileIdentifier])) {
        $GLOBALS['__composer_autoload_files'][$fileIdentifier] = true;

        require $file;
    }
}
