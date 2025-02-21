<?php

namespace HtmxComponents\Components;

use HtmxComponents\Traits\HtmxAttributes;

class Button extends BaseComponent
{
  use HtmxAttributes;

  public function __construct(
    protected string $label, 
    array $attributes = []
  )
  {
    parent::__construct($attributes);
    $this->label = $label;
  }

  public function render(): string
  {
    $attributes = $this->renderAttributes();
    return "<button $attributes>{$this->label}</button>";
  }
  
}