<?php

use Source\Core\Message;
/*
 * ############
 * ##VALIDATE##
 * ############
*/

/**
 * @param string $email
 * @return bool
 */
function is_email(string $email): bool
{
    return filter_var($email, FILTER_VALIDATE_EMAIL);
}

/**
 * @param string $pass
 * @return bool
 */
function is_passwd(string $pass): bool
{
    return (mb_strlen($pass) >= CONF_PASSWD_MIN_LEN && mb_strlen($pass) <= CONF_PASSWD_MAX_LEN ? true : false);
}

/**
 * @param string $password
 * @return string
 */
function passwd(string $password): string 
{
    return password_hash($password, CONF_PASSWD_ALGO, CONF_PASSWD_OPTION);
}

/**
 * @param string $password
 * @param string $hash
 * @return bool
 */
function passwd_verify(string $password, string $hash): bool
{
    return password_verify($password, $hash);
}


/**
 * ###############
 * ###   URL   ###
 * ###############
 */

 function url(string $path = null): string
 {
    if ($path) {
        return CONF_URL_BASE . "/" . ($path[0] == "/" ? mb_substr($path, 1) : $path);
    }

    return CONF_URL_BASE;
}

function theme(string $path = null) 
{
    if ($path) {
        return CONF_URL_BASE . "/themes/" . CONF_PANEL_THEME . "/" . ($path[0] == "/" ? mb_substr($path, 1) : $path);
    }

    return CONF_URL_BASE . "/themes/" . CONF_PANEL_THEME;
}

/**
 * ##############
 * ###  DATE  ###
 * ##############
 */

function date_fmt(?string $date = "now"): string
{
    if (!$date) {
        return '--';
    }
    return (new DateTime($date))->format(CONF_DATE_BR);
}

function toast(string $message = "", string $method = "success"): string
{
    $handle = new Message();
    return $handle->{$method}($message);
}
