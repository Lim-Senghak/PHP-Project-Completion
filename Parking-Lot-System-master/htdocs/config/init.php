<?php
// START SESSION
session_start();

// INCLUDE HELPERS
require_once 'helpers/system_helper.php';

// AUTOLOADER automatically load PHP class files as they are needed, which can save time and reduce errors. In this case, the autoloader requires files located in the lib/ directory
spl_autoload_register(function($class_name) {
    require_once 'lib/'.$class_name.'.php';
});
