<?php

namespace HtmxComponents\Components;

use HtmxComponents\Traits\HtmxAttributes;
use HtmxComponents\Enums\BootstrapStyle;

class Modal extends BaseComponent
{
    use HtmxAttributes;

    public function __construct(protected string $content, array $attributes = [])
    {
        parent::__construct($attributes);
        $this->content = $content;
    }

    public function render(): string
    {
        $attributes = $this->renderAttributes();
        return "<div $attributes>{$this->content}</div>";
    }
}