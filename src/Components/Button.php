<?php
namespace HtmxComponents\Components;
use HtmxComponents\Traits\HtmxAttributes;
use HtmxComponents\Enums\BootstrapStyle;

class Button extends BaseComponent
{
  use HtmxAttributes;
  protected BootstrapStyle $style;

  public function __construct(
    protected string $label,
    array $attributes = []
  ) {
    parent::__construct($attributes);
    $this->style(BootstrapStyle::PRIMARY);
  }

  public function style(BootstrapStyle $style): self
  {
    $this->style = $style;
    $classes = isset($this->attributes['class']) ? explode(' ', $this->attributes['class']) : [];
    // Remove existing bootstrap style classes
    $classes = array_filter($classes, function($c) {
      return strpos($c, 'btn-') !== 0;
    });
    // Add new style class
    $classes[] = 'btn-' . $this->style->value;
    // Ensure 'btn' class is present
    if (!in_array('btn', $classes))
    {
      array_unshift($classes, 'btn');
    }
    $this->attributes['class'] = implode(' ', array_unique($classes));
    return $this;
  }

  public function render(): string
  {
    $attributes = $this->renderAttributes();
    return "<button type=\"button\" $attributes>{$this->label}</button>";
  }

}
