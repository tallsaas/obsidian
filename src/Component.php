<?php

namespace Obsidian;

use Obsidian\Web\Attributes\TagName;
use Obsidian\Web\Attributes\ClassName;
use Obsidian\Web\Attributes\Style;

class Component
{
  protected TagName $tagName;

  protected Collection $className;

  protected Collection $style;

  public function __construct(TagName $tagName, ClassNames $classNames, Styles $styles)
  {
    $this->tagName    = $tagName;
    $this->classNames = $classNames;
    $this->styles     = $styles;
  }

  public function for(Collection $collection, mixed $itemType): void
  {
    //
  }

  public function className(string|array $className): void
  {
    $this->className = is_array($className)
  }

}