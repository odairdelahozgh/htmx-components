<?php

require '../vendor/autoload.php';

use HtmxComponents\Helpers\HtmxHelper;
use HtmxComponents\Enums\BootstrapStyle;

echo "<h1>Botones de Ejemplo</h1>";

echo HtmxHelper::button('Primary')
    ->style(BootstrapStyle::PRIMARY);

echo HtmxHelper::button('Secondary')
    ->style(BootstrapStyle::SECONDARY);

echo HtmxHelper::button('Success')
    ->style(BootstrapStyle::SUCCESS)
    ->hxPost('/api/success');

echo HtmxHelper::button('Danger')
    ->style(BootstrapStyle::DANGER)
    ->hxPost('/api/delete');

echo HtmxHelper::button('Warning')
    ->style(BootstrapStyle::WARNING);

echo HtmxHelper::button('Info')
    ->style(BootstrapStyle::INFO);

echo HtmxHelper::button('Light')
    ->style(BootstrapStyle::LIGHT);

echo HtmxHelper::button('Dark')
    ->style(BootstrapStyle::DARK);

echo HtmxHelper::button('Link')
    ->style(BootstrapStyle::LINK);
