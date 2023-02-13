<?php

declare(strict_types=1);

namespace PreemStudio\Payload\Readers;

use PreemStudio\Payload\Deserialisers\JsonDeserialiser;

class JsonReader extends Reader
{
    public array $extensions = ['json'];

    public function read(string $path, ?string $class = null): array
    {
        return (new JsonDeserialiser)->deserialise($this->contents($path), $class);
    }
}
