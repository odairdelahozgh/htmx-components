<?php

namespace HtmxComponents\Components;

use HtmxComponents\Traits\HtmxAttributes;
use HtmxComponents\Enums\BootstrapStyle;

class Form extends BaseComponent
{
  use HtmxAttributes;

  public function __construct(
    protected string $action, 
    protected string $method = 'POST', 
    protected string $content = '', 
    array $attributes = []
  )
  {
    parent::__construct($attributes);
  }

  public function render(): string
  {
    $attributes = $this->renderAttributes();
    return "<form action=\"{$this->action}\" method=\"{$this->method}\" $attributes>{$this->content}</form>";
  }
  
}