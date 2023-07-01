<?php

/**
 * DATABASE
 */

define('CONF_DB_HOST', 'localhost');
define('CONF_DB_USER', 'lucas');
define('CONF_DB_PASS', '1805');
define('CONF_DB_NAME', 'cms_panel');


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

define("CONF_URL_BASE", "https://localhost/panel-php");


/**
 * MESSAGE
 */

define("CONF_MESSAGE_CLASS", "trigger");
define("CONF_MESSAGE_INFO", "info");
define("CONF_MESSAGE_SUCCESS", "success");
define("CONF_MESSAGE_WARNING", "warning");
define("CONF_MESSAGE_ERROR", "error");


/**
 * DATE
 */

define("CONF_DATE_BR", "d/m/Y - H:i");

/**
 * SESSION
 */

 define("CONF_SES_PATH", __DIR__ . "/../../storage/sessions");


/**
* VIEWS
*/
define("CONF_VIEW_PATH", __DIR__ . "/../../assets/panel");
define("CONF_VIEW_THEME", "panel");
define("CONF_VIEW_EXT", "php");

/**
* UPLOAD
*/

define("CONF_UPLOAD_DIR", "storage");
define("CONF_UPLOAD_IMAGE_DIR", "images");

/**
* IMAGES
*/

define("CONF_IMAGE_CACHE", CONF_UPLOAD_DIR . "/" . CONF_UPLOAD_IMAGE_DIR . "/cache");
define("CONF_IMAGE_SIZE", 2000);
define("CONF_IMAGE_QUALITY", ["jpg" => 75, "png" => 5]);