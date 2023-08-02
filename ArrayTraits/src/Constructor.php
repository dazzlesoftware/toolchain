<?php

namespace DazzleSoftware\Toolchain\ArrayTraits;

/**
 * Implements Constructor for setting items.
 *
 * @package DazzleSoftware\Toolchain\ArrayTraits
 * @author Dazzle Software
 * @license MIT
 */
trait Constructor
{
    /**
     * Constructor to initialize array.
     *
     * @param array $items Initial items inside the iterator.
     */
    public function __construct(array $items = [])
    {
        $this->items = $items;
    }
}
