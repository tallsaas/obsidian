<?php

namespace Obsidian\Components\Web;

use Obsidian\Components\Web\Attributes\TagName;
use Obsidian\Components\Web\Attributes\ClassName;
use Obsidian\Components\Web\Attributes\ClassNameTrait;
use Obsidian\Components\Web\Attributes\Style;
use Obsidian\Components\Web\Attributes\StyleTrait;
use Obsidian\Components\Web\Attributes\TagNameTrait;
use Obsidian\Components\Web\Attributes\ForTrait;

use Obsidian\Components\Web\ComponentCollection;
use Obsidian\Components\Web\AttributeCollection;

use Illuminate\Support\Collection;

class Component
{
  use StyleTrait, ClassNameTrait, TagNameTrait, ForTrait;

  public function __construct(
    TagName|string $tagName = null, 
    ClassName|array|string $className = null, 
    Style|array|string $style = null
  )
  {
    if ($tagName) :
      $this->tagName($tagName);
    endif;

    if ($className) :
      $this->className($className);
    else :
      $this->className = new ClassName;
    endif;

    if ($style) :
      $this->style($style);
    else :
      $this->style = new Style;
    endif;
  }

  public function attributes()
  {
    return new AttributeCollection([
      'class' => $this->className->string(),
      'style' => $this->style->string(),
      //...
    ]);
  }

  // Could pass child elements to this one
  // and print together
  public function printWithChildren(...$params): string
  {
    if (count($params)) :
      new ComponentCollection($params);
    endif;

    return $html;
  }

  public function print(): string 
  {
    if ($this->for->count()) :
      $component = $this;
      $componentType = $this::class;

      $html.= $this->for->map(function($item) use ($component) {
        $forComponent = $component;
        $forComponent->data = $item;

        return $forComponent->print();
      });
    endif;

    return $this->htmlTag(
      $this->attributes(),
      $content = '',
      $children = null
    );
  }

}