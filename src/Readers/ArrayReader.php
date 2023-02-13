<?php

declare(strict_types=1);

namespace PreemStudio\Payload\Readers;

use PreemStudio\Payload\Unserialisers\ArrayUnserialiser;

class ArrayReader extends Reader
{
    protected $extensions = ['php'];

    public function read(string $path, ?string $class = null): array
    {
        return (new ArrayUnserialiser())->unserialise($this->get($path), $class);
    }
}
