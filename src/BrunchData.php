<?php

namespace BrunchSheet;

use BrunchSheet\CustomURL;

class BrunchData
{
    public function __construct()
    {
        echo '<h1>BRUNCH DATA CONSTRUCTOR FOR COMPOSER</h1>';
        new CustomURL();
    }

    public static function instance()
    {
        static $instance;
        if (! $instance) {
            $instance = new self();
        }

        return $instance;
    }
}
