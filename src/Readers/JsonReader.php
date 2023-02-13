<?php

declare(strict_types=1);

namespace PreemStudio\Payload\Readers;

use PreemStudio\Payload\Unserialisers\JsonUnserialiser;

class JsonReader extends Reader
{
    protected array $extensions = ['json'];

    public function read(string $path, ?string $class = null): array
    {
        return (new JsonUnserialiser())->unserialise($this->contents($path), $class);
    }
}
