<?php

/**
 * DATABASE
 */

define('CONF_DB_HOST', 'localhost');
define('CONF_DB_USER', 'lucas');
define('CONF_DB_PASS', 'Luk1805@');
define('CONF_DB_NAME', 'panel-peach');


/**
 * PASSWORD
 */

define("CONF_PASSWD_MIN_LEN", 8);
define("CONF_PASSWD_MAX_LEN", 40);
define("CONF_PASSWD_ALGO", PASSWORD_DEFAULT);
define("CONF_PASSWD_OPTION", ["cost" => 10]);


/**
 * URLS
 */

define("CONF_URL_BASE", "http://localhost/Peach/panel-php");


/**
 * MESSAGE
 */

define("CONF_MESSAGE_CLASS", "trigger");
define("CONF_MESSAGE_INFO", "info");
define("CONF_MESSAGE_SUCCESS", "success");
define("CONF_MESSAGE_WARNING", "warning");
define("CONF_MESSAGE_ERROR", "error");


/**
 * SESSION
 */

 define("CONF_SES_PATH", __DIR__ . "/../../storage/sessions");