<?php

namespace DazzleSoftware\Toolchain\ArrayTraits;

use function count;

/**
 * Implements \Countable interface.
 *
 * @package DazzleSoftware\Toolchain\ArrayTraits
 * @author Dazzle Software
 * @license MIT
 */
trait Countable
{
    /**
     * Implements Countable interface.
     *
     * @return int
     */
    #[\ReturnTypeWillChange]
    public function count()
    {
        return count($this->items);
    }
}
