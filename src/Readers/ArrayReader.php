<?php

declare(strict_types=1);

namespace PreemStudio\Payload\Readers;

use PreemStudio\Payload\Deserialisers\ArrayDeserialiser;

class ArrayReader extends Reader
{
    public array $extensions = ['php'];

    public function read(string $path, ?string $class = null): array
    {
        return (new ArrayDeserialiser)->deserialise($this->get($path), $class);
    }
}
