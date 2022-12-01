<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInit71f95eb28bf73afe5e0f7621dbaeaa89
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

        spl_autoload_register(array('ComposerAutoloaderInit71f95eb28bf73afe5e0f7621dbaeaa89', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInit71f95eb28bf73afe5e0f7621dbaeaa89', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInit71f95eb28bf73afe5e0f7621dbaeaa89::getInitializer($loader));

        $loader->register(true);

        $includeFiles = \Composer\Autoload\ComposerStaticInit71f95eb28bf73afe5e0f7621dbaeaa89::$files;
        foreach ($includeFiles as $fileIdentifier => $file) {
            composerRequire71f95eb28bf73afe5e0f7621dbaeaa89($fileIdentifier, $file);
        }

        return $loader;
    }
}

/**
 * @param string $fileIdentifier
 * @param string $file
 * @return void
 */
function composerRequire71f95eb28bf73afe5e0f7621dbaeaa89($fileIdentifier, $file)
{
    if (empty($GLOBALS['__composer_autoload_files'][$fileIdentifier])) {
        $GLOBALS['__composer_autoload_files'][$fileIdentifier] = true;

        require $file;
    }
}
