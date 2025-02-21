<?php

namespace HtmxComponents\Traits;

trait HtmxAttributes
{
    public function hxPost(string $url): self
    {
        $this->attributes['hx-post'] = $url;
        return $this;
    }

    public function hxGet(string $url): self
    {
        $this->attributes['hx-get'] = $url;
        return $this;
    }

    public function hxTrigger(string $event): self
    {
        $this->attributes['hx-trigger'] = $event;
        return $this;
    }

    public function hxTarget(string $target): self
    {
        $this->attributes['hx-target'] = $target;
        return $this;
    }

    public function hxSwap(string $swap): self
    {
        $this->attributes['hx-swap'] = $swap;
        return $this;
    }
}