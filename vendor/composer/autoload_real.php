<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInit746e5a89763e6cb3c3a3f1cca68dbf85
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

        require __DIR__ . '/platform_check.php';

        spl_autoload_register(array('ComposerAutoloaderInit746e5a89763e6cb3c3a3f1cca68dbf85', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInit746e5a89763e6cb3c3a3f1cca68dbf85', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInit746e5a89763e6cb3c3a3f1cca68dbf85::getInitializer($loader));

        $loader->register(true);

        $includeFiles = \Composer\Autoload\ComposerStaticInit746e5a89763e6cb3c3a3f1cca68dbf85::$files;
        foreach ($includeFiles as $fileIdentifier => $file) {
            composerRequire746e5a89763e6cb3c3a3f1cca68dbf85($fileIdentifier, $file);
        }

        return $loader;
    }
}

/**
 * @param string $fileIdentifier
 * @param string $file
 * @return void
 */
function composerRequire746e5a89763e6cb3c3a3f1cca68dbf85($fileIdentifier, $file)
{
    if (empty($GLOBALS['__composer_autoload_files'][$fileIdentifier])) {
        $GLOBALS['__composer_autoload_files'][$fileIdentifier] = true;

        require $file;
    }
}