<?php
/**
 * Created by PhpStorm.
 * User: hamidreza
 * Date: 4/2/20
 * Time: 3:04 AM
 */

define('PUBLIC_PATH', __DIR__ . '/public');

$uri = urldecode(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));
if ($uri !== '/' && file_exists(PUBLIC_PATH . $uri)) {
    return false;
}
$_GET['_url'] = $_SERVER['REQUEST_URI'];

require __DIR__.'/public/index.php';