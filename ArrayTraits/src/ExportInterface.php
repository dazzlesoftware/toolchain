<?php

namespace DazzleSoftware\Toolchain\ArrayTraits;

/**
 * Defines Export interface.
 *
 * @package DazzleSoftware\Toolchain\ArrayTraits
 * @author Dazzle Software
 * @license MIT
 */
interface ExportInterface
{
    /**
     * Convert object into an array.
     *
     * @return array
     */
    public function toArray();

    /**
     * Convert object into YAML string.
     *
     * @param int $inline
     * @param int $indent
     * @return string
     */
    public function toYaml($inline = 3, $indent = 2);

    /**
     * Convert object into JSON string.
     *
     * @return string
     */
    public function toJson();
}
