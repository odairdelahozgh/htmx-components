<?php

namespace HtmxComponents\Components;

use HtmxComponents\Traits\HtmxAttributes;

class Table extends BaseComponent
{
  use HtmxAttributes;

  public function __construct(
    protected array $headers, 
    protected array $rows, 
    array $attributes = []
  )
  {
    parent::__construct($attributes);
  }

  public function render(): string
  {
    $attributes = $this->renderAttributes();
    
    $headerHtml = '<tr>';
    foreach ($this->headers as $header) 
    {
      $headerHtml .= "<th>{$header}</th>";
    }
    $headerHtml .= '</tr>';

    $rowsHtml = '';
    foreach ($this->rows as $row) 
    {
      $rowsHtml .= '<tr>';
      foreach ($row as $cell) 
      {
        $rowsHtml .= "<td>{$cell}</td>";
      }
      $rowsHtml .= '</tr>';
    }

    return "<table $attributes><thead>{$headerHtml}</thead><tbody>{$rowsHtml}</tbody></table>";
  }


}