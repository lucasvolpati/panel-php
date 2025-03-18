<?php

/**
 * DATABASE
 */

const CONF_DB_DRIVER = 'mysql';
const CONF_DB_HOST = 'mysql';
const CONF_DB_USER = 'sail';
const CONF_DB_PASS = '1234';
const CONF_DB_NAME = 'dev';


/**
 * PASSWORD
 */

const CONF_PASSWD_MIN_LEN = 8;
const CONF_PASSWD_MAX_LEN = 40;
const CONF_PASSWD_ALGO = PASSWORD_DEFAULT;
const CONF_PASSWD_OPTION = ["cost" => 10];


/**
 * URLS
 */

const CONF_URL_BASE = "http://localhost:8000";


/**
 * MESSAGE
 */

const CONF_MESSAGE_CLASS = "trigger";
const CONF_MESSAGE_INFO = "info";
const CONF_MESSAGE_SUCCESS = "success";
const CONF_MESSAGE_WARNING = "warning";
const CONF_MESSAGE_ERROR = "error";


/**
 * DATE
 */

const CONF_DATE_BR = "d/m/Y - H:i";

/**
 * SESSION
 */

const CONF_SES_PATH = __DIR__ . "/../../storage/sessions";


/**
* VIEWS
*/
const CONF_VIEW_PATH = __DIR__ . "/../../assets/panel";
const CONF_VIEW_THEME = "panel";
const CONF_VIEW_EXT = "php";

/**
* UPLOAD
*/

const CONF_UPLOAD_DIR = "storage";
const CONF_UPLOAD_IMAGE_DIR = "images";

/**
* IMAGES
*/

const CONF_IMAGE_CACHE = CONF_UPLOAD_DIR . "/" . CONF_UPLOAD_IMAGE_DIR . "/cache";
const CONF_IMAGE_SIZE = 2000;
const CONF_IMAGE_QUALITY = ["jpg" => 75, "png" => 5];
