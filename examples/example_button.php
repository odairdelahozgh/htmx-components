<?php

require '../vendor/autoload.php';

use HtmxComponents\Helpers\HtmxHelper;
use HtmxComponents\Enums\BootstrapStyle;

echo HtmxHelper::button('Click Me')
    ->hxPost('/api/click')
    ->hxSwap('outerHTML')
    ->style(BootstrapStyle::SUCCESS);
