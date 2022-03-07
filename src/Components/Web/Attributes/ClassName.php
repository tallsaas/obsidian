<?php

namespace Obsidian\Components\Web\Attributes;

use Illuminate\Support\Collection;

class ClassName extends Collection 
{
  public function string()
  {
    return $this->implode(' ');
  }
}