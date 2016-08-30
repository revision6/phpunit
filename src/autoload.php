<?php

/**
 * Simple and lightweight autoloader for example project
 *
 * PHP version 5
 *
 * @package phpunit
 * @subpackage autpload
 * @author     Christopher Bölter
 * @copyright  revision6
 * @license    LGPL.
 */

// @codingStandardsIgnoreFile
// @codeCoverageIgnoreStart
// this is an autogenerated file - do not edit
spl_autoload_register(
    function ($class) {
        static $classes = null;
        if ($classes === null) {
            $classes = array(
                'revision6\\calculator\\calculator' => 'Calculator.php',
            );
        }

        $cn = strtolower($class);
        if (isset($classes[$cn])) {
            require __DIR__."/".$classes[$cn];
        }
    },
    true,
    false
);
// @codeCoverageIgnoreEnd