<?php
/**
 * User: @GeekNat
 * Date: Dec-03
 * Time: 9:28 PM
 */


function __autoload($className)
{

    $dirArray = array('.', 'lib', 'samples');

    foreach ($dirArray as $file) {

        if (file_exists($file . '/' . $className . '.php')) {
            require_once $file . '/' . $className . '.php';
            return;
        }

        if (file_exists($file . '/class.' . strtolower($className) . '.php')) {
            require_once $file . '/class.' . strtolower($className) . '.php';
            return;
        }

    }

    die("Class not found");
}