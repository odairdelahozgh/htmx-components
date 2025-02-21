<?php
/**
 * Este archivo contiene la clase base 
 * de la que heredarán todos los componentes.
 *
 * @author odairdelahoz@gmail.com
 * @version 1.0
 * @date 20/02/2025
 */

namespace HtmxComponents\Components;

abstract class BaseComponent
{
    public function __construct(protected array $attributes = [])
    {

    }

    protected function renderAttributes(): string
    {
        $attrs = [];
        foreach ($this->attributes as $key => $value) {
            $attrs[] = "$key=\"$value\"";
        }
        return implode(' ', $attrs);
    }

    abstract public function render(): string;
}