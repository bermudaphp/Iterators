<?php

namespace Bermuda\Iterator;

trait IteratorToArray
{
    /**
     * @return array
     */
    public function toArray(): array
    {
        foreach ($this as $i => $item) $items[$i] = $item;
        return $items ?? [];
    }
}
