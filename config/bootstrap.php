<?php
use \lithium\core\Libraries;

/**
 * This is the path to the li3_HTMLPurifier plugin, used for Libraries path resolution.
 */
define('LI3_HTMLPurifier_PATH', dirname(__DIR__));

/**
 * Add the HTMLPurifier libraries
 */
Libraries::add('HTMLPurifier', array(
    "path" => LI3_HTMLPurifier_PATH . "/libraries/HTMLPurifier/HTMLPurifier",
    "includePath" => LI3_HTMLPurifier_PATH . "/libraries/HTMLPurifier/HTMLPurifier",
    "prefix" => "HTMLPurifier_",
    "bootstrap" => "Bootstrap.php",
    "loader" => array("HTMLPurifier_Bootstrap", "autoload"),
));
