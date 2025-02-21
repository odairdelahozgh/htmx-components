<?php

require 'vendor/autoload.php';

use HtmxComponents\Helpers\HtmxHelper;

$button = HtmxHelper::button('Click Me', ['hx-post' => '/api/click', 'hx-swap' => 'outerHTML']);
echo $button->render();