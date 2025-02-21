<?php

namespace HtmxComponents\Components;

use HtmxComponents\Traits\HtmxAttributes;
use HtmxComponents\Enums\BootstrapStyle;

class Button extends BaseComponent
{
  use HtmxAttributes;

  public function __construct(
    protected string $label, 
    protected BootstrapStyle $style = BootstrapStyle::PRIMARY, 
    array $attributes = []
  )
  {
    parent::__construct($attributes);
    $this->attributes['class'] = 'btn btn-' . $this->style->value;
  }

  public function render(): string
  {
    $attributes = $this->renderAttributes();
    return "<button type=\"button\" $attributes>{$this->label}</button>";
  }
  
}