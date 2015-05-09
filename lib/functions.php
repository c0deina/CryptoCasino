<?php

/**
 * Called when an unknown class is referenced. Attempts to load the class
 *
 * @param string $className Class to load
 */
function __autoload($className) {
    $file = 'lib\\classes\\' . $className . '.class.php';
    if (file_exists($file)) {
        include_once($file);
    }
}