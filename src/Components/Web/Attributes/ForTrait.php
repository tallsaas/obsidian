<?php

namespace Obsidian\Components\Web\Attributes;

use Iluminate\Support\Collection;

trait ForTrait
{
  public Collection $for;

  // <List for="$users, User::class"><Avatar src="$user->image_url"></List>
  public function for(Collection|array $collection, string $modelClass): void
  {
    $collection = $collection::class === Collection::class ? $collection : new Collection($collection);

    if (!class_exists($modelClass)) :
      throw new \Exception();
    endif;

    $this->for = $collection->whereInstanceOf($modelClass);
  }
}