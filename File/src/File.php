<?php

namespace DazzleSoftware\Toolchain\File;

use RuntimeException;

/**
 * Implements Universal File Reader.
 *
 * @package DazzleSoftware\Toolchain\File
 * @author Dazzle Software
 * @license MIT
 */
class File extends AbstractFile
{
    /**
     * Get/set parsed file contents.
     *
     * @param string|null $var
     * @return string
     * @throws RuntimeException
     */
    public function content($var = null)
    {
        /** @var string $content */
        $content = parent::content($var);

        return $content;
    }
}
