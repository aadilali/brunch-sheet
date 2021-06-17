<?php
/*
Plugin Name: Brunch Sheet Composer
Plugin URI: https://www.gavsblog.com
Description: Object oriented plugin skeleton
Version: 0.1
Author: Gav de Ste Croix
Author URI: https://www.gavsblog.com
*/


use BrunchSheet\BrunchData;

// if (!class_exists(BrunchData::class) && is_readable(__DIR__.'/vendor/autoload.php')) {
//     /** @noinspection PhpIncludeInspection */
//     require_once __DIR__.'/vendor/autoload.php';
// }


if (!class_exists(BrunchData::class) && is_readable(__DIR__.'/vendor/autoload.php')) {
    /** @noinspection PhpIncludeInspection */
    require_once __DIR__.'/vendor/autoload.php';
}

class_exists(BrunchData::class) && BrunchData::instance();
