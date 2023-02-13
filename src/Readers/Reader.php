<?php

declare(strict_types=1);

namespace PreemStudio\Payload\Readers;

use PreemStudio\Payload\Exceptions\InvalidFileTypeException;
use PreemStudio\Payload\Utils\File;

abstract class Reader
{
    public array $extensions = [];

    abstract public function read(string $path, ?string $class = null): array;

    public function assertValidExtension(string $path): void
    {
        $extension = File::extension($path);

        if (! in_array($extension, $this->extensions)) {
            throw new InvalidFileTypeException(
                sprintf('%s is an invalid file type for the %s class', $extension, get_class($this)));
        }
    }

    public function contents(string $path): ?string
    {
        $this->assertValidExtension($path);

        return File::contents($path);
    }

    public function get(string $path): ?array
    {
        $this->assertValidExtension($path);

        return File::get($path);
    }
}
