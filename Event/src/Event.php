<?php

namespace DazzleSoftware\Toolchain\Event;

use DazzleSoftware\Toolchain\ArrayTraits\ArrayAccess;
use DazzleSoftware\Toolchain\ArrayTraits\Constructor;
use DazzleSoftware\Toolchain\ArrayTraits\Export;
use Symfony\Component\EventDispatcher\Event as BaseEvent;

/**
 * Implements Symfony Event interface.
 *
 * @package DazzleSoftware\Toolchain\Event
 * @author Dazzle Software
 * @license MIT
 * @deprecated Event classes will be removed in the future. Use PSR-14 implementation instead.
 */
class Event extends BaseEvent implements \ArrayAccess
{
    use ArrayAccess, Constructor, Export;

    /** @var array */
    protected $items = [];
}
