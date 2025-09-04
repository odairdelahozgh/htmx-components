<?php
namespace HtmxComponents\Helpers;

use HtmxComponents\Enums\BootstrapStyle;
use HtmxComponents\Components\Button;
use HtmxComponents\Components\Modal;
use HtmxComponents\Components\Form;
use HtmxComponents\Components\Table;

class HtmxHelper
{
  
  public static function button(
    string $label, 
    array $attributes = []
  ): Button
  {
    return new Button($label, $attributes);
  }

  public static function modal(
    string $content, 
    array $attributes = []
  ): Modal
  {
    return new Modal($content, $attributes);
  }

  public static function form(
    string $action, 
    string $method = 'POST', 
    string $content = '', 
    array $attributes = []
  ): Form
  {
    return new Form($action, $method, $content, $attributes);
  }

  public static function table(
    array $headers, 
    array $rows, 
    array $attributes = []
  ): Table
  {
    return new Table($headers, $rows, $attributes);
  }
  
}